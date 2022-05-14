<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
      #all{
        display: grid;
        grid-template-columns: repeat(4,1fr);
    
      }
#cont{ width: 600px;
}
@media only screen and (max-width: 1025px) {
  #cont { width: 600px;
  }
}
        @media only screen and (max-width: 576px) {
  #cont { width: 400px;
  }
  .size{ height: 0.5em;
         width: 0.5em;   
  }
}
    </style>
</head>
<body>
<header style="background-color:black">
        <nav class=" navbar navbar-expand-md navbar-light ">
            <div class="container">
              <a class="navbar-brand" href="admin_page.php"><img src="images/logo.png" style="width: 100px; height: 50px;"></a>
                <div class="nav navbar-nav1">
                    <a href="addProduct.php" class=" text-white btn btn3 mx-4">HOME</a>
                    <a href="view.php" class="text-white btn btn3 mx-4"> PRODUCTS</a>
                    
                </div>
            </div>
        </nav>
</header>

 
<img src="images/colthes.jpg" alt=""  width="100%" height=400px style = "margin-top: 1px">


<div class="p-5 my-4  rounded-3" style ="text-align:center;">
        <h1  style=" color :#b57f38 ;font:bold;"> Show Products </h1>
</div >
<div id="all">
<?php 

session_start();
if(!empty ( $_SESSION ['Item']) && !empty ( $_SESSION ['Price'])  && !empty ($_SESSION ['Image']) && !empty  ($_SESSION ['Describtion'])){
    $_SESSION ['Item'] ;
    $_SESSION ['Price'];
    $_SESSION ['Image'] ;
    $_SESSION ['Describtion'] ;
     $arr1 = explode("<br>",$_SESSION ['Item']) ;
     $arr2 = explode("<br>",$_SESSION ['Price']) ;
     $arr3 = explode("<br>",$_SESSION ['Image']) ;
     $arr4 = explode("<br>",$_SESSION ['Describtion']) ;
    
     for ($i=0 ; $i<count($arr1)-1 ; $i++){
        echo "<div  class='col-md-10 mt-4 ' >
        <div class='card '>
        <div class='card-body'>
        <img class='card-img-top' src='img/".$arr3[$i]."' alt='Card image cap'  '>
        </div>
        <div class='card-body'>
          <h4 class='mb-2'>". $arr1[$i]."</h4>
          <p class='card-text'>Price :". $arr2[$i]."</p>
          <p class='card-text'>". $arr4[$i]."</p>
          </div>
        </div>
        </div>
      ";
    
    
     }
      
    }else {
    echo "<div class= 'container' id ='error'> <h2> There are no Products </h2> </div>";
    }
    ?>
</div>
  <footer class="text-center text-lg-start" style="background-color: black;">
    <div class="container d-flex justify-content-center py-5">
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
      <i class="fa-brands fa-linkedin"></i>
      </button>
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
      <i class="fa-brands fa-github"></i>
      </button>
      <!-- <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
        <i class="fab fa-instagram"></i>
      </button>
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
        <i class="fab fa-twitter"></i>
      </button> -->


      
    </div>
    <div class=" nav navbar-nav1  d-flex justify-content-center">
                    <a href="viewProducts.php" class=" text-white btn btn3 mx-4">HOME</a>
                    <a href="admin_page.php" class="text-white btn btn3 mx-2">ADD PRODUCTS</a>
                    <!-- <a href="#" class=" text-white btn btn3 mx-4 ">ABOUT</a> -->
                    <!-- <a href="#" class="btn btn3">CONTACT</a>
                    <a href="#" class="btn btn2">Account</a> -->
                    <!-- <a href="#" class="btn btn2"><i class="fa fa-search"></i></a>
                    <a href="#" class="btn btn2"><i class="fa fa-shopping-cart"></i></a> -->
                </div>

    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright
     
    </div>
    <!-- Copyright -->
    <script></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  </footer>
  
</div>
</body>
</html>