<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.css">
    <title>Catalog</title>
</head>
<body>
<?php
$conn = new mysqli("localhost", "root", "");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->select_db("books");
$result = $conn->query("SELECT DATABASE()");
$row = $result->fetch_row();
?>
<header class="header2">
    <div class="top_menu2">
        <img src="./img/svg/Logo_menu.svg" alt="menu" class="menu_logo-pic">
        <img src="./img/svg/mobile_logo.svg" alt="menu" class="menu_logo-pic_mobile">
        <div class="SearchMenu">
            <form>
                <div class="searchBarmenu">
                    <div class="search">
                        <input type="search" id="site-search" aria-label="Search through site content">
                        <!-- <img src="img/svg/loupe.svg" alt="menusearch_loupe" class="menusearch_loupe"> -->
                    </div>
                    <div class="searchButtonmenu">
                        <button type="submit"><i class="fa fa-search"></i>Знайти</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="menu_links">
            <a href="#!" class="menu_link"><img src="img/svg/wish list.svg" alt="menu_images" class="menu_images"></a>
            <a href="#!" class="menu_link"><img src="img/svg/Cart3.svg" alt="menu_images" class="menu_images"></a>
            <a href="registration.php" class="menu_link"><img src="img/svg/user.svg" alt="menu_images"
                                                              class="menu_images"></a>
        </div>
    </div>
</header>

<header class="header2_mobile">
    <div class="top_menu_mobile">
        <a href="#" onclick="history.back();"><img src="./img/svg/arrow left.svg"></a>

        <input type="checkbox" class="checkbox1" id="checkbox1" name="checkbox1" value="yes">
        <label for="checkbox1" class="checkbox_label">
            <img src="./img/svg/menu.svg" class="list_menu_mobile">
        </label>
        <div class="button_menu">
            <a href="registration.php">Моя сторінка</a>
            <a href="#!">Список бажаного</a>
            <a href="#!">Корзина</a>
        </div>
    </div>
</header>

