<?php
$title = 'Авторизация';
require_once '../templates/header.php';

if (isset($_SESSION['loginError'])) {
    echo 
    "
    <div class='alert alert-danger text-center' role='alert'>
        {$_SESSION['loginError']}
    </div>
    ";
    unset($_SESSION['loginError']);
} else if (isset($_SESSION['success'])) {
    echo 
    "
    <div id='alertSuccess' class='alert alert-success text-center' role='alert'>
        Данные успешно обновлены!
    </div>
    ";
    unset($_SESSION['success']);
}
?>

<form method="POST" action="../actions/login.php">
    <input class="form-control mb-2" placeholder="Логин" name='login'>
    <input class="form-control mb-2" type="password" placeholder="Пароль" name='password'>
    <button type="submit" class="btn btn-success w-100">Войти</button>
</form>

<?php

require_once '../templates/footer.php';