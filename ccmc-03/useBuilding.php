<?php
require_once("class/Building.php");

$kasemigaseki = new Building("霞ヶ関ビル",147);
$sunshine = new Building("サンシャイン60",248);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>Buildingクラスを利用する</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/ccmc-03.css" />
</head>

<body>
	<h1>Buildingクラスを利用する</h1>
	<dl>
		<dt><?= $kasemigaseki->getName() ?></dt>
		<dd><?= $kasemigaseki->setName() ?></dd>
	</dl>
	<dl>
		<dt>サンシャイン60</dt>
		<dd>サンシャイン60の高さは240mです。</dd>
	</dl>
	<p><a href="index.html">インデックスに戻る</a></p>
</body>

</html>