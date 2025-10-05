<?php
// navbar.php - shared header/navbar (based on original markup)
?>
<header class="p-3 mb-3 border-bottom bg-light">
  <div class="container ">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <!-- optional burger / nav icon left (kept commented as original) -->
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-body-emphasis"><h5 class="dash"><?php echo isset($page_heading) ? $page_heading : 'Dashboard'; ?></h5></a></li>
      </ul>
      <div class="dropdown text-end">
        <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../images/profile-circle-icon-2048x2048-cqe5466q.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small" >
          <li><a class="dropdown-item" href="profile.php#profileInfo">Settings</a></li>
          <li><a class="dropdown-item" href="profile.php">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
      <div class="account_name">
        <h6>CBTA-Department</h6>
      </div>
    </div>
  </div>
</header>
