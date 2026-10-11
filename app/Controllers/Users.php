<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $users = $userModel->findAll();

        return view('users', [
            'users' => $users
        ]);
    }

    public function createForm()
    {
        return view('user_form', [
            'formTitle' => 'Add User',
            'user' => []
        ]);
    }

    public function create()
    {
        $rules = [
            'username' => 'required|max_length[50]|is_unique[users.username]',
            'full_name' => 'required|max_length[100]',
            'password' => 'required|min_length[8]|max_length[255]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $userModel->insert([
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),
            'avatar' => null,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/users')
            ->with('success', 'User added successfully.');
    }

    public function edit($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (!$user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('user_form', [
            'formTitle' => 'Edit User',
            'user' => $user
        ]);
    }

    public function update($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (!$user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'username' => 'required|max_length[50]',
            'full_name' => 'required|max_length[100]',
            'password' => 'permit_empty|min_length[8]|max_length[255]',
            'avatar' => 'permit_empty|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]|max_size[avatar,2048]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $username = $this->request->getPost('username');

        $existingUser = $userModel
            ->where('username', $username)
            ->where('id !=', $id)
            ->first();

        if ($existingUser) {
            return redirect()->back()
                ->withInput()
                ->with('errors', [
                    'username' => 'That username is already being used.'
                ]);
        }

        $updateData = [
            'username' => $username,
            'full_name' => $this->request->getPost('full_name')
        ];

        $newPassword = $this->request->getPost('password');

        if (!empty($newPassword)) {
            $updateData['password'] = password_hash(
                $newPassword,
                PASSWORD_DEFAULT
            );
        }

        $avatarName = $user['avatar'];
        $avatar = $this->request->getFile('avatar');

        if ($avatar && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
            $avatarName = $avatar->getRandomName();

            $uploadPath = FCPATH . 'uploads/users/';

            $imageService = \Config\Services::image();

            $imageService
                ->withFile($avatar->getTempName())
                ->fit(200, 200, 'center')
                ->save($uploadPath . $avatarName);

            $updateData['avatar'] = $avatarName;
        }

        $userModel->update($id, $updateData);

        return redirect()->to('/users')
            ->with('success', 'User updated successfully.');
    }
}