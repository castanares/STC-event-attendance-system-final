<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EVENT Attendance</title>
  <link rel="stylesheet" href="../styles/dash_styles.css">
  <link rel="stylesheet" href="../styles/side_styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>.table-maroon th { background-color: maroon !important; color: white !important; }</style>
<body>
<?php include 'sidebar.php'; ?>
<?php $page_heading = 'ONGOING EVENTS'; include 'navbar.php'; ?>
  <section>
    <h1 class="text-center text-decoration-underline link-underline-danger text-uppercase">PANAGHIUSA 2024
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-pencil-square fw-bold" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#Edit-modal" style="cursor: pointer;">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
      </svg>
    </h1>
    <!-- Edit Event Modal -->
    <form action="ongoing.php" method="post">
      <div class="modal fade" tabindex="-1" id="Edit-modal">
        <div class="modal-dialog modal-lg ">
          <div class="modal-content ">
            <div class="modal-header" style="background-color: maroon; color: white;">
              <h5 class="modal-title">Edit Events</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                  <label class="fw-bold">Event Name:</label>
                  <input type="text" name="event_name" class="form-control" value="PANAGHIUSA_2024" required oninput="replaceSpaces(this)">
                </div>
                <div class="mb-3 row">
                  <div class="col">
                    <label class="fw-bold">Event Date:</label>
                    <input type="text" name="date" class="form-control" value="2025-09-23" required>
                  </div>
                  <div class="col">
                    <label class="fw-bold">Semester:</label>
                    <input type="text" name="semester" class="form-control " value="FIRST" readonly>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="text-center"> <label class="fw-bold text-decoration-underline link-underline-danger fs-4">Event Time</label> </div>
                  <div class="row">
                    <div class="col">
                      <label class="fw-bold">Time In:</label>
                      <input type="text" name="TimeIN_in" placeholder="START" onfocus="showTimePicker(this)" onblur="convertTo12HourFormat(this)" class="form-control text-center " value="7:30 am" required>
                    </div>
                    <div class="col">
                      <label class="fw-bold">Time Out:</label>
                      <input type="text" name="TimeIN_out" placeholder="END" onfocus="showTimePicker(this)" onblur="convertTo12HourFormat(this)" class="form-control text-center" value="11:45 am" required>
                    </div>
                    <div class="col">
                      <label class="fw-bold">Time In:</label>
                      <input type="text" name="TimeOUT_in" placeholder="START" onfocus="showTimePicker(this)" onblur="convertTo12HourFormat(this)" class="form-control text-center " value="12:00 pm" required>
                    </div>
                    <div class="col">
                      <label class="fw-bold">Time Out:</label>
                      <input type="text" name="TimeOUT_out" placeholder="END" onfocus="showTimePicker(this)" onblur="convertTo12HourFormat(this)" class="form-control text-center " value="12:30 pm" required>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn" style="background-color: maroon; color: white;" name="save">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <br>
  <section class="d-md-flex justify-content-md-center">
        <form action="ongoing.php" method="post">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end start-end me-5">
        <input type="number" name="rfid" autofocus placeholder="Scan Here" class="rounded" required>
        <button type="submit" name="submit" class="btn btn-maroon rounded">Submit</button>
      </div>
    </form>
        <form action="ongoing.php" method="post">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end start-end me-5">
        <input type="number" name="rfid" placeholder="ID Here (Optional)" class="rounded">
        <button type="submit" name="submit" class="btn btn-maroon rounded">Submit</button>
      </div>
    </form>
  </section>

  <section class="event-table">
    <table class="table border border-dark table-bordered">
      <thead class="table-maroon border border-dark">
        <tr>
          <th scope="col" rowspan="2" class="text-center">#</th>
          <th scope="col" rowspan="2">ID NUMBER</th>
          <th scope="col" rowspan="2">STUDENT NAME</th>
          <th scope="col" class="text-center">TIME IN</th>
          <th scope="col" class="text-center">TIME OUT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>4227197</td>
          <td>ARLALEJO,PRINCE JHOAR GARCIA</td>
          <td class="text-center">8:30 am</td>
          <td class="text-center">11:45 am</td>
        </tr>
      </tbody>
    </table>
  </section>
  
  <section>
    <footer class="footer d-flex justify-content-center fixed-bottom bg-light z-0">
    <div class="fixed text-center ">
          <h5>Event Start 7:30 am</h5>
          <h5>Event End 12:30 pm</h5>
    </div>
  </footer>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
