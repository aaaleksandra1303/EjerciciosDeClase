<?php

try{
    $pdo=new PDO(
        'mysql:host=localhost;dbname=users;charset=utf8',
        'root',''
    );

} catch(PDOException $e){
    print "Error!:".$e->getMessage()."<br>";
    die();
}


if(!empty($_POST)){

    $name=$_POST['name'];
    $email=$_POST['email'];

    $stmt=$pdo->prepare("insert into users(name,email) values (:name, :email)");
    $stmt->execute([':name'=>$name,':email'=>$email]);

    //$pdo=null;
    //$stmt=null;


    $stmt=$pdo->prepare('SELECT * from users');
    $stmt->execute();
    $users=$stmt->fetchAll();

    include 'users_view.php';
}else {
    include 'form_user.php';
}

