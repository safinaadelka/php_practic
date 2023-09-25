<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
</head>

<body>
 <br> <br> <br>

    <?php if (isset($_POST['registration'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
    }


    function empty_func($value)
    {
        if (empty($value)) {
            return $error = '<p class="error">пустое поле</p>';
        }
    }
    function count_func($value)
    {
        if (iconv_strlen(($value)) < 5) {
            return $error = '<p class="error">минимальное кол-во символов - 4</p>';
        }
    }
    function email_func($value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return $error = '<p class="error">неверный формат почты</p>';
        }
    }
    function number_func($value)
    {
        if (iconv_strlen(($value)) != 11) {
            return $error = '<p class="error">номер телефона должен состоять из 11 цифр</p>';
        }
    }
    ?>


    <div class="divv">
        <div class="container">
            <div class="div_content">
                <div class="reg_form" id="reg">
                    <div class="forms_container">
                        <h4 class="form_name">Регистрация</h4>
                        <form name="registration" method="POST">
                            <?php echo $main_error ?>
                            <div class="form">
                                <input type="text" name="name" id="name" placeholder=" " class="form__input" value="<?= $name ?>">
                                <label for="name" class="form__label">имя</label>
                            </div>
                            <?php echo empty_func($name) ?>
                            <?php echo count_func($name) ?>
                            <div class="form">
                                <input type="text" name="email" id="email" placeholder=" " class="form__input" value="<?= $email ?>">
                                <label for="email" class="form__label">email</label>
                            </div>
                            <?php echo empty_func($email) ?>
                            <?php echo count_func($email) ?>
                            <?php echo email_func($email) ?>
                            <div class="form">
                                <input type="number" name="phone" id="phone" placeholder=" " class="form__input" value="<?= $phone ?>">
                                <label for="phone" class="form__label">номер телефона</label>
                            </div>
                            <?php echo empty_func($phone) ?>
                            <?php echo number_func($phone) ?>

                            <input type="submit" class="submit__blue" name="registration" value="Создать аккаунт">
                        </form>

                        <p class="form_login_link">Уже есть профиль? <a href="#auth"><span class="blue">Войти</span></a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>