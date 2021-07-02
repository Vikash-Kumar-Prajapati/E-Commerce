<?php
if(isset($_POST['submit']))
{
   
  $conn=mysqli_connect("localhost","root","","training") or die(mysqli_error($conn));
session_start();
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $contact = mysqli_real_escape_string($conn,$_POST['contact']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    if(empty($name)||empty($email)||empty($password)||empty($contact)||empty($city)||empty($address))
    {
        header("Location: ./signup.php?signup_error=No fields should be empty");
        exit();
    }
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            header("Location: ./signup.php?signup=invalid_name");
            exit();
        }
        else
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location:./signup.php?signup=invalid_email");
                exit();
            }
            else{
              $sql = "SELECT*FROM signup WHERE email = '$email'";
              $result = mysqli_query($conn,$sql);
              $resultcheck = mysqli_num_rows($result);
              if($resulcheck>0)
              {
                header("Location:./signup.php?signup=email_Id_is_taken");
                exit();
              }
              else
              {
                //  $hashedpwd = password_hash($password,PASSWORD_DEFAULT);
                  $sql= "INSERT INTO signup (name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
                  $result=mysqli_query($conn,$sql);
                  header("Location:./signup.php?signup=Registration_successfull");
                  exit();
              }

                
            }
        }

    }
    
}
else{
    header("Location: ../signup.php?signup_error=Error_ocurred");
    exit();
}
?>