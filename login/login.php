<?php
session_start();

//获取post的数据
$account = $_POST['account'];
$passwd = $_POST['password'];
$flag = 0;


// 对已存在用户进行计数
// 去数据库查用户
$count = 0;
function check_user($account, $passwd) {
    # // check processing
    $ret = 0 // processing 获取结果
	return ret;
}

$flag = check_user($account, $passwd);

if ($flag == 1) {
	$_SESSION['user'] = $account;
	echo '1';
} else {
	echo '0';
}

?>
