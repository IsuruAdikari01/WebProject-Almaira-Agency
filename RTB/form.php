<?php
include "conect.php";

if (isset($_POST["submit"])) {
   $user_name=$_POST['u_name'];
   $contact=$_POST['c_num'];
   $email=$_POST['email'];
   $hight=$_POST['h_ight'];
   $width=$_POST['w_dth'];
   $company=$_POST['company'];


   $sql = "INSERT INTO rtb (id,u_name,c_num,email,h_ight,w_dth,company)
    VALUES ('','$user_name','$contact','$email','$hight','$width','$company')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      echo "<script>
                alert('successfully added your data!');
                window.location.href = 'irtb.php?msg=New record created successfully';
            </script>";
     
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="rstyle.css">
</head>
<body>
    <header></header>

    <div class="hello">
        <h1> Send Request Our RTB Platform</h1>
    </div>
    

    <div class="box">

    <div class="left">
        

    </div>
    <div class="right">
        <div class="formbox">
           <form action="" method="post" >
            <div class="row">
               <div class="col">
                  <label class="form-label">User Name:</label>
                  <input type="text" class="u_name" name="u_name" placeholder="username" required>
               </div>

               <div class="col">
                  <label class="form-label">Contact number:</label>
                  <input type="text" class="form-control" name="c_num" placeholder="0000000000" required>
               </div>
               <div class="Emal">
               <label class="E_mail">your Email:</label>
               <input type="email" class="email" name="email" placeholder="name@example.com">
            </div>
            </div>

            
            <div>
                <div>
                <lable>Ad Hieght and width:</lable>
                <input type="text" class="hight" name="h_ight" placeholder="(0px)" required>
                <input type="text" class="width" name="w_dth" placeholder="(0px)" required>
                </div>

            </div>      
            <div>
            <lable>Company Name:</lable>
            <input type="text" class="company" name="company" placeholder="Company" required>
            </div>

            <div class="btn">
            <button type="submit" class="success" name="submit">Request</button>
            <button class="cancel"><a href="form.php" class="af" >Cancel</a></button>
            </div>
         </form> 
        </div>
        
        
    </div>
    </div>
    <footer></footer>    
</body>
</html>