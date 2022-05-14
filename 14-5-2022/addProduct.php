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
              <a class="navbar-brand" href="viwe.php"><img src="images/logo.png" style="width: 100px; height: 50px;"></a>
                <div class="nav navbar-nav1">
                    <a href="addProduct.php" class=" text-white btn btn3 mx-4">HOME</a>
                    <a href="view.php" class="text-white btn btn3 mx-4"> PRODUCTS</a>
                    
                </div>
            </div>
        </nav>
</header>

 
<img src="images/colthes.jpg" alt=""  width="100%" height=400px style = "margin-top: 1px">


<div class=>
  	<div class="p-5 my-4  rounded-3" style ="text-align:center;">
         
        <h1  style=" color :#b57f38 ;font:bold;"> Add Product form </h1>
        
    </div>
<div class="container"  style=" width: 800px; border-radius: 25px;background-color:#e3e1e1; padding : 50px 30px;" >

  <br><br>
  <form  action="" method="post" style=" color: black;" enctype="multipart/form-data" > 
    <div class="form-group">
      <label for="Item">Product Name :</label>
        <input  type="text" class="form-control" id="Item" placeholder="Enter Product Name" name="Item" required>
    </div><br>
    <div class="form-group">
      <label  for="Price">Price :</label>
        <input  type="number" class="form-control" id="Price" placeholder="Enter Price" name="Price" required>
    </div><br>
    <div class="form-group">
      <label for="Image">Image :</label>
        <input  type="file"  id="Image"  name="Image" required>
     
    </div><br>
    <div class="form-group">
      <label  for="Describtion">Describtion :</label>
     <textarea  class="form-control" id="Describtion" placeholder="Enter Describtion" name="Describtion" required cols="30" rows="10"></textarea>      
    </div><br>
    <div class="form-group">        
      <input type="submit" class="btn"  name="button" value="Add Product" style="background-color: #363535;  color: white;">
      <!-- <input type="submit" class="btn"  name="button" value="View Product" style="background-color: #363535;  color: white;">
       -->
    </div>
      
    
  </form>
 
</div>       
<div class="container"  style="margin:100px 100px; ">
<div class="p-5 my-4  rounded-3" style ="text-align:center;">
         
         <h1  style=" color :#b57f38 ;font:bold;"> All Products </h1>
         
     </div>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Describtion</th>
    </tr>
  </thead>
  <tbody>
<?php 

session_start();

// $_SESSION ['Item'] = " ";
// $_SESSION ['Price'] =" ";
// $_SESSION ['Image'] =" ";
// $_SESSION ['Describtion'] =" ";

if(isset($_POST['button'])) {
  move_uploaded_file($_FILES['Image']['tmp_name'],'img/'.$_FILES['Image']['name']);
$_SESSION ['Item'] .= $_POST['Item']."<br>";
$_SESSION ['Price'] .= $_POST['Price']."<br>";
$_SESSION ['Image'] .= $_FILES['Image']['name']."<br>";
$_SESSION ['Describtion'] .= $_POST['Describtion']."<br>";
$arr1 = explode("<br>",$_SESSION ['Item']) ;
     $arr2 = explode("<br>",$_SESSION ['Price']) ;
     $arr3 = explode("<br>",$_SESSION ['Image']) ;
     $arr4 = explode("<br>",$_SESSION ['Describtion']) ;
for ($i=0 ; $i<count($arr1)-1 ; $i++){
    echo " <tr scope='col'> <td>".$arr1[$i]
    ."</td> <td> ".$arr2[$i]."</td> <td>". 
    "<img width= 100px height=100px src= 'img/".$arr3[$i]."' </td> <td> ".
    $arr4[$i] ."</td> </tr> ";
}
}
?>
</tbody>
 </table> 
</div>
</div>
<div class=" mt-5">

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