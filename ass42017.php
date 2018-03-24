<html>
  <head>
    <title>Web Society Repository</title>
  </head>

  <body>
    <h1>Web Society Repository</h1>

    Welcome Web Society group member! You can access group information below, as well as your individual private information.

    <h2>Group Information</h2>
    <p>Enter Web Society group password to view society secret info:</p>
    <?php
      $pwd_hash = '$2y$10$fhfp67V/Q89vUwb31zrLbeHM3/KVY6mc8rRuwh.u5sCly2r.3XDQe';
      extract($_GET);
      if (isset($grppwd)) {
        if (password_verify($grppwd,$pwd_hash)) {
          echo "<p>Authentication Passed!</p> <br><br>";
	  echo "<p>Secret Society Info:</p> <br>";
	  $myfile = fopen("secsocinfo.txt", "r") or die("Unable to open file!");
	  // Output one line until end-of-file	
	  while(!feof($myfile)) {
  		echo fgets($myfile) . "<br>";
	  }
	  fclose($myfile);

        } else {
          echo "<p>Authentication Failed!</p> <br>";
        }
      }
    ?>
    <form action="#" method="GET">
      <p><input type="password" name="grppwd"></p>
      <p><input type="submit" value="View Group Info"></p>
    </form>

    <h2>Individual Member Private Information</h2>
    <p>Click <a href="ass42017_individ.php">here</a> for individual info. page. </p>



  </body>
</html>

