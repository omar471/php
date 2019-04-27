
<?php
echo "My first PHP script!";
?> 
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <style type="text/css">
 	 .a{
 	 
 	 }
 	
 </style>
<body>
	    <div class=" container-fluid">
	    	 <div class="p-5  a">
	    	 	 <h3 class=" text-center"> this  is php tutorial </h3> 
	    	 	    <div>
	    <form action="<?php  echo $_SERVER['PHP_SELF']
	    	 	    	    ?>"  method="POST" accept-charset="utf-8"> 
			<label for="fname">First Name</label>
    		<input type="text" id="fname" name="firstname" >
			<label for="lname">Last Name</label>
    		<input type="text" id="lname" name="lastname" >
    		<label for="subject">Subject</label>
    		<textarea id="subject" name="subject"  style="height:200px">
    		</textarea>
	    	<input type="submit" value="submit"/>
		</form>
	    <?php 
	    	 	 	   if ( $_SERVER["REQUEST_METHOD"]=="POST"){
	    	 	 	   		$fname= input($_POST['firstname']) ;
	    	 	 	   		$lname= input($_POST['lastname']) ;
	    	 	 	   		$email=input($_POST['subject']) ;

	    	 	 	   		  echo " name : ".$fname ;
	    	 	 	   		    echo "<br>" ;
	    	 	 	   		    echo " lname : ".$lname ;
	    	 	 	   		    echo "<br>" ;
	    	 	 	   		    echo " email : ".$email ;
	    	 	 	   		    echo "<br>" ;
	    	 	 	 	}
	    	 	 	 	    function   input($data){
	    	 	 	 	    	 $data = trim($data);
								  $data = stripslashes($data);
								  $data = htmlspecialchars($data);
								   return  $data ;
	    	 	 	 	    }
	    	 	 		?>  
	    	 	    	
	    	 	    </div>
			
	    	 	

	    	 	
	    	 </div>
	    	  <footer class=" bg-warning p-5"> this   is footer</footer>
	    	 	 	

	    	
	    </div>



</body>
</html>