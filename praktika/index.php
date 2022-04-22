<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
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
						<img src="images/logo.png" alt="logo">
						</div>
						<div class="lowheader__block">
							<nav>
								<ul class="topmenu">
									<li class="inherit">
										<div class="hover__link">
										<a href="catalog.php">Каталог<i class="fa fa-angle-down"></i></a>
										</div>
										<ul class="submenu__ct submenu">
											<a href="catalog.php" onclick="openCity('t1')"><li class="subli">Стеллажи</li></a>
											<a href="catalog.php" onclick="openCity('t2')"><li class="subli">Диваны</li></a>
											<a href="catalog.php"><li class="subli">Стулья</li></a>
											<a href="catalog.php"><li class="subli">Столы</li></a>
											<a href="catalog.php"><li class="subli">Комоды</li></a>
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
	<section class="main">
		<div class="main__container cnt">
			<div class="main__block">
				<div class="main__header">
					<h1>MineHybe</h1>
				</div>
				<div class="main__hr">
					<hr>
				</div>
				<div class="main__desc">
					<span>Комфорт и уют в мебельном стиле</span>
				</div>
			</div>
		</div>
	</section>
	<section class="stock">
		<div class="stock__container cnt">
			<div class="stock__blocks">
				<div class="stock__block">
					<div class="stock__content">
						<div class="stock__header">
							<h2>Акция</h2>
							<div class="global__hr"><hr></div>
						</div>
						<div class="firststock__image">
							<img src="images/akcia.png" alt="" class="stock__img">
						</div>
					</div>
					<div class="stock__text">
						<p>При заказе любого изделия, вы можете<br>
						получить сертификат от 5.000 тысяч<br>
						рублей.
						</p>
						<br>
						<p>При приглашении друга, мы подарим 10%<br>
						от его заказа!</p>
					</div>
					<div class="stock__button">
						<!-- <div class="secondstock__image">
							<img src="images/percent.png" alt="percent">
						</div> -->
						<button class="btn">Заказать сейчас и<br>получить сертификат</button>
					</div>
				</div>
				<div class="stock__block"><img src="images/img1.png" alt=""></div>
			</div>
		</div>
	</section>
	<section class="advantages">
		<div class="advantages__container cnt">
			<div class="advantages__header headers">
				<h2>Преимущство за нами</h2>
				<div class="global__hr"><hr></div>
			</div>
			<div class="advantages__blocks">
				<div class="advantages__block"><img src="images/cost.png" alt=""><p>Выгодная стоимость</p></div>
				<div class="advantages__block"><img src="images/time.png" alt=""><p>Экономия времени</p></div>
				<div class="advantages__block"><img src="images/verify.png" alt=""><p>Качество мебели</p></div>
			</div>
		</div>
	</section>
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
	<section class="command">
		<div class="command__container cnt">
			<div class="command__blocks">
				<div class="command__header headers">
					<h2>Наша команда</h2>
					<div class="global__hr"><hr></div>
				</div>
				<div class="command__content">
					<div class="command__block">
						<img src="images/command.png" class="command__img" alt="">
						<div class="command__text">3D-Дизайнер мебели <br> Громыко Александр Николаевич</div>
					</div>
					<div class="command__block">
						<img src="images/command1.png" class="command__img" alt="">
						<div class="command__text">Генеральный директор компании <br> Грязнов Владимир Александрович</div>
					</div>
					<div class="command__block">
						<img src="images/command2.png" class="command__img" alt="">
						<div class="command__text">Рекламодатель <br> Соколова Анна Андреевна</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="portfolio">
		<div class="portfolio__container cnt">
			<div class="portfolio__blocks">
				<div class="portfolio__header headers">
					<h2>Портфолио</h2>
					<div class="global__hr"><hr></div>
				</div>
				<div class="portfolio__content">
					<div class="slider">
					    <div class="item">
					        <img src="images/slide1.png" alt="Первый слайд">
<!--					        <div class="slideText">Заголовок слайда 1</div>-->
					    </div>
					    <div class="item">
					        <img src="images/S2.jpeg" alt="Второй слайд">
<!--					        <div class="slideText">Заголовок слайда 2</div>-->
					    </div>
					    <div class="item">
					        <img src="images/S3.jpg" alt="Третий слайд">
<!--					        <div class="slideText">Заголовок слайда 3</div>-->
					    </div>
					    <div class="item">
					        <img src="images/S4.jpg" alt="Четвертый слайд">
<!--					        <div class="slideText">Заголовок слайда 4</div>-->
					    </div>
					    <div class="item">
					        <img src="images/S5.jpg" alt="Пятый слайд">
<!--					        <div class="slideText">Заголовок слайда 5</div>-->
					    </div>
					    <a class="prev" onclick="minusSlide()">&#10094;</a>
					    <a class="next" onclick="plusSlide()">&#10095;</a>
					</div>

					<div class="slider-dots">
					    <span class="slider-dots_item" onclick="currentSlide(1)"></span> 
					    <span class="slider-dots_item" onclick="currentSlide(2)"></span> 
					    <span class="slider-dots_item" onclick="currentSlide(3)"></span> 
					    <span class="slider-dots_item" onclick="currentSlide(4)"></span> 
					    <span class="slider-dots_item" onclick="currentSlide(5)"></span> 
					</div>
				</div>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/df4c269744.js"></script>
	<script src="js/main.js"></script>
	<script src="js/slider.js"></script>
</body>
</html>