<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <?php $name = $_GET['name'];
    $name = htmlspecialchars($name);
    $author = htmlspecialchars($_GET['author']);
    echo "<title>$name</title>"; ?>

    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
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
    <div class="top_menu">
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
            <a href="#!" class="menu_link"><img src="img/svg/user.svg" alt="menu_images" class="menu_images"></a>
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
            <a href="#!">Моя сторінка</a>
            <a href="#!">Список бажаного</a>
            <a href="#!">Корзина</a>
        </div>
        <!-- <div class="menu_links">
            <a href="#!" class="menu_link"><img src="img/svg/wish list.svg" alt="menu_images" class="menu_images"></a>
            <a href="#!" class="menu_link"><img src="img/svg/Cart3.svg" alt="menu_images" class="menu_images"></a>
            <a href="#!" class="menu_link"><img src="img/svg/user.svg" alt="menu_images" class="menu_images"></a>
        </div> -->
    </div>
    <div class="top_menu_mobile2">
        <a href="Infopage.html">Все про товар</a>
        <a href="#!">Характеристики</a>
        <a href="#!">Відгуки</a>
    </div>
</header>


<main>
    <section class="Infopage1">
        <div class="desktop3">
            <h1>
                <?php echo $name ?> - <?php echo $author ?>
            </h1>
            <div class="Categories">
                <a href="Infopage.html" class="Main Category">
                    Усе про книгу
                </a>
                <a href="#!" class="Characteristics Category">
                    Характеристики
                </a>
                <a href="#!" class="Reviews Category">
                    Рецензії
                </a>
                <a href="#!" class="AboutAuthor Category">
                    Про автора
                </a>
                <a href="#!" class="OtherVersions Category">
                    Інші видання
                </a>
            </div>
            <div class="content">
                <?php
                $raw_results = $conn->query("SELECT * FROM catalog3
                                                        WHERE (`book_name` LIKE '%" . $name . "%')
                                                        AND (`book_author` LIKE '%" . $author . "%') ");
                $results = $raw_results->fetch_array(MYSQLI_ASSOC);
                ?>
                <div class="bookpreview">
                    <?php echo '<img src="data:image/jpeg;base64,'
                        . base64_encode($results['book_image']) . '" alt= "BookPreview" class= "book"/>';?>
                </div>
                <div class="info">
                    <div class="buy_menu">
                        <div class="Price Tab">
                            <?php echo $results['book_price'] . "₴" ?>
                        </div>
                        <div class="Cart Tab">
                            <button class="cart_button">
                                <img src="./img/svg/Cart1.svg" alt="cartmenu" class="cartmenu">
                            </button>
                        </div>
                        <div class="Wishlist Tab">
                            <button class="wishlist_button">
                                <img src="./img/svg/Vector.svg" alt="wishlistmenu" class="wishlistmenu">
                            </button>
                        </div>
                        <div class="Availability Tab">
                            <?php
                            if ($results['book_quantity'] > 0) {
                                echo "Є в наявності";
                            } else {
                                echo "Зараз відсутня";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="description">
                        <h2>
                            Опис <?php echo $results['book_name']; ?>
                        </h2>
                        <?php echo $results['book_annotation']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Infopage1_mobile">
        <div class="mobile3">
            <div class="mobile3_content">
                <div class="mobile3_bookpreview">
                    <?php echo '<img src="data:image/jpeg;base64,'
                        . base64_encode($results['book_image']) . '" alt= "BookPreview" class= "mobile_book"/>';?>
                    <div class="mobile3_text_book">
                        <h1><?php echo $name ?></h1>
                        <p><?php echo $author ?></p>
                    </div>
                    <div class="mobile_buy">
                        <div class="mobile_accessibility">
                            <p>
                                <?php
                                if ($results['book_quantity'] > 0) {
                                    echo "Є в наявності";
                                } else {
                                    echo "Зараз відсутня";
                                }
                                ?>
                            </p>
                            <h1><?php echo $results['book_price'] . "₴" ?></h1>
                        </div>
                        <button class="cart_button">
                            <img src="./img/svg/Cart1.svg" alt="cartmenu" class="cartmenu">
                        </button>
                    </div>
                    <div class="mobile_description">
                        <h1>Опис книги:</h1>
                        <div class="mobile_full_description">
                            <p>
                                <?php echo $results['book_annotation']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="more_content">
                        <a href="Infopage.html" class="Author_books Other">
                            Інші книги автора
                        </a>
                        <a href="#!" class="Book_houses Other">
                            Інші видання
                        </a>
                    </div>

                    <div class="characteristics_mobile">
                        <div class="first">
                            <div class="first_column">
                                Автор
                            </div>
                            <div class="second_column">
                                <?php echo $results['book_author']?>
                            </div>
                        </div>

                        <div class="first">
                            <div class="first_column">
                                Видавництво
                            </div>
                            <div class="second_column">
                                <?php echo $results['publishing_house']?>
                            </div>
                        </div>

                        <?php
                        if (strlen($results['book_series']) > 0) {
                            $book_series = $results['book_series'];
                            echo "<div class='first'>
                                    <div class='first_column'>
                                        Серія книг
                                    </div>
                                    <div class='second_column'>
                                        $book_series
                                    </div>
                                </div>";
                        }
                        ?>

                        <div class="first">
                            <div class="first_column">
                                Мова
                            </div>
                            <div class="second_column">
                                <?php echo $results['book_language']?>
                            </div>
                        </div>

                        <div class="first">
                            <div class="first_column">
                                Рік видання
                            </div>
                            <div class="second_column">
                                <?php echo $results['publish_year']?>
                            </div>
                        </div>

                        <?php
                        if (strlen($results['book_translator']) > 0) {
                            $book_translator = $results['book_translator'];
                            echo "<div class='first'>
                                    <div class='first_column'>
                                        Перекладач
                                    </div>
                                    <div class='second_column'>
                                        $book_translator
                                    </div>
                                </div>";
                        }
                        ?>


                        <div class="first">
                            <div class="first_column">
                                Кількість сторінок
                            </div>
                            <div class="second_column">
                                <?php echo $results['book_pages']?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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
                        <a href="https://twitter.com/slava_aysa" class="socialnetworks"><img src="img/svg/twitter 1.svg" alt="socialnetworks" class="networkicons"></a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/slava_aysa/" class="socialnetworks"><img src="img/svg/instagram 1.svg" alt="socialnetworks" class="networkicons"></a>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/channel/UCgyi-m7HUhOnxZrHmD3JMkg" class="socialnetworks"><img src="img/svg/youtube 1.svg" alt="socialnetworks" class="networkicons"></a>
                    </div>
                    <div>
                        <a href="https://uk-ua.facebook.com/DonaldTrump" class="socialnetworks"><img src="img/svg/facebook 1.svg" alt="socialnetworks" class="networkicons"></a>
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
                            <a href="https://twitter.com/slava_aysa" class="socialnetworks"><img src="img/svg/twitter 1.svg" alt="socialnetworks" class="networkicons"></a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/slava_aysa/" class="socialnetworks"><img src="img/svg/instagram 1.svg" alt="socialnetworks" class="networkicons"></a>
                        </div>
                        <div>
                            <a href="https://www.youtube.com/channel/UCgyi-m7HUhOnxZrHmD3JMkg" class="socialnetworks"><img src="img/svg/youtube 1.svg" alt="socialnetworks" class="networkicons"></a>
                        </div>
                        <div>
                            <a href="https://uk-ua.facebook.com/DonaldTrump" class="socialnetworks"><img src="img/svg/facebook 1.svg" alt="socialnetworks" class="networkicons"></a>
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