
<?php
  include("function.php");

  $obj = new studentInfo();
  $datas = $obj->showData();

   if(isset($_GET['status'])){
       if($_GET['status']=['edit']){
           $id = $_GET['id'];
          $returnData = $obj->showDataById($id);
       }
   }

   if(isset($_POST['update_data'])){
      $updateMessage =  $obj->updateData($_POST);
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
    <style>
      body{
        background:#D987D8 ;
      }
      div{
        background: #fff;
      }
    </style>
    <title>Students Info Application</title>
  </head>
  <body>

  <div class="container col-md-6 ofset-md-3 my-4 p-4 shadow">
      <h2 class="align-center"><a href="index.php">Students Information Update</a></h2>

      <?php if(isset($updateMessage)){ echo $updateMessage; } ?>
      
      <form action="" method="post" enctype="multipart/form-data">


        <div class="form-group">
          <input name="up_name" class="form-control py-2" type="text" value="<?php echo $returnData['namee'];?>" />
        </div>
        <div class="form-group">
          <input name="up_roll" class="form-control py-2" type="number" value="<?php echo $returnData['roll'];?>"/>
        </div>
        <div class="form-group">
          <input name="up_phone" class="form-control py-2" type="number" value="<?php echo $returnData['phone'];?>"/>
        </div>
        <div class="form-group form-control">
           <label class="small mb-1" for="gender">Gender:</label>&nbsp;&nbsp;&nbsp;
           <input name="up_gender" class="py-2" type="radio" value="Male" <?php if($returnData['gender']=="Male"){ echo "checked";}?> /> &nbsp;Male&nbsp; 
           <input name="up_gender" class="py-2" type="radio" value="Female" <?php if($returnData['gender']=="Female"){ echo "checked";}?>  />&nbsp;Female 
        </div>
        <div class="form-group form-control">
           <label class="small mb-1" for="district">District:</label>&nbsp;&nbsp;&nbsp;
           <select name="up_district" id="">
               <option value="Noakhali" <?php if ($returnData['district']=='Noakhali') { echo "SELECTED"; } ?> >Noakhali</option>
               <option value="Dhaka" <?php if ($returnData['district']=='Dhaka') { echo "SELECTED"; } ?> >Dhaka</option>
               <option value="Khulna" <?php if ($returnData['district']=='Khulna') { echo "SELECTED"; } ?> >Khulna</option>
               <option value="Barishal" <?php if ($returnData['district']=='Barishal') { echo "SELECTED"; } ?> >Barishal</option>
               <option value="Rajshahi" <?php if ($returnData['district']=='Rajshahi') { echo "SELECTED"; } ?> >Rajshahi</option>
           </select>
        </div>
        <div class="form-group form-control">
           <label class="small mb-1" for="education">Education:</label>&nbsp;&nbsp;&nbsp;

           <?php $data = $returnData['education'];
            $edu= explode(" ", $data);
            //$edu = array_pop($educa);
            //print_r($edu);
           
              function check($input, $value){
                 if(in_array($value, $input)){
                   echo "checked";
                 }
              }
            
           
           ?>
            
           <input name="up_education[]" class="py-2" type="checkbox" value="SSC" <?php  check($edu, "SSC");  ?> /> &nbsp; SSC &nbsp; 
           <input name="up_education[]" class="py-2" type="checkbox" value="HSC" <?php check($edu, "HSC");  ?> /> &nbsp; HSC &nbsp; 
           <input name="up_education[]" class="py-2" type="checkbox" value="BSC" <?php check($edu, "BSC");   ?>/> &nbsp; BSC &nbsp; 
           <input name="up_education[]" class="py-2" type="checkbox" value="MSC" <?php check($edu, "MSC");  ?> /> &nbsp; MSC &nbsp; 
        </div>

        <div class="form-group form-control pb-5">
           <label class="small" for="image">Image:</label>&nbsp;&nbsp;&nbsp;
           <input name="up_image" class="" type="file" /> 
        </div>
        <div class="form-group">
          <textarea name="up_profile" class="form-control py-2" id="" cols="30" rows="5"><?php echo $returnData['profilee'];?></textarea>
        </div>
        <input type="hidden" value="<?php echo $returnData['id'];?>" name="id">
        <div class="form-group">
          <input type="submit" class="btn btn-success form-control" name="update_data" value="Update Data">
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