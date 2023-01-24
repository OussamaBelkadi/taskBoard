<?php
    abstract class usermt{
        abstract public function register($data);
        abstract public function login($email);
        // abstract public function logout();
    }
    class user extends usermt{
        public function register($data){
            $stmt = DB::connect()->prepare("INSERT INTO `user`(`pseudo`, `email`, `password`, `confirmepw`) VALUES (:pseudo, :email, :password, :repassword)");
            $stmt->bindParam(':pseudo', $data['pseudo']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':password', $data['password']);
            $stmt->bindParam(':repassword', $data['repassword']);
            $stmt->execute();
        }

        public function login($email){
            $stmt = DB::connect()->prepare("SELECT id,pseudo,email,password FROM user WHERE email=:email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            return $stmt->fetchObject();
        }
    }
?>