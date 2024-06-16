<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mellow Mushroom</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body style="background-image: url('{{ asset('img/wall.jpeg') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <header>
        <nav class="navbar">
            <div class="navbar-brand">
                <img src="{{ asset('img/wall.jpeg') }}" alt="Mellow Mushroom">
            </div>
            <div class="navbar-toggle" id="navbar-toggle">
                <span class="navbar-toggle-icon"></span>
                <span class="navbar-toggle-icon"></span>
                <span class="navbar-toggle-icon"></span>
            </div>
            <div class="navbar-links" id="navbar-links">
                <a href="#">Menu</a>
                <a href="#">Order Online</a>
            </div>
        </nav>
    </header>
    <main class="main-content">
        <section class="hero-section">
            <div class="hero-text">
                <h1>MELLOW MUSHROOM</h1>
                <p>A higher order of pizza.</p>
                <a href="menu" class="btn-order">Order Online</a>
            </div>
            <div class="hero-images">
                <img src="{{ asset('img/piz.png') }}" alt="Pizza Left" class="pizza-left">
                <img src="{{ asset('img/piz.png') }}" alt="Pizza Right" class="pizza-right">
            </div>
        </section>
    </main>
    <script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>
