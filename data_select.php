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
	$sql = 'SELECT * FROM table1';
	$result = $pdo -> query($sql);

	foreach($result as $row){
		echo $row['name'].', ';
		echo $row['value'].'<br>';
	}
    //接続終了
    $pdo = null;
}

//接続に失敗した際のエラー処理
catch (PDOException $e){
    print('エラーが発生しました。:'.$e->getMessage());
    die();
}
?>
