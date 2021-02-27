<?php 
	echo "<b>"."<marquee>  WELCOME TO SIDE HUSTLE INTERNSHIPS </marquee>"."</b>"."<p/>";

?>

<form action="myform.php" method="post"> 

<h3>Enter Your Details Below. </h3>

<b>
First Name : <br/><input type="text" name="fname" placeholder="e.g James"> <br/> <br/>

Last Name: <br/><input type="text" name="lname" placeholder="e.g Adex"> <br/> <br/>

Address: <br/> <input type="text" name="address" placeholder="e.g 85, Cresecent Road"> <br/> <br/>

Tel: <br/> <input type="number" name="tel" placeholder="+234 8132 445 5554"> <br/> <br/>

<input type="submit" name="submit" value="submit">

</b>

</form>

<?php 
	

	function form() {
		if (isset ($_POST['fname']) && isset($_POST['lname']) && isset ($_POST['address']) && isset ($_POST['tel']) )

			//declaaring a variable
			@$fname = $_POST['fname']."<br/>";
			@$lname = $_POST['lname']."<br/>";
			@$address = $_POST['address']."<br/>";
			@$tel = $_POST['tel']."<br/>";


			//checking if a user do not enter an empty data
			if(!empty($fname) && !empty($lname) && !empty($address) && !empty($tel)) {
			
					echo "<b>"."<i>"."Your Contact Details are as follows: "."</i>"."</b>" ."<p/>";

					echo "<b> First Name : </b>".$fname."<br/>";
					echo "<b> Last Name : </b>".$lname."<br/>";
					echo "<b> Address : </b>".$address."<br/>";
					echo "<b> Tel: </b>".$tel."<br/>";


			} else  {
				echo "All fields are required"."<p/>";
			}


	}

	form();


?>