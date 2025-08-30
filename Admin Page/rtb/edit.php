<?php
include "conect.php";
$id=$_GET['edit'];


//

$sql="SELECT * from rtb where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$id=$row['id'];
$user_name=$row['u_name'];
$contact=$row['c_num'];
$email=$row['email'];
$hight=$row['h_ight'];
$width=$row['w_dth'];
$company=$row['company'];


//

if (isset($_POST["submit"])) {
   $user_name=$_POST['u_name'];
   $contact=$_POST['c_num'];
   $email=$_POST['email'];
   $hight=$_POST['h_ight'];
   $width=$_POST['w_dth'];
   $company=$_POST['company'];


   $sql ="UPDATE rtb set id='$id', u_name='$user_name',c_num ='$contact',email='$email',h_ight='$hight',w_dth='$width',company='$company' where id=$id";
   

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: display.php?msg=New record update successfully");
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
    <title>Editform</title>
    <link rel="stylesheet" href="rstyle.css">
</head>
<body>
    <header>header</header>
    <div>
        <h1 class="eh1">Edit Form</h1>
    </div>
    <div class="msgh">
        you can edit this Form.
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
              <input type="text" class="u_name" name="u_name" value="<?php echo $row['u_name']?>" >
           </div>

           <div class="col">
              <label class="form-label">Contact number:</label>
              <input type="text" class="form-control" name="c_num" value="<?php echo $row['c_num']?>" >
           </div>
           <div class="Emal">
           <label class="E_mail">your Email:</label>
           <input type="email" class="email" name="email" value="<?php echo $row['email']?>">
        </div>
        </div>

        
        <div>
            <div>
            <lable>Ad Hieght and width:</lable>
            <input type="text" class="hight" name="h_ight" value="<?php echo $row['h_ight']?>">
            <input type="text" class="width" name="w_dth" value="<?php echo $row['w_dth']?>">
            </div>

        </div>      
        <div>
        <lable>Company Name:</lable>
        <input type="text" class="company" name="company" value="<?php echo $row['company']?>" >
        </div>

        <div class="btn">
            <button type="submit" class="success" name="submit">Save</button>
            <button class="cancel"><a href="display.php" class="af" >Cancel</a></button>
        </div>
     </form> 
    </div>
    
    
</div>
</div>
<footer>footer</footer>
   
</body>
</html>



