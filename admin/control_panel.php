<?php
// Admin Control Panel - comprehensive system management
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Control Panel</title>
  <link rel="stylesheet" href="../styles/dash_styles.css">
  <link rel="stylesheet" href="../styles/side_styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<style>
  /* Enhanced admin control panel styling */
  :root {
    --maroon: #800000;
    --maroon-dark: #6d0000;
    --card-bg: #fff;
    --card-shadow: 0 8px 32px rgba(0,0,0,0.10);
  }

  .control-wrap {
    margin-left: 10rem;
    margin-right: 2rem;
    margin-top: 1rem;
  }

  .control-card {
    background: var(--card-bg);
    border-radius: 12px;
    box-shadow: var(--card-shadow);
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    border-left: 4px solid var(--maroon);
  }

  .control-section-title {
    color: var(--maroon);
    font-weight: 700;
    margin-bottom: 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #f0f0f0;
  }

  .btn-maroon {
    background: var(--maroon);
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 0.5rem 1rem;
    font-weight: 600;
  }

  .btn-maroon:hover {
    background: var(--maroon-dark);
    color: #fff;
  }

  .btn-outline-maroon {
    color: var(--maroon);
    border: 1px solid var(--maroon);
    background: transparent;
  }

  .btn-outline-maroon:hover {
    background: var(--maroon);
    color: #fff;
  }

  .stat-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin-bottom: 2rem;
  }

  .stat-card {
    background: var(--card-bg);
    padding: 1.2rem;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    text-align: center;
  }

  .stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: var(--maroon);
  }

  .action-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1rem;
    max-width: 100%;
  }

  .action-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
    margin-bottom: 0.5rem;
  }

  .action-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--maroon);
    color: white;
    border-radius: 50%;
    margin-right: 1rem;
  }

  .table-maroon th {
    background-color: var(--maroon) !important;
    color: white !important;
  }

  .activity-item {
    padding: 0.75rem;
    border-left: 3px solid #e9ecef;
    margin-bottom: 0.5rem;
    background: #f8f9fa;
    border-radius: 0 6px 6px 0;
  }

  .activity-item.recent {
    border-left-color: var(--maroon);
    background: #fff5f5;
  }

  /* Responsive Design */
  @media (max-width: 1440px) and (min-width: 1201px) {
    .action-grid {
      grid-template-columns: repeat(2, minmax(280px, 450px));
      justify-content: center;
    }
  }

  @media (max-width: 1200px) {
    .control-wrap {
      margin-left: 8rem;
      margin-right: 1.5rem;
    }
  }

  @media (max-width: 992px) {
    .control-wrap {
      margin-left: 6rem;
      margin-right: 1rem;
    }
    
    .stat-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    
    .action-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    
    .action-item {
      flex-direction: column;
      align-items: flex-start;
      text-align: left;
    }
    
    .action-item .d-flex {
      margin-bottom: 0.5rem;
    }
  }

  @media (max-width: 768px) {
    .control-wrap {
      margin-left: 1rem;
      margin-right: 1rem;
      margin-top: 0.5rem;
    }
    
    .stat-grid {
      grid-template-columns: 1fr 1fr;
      gap: 0.75rem;
    }
    
    .stat-card {
      padding: 1rem;
    }
    
    .stat-number {
      font-size: 1.5rem;
    }
    
    .action-grid {
      grid-template-columns: 1fr;
    }
    
    .control-card {
      padding: 1rem;
      margin-bottom: 1rem;
    }
    
    .action-item {
      flex-direction: column;
      align-items: flex-start;
      padding: 0.75rem;
    }
    
    .action-item .d-flex {
      margin-bottom: 0.75rem;
      width: 100%;
    }
    
    .action-item .btn {
      width: 100%;
    }
    
    .d-flex.gap-2 {
      flex-direction: column;
      width: 100%;
    }
    
    .d-flex.gap-2 .btn {
      width: 100%;
      margin-bottom: 0.5rem;
    }
  }

  @media (max-width: 576px) {
    .control-wrap {
      margin-left: 0.5rem;
      margin-right: 0.5rem;
    }
    
    h1 {
      font-size: 1.5rem !important;
    }
    
    .stat-grid {
      grid-template-columns: 1fr;
    }
    
    .stat-card {
      padding: 0.75rem;
    }
    
    .control-card {
      padding: 0.75rem;
    }
    
    .control-section-title {
      font-size: 1.1rem;
    }
    
    .action-icon {
      width: 35px;
      height: 35px;
      margin-right: 0.75rem;
    }
    
    .action-item {
      padding: 0.5rem;
    }
    
    .modal-dialog {
      margin: 0.5rem;
    }
    
    .header-actions {
      margin-bottom: 2rem !important;
    }
    
    .header-actions .d-flex {
      width: 100%;
    }
  }

  @media (max-width: 480px) {
    .control-wrap {
      margin: 0.25rem;
    }
    
    .control-section-title {
      font-size: 1rem;
    }
    
    .action-item strong {
      font-size: 0.9rem;
    }
    
    .action-item .text-muted {
      font-size: 0.8rem;
    }
  }
