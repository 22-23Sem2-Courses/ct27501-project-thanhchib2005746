<?php

require 'Connect.php';

$sql = "SELECT * FROM sanpham";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="product-item d-flex" onclick="showDetail();">';
    echo '<a href="../db/sanphamchitiet.php/?id=' . $row['id']. '">';
    
    echo "<div class='product shadow bg-body'>";
    echo "<div class='product-img'>";
    echo "<img src='" . $row['img_url'] . "' class='mx-auto d-block product-img product shadow product-item bg-body container'>";
    echo '</div>';
    echo '<div class="product-info">';
    echo '<div class="product-name mr0 product-info" >' . $row['name'] . '</div>';
    echo '<div class="product-price mr0 product-info">' . $row['price'] . '  đồng </div>';
    echo '<form action="../db/sanphamchitiet.php">
    <input type="text" value="' . $row['id'] .'" name="id" hidden><button type="button" class="btn btn-outline-secondary">Mua ngay</button>
    </form>';
    echo '</div>';
    echo '</div>';
    echo '</a>';
    echo '</div>';
  }


} else {
  // Không tìm thấy dữ liệu
  echo 'Không có sản phẩm nào trong cửa hàng.';
}

// Ngắt kết nối đến database
mysqli_close($conn);
?>