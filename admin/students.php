<?php
// Admin - Manage Students (UI-only) - Enhanced with filters
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Students</title>
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
        margin-left:9rem;
        margin-right: 2rem;
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

      /* Filter section styling */
      .filter-section {
        margin-left: 9rem;
        margin-right: 2rem;
        margin-bottom: 1rem;
      }

      .filter-card {
        background: var(--card-bg);
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        padding: 1rem;
        margin-bottom: 1rem;
      }

      .filter-controls {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        flex-wrap: nowrap;
      }

      @media (max-width: 1200px) {
        .filter-controls {
          flex-wrap: wrap;
          gap: 0.5rem;
        }
        
        .search-input {
          min-width: 200px !important;
        }
      }

      @media (max-width: 768px) {
        .page-card, .filter-section {
          margin-left: 1rem;
          margin-right: 1rem;
        }
        
        .filter-controls {
          flex-direction: column;
          align-items: stretch;
          gap: 0.75rem;
        }
        
        .filter-controls > div {
          width: 100%;
          justify-content: center;
        }
        
        .search-input { 
          min-width: 100% !important;
        }
        
        .filter-controls .form-select {
          width: auto !important;
          flex: 1;
        }
      }
    </style>
</head>
<body>
<?php $page_heading = 'Manage Students'; include 'navbar.php'; ?>
<?php include 'sidebar.php'; ?>

<!-- Filter Section -->
<div class="filter-section">
  <div class="filter-card">
    <div class="filter-controls">
      <!-- Left side - Filters -->
      <div class="d-flex align-items-center gap-2">
        <label class="fw-bold text-nowrap me-2">Filters:</label>
        <select id="filterDepartment" class="form-select form-select-sm" style="width: 140px;">
          <option value="">All Departments</option>
          <option>CASTE</option>
          <option>COC</option>
          <option>CON</option>
          <option>CBTA</option>
          <option>Senior High School</option>
          <option>Junior High School</option>
          <option>Elementary</option>
        </select>
        <select id="filterStatus" class="form-select form-select-sm" style="width: 100px;">
          <option value="">All Status</option>
          <option>Active</option>
          <option>Inactive</option>
          <option>Graduated</option>
        </select>
        <button id="clearFilters" class="btn btn-sm btn-outline-danger text-nowrap">
          <i class="bi bi-x-circle me-1"></i>Clear
        </button>
      </div>

      <!-- Right side - Search and Add -->
      <div class="d-flex align-items-center gap-2">
        <div class="search-input" style="min-width:220px;">
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-search"></i></span>
            <input id="searchInput" class="form-control" placeholder="Search students...">
          </div>
        </div>
        <button class="btn btn-maroon text-nowrap" data-bs-toggle="modal" data-bs-target="#addModal">
          <i class="bi bi-plus-lg me-1"></i>Add Student
        </button>
        <!-- <a href="events.php" class="btn btn-outline-secondary text-nowrap">
          <i class="bi bi-calendar-event me-1"></i>Events
        </a> -->
      </div>
    </div>
  </div>
</div>

