
<?php
session_start();
if(isset($_POST['submit']))
{
      $conn=mysqli_connect("localhost","root","","training") or die(mysqli_error($conn));
session_start();
    $uid = mysqli_real_escape_string($conn,$_POST['email']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);
    if(empty($uid)||empty($pwd))
    {
        header("Location: ./index.php?login=empty_field");
        exit();
    }
    else{
        $sql = "SELECT * FROM signup WHERE email = '$uid'";
        $result= mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck <1)
        {
            header("Location: ./index.php?login=email_not_found");
        exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result))
            {
                   $hashedPwdCheck = password_verify($pwd,$row['password']);
                   if($hashedPwdCheck==false)
                   {
                    header("Location: ./index.php?login=password_wrong");
                    exit(); 
                   }
                   else if($hashedPwdCheck ==true){
                            $_SESSION['name']=$row['name'];
                            $_SESSION['email']=$row['email'];
                            $_SESSION['contact']=$row['contact'];
                            header("Location: ./index.php?login=login_successfull");
                            exit(); 
                   }
            }
        }
    }
}
else{
    header("Location: ./index.php?login=server_error");
    exit(); 
}
?>