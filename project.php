<?php
$servername = "localhost";
$username = "Amir1382";
$password = "Amir123456@";
$dbname = "Amir-db";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// projecten: 
// gebruik connect.php voor mysql connectie
// in projecten.php -> gebruik connect.php
// Schrijf een query: select * from projecten
// Gebruik data in html


$sql = "SELECT * FROM Projecten";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
              <img src="IMG/A.webp" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Over mij</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="project.php">Projecten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header> 

<br><br><br><br>
  <div class="project-grid">
    <?php 
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) { 
        echo "<div class='col'>";
          echo "<div class='card' style='width: 18rem;'>";
            echo "<img src=" . $row["afbeelding"] . " class='card-img-top' alt='Zoo'>";
            echo "<hr>";
            echo "<div class='card-body'>";
              echo "<h5 class='card-title'>" . $row["titel"] . "</h5>";
              echo "<p class='card-text'>" . $row["Uitleg"] . "</p>";
              echo "<a href=" . $row["link"] . " class='btn btn-primary'>website</a>";
            echo "</div>";
          echo "</div>";
        echo "</div>";
       // echo "id: " . $row["id"]. " - Name: " . $row["titel"]. " " . $row["Uitleg"]. " " . $row["afbeelding"]."<br>" ;
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
  </div>
      
  
  <br><br><br><br>















<footer class="footer">
    <span class="text-body-secondary">©2023 Amir Hoseini</span>
</footer>

</footer>
</body>
</html>