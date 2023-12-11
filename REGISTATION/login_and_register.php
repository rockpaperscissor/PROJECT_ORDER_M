<?php
include 'connection.php';

if (isset($_POST['Signup'])) {
    $name1 = $_POST['Fullname'];
    echo $name1;
    $phone1 = $_POST['Phone'];
    $email1 = $_POST['Email'];
    $uname1 = $_POST['Username'];
    $password1 = $_POST['Password'];
     		 		 	
    // Insert data into the database
    $sql = "INSERT INTO tbl_users (vchr_user_fullname, vchr_user_mob , vchr_user_email, vchr_user_name , vchr_user_password) VALUES ('$name1', '$phone1', '$email1', '$uname1', '$password1')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Sign up successful";
    } else {
        die(mysqli_error($con));
    }
}


// LOGIN LOGIN LOGIN LOGIN

if (isset($_POST['log'])){
    // $name1 = $_POST['fullname'];
    // echo $name1;
    // $email1 = $_POST['email'];
    $uname1 = $_POST['Uname'];
    $password1 = $_POST['Password'];
    // echo $password1;
    // // 
     
    $sql = "select vchr_user_name ,vchr_user_password from tbl_users where vchr_user_name ='$uname1' and vchr_user_password ='$password1' ";
    $result = mysqli_query($con,$sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            echo "Login successful";
            session_start();
            $_SESSION['username']=$uname1;
            header('location:frontpage.php');
        }
        else{
            echo "Invalid data";
           
        }
    }

}






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="drop.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
</head>
<body>
    <script>
        $(function(){
    $.validator.addMethod("customPassword", function(value, element) {
        return this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(value);
    }, "Password must contain at least one lowercase letter, one uppercase letter, one special character, and have a minimum length of 8 characters");

    $("#forms").validate({
        rules:{
            Fullname:{
                required: true,
                minlength: 4
            },
            Phone:{
                required: true,
                minlength: 10,
                maxlength: 10
            },
            Username:{
                required: true,
                minlength: 2
            },
            Password:{
                required: true,
                minlength: 8,
                customPassword: true
            },
            Confirm_password:{
                required: true,
                equalTo: '#pass1'
            },
            Email:{
                required: true,
                email: true
            },
            agree:{
                required: true
            }
        },
        messages:{
            Fullname:{
                required: 'Please enter your full name',
                minlength: 'Full name must be at least 4 characters long'
            },
            Phone:{
                required: 'Please enter your phone number',
                minlength: 'Phone number must be 10 digits long',
                maxlength: 'Phone number must be 10 digits long'
            },
            Username:{
                required: 'Please enter a username',
                minlength: 'Username must be at least 2 characters long'
            },
            Password:{
                required: 'Please enter a password',
                minlength: 'Password must be at least 8 characters long'
            },
            Confirm_password:{
                required: 'Please enter the password again',
                minlength: 'Password must be at least 8 characters long',
                equalTo: 'Please enter the same password'
            },
            Email:{
                required: 'Please enter an email address',
                email: 'Please enter a valid email address'
            },
            agree:{
                required: 'Please agree to our terms and conditions'
            }
        },
       
    });
});

        $(document).ready(function(){
           

            $('#goto-register').on('click',function(){
                $('.REGISTER').show();
                $('.LOGIN').hide();
            })
            $('#goto-login').on('click',function(){
                $('.REGISTER').hide();
                $('.LOGIN').show();
            })
            $('#goto-forgot').on('click', function () {
    window.location.href = 'resetPass.php';
});

            //changes
            // $('#fname').on('change',function(){
            //     let a = $(this).val();
            //     console.log(a);
            //     let b = (a + "@123");
            //     $('#pass1').val(b);
            //     $('#pass2').val(a + "@123");
            //     $('#email1').val(a+"@gmail.com");
            //     $('#user1').val(a);
                


            // })
            // $.ajax({
            //     url:'',
            //     type:'post',
            //     data:'Fullname=&abc',
            //     dataType:'json',
            //     success:function(response){
            //         $('').html(json.stringify(response))
            //     },
            //     error:function(xhr,status,error){
            //         $('').html('error is:'+ status+error)
            //     }

            // })



        })
    </script>
    <div class="LOGIN">
    <div class="container">
        <div class="drop">
            <div class="contentBox">
                <h2>Sign in</h2>
            <form  method="post">
                <div class="inputBox">
                    <input type="text" placeholder="Username" name="Uname">
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="Password" name="Password" >
                </div>
                <div class="inputBox">
                    <input type="submit"value="login" name='log'>
                </div>

            </form></div>
            
        </div>
        <button class="sign"       id="goto-register">SIGN UP</button>
        <button class="forgot"       id="goto-forgot">FORGOT PASSWORD</button>

    </div>
</div>


<div class="REGISTER">
    <div class="container">
        <div class="drop">
            <div class="contentBox">
                <h2>Sign up</h2>
            <form id="forms"  method="post">
                <div class="inputBox">
                    <input type="text" placeholder="Fullname" name="Fullname" id="fname">
                </div>
                <!-- pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" -->
                <div class="inputBox">
                    <input type="tel" id="phone" name="Phone"  placeholder="phone"    />
                    
                </div>
                <div class="inputBox">
                    <input type="email" placeholder="email" name="Email" id="email1">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="Username" name="Username" id="user1">
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="Password" name="Password" id="pass1">
                </div>
                <div class="inputBox">
                    <input type="password" placeholder="ConfirmPassword" name="Confirm_password" id="pass2">
                </div>

                <div class="inputBox">
                    <input type="submit"value="Signup"  name= "Signup">
                </div>

            </form></div>
        </div>
        <button    class="sign" id="goto-login">SIGN IN</button>

    </div>
</div>
</body>
</html>


