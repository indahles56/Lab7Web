<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $title = 'Daftar User';
        $model = new UserModel();
        $users = $model->findAll();
        return view('user/index', compact('users', 'title'));
    }

    public function login()
{
    helper(['form']);
    $email = $this->request->getPost('email');
    $password = (string) $this->request->getPost('password');
    if (!$email)
    {
        return view('login');
    }

    $session = session();
    $model = new UserModel();
    $login = $model->where('useremail', $email)->first();
    if ($login)
    {
        $pass = $login['userpassword']; // Assuming the password field is named 'password'
        if (is_array($pass)) {
            $pass = $pass['userpassword']; // Modify this according to your actual array structure
        }

        if (password_verify($password, $pass))
        {
            $login_data = [
                'user_id' => $login['id'],
                'user_name' => $login['username'],
                'user_email' => $login['useremail'],
                'logged_in' => TRUE,
            ];
            $session->set($login_data);
            return redirect('admin/artikel');
        }
        else
        {
            $session->setFlashdata("flash_msg", "Password salah.");
            return redirect()->to('/user/login');
        }
    }
    else
    {
        $session->setFlashdata("flash_msg", "Email tidak terdaftar.");
        return redirect()->to('/user/login');
    }
}
public function logout()
{
    session()->destroy();
    return redirect()->to('/user/login');
}

}