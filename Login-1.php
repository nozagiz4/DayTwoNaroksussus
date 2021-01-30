<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Pixcamera</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="icon/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image/png" href="logo.png">
    <style>
        body{
            font-family: 'Oswald';
            background-color:  rgb(255, 184, 56);
        }
        /* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}





.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.social-icons{
    margin: 30px auto;
    text-align: center;
}
.social-icons img{
  width: 40px;
  margin: 0 20px;
}
hr.rounded{
  border-top: 3px solid black;
  margin-left: 63.5px;
  margin-right: 63.5px;
  border-radius: 5px;
  margin-top: 30px;
}
    </style>
</head>
<body>
             
           <form class="modal-content animate" action="/action_page.php"
           method="POST" style="width: 500px;">
           
          
           <div class="container">
               <h1 style="margin-bottom: 50px;">Login</h1>
                <label for="uname">Username</label>
                <input type="text" placeholder="Enter Username" >

                <label for="uname">Password</label>
               <input type="password" placeholder="Password" >

               <button  id="login"  class="btn " style="background-color: rgb(72, 109,135); font-size: 20px; font-weight: bold;color:rgb(255, 184, 56);" >Log in </button>
                
               <div class="row" style="margin-top: 10px;">
                    <div class="col-6" style="text-align: center;">
                      <a href="Register.php" style="color: black; text-decoration: none;">Create an account</a>   
                    </div>
                   <div class="col-6"style="text-align: center; ">
                      <a href="#" style="color: black; text-decoration: none;">Forgot your password</a> 
                   </div>
                     
                </div>
                
              
                <hr class="rounded" style=" margin-top: 40px;" > 

                <div class="social-icons">
                    <img src="twitter.png" alt="">
                    <img src="facebook.png" alt="">
                    <img src="google.png" alt="">
                </div>
           </div>
               
           </form>
        </div>
    <script>
      document.getElementById("login").onclick = function(){
        location.href = "index-mirror.php";
      }
    </script>
    
</body>
</html>

