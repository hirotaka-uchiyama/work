<?php
// 1.下記のフォームからPOSTリクエストを受け取り、「名前」「年齢」「出身地」を出力してください。
// 2.「年齢」が20歳以上であれば「成人です」20歳未満であれば「未成年です」と出力してください。
// 3.「出身地」が東京であれば、「東京は日本の首都です」東京でなければ「〇〇は日本の首都ではありません」と出力してください。
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>GET, POSTメソッド</title>
</head>
<body>
    <?php
    $name = $_POST['name'];
    echo $name;
    echo  "<br/>";
    $age = $_POST['age'];
    echo $age;
    echo "<br/>";
    $from = $_POST['from'];
    echo $from;
    echo "<br/>";
    if ($age >= 20) {
        echo '成人です';
    }else{
        echo '未成年です';
        echo "<br/>";
    }
    $tokyo = "東京";

    if ($from === $tokyo){
        echo "東京は日本の首都です";
    }else{
        echo $from,"は日本の首都ではありません";
    }
    ?>
    <h1>フォーム</h1>
    <form action="index.php" method="post">
        <label>名前</label>
        <input type="text" name="name">

        <label>年齢</label>
        <input type="number" name="age">

        <label>出身地</label>
        <input type="text" name="from">

        <input type="submit" value="送信">
    </form>
</body>
</html>