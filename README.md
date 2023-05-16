# BardAPI-on-PHP
BardAPI on PHPはPython向けBardAPIをPHP上で実行するためのものです。バックエンドとしてPythonを利用します。

```php
<?php
$text = "今日の日本の天気を教えて";
include('./bardapi.php');
print($result)
?>
```
$textにBardへの質問を入力します。Bardの返答は$resultに格納されます。
