<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Welcome to the Admin Dashboard</h1>
        <p>Manage your food menu items and receive order alerts:</p>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="menu1.jpg" class="card-img-top" alt="Food Image">
                    <div class="card-body">
                        <h5 class="card-title">Menu Item 1</h5>
                        <p class="card-text">Description of Menu Item 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="menu2.jpg" class="card-img-top" alt="Food Image">
                    <div class="card-body">
                        <h5 class="card-title">Menu Item 2</h5>
                        <p class="card-text">Description of Menu Item 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="menu3.jpg" class="card-img-top" alt="Food Image">
                    <div class="card-body">
                        <h5 class="card-title">Menu Item 3</h5>
                        <p class="card-text">Description of Menu Item 3.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-success" role="alert">
            <strong>New Order!</strong> You have received a new order. Check the orders page for details.
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
