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
</style>
</head>
<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom1">
            <div class="container-fluid">
                <a class="navbar-brand" href="index-mirror.php">
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
                  <!--
                  <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                         <b>ALL PRODUCT</b> 
                        </button>
                        <ul class="dropdown-menu" style="background-color: black;" aria-labelledby="dropdownMenuButton" >
                          <li><a class="dropdown-item droper" href="#">IMAGE</a></li>
                          <li><a class="dropdown-item droper" href="#">GRAPHICS</a></li>
                          <li><a class="dropdown-item droper" href="#">PRESET</a></li>
                          <li><a class="dropdown-item droper" href="#">TEMPLATE</a></li>
                          <li><a class="dropdown-item droper" href="#">COURSE</a></li>
                          <li><a class="dropdown-item droper" href="#">ARTICLE</a></li>
                        </ul>
                      </div>-->
                  <input class="form-control form-control-plaintext" type="search"  placeholder=" Search Product..." >
                  <button class="btn  custom2"  type="submit"><i class="fas fa-search"></i></button>
               
                </div>
                <form class="d-flex">
                    <div>
                        <img src="profile.png" alt="">
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
        <p style=" font-weight: bold; font-size: 28px;">NEWYEAR COLLECTION</p>
                <div class="row">
                    <div class="col-4" >
                        <a href="Mirror-detail-image-id-1.php"><img id="1" src="1.jpg" alt="1" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4" >
                        <a href="Mirror-detail-image-id-2.php"><img  id="2" src="2.jpg" alt="2" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-3.php"><img id="3" src="3.jpg" alt="3" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                </div>

                <div class="row" style="margin-top: 2%;">
                    <div class="col-4" >
                        <a href="Mirror-detail-image-id-4.php"><img id="4" src="4.jpg" alt="4" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4" >
                       <a href="Mirror-detail-image-id-5.php"><img id="5" src="5.jpg" alt="5" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-6.php"><img id="6" src="6.jpg" alt="6" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                </div>

                <div class="row" style="margin-top: 2%;">
                    <div class="col-4">
                       <a href="Mirror-detail-image-id-7.php"><img id="7" src="7.png" alt="7" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-8.php"><img id="8" src="8.jpg" alt="8" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-9.php"><img id="9" src="9.jpg" alt="9" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                </div>

                <div class="row" style="margin-top: 2%;">
                    <div class="col-4" >
                        <a href="Mirror-detail-image-id-10.php"><img id="10" src="10.jpg" alt="10" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-11.php"><img id="11" src="11.png" alt="11" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-12.php"><img id="12" src="12.jpg" alt="12" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                </div>

                <div class="row" style="margin-top: 2%;">
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-13.php"><img id="13" src="13.jpg" alt="13" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-14.php"><img id="14" src="14.jpg"14" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-15.php"><img id="15" src="15.png" alt="15" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                </div>

                <div class="row" style="margin-top: 2%;">
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-16.php"><img id="16" src="16.jpg" alt="16" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                       <a href="Mirror-detail-image-id-17.php"><img id="17" src="17.jpeg" alt="17" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-18.php"><img id="18" src="18.jpg" alt="18" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                </div>

                <div class="row" style="margin-top: 2%;">
                    <div class="col-4">
                     <a href="Mirror-detail-image-id-19.php"><img id="19" src="19.jpg" alt="19" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-20.php"><img id="20" src="20.jpg" alt="20" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                    <div class="col-4">
                        <a href="Mirror-detail-image-id-21.php"><img id="21" src="21.jpg" alt="21" width="100%" height="100%" style=" border-radius: 1.5%;"></a>
                    </div>
                </div>
    
    </div>
    <!--Footer zone-->
    <section style="background-color: rgb(255, 184, 56);padding-top: 30px;margin-top: 100px;">
        <div class="container">
          <div class="row">
            <div class="col-md-2 " >
              <span><b style="color: white; font-size: 33px ;"><a href="index-mirror.php"style="color: white;text-decoration: none;"> PIXCAMERA</a></b></span>
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
                <li style="margin-bottom: 10px;margin-top: 15px;"><a href="index2-mirror.php"style="color: white; text-decoration: none;">Image</a></li>
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