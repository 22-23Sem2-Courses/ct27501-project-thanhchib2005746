
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-md-3">
                <form id="form_reg" class="bg-light p-4 my-3" action="re.php" method="POST">
                    <h2 class="py-3 text-center text-uppercase" >Đăng nhập</h2>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username"
                        class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password"
                        class="form-control" >
                    </div>
                    <input type="submit" value="Đăng nhập" 
                    class="btn btn-primary btn-block mt-4" name="btn-re">
                </form>
            </div>
        </div>

    </div>
</body>
</html>
