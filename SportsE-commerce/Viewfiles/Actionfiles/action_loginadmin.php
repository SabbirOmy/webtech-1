<div style="display:inline-block;">
    <?php include 'C:xampp\htdocs\WT\Webtech\SportsE-commerce\Viewfiles\header.php' ?>
  </div>
	
<?php 
	$username = $psw = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$counter = 0;
  		if (isset($_POST["username"]) & !empty($_POST["username"])) {
   		 $username = $_POST["username"];
  		}
  		else {
  			$counter = $counter + 1;
  		}
  		if (isset($_POST["psw"]) & !empty($_POST["psw"])) {
   		 $psw = $_POST["psw"];
  		}
  		else {
  			$counter = $counter + 1;
  		}

  		$userFound = false;

  		$user = fopen('C:\xampp\htdocs\WT\Webtech\SportsE-commerce\Viewfiles\Datafiles\users.txt', "r") or die("Unable to open file!");

      		while ($line = fgets($user)) {
        		$words = explode(",",$line);
        		if(strcmp($username,$words[0]) == 0 && strcmp($psw."\n",$words[4]) == 0 ) {
        			$userFound = true;
        		}
      		}
      		fclose($user);

      	
      		if($userFound == false) {
      			$counter = $counter + 1;
      		}

      		if($counter == 0) {
      			echo "<p>Login Successful</p>";

      			echo "<a href='/WT/Webtech/SportsE-commerce/Viewfiles/adminhome.php'>adminhome</a>";
      		}
      		else {
      			echo "<p>Login Unsuccessful</p>";
      			echo "<a href='/WT/Webtech/SportsE-commerce/Viewfiles/loginadmin.php'>Try Again!</a>";
      		}
  		
  	}

?>


 <div>
    <?php include 'C:xampp\htdocs\WT\Webtech\SportsE-commerce\Viewfiles\footer.php' ?>
  </div>