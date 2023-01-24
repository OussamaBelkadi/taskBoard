<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Project</title>
</head>
<body>
    <section class="container my-5 text-center"><p class="h1">Update Page</p></section>
<div class="container">  
    <div class="card">
        <div class="card-body">
          <form action="<?php echo'/task/insertupdatedoing/'.$element['id']?>" method="POST" id="connect">
              <div class="form-group">
                  <label class="form-label" for="namelist">Enter your date</label>
                  <input class="form-control" type="date" value="<?=$element['date']?>" name="date">
                  <label class="form-label" for="namelist">Enter your new task</label>
                  <textarea class="form-control" id="content" name="content" rows="3" required placeholder="Enter your description"><?=$element['description']?></textarea>
                  <div class="mb-3">
                    <!-- You can add hiden input-->
                        <input type="hidden" id="titel" name="" required placeholder="Enter your titel" value="<?php echo $_SESSION['id_user']?>">
                    </div>
              </div>
              <input class="btn btn-success w-25 my-3" name="submit" type="submit" value="Create">
              <a href="<?php echo BURL.'task/returnl'?>"><button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Close</button></a>
          </form>
        </div>
        </div>
      </div>
    </div>
</div>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>