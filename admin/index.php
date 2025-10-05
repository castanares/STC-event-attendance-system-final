<?php
// Admin dashboard (UI-only)
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../styles/dash_styles.css">
  <link rel="stylesheet" href="../styles/side_styles.css">
  <link rel="stylesheet" href="admin_styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .admin-wrap{ max-width:1700px; margin-left:10rem; margin-right:3rem; }
    .stats { display:flex; gap:1rem; }
    .stat { background:#fff; padding:1rem; border-radius:8px; box-shadow:0 6px 18px rgba(0,0,0,0.06); flex:1; }
    .card-analytics { display:flex; gap:1rem; flex-wrap:wrap; }
    .analytic { flex:1; min-width:220px; background:#fff; padding:1rem; border-radius:8px; box-shadow:0 6px 18px rgba(0,0,0,0.06); }
    .chart-wrap { display:flex; gap:1rem; flex-wrap:wrap; }
    .chart-card { flex:1; min-width:300px; background:#fff; padding:1rem; border-radius:8px; box-shadow:0 6px 18px rgba(0,0,0,0.06); }
  </style>
</head>
<body>
  <?php $page_heading = 'Admin Dashboard'; include 'navbar.php'; ?>
<?php 
include  'sidebar.php';


?>


<main class="admin-wrap">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Overview</h3>
    <a href="students.php" class="btn btn-maroon">Manage Students</a>
  </div>
  <div class="card-analytics mb-4">
    <div class="analytic">
      <h6 class="mb-1">Total Students</h6>
      <p class="h3 mb-0">1,234</p>
      <small class="text-muted">Registered in system</small>
    </div>
    <div class="analytic">
      <h6 class="mb-1">Active Events</h6>
      <p class="h3 mb-0">4</p>
      <small class="text-muted">Currently running</small>
    </div>
    <div class="analytic">
      <h6 class="mb-1">Today's Scans</h6>
      <p class="h3 mb-0">276</p>
      <small class="text-muted">Scans so far today</small>
    </div>
    <div class="analytic">
      <h6 class="mb-1">Last Scan</h6>
      <p class="h4 mb-0">J. Castanares</p>
      <small class="text-muted">8:10 AM</small>
    </div>
  </div>

  <div class="chart-wrap mb-4">
    <div class="chart-card">
      <h6>Scans - Last 7 Days</h6>
      <canvas id="scansChart" height="140"></canvas>
    </div>
    <div class="chart-card">
      <h6>Event Status</h6>
      <canvas id="eventsDonut" height="140"></canvas>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Recent Activity</h5>
      <ul>
        <li>J. Castanares signed in at 8:10 AM</li>
        <li>B. Capuyan signed in at 8:25 AM</li>
        <li>P. Arlalejo signed in at 8:30 AM</li>
      </ul>
    </div>
  </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
// Sample data (UI-only)
const scansData = {
  labels: ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],
  datasets: [{
    label: 'Scans',
    data: [20, 150, 180, 200, 210, 190, 276],
    borderColor: '#7f1d1d',
    backgroundColor: 'rgba(127,29,29,0.08)',
    tension: 0.3,
    fill: true,
    pointRadius: 4,
  }]
};

const scansCtx = document.getElementById('scansChart');
if (scansCtx) {
  new Chart(scansCtx, {
    type: 'line',
    data: scansData,
    options: {
      plugins: { legend: { display: false } },
      scales: { y: { beginAtZero: true } }
    }
  });
}

const eventsData = {
  labels: ['Active','Scheduled','Archived'],
  datasets: [{
    data: [2, 1, 5],
    backgroundColor: ['#7f1d1d','#d97706','#6b7280']
  }]
};
const eventsCtx = document.getElementById('eventsDonut');
if (eventsCtx) {
  new Chart(eventsCtx, { type: 'doughnut', data: eventsData, options: { plugins:{ legend:{ position:'bottom' } } } });
}
</script>
</body>
</html>