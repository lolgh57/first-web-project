<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/catalog.css">
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
    <section class="catalog">
        <div class="catalog__container cnt">
            <div class="catalog__header page__headers">
                <h2>Каталог</h2>
                <div class="global__hr"><hr></div>
            </div>
            <div class="category__tabs">
                <div class="category__tab ct">
                    <div class="w3-bar w3-black tab__buttons">
                        <button class="w3-bar-item w3-button" onclick="openCity('t1')">Диваны</button>
                        <button class="w3-bar-item w3-button" onclick="openCity('t2')">Стеллажи</button>
                        <button class="w3-bar-item w3-button" onclick="openCity('t3')">Стулья</button>
                        <button class="w3-bar-item w3-button" onclick="openCity('t4')">Столы</button>
                        <button class="w3-bar-item w3-button" onclick="openCity('t5')">Комоды</button>
                    </div>
                    <div id="t1" class="city">
                        <div class="category__cards">
							<a href="infocard.php" class="infobtn">
								<div class="category__card">
									<p class="card__name">Диван трёхместный Atelier 2</p>
									<img src="images/D1.png" alt="">
									<p class="card__cost">250.000 рублей</p>
									<button class="other__btn">В корзину</button>
								</div>
							</a>
							<div class="category__card">
								<p class="card__name">Диван двуместный Atelier 2</p>
								<img src="images/D2.png" alt="">
								<p class="card__cost">243.000 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Диван двуместный Atelier</p>
								<img src="images/D3.png" alt="">
								<p class="card__cost">325.000 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Диван трёхместный Atelier</p>
								<img src="images/D4.png" alt="">
								<p class="card__cost">337.800 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Диван канапе Canapes</p>
								<img src="images/D5.png" alt="">
								<p class="card__cost">46.300 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Диван Шелли Canapes</p>
								<img src="images/D6.png" alt="">
								<p class="card__cost">50.000 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Софа Френсис Canapes</p>
								<img src="images/D7.png" alt="">
								<p class="card__cost">87.500 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Софа Френсис M14-WG-0388</p>
								<img src="images/D8.png" alt="">
								<p class="card__cost">91.900 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Диван Diamante</p>
								<img src="images/D9.png" alt="">
								<p class="card__cost">121.300 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Диван угловой Diamante</p>
								<img src="images/D10.png" alt="">
								<p class="card__cost">213.800 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
						</div>
                    </div>
                    <div id="t2" class="city" style="display:none">
						<div class="category__cards">
							<div class="category__card">
								<p class="card__name">Стеллаж узкий Флекс</p>
								<img src="images/CT1.png" alt="">
								<p class="card__cost">24.480 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Стеллаж широкий Флекс</p>
								<img src="images/CT2.png" alt="">
								<p class="card__cost">29.223 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Стеллаж Бостон 1000</p>
								<img src="images/CT3.png" alt="">
								<p class="card__cost">29.241 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
						</div>
                    </div>
                    <div id="t3" class="city" style="display:none">
						<div class="category__cards">
							<div class="category__card">
								<p class="card__name">Стул C02X Canapes</p>
								<img src="images/A1.png" alt="">
								<p class="card__cost">21.900 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Стул C02VT Canapes</p>
								<img src="images/A2.png" alt="">
								<p class="card__cost">22.500 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Стул C02V Canapes</p>
								<img src="images/A3.png" alt="">
								<p class="card__cost">21.200 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
						</div>
                    </div>
                    <div id="t4" class="city" style="display:none">
						<div class="category__cards">
							<div class="category__card">
								<p class="card__name">Обеденный стол Полонез 41</p>
								<img src="images/B1.png" alt="">
								<p class="card__cost">115.416 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Обеденный стол Полонез 41/01</p>
								<img src="images/B2.png" alt="">
								<p class="card__cost">101.025 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Стол обеденный Азалия 1000х700</p>
								<img src="images/B3.png" alt="">
								<p class="card__cost">25.700 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
						</div>
                    </div>
                    <div id="t5" class="city" style="display:none">
						<div class="category__cards">
							<div class="category__card">
								<p class="card__name">Комод Лика</p>
								<img src="images/C1.png" alt="">
								<p class="card__cost">52.434 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Комод Флекс</p>
								<img src="images/C2.png" alt="">
								<p class="card__cost">29.461 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
							<div class="category__card">
								<p class="card__name">Комод Бостон 4+2</p>
								<img src="images/C3.png" alt="">
								<p class="card__cost">49.491 рублей</p>
								<button class="other__btn">В корзину</button>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
		<div class="footer__container cnt">
			<div class="footer__blocks">
				<div class="footer__block">
				<a href="index.php"><img src="images/logo.png" alt="logo"></a>
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