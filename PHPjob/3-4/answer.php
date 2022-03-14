<link href="css/test.css" rel="stylesheet">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
$port_number = $_POST['ans_port_number'];
$language = $_POST['ans_language'];
$comand = $_POST['ans_comand'];
$ans_port = $_POST['port'];
$ans_HTML = $_POST['html'];
$ans_select = $_POST['select'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function question ($answer, $correct){
    if ($answer == $correct) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }    
}
?>
<p class="name"><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php question ($port_number, $ans_port); ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php question ($language, $ans_HTML); ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php question ($comand, $ans_select); ?>

