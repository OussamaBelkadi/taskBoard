<?php

    class Projectlist{
        public function tt($iduser){
            $stmt = DB::connect()->prepare("SELECT nom,id FROM `project` WHERE id_user = :id");
            $stmt->bindParam(':id', $iduser);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function create($data)
        {
            $stmt = DB::connect()->prepare("INSERT INTO project (`nom`,`id_user`) VALUES (:namelist,:id_user)");
            $stmt->bindParam(':namelist', $data['namelist']);
            $stmt->bindParam(':id_user', $data['id_user']);
            $stmt->execute();
        }
       
    }
?>