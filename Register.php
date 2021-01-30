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
        h2{
    font-family: 'oswald';
    margin-top: 0px;
    padding-top: 0px;

}

#signup-box{
    position: relative;
    margin: 5% auto;
    height: 400px;
    width: 880px;
    background-color: rgb(255, 255, 255);
    border-radius: 20px 20px 20px 20px; 
    border:1px solid black;
}

.left-box{
    width: 440px;
    height: 400px;
    padding: 40px;
    position: absolute;
    left: 0;
    background-image: url("https://st4.depositphotos.com/3096625/38704/v/600/depositphotos_387048970-stock-illustration-hny-2021-logo-happy-new.jpg");
    background-size: cover;
    background-position: center;
    border-radius: 20px 0px 0px 20px;
}

.right-box{
    position: absolute;
    right: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 440px;
    height: 400px;

}
input[name="firstname"]
{
    width: 100%;
    height: 40px;
    border-radius: 5px;
    border: 1px solid  #707070;
    margin-left: -0.75rem;
    
}

input[name="lastname"]
{
    width: 100%;
    height: 40px;
    border-radius: 5px;
    border: 1px solid  #707070;
    margin-left: 12px;
    
}

input[name="email"],input[type="password"]
{
    display:block;
    box-sizing: border-box;
    border: 1px solid  #707070;
    margin-bottom:5px ;
    padding: 4px;
    width: 100%;
    height: 40px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 5px;
    
}
input[type="submit"]
{
    width: 100%;
    border-radius: 20px;
    background-color: #486D87;
    color: #FFB838;
    font-family: 'oswald';
    font-size: 20px;
    font-weight: bold;
    border: none;
    height: 42px;
}

input[type="submit"]:hover
{
  background: #FFB838 ;
  color: #486D87;
}

label{
    margin: 0;
    padding: 0;
    font-size: 16px;
    font-family: 'Oswald';
    font-weight: 100;
    
}

#la-email{
    margin-left: -0.75rem;
}

#fname{
    margin-left: -0.75rem;
}
#lname{
    margin-left: 12px;
}
.modal-content {
  
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
    </style>
</head>
<body >
    <form  action="/action_page.php"
           method="POST">
    <div id="signup-box">
        <div class="left-box">

        </div>
        <div class="right-box" >
            <h2>Sigh up</h2>
            
            <div class="container">
                <div class="row">
                    <div class="col">
                        <label id="fname" for="firstname">Firstname<span style="color: red;">*</span></label>
                        <input type="text" name="firstname" placeholder="" required>
                    </div>

                    <div class="col">
                        <label id="lname" for="lastname">Lastname<span style="color: red;">*</span></label>
                        <input type="text" name="lastname" placeholder="" required> <br>
                    </div>
                </div>
            </div>

            <label for="email">E-mail <span style="color: red;">*</span></label>
            <input type="text" name="email" placeholder="" name="uname" required>

            <label for="password">Password <span style="color: red;">*</span></label>
            <input type="password" name="password" placeholder="" name="psw" required>
            <p style="font-family: 'oswald'; font-size: 14px; font-weight: 100;">By creating an account, I agree to Pixcamera's <a href="#" style="color:dodgerblue">Terms & Privacy</a></p>
            <button type="submit" id="register"  class="btn " style="background-color: rgb(72, 109,135); font-size: 20px; font-weight: bold;width: 100%;color:rgb(255, 184, 56);" >REGISTER </button>
            
        </div>
    </div>
    </form>
    <script>
        document.getElementById("register").onclick = function(){
          location.href = "index-mirror.php";
        }
      </script>
</body>
</html>

