<?php
    class studentInfo{
        private $conn;
        public function __construct()
        {
            #database Host, D-user, D-pass, D-name
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = 'student_crud_app';
            $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
            
            if(!$this->conn){
                die("Database Connection Erroe");
            }      
        }
        public function addData($data){
            $name = $data['st_name'];
           $roll = $data['st_roll'];
           $phone = $data['st_phone'];
            $gender = $data['st_gender'];
           $district = $data['st_district'];           
                $edu = $data['st_education'];          
                  $education = "";
                foreach ($edu as $item) {
                $education .= $item . " ";             
                }
                  $education;   
                 $image = $_FILES['st_image']['name'];
                 $image_tmp = $_FILES['st_image']['tmp_name'];
                 $profile = $data['st_profile'];

           $query = "INSERT INTO student_info(namee,roll,phone,gender,district,education,imagee,profilee) VALUE('$name',$roll,$phone,'$gender','$district','$education','$image','$profile')";
           if(mysqli_query($this->conn, $query)){
               move_uploaded_file($image_tmp, "upload/".$image);
               return " Information Added Successufully";
           }
        }
        public function showData(){
            $query = "SELECT * FROM student_info";
            if(mysqli_query($this->conn, $query)){
                $returnData = mysqli_query($this->conn, $query);
                return $returnData;
            }

        }
        public function showDataById($id){
            $query = "SELECT * FROM student_info WHERE id = $id";
            if(mysqli_query($this->conn, $query)){
                $returnData = mysqli_query($this->conn, $query);
                $datas = mysqli_fetch_assoc($returnData);
                return $datas;
            }

        }
        public function updateData($data){
            $up_id = $data['id'];
            $name = $data['up_name'];
            $roll = $data['up_roll'];
            $phone = $data['up_phone'];
            $gender = $data['up_gender'];
            $district = $data['up_district'];           
                $edu = $data['up_education'];          
                   $education = "";
                 foreach ($edu as $item) {
                 $education .= $item . " ";             
                 }
                     $education;   
                     $image = $_FILES['up_image']['name'];
                     $image_tmp = $_FILES['up_image']['tmp_name'];
                   $profile = $data['up_profile'];

           $query = "UPDATE student_info SET namee ='$name', roll=$roll, phone=$phone, gender='$gender', district='$district', education='$education', imagee='$image', profilee='$profile' WHERE id=$up_id";
            mysqli_query($this->conn, $query);

           if(mysqli_query($this->conn, $query)){
               move_uploaded_file($image_tmp, "upload/".$image);
               return " Information Update Successufully";
           }
 
        }
        public function deleteData($id){
             $allData = "SELECT * FROM student_info WHERE id=$id";
             $dataconn = mysqli_query($this->conn, $allData);
             $img_data = mysqli_fetch_assoc($dataconn);
            @ $img = $img_data['imagee'];
            
            $query = "DELETE FROM student_info WHERE id=$id";
            if(mysqli_query($this->conn, $query)){
                @ unlink("upload/".$img);
                return "Delete Success";
            }

        }
    

}











?>