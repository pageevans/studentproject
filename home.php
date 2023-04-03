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
    <title>Rayne University</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <a class="nav-link" href="courseenroll.php">Course Catalog</a>
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
                      <h1 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #9948C7;">Rayne University</h1>    
                  </div>
                </div>

                 <!-- Hero Start -->
                
<div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('images/gradhats.jpg');
    height: 300px;
  ">
  <div class="mask h-100" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3">Take a leap!</h1>
        <h4 class="mb-3">Start earning your degree today.</h4>
        <a class="btn btn-outline-light btn-lg" href="signup.html!" role="button">Enroll</a>
      </div>
    </div>
  </div>
</div>

                    <!-- Hero End -->

                    <!-- About Start -->
                    <div class="card-body mt-2 text-center">
    <h5 class="card-title" style="color: #9948C7;">VISION</h5>    
    <p class="card-text">A Culture of Global Leadership, Quality and Excellence.</p>
    <h5 class="card-title" style="color: #9948C7;">MISSION</h5> 
    <p class="card-text">Rayne University is committed to develop academic competencies, facilitate learning experiences and assure the highest standards of quality, excellence and institutional integrity.
                            </p>
    <a href="signup.html" class="btn btn-primary" style="width: 10rem;">Sign Up</a>
  </div>
</div>
                  
                    <!-- About End -->

                    <!-- Quote Start -->
<div class="card lead justify-content-center align-items-center border-0" style="width: 70rem;">
  <div class="card-body">
    <blockquote class="blockquote">
      <p>"If you are not willing to learn, no one can help you. If you are determined to learn, no one can stop you".</p>
      <footer class="blockquote-footer">Zig Ziglar <cite title="Source Title">Pure Wow</cite></footer>
    </blockquote>
  </div>
</div>
                    <!-- Quote End -->

                    <!-- Courses Start -->

<div class="card-body text-center"> 
    <h5 class="card-title" style="color: #9948C7;">COURSES</h5>
    </div>
                    <div class="row text-center justify-content-center align-items-center ">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">History</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Science</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Math</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">English</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Art</h5>
      </div>
    </div>
  </div>
</div>

<div>
<a href="login.php" class="btn btn-primary justify-content-center align-items-center " style="width: 10rem;">Login</a>
</div>


                    <!-- Courses End -->
              </div>
            </div>
          </div>
        </div>
      </section>

      

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    