<main>

    <div class="filter">
        <div class="first_button">
            <div class="cont">
                <input type="checkbox" class="checkbox2" id="checkbox2" name="checkbox2" value="yes">
                <label for="checkbox2" class="checkbox_label2">
                    <img src="./img/first.png" alt="f">
                    <p>Фільтр</p>
                </label>
                <div class="button_menu2">
                    <div class="catalog_page2">
                        <h2 class="title_name">Книжки</h2>
                        <form method="get">
                            <div class="PublishHouse GroupName">
                                <div class="publish_house_menu">
                                    Видавництво
                                    <div class="number_of_publish_house">843</div>
                                </div>
                                <div class="Options">
                                    <div class="Option">
                                        <input type="checkbox" id="option1" class="checkbox" name="PublishHouse[]"
                                               value="1DEA.me"
                                               onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("1DEA.me", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option1">1DEA.me</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option2" class="checkbox" name="PublishHouse[]"
                                               value="Book Chef"
                                               onchange="this.form.submit() <?php if (!empty($_GET['PublishHouse']) and in_array("Book Chef", $_GET['PublishHouse'])) echo "checked"; ?>"><label
                                                for="option2">Book Chef</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option3" class="checkbox" name="PublishHouse[]"
                                               value="Cambridge University Press"
                                               onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Cambridge University Press", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option3">Cambridge University Press</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option4" class="checkbox" name="PublishHouse[]"
                                               value="International"
                                               onchange="this.form.submit() " <?php if (!empty($_GET['PublishHouse']) and in_array("International", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option4">International</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option5" class="checkbox" name="PublishHouse[]"
                                               value="Vivat"
                                               onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Vivat", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option5">Vivat</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option6" class="checkbox" name="PublishHouse[]"
                                               value="А-ба-ба-га-ла-ма-га"
                                               onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("А-ба-ба-га-ла-ма-га", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option6">А-ба-ба-га-ла-ма-га</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option7" class="checkbox" name="PublishHouse[]"
                                               value="Видавництво Старого Лева"
                                               onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Видавництво Старого Лева", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option7">Видавництво Старого Лева</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option8" class="checkbox" name="PublishHouse[]"
                                               value="Клуб Сімейного Дозвілля"
                                               onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Клуб Сімейного Дозвілля", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option8">Клуб Сімейного Дозвілля</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option9" class="checkbox" name="PublishHouse[]"
                                               value="Наш Формат"
                                               onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Наш Формат", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option9">Наш Формат</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option10" class="checkbox" name="PublishHouse[]"
                                               value="Ранок"
                                               onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Ранок", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option10">Ранок</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option11" class="checkbox" name="PublishHouse[]"
                                               value="Фолио"
                                               onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Фолио", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option11">Фолио</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option12" class="checkbox" name="PublishHouse[]"
                                               value="National Geographic"
                                               onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("National Geographic<", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option12">National Geographic</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="option13" class="checkbox" name="PublishHouse[]"
                                               value="Orion"
                                               onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Orion", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                                for="option13">Orion</label>
                                    </div>
                                </div>
                            </div>
                            <div class="Price GroupName">
                                <div class="publish_house_menu">
                                    Ціна
                                </div>
                                <?php
                                $lower_price = 0;
                                $upper_price = 0;
                                if (!empty($_GET['Price'])) {
                                    $prices = array($_GET['Price']);
                                    if (count($prices) > 2) {
                                        $lower_price = intval(htmlspecialchars($_GET['Price'][0]));
                                        $upper_price = intval(htmlspecialchars($_GET['Price'][1]));
                                    }
                                }

                                ?>
                                <div class="PriceControl">
                                    <div class="PriceControl">
                                        <div class="Enter">
                                            <input aria-label="price-from" class="input-text from" id="price_input_from"
                                                   name="Price[]" type="text" pattern="[0-9]*\.?[0-9]*"
                                                   placeholder="Від" value="<?php echo $lower_price; ?>">
                                        </div>
                                        <div>
                                            <span class="control-label">-</span>
                                        </div>
                                        <div class="Enter">
                                            <input aria-label="price-to" class="input-text to" id="price_input_to"
                                                   name="Price[]" type="text"
                                                   pattern="[0-9]*\.?[0-9]*" placeholder="До" value="<?php echo $upper_price; ?>">
                                        </div>
                                        <div class="commit-button">
                                            <a href="#" class="button-link">
                                                <img src="./img/svg/Button.svg" alt="comit-button" class="button">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Language GroupName">
                                <div class="publish_house_menu">
                                    Мова
                                    <div class="number_of_publish_house">10</div>
                                </div>
                                <div class="Options">
                                    <div class="Option">
                                        <input  type="checkbox" id="lang-option1" class="checkbox"
                                                name="Language[]" onchange="this.form.submit()"
                                                value="Українська"
                                                <?php if (!empty($_GET['Language']) and in_array("Українська", $_GET['Language'])) echo "checked"; ?>><label
                                                for="lang-option1">Українська</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="lang-option2" class="checkbox"
                                               name="Language[]" onchange="this.form.submit()"
                                               value="Англійська"
                                                <?php if (!empty($_GET['Language']) and in_array("Англійська", $_GET['Language'])) echo "checked"; ?>><label
                                                for="lang-option2">Англійська</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="lang-option3" class="checkbox"
                                               name="Language[]" onchange="this.form.submit()"
                                               value="Німецька"
                                            <?php if (!empty($_GET['Language']) and in_array("Німецька", $_GET['Language'])) echo "checked"; ?>><label
                                                for="lang-option3">Німецька</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="lang-option4" class="checkbox"
                                               name="Language[]" onchange="this.form.submit()"
                                               value="Російська"
                                            <?php if (!empty($_GET['Language']) and in_array("Російська", $_GET['Language'])) echo "checked"; ?>><label
                                                for="lang-option4">Російська</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="lang-option5" class="checkbox"
                                               name="Language[]" onchange="this.form.submit()"
                                               value="Французька"
                                            <?php if (!empty($_GET['Language']) and in_array("Французька", $_GET['Language'])) echo "checked"; ?>><label
                                                for="lang-option5">Французька</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="lang-option6" class="checkbox"
                                               name="Language[]" onchange="this.form.submit()"
                                               value="Італійська"
                                            <?php if (!empty($_GET['Language']) and in_array("Італійська", $_GET['Language'])) echo "checked"; ?>><label
                                                for="lang-option6">Італійська</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="lang-option7" class="checkbox"
                                               name="Language[]" onchange="this.form.submit()"
                                               value="Іспанська"
                                            <?php if (!empty($_GET['Language']) and in_array("Іспанська", $_GET['Language'])) echo "checked"; ?>><label
                                                for="lang-option7">Іспанська</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="lang-option8" class="checkbox"
                                               name="Language[]" onchange="this.form.submit()"
                                               value="Португальська"
                                            <?php if (!empty($_GET['Language']) and in_array("Португальська", $_GET['Language'])) echo "checked"; ?>><label
                                                for="lang-option8">Португальська</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="lang-option9" class="checkbox"
                                               name="Language[]" onchange="this.form.submit()"
                                               value="Польська"
                                            <?php if (!empty($_GET['Language']) and in_array("Польська", $_GET['Language'])) echo "checked"; ?>><label
                                                for="lang-option9">Польська</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="lang-option10" class="checkbox"
                                               name="Language[]" onchange="this.form.submit()"
                                               value="Чеська"
                                            <?php if (!empty($_GET['Language']) and in_array("Чеська", $_GET['Language'])) echo "checked"; ?>><label
                                                for="lang-option10">Чеська</label>
                                    </div>
                                </div>
                            </div>
                            <div class="Author GroupName">
                                <div class="publish_house_menu">
                                    Розділи
                                    <div class="number_of_publish_house">10</div>
                                </div>
                                <div class="Options">
                                    <div class="Option">
                                        <input type="checkbox" id="author-option1" class="checkbox"
                                               name="Section[]" onchange="this.form.submit()"
                                               value="Художня літаратура"
                                            <?php if (!empty($_GET['Section']) and in_array("Художня література", $_GET['Section'])) echo "checked"; ?> ><label
                                                for="author-option1">Художня література</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="author-option2" class="checkbox"
                                               name="Section[]" onchange="this.form.submit()"
                                               value="Словники та енциклопедії"
                                            <?php if (!empty($_GET['Section']) and in_array("Словники та енциклопедії", $_GET['Section'])) echo "checked"; ?> ><label
                                                for="author-option2">Словники та енциклопедії</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="author-option3" class="checkbox"
                                               name="Section[]" onchange="this.form.submit()"
                                               value="Підручники"
                                            <?php if (!empty($_GET['Section']) and in_array("Підручники", $_GET['Section'])) echo "checked"; ?> ><label
                                                for="author-option3">Підручники</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="author-option4" class="checkbox"
                                               name="Section[]" onchange="this.form.submit()"
                                               value="Наукова і технічна література"
                                            <?php if (!empty($_GET['Section']) and in_array("Наукова і технічна література", $_GET['Section'])) echo "checked"; ?> ><label
                                                for="author-option4">Наукова і технічна література</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="author-option5" class="checkbox"
                                               name="Section[]" onchange="this.form.submit()"
                                               value="Дім та хобі"
                                            <?php if (!empty($_GET['Section']) and in_array("Дім та хобі", $_GET['Section'])) echo "checked"; ?> ><label
                                                for="author-option5">Дім та хобі</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="author-option6" class="checkbox"
                                               name="Section[]" onchange="this.form.submit()"
                                               value="Подорожі та спорт"
                                        <?php if (!empty($_GET['Section']) and in_array("Подорожі та спорт", $_GET['Section'])) echo "checked"; ?>><label
                                                for="author-option6">Подорожі та спорт</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="author-option7" class="checkbox"
                                               name="Section[]" onchange="this.form.submit()"
                                               value="Бізнес література"
                                            <?php if (!empty($_GET['Section']) and in_array("Бізнес література", $_GET['Section'])) echo "checked"; ?> ><label
                                                for="author-option7">Бізнес література</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="author-option8" class="checkbox"
                                               name="Section[]" onchange="this.form.submit()"
                                               value="Релігія та езотерика"
                                            <?php if (!empty($_GET['Section']) and in_array("Релігія та езотерика", $_GET['Section'])) echo "checked"; ?> >
                                        <label for="author-option8">Релігія та езотерика</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="author-option9" class="checkbox"
                                               name="Section[]" onchange="this.form.submit()"
                                               value="Книги для батьків"
                                            <?php if (!empty($_GET['Section']) and in_array("Книги для батьків", $_GET['Section'])) echo "checked"; ?> ><label
                                                for="author-option9">Книги для батьків</label>
                                    </div>
                                    <div class="Option">
                                        <input type="checkbox" id="author-option10" class="checkbox"
                                               name="Section[]" onchange="this.form.submit()"
                                               value="Комікси"
                                            <?php if (!empty($_GET['Section']) and in_array("Комікси", $_GET['Section'])) echo "checked"; ?> ><label
                                                for="author-option10">Комікси</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="second_button">
            <div class="cont">
                <img src="./img/second.png" alt="s">
                <p>Сортування</p>
            </div>
        </div>
    </div>


    <section class="Catalog">
        <div class="desktop4">
            <div class="catalog_page">
                <h2 class="title_name">Книжки</h2>
                <form method="get">
                    <div class="PublishHouse GroupName">
                        <div class="publish_house_menu">
                            Видавництво
                            <div class="number_of_publish_house">843</div>
                        </div>
                        <div class="Options">
                            <div class="Option">
                                <input type="checkbox" id="option1" class="checkbox" name="PublishHouse[]"
                                       value="1DEA.me"
                                       onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("1DEA.me", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option1">1DEA.me</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option2" class="checkbox" name="PublishHouse[]"
                                       value="Book Chef"
                                       onchange="this.form.submit() <?php if (!empty($_GET['PublishHouse']) and in_array("Book Chef", $_GET['PublishHouse'])) echo "checked"; ?>"><label
                                        for="option2">Book Chef</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option3" class="checkbox" name="PublishHouse[]"
                                       value="Cambridge University Press"
                                       onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Cambridge University Press", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option3">Cambridge University Press</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option4" class="checkbox" name="PublishHouse[]"
                                       value="International"
                                       onchange="this.form.submit() " <?php if (!empty($_GET['PublishHouse']) and in_array("International", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option4">International</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option5" class="checkbox" name="PublishHouse[]"
                                       value="Vivat"
                                       onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Vivat", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option5">Vivat</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option6" class="checkbox" name="PublishHouse[]"
                                       value="А-ба-ба-га-ла-ма-га"
                                       onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("А-ба-ба-га-ла-ма-га", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option6">А-ба-ба-га-ла-ма-га</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option7" class="checkbox" name="PublishHouse[]"
                                       value="Видавництво Старого Лева"
                                       onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Видавництво Старого Лева", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option7">Видавництво Старого Лева</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option8" class="checkbox" name="PublishHouse[]"
                                       value="Клуб Сімейного Дозвілля"
                                       onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Клуб Сімейного Дозвілля", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option8">Клуб Сімейного Дозвілля</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option9" class="checkbox" name="PublishHouse[]"
                                       value="Наш Формат"
                                       onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Наш Формат", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option9">Наш Формат</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option10" class="checkbox" name="PublishHouse[]"
                                       value="Ранок"
                                       onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Ранок", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option10">Ранок</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option11" class="checkbox" name="PublishHouse[]"
                                       value="Фолио"
                                       onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Фолио", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option11">Фолио</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option12" class="checkbox" name="PublishHouse[]"
                                       value="National Geographic"
                                       onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("National Geographic<", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option12">National Geographic</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="option13" class="checkbox" name="PublishHouse[]"
                                       value="Orion"
                                       onchange="this.form.submit()" <?php if (!empty($_GET['PublishHouse']) and in_array("Orion", $_GET['PublishHouse'])) echo "checked"; ?>><label
                                        for="option13">Orion</label>
                            </div>
                        </div>
                    </div>
                    <div class="Price GroupName">
                        <div class="publish_house_menu">
                            Ціна
                        </div>
                        <?php
                        $lower_price = 0;
                        $upper_price = 0;
                        if (!empty($_GET['Price'])) {
                            $prices = array($_GET['Price']);
                            if (count($prices) > 2) {
                                $lower_price = intval(htmlspecialchars($_GET['Price'][0]));
                                $upper_price = intval(htmlspecialchars($_GET['Price'][1]));
                            }
                        }

                        ?>
                        <div class="PriceControl">
                            <div class="PriceControl">
                                <div class="Enter">
                                    <input aria-label="price-from" class="input-text from" id="price_input_from"
                                           name="Price[]" type="text" pattern="[0-9]*\.?[0-9]*"
                                           placeholder="Від" value="<?php echo $lower_price; ?>">
                                </div>
                                <div>
                                    <span class="control-label">-</span>
                                </div>
                                <div class="Enter">
                                    <input aria-label="price-to" class="input-text to" id="price_input_to"
                                           name="Price[]" type="text"
                                           pattern="[0-9]*\.?[0-9]*" placeholder="До" value="<?php echo $upper_price; ?>">
                                </div>
                                <div class="commit-button">
                                    <a href="#" class="button-link">
                                        <img src="./img/svg/Button.svg" alt="comit-button" class="button">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Language GroupName">
                        <div class="publish_house_menu">
                            Мова
                            <div class="number_of_publish_house">10</div>
                        </div>
                        <div class="Options">
                            <div class="Option">
                                <input  type="checkbox" id="lang-option1" class="checkbox"
                                        name="Language[]" onchange="this.form.submit()"
                                        value="Українська"
                                    <?php if (!empty($_GET['Language']) and in_array("Українська", $_GET['Language'])) echo "checked"; ?>><label
                                        for="lang-option1">Українська</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="lang-option2" class="checkbox"
                                       name="Language[]" onchange="this.form.submit()"
                                       value="Англійська"
                                    <?php if (!empty($_GET['Language']) and in_array("Англійська", $_GET['Language'])) echo "checked"; ?>><label
                                        for="lang-option2">Англійська</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="lang-option3" class="checkbox"
                                       name="Language[]" onchange="this.form.submit()"
                                       value="Німецька"
                                    <?php if (!empty($_GET['Language']) and in_array("Німецька", $_GET['Language'])) echo "checked"; ?>><label
                                        for="lang-option3">Німецька</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="lang-option4" class="checkbox"
                                       name="Language[]" onchange="this.form.submit()"
                                       value="Російська"
                                    <?php if (!empty($_GET['Language']) and in_array("Російська", $_GET['Language'])) echo "checked"; ?>><label
                                        for="lang-option4">Російська</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="lang-option5" class="checkbox"
                                       name="Language[]" onchange="this.form.submit()"
                                       value="Французька"
                                    <?php if (!empty($_GET['Language']) and in_array("Французька", $_GET['Language'])) echo "checked"; ?>><label
                                        for="lang-option5">Французька</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="lang-option6" class="checkbox"
                                       name="Language[]" onchange="this.form.submit()"
                                       value="Італійська"
                                    <?php if (!empty($_GET['Language']) and in_array("Італійська", $_GET['Language'])) echo "checked"; ?>><label
                                        for="lang-option6">Італійська</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="lang-option7" class="checkbox"
                                       name="Language[]" onchange="this.form.submit()"
                                       value="Іспанська"
                                    <?php if (!empty($_GET['Language']) and in_array("Іспанська", $_GET['Language'])) echo "checked"; ?>><label
                                        for="lang-option7">Іспанська</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="lang-option8" class="checkbox"
                                       name="Language[]" onchange="this.form.submit()"
                                       value="Португальська"
                                    <?php if (!empty($_GET['Language']) and in_array("Португальська", $_GET['Language'])) echo "checked"; ?>><label
                                        for="lang-option8">Португальська</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="lang-option9" class="checkbox"
                                       name="Language[]" onchange="this.form.submit()"
                                       value="Польська"
                                    <?php if (!empty($_GET['Language']) and in_array("Польська", $_GET['Language'])) echo "checked"; ?>><label
                                        for="lang-option9">Польська</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="lang-option10" class="checkbox"
                                       name="Language[]" onchange="this.form.submit()"
                                       value="Чеська"
                                    <?php if (!empty($_GET['Language']) and in_array("Чеська", $_GET['Language'])) echo "checked"; ?>><label
                                        for="lang-option10">Чеська</label>
                            </div>
                        </div>
                    </div>
                    <div class="Author GroupName">
                        <div class="publish_house_menu">
                            Розділи
                            <div class="number_of_publish_house">10</div>
                        </div>
                        <div class="Options">
                            <div class="Option">
                                <input type="checkbox" id="author-option1" class="checkbox"
                                       name="Section[]" onchange="this.form.submit()"
                                       value="Художня літаратура"
                                    <?php if (!empty($_GET['Section']) and in_array("Художня література", $_GET['Section'])) echo "checked"; ?> ><label
                                        for="author-option1">Художня література</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="author-option2" class="checkbox"
                                       name="Section[]" onchange="this.form.submit()"
                                       value="Словники та енциклопедії"
                                    <?php if (!empty($_GET['Section']) and in_array("Словники та енциклопедії", $_GET['Section'])) echo "checked"; ?> ><label
                                        for="author-option2">Словники та енциклопедії</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="author-option3" class="checkbox"
                                       name="Section[]" onchange="this.form.submit()"
                                       value="Підручники"
                                    <?php if (!empty($_GET['Section']) and in_array("Підручники", $_GET['Section'])) echo "checked"; ?> ><label
                                        for="author-option3">Підручники</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="author-option4" class="checkbox"
                                       name="Section[]" onchange="this.form.submit()"
                                       value="Наукова і технічна література"
                                    <?php if (!empty($_GET['Section']) and in_array("Наукова і технічна література", $_GET['Section'])) echo "checked"; ?> ><label
                                        for="author-option4">Наукова і технічна література</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="author-option5" class="checkbox"
                                       name="Section[]" onchange="this.form.submit()"
                                       value="Дім та хобі"
                                    <?php if (!empty($_GET['Section']) and in_array("Дім та хобі", $_GET['Section'])) echo "checked"; ?> ><label
                                        for="author-option5">Дім та хобі</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="author-option6" class="checkbox"
                                       name="Section[]" onchange="this.form.submit()"
                                       value="Подорожі та спорт"
                                    <?php if (!empty($_GET['Section']) and in_array("Подорожі та спорт", $_GET['Section'])) echo "checked"; ?>><label
                                        for="author-option6">Подорожі та спорт</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="author-option7" class="checkbox"
                                       name="Section[]" onchange="this.form.submit()"
                                       value="Бізнес література"
                                    <?php if (!empty($_GET['Section']) and in_array("Бізнес література", $_GET['Section'])) echo "checked"; ?> ><label
                                        for="author-option7">Бізнес література</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="author-option8" class="checkbox"
                                       name="Section[]" onchange="this.form.submit()"
                                       value="Релігія та езотерика"
                                    <?php if (!empty($_GET['Section']) and in_array("Релігія та езотерика", $_GET['Section'])) echo "checked"; ?> >
                                <label for="author-option8">Релігія та езотерика</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="author-option9" class="checkbox"
                                       name="Section[]" onchange="this.form.submit()"
                                       value="Книги для батьків"
                                    <?php if (!empty($_GET['Section']) and in_array("Книги для батьків", $_GET['Section'])) echo "checked"; ?> ><label
                                        for="author-option9">Книги для батьків</label>
                            </div>
                            <div class="Option">
                                <input type="checkbox" id="author-option10" class="checkbox"
                                       name="Section[]" onchange="this.form.submit()"
                                       value="Комікси"
                                    <?php if (!empty($_GET['Section']) and in_array("Комікси", $_GET['Section'])) echo "checked"; ?> ><label
                                        for="author-option10">Комікси</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="Page_section">
                <h1>Художня література</h1>
                <div class="row">
                    <?php
                    $raw_results = $conn->query("SELECT * FROM catalog3 ");
                    while($results = $raw_results->fetch_array(MYSQLI_ASSOC)){
                        $book_name = $results['book_name'];
                        $book_author = $results['book_author']; ?>
                        <div class="col">
                            <a  href='<?php echo "info_page.php?name=$book_name&author=$book_author"?>' >
                                <?php echo '<img src="data:image/png;base64,'
                                    . base64_encode($results['book_image']) . '" alt="Andjey - witcher"/>'; ?>
                            </a>
                            <div class='second_need'>

                        <span class="name"><?php echo $results['book_name'] ?><img src="./img/Vector.png"
                                                                                   alt="heart"></span>
                                <span class="author"><?php echo $results['book_author'] ?></span>
                                <div class='cartcatalog'>
                                    <span class="price"><?php echo $results['book_price']?>₴</span>
                                    <a href="#!" class="add_to_cart">
                                        <img src="./img/svg/Catalog_cart.svg" alt="cartcatalog">
                                    </a>
                                    <a href="#!" class="add_to_cart-mobile">
                                        <img src="./img/Cart.png" alt="cartcatalog">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>

        </div>
        <div class="Pages">
            <a href="#" id="Active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">...</a>
            <a href="#">Остання</a>
            <a href="#">Наступна</a>
        </div>
    </section>

    <section class="Block4">

        <div class="desktop2">
            <div class="logonaming">
                <img src="./img/svg/Logo.svg" alt="footer" class="logo">
                <p>Ділимось історіями і<br>книгами з усього світу.</p>
            </div>
            <div class="navigation">
                <h1>Навігація</h1>
                <div>
                    <a href="Landing.html" class="navi_links">Головна</a>
                </div>
                <div>
                    <a href="#!" class="navi_links">Про нас</a>
                </div>
                <div>
                    <a href="#!" class="navi_links">Співробітництво</a>
                </div>
            </div>
            <div class="navigation">
                <h1>Головний офіс</h1>
                <p>Україна, Рівне</p>
                <p>вул. Олени Пчілки, 25</p>
                <p>33010</p>
            </div>
            <div class="navigation">
                <h1>Контакти</h1>
                <p>help@hos.com</p>
                <p>+38(093)-194-22-11</p>
                <p>+38(096)-111-11-11</p>
                <p>+38(095)-153-22-11</p>
                <div class="icon">
                    <div>
                        <a href="https://twitter.com/slava_aysa" class="socialnetworks"><img src="img/svg/twitter 1.svg"
                                                                                             alt="socialnetworks"
                                                                                             class="networkicons"></a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/slava_aysa/" class="socialnetworks"><img
                                    src="img/svg/instagram 1.svg" alt="socialnetworks" class="networkicons"></a>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/channel/UCgyi-m7HUhOnxZrHmD3JMkg" class="socialnetworks"><img
                                    src="img/svg/youtube 1.svg" alt="socialnetworks" class="networkicons"></a>
                    </div>
                    <div>
                        <a href="https://uk-ua.facebook.com/DonaldTrump" class="socialnetworks"><img
                                    src="img/svg/facebook 1.svg" alt="socialnetworks" class="networkicons"></a>
                    </div>
                </div>
            </div>
            <div class="navigation">
                <h1>Підтримка</h1>
                <div>
                    <a href="#!" class="navi_links">Доставка</a>
                </div>
                <div>
                    <a href="#!" class="navi_links">Повернення</a>
                </div>
                <div>
                    <a href="#!" class="navi_links">Авторам</a>
                </div>
                <div>
                    <a href="#!" class="navi_links">Підтримка</a>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="down">
                <h1>© 2022 House of stories. All rights reserved.</h1>
            </div>
        </div>
    </section>
    <section class="Block4_mobile">

        <div class="mobile2">
            <div class="logonaming">
                <h1>House of stories</h1>
                <p>Ділимось історіями і книгами з усього світу.</p>
            </div>
            <div class="top_navigation">
                <div class="navigation">
                    <h1>Підтримка</h1>
                    <div>
                        <a href="#!" class="navi_links">Доставка</a>
                    </div>
                    <div>
                        <a href="#!" class="navi_links">Повернення</a>
                    </div>
                    <div>
                        <a href="#!" class="navi_links">Авторам</a>
                    </div>
                    <div>
                        <a href="#!" class="navi_links">Підтримка</a>
                    </div>
                </div>
                <div class="navigation">
                    <h1>Головний офіс</h1>
                    <p>Україна, Рівне</p>
                    <p>вул. Олени Пчілки, 25</p>
                    <p>33010</p>
                </div>
                <div class="navigation">
                    <h1>Контакти</h1>
                    <p>help@hos.com</p>
                    <p>+38(093)-194-22-11</p>
                    <p>+38(096)-111-11-11</p>
                    <p>+38(095)-153-22-11</p>
                </div>

                <div class="navigation">
                    <h1>Ми в соц. мережах</h1>
                    <div class="icon">
                        <div>
                            <a href="https://twitter.com/slava_aysa" class="socialnetworks"><img
                                        src="img/svg/twitter 1.svg" alt="socialnetworks" class="networkicons"></a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/slava_aysa/" class="socialnetworks"><img
                                        src="img/svg/instagram 1.svg" alt="socialnetworks" class="networkicons"></a>
                        </div>
                        <div>
                            <a href="https://www.youtube.com/channel/UCgyi-m7HUhOnxZrHmD3JMkg"
                               class="socialnetworks"><img src="img/svg/youtube 1.svg" alt="socialnetworks"
                                                           class="networkicons"></a>
                        </div>
                        <div>
                            <a href="https://uk-ua.facebook.com/DonaldTrump" class="socialnetworks"><img
                                        src="img/svg/facebook 1.svg" alt="socialnetworks" class="networkicons"></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="navigation">
                <div class="down">
                    <h1>© 2022 House of stories. All rights reserved.</h1>
                </div>
            </div>
        </div>

    </section>

</main>

</body>
