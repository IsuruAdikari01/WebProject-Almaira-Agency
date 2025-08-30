<?php require_once(__DIR__ . "/../config/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>online_exam</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<section class="navigation">
      <header class="navigaton">
        <img class="nav-img" src="<?php echo BASEURL ?>/assets/pic/newlogo.jpg" alt="" />
        <nav>
          <ul class="nav-links">
            <li><a href="<?php echo BASEURL ?>/indexadmin.php">Home</a></li>
            <li><a href="<?php echo BASEURL ?>/view_contact.php">Contact Details</a></li>
            <li><a href="<?php echo BASEURL ?>/result.php">Add Results</a></li>
            <li><a href="<?php echo BASEURL ?>/add_exam.php">Add Exams</a></li>

            <?php if (isset($_SESSION['user_role'])) { ?>
                    <li><a href="<?php echo BASEURL ?>/logout.php" class="nav-link"><span></span>Log out</a></li>
                <?php } ?>





                <?php if (isset($_SESSION['user_role'])) { ?>
                    <li><a href="<?php echo BASEURL ?>/profile.php" class="ubtn">Profile</a></li>
                <?php } ?>

          </ul>

        </nav>


      </header>



      <div class="search-container">
        <input type="text" placeholder="Search.." name="search" />
        <button type="submit">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
    </section>


<body>

    