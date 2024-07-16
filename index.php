<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>POS System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .login-container {
            margin-top: 100px; /* ปรับค่าตามที่ต้องการ */
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if (!empty($_SESSION['error_msg'])) {
                            echo '<div class="alert alert-danger">' . $_SESSION['error_msg'] . '</div>';
                            unset($_SESSION['error_msg']);
                        }
                        ?>
                        <form action="chk_login.php" method="post">
                            <div class="form-group">
                                <label for="mem_username">Username</label>
                                <input type="text" class="form-control" id="mem_username" name="mem_username" required>
                            </div>
                            <div class="form-group">
                                <label for="mem_password">Password</label>
                                <input type="password" class="form-control" id="mem_password" name="mem_password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
