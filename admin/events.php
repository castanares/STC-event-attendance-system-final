<?php
// Admin - Manage Events (UI-only)
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Events</title>
  <link rel="stylesheet" href="../styles/dash_styles.css">
  <link rel="stylesheet" href="../styles/side_styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <?php $page_heading = 'Manage Events'; include 'navbar.php'; ?>
<?php 
// include 'navbar.php';
include 'sidebar.php';
?>

<!-- Enhanced Events Page Content -->
<style>
  .btn-maroon { background-color: white; color: maroon; border: 1px solid maroon; }
  .btn-maroon:hover { background-color: maroon; color: white; }
  .table-maroon th { background-color: maroon !important; color: white !important; }
  .badge-active { background-color: #28a745 !important; }
  .badge-scheduled { background-color: #ffc107 !important; color: #000 !important; }
  .badge-archived { background-color: #6c757d !important; }
</style>

<main class="container-fluid" style="margin-top:1rem;">
  <h1 class="text-center text-decoration-underline link-underline-danger mb-4">EVENTS MANAGEMENT</h1>
  
  <div class="text-year-sem justify-content-md-end d-md-flex">
    <h6 class="h6-year">School Year</h6>
    <h6 class="h6-semester">Semester</h6>
  </div>

  <section class="d-md-flex justify-content-md-between year-sem mb-3">
    <!-- Left side - Department filter -->
    <div class="d-flex align-items-center" style="margin-left: 10rem;">
      <label class="me-2 fw-bold">Department:</label>
      <div class="btn-group border border-dark">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          All Departments
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item active" href="#">All Departments</a></li>
          <li><a class="dropdown-item" href="#">CASTE</a></li>
          <li><a class="dropdown-item" href="#">COC</a></li>
          <li><a class="dropdown-item" href="#">CON</a></li>
          <li><a class="dropdown-item" href="#">Senior High School</a></li>
          <li><a class="dropdown-item" href="#">Junior High School</a></li>
          <li><a class="dropdown-item" href="#">Elementary</a></li>
        </ul>
      </div>
    </div>

    <!-- Right side - Year, Semester, Filter -->
    <div class="d-flex align-items-center">
      <div class="btn-group border border-dark">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          2024-2025
        </button>
        <ul class="dropdown-menu">
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
      <!-- <a href="students.php" class="btn btn-outline-secondary ms-2">Manage Students</a> -->
    </div>
  </section>

  <section class="event-table mt-3">
    <table class="table border border-dark table-bordered">
      <thead class="table-maroon border border-dark">
        <tr>
          <th scope="col" class="text-center">#</th>
          <th scope="col" class="text-center">EVENT NAME</th>
          <th scope="col" class="text-center">DATE</th>
          <th scope="col" class="text-center">Department</th>
          <th scope="col" class="text-center">STATUS</th>
          <th scope="col" class="text-center">PARTICIPANTS</th>
          <th scope="col" class="text-center">ACTIONS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="text-center">1</th>
          <td class="fw-bold">PANAGHIUSA 2024</td>
          <td class="text-center">Dec 15, 2024</td>
          <td class="text-center">General</td>
          <td class="text-center"><span class="badge badge-active">Active</span></td>
          <td class="text-center">245</td>
          <td class="text-center">
            <button class="btn btn-sm btn-outline-primary me-1" title="Edit Event">
              <i class="bi bi-pencil"></i>
            </button>
            <button class="btn btn-sm btn-outline-success me-1" title="View Details">
              <i class="bi bi-eye"></i>
            </button>
            <button class="btn btn-sm btn-outline-danger" title="Archive Event">
              <i class="bi bi-archive"></i>
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row" class="text-center">2</th>
          <td class="fw-bold">INTRAMURALS 2024</td>
          <td class="text-center">Jan 20, 2025</td>
          <td class="text-center">General</td>
          <td class="text-center"><span class="badge badge-scheduled">Scheduled</span></td>
          <td class="text-center">0</td>
          <td class="text-center">
            <button class="btn btn-sm btn-outline-primary me-1" title="Edit Event">
              <i class="bi bi-pencil"></i>
            </button>
            <button class="btn btn-sm btn-outline-success me-1" title="View Details">
              <i class="bi bi-eye"></i>
            </button>
            <button class="btn btn-sm btn-outline-danger" title="Archive Event">
              <i class="bi bi-archive"></i>
            </button>
          </td>
        </tr>
        <tr>
          <th scope="row" class="text-center">3</th>
          <td class="fw-bold">Birthday ni Jhomong</td>
          <td class="text-center">Oct 1, 2024</td>
          <td class="text-center">CBTA</td>
          <td class="text-center"><span class="badge badge-archived">Archived</span></td>
          <td class="text-center">15</td>
          <td class="text-center">
            <button class="btn btn-sm btn-outline-success me-1" title="View Details">
              <i class="bi bi-eye"></i>
            </button>
            <button class="btn btn-sm btn-outline-warning" title="Restore Event">
              <i class="bi bi-arrow-clockwise"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>