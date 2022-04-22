<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="css/catalog.css"> -->
    <link rel="stylesheet" href="css/infocard.css">
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
                            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
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
    <section class="auth" id="auth">
        <div class="auth__body">
            <div class="auth__blocks">
                <div class="auth__block">
                    <span class="close">&times;</span>
                    <h2>Войти</h2>
                </div>
                <form action="auth.php" method="post">
                    <div class="auth__block auth__info">
                        <input type="text" name="login" placeholder="Введите Логин" required>
                        <input type="password" name="password" placeholder="Введите пароль" required>
                        <div class="auth__content">
                            <a href="#reg" class="registration">Регистрация</a>
                            <a href="#forgot" class="forgot">Забыли пароль?</a>
                        </div>
                    </div>
                    <div class="auth__block">
                        <button class="auth__button" type="submit">
                            Войти
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="reg" id="reg">
        <div class="reg__body">
            <div class="reg__blocks">
                <div class="reg__block">
                    <span class="close">&times;</span>
                    <h2>Регистрация</h2>
                </div>
                <form action="check.php" method="post">
                    <div class="reg__block reg__info">
                        <input type="text" name="login" placeholder="Придумайте Логин" required>
                        <input type="text" name="fullname" placeholder="Введите ФИО" required>
                        <input type="text" name="passport" placeholder="Введите Номер и Серию паспорта" required>
                        <input type="email" name="email" placeholder="Введите email" required>
                        <input type="password" name="password" placeholder="Введите пароль" required>
                        <div class="reg__content">
                            <span>Есть аккаунт?</span><a href="#" class="authbtn">Войти</a>
                        </div>
                    </div>
                    <div class="reg__block">
                        <button class="reg__button" type="submit">
                            Регистрация
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
	<section class="info__card">
		<div class="infocard__container cnt">
            <div class="infocard__header page__headers">
                <h2>Диван трёхместный Atelier 2</h2>
                <div class="global__hr"><hr></div>
            </div>
            <div class="infocard__blocks">
                <div class="infocard__block"><img src="images/D1.png" alt="">    </div>
                <div class="infocard__block">
                    <p class="infocard__cost">250.000 рублей</p><br>
                    <p class="infocard__text">Производитель: <span class="right">Kreind</span></p>
                    
                    <p class="infocard__text">Артикул: <span class="right">D413-20-02</span></p>
                    <p class="infocard__text">Коллекция: <span class="right">Atelier</span></p>
                    <p class="infocard__text">Срок поставки: <span class="right">от 35 дней</span></p>
                    <p class="infocard__text">ШxВxГ (мм): <span class="right">2220 x 1090 x 940</span></p>
                    <p class="infocard__text">Цвет: <span class="right">Melania 02</span></p>
                    <p class="infocard__text">Материал: <span class="right">Шенилл, МДФ, фанера, массив берёзы</span></p>
                    <p class="infocard__text">Обивка мягкой части: <span class="right">Шенилл</span></p>
                    <p class="infocard__text">Стиль: <span class="right">Классический</span></p>
                    <p class="infocard__text">Форма поставки: <span class="right">в собранном виде</span></p>
                    <p class="infocard__text">Количество упаковок: <span class="right">1</span></p>
                    <p class="infocard__text">Объем: <span class="right">2.275 м3</span></p>
                </div>
            </div>
            <div class="infocard__button">
                <button class="other__btn cardinfobtn">Добавить в корзину</button>
            </div>
        </div>
	</section>
    <footer class="footer">
		<div class="footer__container cnt">
			<div class="footer__blocks">
				<div class="footer__block">
					<img src="images/logo.png" alt="">
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
	<script src="js/catalog.js"></script>
</body>
</html>