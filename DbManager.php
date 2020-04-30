<?php
//データーベース接続メソッド
function getDB(){
    $dsn = 'mysql:dbname=takeout_db; host=localhost; charset=utf8';
    $usr = 'root';
    $passwd = 'password';
    
    //データベースへの接続を確率
    $db = new PDO($dsn, $usr, $passwd);
    return $db;
}