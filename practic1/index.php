<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>

</body>

</html>
<div class="div_orange">
    <h1>Задание 1</h1>

    <h2>Список студентов</h2>

    <?php
    $array = ['Сафина', 'Хисамиева', 'Волкова', 'Тимофеева', 'Сиразтдинова'];
    $k = 0;
    ?>

    <p class="count">
        Кол-во студентов: <?= count($array); ?>
    </p>
    <?

    foreach ($array as $element) { ?>
        <p class="surname">
            <?= $element ?>
        </p>
    <?
        if ($element == 'Сидоров') {
            $k++;
        }
    }
    $otvet;
    if ($k > 0) {
        $otvet = "ДА";
    } else if ($k == 0) {
        $otvet = "НЕТ";
    }
    $expelled = array_pop($array);
    ?>
    <p>Есть ли Сидоров в этом списке: <?= $otvet ?></p>
    <p>Последняя фамилия, которая удалиться: <?= $expelled; ?></p>
    <br>
</div>


<div class="div_blue">
    <h1>Задание 2</h1>

    <h2>Обо мне</h2>
    <?php
    $student = [
        'name' => 'Аделя',
        'surname' => 'Фамилия',
        'group' => '424',
        'hobby' => ['Чтение', 'Нет хобби'],
        'profiles' => ['insta' => '14adelya', 'telegram' => 'Lodge_V']
    ]; ?>
    <p class="surname">Имя: <?= $student['name'] ?></p>
    <p class="surname">Фамилия: <?= $student['surname'] ?></p>
    <p class="surname">Группа: <?= $student['group'] ?></p>
    <p class="surname">хобби: <?php foreach ($student['hobby'] as $elem) {
                                    echo $elem;
                                } ?> </p>
    <p class="surname">Соц сети: <br> <?php foreach ($student['profiles'] as $key => $value) {
                                            echo $key . ':' . $value;
                                            echo '<br>';
                                        }
                                        ?></p>
    <br>
</div>
<div class="div_red">
    <h1>Задание 3</h1>

    <h2>Кружок - Фамилия</h2>
    <p class="surname_m">Массив до сортировки: </p>
    <?php
    $circles = ["Спортивный" => "Сидоров", "Художественный" => "Емелина", "Музыкальный"
    => "Иванова", "Литературный" => "Петров", "Биологический" => "Антонова"];
    foreach ($circles as $key => $value) { ?>
        <p class="surname"><?= $key . ' — ' . $value; ?></p>
    <? }
    $circl = asort($circles);
    ?>

    <br> <br>
    <p class="surname_m">Массив после сортировки:</p>
    <?php
    foreach ($circles as $key => $value) { ?>
        <p class="surname"><?= $key . ' — ' . $value; ?></p>
    <? }
    ?>

</div>