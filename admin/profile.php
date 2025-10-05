<?php
// Admin Profile Page (UI-only)
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Profile</title>
  <link rel="stylesheet" href="../styles/dash_styles.css">
  <link rel="stylesheet" href="../styles/side_styles.css">
  <link rel="stylesheet" href="admin_styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .admin-wrap{ 
      max-width:1700px; 
      margin-left:10rem; 
      margin-right:3rem; 
      padding-top: 2rem;
    }
    
    .profile-header {
      background: linear-gradient(135deg, #800000 0%, #a00000 100%);
      color: white;
      padding: 2rem;
      border-radius: 12px;
      margin-bottom: 2rem;
      box-shadow: 0 8px 24px rgba(0,0,0,0.15);
    }
    
    .profile-avatar {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 4px solid rgba(255,255,255,0.3);
      background: rgba(255,255,255,0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3rem;
      margin-bottom: 1rem;
    }
    
    .profile-card {
      background: #fff;
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 6px 18px rgba(0,0,0,0.08);
      margin-bottom: 1.5rem;
    }
    
    .form-group {
      margin-bottom: 1.5rem;
    }
    
    .form-label {
      font-weight: 600;
      color: #333;
      margin-bottom: 0.5rem;
    }
    
    .form-control {
      border: 2px solid #e9ecef;
      border-radius: 8px;
      padding: 0.75rem 1rem;
      transition: all 0.3s ease;
    }
    
    .form-control:focus {
      border-color: #800000;
      box-shadow: 0 0 0 0.2rem rgba(128, 0, 0, 0.1);
    }
    
    .btn-maroon {
      background-color: #800000;
      border-color: #800000;
      color: white;
      padding: 0.75rem 2rem;
      border-radius: 8px;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    
    .btn-maroon:hover {
      background-color: #600000;
      border-color: #600000;
      color: white;
      transform: translateY(-1px);
    }
    
    .btn-outline-maroon {
      border: 2px solid #800000;
      color: #800000;
      background: transparent;
      padding: 0.75rem 2rem;
      border-radius: 8px;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    
    .btn-outline-maroon:hover {
      background-color: #800000;
      color: white;
      transform: translateY(-1px);
    }
    
    .activity-item {
      padding: 1rem;
      border-left: 4px solid #800000;
      background: rgba(128, 0, 0, 0.05);
      margin-bottom: 1rem;
      border-radius: 0 8px 8px 0;
    }
    
    .badge-maroon {
      background-color: #800000;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-size: 0.875rem;
    }
    
    .settings-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 0;
      border-bottom: 1px solid #e9ecef;
    }
    
    .settings-item:last-child {
      border-bottom: none;
    }
    
    .form-switch .form-check-input:checked {
      background-color: #800000;
      border-color: #800000;
    }
    
    @media (max-width: 768px) {
      .admin-wrap {
        margin-left: 2rem;
        margin-right: 1rem;
        padding-top: 1rem;
      }
      
      .profile-header {
        text-align: center;
        padding: 1.5rem;
      }
      
      .row > div {
        margin-bottom: 1rem;
      }
    }
  </style>
</head>
<body>
  <?php $page_heading = 'Admin Profile'; include 'navbar.php'; ?>
  <?php include 'sidebar.php'; ?>

<main class="admin-wrap">
  <!-- Profile Header -->
  <div class="profile-header">
    <div class="row align-items-center">
      <div class="col-md-auto text-center text-md-start">
        <div class="profile-avatar mx-auto mx-md-0">
          <i class="bi bi-person-fill"></i>
        </div>
      </div>
      <div class="col-md text-center text-md-start">
        <h2 class="mb-2">Admin Administrator</h2>
        <p class="mb-1 opacity-75">System Administrator</p>
        <div class="d-flex flex-column flex-md-row gap-2 justify-content-center justify-content-md-start">
          <span class="badge-maroon"><i class="bi bi-shield-check me-1"></i> Super Admin</span>
          <span class="badge badge-light"><i class="bi bi-calendar me-1"></i> Last login: Today, 9:30 AM</span>
        </div>
      </div>
      <div class="col-md-auto">
        <button class="btn btn-light btn-sm" onclick="editProfile()">
          <i class="bi bi-pencil me-1"></i> Edit Profile
        </button>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Profile Information -->
    <div class="col-lg-8" id="profileInfo">
      <div class="profile-card">
        <h5 class="mb-4"><i class="bi bi-person-lines-fill text-maroon me-2"></i>Personal Information</h5>
        <form id="profileForm">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" value="Admin" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" value="Administrator" disabled>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" value="admin@stctandag.edu.ph" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input type="tel" class="form-control" value="+63 912 345 6789" disabled>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label class="form-label">Department</label>
            <input type="text" class="form-control" value="Information Technology Services" disabled>
          </div>
          
          <div class="form-group">
            <label class="form-label">Employee ID</label>
            <input type="text" class="form-control" value="ADM-2024-001" disabled>
          </div>
          
          <div class="d-flex gap-2" id="profileActions" style="display: none !important;">
            <button type="button" class="btn btn-maroon" onclick="saveProfile()">
              <i class="bi bi-check-lg me-1"></i> Save Changes
            </button>
            <button type="button" class="btn btn-outline-maroon" onclick="cancelEdit()">
              <i class="bi bi-x-lg me-1"></i> Cancel
            </button>
          </div>
        </form>
      </div>

      <!-- Security Settings -->
      <div class="profile-card">
        <h5 class="mb-4"><i class="bi bi-shield-lock text-maroon me-2"></i>Security Settings</h5>
        <div class="settings-item">
          <div>
            <h6 class="mb-1">Change Password</h6>
            <p class="text-muted mb-0">Update your account password</p>
          </div>
          <button class="btn btn-outline-maroon btn-sm" data-bs-toggle="modal" data-bs-target="#passwordModal">
            <i class="bi bi-key me-1"></i> Change
          </button>
        </div>
        
        <div class="settings-item">
          <div>
            <h6 class="mb-1">Two-Factor Authentication</h6>
            <p class="text-muted mb-0">Add extra security to your account</p>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="twoFactorSwitch">
            <label class="form-check-label" for="twoFactorSwitch">Enable</label>
          </div>
        </div>
        
        <div class="settings-item">
          <div>
            <h6 class="mb-1">Login Notifications</h6>
            <p class="text-muted mb-0">Get notified of new login attempts</p>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="loginNotifications" checked>
            <label class="form-check-label" for="loginNotifications">Enable</label>
          </div>
        </div>
      </div>
    </div>

    <!-- Activity & Quick Actions -->
    <div class="col-lg-4">
      <!-- Quick Actions -->
      <div class="profile-card">
        <h5 class="mb-4"><i class="bi bi-lightning text-maroon me-2"></i>Quick Actions</h5>
        <div class="d-grid gap-2">
          <a href="students.php" class="btn btn-maroon">
            <i class="bi bi-people me-2"></i>Manage Students
          </a>
          <a href="events.php" class="btn btn-outline-maroon">
            <i class="bi bi-calendar-event me-2"></i>View Events
          </a>
          <a href="control_panel.php" class="btn btn-outline-maroon">
            <i class="bi bi-gear me-2"></i>Control Panel
          </a>
          <button class="btn btn-outline-maroon" onclick="generateReport()">
            <i class="bi bi-file-earmark-text me-2"></i>Generate Report
          </button>
        </div>
      </div>

      <!-- Recent Activity -->
      <div class="profile-card">
        <h5 class="mb-4"><i class="bi bi-clock-history text-maroon me-2"></i>Recent Activity</h5>
        <div class="activity-item">
          <h6 class="mb-1">Student Added</h6>
          <p class="text-muted mb-1">Added new student: Juan Dela Cruz</p>
          <small class="text-muted">2 hours ago</small>
        </div>
        
        <div class="activity-item">
          <h6 class="mb-1">Event Created</h6>
          <p class="text-muted mb-1">Created "Tech Summit 2024" event</p>
          <small class="text-muted">5 hours ago</small>
        </div>
        
        <div class="activity-item">
          <h6 class="mb-1">System Backup</h6>
          <p class="text-muted mb-1">Automated system backup completed</p>
          <small class="text-muted">1 day ago</small>
        </div>
        
        <div class="text-center mt-3">
          <a href="#" class="text-maroon text-decoration-none">
            <i class="bi bi-arrow-right me-1"></i>View All Activity
          </a>
        </div>
      </div>

      <!-- Account Statistics -->
      <div class="profile-card">
        <h5 class="mb-4"><i class="bi bi-graph-up text-maroon me-2"></i>Account Stats</h5>
        <div class="row text-center">
          <div class="col-6">
            <h4 class="text-maroon mb-0">156</h4>
            <small class="text-muted">Students Added</small>
          </div>
          <div class="col-6">
            <h4 class="text-maroon mb-0">24</h4>
            <small class="text-muted">Events Created</small>
          </div>
        </div>
        <hr>
        <div class="row text-center">
          <div class="col-6">
            <h4 class="text-maroon mb-0">89</h4>
            <small class="text-muted">Days Active</small>
          </div>
          <div class="col-6">
            <h4 class="text-maroon mb-0">1,234</h4>
            <small class="text-muted">Total Scans</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Password Change Modal -->
<div class="modal fade" id="passwordModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-maroon text-white">
        <h5 class="modal-title"><i class="bi bi-key me-2"></i>Change Password</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="passwordForm">
          <div class="form-group">
            <label class="form-label">Current Password</label>
            <input type="password" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="form-label">New Password</label>
            <input type="password" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="form-label">Confirm New Password</label>
            <input type="password" class="form-control" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-maroon" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-maroon" onclick="changePassword()">
          <i class="bi bi-check-lg me-1"></i>Update Password
        </button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
function editProfile() {
  // Enable form fields
  const formInputs = document.querySelectorAll('#profileForm input');
  formInputs.forEach(input => input.disabled = false);
  
  // Show action buttons
  document.getElementById('profileActions').style.display = 'flex';
  
  // Update edit button
  event.target.innerHTML = '<i class="bi bi-x-lg me-1"></i> Cancel';
  event.target.onclick = cancelEdit;
}

function cancelEdit() {
  // Disable form fields
  const formInputs = document.querySelectorAll('#profileForm input');
  formInputs.forEach(input => input.disabled = true);
  
  // Hide action buttons
  document.getElementById('profileActions').style.display = 'none';
  
  // Reset edit button
  event.target.innerHTML = '<i class="bi bi-pencil me-1"></i> Edit Profile';
  event.target.onclick = editProfile;
}

function saveProfile() {
  // Simulate save
  alert('Profile updated successfully!');
  cancelEdit();
}

function changePassword() {
  // Simulate password change
  alert('Password changed successfully!');
  bootstrap.Modal.getInstance(document.getElementById('passwordModal')).hide();
}

function generateReport() {
  alert('Generating system report...');
}

// Toggle switches
document.getElementById('twoFactorSwitch').addEventListener('change', function() {
  const message = this.checked ? 'Two-factor authentication enabled!' : 'Two-factor authentication disabled!';
  alert(message);
});

document.getElementById('loginNotifications').addEventListener('change', function() {
  const message = this.checked ? 'Login notifications enabled!' : 'Login notifications disabled!';
  alert(message);
});
</script>
</body>
</html>
