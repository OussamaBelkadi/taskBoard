<?php
    class Task{
        public static function addmultiple($data){
            $stmt = DB::connect()->prepare("INSERT INTO task (`description`,`id_project`,`date`) VALUES (:description,:idproject,:date)");
            $stmt->bindParam(':description', $data['content']);
            $stmt->bindParam(':idproject', $data['id_project']);
            $stmt->bindParam(':date', $data['date']);
            $stmt->execute();
        }
        // INSERT NEW TODO TASK
        public static function add($data){
            $stmt = DB::connect()->prepare("INSERT INTO task (`description`,`id_project`,`date`) VALUES (:description,:idproject,:date)");
            $stmt->bindParam(':description', $data['content']);
            $stmt->bindParam(':idproject', $data['id_project']);
            $stmt->bindParam(':date', $data['date']);
            $stmt->execute();
        }
        // DISPLAY TODO TASK
        public static function desplaytask($id){
            $stmt = DB::connect()->prepare("SELECT id,description,date FROM task WHERE id_project = :id ORDER BY date ASC");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        // SELECT OF UPDATE TO DO TASK
        public function selectodo($id){
            $stmt = DB::connect()->prepare("SELECT id,description,date,id_project FROM `task` WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        }
        public function inserttodo($content){
            $stmt = Db::connect()->prepare("UPDATE `task` SET `description`=:description, `date`=:date where id=:id");
            $stmt->bindParam(':description',$content['content']);
            $stmt->bindParam(':date',$content['date']);
            $stmt->bindParam(':id', $content['id']);
            $stmt->execute();
        }
         // DELETE OPARATION TODO
        public function indice(){
            $stmt = DB::connect()->prepare("SELECT id FROM task");
            $stmt->execute();
            return $stmt->fetchColumn();
        }
        public function delete($id){
            $stmt = DB::connect()->prepare("DELETE FROM `task` WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute(); 
        }
        //COUNT OF ELEMENT TODO
        public function numtask(){
            $stmt = DB::connect()->prepare("SELECT COUNT(id) FROM task");
            $stmt->execute();
            return $stmt->fetchColumn();
        }
        public function deletetodo($id){
            $stmt = DB::connect()->prepare("DELETE FROM `task` WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
        // SELECT CONDITION 'ID'
        public function selecttodo($id){
            $stmt = DB::connect()->prepare("SELECT description,id_project,date FROM task WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        }
         // ADD OPARATION DOING
        public function adddoing($resulte){
            $stmt = DB::connect()->prepare("INSERT INTO doing (`description`,`id_product`,`date`) VALUES (:description,:idproject,:date)");
            $stmt->bindParam(':description',$resulte['description']);
            $stmt->bindParam(':date',$resulte['date']);
            $stmt->bindParam(':idproject', $resulte['id_project']);
            $stmt->execute();
        }
        // Update DOING TASK
        public function selecdoing($id){
            $stmt = DB::connect()->prepare("SELECT id,description,date FROM doing WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        }
        public function insertupdatedoing($content){
            $stmt = Db::connect()->prepare("UPDATE doing SET `description`=:description, `date`=:date where id=:id");
            $stmt->bindParam(':description',$content['content']);
            $stmt->bindParam(':date',$content['date']);
            $stmt->bindParam(':id', $content['id']);
            $stmt->execute();
        }
        // DELETE OPARATION DOING
        public function indicedoing(){
            $stmt = DB::connect()->prepare("SELECT id FROM doing");
            $stmt->execute();
            return $stmt->fetchColumn();
        }
        
        //DESPLAY TASK DOING 
        public static function desplaydoing($id){
            $stmt = DB::connect()->prepare("SELECT id,description,date FROM doing WHERE id_product = :id ORDER BY date ASC");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        //DELETE FROM doing WITH CONDITION 'ID' && ADD DONE TASK
        public function selectdoing($id){
            $stmt = DB::connect()->prepare("SELECT description,id_product,date FROM doing WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        }
        // Update DOING TASK
        public static function selecdone($id){
            $stmt = DB::connect()->prepare("SELECT id,description,date FROM done WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        }
        public static function insertupdatedone($content){
            $stmt = Db::connect()->prepare("UPDATE done SET `description`=:description,`date`= :date where id=:id");
            $stmt->bindParam(':description',$content['content']);
            $stmt->bindParam('date', $content['date']);
            $stmt->bindParam(':id', $content['id']);
            $stmt->execute();
        }
        public function deletedoing($id){
            $stmt = DB::connect()->prepare("DELETE FROM `doing` WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
       
        public function adddone($resulte){
            $stmt = DB::connect()->prepare("INSERT INTO done (`description`,`id_project`,`date`) VALUES (:description,:idproject,:date)");
            $stmt->bindParam(':description',$resulte['description']);
            $stmt->bindParam('date',$resulte['date']);
            $stmt->bindParam(':idproject',$resulte['id_product']);
            $stmt->execute();
        }




        //--DESPLAY DONE ELEMENT
        public static function desplaydone($id){
                $stmt = DB::connect()->prepare("SELECT id,description,date FROM done WHERE id_project = :id ORDER BY date ASC");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                return $stmt->fetchAll();
        }
        //DELETE FROM done WITH CONDITION 'ID' && ADD TO ARCHIV TASK
        public static function indicedone(){
            $stmt = DB::connect()->prepare("SELECT id FROM done");
            $stmt->execute();
            return $stmt->fetchColumn();
        }
        public static function deletedone($id){
            $stmt = DB::connect()->prepare("DELETE FROM `done` WHERE id=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
    }
?>