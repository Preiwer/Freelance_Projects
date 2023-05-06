<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form_style.css">
    <link rel="stylesheet" href="./css/radio_category.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form action="./php_modules/create_post.php" method="get" class="field container box">
        <h1 class="title has-text-weight-light" placeholder="Заголовок отзыва (Например: ">Создание отзыва</h1>

        <h3 class="title mb-0" style="font-size: 20px; font-weight:500">Выберите, о ком будет отзыв</h3>
        <span style="font-size: 12px;">О ком ваш отзыв? Компания или человек?</span>
        <div class="conainer box radio-box" style="gap:30px">
            <label class="label radio-control">
                <input type="radio" class="radio" value="human" name="category" checked>
                <i class="fa-solid fa-person" style="color: #ffe08a;"></i>
                <p>Человек</p>
            </label>
            <label class="label radio-control">
                <input type="radio" class="radio" value="company" name="category">
                <i class="fa-sharp fa-solid fa-building" style="color: #ffe08a;"></i>
                <p>Компания</p>
            </label>
        </div>

        <label for="title" class="label mb-0" style="font-weight:500">Заголовок</label>
        <span style="font-size: 12px;">Напишите название компании, имя или краткий заголовок</span>
        <input class="input" type="text" name="title" id="title" required>

        <label class="label mb-0 mt-3" for="comment" style="font-weight:500">Отзыв</label>
        <span style="font-size: 12px;">Укажите все ключевые моменты, опишите самое главное</span>
        <textarea placeholder="Название компании, имя или другой текст" required class="textarea" name="comment" id="comment" cols="30" rows="3"></textarea>

        <label class="label mt-3 is-variable" for="extra" style="font-weight:500">
            Дополнительно
            <br><span style="font-size: 12px;font-weight:400!important">Укажите дополнительную информацию о мошеннике</span>
            <label class="label" style="font-weight:500;font-size:12px">(Не обязательно)</label>
            <input placeholder="Телефон" class="input is-warning mb-3" name="tel" id="extra" type="tel">
            <input placeholder="Город" class="input is-warning" name="city" id="extra" type="text">
        </label>

        <!-- <label for="category" class="mt-3 label mb-0" style="font-weight:500">Выберите категорию</label>
        <div class="select is-warning">
            <select required name="category" id="category">
                <option>Человек</option>
                <option>Компания</option>
            </select>
        </div> -->

        <label class="label mt-3 mb-0" for="soc_link" style="font-weight:500">Сайт или ссылка на соц сеть</label>
        <input class="input" type="text" id="soc_link" name="soc_link" required>

        <label for="accept" class="label mb-0 mt-3" style="font-weight:500">
            <input class="checkbox" type="checkbox" name="accept" id="accept">
            Даю согласие на обработку персональный данных
        </label><br>
        <input class="button is-warning" type="submit">
    </form>
</body>

</html>