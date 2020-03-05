<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="row justify-content-center">
    <table class="table table-striped table-bordered m-3">
      <thead>
        <tr>
          <th>No.</th>
          <th>Id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>
          <th>Gender</th> 
          <th>Phone</th> 
          <th>Address</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 1;
        $file = @fopen('gs://data_employee/Employees.csv', 'r');
        if (!empty($file)) {
          while (!feof($file)) {
            $line = fgets($file);
            if (!empty($line) && trim($line) != '') {
              $employee = explode(',', $line);
              $url = "delete?employeeId=" . $line;
              $urlEdit = "edit?id=" . $employee[0] ."&first_name=".$employee[1] ."&last_name=".$employee[2] ."&age=".$employee[3] ."&gender=".$employee[4] ."&phone=".$employee[5] ."&address=".$employee[6];
        ?>
              <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $employee[0]; ?></td>
                <td><?php echo $employee[1]; ?></td>
                <td><?php echo $employee[2]; ?></td>
                <td><?php echo $employee[3]; ?></td>
                <td><?php echo $employee[4]; ?></td>
                <td><?php echo $employee[5]; ?></td>
                <td><?php echo $employee[6]; ?></td>
                <td>
                  <a href="<?php echo $url ?>" class='btn btn-danger mr-2'>Delete</a>
                  <a href="<?php echo $urlEdit ?>" class='btn btn-info'>Edit</a>
                </td>
              </tr>
        <?php
              $count++;
            }
          }
        }
        ?>
      </tbody>
    </table>
  </div>
  <button type="button" class="btn btn-primary mx-auto btn-add" data-toggle="modal" data-target="#addModal">
    Add
  </button>

  <!-- add Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="process" method="POST">
            <div class="form-group row">
              <label for="first_name" class="col-5">First Name</label>
              <input type="text" name="first_name" placeholder="Enter your first name" class="col-6">
            </div>
            <div class="form-group row">
              <label for="last_name" class="col-5">Last Name</label>
              <input type="text" name="last_name" placeholder="Enter your last name" class="col-6">
            </div>
            <div class="form-group row">
              <label for="gender" class="col-5">Gender</label>
              <select class="form-control col-6" id="exampleFormControlSelect1" name="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="phone" class="col-5">Phone</label>
              <input type="number" name="phone" placeholder="Enter" class="col-6">
            </div>
            <div class="form-group row">
              <label for="age" class="col-5">Age</label>
              <input type="number" name="age" placeholder="Enter" class="col-6">
            </div>
            <div class="form-group row">
              <label for="address" class="col-5">Address</label>
              <input type="text" name="address" placeholder="Enter" class="col-6">
            </div>
            <div class="d-flex justify-content-center">
              <button class="btn btn-danger mr-2" data-dismiss="modal">Close</button>
              <input type="submit" name="submit" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>