<!-- PHP code to establish connection with the localserver -->
<?php
 
// Username is root
$user = 'root';
$password = '';
 
// Database name 
$database = 'enrollment_db';
 
// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = "SELECT course_id, course_name, course_description FROM course";
$result = $mysqli->query($sql);
$mysqli->close();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Rayne University</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="courseenroll.css">
  
  </head>
<body>
    

    <!-- NAV BAR -->
   <nav> 
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="courseenroll.php">Course Catalog</a>
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
                      <h1 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: #9948C7;">Rayne University 2023 Catalog</h1>    
                  </div>
                </div>





	<section>
		<h1>Courses</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>Course ID</th>
				<th>Course Name</th>
				<th>Course Description</th>
			</tr>
			
      <!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['course_id'];?></td>
				<td><?php echo $rows['course_name'];?></td>
				<td><?php echo $rows['course_description'];?></td>
			</tr>
			<?php
				}
			?>

		</table>
	</section>
  </div>
  <section class="login">
  <?php if (isset($student)): ?>
        
        <p>Hello <?= htmlspecialchars($student["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Login</a> or <a href="signup.html">Sign Up</a></p>
        
    <?php endif; ?>
  </div>

          </div>
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      </section>
</body>

</html>

