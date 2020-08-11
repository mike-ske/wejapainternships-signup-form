

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="design.css" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    
   
</head>
<body onload="loadform()" >
    <div class="container">
   
<!-- display error message -->
     

<!-- message box 2 -->
             
        <!-- end of error message -->
        <div class="main">
            <h2>Sign Up</h2>
        
            
        <form action="server.php"  method="post" id="form" onsubmit="return validate()">
            
            <div class="form-row">
            
            <div class="col-md-6 form-group">
                <input type="text" name="fname" id="fname" class="form-control "  placeholder="Enter first name">
                    <div id="errormessage" style="font-size:11px;color:#ee6161ea;" class="errormessage">
                    <p>please fill your name</p>
                    </div>
            </div> 

            <div class="col-md-6 form-group">
                <input type="text" name="lname" id="lname" class="form-control "  placeholder="Enter last name">
                    <div id="errormessage2" style="font-size:11px;color:#ee6161ea;" class="errormessage">
                        <p>please fill your last name</p>
                    </div>
                 </div>
            </div>

            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control "  placeholder="Enter email e.g name@gmail.com">
                <div id="errormessage3" style="font-size:11px;color:#ee6161ea;" class="errormessage">
                    <p>please fill email</p>
                    </div>
            </div>

            <div class="form-group">
                <input type="date" name="dob" id="dob" class="form-control " >
                <div id="errormessage4" style="font-size:11px;color:#ee6161ea;" class="errormessage">
                    <p>fill your date of birth</p>
                    </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 col-sm-6 bgcolor">
                    <!-- select your favorite color -->
                    <h6>Select Favorite Color</h6>
                                    <!--color -->
                    <div class="form-group">
                        <input type="color" name="color" id="color" class="form-control">
                    </div>
                </div>
                <!-- Select Gender -->
                <div class="col-md-6 col-sm-6  gender">
                    <h6>Select Gender:</h6>
                    <div class="form-group">
                    <!-- for male -->
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="male" value="male"
                        checked class="form-control">
                        <!-- for female -->
                        <label for="fmale">Female</label>
                        <input type="radio" name="gender" id="fmale" value="female" class="form-control ">
                    </div>

                </div>   
            </div>       

            <div class="form-group">
            <h6>Select Department:</h6>
                <select name="depart" id="depart" class="form-control">
                     <option checked>Choose Department...</option>
                    <option  value="IT">IT</option>
                    <option  value="HR">HR</option>
                    <option value="Stuff">Stuff</option>
                </select>
                <div id="errormessage5" style="font-size:11px;color:#ee6161ea;" class="errormessage">
                    <p>please fill Department</p>
                    </div>
            </div>

            <div class="form-group">
                <input type="password" name="pass" id="pass"  class="form-control" placeholder="Enter password">
                
            <div id="message" style="font-size:11px;color:#ee6161ea;" class="message">
            <p>Password must be atleast 8 characters in length and should includeat letter, one number, and one special character</p>
            </div>

           
<script type="text/javascript" src="validate.js"></script>

            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Sign Up" class="btn btn-primary form-control" >
            </div>

                </form>
            </div>
           
        </div>
    </body>
 
</html>