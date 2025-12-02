<?php
require 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ERP Module</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'navbar.php'; ?>
  <main class="container my-4">
    <h1 class="mb-4">Enterprise Resource Planning (ERP) Module</h1>
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="card p-3 h-100">
          <h5>Network Overview</h5>
          <div class="text-muted">
            Show network-level KPIs (e.g. total revenue, inventory levels, disruption counts).
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card p-3 h-100">
          <h5>Recent Disruption Events</h5>
          <div class="text-muted">
            Table or list of disruption events with severity and date.
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>
