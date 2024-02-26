<?php 
include 'template/head.php'; 
include 'template/nav.php'; 
include 'template/data.php';
?>   
<main>
  
<div class="container mb-5">
<div class="row">
<div class="col-12">

<br>
<h3>Уже есть учётная запись? <button type="submit" class="btn btn-light"><a href="form.php">Войти</a></button></h3>
<br>
<h3>Зарегистрироваться</button></h3>
<form  method="POST"  role="form" class="form-inline">
<div class="form-group mb-2 col-4">
<input type="text" class="form-control" name="fio" placeholder="Введите ФИО" requered>
</div>
<div class="form-group mb-2 col-4">
<input type="tel" class="form-control"  name="telephone" placeholder="Введите телефон" requered>
</div>
<div class="form-group mb-2 col-4">
<input type="text" class="form-control"  name="login" placeholder="Придумайте логин" requered>
</div>
<div class="form-group mb-2 col-4">
<input type="password" class="form-control"  name="password" placeholder="Придумайте пароль" requered>
</div>
<div class="form-group mb-2 col-4">
<button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</div>

<?php
if (!empty($_POST)) 
{
$fio=$_POST['fio'];
$role=$_POST['role'];
$adress=$_POST['adress'];
$telephone=$_POST['telephone'];
$login=$_POST['login'];
$password=$_POST['password'];
$sql="INSERT INTO users (fio, telephone, login, password) VALUE ('$fio', '$telephone', '$login', '$password')";
$result = $mysqli->query($sql);
header ("Location: form.php");
}
?>	

</div>
</div>
</div>
</main>
<?php 
include 'template/footer.php'; 
?>
