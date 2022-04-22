<!DOCTYPE html>
<html lang=ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/about.css">
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
        <section class="about">
            <div class="about__container cnt">
                <div class="about__blocks">
                    <div class="about__content">
                        <div class="about__header headers">
                            <h2>О компании</h2>
                            <div class="global__hr"><hr></div>
                        </div>
                        <div class="about__block about__text">
                            <p>Наша компания была создана в 28.03.2022,<br>
                                и до сих пор радует клиентов.<br>
                                Мы будем рады видеть каждого нашего<br>
                                клиента у нас в офисе!
                                </p>
                        </div>
                        <div class="about__block about__text">
                            <p>Возникли вопросы? Ждем вашего звонка по телефонам:</p>
    
                            <p> +7 (900) 455 32-34 </p>
                                
                            <p>+7 (900) 455 32-35</p>
                        </div>
                    </div>
                    <div class="about__block about__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4608.786411007426!2d20.500865074797986!3d54.72029813637513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e33dfe510760c3%3A0x10f72b5bf85a1abe!2z0JrQvtC70LvQtdC00LYg0L_RgNC10LTQv9GA0LjQvdC40LzQsNGC0LXQu9GM0YHRgtCy0LA!5e0!3m2!1sru!2sru!4v1649065045561!5m2!1sru!2sru" width="100%" height="500" style="border:1px solid #de954d; border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <!-- <a href="#top">
                            <div class="top">
                                <div class="arrow"></div>
                            </div>
                        </a> -->
                    </div>
                </div>
            </div>
        </footer>
    <script src="https://use.fontawesome.com/df4c269744.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>