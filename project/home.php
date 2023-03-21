<?php

session_start();

if (isset($_SESSION["student_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM student
            WHERE id = {$_SESSION["student_id"]}";
            
    $result = $mysqli->query($sql);
    
    $student = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
  </head>
<body>
    

    <!-- NAV BAR -->
   <nav>
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="catalog.html">Course Catalog</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="signup.html">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
  </li>
</ul>
</nav> 

<section class="vh-100" style="background-color: #eee;">
        <div class="container h-50">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                      <h1 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #9948C7;">Student Enrollment System</h1>
                    </div>
                   
                    <!-- Place Content Here -->



                    <?php if (isset($student)): ?>
        
        <p>Hello <?= htmlspecialchars($student["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Logout</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>

    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    