<?php

session_start();

$_SESSION['welcomepage'] = $_SERVER['REQUEST_URI'];

function passError()
{
   return $err = "<div style='width: 300px;font-weight:400; line-height:120%;font-family:roboto;height: 90px;
    background: #f88f8fea;border: 2px solid #ee6161ea; border-radius:10px; text-align:center;
    font-size:16px;position:relative;color:#8a2424; padding:7px;margin:30px;'>
    
    <p>Password should be atleast 8 characters in length and should include
    at letter, one number, and one special character.</p>

    </div>";
}

function errorMsg()
{
    return $message = "<div style='width: 300px;font-weight:400; line-height:120%;font-family:roboto;height: 90px;
    background: #f88f8fea;border: 2px solid #ee6161ea; border-radius:10px; text-align:center;
    font-size:16px;position:relative;left:30%;color:#8a2424; padding:7px;margin:30px;'>
        
        <h6>Failed to Sign In. Please fill all fields correctly. Check password</h6>

        </div>";
}





$message = "";
$msg = "";





 
if (
    isset($_POST["fname"]) &&
     isset($_POST["lname"]) &&
    isset($_POST["email"]) &&
    isset($_POST["dob"]) &&
     isset($_POST["color"]) &&
     isset($_POST["gender"]) &&
     isset($_POST["depart"]) &&
     isset($_POST["pass"]) &&
     isset($_POST["submit"])

) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $color = $_POST["color"];
    $gender = $_POST["gender"];
    $depart = $_POST["depart"];
    $pass =$_POST["pass"];
    $sign = $_POST["submit"];

    
$password = isset($_POST["pass"]);
      
//    validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$nuber = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[+\w]@', $password);


        if ($sign) {
        
            if (!empty($fname) && !empty($lname) && !empty($email) && !empty($gender) && !empty($dob) && !empty($color) && !empty($depart)) {
                //  header("Location: server.php");
        
            }
            else if (!$uppercase || !$lowercase || !$number || !$specialChars || !strlen($password) < 8 ) {
                // header("Location: index.php");
                $msg =  passError();

            }
            if (empty($_POST["fname"]) == "" || empty($_POST["lname"]) == "" || empty($_POST["email"]) == "" ||  empty($_POST["gender"]) == "" || empty($_POST["dob"]) == "" || empty($_POST["color"]) == "" || empty($_POST["depart"])== "" ) {
                // header("Location: index.php");
           
            }


        }
}

  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | page</title>
    <link rel="stylesheet" href="design.css" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body  <?php if (isset($_POST["color"])) {
            $color = $_POST["color"];
            echo "style = background-color:" .$color.";"; 
        }
        ?>  > 
    <div class="display">
   <h1>Personal Bio-Data</h1>
   <div class="data">
<h5>First name:</h5> <p><?php echo $fname;?></p>
<h5>Last name:</h5> <p> <?php echo $lname;?></p>
<h5>Email:</h5> <p><?php echo $email;?></p>
<h5>Date of birth:</h6> <p><?php echo $dob;?></p>
<h5>Department: </h5> <?php echo $depart;?></p>
<h5>Password:</h5> <p> <?php echo $pass;?></p>

       <p>
           <a href="index.php">Back to home </a>
       </p>
    </div>
</div>
    
        
   
</body>
</html>
     