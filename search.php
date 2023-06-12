<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.css">
    <title>search</title>
</head>


<header class="header2">
    <div class="top_menu2">
        <img src="./img/svg/Logo_menu.svg" alt="menu" class="menu_logo-pic">
        <img src="./img/svg/mobile_logo.svg" alt="menu" class="menu_logo-pic_mobile">
        <form>
        <div class="SearchMenu">
                <div class="searchBarmenu">
                    <div class="search">
                        <input type="search" id="site-search" name="book">
                    </div>
                    <div class="searchButtonmenu">
                        <button type="submit"><i class="fa fa-search"></i>Знайти</button>
                    </div>
                </div>
        </div>
        </form>
        <div class="menu_links">
            <a href="#!" class="menu_link"><img src="img/svg/wish list.svg" alt="menu_images" class="menu_images"></a>
            <a href="#!" class="menu_link"><img src="img/svg/Cart3.svg" alt="menu_images" class="menu_images"></a>
            <a href="registration.php" class="menu_link"><img src="img/svg/user.svg" alt="menu_images" class="menu_images"></a>
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
<body>
<div class="search_result">
    <div class="Page_section">
        <h1>Результат пошуку</h1>
        <div class="row">


            <?php
            $query = $_GET['book'];
            $min_length = 3;
            $index = 0;
            if (strlen($query) >= $min_length) {
                $query = htmlspecialchars($query);
                $query = $conn->real_escape_string($query);
                $raw_results = $conn->query("SELECT * FROM catalog3
                            WHERE (`book_name` LIKE '%" . $query . "%') OR (`book_author` LIKE '%" . $query . "%') ");
                if ($raw_results->num_rows > 0) {
                    while ($results = $raw_results->fetch_array(MYSQLI_ASSOC) and $index < 15) {
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
                } else {
                    echo "Немає результатів пошуку за вашим запитом";
                }
            } else {
                echo "Мінімальна довжина: " . $min_length;
            } ?>


        </div>
    </div>
</div>
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

</body>
