<?php 
session_start();
$loginFailed = isset($_GET['login']) && $_GET['login'] == 'failed';
$showLogin = !isset($_SESSION['UserID']) || $loginFailed;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="us-ascii">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logon</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Site stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script src='script.js'></script>
</head>

<body data-login-failed='<?php echo $loginFailed ? 'true' : 'false';?>'> 

<!-- Alert icon symbol definitions -->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none;">
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.964 0L.165 13.233c-.457.778.091 
    1.767.982 1.767h13.706c.89 0 1.438-.99.982-1.767L8.982 
    1.566zM8 5c.535 0 .954.462.9.995l-.35 
    3.507a.552.552 0 0 1-1.1 0L7.1 
    5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 
    2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>


<?php include 'navbar.php';?>
<!-- Navbar --
<nav class="navbar navbar-expand-lg navbar-a3">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="https://engineering.purdue.edu/Wraps/ECO/wrap8/themes/default/common/logo.png" 
           alt="Purdue logo" class="logo-img">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link" href="#" onclick="showAlert()">SCM</a>
        <a class="nav-link" href="#" onclick="showAlert()">ERP</a>
      </div>
    </div>
  </div>
</nav>
-->


<!-- Alert bar --
<div id="featureAlert"
     class="alert alert-danger d-flex align-items-center alert-dismissible fade"
     role="alert" style="display:none;">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Warning">
      <use href="#exclamation-triangle-fill"/>
  </svg>
  <div><p>Please log in to continue</p></div>
  <button type="button" class="btn-close ms-auto" onclick="hideAlert()"></button>
</div>
-->

<?php if ($showLogin): ?>
    <?php include 'login.php';?>
<?php else: ?>
  <?php include 'welcome.php'?>
<?php endif;?>

<!-- Login card 
<div class="container text-center mt-5 login">
  <div class="card shadow-sm p-5">
      <h1>Log In</h1>

      <form method="post" action="dbconnect.php">
        <div class="mb-3">
          <label>Username</label>
          <input type="text" class="form-control" name="username" autofocus>
        </div>

        <div class="mb-3">
          <label>Password</label>
          <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>

-->

<!-- Meet the Team -->
<div class="aboutus container my-5">
  <h1 class="text-center mb-4">Meet the Team</h1>

  <div class="d-flex flex-wrap justify-content-center gap-3">

    <div class="card" style="width: 18rem;">
      <img src="https://media.licdn.com/dms/image/v2/D5603AQE_WXyWxvz_bQ/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1714162777077?e=1766016000&v=beta&t=jlvbTftj_FNb358-ey08s_joAs_WgvOIScy43Q89gjU"
           class="card-img-top team-photo" alt="Adam Elsolh">
      <div class="card-body">
        <h5 class="card-title">Adam Elsolh</h5>
        <a href="mailto:aelsolh@purdue.edu" class="card-link">Contact me</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Derek Huang</h5>
        <a href="mailto:huan1803@purdue.edu" class="card-link">Contact me</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="https://media.licdn.com/dms/image/v2/D4E03AQGaTgUl5r_S9A/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1695662396325?e=1766016000&v=beta&t=uW4PLYa7o_pBrKcykYD3GAcSzEF5zwYo97yTfWCtztM"
           class="card-img-top team-photo" alt="Fernando Canales Adame">
      <div class="card-body">
        <h5 class="card-title">Fernando Canales Adame</h5>
        <a href="mailto:fcanale@purdue.edu" class="card-link">Contact me</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="https://media.licdn.com/dms/image/v2/C4E03AQGalQVsH32_pw/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1658943306212?e=1766016000&v=beta&t=_Pk4xWTnZ-PZeQKvNdEZeqKah3iST_BbS8xqRyk-pT0"
           class="card-img-top team-photo" alt="Jishnu Ghosh">
      <div class="card-body">
        <h5 class="card-title">Jishnu Ghosh</h5>
        <a href="mailto:ghosh107@purdue.edu" class="card-link">Contact me</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="https://media.licdn.com/dms/image/v2/D4E03AQFA8ihDgBzOVg/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1664311748104?e=1766016000&v=beta&t=d0xx7Um7H-OmVKQ_euqaFiRb6aVL-pVyn3sxtS0oQzs"
           class="card-img-top team-photo" alt="Leo Cavalier">
      <div class="card-body">
        <h5 class="card-title">Leo Cavalier</h5>
        <a href="mailto:lcavalie@purdue.edu" class="card-link">Contact me</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Zihang Yang</h5>
        <a href="mailto:yang2458@purdue.edu" class="card-link">Contact me</a>
      </div>
    </div>

  </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
