<?php
//例外処理

//本番環境用データベース情報
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    
$db_name = substr($url["path"], 1);
$db_host = $url["host"];
$user = $url["user"];
$password = $url["pass"];

try{
  $db = new PDO('mysql:dbname=' . $db_name . '; host=' . $db_host . '; charset=utf8' , $user,$password);
}catch(PDOException $e){
  print('DB接続エラー：' . $e->getMessage());
}

//ローカル環境データベース情報
// try{
//   $db = new PDO('mysql:dbname=my_project; host=localhost; port=8889;charset=utf8','root','root');
// }catch(PDOException $e){
//   print('DB接続エラー：' . $e->getMessage());
// }
 ?>