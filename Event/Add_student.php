<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../styles/dash_styles.css">
    <link rel="stylesheet" href="../styles/side_styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      /* Theme variables */
      :root{
        --maroon: maroon;
        --maroon-dark: #6d0000;
        --card-bg: #fff;
        --card-shadow: 0 8px 32px rgba(0,0,0,0.10);
      }

      /* Utility / accent classes */
      .create { border-left: 3px solid var(--maroon) !important; }
      .bg-maroon { background-color: var(--maroon); }
      .maroon-text { color: var(--maroon); }
      .create-submit:hover { background-color: #fff; }
      .table-maroon th { background-color: var(--maroon) !important; color: #fff !important; }

      /* Page card (increased size for design) */
      .page-card {
        background: var(--card-bg);
        border-radius: 12px;
        box-shadow: var(--card-shadow);
        padding: 1.75rem;
        margin-left:7rem;
        /* min-height: 520px; */
      }
  

      /* Controls that sit above the card */
      .controls-row { margin-bottom: 1rem; }
      .search-input .form-control { border-right: none; }
      .search-input .input-group-text { background: var(--card-bg); border-left: none; }

      /* Buttons */
      .btn-maroon { background: var(--maroon); color: #fff; border: none; }
      .btn-maroon:hover { background: var(--maroon-dark); color: #fff; }

      /* Table visuals */
      #studentsTable tbody tr:hover { background: rgba(128,0,0,0.04); }
      .table td, .table th { vertical-align: middle; }

      /* Small components */
      .avatar-sm { width:50px; height:40px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; color:#fff; font-weight:700; }
      .avatar-bg { background: linear-gradient(135deg,#7a1414,#a02b2b); }

      @media (max-width: 576px) {
        .search-input { margin-bottom: 0.5rem; }
      }
    </style>
  </head>
<body>
<?php include 'sidebar.php'; ?>
<?php $page_heading = 'Students'; include 'navbar.php'; ?>

<section class="p-4">
  <div class="container-fluid">
    <!-- Controls: search and add placed outside the card for clearer layout -->
    <div class="row align-items-center mb-3">
      <div class="col-12 col-md-6">
        <!-- left side reserved for breadcrumbs or page info if needed -->
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-md-end align-items-center gap-2 flex-wrap">
        <div class="search-input me-2" style="min-width:220px;">
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-search"></i></span>
            <input id="searchInput" class="form-control" placeholder="Search students by name, id, dept...">
          </div>
        </div>
        <button class="btn btn-maroon" data-bs-toggle="modal" data-bs-target="#addModal"><i class="bi bi-plus-lg me-1"></i>Add Student</button>
      </div>
    </div>

    <div class="page-card">
      <div class="row align-items-center mb-3">
        <div class="col-12">
          <h4 class="m-0">Students</h4>
        </div>
      </div>

    

      <div class="table-responsive">
        <table id="studentsTable" class="table table-hover align-middle">
        <thead class="table-maroon">
          <tr>
            <th>#</th>
            <th>ID</th>
            <th>Student Name</th>
            <th>Department</th>
            <th>RFID Value</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- Sample static rows for design-only mode -->
          <tr>
            <td>1</td>
            <td>4226347</td>
            <td>CASTANARES, JULIAN FALCON</td>
            <td>CON</td>
            <td>1234567890</td>
            <td><button class="btn btn-sm btn-outline-danger" >Archive</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>4227200</td>
            <td>CAPUYAN, BEA VILLARIMO</td>
            <td>COC</td>
            <td>0987654321</td>
            <td><button class="btn btn-sm btn-outline-danger">Archive</button></td>
          </tr>
          <tr>
            <td>3</td>
            <td>4227197</td>
            <td>ARLALEJO, PRINCE JHOAR GARCIA</td>
            <td>CASTE</td>
            <td>1112131415</td>
            <td><button class="btn btn-sm btn-outline-danger" >Archive</button></td>
          </tr>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Add Student Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
  <form id="addStudentForm">
        <div class="modal-header">
          <h5 class="modal-title">Add Student</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-2">
            <label class="form-label">ID Number</label>
            <input name="id" class="form-control" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Student Name</label>
            <input name="rfid" class="form-control">
          </div>
          <div class="mb-2">
            <label class="form-label">Department</label>
            <select name="department" class="form-select" required>
              <option value="">Select Department</option>
              <option>CASTE</option>
              <option>COC</option>
              <option>CON</option>
              <option>Senior High School</option>
              <option>Junior High School</option>
              <option>Elementary</option>
            </select>
          </div>
          <div class="mb-2">
            <label class="form-label">Scan RFID</label>
            <input name="name" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-maroon" id="addStudentBtn">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script>
  // Client-side search
  document.getElementById('searchInput').addEventListener('input', function(e){
    const q = e.target.value.toLowerCase();
    document.querySelectorAll('#studentsTable tbody tr').forEach(tr => {
      tr.style.display = [...tr.querySelectorAll('td')].slice(1,5).map(td => td.textContent.toLowerCase()).join(' ').includes(q) ? '' : 'none';
    });
  });
</script>
<script>
// Handle Add Student form (UI-only): validate, close modal, show alert
document.addEventListener('DOMContentLoaded', function(){
  const form = document.getElementById('addStudentForm');
  if(!form) return;
  form.addEventListener('submit', function(e){
    e.preventDefault();
    if(!form.checkValidity()){
      form.reportValidity();
      return;
    }
    // close modal
    const modalEl = document.getElementById('addModal');
    const modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
    modal.hide();
    // show success alert
    const alert = document.createElement('div');
    alert.className = 'alert alert-success position-fixed';
    alert.style.top = '1rem'; alert.style.right = '1rem'; alert.style.zIndex = 2000;
    alert.textContent = 'Student added (UI-only)';
    document.body.appendChild(alert);
    setTimeout(()=> alert.remove(), 2200);
    form.reset();
  });
});
</script>
</body>
</html>
