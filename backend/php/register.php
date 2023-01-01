<?php
$db=mysqli_connect('localhost','root','','form');

    $name = $_POST['name'];
    if(empty($name)){
        echo "Name is required";
    }
    else{
        $email =$_POST['email'];
        if(empty($email)){
            echo "email is required";
        }
        else{
            $username =$_POST['username'];
            if(empty($username)){
                echo "username is required";
            }

            else{
                $password =$_POST['password'];
                if(empty($password)){
                    echo "password is required";
                }
                else{
                    $user_id=md5(substr($name,0,3)).substr($username,0,3).random_int(10000,99999);
                    $sql=mysqli_query($db,"INSERT INTO `users`(`name`, `email`, `username`, `passoword`, `user-id`) VALUES ('$name','$email','$username','$password','$user_id')");
                    if($sql){
                        echo 'sucess';
                    }
                    else{
                        echo "unsucess";
                    }
                }
            }
        }
    }