<section class="p-0">
  <div class="container-fluid">
    <div class="page-card">
      <div class="row align-items-center mb-3">
        <div class="col-12 col-md-8">
          <h4 class="m-0">Student Management</h4>
          <p class="text-muted mb-0">Manage student records, RFID assignments, and department information</p>
        </div>
        <div class="col-12 col-md-4 text-md-end">
          <small class="text-muted">Total Students: <span id="totalCount" class="fw-bold text-maroon">156</span></small>
        </div>
      </div>

      <div class="table-responsive">
        <table id="studentsTable" class="table table-hover align-middle">
        <thead class="table-maroon">
          <tr>
            <th>#</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Department</th>
            <th>RFID Value</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Enhanced sample data -->
          <tr data-dept="CON" data-status="Active">
            <td>1</td>
            <td>4226347</td>
            <td>CASTANARES, JULIAN FALCON</td>
            <td><span class="badge bg-info">CON</span></td>
            <td><code>1234567890</code></td>
            <td><span class="badge bg-success">Active</span></td>
            <td>
              <button class="btn btn-sm btn-outline-primary me-1" title="Edit Student">
                <i class="bi bi-pencil"></i>
              </button>
              <button class="btn btn-sm btn-outline-success me-1" title="View Details">
                <i class="bi bi-eye"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger" title="Archive Student">
                <i class="bi bi-archive"></i>
              </button>
            </td>
          </tr>
          <tr data-dept="COC" data-status="Active">
            <td>2</td>
            <td>4227200</td>
            <td>CAPUYAN, BEA VILLARIMO</td>
            <td><span class="badge bg-warning text-dark">COC</span></td>
            <td><code>0987654321</code></td>
            <td><span class="badge bg-success">Active</span></td>
            <td>
              <button class="btn btn-sm btn-outline-primary me-1" title="Edit Student">
                <i class="bi bi-pencil"></i>
              </button>
              <button class="btn btn-sm btn-outline-success me-1" title="View Details">
                <i class="bi bi-eye"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger" title="Archive Student">
                <i class="bi bi-archive"></i>
              </button>
            </td>
          </tr>
          <tr data-dept="CASTE" data-status="Active">
            <td>3</td>
            <td>4227197</td>
            <td>ARLALEJO, PRINCE JHOAR GARCIA</td>
            <td><span class="badge bg-primary">CASTE</span></td>
            <td><code>1112131415</code></td>
            <td><span class="badge bg-success">Active</span></td>
            <td>
              <button class="btn btn-sm btn-outline-primary me-1" title="Edit Student">
                <i class="bi bi-pencil"></i>
              </button>
              <button class="btn btn-sm btn-outline-success me-1" title="View Details">
                <i class="bi bi-eye"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger" title="Archive Student">
                <i class="bi bi-archive"></i>
              </button>
            </td>
          </tr>
          <tr data-dept="CBTA" data-status="Graduated">
            <td>4</td>
            <td>4226001</td>
            <td>SANTOS, MARIA CLARA</td>
            <td><span class="badge bg-secondary">CBTA</span></td>
            <td><code>5556667777</code></td>
            <td><span class="badge bg-secondary">Graduated</span></td>
            <td>
              <button class="btn btn-sm btn-outline-success me-1" title="View Details">
                <i class="bi bi-eye"></i>
              </button>
              <button class="btn btn-sm btn-outline-warning" title="Restore Student">
                <i class="bi bi-arrow-clockwise"></i>
              </button>
            </td>
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
        <div class="modal-header" style="background-color: var(--maroon); color: white;">
          <h5 class="modal-title">Add New Student</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label fw-bold">Student ID Number</label>
            <input name="student_id" class="form-control" placeholder="e.g., 4227300" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Full Name</label>
            <input name="student_name" class="form-control" placeholder="LASTNAME, FIRSTNAME MIDDLENAME" required>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Department</label>
            <select name="department" class="form-select" required>
              <option value="">Select Department</option>
              <option>CASTE</option>
              <option>COC</option>
              <option>CON</option>
              <option>CBTA</option>
              <option>Senior High School</option>
              <option>Junior High School</option>
              <option>Elementary</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">RFID Card Number</label>
            <div class="input-group">
              <input name="rfid_value" class="form-control" placeholder="Scan RFID card or enter manually" required>
              <button type="button" class="btn btn-outline-secondary" onclick="scanRFID()">
                <i class="bi bi-credit-card-2-front"></i> Scan
              </button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-maroon" id="addStudentBtn">
            <i class="bi bi-plus-lg me-1"></i>Add Student
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script>
  // Enhanced filtering and search functionality
  const searchInput = document.getElementById('searchInput');
  const filterDepartment = document.getElementById('filterDepartment');
  const filterStatus = document.getElementById('filterStatus');
  const clearFilters = document.getElementById('clearFilters');
  const studentsTable = document.getElementById('studentsTable');
  const totalCount = document.getElementById('totalCount');
  
  let allRows = Array.from(studentsTable.querySelectorAll('tbody tr'));

  function applyFilters() {
    const searchTerm = searchInput.value.toLowerCase();
    const deptFilter = filterDepartment.value;
    const statusFilter = filterStatus.value;
    
    let visibleCount = 0;

    allRows.forEach(row => {
      const text = row.textContent.toLowerCase();
      const dept = row.getAttribute('data-dept');
      const status = row.getAttribute('data-status');
      
      const matchesSearch = searchTerm === '' || text.includes(searchTerm);
      const matchesDept = deptFilter === '' || dept === deptFilter;
      const matchesStatus = statusFilter === '' || status === statusFilter;
      
      if (matchesSearch && matchesDept && matchesStatus) {
        row.style.display = '';
        visibleCount++;
      } else {
        row.style.display = 'none';
      }
    });
    
    totalCount.textContent = visibleCount;
  }

  // Event listeners for filters
  searchInput.addEventListener('input', applyFilters);
  filterDepartment.addEventListener('change', applyFilters);
  filterStatus.addEventListener('change', applyFilters);
  
  clearFilters.addEventListener('click', function() {
    searchInput.value = '';
    filterDepartment.value = '';
    filterStatus.value = '';
    applyFilters();
  });

  // Add Student form handling
  document.getElementById('addStudentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    if (!this.checkValidity()) {
      this.reportValidity();
      return;
    }
    
    const modal = bootstrap.Modal.getInstance(document.getElementById('addModal'));
    modal.hide();
    
    // Show success message
    const alert = document.createElement('div');
    alert.className = 'alert alert-success position-fixed';
    alert.style.cssText = 'top: 1rem; right: 1rem; z-index: 2000; max-width: 300px;';
    alert.innerHTML = '<i class="bi bi-check-circle me-2"></i>Student added successfully!';
    document.body.appendChild(alert);
    
    setTimeout(() => alert.remove(), 3000);
    this.reset();
  });

  // Simulated RFID scan function
  function scanRFID() {
    const rfidInput = document.querySelector('input[name="rfid_value"]');
    const randomRFID = Math.floor(Math.random() * 9000000000) + 1000000000;
    rfidInput.value = randomRFID;
    
    // Show scan feedback
    const scanBtn = event.target;
    const originalText = scanBtn.innerHTML;
    scanBtn.innerHTML = '<i class="bi bi-check-lg"></i> Scanned';
    scanBtn.className = 'btn btn-success';
    
    setTimeout(() => {
      scanBtn.innerHTML = originalText;
      scanBtn.className = 'btn btn-outline-secondary';
    }, 2000);
  }

  // Initialize count
  applyFilters();
</script>
</body>
</html>