<?php
$servername="localhost";
$username="root";
$password="";
$dbname="damonthi";
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
function getViewBooks(){
    global $conn;
    $sql = "SELECT * FROM book ORDER BY views DESC limit 3";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $categories = $stmt->fetchAll();
    return $categories; 
}
function getnewBooks(){
    global $conn;
    $sql = "SELECT * FROM book ORDER BY create_at DESC limit 5";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $categories = $stmt->fetchAll();
    return $categories; 
}
function deleteBook($id){
    global $conn;
    // Những danh mục đã có sản phẩm thì không xóa được cần xử lí thêm  
    // Có thể chuyển sản phẩm vào danh mục mặc định

    $sql = "DELETE FROM book WHERE id = :id";   
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
function addBook($name, $image, $price, $views){
    global $conn;
    $sql = "INSERT INTO book(name,image,price,views) VALUES(:name, :image, :price, :views)";   
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':image',$image);
    $stmt->bindParam(':price',$price);
    $stmt->bindParam(':views',$views);
    $stmt->execute();
    return $conn->lastInsertId();
}

//Sửa sản phẩm
function getBook($id){
    global $conn;
    $sql = "SELECT * FROM book WHERE id = :id";   
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $category = $stmt->fetch();
    return $category; 
}

function updateBook($id, $name, $image, $price, $views){
    global $conn;
    $sql = "UPDATE book SET name = :name, image=:image, price=:price, views=:views WHERE id = :id";   
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':image',$image);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':price',$price);
    $stmt->bindParam(':views',$views);
    $stmt->execute();
}
