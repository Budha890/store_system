
<!DOCTYPE html>
<html>
<head>
    <title>Store Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
        }

        .container-fluid {
            height: 100vh;
            display: flex;
        }

        .navbar {
            flex-shrink: 0;
        }

        .left-navbar {
            width: 200px;
            background-color: #f8f9fa;
            padding: 20px;
            overflow-y: auto;
        }

        .right-panel {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            height: calc(100vh - 56px); /* Subtract height of top navbar */
        }

        .content {
            margin-bottom: 20px;
        }

        .nav-link {
            cursor: pointer;
        }

        .left-navbar .list-group-item {
            border: none;
            border-radius: 0;
        }

        .left-navbar .list-group-item.active {
            background-color: #fff;
            color: #007bff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Store Management</a>
    </nav>

    <div class="container-fluid">

            <div class="col-md-3 p-0">
                <div class="left-navbar">
                    <ul class="list-group">
                        <li class="list-group-item active" onclick="showDashboard()">Dashboard</li>
                        <li class="list-group-item" onclick="showProducts()">Products</li>
                        <li class="list-group-item" onclick="showCategories()">Categories</li>
                        <li class="list-group-item" onclick="showOrders()">Orders</li>
                        <li class="list-group-item" onclick="showCustomers()">Customers</li>
                        <li class="list-group-item" onclick="showReports()">Reports</li>
                        <li class="list-group-item" onclick="showSettings()">Settings</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="right-panel">
                    <div class="content" id="dashboard">
                    <?php 
                   
                   for($i=0; $i<50; $i++){

                    echo "<li> ".$i."</li> <br/>";
                   }
                   ?>
                    </div>
                    <div class="content d-none" id="products">
                        <?php
                        // Your PHP code for the products section
                        ?>
                    </div>
                    <!-- Add similar content divs for other sections -->
                </div>
            </div>
    
    </div>

    <script>
        function showDashboard() {
            document.getElementById("dashboard").classList.remove("d-none");
            document.getElementById("products").classList.add("d-none");
            // Hide other sections if necessary
        }

        function showProducts() {
            document.getElementById("dashboard").classList.add("d-none");
            document.getElementById("products").classList.remove("d-none");
            // Hide other sections if necessary
        }

        // Add similar functions for other sections

    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs
