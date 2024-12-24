<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>TechNova</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}" class="logo">TechNova</a>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('kontak') }}">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Welcome to TechNova</h1>
            <p>Your technology partner for innovation.</p>
            <button class="button-up">Learn More</button>
        </section>

       <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="../img/technova.jpg" alt="technova">
                        <h3>Commercial Printing</h3>
                        <p>50 YEARS</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="../img/technova.jpg" alt="technova">
                        <h3>Newspaper Printing</h3>
                        <p>50 YEARS</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="../img/technova.jpg" alt="technova">
                        <h3>Packaging Printing</h3>
                        <p>50 YEARS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2>TechNova</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aspernatur magnam omnis in. Voluptatibus nostrum dolor beatae rem error. Ipsam, quod delectus. Dignissimos aliquid autem eveniet beatae nihil distinctio earum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, quas. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam alias deleniti sit amet mollitia! Sint, adipisci debitis similique esse repellendus ex error voluptatum laborum labore itaque dolores veniam placeat officiis eaque vero, deleniti vitae in at? Nostrum enim quaerat laborum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique odio modi dolores, molestiae nam commodi quia quis suscipit enim, nostrum impedit voluptatem fugit sed quos officiis minima vitae ratione. Cumque!</p>
        </div>
    </section>
    </main>

    <footer class="footer">
        <p class="footer-copy">&copy; 2024 TechNova</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>