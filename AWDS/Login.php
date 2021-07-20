<html>
<head>
    <meta charset="utf-8">
    <title>KWD Login and registration form</title>
    <link rel="stylesheet" href="Style.css">
    </head>
    <center><h1 style="color:yellow;opacity: 250%;">Karnataka Wildlife Database&reg;</h1></center>
    <br>
    <center><h2 style="color:blanchedalmond;">User Login...!!</h2></center>
    
    <body>
        
        <div class="login-page">
            <div class="form">
                <form class="register-form" name="reg" onSubmit="return validation()" action="reg.php" method="post">
                    <input type="text" name="uname" placeholder="User Name" required="uname">
                    <input type="password" name="pass" placeholder="Password" required="pass">
                    <input type="email" name="em" placeholder="User email-id" required="em">
                    <input type="number" name="phno" placeholder="Phone-number">
                    <input type="text" name="gend" placeholder="Gender">
                    <input type="text" name="city" placeholder="Residing City">
                    <button type="submit" value="Submit">Register</button>
                    <p class="message">Already Registered?<a href="#">Login</a></p>
                </form>
                <form class="login-form" name="log" onSubmit="return valid()" action="logo.php" method="post">
                    <input type="text" name="unm" placeholder="User Name" required="unm">
                    <input type="password" name="pwd" placeholder="Password" required="pwd">
                    <button type="submit" value="Submit">Login</button>
                    <p class="message">Not Registered?<a href="#">Register</a></p>
                </form>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js">
        </script>
        
        <script>
            $('.message a').click(function()
                                {
                $('form').animate({height:"toggle",opacity:"toggle"},"slow");
            });
        </script>
        <script type="text/javascript">
            function validation(){
                var uname=document.reg.uname.value;
                var pass=document.reg.pass.value;
                var em=document.reg.em.value;
                var phno=document.reg.phno.value;
                var gend=document.reg.gend.value;
                var city=document.reg.city.value;
                
                if(uname==""){
                    alert("Please enter username");
                    return;

                }
                else if(pass==""||pass.length<5){
                    alert("Password must have minimum 5 characters");
                    return;
                }
                else if(em.length<10){
                    alert("Please enter valid email-id");
                }
                else if(phno==""||phno.length<8){
                    alert("Enter valid phone number");
                    return;
                }
                else if(gend==""){
                    alert("Enter appropriate gender");
                    return;
                }
                else if(city==""){
                    alert("Please enter your city");
                    return;
                }
            }
            function valid(){
                var unm=document.log.unm.value;
                var pwd=document.log.pwd.value;
                
                if(unm==""){
                    alert("Please enter valid username");
                    return;
                }
                if(pwd==""){
                    alert("Please enter valid password");
                    return;
                }
            }
        </script>
        <footer>
           <p>Are you an admin? <a href="adminlog.php"> Admin_login</a></p>
           
        </footer>
    </body>
</html>