</style>

<body>
<?php $page_heading = 'Control Panel'; include 'navbar.php'; ?>
<?php include 'sidebar.php'; ?>

<main class="control-wrap">
  <!-- Page Header -->
    <h1 class="text-decoration-underline text-center link-underline-danger mb-4">ADMIN CONTROL PANEL</h1>
  <div class="d-flex justify-content-center justify-content-md-end align-items-center mb-4 header-actions">
    <div class="d-flex gap-2 flex-column flex-sm-row">
      <button class="btn btn-maroon" onclick="refreshData()">
        <i class="bi bi-arrow-clockwise me-1"></i><span class="d-none d-sm-inline">Refresh Data</span><span class="d-sm-none">Refresh</span>
      </button>
      <button class="btn btn-outline-maroon" data-bs-toggle="modal" data-bs-target="#backupModal">
        <i class="bi bi-download me-1"></i><span class="d-none d-sm-inline">Backup System</span><span class="d-sm-none">Backup</span>
      </button>
    </div>
  </div>

  <!-- System Overview Stats -->
  <div class="stat-grid">
    <div class="stat-card">
      <div class="stat-number">1,247</div>
      <div class="text-muted">Total Students</div>
      <small class="text-success">↑ 23 this month</small>
    </div>
    <div class="stat-card">
      <div class="stat-number">8</div>
      <div class="text-muted">Active Events</div>
      <small class="text-info">3 scheduled</small>
    </div>
    <div class="stat-card">
      <div class="stat-number">342</div>
      <div class="text-muted">Today's Scans</div>
      <small class="text-warning">Peak: 8:30 AM</small>
    </div>
    <div class="stat-card">
      <div class="stat-number">7</div>
      <div class="text-muted">Departments</div>
      <small class="text-muted">All active</small>
    </div>
  </div>

  <!-- Main Control Sections -->
  <div class="action-grid">
    <!-- User Management -->
    <div class="control-card">
      <h4 class="control-section-title">
        <i class="bi bi-people-fill me-2"></i>User Management
      </h4>
      
      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-person-plus"></i>
          </div>
          <div>
            <strong>Manage Students</strong>
            <div class="text-muted small">Add, edit, archive student records</div>
          </div>
        </div>
        <a href="students.php" class="btn btn-sm btn-maroon">Manage</a>
      </div>

      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <div>
            <strong>Admin Accounts</strong>
            <div class="text-muted small">Create and manage admin users</div>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-maroon" onclick="manageAdmins()">View</button>
      </div>

      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-key"></i>
          </div>
          <div>
            <strong>Password Reset</strong>
            <div class="text-muted small">Reset user passwords</div>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-maroon" onclick="resetPasswords()">Reset</button>
      </div>
    </div>

    <!-- Event Management -->
    <div class="control-card">
      <h4 class="control-section-title">
        <i class="bi bi-calendar-event me-2"></i>Event Management
      </h4>
      
      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-list-task"></i>
          </div>
          <div>
            <strong>All Events</strong>
            <div class="text-muted small">View and manage all events</div>
          </div>
        </div>
        <a href="events.php" class="btn btn-sm btn-maroon">Manage</a>
      </div>

      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-plus-lg"></i>
          </div>
          <div>
            <strong>Create Event</strong>
            <div class="text-muted small">Set up new attendance events</div>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-maroon" onclick="createEvent()">Create</button>
      </div>

      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-archive"></i>
          </div>
          <div>
            <strong>Event Archive</strong>
            <div class="text-muted small">View completed events</div>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-maroon" onclick="viewArchive()">Archive</button>
      </div>
    </div>

    <!-- System Configuration -->
    <div class="control-card">
      <h4 class="control-section-title">
        <i class="bi bi-gear-fill me-2"></i>System Configuration
      </h4>
      
      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-building"></i>
          </div>
          <div>
            <strong>Department Settings</strong>
            <div class="text-muted small">Manage college departments</div>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-maroon" data-bs-toggle="modal" data-bs-target="#deptModal">Configure</button>
      </div>

      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-calendar3"></i>
          </div>
          <div>
            <strong>Semester Settings</strong>
            <div class="text-muted small">Configure academic periods</div>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-maroon" onclick="manageSemesters()">Configure</button>
      </div>

      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-credit-card-2-front"></i>
          </div>
          <div>
            <strong>RFID Management</strong>
            <div class="text-muted small">Configure RFID settings</div>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-maroon" onclick="manageRFID()">Configure</button>
      </div>
    </div>

    <!-- Reports & Analytics -->
    <div class="control-card">
      <h4 class="control-section-title">
        <i class="bi bi-graph-up me-2"></i>Reports & Analytics
      </h4>
      
      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-file-earmark-text"></i>
          </div>
          <div>
            <strong>Attendance Reports</strong>
            <div class="text-muted small">Generate attendance summaries</div>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-maroon" onclick="generateReports()">Generate</button>
      </div>

      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-bar-chart"></i>
          </div>
          <div>
            <strong>Analytics Dashboard</strong>
            <div class="text-muted small">View system analytics</div>
          </div>
        </div>
        <a href="index.php" class="btn btn-sm btn-maroon">View</a>
      </div>

      <div class="action-item">
        <div class="d-flex align-items-center">
          <div class="action-icon">
            <i class="bi bi-download"></i>
          </div>
          <div>
            <strong>Export Data</strong>
            <div class="text-muted small">Export attendance data</div>
          </div>
        </div>
        <button class="btn btn-sm btn-outline-maroon" onclick="exportData()">Export</button>
      </div>
    </div>
  </div>

  <!-- Recent System Activity -->
  <!-- <div class="control-card">
    <h4 class="control-section-title">
      <i class="bi bi-clock-history me-2"></i>Recent System Activity
    </h4>
    
    <div class="row">
      <div class="col-md-8">
        <div class="activity-item recent">
          <strong>New student registered:</strong> GARCIA, MARIA SANTOS (4227301)
          <div class="text-muted small">2 minutes ago</div>
        </div>
        <div class="activity-item">
          <strong>Event created:</strong> "Graduation Ceremony 2025"
          <div class="text-muted small">15 minutes ago</div>
        </div>
        <div class="activity-item">
          <strong>Bulk RFID scan:</strong> 45 students processed
          <div class="text-muted small">1 hour ago</div>
        </div>
        <div class="activity-item">
          <strong>System backup:</strong> Database backup completed
          <div class="text-muted small">3 hours ago</div>
        </div>
      </div>
      
      <div class="col-md-4">
        <h6 class="mb-3">Quick Actions</h6>
        <div class="d-grid gap-2">
          <button class="btn btn-sm btn-outline-maroon">
            <i class="bi bi-plus-lg me-1"></i>Add Student
          </button>
          <button class="btn btn-sm btn-outline-maroon">
            <i class="bi bi-calendar-plus me-1"></i>New Event
          </button>
          <button class="btn btn-sm btn-outline-maroon">
            <i class="bi bi-file-text me-1"></i>Generate Report
          </button>
          <button class="btn btn-sm btn-maroon">
            <i class="bi bi-house me-1"></i>Dashboard
          </button>
        </div>
      </div>
    </div>
  </div> -->
