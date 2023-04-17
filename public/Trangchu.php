<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Trang chủ</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grid Template for bootstrap</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous" />
    
    <link rel="stylesheet" href="css\footer.css">
    <link rel="stylesheet" href="css\font-awesome.min.css">
    <link rel="stylesheet" href="styles\Trangchu.css">
  </head>
  <body>
    <!--
    <div class="container">
    <header>
      <div class="menu">
        <div class="logo">
          <a href="Trangchu.html"><img src="D:\NIÊN LUẬN\images\logo.png"/></a>
        </div>
        <nav>
          <ul>
            <li><a href="Trangchu.html">Trang chủ</a></li>
            <li><a href="Vechungtoi.html">Về chúng tôi</a></li>
            <li><a href="Lienhe.html">Liên hệ</a></li>
            <li><a href="Giohang.html">Giỏ hàng</a></li>
            <li><a href="Dangky.html">Đăng ký</a></li>
            <li><a href="Dangnhap.html">Đăng nhập</a></li>
          </ul>
        </nav>
      </div>
    </header>
    class="border-top border-dark mt-3 mb-4"
    <img src="D:\NIÊN LUẬN\images\logo.png"/>
    -->
    <header>
      <div class="d-flex justify-content-between pt-2">
        <h1 class="btn-group" >Zinda</h1>
        <div class="d-flex align-items-start ">
            <a class="p-2 rounded" href="Trangchu.php" style="text-decoration: none;">Trang chủ</a>
            <a class="p-2 rounded" href="about_me.php" style="text-decoration: none;">Về chúng tôi</a>
            <a class="p-2 rounded" href="Lienhe.php" style="text-decoration: none;">Liên hệ</a>
            <a class="p-2 rounded" href="Giohang.php" style="text-decoration: none;" >Giỏ hàng</a>
            <input class = "p-2 rounded" id = "search" type="text" name = "search" placeholder = "Tìm kiếm...">
            <a class="p-2 rounded" href="Dangky.php" style="text-decoration: none; float: left">Đăng ký</a>
            <a class="p-2 rounded" href="Dangnhap.php" style="text-decoration: none;">Đăng nhập</a>
        </div>
      </div>
    </header><br>
    
    <div class="container">
      <div class="row">
        <div class="col-8">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images\1.jpg" alt="First slide" />
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images\2.jpg" alt="Second slide" />
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images\3.jpg" alt="Third slide" />
              </div>
            </div>
            <a class="carousel-control-prev"href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-4 ">
          <img class="d-block w-100"  src="images\4.png"/>
          <img class="d-block w-100 mt-3" src="images\5.png"/>
        </div>
      </div><hr>
      <?php
      require 'xulyTC.php';
      ?>
      <!--
      <div class="col-sm-4 text-center"></div>
      <p class="h3">Tác phẩm tiêu biểu <hr></p>
        <div class="d-flex justify-content-between mt-5">
          <div class="text-center">
            <img src="images\7.jpg" width="200" height="200"/>
            <p class="name">Writer's secret life</p>
            <input type="submit" value="Mua: 90.000đ" class="price">
          </div>
          <div class="text-center">
            <img class= "d-block" src="images\8.jpg" width="200" height="200"/>
            <p class="name">Ánh trăng đêm hè</p>
            <input type="submit" value="Mua: 90.000đ" class="price">
          </div>
          <div class="text-center">
            <img src="images\31.jpg" width="200" height="200"/>
            <p class="submit">Tâm buôn bở, đời bình an</p>
            <input type="submit" value="Mua: 65.000đ" class="price">
          </div>
          <div class="text-center">
            <img src="images\9.jpg" width="200" height="200"/>
            <p class="name">Mắt biếc</p>
            <input type="submit" value="Mua: 65.000đ" class="price">
          </div>
          <div class="text-center">
            <img src="images\10.jpg" width="200" height="200"/>
            <p class="name">Hối hận</p>
            <input type="submit" value="Mua: 60.000đ" class="price">
          </div>
        </div>
      
      <div class="d-flex justify-content-between mt-5">
        <div class="text-center">
          <img class="d-block" src="images\11.jpg" width="200" height="200"/>
          <p class="name">Trăng tan</p>
          <input type="submit" value="Mua: 100.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\12.jpg" width="200" height="200"/>
          <p class="name">Bầu trời nước</p>
          <input type="submit" value="Mua: 115.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\13.png" width="200" height="200"/>
          <p class="name">#mlvnlmltt</p>
          <input type="submit" value="Mua: 95.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\14.png" width="200" height="200"/>
          <p class="name">Tôi không thích ồn ào</p>
          <input type="submit" value="Mua: 150.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\15.jpg" width="200" height="200"/>
          <p class="name">ALANTIS</p>
          <input type="submit" value="Mua: 165.000đ" class="price">
        </div>
      </div>

      <div class="d-flex justify-content-between mt-5">
        <div class="text-center">
          <img class="d-block" src="images\16.jpg" width="200" height="200"/>
          <p class="name">#Bạch Tô</p>
          <input type="submit" value="Mua: 80.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\17.jpg" width="200" height="200"/>
          <p class="name">Phương pháp học tập thông minh</p>
          <input type="submit" value="Mua: 145.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\18.jpg" width="200" height="200"/>
          <p class="name">Giải mã siêu trí nhớ</p>
          <input type="submit" value="Mua: 98.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\19.jpg" width="200" height="200"/>
          <p class="name">Điều sai</p>
          <input type="submit" value="Mua: 112.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\20.jpg" width="200" height="200"/>
          <p class="name">ttbt, kdbp</p>
          <input type="submit" value="Mua: 170.000đ" class="price">
        </div>
      </div>

      <div class="d-flex justify-content-between mt-5">
        <div class="text-center">
          <img class="d-block" src="images\21.jpg" width="200" height="200"/>
          <p class="name">Ánh lửa trong tro tàn</p>
          <input type="submit" value="Mua: 123.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\22.jpg" width="200" height="200"/>
          <p class="name">Tiểu thuyết</p>
          <input type="submit" value="Mua: 105.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\23.jpg" width="200" height="200"/>
          <p class="name">Ông già và biển tả</p>
          <input type="submit" value="Mua: 89.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\24.jpg" width="200" height="200"/>
          <p class="name">nccmnds</p>
          <input type="submit" value="Mua: 135.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\25.jpg" width="200" height="200"/>
          <p class="name">Nhật ký bị lãng quên</p>
          <input type="submit" value="Mua: 73.000đ" class="price">
        </div>
      </div>

      <div class="d-flex justify-content-between mt-5">
        <div class="text-center">
          <img class="d-block" src="images\26.jpg" width="200" height="200"/>
          <p class="name">Không còn thời gian để buồn</p>
          <input type="submit" value="Mua: 205.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\27.jpg" width="200" height="200"/>
          <p class="name">Bạn chỉ cần sống tốt</p>
          <input type="submit" value="Mua: 135.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\28.jpg" width="200" height="200"/>
          <p class="name">Càng mạnh mẽ càng dịu dàng</p>
          <input type="submit" value="Mua: 96.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\29.jpg" width="200" height="200"/>
          <p class="name">HƯỚNG NỘI</p>
          <input type="submit" value="Mua: 165.000đ" class="price">
        </div>
        <div class="text-center">
          <img src="images\30.jpg" width="200" height="200"/>
          <p class="name">Thay đổi cuộc đời</p>
          <input type="submit" value="Mua: 162.000đ" class="price">
        </div>
      </div>
    </div><hr>-->
      <!-- <footer class="border-top border-dark mt-3 mb-4">
        <div class="d-flex justify-content-between align-items-center">
          <div>© Bản quyền thuộc về Công ty Chii.</div>
          <ul class="row">
            <li class="ml-4"><a href="Trangchu.html" style="text-decoration: none;">Trang chủ</a></li>
            <li class="ml-4"><a href="Vechungtoi.html" style="text-decoration: none;">Về chúng tôi</a></li>
            <li class="ml-4"><a href="Lienhe.html" style="text-decoration: none;">Liên hệ</a></li>
            <li class="ml-4"><a href="Giohang.html" style="text-decoration: none;" >Giỏ hàng</a></li>
            <li class="ml-4"><a href="Dangky.html" style="text-decoration: none;">Đăng ký</a></li>
            <li class="ml-4"><a href="Dangnhap.html" style="text-decoration: none;">Đăng nhập</a></li>
          </ul>
        </div> -->
  </body>  
