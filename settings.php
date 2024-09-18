<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <header class="row">
            <div class="col-xs-12">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Delivery Dashboard</a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.html">Dashboard</a></li>
                            <li><a href="logout.html">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 sidebar">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="orders.html">Orders</a></li>
                    <li><a href="notifications.html">Notifications</a></li>
                    <li class="active"><a href="settings.html">Settings</a></li>
                </ul>
            </nav>

            <!-- Main Content -->
            <div class="col-md-10">
                <h2>Settings</h2>
                <form>
                    <div class="form-group">
                        <label for="password">Change Password</label>
                        <input type="password" class="form-control" id="password" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
