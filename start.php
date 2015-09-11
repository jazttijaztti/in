<html>
<head>
<meta charset="utf-8">
</head>

    <body>
    
		<h1>REGISTRATION FORM</h1>
				
		<form action="send.php" method="POST">
        
			E-Mail <input type="email" name="email"><br><br>
            
			Name <input type="text" name="name"><br><br>
			
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
