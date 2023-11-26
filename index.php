<?php
include("menu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mess Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #282c34;
            color: #fff;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #61dafb;
        }

        .card {
            background-color: #373940;
            border: 1px solid #61dafb;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-title {
            color: #61dafb;
        }

        .card-text {
            color: #ccc;
        }

        .btn-primary {
            background-color: #61dafb;
            border-color: #61dafb;
        }

        .btn-primary:hover {
            background-color: #48a1d9;
            border-color: #48a1d9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mb-4">Mess Management System Dashboard</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Customer Management</h5>
                    <p class="card-text">Manage customer information.</p>
                    <a href="customer.php" class="btn btn-primary">Go to Customer Management</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Employee Management</h5>
                    <p class="card-text">Manage employee information.</p>
                    <a href="employee.php" class="btn btn-primary">Go to Employee Management</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Order Management</h5>
                    <p class="card-text">Manage Order information.</p>
                    <a href="order.php" class="btn btn-primary">Go to Order Management</a>
                </div>
            </div>
         </div>

         <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Supplier Management</h5>
                    <p class="card-text">Manage supplier information.</p>
                    <a href="supplier.php" class="btn btn-primary">Go to Supplier Management</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Food Management</h5>
                    <p class="card-text">Manage food information.</p>
                    <a href="food.php" class="btn btn-primary">Go to Food Management</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
