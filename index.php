<?php include_once "DAO.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.w3schools.com/bootstrap5/tryit.asp?filename=trybs_default&stacked=h"></script>
</head>
<body>

<div class="table table hover">
    <h3>Top 3 sách bán nhiều</h3>
    <a href="add.php" class="btn btn-danger" onclick="">Add</a>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Lượt xem</th>
        </tr>
        <?php foreach(getViewBooks() as $book){?>
            <tr>
                <th><?=$book['id'];?></th>
                <th><?=$book['name'];?></th>
                <th><?=$book['price'];?></th>
                <th><img src="<?=$book['image'];?>" width="100px" height="100px"></th>
                <th><?=$book['views'];?></th>
                <th><a href="delete.php?id=<?=$book['id'];?>" class="btn btn-danger" onclick="">Xxoas</a>
                <a href="edit.php?id=<?=$book['id'];?>" class="btn btn-danger" onclick="">Edit</a></th>
                
            </tr>
            
            <?php } ?>
</table>
   <br>
    <h3>Top 5 sách mooiws</h3><table>
    <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Lượt xem</th>
        </tr>
    <?php foreach(getnewBooks() as $book){?>
       
            <tr>
                <th><?=$book['id'];?></th>
                <th><?=$book['name'];?></th>
                <th><?=$book['price'];?></th>
                <th><img src="<?=$book['image'];?>" width="100px" height="100px"></th>
                <th><?=$book['views'];?></th>
            </tr>
            <?php } ?>
    </table>
</div>

</body>
</html>
