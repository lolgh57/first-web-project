<?php 
include "connect.php"; 
include "vars.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/lk.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monda&family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <title>MineHybe</title>
</head>
<body>
    <header class="header" id="top">
		<div class="headers">
			<div class="top__header">
				<div class="header__container cnt">
					<div class="topheader__blocks">
						<div class="soc__icons">
							<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-vk" aria-hidden="true"></i></a>
						</div>
						<div class="telefon">
							<span>Позвоните нам: <a href="tel: +79004553234">+7 (900) 455 32-34</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="low__header">
				<div class="header__container cnt">
					<div class="lowheader__blocks">
						<div class="lowheader__block">
                            <a href="index.php"><img src="images/logo.png" alt="logo"></a>
						</div>
						<div class="lowheader__block">
							<nav>
								<ul class="topmenu">
									<li class="inherit">
										<div class="hover__link">
										<a href="catalog.php">Каталог<i class="fa fa-angle-down"></i></a>
										</div>
										<ul class="submenu__ct submenu">
											<a href="#"><li class="subli">Стеллажи</li></a>
											<a href="#"><li class="subli">Диваны</li></a>
											<a href="#"><li class="subli">Стулья</li></a>
											<a href="#"><li class="subli">Столы</li></a>
											<a href="#"><li class="subli">Комоды</li></a>
											
										</ul>
									</li>
								</ul>

								<ul>
									<li class="hover__link"><a href="about.php">О компании</a></li>
								</ul>
								
								<ul class="topmenu">
                                    <?php if($_COOKIE['user'] == ''): ?>
										<li class="hover__link"><a href="#auth" class="authbtn">Войти</a></li>
									<?php else: ?>
										<li class="inherit"><div class="hover__link"><a href="lk.php?id_user=<?=$_COOKIE['id']?>">Личный кабинет<i class="fa fa-angle-down"></i></a></div>
                                            <ul class="submenu__lk submenu">
												<a href="exit.php"><li class="subli">Выйти</li></a>
                                            </ul>
                                        </li>
									<?php endif; ?> 
                                </ul>
							</nav>
						</div>
						<div class="lowheader__block">
							<div class="lowheader__user">
							<?php if($_COOKIE['user'] == ''): ?>
							<?php else: ?>
								<a href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
							<?php endif; ?> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    <section class="lk">
        <div class="lk__container cnt">
            <div class="lk__blocks">
                <div class="lk__header headers">
                    <h2>Личный кабинет</h2>
                    <div class="page__hr"><hr></div>
                </div>
                <div class="lk__block">
                    <div class="lk__content">
                        <div class="content__block">
                            <div class="content__header">Мой кошелек:</div>
                            <div class="content__text">28.890 рублей</div>
                        </div>
                        <div class="content__button"><a href="#">Пополнить</a></div>
                    </div>
                    <div class="lk__content">
                        <div class="content__block">
                            <div class="content__header"><span><?=$_COOKIE['user']?></span></div>
                            <div class="content__text">
                                <p>Почта: <?=$_COOKIE['email']?></p>
                                <p>Телефон: <?=$_COOKIE['tel']?></p>
                            </div>
                        </div>
                        <div class="content__button"><a href="#">Изменить</a></div>
                    </div>
                    <div class="lk__content">
                        <div class="content__block">
                            <div class="content__header">Корзина:</div>
                            <div class="content__text">2 товара</div>
                        </div>
                        <div class="content__button"><a href="cart.php">Посмотреть</a></div>
                    </div>
                </div>
                <div class="lk__block">
                    <div class="lk__content">
                        <div class="content__block">
                            <div class="content__header">Доставки:</div>
                            <div class="content__text">1 товар</div>
                        </div>
                        <div class="content__button"><a href="#">Посмотреть</a></div>
                    </div>
                    <div class="lk__content pay">
                        <div class="content__block">
                            <div class="content__header">Способы оплаты:</div>
                            <div class="content__text payment">
                                <div>2200 **** **** **** 10/23 <img src="	https://mironline.ru/local/templates/main/img/new/new-logo.png" width="84" height="25" alt=""></div>
                                <div>2200 **** **** **** 10/23 <img src="	https://mironline.ru/local/templates/main/img/new/new-logo.png" width="84" height="25" alt=""></div>
                            </div>
                        </div>
                        <div class="content__button"><a href="#" class="lk__button">Добавить</a></div>
                    </div>
                    <div class="lk__content">
                        <div class="content__block">
                            <div class="content__header">История покупок:</div>
                            <div class="content__text">Шкаф-купе “Навара-2”</div>
                        </div>
                        <div class="content__button"><a href="#">Посмотреть полностью</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__container cnt">
            <div class="footer__blocks">
                <div class="footer__block">
                    <a href="index.php"><img src="images/logo.png" alt=""></a>
                </div>
                <div class="footer__block">
                    <div class="telefon">
                        <span>Позвоните нам: <a href="tel: +79004553234">+7 (900) 455 32-34</a></span>
                    </div>
                    <div class="soc__icons">
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-vk" aria-hidden="true"></i></a>
                    </div>
                    <div class="copy">
                        <span>© Все права защищены. MineHybe</span>
                    </div>
                </div>
                <div class="footer__block">
                    <a href="#top">
                        <div class="top">
                            <div class="arrow"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://use.fontawesome.com/df4c269744.js"></script>
    <script src="js/main.js"></script>
</body>
</html>