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
            font-family: 'oswald';
        }
        .l_R_B{
            -webkit-border-radius: 50px;
            border-radius: 50px;
        }
        .searchbox{
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
        .navbar-custom1{
            background-color: rgb(72, 109, 135);
        }
        .custom2{
            background-color: white;
        }
        .custom3{
            background-color: rgb(255, 184, 56);
            font-weight: bold;
            font-size: 14px;
        }
        .droper{
            color: white;
        }
        .droper:hover{
            color: black;
            transition: 10ms;
        }
        .nav2{
            color: white;
        }
        .impactive{
          -webkit-box-shadow: 0px 4px 11px 5px rgba(0,0,0,0.29); 
box-shadow: 0px 4px 11px 5px rgba(0,0,0,0.29);
        }
        .imgactive:hover{
            transition-delay: 50ms;
            -webkit-box-shadow: 0px 0px 20px 2px rgba(83, 83, 83, 0.59); 
            box-shadow: 0px 0px 20px 2px rgba(122, 122, 122, 0.59);
        }
        .page{
          list-style: none; padding: 0;
        }
        .img1 {
            transition: 0.3s ;
            margin: auto ;
            margin-top: 10px ;
            /*margin-bottom: 20px ;*/
        }
        
        .img1:hover {
            box-shadow: 0 8px 16px 0 rgb(160, 160, 160) ;
        }
        
        .overlay {
            position: absolute; 
            bottom: 20px; 
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5); 
            color: #f1f1f1; 
            width: 100%;
            transition: .5s ease;
            opacity:0;
            color: white;
            font-size: 20px;
            padding: 20px;
            text-align: center;
        }
        .img1:hover .overlay {
            opacity: 1;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 100%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
</style>
     
</head>
<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom1">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="logo.png" alt="" width="60" height="auto" class="d-inline-block align-top" style="margin-left: 40px;">
                    <b style="color: white; font-size: 42px ; padding-left: 10px; padding-right: 200px;"> PIXCAMERA</b>
                  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">  
                </ul>
                <div class="d-flex searchbox " style="height: 43px; background-color: white; margin-right: 30px; flex: auto;">
                    <select class="btn dropdown-toggle " >
                        <option selected class="dropdown-item droper" style="background-color: black;">ALL PRODUCT</option>
                        <option value="2"class="dropdown-item droper" style="background-color: black;">IMAGE</option>
                        <option value="3"class="dropdown-item droper" style="background-color: black;">GRAPHICS</option>
                        <option value="4"class="dropdown-item droper" style="background-color: black;">PRESET</option>
                        <option value="5"class="dropdown-item droper" style="background-color: black;">TEMPLATE</option>
                        <option value="6"class="dropdown-item droper" style="background-color: black;">COURSE</option>
                        <option value="7"class="dropdown-item droper" style="background-color: black;">ARTICLE</option>
                      </select>
                  <input class="form-control form-control-plaintext" type="search"  placeholder=" Search Product..." >
                  <button class="btn  custom2"  type="submit"><i class="fas fa-search"></i></button>
               
                </div>
                <form class="d-flex">
                    <div>
                        <img src="profile.png" alt="avatar">
                    </div>
                </form>
              </div>
            </div>
          </nav>
          <!--Yello zone-->
          <nav class="navbar navbar-expand-lg navbar-light custom3 ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <div class="collapse navbar-collapse" id="Content">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="margin-right: 95px;">
                        <a class="nav-link active" aria-current="page" href="#"></a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link active" style="color: white;" aria-current="page" href="#">ALL PRODUCT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"style="color: white;" href="#">IMAGE</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      GRAPHICS
                    </a>
                    <ul class="dropdown-menu" style="background-color: black;" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item droper"  href="#">For indesign</a></li>
                      <li><a class="dropdown-item droper"  href="#">For photoshop</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"style="color: white;" href="#">PRESET</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      TEMPLATE
                    </a>
                    <ul class="dropdown-menu"style="background-color: black;" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item droper" href="#">For davinchi resolve</a></li>
                      <li><a class="dropdown-item droper" href="#">For after effect</a></li>
                      <li><a class="dropdown-item droper" href="#">For sony vegas</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"style="color: white;" href="#">COURSE</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      ARTICLE
                    </a>
                    <ul class="dropdown-menu"style="background-color: black; " aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item droper" href="#">Sport</a></li>
                      <li><a class="dropdown-item droper" href="#">Entertainment</a></li> 
                    </ul>
                  </li>
                  
                </ul>
                <form class="d-flex">
                      <button class="btn " style="color: white; background-color: rgb(234, 71, 66); border: 3px white solid; font-weight: bold;">PROMOTION</button>
                  </form>
              </div>
            </div>
          </nav>
          
        </header>
           <!--End of modue Headerrrrrrrr-->
   <div class="container" style="margin-top: 180px;">
        <span><b style=" font-size: 25px;">THE IMAGE YOU WANT ALREADY HERE</b></span>

        <div class="row" style="margin-bottom: 30px;">
            
            <div class="col-12">
                <img src="new year.jpg" alt="Avatar" style="width: 100%; height: 474px;" class=" img1 rounded" >
            </div>
        
        </div>
        
         <span ><b style=" font-size: 25px;">POPULAR COLLECTION OF IMAGES</b></span>
            <div class="row" style="margin-top: 20px;margin-bottom: 30px;"> 
                <div class="col-6">
                    <a href="newyearcollection-mirror.php" style="text-decoration: none;">
                    <div class="card">
                         <img src="01.jpg" alt="Avatar" style="width: 100%;  height: auto; " class=" rounded" >
                         <div class="container">
                              <p style=" height: 40px;text-align: center;"><span style=" font-size: 21px; color: black;text-decoration: none;">New year</span> </p>
                         </div>
                    </div></a>
                </div>
                <div class="col-6">
                    <div class="card">
                        <img src="12345.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                        <div class="container">
                            <p style=" height: 40px;text-align: center;"><span style=" font-size: 21px; ">Christmas</span> </p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
        <div class="row" style="margin-bottom: 30px;">
            
            <div class="col-6">
                <div class="card">
                    <img src="holiday.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                    <p style=" height: 40px;text-align: center;"><span style=" font-size: 21px; ">Holiday</span> </p>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <img src="coldwind.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                    <p style=" height: 40px;text-align: center;"><span style=" font-size: 21px; ">Cold Wind</span> </p>
                </div>
            </div>
            
        </div>
        <span style="font-size: 25px;"><b>IMAGE CATEGORY</b></span>
        <div class="row" style="margin-top: 20px;margin-bottom: 25px;">
            
            <div class="col-4">
                <div class="card">
                    <img src="background.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                    <p style=" height: 25px;text-align: center;"><span style=" font-size: 21px; ">Background</span> </p>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                   <img src="nature.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                   <p style=" height: 25px;text-align: center;"><span style=" font-size: 21px; ">Nature</span> </p>
                </div>
                
            </div>
            <div class="col-4">
                <div class="card">
                   <img src="business.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                   <p style=" height: 25px;text-align: center;"><span style=" font-size: 21px; ">Business</span> </p>
                </div>
                
            </div>
        </div>
        <div class="row"style="margin-bottom: 25px;">
            
            <div class="col-4">
                <div class="card">
                   <img src="education.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                   <p style=" height: 25px;text-align: center;"><span style=" font-size: 21px; ">Education</span> </p> 
                </div>
                
            </div>
            <div class="col-4">
                <div class="card">
                   <img src="sport.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                   <p style=" height: 25px;text-align: center;"><span style=" font-size: 21px; ">Sport</span> </p> 
                </div>
                
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="3D.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                    <p style=" height: 25px;text-align: center;"><span style=" font-size: 21px; ">3D</span> </p> 
                </div>
                
            </div>
            
        </div>
        <div class="row">
            
            <div class="col-4">
                <div class="card">
                   <img src="Logo.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                   <p style=" height: 25px;text-align: center;"><span style=" font-size: 21px; ">Logo</span> </p> 
                </div>
                
            </div>
            <div class="col-4">
                <div class="card">
                   <img src="food and drink.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                   <p style=" height: 25px;text-align: center;"><span style=" font-size: 21px; "> Food and Drink</span> </p> 
                </div>
                
            </div>
            <div class="col-4">
                <div class="card">
                  <img src="MESCELLANEOUS.jpg" alt="Avatar" style="width: 100%; height: auto;" class="rounded" >
                  <p style=" height: 25px;text-align: center;"><span style=" font-size: 21px; "> Mescellaneous</span> </p> 
                </div>
                
            </div>
            
        </div>
        <div style="margin-top: 70px;">
        <span><b><center><a href="#" style="color: gray;text-decoration: none;"> POPULAR SEARCHES</a></center></b></span> <br>
        <div class="row">
            <div class="col-3">
                
            </div>
            <div class="col-2">
                <p><b><a href="#" style="color: gray; text-decoration: none;">1. Happy new year 2021</a> </b></p>
            </div>
            <div class="col-2">
                <p><b><a href="newyearcollection.php" style="color: gray;text-decoration: none;">2. New year</a> </b></p>
            </div>
            <div class="col-2">
                <p><b><a href="#" style="color: gray;text-decoration: none;">3. Merry Christmas</a> </b></p>
            </div>
            <div class="col-3">
                
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                
            </div>
            <div class="col-2">
                <p><b><a href="#" style="color: gray;text-decoration: none;">4. 2020</a> </b></p>
            </div>
            <div class="col-2">
                <p><b><a href="#" style="color: gray;text-decoration: none;">5. Chirstmas card</a> </b></p>
            </div>
            <div class="col-2">
                <p><b><a href="#" style="color: gray;text-decoration: none;">6. Festival</a> </b></p>
            </div>
            <div class="col-3">
                
            </div>
        </div>  
        <div class="row">
            <div class="col-3">
                
            </div>
            <div class="col-2">
                <p><b><a href="#" style="color: gray;text-decoration: none;">7. Logo</a> </b></p>
            </div>
            <div class="col-2">
                <p><b><a href="#" style="color: gray;text-decoration: none;">8. Background</a></b></p>
            </div>
            <div class="col-2">
                <p><b><a href="#" style="color: gray;text-decoration: none;">9. Infographic</a> </b></p>
            </div>
            <div class="col-3">
                
            </div>
        </div>                
    </div>    
        </div>
        
    <!--Footer zone-->
    <section style="background-color: rgb(255, 184, 56);padding-top: 30px;margin-top: 100px;">
        <div class="container">
          <div class="row">
            <div class="col-md-2 " >
              <span><b style="color: white; font-size: 33px ;"><a href="index.php"style="color: white;text-decoration: none;"> PIXCAMERA</a></b></span>
            </div>
            <div class="col-md-2">
              <span><b style="color: white; font-size: 20px ;"> MAIN PAGES</b></span>
              <ul class="list-unstyled" >
                <li style="margin-bottom: 10px;margin-top: 15px;"><a href="#"style="color: white; text-decoration: none;">About us</a></li>
                <li style="margin-bottom: 10px;"><a href="#"style="color: white;text-decoration: none;">Contact us</a></li>
                <li ><a href="#"style="color: white;text-decoration: none;">Promotion</a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <span><b style="color: white; font-size: 20px ;">POLICY</b></span>
              <ul class="list-unstyled" >
                <li style="margin-bottom: 10px;margin-top: 15px;"><a href="#"style="color: white; text-decoration: none;">Terms of Usage</a></li>
                <li style="margin-bottom: 10px;"><a href="#"style="color: white;text-decoration: none;">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-md-2">
              <span><b style="color: white; font-size: 20px ;"> CATEGORIES</b></span>
              <ul class="list-unstyled" >
                <li style="margin-bottom: 10px;margin-top: 15px;"><a href="#"style="color: white; text-decoration: none;">Image</a></li>
                <li style="margin-bottom: 10px;"><a href="#"style="color: white;text-decoration: none;">Graphics</a></li>
                <li style="margin-bottom: 10px;"><a href="#"style="color: white;text-decoration: none;">Preset</a></li>
                <li style="margin-bottom: 10px;"><a href="#"style="color: white;text-decoration: none;">Template</a></li>
                <li style="margin-bottom: 10px;"><a href="#"style="color: white;text-decoration: none;">Course</a></li>
                <li style="margin-bottom: 10px;"><a href="#"style="color: white;text-decoration: none;">Article</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <span><b style="color: white; font-size: 20px ;">SUBSCRIBE</b></span>
              <p style="color: white; margin-bottom: 20px;margin-top: 15px;">Subscribe to our newsletter, so that you can be the first to know about new offers and promotions.</p>
              <div class="d-flex" style="width: 262px; height: 51px; background-color: white;">
                <input class="form-control form-control-plaintext" style=" margin-left: 10px;" type="text"placeholder=" Enter Email Address" >
                <button style="background-color: black;color: white;font-weight: bold;width: 118px;height: 51px; border: 0ch;">SUBSCRIBE</button>
              </div>
            </div>
          </div>
        </div> 
      </section>
      <!--Footer layer 2-->
      <footer style="background-color: rgb(72, 109, 135); ">
        <div class="container">
          <div class="row">
            <div class="col-lg-10">
              <img src="footer1.png" alt="" style="padding-top: 20px; padding-bottom: 20px;">
            </div>
            <div class="col-2">
              <img src="footer2.png" alt=""style="padding-top: 20px; padding-bottom: 20px;">
            </div>
          </div>
        </div>
        
      </footer>
</body>
</html>
