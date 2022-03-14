<link href="css/test.css" rel="stylesheet">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$port_numbers = ['80', '22', '20', '21'];
$languages = ['PHP', 'Python', 'JAVA', 'HTML'];
$comands = ['join', 'select', 'insert', 'update'];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$port = '80';
$HTML = 'HTML';
$select = 'select';
?>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="POST">
    <p>お疲れ様です<?php echo $name;?>さん</p>
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($port_numbers as $port_number) { ?>
        <input type="radio" name="ans_port_number" value="<?php echo $port_number; ?>"><?php echo $port_number; ?>
    <?php } ?>
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($languages as $language) { ?>
        <input type="radio" name="ans_language" value="<?php echo $language; ?>"><?php echo $language; ?>
    <?php } ?>
    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($comands as $comand) { ?>
        <input type="radio" name="ans_comand" value="<?php echo $comand; ?>"><?php echo $comand; ?>
    <?php } ?><br>
    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="hidden" name="name" value="<?php echo $name;?>">
    <input type="hidden" name="port" value="<?php echo $port;?>">
    <input type="hidden" name="html" value="<?php echo $HTML;?>">
    <input type="hidden" name="select" value="<?php echo $select;?>">
    <input type="submit" value="回答する">
</form>