<?php


namespace App\classes;


class Authentication
{
    public $user=[], $email,$password;

    public function __construct($post = null)
    {
        if (!empty($post))
        {
            $this->email = $post['email'];
           $this->password = $post['Password'];
        }
        $this->user = [
            0 => [
                'id' => 1,
                'name' => 'Kazi-Ibrahim',
                'email' => 'kazi@gmail.com',
                'password' => '193002114',
            ],
            1 => [
                'id' => 2,
                'name' => 'Ibrahim',
                'email' => 'ibrahim@gmail.com',
                'password' => '193002',
            ],
            2 => [
                'id' => 3,
                'name' => 'Ahad',
                'email' => 'ahad@gmail.com',
                'password' => '193',
            ],
        ];
    }
    public function login()
    {
        foreach ($this->user as $user)
        {
            if ($user['email'] == $this->email && $user['password'] == $this->password)
            {
                header('Location: route.php?page=home');
            }
        }
        echo 'email or password invalid';
        exit();
    }

}