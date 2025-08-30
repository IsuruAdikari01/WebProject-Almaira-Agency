<?php
require_once('connect.php');

if(isset($_POST['l_submit']))
{
    $login_user = $_POST['username'];
    $login_pass = $_POST['password'];

    $sql = "SELECT * FROM testuser WHERE userName = '$login_user' AND userPassword = '$login_pass'";
    $result = mysqli_query($conn, $sql);


    if($result){
        if(mysqli_num_rows($result) > 0){
            //fetch data
            $userdata = mysqli_fetch_array($result);

            if($userdata['userName'] == 'admin'&& $userdata['userPassword'] == 'ad123' ){
                //Redirect to admin
                header("Location: ../Admin Page/Admin.php");
            }
            else{
                //Redirect to home
                header("Location: ../new/Homepage.php");
            }
            
        }
        else{
            echo "<script>
                alert('Incorrect Email or password !');
                window.location.href = 'login_page.php';
                
            </script>";
        }
    }
}


?>