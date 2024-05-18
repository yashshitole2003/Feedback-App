<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'feedback';

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Guest Book</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <div class="navbar">
        <a href="index.php">Feedback Form</a>
        <a href="guestbook.php">View Guest Book</a>
    </div>

  <h2>Guest Book</h2>

  <?php
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="entry">';
          echo '<div class="row"><div class="label">Name:</div><div class="value">' . $row['name'] . '</div></div>';
          echo '<div class="row"><div class="label">Email:</div><div class="value">' . $row['email'] . '</div></div>';
          echo '<div class="row"><div class="label">Branch:</div><div class="value">' . $row['branch'] . '</div></div>';
          echo '<div class="row"><div class="label">Cuisine:</div><div class="value">' . $row['cuisine'] . '</div></div>';
          echo '<div class="row"><div class="label">Date of Visit:</div><div class="value">' . $row['date_of_visit'] . '</div></div>';
          echo '<div class="row"><div class="label">Cleanliness:</div><div class="value">' . $row['cleanliness'] . '</div></div>';
          echo '<div class="row"><div class="label">Service Quality:</div><div class="value">' . $row['service_quality'] . '</div></div>';
          echo '<div class="row"><div class="label">Feedback:</div><div class="value">' . $row['feedback'] . '</div></div>';
          echo '</div>';
          echo '<hr>';
      }
  } else {
      echo '<p>No entries found in the guest book.</p>';
  }
  ?>

</body>
</html>

<?php
mysqli_close($conn);
?>
