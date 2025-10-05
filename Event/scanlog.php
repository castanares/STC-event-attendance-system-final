<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Records</title>
    <link rel="stylesheet" href="../styles/dash_styles.css">
    <link rel="stylesheet" href="../styles/side_styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://college.stctandag.edu.ph/assets/img/logo.png?v=1001" />
   <style>
      input::-webkit-outer-spin-button, input::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
      .student_name { margin-top: 1rem; }
      .tableList { margin-top: 2pc; margin-right: 4pc; margin-left: 10pc; }
      .search{ margin-left: 10rem; }
      .table-maroon th { background-color: maroon !important; color: white !important; }
    </style>
</head>
<body>
<?php include 'sidebar.php'; ?>
<?php $page_heading = 'Attendance Records'; include 'navbar.php'; ?>
    <br>
    <div class="search">
        <form class="d-flex d-inline-flex" role="search" method="post">
            <input class="form-control border border-danger" name="rfid" type="number" placeholder="Scan an ID" required autofocus>
            <button class="btn btn-outline-danger ms-2" name="submit" type="submit">Search</button>
        </form>
    </div>

    <h1 class="text-center text-decoration-underline link-underline-danger student_name">Julian Castanares Falcon</h1>
    <section class="tableList">
        <table class="table border border-dark table-bordered table-maroon">
            <thead class="border border-dark table-info">
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Student</th>
                    <th>Time In</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>4227197</td>
                    <td>ARLALEJO,PRINCE JHOAR GARCIA</td>
                    <td>8:30 am</td>
                </tr>
            </tbody>
        </table>
    </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
