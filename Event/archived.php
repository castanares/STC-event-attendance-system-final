<?php
// Archived events (UI-only) — uses shared sidebar/navbar
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>Archived Events</title> -->
  <link rel="stylesheet" href="../styles/dash_styles.css">
  <link rel="stylesheet" href="../styles/side_styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* align with scanlog layout and table styling */
  /* sidebar offset variable so we can adjust spacing reliably */
  :root{ --sidebar-offset: 9rem; }
  .archive-wrap{ max-width:1900px; margin:2.5rem auto; padding-left: calc(var(--sidebar-offset) + 1rem); padding-right: 2rem; box-sizing: border-box; }
    .search-row{ display:flex; gap:0.5rem; align-items:center; }
    .list-card { box-shadow:0 6px 20px rgba(0,0,0,0.06); }
    /* ensure table expands to available width */
    #archiveTable{ width:100%; }
    /* reuse scanlog maroon header style */
    .table-maroon th { background-color: #800000 !important; color: white !important; }

    /* Progressive responsive adjustments */
    @media screen and (max-width: 1440px) {
      /* reduce side offset on large but not full-HD screens */
      :root{ --sidebar-offset: 7rem; }
      .archive-wrap{ padding-right: 3rem; }
    }

    @media (max-width: 1200px){
      :root{ --sidebar-offset: 4rem; }
      .archive-wrap{ padding-right: 1rem; }
    }

    @media (max-width: 991px){
      /* tablet and mobile: remove left offset and add side padding so content fits under sidebar */
      :root{ --sidebar-offset: 0; }
      .archive-wrap{ padding-left: 1rem; padding-right:1rem; }
      .dept-margin, .dept-margin-right { margin-left: 0 !important; margin-right: 0 !important; }
      .search-row{ width:100%; margin-top:.5rem; }
    }

    @media (max-width: 576px){
      /* Stack filters and search vertically on small screens */
      .archive-wrap{ margin-top:1.25rem; }
      .search-row{ width:100%; }
      .search-row input{ width:100%; }
      .form-select.form-select-sm{ width:100% !important; margin-bottom: .5rem; }
      .table th, .table td { font-size: 0.9rem; }
      /* make action buttons easier to tap */
      #archiveTable tbody td .unarchive-btn{ display:block; width:100%; }
      #filtersWrap { width:100%; display:block; }
    }
 
  

  </style>
</head>
<body>
<?php include __DIR__ . '/sidebar.php'; ?>
<?php $page_heading = 'Archived'; include __DIR__ . '/navbar.php'; ?>
<main class="archive-wrap container">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <!-- filters: year, course, cause -->
    <div class="d-flex" style="gap:.5rem; align-items:center;">
      <select id="filterYear" class="form-select form-select-sm">
        <option value="">All Years</option>
        <option>2021</option>
        <option>2020</option>
        <option>2019</option>
        <option>2018</option>
      </select>
      <select id="filterCourse" class="form-select form-select-sm">
        <option value="">All Courses</option>
        <option>BSIT</option>
        <option>BSCS</option>
        <option>BSED</option>
        <option>BSBA</option>
      </select>
      <select id="filterCause" class="form-select form-select-sm">
        <option value="">All Causes</option>
        <option>Graduated</option>
        <option>Discontinued</option>
        <option>Transferred</option>
        <option>Other</option>
      </select>
    </div>

    <div class="search-row">
      <input id="searchInput" class="form-control form-control-sm" placeholder="Search archived students...">
      <button id="clearBtn" class="btn btn-sm btn-outline-danger">Clear</button>
    </div>
  </div>

  <div class="list-card card p-3">
    <section class="tableList">
      <div class="table-responsive">
        <table class="table border border-dark table-bordered table-maroon" id="archiveTable">
          <thead class="border border-dark table-info">
            <tr>
              <th scope="col">#</th>
              <th scope="col">ID</th>
              <th scope="col">Student</th>
              <th scope="col">Course</th>
              <th scope="col">Cause</th>
              <th scope="col">Year</th>
              <th scope="col" class="text-center" >Action</th>
            </tr>
          </thead>
          <tbody>
            <tr data-course="BSIT">
              <td>1</td>
              <td>4227197</td>
              <td>ARLALEJO,PRINCE JHOAR GARCIA</td>
              <td>BSIT</td>
              <td>Graduated</td>
              <td>2021</td>
              <td class="text-center"><button class="btn  btn-sm btn-outline-danger unarchive-btn">Unarchive</button></td>
            </tr>
            <tr data-course="BSCS">
              <td>2</td>
              <td>4227188</td>
              <td>FALCON, JULIAN CASTANARES</td>
              <td>BSCS</td>
              <td>Transferred</td>
              <td>2020</td>
              <td class="text-center"><button class="btn btn-sm btn-outline-danger unarchive-btn">Unarchive</button></td>
            </tr>
            <tr data-course="BSED">
              <td>3</td>
              <td>4227001</td>
              <td>DOE, JANE</td>
              <td>BSED</td>
              <td>Founders Day</td>
              <td>2019</td>
              <td class="text-center"><button class="btn btn-sm btn-outline-danger unarchive-btn">Unarchive</button></td>
            </tr>
            <tr data-course="BSBA">
              <td>4</td>
              <td>4226999</td>
              <td>SMITH, JOHN</td>
              <td>BSBA</td>
              <td>Alumni Meetup</td>
              <td>2018</td>
              <td class="text-center"><button class="btn btn-sm btn-outline-danger unarchive-btn">Unarchive</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// simple client-side search for table rows
const input = document.getElementById('searchInput');
const table = document.getElementById('archiveTable');
const rows = table ? Array.from(table.querySelectorAll('tbody tr')) : [];

// combined filtering: search text + selects (year, course, cause)
const filterYear = document.getElementById('filterYear');
const filterCourse = document.getElementById('filterCourse');
const filterCause = document.getElementById('filterCause');

function applyFilters(){
  const q = input.value.toLowerCase().trim();
  const y = filterYear.value;
  const c = filterCourse.value;
  const cause = filterCause.value;

  rows.forEach(row=>{
    const txt = row.textContent.toLowerCase();
    const rowYear = row.cells[5] ? row.cells[5].textContent.trim() : '';
    const rowCourse = row.getAttribute('data-course') || '';
    const rowCause = row.cells[4] ? row.cells[4].textContent.trim() : '';

    const matchesText = q === '' || txt.includes(q);
    const matchesYear = y === '' || rowYear === y;
    const matchesCourse = c === '' || rowCourse === c;
    const matchesCause = cause === '' || rowCause.toLowerCase() === cause.toLowerCase();

    row.style.display = (matchesText && matchesYear && matchesCourse && matchesCause) ? '' : 'none';
  });
}

input.addEventListener('input', applyFilters);
filterYear.addEventListener('change', applyFilters);
filterCourse.addEventListener('change', applyFilters);
filterCause.addEventListener('change', applyFilters);

document.getElementById('clearBtn').addEventListener('click', ()=>{
  input.value=''; filterYear.value=''; filterCourse.value=''; filterCause.value=''; applyFilters();
});

// Unarchive button (UI-only): remove row and show temporary alert
document.addEventListener('click', function(e){
  if(e.target && e.target.classList.contains('unarchive-btn')){
    const btn = e.target;
    const row = btn.closest('tr');
    if(!row) return;
    // optimistic UI: remove
    row.remove();
    // show small toast/alert
    const msg = document.createElement('div');
    msg.className = 'alert alert-success position-fixed';
    msg.style.top = '1rem'; msg.style.right = '1rem'; msg.style.zIndex = 2000;
    msg.textContent = 'Student unarchived (UI-only)';
    document.body.appendChild(msg);
    setTimeout(()=> msg.remove(), 2200);
    // update rows array
    const index = rows.indexOf(row);
    if(index > -1) rows.splice(index,1);
  }
});
</script>
</body>
</html>
