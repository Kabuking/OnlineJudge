<?php
$target_dir = "uploads/";
session_start();
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
exec('cd uploads & test',$output,$correct);
/*$output=shell_exec('cd uploads & test');*/
if($correct=="1"){
	system("del over.txt");
	header( 'Location: congo.php' );
	exit();
}
else{
	$_SESSION["incorrect"]="1";
	header( 'Location: action_page.php' );
	exit();
}
/*sqlite db connection
class MyDB extends SQLite3 {
      function __construct() {
         $this->open('codetest.db');
      }
}
$db = new MyDB();
if(!$db) {
   echo $db->lastErrorMsg();
} else {
   echo "Opened database successfully\n";
}
sqlite table creation
$sql =<<<EOF
      CREATE TABLE IF NOT EXISTS score
      (regno INT PRIMARY KEY     NOT NULL,
      time           TEXT    NOT NULL,
      score            INT     NOT NULL,
      );
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
*/
?>