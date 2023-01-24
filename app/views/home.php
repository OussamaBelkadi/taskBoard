<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/upload/css/style.css">
    <title>Page home</title>
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg bg-white shadow">
    <div class="container-fluid d-flex justify-content-between align-content-center" style="gap: 40%;">
     
        <a class="navbar-brand" href="#"><img src="/upload/img/tz.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
    
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link btn-logout active" aria-current="page" href="#">Home</a>
            </li>
      
            <li class="nav-item">
              <a class="nav-link  disabled">About</a>
            </li> 
          </ul> 
      
          <form class="d-flex btn-logout">
          <a class="btnlogout text-decoration-none mx-1" href="#"><button type="button" class="btn me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login</button></a>  
          <!-- <a class="btn-logout" href="#"><button type="button" class="btn">Logout</button></a> -->
          </form>
      </div>
    </div>
  </nav>

<!--login form Model-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">  
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo'/user/login'?>" method="POST" id="connect">
               
              <div class="form-group">
                  <label class="form-label" for="email">Email address</label>
                  <input class="form-control" type="text" name="emaillogin" id="emaillogin">
                  <div class="error"></div>
              </div>

            
              <div class="form-group">
                  <label class="form-label" for="password">Password</label>
                  <input class="form-control" type="password" name="passwordlogin" id="passwordlogin">
                  <div class="error"></div>
              </div>
          
              <p class="card-text">
              <a  class="stretched-link text-primary" style="position: relative;" href="" data-bs-toggle="modal" data-bs-target="#register">Registrer</a>
              </p>
              <input class="btn btn-success w-50 my-3" name="login" type="submit" value="Connecter">
              <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
</div>

<!--Register form Model-->
  <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">  
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Register</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo'/user/register'?>" method="POST" id='form'>
               
              <div class="form-group pseudof">
                  <label class="form-label" for="pseudo">Pseudo</label>
                  <input class="form-control" type="text" name="pseudo" id="pseudo">
                  <div class="error"></div>
              </div>

              <div class="form-group"> 
                  <label class="form-label" for="email">Email address</label>
                  <input class="form-control" type="text" name="email" id="email">
                  <div class="error"></div>
              </div>
          
              <div class='mt-2' id='erreureml'></div>

              <div class="form-group">
                  <label class="form-label" for="password">Password</label>
                  <input class="form-control" type="password" name="password" id="password">
                  <div class="error"></div>
              </div>

              <div class="form-group">
                  <label class="form-label" for="repassword">Confirm Password</label>
                  <input class="form-control" type="password" name="repassword" id="repassword">
                  <div class="error"></div>
              </div>

              <div class='mt-2' id='erreurepw'></div>

              <input class="btn btn-success w-50 my-3" name="submit" type="submit" value="Connecter">
              <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<!--First page-->
<section class="home-pg text-dark p-lg-5 text-center text-sm-start">
  <div class="container">
    <div class="d-sm-flex">
      <div>
        <h1 >Track your</h1>
        <h1>productivity Online</h1>
        <p class="lead my-4">Solving problems with drowsinnes, apathy, lack of motivation and other factors that do not allow you to grow.</p>
        <button class="btn btn-lg col-2 btn-1">GO</button>
      </div>
      <img class='img mx-sm-4' src="/upload/img/test.png" alt="">
    </div>

  </div>
</section>
<!--Register-->
<section class="text-light p-5 register-box">
  <div class="container-fluid d-flex justify-content-between align-items-md-center">
    <div class="content">
      <h3 class="mb-3 mb-md-0">Register now, is your time.</h3>
    </div>
    <div class="w-lg-25 p-sm-5">
      <button class="btn btn-dark btn-lg col-12" type="button">Register</button>
    </div>
  </div>
</section>

<section class="p-5">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-md mt-3">
        <div class="card bg-dark text-light">
          <div class="card-body text-center">
            <div class="h1">
              <i class="bi bi-laptop"></i>
            </div>
            <h3 class="card-title">Vitual</h3>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ullam repellendus ducimus et dolorum possimus, mollitia tenetur eaque iste sequi veritatis voluptates! Ut, eos? Soluta earum repellat facere excepturi delectus?</p>
           </div>
        </div>
      </div>
      <div class="col-md mt-3">
        <div class="card bg-dark text-light">
          <div class="card-body text-center">
            <div class="h1">
              <i class="bi bi-award"></i>
            </div>
            <h3 class="card-titel">Gift</h3>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ullam repellendus ducimus et dolorum possimus, mollitia tenetur eaque iste sequi veritatis voluptates! Ut, eos? Soluta earum repellat facere excepturi delectus?</p>
          </div>
        </div>
      </div>
      <div class="col-md mt-3">
        <div class="card bg-dark text-light">
          <div class="card-body text-center">
            <div class="h1">
              <i class="bi bi-calendar-check"></i>
            </div>
            <h3 class="card-titel">Management</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, blanditiis quia! Beatae minima quisquam qui molestiae eligendi adipisci velit corporis dolorem explicabo debitis deleniti, nostrum nisi amet similique minus sed.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="p-5">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-md ">
        <img src="/upload/img/icon-management.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-md p-lg-5 g-4">
        <h3>Add your tasks.</h3>
        <h3>Organize your life.</h3>
        <h3>Achieve more every day.</h3>
        <p class="lead">Add tasks like “Read work emails every day at 10am” to fill your to-do list in seconds using Todoist’s powerful natural language recognition and recurring dates.</p>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ipsa incidunt quas modi aspernatur provident debitis asperiores minima eligendi, veniam amet est quae, eveniet sunt quaerat exercitationem libero at rerum?</p>
        <a href="" class="btn btn-light mt-3 btn-1">Read More</a>
      </div>
    </div>
  </div>
</section>
<!--footer-->
<footer class="p-5 bg-dark text-white text-center position-relative">
  <div class="container">
    <p class="lead">Copyright &copy; 2021 to do list</p>
    <a href="#" class="position-absolute bottom-0 end-0 p-5">
      <i class="bi bi-arrow-up-circle h1"></i>
    </a>
  </div>

</footer>

<!-- <div class="card">
  <img src="wind-turbine.jpg" alt="Wind Turbine">
  <div class="card-body">
    <h5 class="card-title">How Wind Farms Work</h5>
    <p class="card-text">Wind farms consist of multiple wind turbines that convert the kinetic energy of wind into electrical energy. The turbines are typically placed in areas with high wind speeds, such as on hills or offshore.</p>
  </div>
</div> -->
<!-- <div class="container">
    <h1 class="text-center">Gestion des tâches</h1>
    <div class="row">
      <div class="col-sm-4">
        <form>
          <div class="form-group">
            <label for="task">Nouvelle tâche :</label>
            <input type="text" class="form-control" id="task" placeholder="Entrez une tâche">
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
      </div>
      <div class="col-sm-8">
        <table class="table">
          <thead>
            <tr>
              <th>Tâche</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tâche 1</td>
              <td>
                <button class="btn btn-success">Terminer</button>
                <button class="btn btn-danger">Supprimer</button>
              </td>
            </tr>
            <tr>
              <td>Tâche 2</td>
              <td>
                <button class="btn btn-success">Terminer</button>
                <button class="btn btn-danger">Supprimer</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div> -->
  <script src="/upload/js/from.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>