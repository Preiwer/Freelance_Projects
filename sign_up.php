<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form_style.css">
</head>

<body>
    <form action="./php_modules/create_acc.php" method="get" class="field container box">
        <h1 class="title has-text-weight-light">Регистрация</h1>
        <label for="name" class="label mb-0" style="font-weight:500">Ваше Имя</label>
        <input type="text" required name="login" id="name" class="input">

        <label for="email" class="label mb-0 mt-3" style="font-weight:500">Ваш E-mail</label>
        <input class="input" type="email" name="email" id="email" required>

        <label for="pass" class="label mb-0 mt-3" style="font-weight:500">Пароль</label>
        <input class="input" type="password" id="pass" name="pass" required>

        <label for="pass" class="label mb-0 mt-3" style="font-weight:500">Повторите пароль</label>
        <input class="input" type="password" name="" required>

        <label for="accept" class="label mb-0 mt-3" style="font-weight:500">
            <input class="checkbox" type="checkbox" name="accept" id="accept">
            Даю согласие на обработку персональный данных
        </label><br>

        <input class="button is-warning" type="submit" value="Зарегистрироваться">
    </form>
</body>

</html>