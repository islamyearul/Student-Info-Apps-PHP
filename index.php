
<?php
  include("function.php");

   $obj = new studentInfo();
  if(isset($_POST['add_data'])){
 $add_massage =  $obj->addData($_POST);

  }



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Students Info Application</title>
    <style>
      body{
        background:#87D0D9 ;
      }
      div{
        background: #fff;
      }
    </style>
  </head>
  <body>

  <div class="container col-md-6 ofset-md-3 my-4 p-4 shadow">
      <h2 class="align-center"><a href="index.php">Students Information Apps</a></h2>

      <?php if(isset($add_massage)){ echo $add_massage; } ?>
      
      <form action="" method="post" enctype="multipart/form-data">


        <div class="form-group">
          <input name="st_name" class="form-control py-2" type="text" placeholder="Enter Your Name" />
        </div>
        <div class="form-group">
          <input name="st_roll" class="form-control py-2" type="number" placeholder="Enter Your Roll No "/>
        </div>
        <div class="form-group">
          <input name="st_phone" class="form-control py-2" type="number" placeholder="Enter Your Phone Number "/>
        </div>
        <div class="form-group form-control">
           <label class="small mb-1" for="gender">Gender:</label>&nbsp;&nbsp;&nbsp;
           <input name="st_gender" class="py-2" type="radio" value="Male" /> &nbsp;Male&nbsp; 
           <input name="st_gender" class="py-2" type="radio" value="Female" />&nbsp;Female 
        </div>
        <div class="form-group form-control">
           <label class="small mb-1" for="district">District:</label>&nbsp;&nbsp;&nbsp;
           <select name="st_district" id="">
               <option value="Noakhali">Noakhali</option>
               <option value="Dhaka">Dhaka</option>
               <option value="Khulna">Khulna</option>
               <option value="Barishal">Barishal</option>
               <option value="Rajshahi">Rajshahi</option>
           </select>
        </div>
        <div class="form-group form-control">
           <label class="small mb-1" for="education">Education:</label>&nbsp;&nbsp;&nbsp;
           <input name="st_education[]" class="py-2" type="checkbox" value="SSC" /> &nbsp; SSC &nbsp; 
           <input name="st_education[]" class="py-2" type="checkbox" value="HSC" /> &nbsp; HSC &nbsp; 
           <input name="st_education[]" class="py-2" type="checkbox" value="BSC" /> &nbsp; BSC &nbsp; 
           <input name="st_education[]" class="py-2" type="checkbox" value="MSC" /> &nbsp; MSC &nbsp; 
        </div>

        <div class="form-group form-control pb-5">
           <label class="small" for="image">Image:</label>&nbsp;&nbsp;&nbsp;
           <input name="st_image" class="" type="file" /> 
        </div>
        <div class="form-group">
          <textarea name="st_profile" class="form-control py-2" id="" cols="30" rows="5" placeholder="Enter Your Prifile Details "></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-success form-control" name="add_data" value="Add Data">
        </div>

        
      </form>
      <h3 class="text-center"><a href="view.php">View List</a></h3>
   
  </div>

  

  










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>