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
API Keyなどはbardapi.phpで設定できます
```php
<?php
#Bard API Key
$apikey = 'API KEY';
#Python 
$pythonscriptpath = "./bard.py";
$pythonpath = "/Library/Frameworks/Python.framework/Versions/3.11/bin/python3"; #環境に応じて変更
?>
```
