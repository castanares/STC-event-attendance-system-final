<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT Attendance</title>
    <link rel="stylesheet" href="../styles/dash_styles.css">
    <link rel="stylesheet" href="../styles/side_styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://college.stctandag.edu.ph/assets/img/logo.png?v=1001" />
</head>
<style>
  .btn-maroon { background-color: white; color: maroon; }
  .btn-maroon:hover { background-color: maroon; color: white; }
  .table-maroon th { background-color: maroon !important; color: white !important; }
</style>
<body>
<?php include 'sidebar.php'; ?>
<?php $page_heading = 'Dashboard'; include 'navbar.php'; ?>
  <h1 class="text-center text-decoration-underline link-underline-danger">RECENT EVENTS</h1>
  <br>
  <div class="text-year-sem justify-content-md-end d-md-flex" >
    <h6 class="h6-year">School Year</h6>
    <h6 class="h6-semester">Semester</h6>
  </div>

  <section class="d-md-flex justify-content-md-end year-sem">
    
    <div class="btn-group border border-dark">
     
      <button class="btn btn-light dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
        2024-2025
      </button>
      <ul class="dropdown-menu ">
        <li><a class="dropdown-item" href="#">2023-2024</a></li>
        <li><a class="dropdown-item active" href="#">2024-2025</a></li>
        <li><a class="dropdown-item" href="#">2025-2026</a></li>
      </ul>
    </div>
    <div class="btn-group border border-dark ms-1">
     
      <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        SECOND
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item active" href="#">First</a></li>
        <li><a class="dropdown-item" href="#">Second</a></li>
        <li><a class="dropdown-item" href="#">Summer</a></li>
      </ul>
    </div>
     <button class="btn btn-maroon border-dark filter ms-2" type="button">
        Filter
      </button>
    
  </section>

  <section class="event-table mt-3">
    <table class="table border border-dark table-bordered">
      <thead class="table-maroon border border-dark ">
        <tr>
          <th scope="col" class="text-center">#</th>
          <th scope="col" class="text-center">EVENTS</th>
          <th scope="col" class="text-center">DATE</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="text-center">1</th>
          <td class="fw-bold"> <a href="ongoing.php" class="text-decoration-none text-dark">PANAGHIUSA 2024</a></td>
          <td class="text-center"></td>
        </tr>
        <tr>
          <th scope="row" class="text-center">2</th>
          <td class="fw-bold">INTRAMURALS 2024</td>
          <td class="text-center"></td>

        </tr>
        <tr>
          <th scope="row" class="text-center">3</th>
          <td class="fw-bold">Birthday ni Jhomong</td>
          <td class="text-center"></td>
      
        </tr>
      </tbody>
    </table>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
