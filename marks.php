<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prompt user to enter marks</title>
</head>
<body>
    <h2>Enter Marks</h2>
     
    <form method="POST" action="">
        Marks: <input type="number" name="marks">
        <input type="submit" name="submit" value="check">

    </form>
<?php 
 if (isset($_POST["submit"])) {
    $marks = $_POST["marks"];

    if ($marks >= 50) {
        echo "PASSED";
    } else if ($marks >= 0) {
        echo "FAILES";
    }
    else {
        echo "Enda uuze uji";
    }
 }

    ?>
</body>
</html>