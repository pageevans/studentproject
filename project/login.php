<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM student
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $student = $result->fetch_assoc();
    
    if ($student) {
        
        if (password_verify($_POST["password"], $student["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["student_id"] = $student["id"];
            
            header("Location: home.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    
    <div class="wrapper fadeInDown">
  <div id="formContent">

    <!-- Image -->
    <div class="fadeIn first">
    <h1>Login</h1>
      <img src="images/login-screen.jpg" id="icon" alt="Image" />
    </div>

    <!-- Login Form -->
    <form method="post">
      
      <label for="email" id="loginem">Email</label>
        <input type="email" name="email" name="login" class="fadeIn second" placeholder="EMAIL" id="email"
             value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
      
      <label for="password" id="loginpw">Password</label>
        <input type="password" name="password" name="login" class="fadeIn third" placeholder="PASSWORD" id="password">
      
        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            <button id="btn" class="btn btn-lg" style="background-color: #F59C04;">Login</button>
        </div>
    
    
    </form>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>







