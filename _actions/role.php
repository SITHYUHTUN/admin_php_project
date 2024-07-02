<?php
include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
$id=$_GET['id'];
$role=$_GET['role'];

$table=new UsersTable(new MySQL());
$table->changeRole($id,$role);
HTTP::redirect("./admin.php");