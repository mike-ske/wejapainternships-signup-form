<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | page</title>
    <link rel="stylesheet" href="design.css" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
   

 
</head>

<body>
    
<input type="password" name="pass" id="pass" onfocus="checkpass()" class="form-control" placeholder="Enter password">
    <div style="width:100px;height:100px; background:blue;" id="message">value</div>
    
    <script type="text/javascript">
    var message = document.getElementById("message");


// //when the user clicks on the input field

  function valueCheck() {
  
    
    
    
}

function validate() {
    
}

function checkpass() {
    message.innerHTML="Password must be atleast 8 characters in length and should includeat letter, one number, and one special character";
}
    
    </script>    
   
</body>
</html>