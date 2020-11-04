<?php

if (isset($_POST['submit'])) {
require_once("connectvars.php");

    // Connect to the database
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // 
    $name = mysqli_escape_string($dbc,trim($_POST['name']));
    $score = mysqli_escape_string($dbc,trim($_POST['score']));
    $screenshot = mysqli_escape_string($dbc,trim($_POST['screenshot']));
    

    mysqli_close($dbc);
}
?>
<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php if (!empty($name)) echo $name; ?>" /><br />
    <label for="score">Score:</label>
    <input type="text" id="score" name="score" value="<?php if (!empty($score)) echo $score; ?>" /><br />
    <label for="screenshot">Screen shot:</label>
    <input type="file" id="screenshot" name="screenshot" />
    <hr />
    <input type="submit" value="Add" name="submit" />
  </form>