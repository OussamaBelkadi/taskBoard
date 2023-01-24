<?php
    class Usercontroller{
        public function register(){
            if(isset($_POST['submit'])){
                if ($_POST['password'] === $_POST['repassword']) {
                    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
                    $repassword = password_hash($_POST['repassword'], PASSWORD_DEFAULT);
                    $data = array(
                        'pseudo'=>$_POST['pseudo'],
                        'email'=>$_POST['email'],
                        'password'=>$password,
                        'repassword'=>$repassword              
                    );
                    $register = new user;
                    $register->register($data);
                    View::load('home');
                    die();
                }///ADD condition for paswword is not corect 
            }
        }

        public function login(){
            if(isset($_POST['login'])) {
                $email=$_POST['emaillogin'];
                $password=$_POST['passwordlogin'];
                $login = new user;
                $result = $login->login($email);
                if (password_verify($password, $result->password)) {
                    session_start();
                    $_SESSION['pseudo']=$result->pseudo;
                    $_SESSION['id_user']=$result->id;
                    header('location:'.BURL.'/Project/project');
                    die();
                }else{
                    View::load('home');
                    die();
                }
            }
        }
        public function logout(){
            session_unset();
            View::load('home');
            die();
        }
    }
?>