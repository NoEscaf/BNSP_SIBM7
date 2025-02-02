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
        <section>
            <div class="container">
                <div class="sidebar">
                    <ul>
                        <li>Vision</li>
                        <li>Mission</li>
                        <li>Values</li>
                        <li>Innovation</li>
                        <li>Alliances</li>
                    </ul>
                </div>
                <div class="content">
                    <h2><b>About</b></h2>
                    <p>TechNova is one of the world's largest suppliers of print solutions. TechNova's innovative and world-class products cater to a wide range of industries, such as Commercial & Newspaper Printing, Publishing, Packaging, Signage, Photo, Textile, Engineering & Medical Imaging.</p>
                    <p>TechNova's name is derived from the words "technology" and "innovation", and it is these two tenets that form TechNova's core mission. Globally recognized as a pioneer, TechNova has introduced several breakthrough technologies and innovative products that have transformed various print processes and created new markets.</p>
                    <p>With its wide distribution and logistics network in India, TechNova's products & services are used by every printer in the country. In addition to its leadership position in India, TechNova markets its products to over 60 countries through its international offices and distribution network.</p>

                    <h2><b>Highlights</b></h2>
                    <ul>
                        <li>World's only manufacturer of full range of Digital Offset Plates: Violet, Thermal, UV, Inkjet & Laser</li>
                        <li>ISO 9001:2015 certification for Quality Management Systems</li>
                        <li>Widest portfolio of Digital Print Media for Inkjet & Laser printing</li>
                        <li>ISO 14001:2015 certification for Environment Management Systems</li>
                        <li>ISO 45001:2018 Standards for Occupational Health & Safety</li>
                        <li>Winner of the prestigious GATF InterTech Technology Award  </li>
                        <li>Pioneer of the "Go Green" revolution</li>
                    </ul>

                    <h2><b>TechNova's Go Green Mission</b></h2>
                    <p>Our Planet is our most vital resource. We must do all we can to preserve it. TechNova is committed to helping the printing industry adopt eco-friendly solutions, reduce carbon footprint, eliminate waste, and facilitate sustainable growth. To help achieve this, we at TechNova have embarked on a "Go Green" mission:
                        <ul>
                            <li>To promote Green awareness within TechNova, with our stakeholders, and within the printing industry</li>
                            <li>To develop, manufacture, and supply eco-friendly Green products and services that have the least impact on the environment</li>
                            <li>To comply with, and go beyond, all applicable legal requirements with regards to the environment and help our customers achieve the same</li>
                        </ul>
                    </p>
                    <div class="container">
                        <div class="video-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/txSGF2J5Wd0?si=reSZCrcdzIySd4p1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>