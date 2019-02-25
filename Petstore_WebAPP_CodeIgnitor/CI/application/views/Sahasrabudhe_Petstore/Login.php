<?php 
//include 'validation.php';
session_start();
ob_start();

if(isset($_POST['submit'])){

session_start(); //also can be done before it


      {
$link = mysqli_connect("localhost", "root", "", "test");
                     
    // Checking connectivity
    if($link === false){
        die("ERROR: Could not connect! " . mysqli_connect_error());
    }
    else 
    {
        
        echo("database connected");
        
        
    }

        $email=$_POST['emailid'];
        $Pwd=rtrim($_POST['pwd']);
      

    if(empty($email))
        {

         $eerror="*Email Id cannot be empty*";


        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $eerror="*Enter a valid email(a-z,@,-,_,0-9)*"; 
            }
        else
        {

            $edbfire=1;
        }

 if($edbfire)
{
     
        $sql="SELECT email FROM user_data where email='$email'";  
         $result = $link->query($sql);
         
         if ($result->num_rows > 0)
         {
        // output data of each row
        while($row = $result->fetch_assoc())
        {
            $db_email=rtrim($row["email"]);
        }
         
         }
        
         if($db_email==$email)
         {
                       echo"$db_email";       
                        
                    $sql="SELECT userid FROM user_data where password='$Pwd'";  
                   
                    $result = $link->query($sql);
                 
                 if ($result->num_rows > 0)
                 {
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                    $db_userid=rtrim($row["userid"]);
                }
                  
                  
                 echo"$db_userid";
                 
                 }    
                 else
                 {
                     
                     
                       $peerror="password incorrect";
                      
                  
                 }
                 /*$sql="SELECT password FROM user_data where userid='$db_userid'";  
                    $result = $link->query($sql);
                 
                 if ($result->num_rows > 0)
                 {
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                    $db_pwddb=rtrim($row["password"]);
                }
                 
                 echo"$db_pwddb";
                 
                 }  
                 echo"$Pwd";*/
                 
                 if(($Pwd))
                 {
                     echo "inn";
                    $sql="SELECT roleid FROM user_data where userid='$db_userid'";  
                    $result = $link->query($sql);
                 
                 if ($result->num_rows > 0)
                 {
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                    $db_roleid=rtrim($row["roleid"]);
                }
                     
                     echo"$db_roleid";
                 }
                 
                   
                       
                 
                 if($db_roleid==1)
                 {
                     
                   $sql1="SELECT fname FROM client_data where userid='$db_userid'";  
                     $result = $link->query($sql1);
                     if ($result->num_rows > 0)
                 {
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                    $db_fname=rtrim($row["fname"]);
                  
                }
                  
                    
                 }
                      $loginflagc=1;
                      $_SESSION['$loginflagc'] = $db_fname;
                      $_SESSION['$user_ID']=$db_userid;
                     header('location:CLogin.php');
                     

                 }
                if($db_roleid==2)
                 {
                     $sql1="SELECT fname FROM service_data where userid='$db_userid'";  
                     $result = $link->query($sql1);
                     if ($result->num_rows > 0)
                 {
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                    $db_fname=rtrim($row["fname"]);
                  
                }
                  
                    
                 }
                     
                     
                       $loginflag=2;
                       $_SESSION['$loginflagb'] = $db_fname;
                       $_SESSION['$user_ID']=$db_userid;
                       header('location:BLogin.php');
                     
                 }
                 
                
                 
        
            }
            else
            {
              
               $peerror="password incorrect";
                
                
            }
    

             
         }
         else
         {
             $ueerror="email id not registered";
             
             
         }
       

     
 }
 else
 {
     
     $ueerror=$eerror;
     
     
 }

      }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/pet.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        
    
        <div id="container">
            <header>
            <h1>Pet Store</h1>
            </header>
            <div id="ColLeft">
                <nav id="menu">
                        <a href="index.html">Home</a>
                        <a href="AboutUs.html">About Us</a>
                        <a href="ContactUs.php">Contact Us</a> 
                        <a href="Client.php">Client</a> 
                        <a href="Service.php">Service</a>
                        <a href="Login.php">Login</a>
                </nav>
            </div>
    
        <div id="ColRight">

    <div id="pagebaner">
        <img src="images/pet store banner 5 png.png">
    </div>

    <div id="pagecontent">
        <h2>Login</h2> <br>

        Required information is marked with an asterik (*). <br><br>

        <table>
               <form method ="POST">
                   
                <tbody><tr>
                
                <td>*E-mail:</td>
                <td><input type="email" name="emailid" required placeholder="Email Id" value="<?php echo isset ($_POST["emailid"])? $_POST["emailid"] : '';?>"><text id="error"><?php if(isset($ueerror)) echo$ueerror;?></text></td>
                </tr>
                <tr>
                <td>*Password:</td>
                <td><input type="password" name="pwd" required placeholder="Password" value="<?php echo isset ($_POST["pwd"])? $_POST["pwd"] : '';?>"><text id="error"><?php if(isset($peerror)) echo$peerror;?></text></td>
                </tr>      
                </tbody>
              
        </table>


                <br>
                <input type="submit" value="login" name='submit'>
                
                  </form>
    
       <footer><em></em>Copyright &copy; 2018 Pet Store</em>
        <br><em><a href="mailto:omkar@sahasrabudhe.com">omkar@sahasrabudhe.com</a></em></footer>


    </div>

    </div>

</div>
</body>
</html>