<!-- Site footer -->
  <footer class="site-footer">
    <div class="container"> 
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>ZINDA</h6>
          <p class="footer-links">
            <Address>
              <p><a href="about_me.php">Về chúng tôi</a></p> 
              <p><a href="Lienhe.php">Liên hệ</a></p>
              <p><a href="Giohang.php">Giỏ hàng</a></p>
            </Address>
        </div>

        <div class="col-sm-12 col-md-6">
          <h6>LIÊN HỆ</h6>
          <p class="text-justify">
            <Address>
              <p>Địa chỉ: Đường 3/2, tòa nhà Ledocel, phường Xuân Khánh, quận Ninh Kiều, TP. Cần Thơ.</p>
              <p>Sđt: <a href="#">0123456789</a></p> 
              <p>Email: <a href="#">zinda@gmail.com</a></p> 
            </Address>
        </div>

        

        
      </div>
      <hr>
      <!-- </div> -->
        <div class="container row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by 
             <a href="about_me.php">Zinda</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a></li>
              <li><a class="massager" href="#"><i class="fa fa-comment" aria-hidden="true"></i></a></li>
              <li><a class="pinterest" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
      <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
      ></script>
      <script
       src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
       integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
       crossorigin="anonymous"
      ></script>
      <script
       src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
       integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
       crossorigin="anonymous"
      ></script>
   
  </footer>
</html>

