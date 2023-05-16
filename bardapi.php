<?php
#Bard API Key
$apikey = 'API KEY';
#Python 
$pythonscriptpath = "./bard.py";
$pythonpath = "/Library/Frameworks/Python.framework/Versions/3.11/bin/python3"; #環境に応じて変更
#Command
$command = $pythonpath . ' ' . $pythonscriptpath . ' ' . escapeshellarg($apikey) . ' ' . escapeshellarg($text);

#Commandの実行結果
$result = shell_exec("{$command} 2>&1");
?>
