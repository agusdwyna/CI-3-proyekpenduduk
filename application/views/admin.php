    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        
        <style>
            body {
                display: flex;
                background-color: #f4f4f4;
                font-family: 'Poppins', sans-serif;
            }
            .sidebar {
                width: 280px;
                height: 100vh;
                position: fixed;
                background: #2C2F48;
                color: white;
                padding: 20px;
                transition: all 0.3s ease;
            }
            .sidebar h4 {
                text-align: center;
                margin-bottom: 20px;
                font-size: 22px;
                font-weight: bold;
            }
            .sidebar a, .dropdown-toggle {
                color: white;
                text-decoration: none;
                padding: 12px 15px;
                display: flex;
                align-items: center;
                border-radius: 8px;
                transition: 0.3s;
                font-size: 16px;
            }
            .sidebar a i, .dropdown-toggle i {
                margin-right: 10px;
                font-size: 18px;
            }
            .sidebar a:hover, .dropdown-toggle:hover {
                background: #404468;
                transform: scale(1.05);
            }
            .dropdown-menu {
                background-color: #404468;
                border: none;
                width: 100%;
            }
            .dropdown-item {
                color: white;
                font-size: 14px;
            }
            .dropdown-item:hover {
                background-color: #2C2F48;
            }
            .content {
                margin-left: 280px;
                padding: 20px;
                width: calc(100% - 280px);
                transition: all 0.3s ease;
            }
            .navbar {
                background-color: #fff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .stats-card {
                background: white;
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                transition: 0.3s;
            }
            .stats-card:hover {
                transform: translateY(-5px);
            }
            .admin-title {
        text-align: center;
        font-size: 30px; /* Ukuran lebih besar */
        font-weight: bold;
        color: #dcdfe8; /* Abu-abu terang agar kontras dengan panel */
        text-transform: uppercase;
        letter-spacing: 1.2px;
        position: relative;
    }

        .admin-title::after {
            content: "";
            display: block;
            width: 60%;
            height: 3px;
            background: rgba(220, 223, 232, 0.5); /* Garis bawah elegan */
            margin: 6px auto 0;
            border-radius: 5px;
        }


            @media (max-width: 768px) {
                .sidebar {
                    width: 80px;
                    padding: 10px;
                }
                .sidebar a, .dropdown-toggle {
                    justify-content: center;
                }
                .sidebar a span, .dropdown-toggle span {
                    display: none;
                }
                .sidebar a i, .dropdown-toggle i {
                    margin: 0;
                }
                .content {
                    margin-left: 80px;
                    width: calc(100% - 80px);
                }
            }
        </style>
    </head>
    <body>
        <!-- Sidebar -->
        <div class="sidebar">
            <h4 class="admin-title">Admin Panel</h4>
            <a href="#"><i class="bi bi-house-door"></i> <span>Dashboard</span></a>
            <a href="#"><i class="bi bi-people"></i> <span>Users</span></a>
            <div class="dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"><i class="bi bi-gear"></i> <span>Settings</span></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">General</a></li>
                    <li><a class="dropdown-item" href="#">Security</a></li>
                    <li><a class="dropdown-item" href="#">Privacy</a></li>
                </ul>
            </div>
            <a href="#"><i class="bi bi-bar-chart"></i> <span>Reports</span></a>
            <a href="#"><i class="bi bi-box-arrow-right"></i> <span>Logout</span></a>
        </div>
        
        <!-- Main Content -->
        <div class="content">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <span class="navbar-brand">Admin Dashboard</span>
                    <div class="dropdown ms-auto">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Profile
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="container mt-4">
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="stats-card">
                            <h3>1,504</h3>
                            <p>Daily Views</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-card">
                            <h3>80</h3>
                            <p>Sales</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-card">
                            <h3>284</h3>
                            <p>Comments</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stats-card">
                            <h3>$7,842</h3>
                            <p>Earnings</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <h3>Recent Orders</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Payment</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="badge bg-danger">Return</span></td>
                            </tr>
                            <tr>
                                <td>Adidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>    
                                <td><span class="badge bg-primary">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    </html>
