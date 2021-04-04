<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function __construct(){
        helper(['url','form']);
    }
    public function index()
    {
        //echo 'Hello World!';
        return view('auth/login');
    }
    public function register(){
        return view('auth/register');
    }
    public function save(){
        //echo 'Registration Successful!';
        //lets validate fields
        /* $validation = $this->validate([
            'name'=>'required',
            'email'=>'required|valid_email|is_unique[users.email]',
            'password'=>'required|min_length[5]|max_length[12]',
            'cpassword'=>'required|min_length[5]|max_length[12]|matches[password]'
        ]);  */

        $validation = $this->validate([
            'name'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Your Full Name is Required'
                ]
            ],
            'email'=>[
                'rules'=>'required|valid_email|is_unique[users.email]',
                'errors'=>[
                    'required'=>'Email is Required',
                    'valid_email'=>'you must enter a valid email',
                    'is_unique'=>'email already taken'
                 ]
            ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required'=>'Password is required',
                     'min_length'=>'Password must have 5 characters in length',
                     'max_length'=>'Password must not have characters more than 12 in length'
                ]
            ],
            'cpassword'=>[
                'rules'=>'required|min_length[5]|max_length[12]|matches[password]',
                'errors'=>[
                    'required'=>'Confirm Password is required',
                     'min_length'=>' Confirm Password must have 5 characters in length',
                     'max_length'=>'Confirm Password must not have characters more than 12 in length',
                     'matches'=>'Confirm Password not matches to password'
                ]
            ]
        ]);
        if(!$validation){
            return view('auth/register',['validation'=>$this->validator]);
        }else{
            //echo 'Form Validated Successful!';
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $values = [
                'name'=>$name,
                'email'=>$email,
                'password'=>$password,
            ];
            $usersModel = new \App\Models\UsersModel();
            $query = $usersModel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail','Something went wrong');
                return redirect()->to('register')->with('Success','You are now registered successfully!');
            }
        }
    }
}