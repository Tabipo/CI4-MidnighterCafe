<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        $session = session();

        $validation = \Config\Services::validation();
        $request = service('request');

        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        $post = $request->getPost();
        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }
        $email = $request->getPost('email');

        $userModel = new \App\Models\UsersModel();
        $user = $userModel->where('email', $email)->first();
        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);
        if (! password_verify($request->getPost('password'), $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $session->set('user', [
            'id' => $userArr['id'] ?? null,
            'email' => $userArr['email'] ?? null,
            'firstName' => $userArr['firstName'] ?? null,
            'lastName' => $userArr['lastName'] ?? null,
            'type' => $userArr['type'] ?? 'client',
        ]);

        $type = strtolower($userArr['type'] ?? 'client');
        if ($type === 'manager') {
            return redirect()->to('/adminDashboard');
        }

        if ($type === 'client') {
            return redirect()->to('/');
        }
    }
    public function logout()
    {
        session()->destroy();

        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
        return redirect()->to('/');
    }
    public function signup()
    {
        $session = session();

        $request = service('request');
        $validation = \Config\Services::valdiation();

        $validation->setRule('firstName', 'First Name', 'required|min_length[1]|max_length[100]');
        $validation->setRule('middleName', 'Middle Name', 'permit_empty|max_length[100]');
        $validation->setRule('lastName', 'Last Name', 'required|min_length[1]|max_length[100]');
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required|min_length[8]');

        $post = $request->getPost();
        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $userModel = new \App\Models\UsersModel();
        if ($userModel->where('email', $post['email'])->first()) {
            $session->setFlashdata('errors', ['email' => 'Email has already been registered']);
            $session->setFlashdata('old', ['email' => $post]);
            return redirect()->back()->withInput();
        }

        $data = [
            'firstName' => $post['firstName'],
            'middleName' => $post['middleName'] ?? null,
            'lastName' => $post['lastName'],
            'email' => $post['email'],
            'password' => password_hash($post['password'], PASSWORD_DEFAULT),
            'type' => 'client',
        ];

        $inserted = $userModel->insert($data);
        if ($inserted === false) {
            $session->setFlashdata('errors', 'Failed to create account.');
            $session->setFlashdata('old', ['email' => $post]);
            return redirect()->back()->withInput();
        }

        $session->setFlashdata('success', 'Account creation successful!');
        return redirect()->to('/login');
    }
}
