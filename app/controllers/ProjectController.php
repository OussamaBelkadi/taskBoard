<?php
    class ProjectController{
        public function project(){
            session_start();
    
        $task = new Task;
        $iduser = $_SESSION['id_user'];
        $project = new Projectlist;       
        $result['project']=$project->tt($iduser);
       
            $_SESSION['counttodo']=$task->numtask();
            // $_SESSION['countdoing'] = $task->numtaskdoing();
            // $_SESSION['countdone'] = $task->numtaskdone();
            View::load('project',$result);
        }
        public function createlist(){
            if(isset($_POST['submit'])){
                session_start();
                $id_user=$_SESSION['id_user'];
                $data = array(
                    'namelist' => $_POST['namelist'],
                    'id_user' => $id_user
                );
                $createlist = new Projectlist;
                $createlist->create($data);
                $iduser = $_SESSION['id_user'];
                
                $result['project']=$createlist->tt($iduser);
                View::load('project',$result);
            }
            
        }
    }
?>