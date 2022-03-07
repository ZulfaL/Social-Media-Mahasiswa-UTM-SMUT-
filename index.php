<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles-home.css">

        <title>SMMUT</title>
    </head>
    <body>
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">SMMUT</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#share" class="nav__link">Tentang</a></li>
                        <li class="nav__item"><a href="#decoration" class="nav__link">Layanan</a></li>
                        <li class="nav__item"><a href="login.php" class="nav__link">Login</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__img">
                        <img src="assets/img/home.png" alt="">
                    </div>

                    <div class="home__data">
                        <h1 class="home__title">Social Media Mahasiswa UTM</h1>
                        <p class="home__description">Menghubungkan Para Mahasiswa</p>
                        <a href="login.php" class="button">Masuk</a>
                    </div>   
                </div>
            </section>

            <!--========== SHARE ==========-->
            <section class="share section bd-container" id="share">
                <div class="share__container bd-grid">
                    <div class="share__data">
                        <h2 class="section-title-center">Social Media Mahasiswa UTM <br> SMMUT</h2>
                        <p class="share__description">SMMUT adalah singkatan dari Social Media Mahasiswa UTM. Dimana aplikasi ini adalah upaya Mahasiswa UTM yang berfungsi sebagai wadah bagi mahasiswa untuk saling berkomunikasi...</p>
                        <a href="#" class="button">Tentang</a>
                    </div>

                    <div class="share__img">
                        <img src="assets/img/home2.png" alt="">
                    </div>
                </div>
            </section>

            <!--========== Layanan Utama ==========-->
            <section class="decoration section bd-container" id="decoration">
                <h2 class="section-title">Social Media Mahasiswa UTM <br> SMMUT</h2>
                <div class="decoration__container bd-grid">
                    <div class="decoration__data">
                        <img src="assets/img/layananutama1.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">Chatting</h3>
                        <a href="#" class="button button-link">Lihat</a>
                    </div>

                    <div class="decoration__data">
                        <img src="assets/img/layananutama2.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">Share Images</h3>
                        <a href="#" class="button button-link">Lihat</a>
                    </div>

                    <div class="decoration__data">
                        <img src="assets/img/layananutama3.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">Comment Post</h3>
                        <a href="#" class="button button-link">Lihat</a>
                    </div>
                </div>
            </section>

            <!--========== SEND GIFT ==========-->
            <section class="send section">
                <div class="send__container bd-container bd-grid">
                    <div class="send__content">
                        <h2 class="section-title-center send__title">Berikan Masukan</h2>
                        <p class="send__description">Saran anda memberikan dampak bersar terhadap pelayanan kami.</p>
                        <form action="">
                            <div class="send__direction">
                                <input type="text" placeholder="Saran & Masukan" class="send__input">
                                <a href="#" class="button">Kirim</a>
                            </div>
                        </form>
                    </div>

                    <div class="send__img">
                        <img src="assets/img/send.png" alt="">
                    </div>
                </div>
            </section>
        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section">
            <div class="footer__container bd-container bd-grid">
                <div class="footer__content">
                    <h3 class="footer__title">
                        <a href="#" class="footer__logo">SMMUT</a>
                    </h3>
                    <p class="footer__description">Menghubungkan Para Mahasiswa.</p>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Layanan Lain</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Chatting </a></li>
                        <li><a href="#" class="footer__link">Images </a></li>
                        <li><a href="#" class="footer__link">Comments </a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Tentang</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Blog</a></li>
                        <li><a href="#" class="footer__link">Tentang Kami</a></li>
                        <li><a href="#" class="footer__link">Kedepan</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Sosial</h3>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

            <p class="footer__copy">&#169; 2021. All right reserved</p>
        </footer>


    </body>
</html>