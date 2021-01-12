<?php 
 
	$con = mysqli_connect('localhost','root','');
	mysql_select_db('demo');
	
    
	if(!$con){
		echo 'not connected to server';
	}
	if(!mysqli_select_db($con,'demo')){
		echo'database not selected';
	}
	$username= $_POST['username'];
	$password= $_POST['password'];
	//$confirm_password= $_POST['confirm_password'];
    $sql="INSERT INTO loginform(User, Pass) VALUES('$username','$password')";
	
	
    if(!mysqli_query($con, $sql)){
        echo 'Not Inserted';
    }
    else{
        echo ' You Have registed successfully';
    }
	header("refresh: 2; url= front.html");
        

?>