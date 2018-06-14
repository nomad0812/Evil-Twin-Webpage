<html>
<head>
  <meta charset="utf-8"/>
  <title>Re-authentication</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <section id="header">
      <form method="post" action="upl.php">
      <img src="lock.png" id="lock_ico" height="150" width="150" />
      <br/><br/>
      <span id="greeting">Please re-authenticate your password</span>
      <br/>
      <br/>
      <br/>
      <div id="p1">
      <input class="pwdBox" id="pwd1" name="pd1" type="text" value="Password"></input>
    </div>
      <br/>
      <div id="p2">
      <input class="pwdBox" id="pwd2" name="pd2" type="text" value="Re-enter password"></input>
    </div>
    <br/>
    <div id="upload">
      <button id="uploadBut" type="submit">Submit</button>
    </div>
  </form>
    </section>

</body>
</html>
