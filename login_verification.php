<?PHP
$LoggedIn = false;
$notLoggerIn = true;

$server_token = uniqid();

if($_SERVER['REQUEST_METHOD'] == 'POST ) {
$sql = 'select * from dbname where mail = :mail';
$stmt= $conn->prepare($sql);
$stmt->execute([':mail' => $_POST['mail']);
$count = $stmt->rowCount();
$fetch= $stmt->fetch(PDO::FETCH_OBJ);

if($count > 0){
if( password_verify($pass, $fetch->pass){
$LoggedIn = true;

header('Location: accounts.php');
exit(0);
}
}else{
echo 'No matching accounts';
}
}


?>
