<?php
include("vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;

$table=new UsersTable(new MySQL);

$faker=Faker::create();
echo "Starting....";
for($i=0;$i<20;$i++){
    $table->insert([
        "name"=>$faker->name,
        "email"=>$faker->email,
        "phone"=>$faker->phoneNumber,
        "address"=>$faker->address,
        "password"=>"password",
    ]);
}
echo "Done";

// $user=$table->find("alice@gmail.com","password");
// // $id=$table->insert([
// //     "name"=>"Alice",
// //     "email"=>"alice@gamil.com",
// //     "phone"=>"0991432143",
// //     "address"=>"Some address",
// //     "password"=>"password",
// // ]);
// if($user){
//     echo "Correct login";
// }else{
//     echo "Incorrect login";
// }
// echo $id;
// $mysql=new MySQL;
// $db=$mysql->connect();
// $result=$db->query("SELECT * FROM roles");
// print_r($result->fetchAll());
 

// use Helpers\HTTP;
// use Helpers\Auth;

// HTTP::redirect("/index.php","http=test");
// Auth::check();


