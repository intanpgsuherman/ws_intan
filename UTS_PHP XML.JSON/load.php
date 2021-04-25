<?php
 
include 'koneksi.php';
 
$dataxml = simplexml_load_file('databuku.xml');
 
foreach($dataxml->book as $buku)
{
   $id = $buku['id'];
   $author = $buku->author;
   $title = addslashes($buku->title);
   $genre = $buku->genre;
   $price = $buku->price;
   $publish_date = $buku->publish_date;
   $description = $buku->description;
   $query = "INSERT INTO book 
                 VALUES ('$id', '$author', '$title', '$genre', '$price', '$publish_date', '$description') ";
   $sql    = mysqli_query($db, $query);
}
if ($sql){
    echo 'Data berhasil di Import';
}else {
    echo 'Try Again';
}
?>