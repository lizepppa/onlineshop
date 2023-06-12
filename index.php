<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.css">
    <title>Personal page</title>
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
<div class="personal_page">
<body>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo '<br>' . $_SESSION['username'] . '<br>'. $_SESSION['usersurname']; ?></strong></p>
            <p><a href="Landing.php" style="border:1px; border-color:#171717; color: #5C5C5C;">Перейти на головну сторінку</a></p>
            <p> <a href="Landing.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
    </div>

</body>
</div>
</html>