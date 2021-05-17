<?php      
    include('connect.php');  
    
    session_start();

        if(isset($_POST['login'])){
           $username = $_POST['uname'];  
           $password = $_POST['password'];  
           
            if(empty($username) || empty($password)){
                header("location: login.php");
            } else{

                 $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
                 $result = mysqli_query($connection, $sql);    
                 $count = mysqli_num_rows($result);  
          
                 if($count == 1){  
                    $_SESSION['status'] = 'valid';
                    header("location: index.php");
                }  
                else{  
                    $_SESSION['status']= 'invalid';
                   header("location: login.php");

             }     
        }
    }     
?>