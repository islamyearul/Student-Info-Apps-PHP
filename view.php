
<?php
 
 include("function.php");
 $obj = new studentInfo();
 $datas = $obj->showData();

 if(isset($_GET['status'])){
     if($_GET['status']=['delete']){
         $del_id= $_GET['id'];
        $delMessage =  $obj->deleteData($del_id);
     }
 }




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
      body{
        background:#F2968A ;
      }
      div{
        background: #fff;
      }
    </style>
    <title>Document</title>
</head>
<body>
    

    
  <div class="container my-4 p-2 shadow" >
  <h2 class="pt-3 text-center"><strong class="text-danger">Students Information Table</strong> --- <a href="index.php">Add Information</a></h2><hr><hr><br>
  <?php if(isset($delMessage)){ echo $delMessage ;} ?>
      <table class="table">
         <thead>
         <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Roll</th>
              <th>Phone</th>
              <th>Gender</th>
              <th>District</th>
              <th>Education</th>
              <th>Profile</th>
              <th>Image</th>
              <th>Action</th>
          </tr>
         </thead>
         <tbody>

         <?php while($data=mysqli_fetch_assoc($datas)){ ?>

             <tr>
                 <td><?php echo $data['id']; ?></td>
                 <td><?php echo $data['namee']; ?></td>
                 <td><?php echo $data['roll']; ?></td>
                 <td><?php echo $data['phone']; ?></td>
                 <td><?php echo $data['gender']; ?></td>
                 <td><?php echo $data['district']; ?></td>
                 <td><?php echo $data['education']; ?></td>
                 <td><?php echo $data['profilee']; ?></td>
                 <td><img style="height: 100px;" src="upload/<?php echo $data['imagee']; ?>" alt=""></td> 
                 <td>
                     <a href="edit.php?status=edit&&id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a><br><br>
                     <a onclick="return confirm('Are you Sure')" href="?status=delete&&id=<?php echo $data['id']; ?>" class="btn btn-primary">Delete</a>
                 </td>
             </tr>

             <?php   } ?>
         </tbody>
         
      </table>
      
  </div>














  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <sc
</body>
</html>