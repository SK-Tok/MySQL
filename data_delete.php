//deleteによる削除処理

<?php
//DBにMysql、データベース名・testを指定。
$dsn = 'mysql:dbname=dbname;host=localhost';

//DBに接続するためのユーザー名・パスワードを設定
$user = 'username';
$password = 'password';


try{
//データーベースに接続
    $pdo = new PDO($dsn, $user, $password);

  //ここに処理を記載
	$sql = "DELETE FROM table1 WHERE name = :name" ;
	$result = $pdo->prepare($sql);
	$array = array(':name' => 'name1');
	$result->execute($array);
	echo '削除完了しました';
    //接続終了
    $pdo = null;
}

//接続に失敗した際のエラー処理
catch (PDOException $e){
    print('エラーが発生しました。:'.$e->getMessage());
    die();
}
?>
