<h3>Thêm Sản Phẩm</h3>

<form action="" method="post">
<input type="text" name="name" placeholder="Nhap ten sach"><br>
<input type="text" name="image" placeholder="Hinh Anh"><br>
<input type="text" name="price" placeholder="Gia"><br>
<input type="text" name="views" placeholder="So luot xem"><br>
<button>Theem</button>
</form>
<?php
include_once "DAO.php";
if(isset($_POST['name'])){
$name=$_POST['name']??'';
$image=$_POST['image']??'';
$price=$_POST['price']??0;
$views=$_POST['views']??0;
addBook($name,$image,$price,$views);
header('Location: index.php');
}
?>