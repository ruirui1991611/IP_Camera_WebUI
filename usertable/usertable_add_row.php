<?php
include "../common.php";

$database_path = get_database_path();
if ($database_path == "") {
    die("can not get the database path");
}

class SQLiteDB extends SQLite3
{
    function __construct($path)
    {
        $this->open($path);
    }
}
$db = new SQLiteDB($database_path);
if (!$db) {
    die($db->lastErrorMsg());
}

// 从web前端接收到的参数
$name = $_POST["name"];

$sql = <<<EOF
INSERT INTO userinfo (`name`) VALUES ("$name");
EOF;

$result = $db->exec($sql);
if ($result) {
    echo "1";
} else {
    echo "0";
}
$db->close();

?>
