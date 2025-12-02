<?php
require 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SCM Module</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'navbar.php'; ?>
  <main class="container my-4">
    <h1 class="mb-4">Supply Chain Management (SCM) Module</h1>
    <form class="row g-3 mb-4" method="get" action="scm.php">
      <div class="col-md-3">
        <label class="form-label">From date</label>
        <input type="date" name="from_date" class="form-control">
      </div>
      <div class="col-md-3">
        <label class="form-label">To date</label>
        <input type="date" name="to_date" class="form-control">
      </div>
      <div class="col-md-3">
        <label class="form-label">Company</label>
        <input type="text" name="company_name" class="form-control">
      </div>
      <div class="col-md-3 d-flex align-items-end">
        <button type="submit" class="btn btn-primary w-100">Search</button>
      </div>
    </form>

    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card p-3 h-100">
          <h5>Company Details & Transactions</h5>
          <!-- Populate with SQL query results -->
          <div class="text-muted">Table or list of company details goes here.</div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card p-3 h-100">
          <h5>Key Performance Indicators (KPIs)</h5>
          <div class="text-muted">Charts or metrics go here.</div>
        </div>
      </div>
    </div>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>
