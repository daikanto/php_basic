<!DOCTYPE html>
<html lang="ja">
<head>
  <title>入力内容確認</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>入力内容確認</h1>
  <?php
  echo $_POST['nickname'].'<br>';//$_POSTスーパーグローバル変数
  echo $_POST['email'].'<br>';
  echo $_POST['content'].'<br>';
?>
<?php
$nickname = htmlspecialchars($_POST['nickname']);
  if ($nickname == '') 
  	{
    	echo 'ニックネームが入力されていません。'.'<br>';
  	} 
  else 
  	{
    	echo 'ようこそ、' . $nickname .'様'.'<br>';
  	}


  $email =htmlspecialchars($_POST['email']);
  if ($email == '') 
  	{
    	echo 'メールアドレスが入力されていません。'.'<br>';
  	} 
  else 
  	{
    	echo 'メールアドレス：' . $email.'<br>';
  	}

   $content=htmlspecialchars($_POST['content']);
   if ($content == '') 
    {
    echo 'お問い合わせ内容が入力されていません。'.'<br>';
    } 
   else
    {
    echo 'お問い合わせ内容：' . $content.'<br>';
    }
?>
<!--戻るボタン＆OKボタン-->
	<form method="POST" action="thanks.php">
  			<input type="hidden" name="nickname" value="<?php echo $nickname; ?>"><!--画面表示なし、値はthanks.php に送信される-->
  			<input type="hidden" name="email" value="<?php echo $email; ?>">
  			<input type="hidden" name="content" value="<?php echo $content; ?>">

<!--戻るボタン-->

  		<input type="button" value="戻る" onclick="history.back()">
	
<!--OKボタン-->
	<?php if ($nickname != '' && $email != '' && $content != ''): ?>//入力ミスがない場合
  		<input type="submit" value="OK">
	<?php endif; ?>	
    </form>
</body>
</html>