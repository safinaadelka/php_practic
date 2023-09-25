<!-- <div class="div_orange">
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

    </div> -->



<?php
if (isset($_POST['form'])) {
    echo 'arrdhskhda';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    echo $name;
    empty_func($name);
    empty_func($email);
    empty_func($phone);
    echo "dskljhdhdhdhdhdhdhdhdhdhdhd";
    echo $name;

    if (empty($name)) {
        $error = '<p class="error">пустое поле</p>';
    }
}
function empty_func($value)
{
    if (empty($value)) {
        print_r('error');
        return $error = '<p class="error">пустое поле</p>';
    }
}
?> */

<?php
    if (isset($_POST['registration'])) {
        $surname = $_POST['surname'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        if (empty($name)) {
            $error2 = '<p class="error">поле не может быть пустым</p>';
        } else if (!preg_match("/^[a-zA-Z]+$/i", $name)) {
            $error2 = '<p class="error">не допустимые символы</p>';
        }
        if (empty($email)) {
            $error3 = '<p class="error">поле не может быть пустым</p>';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error3 = '<p class="error">неверный формат почты</p>';
        }
    }
    ?>

<form name="form" method="POST">
    <label for="name">Введите имя</label>
    <br>
    <input type="text" name="name" id="name" placeholder value="<?= $name ?>">
    <?php echo $error ?>
    <br>
    <label for="name">Введите почту</label> <br>
    <input type="text" name="email" id="email" value="<?= $email ?>"> <br>
    <label for="name">Введите телефончик</label> <br>
    <input type="number" name="phone" id="phone" value="<?= $phone ?>"> <br>
    <input type="submit" value="Готово">
</form>