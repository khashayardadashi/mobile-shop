<?php
session_start();
if (isset($_SESSION)){
    $username=$_SESSION["username"] ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <h1 class="text-center mt-5">  خوش آمدی <?php echo $username?>کاربر عزیز  </h1>
        <a href="./delete.php" class="btn btn-danger w-50 m-3">خروج از سایت</a>
    </div>
</div>
</body>
</html>
