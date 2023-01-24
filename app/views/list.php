<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/upload/css/list.css">
    <title>Project</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white shadow mb-5">
    <div class="container-fluid d-flex justify-content-between align-content-center" style="gap: 88%;">
     
        <a class="navbar-brand" href="#"><img src="/upload/img/tz.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
    
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          

          <form class="d-flex">
          <a class="btn-logout mx-1 btnlogout" href="<?php echo '/user/logout' ?>"><button type="button" class="btn me-lg-2 me-3 text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Logout</button></a>  
          <!-- <a class="btn-logout" href="#"><button type="button" class="btn">Logout</button></a> -->
        </form>
      </div>
    </div>
  </nav>
  <div class="container my-3"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search"></div>
  <div class="container my-4">
    <div class="row"></div>
        <div class="btn btn-primary cl-md" data-bs-toggle="modal" data-bs-target="#add" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">ADD</div>
        <div class="btn btn-primary cl-md" data-bs-toggle="modal" data-bs-target="#addmultiple" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">ADD Multiple</div>
    </div>

    <div class="modal fade" id="addmultiple" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">  
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD Todo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo BURL.'/task/addmultiple/'.$_SESSION['idproject']?>" method="POST" id="connect">
                <select class="dropdown" name="select" id="select">
                <a class="btn btn-secondary dropdown-toggle" href="/project/projectuser" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lest Project</a>
                <div class="dropdown-menu">
                    <option value="null" selected>Select num</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </div>
                </select>
              <div class="miltipleform form-group" id="miltipleform">
                  
              </div>
              <input class="btn btn-success w-50 my-3" name="submit" type="submit" value="Create">
              <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
</div>  

     <!--the container for add new task-->
     <!-- <section class="container mt-5 modal" id="add">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card bg-white rounded border shadow">
                    <div class="card-header">
                        <h4 class="card-title">Add</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <input type="hidden" id="titel" name="id_user" required placeholder="Enter your titel" value="">
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label"></label>
                                <textarea class="form-control" id="content" name="content" rows="3" required placeholder="Enter your description"></textarea>
                            </div>
                            <div>
                                <a href=""><button type="submit" name="addtolist" class="btn btn-primary">Add</button></a>
                                <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">  
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD Todo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo BURL.'/task/add/'.$_SESSION['idproject']?>" method="POST" id="connect">
              <div class="form-group">
                <label class="form-label" for="namelist">Enter your date</label>
                <input class="form-control" name='date' type="date">  
                  <label class="form-label" for="namelist">Enter your task</label>
                  <textarea class="form-control" id="content" name="content" rows="3" required placeholder="Enter your description"></textarea>
                  <div class="mb-3">
                    <!-- You can add hiden input-->
                        <input type="hidden" id="titel" name="" required placeholder="Enter your titel" value="<?php echo $_SESSION['id_user']?>">
                    </div>
              </div>
              <input class="btn btn-success w-50 my-3" name="submit" type="submit" value="Create">
              <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
</div>  

<div class="container">
    <div class="row">
        <div class="col-md  my-4">
            <div class="card">
            <div class="card-header d-flex justify-content-between">To Do <i class="bi bi-battery"></i></div>                
            <?php foreach ($task as $list) {?>
                <div class="card-body draggable shadow-sm p-3 bg-body-tertiary rounded desc" draggable="true" style="position: relative;">
                    <p class="card-text txt" id="" style="position: absolute; left:30px;"><?=$list['description']?></p>
                    <a href="<?php echo BURL.'/Task/addtodoing/'.$list['id'] ?>"><i class="bi bi-chevron-right text-center" style="position: absolute;
                    right:30px"></i></a>
                   <p class="card-text txt" style="position: absolute; right:30px; top:67px;"><?=$list['date']?></p>
                    <div class="d-flex justify-content-beteween align-items-center">
                    <div class="btn-group mx-3 my-5">
                        <a href="<?php echo BURL.'/task/updatetodo/'.$list['id']?>"><button class="btn btn-sm btn-outline-secondary mx-1">Edit</button>
                        <a href="/task/deletetask"><button class="btn btn-sm btn-outline-secondary">Delete</button></a>
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                </div>
            </div>
                <?php } ?>
            </div>
        </div>
    
    
    <!--2-->
    
        <div class="col-md  my-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">Doing <i class="bi bi-battery-half"></i></div>
                <?php foreach ($doing as $list) {?>
                <div class="card-body draggable shadow-sm p-3 bg-body-tertiary rounded" draggable="true" style="position: relative;">
                    <p class="card-text txt" style="position: absolute; left:30px;"><?=$list['description']?></p>
                    <a href="<?php echo BURL.'/Task/adddone/'.$list['id']?>"><i class="bi bi-chevron-right text-center" style="position: absolute;
                    right:30px"></i></a>
                   <p class="card-text txt" style="position: absolute; right:30px; top:67px;"><?=$list['date']?></p>
                    
                    <div class="d-flex justify-content-beteween align-items-center">
                    <div class="btn-group mx-3 my-5">
                    <a href="<?php echo BURL.'/task/updatedoing/'.$list['id']?>"><button class="btn btn-sm btn-outline-secondary mx-1">Edit</button></a>
                        <a href="/task/deletedoing"><button class="btn btn-sm btn-outline-secondary">Delete</button></a>
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                </div>
            </div>
                <?php } ?>
            </div>
        </div>
    
    <!--3-->
    
    <div class="col-md  my-4">
            <div class="card">
            <div class="card-header d-flex justify-content-between">Done<i class="bi bi-battery-full"></i></div>               
             <?php foreach ($done as $list) {?>
                <div class="card-body draggable shadow-sm p-3 bg-body-tertiary rounded" draggable="true" style="position: relative;">
                    <p class="card-text txt" style="position: absolute; left:30px;"><?=$list['description']?></p>
                    <a href="/Task/ddd"><i class="bi bi-check-all text-center" style="position: absolute;
                    right:30px"></i></a>
                    <p class="card-text txt" style="position: absolute; right:30px; top:67px;"><?=$list['date']?></p>
                    <div class="d-flex justify-content-beteween align-items-center">
                    <div class="btn-group mx-3 my-5">
                    <a href="<?php echo BURL.'/task/updatedone/'.$list['id']?>"><button class="btn btn-sm btn-outline-secondary mx-1">Edit</button></a>
                        <a href="/task/deletedone"><button class="btn btn-sm btn-outline-secondary">Delete</button></a>
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                </div>
            </div>
                <?php } ?>
            </div>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="/upload/js/list.js"></script>
</body>
</html>