</main>

<!-- Department Management Modal -->
<div class="modal fade" id="deptModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: var(--maroon); color: white;">
        <h5 class="modal-title">Department Management</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="table-maroon">
              <tr>
                <th>ID</th>
                <th>Department Name</th>
                <th>Acronym</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>College of Arts, Sciences, and Teacher Education</td>
                <td>CASTE</td>
                <td>
                  <button class="btn btn-sm btn-outline-primary">Edit</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>College of Criminology</td>
                <td>COC</td>
                <td>
                  <button class="btn btn-sm btn-outline-primary">Edit</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>College of Business, Technology and Accountancy</td>
                <td>CBTA</td>
                <td>
                  <button class="btn btn-sm btn-outline-primary">Edit</button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>College of Nursing</td>
                <td>CON</td>
                <td>
                  <button class="btn btn-sm btn-outline-primary">Edit</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-maroon">Add Department</button>
      </div>
    </div>
  </div>
</div>

<!-- Backup System Modal -->
<div class="modal fade" id="backupModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: var(--maroon); color: white;">
        <h5 class="modal-title">System Backup</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Create a backup of the system database and configuration files.</p>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="backupDB" checked>
          <label class="form-check-label" for="backupDB">
            Include Database
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="backupFiles" checked>
          <label class="form-check-label" for="backupFiles">
            Include Configuration Files
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="backupImages">
          <label class="form-check-label" for="backupImages">
            Include Images and Assets
          </label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-maroon" onclick="startBackup()">Create Backup</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Control Panel JavaScript Functions (UI-only implementations)

