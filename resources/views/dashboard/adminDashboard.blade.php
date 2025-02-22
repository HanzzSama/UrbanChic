<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/dashboard.css" />
    <title>Document</title>
</head>

<body class="body" id="body">
    <div class="content" id="header">
        <nav class="sidebar">
            <figure class="nav">
                <div class="nav-menu">
                    <article class="nav-btn">
                        <div>
                            <i class="bx bx-menu bx-menu-des"></i>
                            <i class="bx bx-menu bx-menu-res"></i>
                            <h2>suitU</h2>
                        </div>
                    </article>
                    <div class="menu" id="nav-menu">
                        <ul class="menu-top">
                            <div>
                                <figure class="profile" onclick="openPopup()">
                                    <div>
                                        <img id="profile" src="/img/profile.jpg" alt="" />
                                    </div>
                                    <div class="profile-txt">
                                        <h3>User</h3>
                                        <p>user@gmail.com</p>
                                    </div>
                                </figure>
                            </div>
                            <a href="">
                                <li class="log create-book">
                                    <i class="bx bx-plus"></i>
                                    <div>
                                        <h4>Tambah Produk</h4>
                                    </div>
                                </li>
                            </a>
                            <a href="/admin">
                                <li class="log">
                                    <i class="bx bx-line-chart-down"></i>
                                    <div>
                                        <h4>Data Analysis</h4>
                                    </div>
                                </li>
                            </a>
                            <a href="">
                                <li class="log create-book">
                                    <i class="bx bx-plus"></i>
                                    <div>
                                        <h4>Tambah</h4>
                                    </div>
                                </li>
                            </a>
                            <a href="/">
                                <li class="log">
                                    <i class="bx bxs-home"></i>
                                    <div>
                                        <h4>Home</h4>
                                    </div>
                                </li>
                            </a>
                            <a href="#category-nav">
                                <li class="log">
                                    <i class="bx bxs-category-alt"></i>
                                    <div>
                                        <h4>Category fashion</h4>
                                    </div>
                                </li>
                            </a>
                            <a href="#populer">
                                <li class="log">
                                    <i class="bx bx-trending-up"></i>
                                    <div>
                                        <h4>Populer fashion</h4>
                                    </div>
                                </li>
                            </a>
                        </ul>
                        <ul class="menu-bottom">
                            <div class="theme-btn">
                                <li class="theme theme-res">
                                    <div>
                                        <i class="bx bxs-moon"></i>
                                        <i class="bx bxs-sun"></i>
                                    </div>
                                    <div>
                                        <h4 id="dark"><b>Dark</b></h4>
                                        <h4 id="light">
                                            <b>Light</b> Mode
                                        </h4>
                                    </div>
                                </li>
                            </div>
                            <a href="/confirm">
                                <li class="login">
                                    <i class="bx bx-log-in-circle"></i>
                                    <div>
                                        <h4>Login</h4>
                                    </div>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </figure>
        </nav>
        <main class="content-main">
            <div>
                <header>
                    <div>
                        <article class="title-header">
                            <div>
                                <h2>Hi, {{ Auth::user()->username }}</h2>
                                <h5>Selamat Datang di halaman Dashboard Admin</h5>
                            </div>
                        </article>
                    </div>
                </header>
                @include('component.tablePesanan')
                @include('component.tableProduk')
                @include('component.addProduk')
                <footer></footer>
            </div>
        </main>
    </div>
    <script>
        let btn_des = document.querySelector(".bx-menu-des");
            let btn_res = document.querySelector(".bx-menu-res");
            let bar = document.querySelector(".sidebar");

            // Theme
            let theme = document.querySelector(".theme");
            let theme_btn = document.querySelector(".theme-btn");
            let bdy = document.querySelector(".body");

            btn_des.onclick = function () {
                bar.classList.toggle("active");
            };
            btn_res.onclick = function () {
                bar.classList.toggle("active");
            };
            theme.onclick = function () {
                bdy.classList.toggle("active");
                theme_btn.classList.toggle("active");
            };
    </script>
</body>

</html>