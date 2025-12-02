<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$isLoggedIn = isset($_SESSION['UserID']);
?>


<nav class="navbar navbar-expand-lg navbar-a3">
  <div class="container-fluid">

    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="https://engineering.purdue.edu/Wraps/ECO/wrap8/themes/default/common/logo.png" 
           alt="Purdue logo" class="logo-img">
    </a>

    <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">

        <a class="nav-link" href="index.php">Home</a>

        <?php if ($isLoggedIn): ?>
          <a class="nav-link" href="scm.php">SCM</a>
          <a class="nav-link" href="erp.php">ERP</a>
          <a class="btn btn-danger ms-3" href="logout.php">Logout</a>
        <?php else: ?>
          <a class="nav-link" href="#" onclick="showAlert()">SCM</a>
          <a class="nav-link" href="#" onclick="showAlert()">ERP</a>
        <?php endif; ?>

      </div>
    </div>
  </div>
</nav>

<div id="featureAlert"
     class="alert alert-danger d-flex align-items-center alert-dismissible fade"
     role="alert" style="display:none;">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Warning">
      <use href="#exclamation-triangle-fill"/>
  </svg>
  <div><p>Please log in to continue</p></div>
  <button type="button" class="btn-close ms-auto" onclick="hideAlert()"></button>
</div>