<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Landing</title>
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.css">
</head>

<body>

<header class="header">
    <div class="mainmenu">

        <div class="header_logo">
            <img src="./img/svg/Logo.svg" alt="Landing" class="header_logo-pic">
        </div>

        <nav class="menu">
            <ul class="header_list">
                <li class="header_item">
                    <a href="Catalog.php" class="header_link">Каталог</a>
                </li>
                <li class="header_item">
                    <a href="#!" class="header_link">Акції</a>
                </li>
                <li class="header_item">
                    <a href="#!" class="header_link">Співробітництво</a>
                </li>
                <li class="header_item">
                    <a href="#!" class="header_link">Доставка</a>
                </li>
                <li class="header_item">
                    <a href="#!" class="header_link">Контакти</a>
                </li>
            </ul>
        </nav>

        <a href="#!" class="cart"><img src="./img/svg/Cart.svg" alt="cart" class="header_cart-pic"></a>

    </div>

</header>



<main class="main">
    <section class="intro">
        <div class="SearchOnSite">
            <form action="search.php" method="GET">
                <div class="searchBar">
                    <div class="searchButton">
                        <button type="submit"><i class="fa fa-search"></i> <img src="./img/png/loupe.png" alt="searchbar" class="search_loupe"> </button>
                    </div>
                    <div class="search">
                        <input type="search" id="site-search" placeholder="Введіть назву книги..."
                               name="book">
                    </div>
                </div>
            </form>
        </div>

        <a href="#!" class="chat"><img src="./img/svg/Chat.svg" alt="chat"  class="header_chat-pic"></a>

        <div class="HeaderText1">
            В нашій книгарні ви можете знайти літературу з усього світу, як мовою оригіналу так і в перекладі.
        </div>

        <div class="HeaderText2">
            «Книги – не мертві речі, а істоти, що містять у собі насіння життя. В них – чистісінька енергія і екстракт того живого розуму, що їх створив»
            <br>Д.Мільтон
        </div>


    </section>
    <section class="Block1">
        <div class="desktop">
            <h1 class="item-h1">Читайте книжки з усього світу за <br>допомогою “House of stories”</h1>
            <div class="row align-items-start">
                <div class="col-5">
                    Як казала Опра Вінфрі:  “Книги стали моєю
                    перепусткою в особисту свободу”,- саме
                    тому мета нашої книгарні - дати кожній
                    людині свободу вибору - необмежений
                    нічим список літератури.
                </div>
                <div class="col-5">
                    <ul>
                        <li class="styleblock2">Книги як відомих, так і нових,<br>маловідомих авторів</li>
                        <li class="styleblock2">Співпраця з українськими та<br>іноземними видавництвами</li>
                        <li class="styleblock2">Велика кількість професійної<br>літератури</li>
                        <li class="styleblock2">Проведення тематичних заходів з<br>конкурсами та акціями</li>
                        <li class="styleblock2">Доступні кожному ціни</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="Block1_mobile">
        <div class="mobile">
            <h1 class="item-h1">Читайте книжки з усього світу за допомогою “House of stories”</h1>
            <div class="mobile_row">
                В нашій книгарні ви можете знайти літературу з усього
                світу, як мовою оригіналу
                так і в перекладі адже, як казала Опра Вінфрі:  “Книги стали моєю перепусткою в особисту свободу”
            </div>
        </div>
    </section>


    <section class="mobile_text">
        <div class="text_in_div">
            <p>Ми працюємо з багатьма популярними видавництвами</p>
        </div>

        <div class="images_block">
            <div class="row">
                <div class="col">
                    <div class="booksalers">
                        <img src="./img/Frame 10.png" alt="first">
                        <h1>Видавництво “Клуб сімейного дозвілля”</h1></div>
                </div>

                <div class="col">
                    <div class="booksalers">
                        <img src="./img/Frame 11.png" alt="first">
                        <h1>Видавництво “А-БА-БА-ГА-ЛА-МА-ГА”</h1>
                    </div>

                </div>

                <div class="col">
                    <div class="booksalers">
                        <img src="./img/Frame 12.png" alt="first">
                        <h1>Видавництво “Pearson”</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="text_in_div_2">
            <p>Доступна ціна для кожного, а також акції кожен тиждень</p>
        </div>


        <div class="images_block2">
            <div class="row">
                <div class="col">
                    <img src="./img/1.png" alt="first">
                    <div class="mobile_sales">
                        <h1>Відьмак. Хрещення вогнем.</h1>
                        <h2>Анджей Сапковський</h2>
                        <div class="sales_price_before">190 ₴</div>
                        <div class="sales_price_after">140 ₴</div> </div>

                </div>

                <div class="col">
                    <img src="./img/2.png" alt="first">
                    <div class="mobile_sales">
                        <h1>Стрілець. Темна вежа I</h1>
                        <h2>Стівен Кінг</h2>
                        <div class="sales_price_before">180 ₴</div>
                        <div class="sales_price_after">149 ₴</div> </div>

                </div>

                <div class="col">
                    <img src="./img/3.png" alt="first">
                    <div class="mobile_author_sale">
                        <h1>Тиждень Стівена Кінга</h1>
                        Знижки на всі книжки з нагоди дня народження письменника
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="Block2">
        <div class="desktop">
            <h1>Пізнавайте світ книжок</h1>
            <div class="block2row">
                <p>
                    “House of stories” надає можливість<br>створювати власну бібліотеку. Наша<br>книгарня вважає,
                    що оцінити людину<br>можна за тим, які книги вона читає,<br>адже кожна книга розкриває людину<br>
                    різних сторін. В межах своєї книгарні ми<br>провели опитування, який відпочинок<br>люди вважають
                    найкращим, переважна<br>кількість відповіла, що вечір з книжкою і<br>горнятком ароматної кави не<br>
                    зрівняється ні з чим.
                </p>
                <div class="library">
                    <p>
                        Натисніть кнопку, щоб створити власну<br>електронну бібліотеку.
                    </p>
                    <button type="submit" class="gotocatalog"><a href="#!" class="cataloglink">Відкрити каталог</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="Block2_mobile">
        <div class="mobile">
            <h1>Пізнавайте світ книжок</h1>
            <div class="mobile_row2">
                <p>
                    “House of stories” надає можливість створювати власну бібліотеку. В межах своєї книгарні ми провели
                    опитування, який відпочинок люди вважають найкращим, переважна кількість відповіла, що вечір з
                    книжкою і горнятком ароматної кави не зрівняється ні з чим.
                </p>
                <button type="submit" class="gotocatalog"><a href="#!" class="cataloglink">Відкрити каталог</a></button>
            </div>
        </div>
    </section>

    <section class="Block3">
        <div class="desktop">
            <h1>Будьте сучасними</h1>
            <div class="block3row">
                <p>
                    Завдяки технологіям відкрилась неймовірна кількість можливостей для людей. Зараз вам не треба йти в книгарню і
                    купувати книжки, адже все це можна зробити в Інтернеті. Ви можете замовити книжку з доставкою додому, або ж
                    просто придбати електронну книгу. “House of stories” вам пропонує широкий вибір як друкованих, так і електронних
                    книжок. Так як ми підтримуємо позицію Опри Вафрі, ми вважаємо що книжки - перепустка в особисту свободу, а тому
                    читач сам може вирішувати, яку літературу йому читати, та в якому форматі вона має бути. Наш каталог постійно
                    оновлюється, а тому читач завжди знайде те, що хоче, зазвичай є дві варіації книги електронна та друкована, проте
                    зараз в багатьох книгах з’являються і аудіокниги, в профейсійній озвучці, що дає змогу поринути в книгу навіть під
                    час тренувань або прогулянок.
                </p>
            </div>
            <div class="bookbuttons">
                <button type="submit" class="top"><a href="#!" class="links">Найпопулярніші друковані книги</a></button>
                <button type="submit" class="top"><a href="#!" class="links">Найпопулярніші електронні книги</a></button>
                <button type="submit" class="top"><a href="#!" class="links">Найпопулярніші аудіокниги</a></button>
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
</html>