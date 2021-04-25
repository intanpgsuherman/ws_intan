<?php
$dataxml = simplexml_load_file('databuku.xml');
  
foreach($dataxml->book as $buku)
{
   echo "ID buku: ".$buku['id']."<br>";
   echo "Author : ".$buku->author."<br>";
   echo "Title : ".$buku->title."<br>";
   echo "Genre : ".$buku->genre."<br>";
   echo "Price : $ ".$buku->price."<br>";
   echo "Published Date : ".$buku->publish_date."<br>";
   echo "Description : ".$buku->description."<hr>";
}
?>