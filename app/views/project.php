<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/upload/css/project.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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

<section class="container mb-3">
    <div class="row">
        <div class="col-md-4 ">
            <div class="card text-center">
                <div class="card us">
                    <h2>welcome Back <?=$_SESSION['pseudo']?></h2>
                </div>
            </div>
        </div>

<div class="container my-5">

    <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="/project/projectuser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Lest Project
    </a>

    <ul class="dropdown-menu">
      <?php foreach($project as $proj){?>
      <li><a class="dropdown-item" href="<?php echo BURL.'/task/displaytask/'.$proj['id']?>"><?php echo $proj['nom']?></a></li>
      <?php }?>
    </ul>

  
    <a href="#"><button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#creatlist">Create list</button></a>
</div>
<!--from Create-->
<div class="modal fade" id="creatlist" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">  
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Create List</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo BURL.'/project/createlist/'.$_SESSION['id_user']?>" method="POST" id="connect">
              <div class="form-group">
                  <label class="form-label" for="namelist">Create new list now</label>
                  <input class="form-control" type="text" name="namelist" id="namelist">
              </div>
              <input class="btn btn-success w-50 my-3" name="submit" type="submit" value="Create">
              <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
</div>  



<section class="container">
    <div class="row">
        <div class="col-md-4 mx-auto my-2">
          <div class="card crd">
            <i class="bi bi-calendar text-center h1"></i>
            <h3 class="card-titel h-3 text-center">
                TO DO
            </h3>
            <div class="card-body text-center">
                <h4 class="text-bold"><?php echo $_SESSION['counttodo']?></h4>
            </div>
          </div>  
        </div>
        <!--Number of do-->
        <div class="col-md-4 mx-auto my-2">
          <div class="card crd">
            <i class="bi bi-calendar-week text-center h1"></i>
            <h3 class="card-titel h-3 text-center">
                DO
            </h3>
            <div class="card-body text-center">
                <h4 class="text-bold">0</h4>
            </div>
          </div>  
        </div>
        <div class="col-md-4 mx-auto mt-2">
          <div class="card crd">
          <i class="bi bi-calendar-check text-center h1"></i>
            <h3 class="card-titel h-3 text-center">
                DOING
            </h3>
            <div class="card-body text-center">
                <h4 class="text-bold">1</h4>
            </div>
          </div>  
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>  