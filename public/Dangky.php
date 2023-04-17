
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <title>Đăng ký</title>
    <style>
        .has-error{
            color: red;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-md-3">
                <form id="form_reg" class="bg-light p-4 my-3" action="reg.php" method="post">
                    <h2 class="py-3 text-center text-uppercase" >Đăng ký</h2>
                    <div class="form-group">
                        <label for="fullname">Họ và tên</label>
                        <input type="text" name="fullname" id="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label for="repassword">Nhập lại mật khẩu</label>
                        <input type="password" name="repassword" id="repassword" class="form-control">
                        
                    </div>
                    <input type="submit" value="Đăng ký" 
                    class="btn btn-primary btn-block mt-4" name="btn-reg">
                </form>
            </div>
        </div>
    </div>
       
</body>
</html>
