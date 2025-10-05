<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE EVENT</title>
    <link rel="stylesheet" href="../styles/dash_styles.css">
    <link rel="stylesheet" href="../styles/side_styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var dateInput = document.getElementById('eventDate');
  if (dateInput) {
    var today = new Date();
    var yyyy = today.getFullYear();
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var dd = String(today.getDate()).padStart(2, '0');
    dateInput.min = yyyy + '-' + mm + '-' + dd;
  }
});
</script>
<style>
  .department-check { transition: background 0.2s, box-shadow 0.2s; }
  .department-check:hover { background: #ffe5e5; box-shadow: 0 2px 8px rgba(128,0,0,0.08); }
  .dept-margin { margin-left: 10rem; }
  .dept-margin-right { margin-right: 10rem; }
  .maroon-text { color: maroon; }
  .bg-maroon { background-color: maroon; }
  .form-check-input:checked { background-color: maroon; }
  .create{ border-left: 3px solid maroon !important; }
  .create-submit:hover{ background-color:white; border-color: solid maroon !important; }
</style>
<body>
<?php include 'sidebar.php'; ?>
<?php $page_heading = 'CREATE EVENT'; include 'navbar.php'; ?>
<section style="display: flex; justify-content: center; align-items: center; min-height: 60vh;">
  <div class="container create" style="max-width: 800px; background: #fff; border-radius: 16px; box-shadow: 0 8px 32px rgba(0,0,0,0.10); padding: 2.5pc 2pc; margin-top:2pc;">
    <form action="" method="post" autocomplete="off">
      <div style="display: flex; flex-direction: column; gap: 1.5pc;">
        <div>
          <label for="eventName" class="event-name fw-bold">Event Name</label>
          <input type="text" name="name" id="eventName" class="event-name-fill rounded form-control mt-1" placeholder="Enter event name" required>
        </div>
        <div style="display: flex; gap: 1pc;">
          <div style="flex:1;">
            <label for="eventDate" class="event-date fw-bold">Event Date</label>
            <input type="date" name="date" id="eventDate" class="event-date-fill rounded form-control mt-1" required>
          </div>
          <div style="flex:1;">
            <label for="semester" class="max-attendance fw-bold">Semester</label>
            <select name="semester" id="semester" class="max-attendance-fill rounded form-control mt-1" required>
              <option value="">Select Semester</option>
              <option value="1st">1st Semester</option>
              <option value="2nd">2nd Semester</option>
              <option value="Summer">Summer</option>
            </select>
          </div>
        </div>
        <h5 class="mb-1 fw-bold text-center ">Include Other Departments(Optional)</h5>
        <div class="row">
          <div class="col-md-6">
            <div class="form-check d-flex align-items-center gap-2 p-2 rounded department-check dept-margin">
              <input class="form-check-input" type="checkbox" value="CASTE" id="dept1" name="departments[]">
              <label class="form-check-label fw-semibold" for="dept1"><i class="bi bi-building me-2 maroon-text"></i>CASTE</label>
            </div>
            <div class="form-check d-flex align-items-center gap-2 p-2 rounded department-check dept-margin">
              <input class="form-check-input" type="checkbox" value="COC" id="dept2" name="departments[]">
              <label class="form-check-label fw-semibold " for="dept2" ><i class="bi bi-building me-2 maroon-text "></i>COC</label>
            </div>
            <div class="form-check d-flex align-items-center gap-2 p-2 rounded department-check dept-margin">
              <input class="form-check-input" type="checkbox" value="CON" id="dept3" name="departments[]">
              <label class="form-check-label fw-semibold" for="dept3"><i class="bi bi-building me-2 maroon-text"></i>CON</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-check d-flex align-items-center gap-2 p-2 rounded department-check dept-margin-right">
              <input class="form-check-input" type="checkbox" value="Senior High School" id="dept5" name="departments[]">
              <label class="form-check-label fw-semibold" for="dept5"><i class="bi bi-building me-2 maroon-text"></i>Senior High School</label>
            </div>
            <div class="form-check d-flex align-items-center gap-2 p-2 rounded department-check dept-margin-right">
              <input class="form-check-input" type="checkbox" value="Junior High School" id="dept6" name="departments[]">
              <label class="form-check-label fw-semibold" for="dept6"><i class="bi bi-building me-2 maroon-text"></i>Junior High School</label>
            </div>
            <div class="form-check d-flex align-items-center gap-2 p-2 rounded department-check dept-margin-right">
              <input class="form-check-input" type="checkbox" value="Elementary" id="dept7" name="departments[]">
              <label class="form-check-label fw-semibold" for="dept7"><i class="bi bi-building me-2 maroon-text"></i>Elementary</label>
            </div>
          </div>
        </div>
        <div>
          <label class="fw-bold event-time text-decoration-underline link-underline-danger d-block text-center" style="margin-bottom: 0.5pc;">Event Time</label>
          <div style="display: flex; gap: 1pc; margin-top: 0.5pc;">
            <div style="flex:1;">
              <label for="timeInStart" class="fw-bold event-time-in">Time In Start</label>
              <input type="time" name="time-in-start" id="timeInStart" class="time-in-start rounded form-control mt-1 text-center" required>
            </div>
            <div style="flex:1;">
              <label for="timeInEnd" class="fw-bold event-time-in">Time In End</label>
              <input type="time" name="time-in-end" id="timeInEnd" class="time-in-end rounded form-control mt-1 text-center" required>
            </div>
          </div>
          <div style="display: flex; gap: 1pc; margin-top: 0.5pc;">
            <div style="flex:1;">
              <label for="timeOutStart" class="fw-bold event-time-out">Time Out Start</label>
              <input type="time" name="time-out-start" id="timeOutStart" class="time-out-start rounded form-control mt-1 text-center" required>
            </div>
            <div style="flex:1;">
              <label for="timeOutEnd" class="fw-bold event-time-out">Time Out End</label>
              <input type="time" name="time-out-end" id="timeOutEnd" class="time-out-end rounded form-control mt-1 text-center" required>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <input type="submit" value="Create" class="create-submit btn text-light submit fw-bold fs-5 bg-maroon">
      </div>
    </form>
  </div>
</section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
