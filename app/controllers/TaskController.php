<?php

    class TaskController
    {
        public function  addmultiple($idproject){
            if (isset($_POST['submit'])) {
                $number = $_POST["select"];
                
                for($i=1;$i<=$number;$i++){
                    $date[$i] = date('Y-m-d', strtotime($_POST['date'.($i)]));
                    // print_r($date[$i]);
                    $data =  array(
                        'content'=>$_POST['content'.($i)],
                        'id_project'=>$idproject,
                        'date'=>date('Y-m-d', strtotime($_POST['date'.($i)]))
                    );
                    $task = new Task;
                    $task::addmultiple($data);
                    session_start();
                    $id = $_SESSION['idproject'];
                    header('location:'.BURL.'/Task/displaytask/'.$id);

                }
            }
        }
        public function add($idproject){
            if (isset($_POST['submit'])) {
                $date = date('Y-m-d', strtotime($_POST['date']));
                $data =  array(
                        'content'=>$_POST['content'],
                        'id_project'=>$idproject,
                        'date'=>$date
                );
                $task = new Task;
                $task::add($data);
                session_start();
                $id = $_SESSION['idproject'];
                header('location:'.BURL.'/Task/displaytask/'.$id);
                
            }
        }  
        // Update TODO TASK
        public function updatetodo($id){
            $retour = new Task;
            $data['element']=$retour->selectodo($id);
            View::load('Update',$data);
        }
        public function insertupdate($id){

            $content=array ('content'=>$_POST['content'],
            'date'=>$_POST['date'],
            'id'=>$id);
            $insert=new Task;
            $insert->inserttodo($content);
            session_start();
                $id = $_SESSION['idproject'];
                header('location:'.BURL.'/Task/displaytask/'.$id);
        }
        // DELETE OPARATION
        public function deletetask(){
            $indice= new Task;
            $id=$indice->indice();
            $indice->delete($id);
            session_start();
                $id = $_SESSION['idproject'];
                header('location:'.BURL.'/Task/displaytask/'.$id);
        }


        public function addtodoing($id){
            $addtodoing = new Task;
            $resulte=$addtodoing->selecttodo($id);
            $addtodoing->adddoing($resulte);
            $deletetodo = new Task;
            $deletetodo->deletetodo($id);
            session_start();
            $id = $_SESSION['idproject'];
            header('location:'.BURL.'/Task/displaytask/'.$id);
            
        } 
        // Update DOING
        public function updatedoing($id){
            $retour = new Task;
            $data['element']=$retour->selecdoing($id);
            View::load('Updatedoing',$data);
        }
        public function insertupdatedoing($id){
            if (isset($_POST['submit'])) {
                $content=array ('content'=>$_POST['content'],
                'date'=>$_POST['date'],
                'id'=>$id);
                $insert=new Task;
                $insert->insertupdatedoing($content);
                session_start();
                $id = $_SESSION['idproject'];
                header('location:'.BURL.'/Task/displaytask/'.$id);
            }
            
        }
        public function returnl(){
            session_start();
            $id = $_SESSION['idproject'];
            header('location:'.BURL.'/Task/displaytask/'.$id);
        }
        // DELETE DOING
        public function deletedoing(){
            $indice= new Task;
            $id=$indice->indicedoing();
            $indice->deletedoing($id);
            session_start();
                $id = $_SESSION['idproject'];
                header('location:'.BURL.'/Task/displaytask/'.$id);
        }

        public function adddone($id){
            $adddone = new Task;
            $resulte=$adddone->selectdoing($id);
            $adddone->adddone($resulte);
            $deletetodo = new Task;
            $deletetodo->deletedoing($id);
            session_start();
            $id = $_SESSION['idproject'];
            header('location:'.BURL.'/Task/displaytask/'.$id);
            
        } 
        //DELETE FROM DONE
        //EXEMPLE STATIC
        public function deletedone(){
            // $indice= new Task;
            $id=Task::indicedone();
            Task::deletedone($id);
            session_start();
                $id = $_SESSION['idproject'];
                header('location:'.BURL.'/Task/displaytask/'.$id);
        }
        //UPDATE DONE TASK
        public function updatedone($id){
            $retour = new Task;
            $data['element']=$retour::selecdone($id);
            View::load('Updatedone',$data);
        }
        public function insertupdatedone($id){
            if (isset($_POST['submit'])) {
                $content=array ('content'=>$_POST['content'],
                'date'=>$_POST['date'],
                'id'=>$id);
                $insert=new Task;
                $insert::insertupdatedone($content);
                session_start();
                $id = $_SESSION['idproject'];
                header('location:'.BURL.'/Task/displaytask/'.$id);
            }
            
        }
        public function displaytask($id){
            $task = new Task;
            session_start();
            $_SESSION['idproject'] = $id;
            $idref = $_SESSION['idproject'];
            $result['doing']=$task::desplaydoing($id);
            $result['task']=$task::desplaytask($id);
            $result['done']=$task::desplaydone($id);
            View::load('list',$result);
        }   
    }
?>