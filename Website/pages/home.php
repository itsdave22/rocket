<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocket | Kundenmenü</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
    <div class="side-bar">
      <div class="close-btn">
        <i class="fas fa-times"></i>
      </div>
      <div class="menu">
        <div class="item"><a href="home.php"><i class="fas fa-desktop"></i>Dashboard</a></div>
        <div class="item">
          <a class="sub-btn"><i class="fas fa-table"></i>Partner<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="bewerben.php" class="sub-item">Bewerben</a>
            <a href="#" class="sub-item">[COOMING]</a>
            <a href="#" class="sub-item">[COOMING]</a>
          </div>
        </div>
        <div class="item"><a href="forum.php"><i class="fas fa-th"></i>Forum</a></div>
        <div class="item">
          <a class="sub-btn"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="account.php" class="sub-item">Account</a>
            <a href="#" class="sub-item">[COOMING]</a>
          </div>
        </div>
        <div class="item"><a href="logout-user.php"><i class="fas fa-info-circle"></i>Logout</a></div>
      </div>
    </div>
    <main class="l-main">
    <div class="content-wrapper content-wrapper--with-bg">
      <h1 class="page-title">Dashboard</h1>
      <div class="page-content"><b>Willkommen, <?php echo $fetch_info['name'] ?> wir sind derzeit noch in Wartungarbeiten!</b></div>
    </div>
  </main>

    <script type="text/javascript">
    $(document).ready(function(){
      //jquery for toggle sub menus
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });

      //jquery for expand and collapse the sidebar
      $('.menu-btn').click(function(){
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
    });
    </script>

  </body>
</html>
