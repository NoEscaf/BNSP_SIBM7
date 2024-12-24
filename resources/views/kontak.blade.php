<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="../css/style.css"> </head>
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

    <section class="contact">
        <h1>Hubungi Kami</h1>
        <p>Silakan hubungi kami melalui informasi di bawah ini:</p>

        <div class="contact-info">
            <p><strong>Alamat:</strong> Jl.Rtm, Cimanggis, Depok</p>
            <p><strong>Telepon:</strong> 082287922624</p>
            <p><strong>Email:</strong> <a href="mailto:zulhajjinasution6@gmail.com">zulhajjinasution6@gmail.com</a></p>
            <p><strong>Jam Operasional:</strong> 08.00 - 20.00</p>
        </div>

        <h2>Formulir Kontak</h2>
        <form action="submit-contact.php" method="post"> 
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Pesan:</label><br>
            <textarea id="message" name="message" rows="5" cols="40" required></textarea><br><br>

            <input type="submit" value="Kirim">
        </form>
    </section>

    <footer>
        <p>&copy; 2024 TechNova</p>
    </footer>

    <script src="../js/flickity.pkgd.min.js"></script>
    <script src="../js/script.js"></script> </body>
</body>
</html>