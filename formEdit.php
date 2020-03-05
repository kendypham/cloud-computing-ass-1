<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    $id = $_GET['id'];
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    ?>
    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
        <form action="update" method="POST">
        <div class="form-group row">
            <label for="id" class="col-5">Id</label>
            <input type="text" name="id" disabled readonly class="col-6" value="<?php echo $id ?>">
        </div>
        <div class="form-group row">
            <label for="first_name" class="col-5">First Name</label>
            <input type="text" name="first_name" placeholder="Enter your first name" class="col-6" value="<?php echo $first_name ?>">
        </div>
        <div class="form-group row">
            <label for="last_name" class="col-5">Last Name</label>
            <input type="text" name="last_name" placeholder="Enter your last name" class="col-6" value="<?php echo $last_name ?>">
        </div>
        <div class="form-group row">
            <label for="gender" class="col-5">Gender</label>
            <select class="form-control col-6" id="exampleFormControlSelect1" name="gender" value="<?php echo  $gender ?>">
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
            </select>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-5">Phone</label>
            <input type="number" name="phone" placeholder="Enter" class="col-6" value="<?php echo $phone ?>">
        </div>
        <div class="form-group row">
            <label for="age" class="col-5">Age</label>
            <input type="number" name="age" placeholder="Enter" class="col-6" value="<?php echo $age ?>">
        </div>
        <div class="form-group row">
            <label for="address" class="col-5">Address</label>
            <input type="text" name="address" placeholder="Enter" class="col-6" value="<?php echo $address ?>">
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-danger mr-2" data-dismiss="modal">Close</button>
            <input type="submit" name="update" class="btn btn-primary">
        </div>
    </form>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>