function refreshData() {
  const btn = event.target.closest('button');
  const originalText = btn.innerHTML;
  btn.innerHTML = '<i class="bi bi-arrow-clockwise me-1"></i>Refreshing...';
  btn.disabled = true;
  
  setTimeout(() => {
    btn.innerHTML = originalText;
    btn.disabled = false;
    showAlert('Data refreshed successfully!', 'success');
  }, 1500);
}

function manageAdmins() {
  showAlert('Admin management interface would open here', 'info');
}

function resetPasswords() {
  showAlert('Password reset functionality would be available here', 'info');
}

function createEvent() {
  showAlert('Event creation interface would open here', 'info');
}

function viewArchive() {
  showAlert('Event archive would be displayed here', 'info');
}

function manageSemesters() {
  showAlert('Semester management interface would open here', 'info');
}

function manageRFID() {
  showAlert('RFID configuration panel would open here', 'info');
}

function generateReports() {
  showAlert('Report generation interface would open here', 'info');
}

function exportData() {
  showAlert('Data export functionality would be available here', 'info');
}

function startBackup() {
  const modal = bootstrap.Modal.getInstance(document.getElementById('backupModal'));
  modal.hide();
  showAlert('Backup process started (UI-only simulation)', 'success');
}

function showAlert(message, type = 'info') {
  const alertDiv = document.createElement('div');
  alertDiv.className = `alert alert-${type} position-fixed`;
  alertDiv.style.top = '1rem';
  alertDiv.style.right = '1rem';
  alertDiv.style.zIndex = '2000';
  alertDiv.style.maxWidth = '300px';
  alertDiv.textContent = message;
  
  document.body.appendChild(alertDiv);
  
  setTimeout(() => {
    alertDiv.remove();
  }, 3000);
}

// Auto-refresh activity feed (simulated)
function updateActivityFeed() {
  const activities = [
    'New student scan: LOPEZ, ANA MARIE (4227302)',
    'Event status updated: "Orientation Week"',
    'Department added: "Graduate Studies"',
    'RFID card batch imported: 50 new cards'
  ];
  
  // This would normally fetch real data from the server
  console.log('Activity feed would update with real-time data');
}

// Initialize auto-refresh
setInterval(updateActivityFeed, 30000); // Every 30 seconds
</script>

</body>
</html>
