<html>
		<body>
				<table align="center" border=2px>
				<form action="" method="POST">
					<tr><th colspan=2 align="center"><u><b>LOGIN</b></u></th></tr>
					<tr><td>Name:</td><td><input type="text" name="unm"/></td></tr><br>
					<tr><td>Password:</td><td><input type="password" name="pwd"/></td></tr><br>
					<tr><td colspan=2 align="center"><input type="submit" name="submit" value="submit"/></tr></td>
				</form>
				</table>
				<?php
                require "config.php";
				if(isset($_REQUEST['submit']))
				{
					$unm=$_REQUEST['unm'];
					$pwd=$_REQUEST['pwd'];
					$login="SELECT * FROM `login` WHERE `unm`='$unm' AND `pwd`='$pwd'";
					$result=mysqli_query($con,$login);
					$row=mysqli_fetch_assoc($result);
					$count=mysqli_num_rows($result);
		
					if($count>0)
					{
						session_start();
						$_SESSION['id']=$data['id'];
						$_SESSION['unm']=$data['unm'];
						$_SESSION['pwd']=$data['pwd'];
						header ("location:dashboard.php");
					}
					else
					{
						echo "<script>alert('wrong username and pwd	!')</script>";
					}
				}
				?>
				
		</body>
</html>