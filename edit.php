<h3>Sửa Sản Phẩm</h3>
<?php include_once "DAO.php";
$id=$_GET['id'];
$book=getBook($id);
?>
<form action="" method="post">
<input type="text" name="name" value="<?=$book['name'];?>" placeholder="Nhap ten sach"><br>
<input type="text" name="image" value="<?=$book['image'];?>" placeholder="Hinh Anh"><br>
<input type="text" name="price" value="<?=$book['price'];?>" placeholder="Gia"><br>
<input type="text" name="views" value="<?=$book['views'];?>" placeholder="So luot xem"><br>
<button>Cập nhật</button>
</form>
<?php
// include_once "DAO.php";
if(isset($_POST['name'])){
$name=$_POST['name']??'';
$image=$_POST['image']??'';
$price=$_POST['price']??0;
$views=$_POST['views']??0;
updateBook($id,$name,$image,$price,$views);
header('Location: index.php');
}


?>