<?php
session_start();

?>
<html>
<head>
<meta charset="utf-8">
</head>

    <body>
    
		<h1>REGISTRATION FORM</h1>
				
		<form action="send.php" method="POST">
        
			E-Mail <input type="type" name="email" value="<?php 

			if(isset($_SESSION['email']))
			{
				echo $_SESSION['email'];
			}
			?>">* <?php

                        if(isset($_SESSION['error']))
                        {
                                echo $_SESSION['error'];
                        }
                        ?><br><br>
            
			Name <input type="text" name="name" value="<?php

                        if(isset($_SESSION['name']))
                        {
                                echo $_SESSION['name'];
                        }
                        ?>"><br><br>
			
			Date of Birth <input type="date" name="dateofbirth"><br><br>
            
            Gender	<input type="radio" name="gender" value="male" checked>Male 	<input type="radio" name="gender" value="female">Female<br><br>
            
            Address <input type="text" name="address"><br><br>
			
            Phone Number <input type="text" name="phone"><br><br>
            
            Certification <br>
			<input type="checkbox" name="certificate[]"> Nurse <br>
			<input type="checkbox" name="certificate[]"> Childrearing <br>
			<input type="checkbox" name="certificate[]"> Consultation <br><br>
            
            <button type="submit" class="btn btn-large btn-primary" name="submit">Register</button>
			
		</form>
	
	</body>
    
</html>
