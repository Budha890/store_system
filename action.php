<?php 
require_once("config.php");

// Register Form  behind the scene here :
        if(($_GET['form']=='register') AND ($_POST['btn_register']=='register')){

            $username = $_POST['username'];
            $email =  $_POST['email'];
            $password = $_POST['password'];
            $mobileno = $_POST['mobileno'];
            $address = $_POST['address'];

             $query = "select *from userlog where email = '$email'";
                $exec = mysqli_query($conn,$query);
            if($exec->num_rows !=0){
               
                $alert = "Email already exits";
                header('location:register.php?alert='.$alert);
                die();
              }
            $hashpass = md5($password);
            $queryi = "insert into userlog (username,email,password,mobileno,address) values('$username','$email','$hashpass','$mobileno','$address')";
            $run = mysqli_query($conn,$queryi);
            if($run){
            $alert = "user registered";
            header("location:login.php?alert=".$alert);
            }
       
        }


            //  login form start from here 

            if(($_GET['form']=='login') AND ($_POST['btn_login']=='login')){
                $email = $_POST['email'];
                $password = md5($_POST['password']);
            
                
                $query = "select * from userlog where email = '$email'";
                $sql =   mysqli_query($conn,$query);
               
                if($sql->num_rows ==0){
                    $alert = "user's not found";
                    header("location:login.php?alert=".$alert);
                    die();
                }
                if($sql->num_rows !=0){

                    $row = $sql->fetch_assoc();
                    $queryp = "select *from userlog where email = '$email' AND password ='$password'"; 
                    $runqueryp = $conn->query($queryp);

                    if($runqueryp->num_rows !=0){

                        $alert = "welcome ";
                        header('location: index.php');
                        $conn->close();
                        die();
                    }else{

                        $alert= "invalid login data";
                        header("location: login.php");
                    }
                }

            }else{}



?>