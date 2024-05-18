<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'feedback';

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $cuisine = mysqli_real_escape_string($conn, $_POST['cuisine']);
    $date_of_visit = mysqli_real_escape_string($conn, $_POST['date_of_visit']);
    $cleanliness = mysqli_real_escape_string($conn, $_POST['cleanliness']);
    $service_quality = mysqli_real_escape_string($conn, $_POST['service_quality']);
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

    // Insert the data into the database
    $sql = "INSERT INTO feedback (name, email, branch, cuisine, date_of_visit, cleanliness, service_quality, feedback)
            VALUES ('$name', '$email', '$branch', '$cuisine', '$date_of_visit', '$cleanliness', '$service_quality', '$feedback')";

    if (mysqli_query($conn, $sql)) {
        echo "Feedback submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Feedback Form</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="navbar">
    <a href="index.php">Feedback Form</a>
    <a href="guestbook.php">View Guest Book</a>
</div>

<h2>Feedback Form</h2>

<form action="" method="POST">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required placeholder="Enter your name"><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required placeholder="Enter your e-mail"><br><br>

  <label for="branch">Branch:</label>
  <select id="branch" name="branch" required>
    <option value="">Select Branch</option>
    <option value="FC Road">FC Road</option>
    <option value="Pashan">Pashan</option>
    <option value="Pimple-Saudagar">Pimple-Saudagar</option>
    <option value="Erandwane">Erandwane</option>
    <option value="Sadashiv Peth">Sadashiv Peth</option>
  </select><br><br>

  <label for="cuisine">Cuisine:</label>
  <select id="cuisine" name="cuisine" required>
    <option value="">Select Cuisine</option>
    <option value="South Indian">South Indian</option>
    <option value="Maharashtrian">Maharashtrian</option>
    <option value="Continental">Continental</option>
    <option value="Chinese">Chinese</option>
    <option value="Italian">Italian</option>
    <option value="Multiple Cuisines">Multiple Cuisines</option>
  </select><br><br>

  <label for="date_of_visit">Date of Visit:</label>
  <input type="date" id="date_of_visit" name="date_of_visit" required><br><br>

  <label for="cleanliness">Cleanliness:</label>
  <input type="radio" id="cleanliness1" name="cleanliness" value="1" required>
  <label for="cleanliness1">1</label>
  <input type="radio" id="cleanliness2" name="cleanliness" value="2">
  <label for="cleanliness2">2</label>
  <input type="radio" id="cleanliness3" name="cleanliness" value="3">
  <label for="cleanliness3">3</label>
  <input type="radio" id="cleanliness4" name="cleanliness" value="4">
  <label for="cleanliness4">4</label>
  <input type="radio" id="cleanliness5" name="cleanliness" value="5">
  <label for="cleanliness5">5</label><br><br>

  <label for="service_quality">Service Quality:</label>
  <input type="radio" id="service_quality1" name="service_quality" value="1" required>
  <label for="service_quality1">1</label>
  <input type="radio" id="service_quality2" name="service_quality" value="2">
  <label for="service_quality2">2</label>
  <input type="radio" id="service_quality3" name="service_quality" value="3">
  <label for="service_quality3">3</label>
  <input type="radio" id="service_quality4" name="service_quality" value="4">
  <label for="service_quality4">4</label>
  <input type="radio" id="service_quality5" name="service_quality" value="5">
  <label for="service_quality5">5</label><br><br>

  <label for="feedback">Feedback:</label><br>
  <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br><br>

  <input type="submit" value="Submit">
</form>

</body>
</html>
