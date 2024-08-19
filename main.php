<?php
session_start();
const contact="contact.php";
const about="about.php";
?>
<div class="container">
  <div class="row justify-content-center align-items-center py-5 py-sm-0" style="min-height: 100vh;">
    <div class="col-md-10 col-lg-8 col-xl-7">
      <div class="text-center">
        <h1 class="example display-1 text-white "><?php echo title;?></h1>
        <div class="my-2 wow animate__animated animate__fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">
            <?php if(isset($_SESSION["logged_in"])) {?>
            <a href="./panel/delete.php" class="d-inline-block px-4 py-2 rounded bg-white text-dark mx-1">خروج از سایت</a>
            <?php }else{ ?>
                <a href="./login" class="my-2 d-inline-block px-4 py-2 rounded text-white  bg-ae mx-1">ورود</a>
                <a href="./register" class="my-2 d-inline-block px-4 py-2 rounded text-white  bg-ae mx-1">ثبت نام</a>
            <?php }?>
        </div>
        <h2 class="text-white opacity-75 my-4 wow animate__animated animate__fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">موبایل علیرضا - خریدی به صرفه</h2>
        <a href="<?php echo about ?>" class="read-more position-relative d-inline-block text-white wow animate__animated animate__fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">درباره ما</a>
        <a href="<?php echo contact ?>" class="read-more position-relative d-inline-block text-white wow animate__animated animate__fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s" style="margin-right: 30px">تماس با ما </a>
      </div>
    </div>
  </div>
 </div>
