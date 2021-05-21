<?php      
    include('connect.php');  
    
    session_start();

        if(isset($_POST['login'])){ // start
           $username = $_POST['uname'];  
           $password = $_POST['password'];  
           
            if(empty($username) || empty($password)){
               echo "<script> alert('Please fill up password and username'); window.location='login.php'; </script>";
                exit();
            } else{ 

                 $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
                 $result = mysqli_query($connection, $sql);    
                 $count = mysqli_num_rows($result);  
          
                 if($count > 0){  
                    $_SESSION['status'] = 'valid';
                    header("location: index.php");
                    exit();
                }  
                else{  
                    $_SESSION['status']= 'invalid';
                 echo "<script> alert('Something Went Wrong'); window.location='login.php'; </script>";
                   exit();
             }     
        } //end of else
    }   // end of if  
?>