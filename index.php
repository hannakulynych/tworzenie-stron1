<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kino Słodka kotka</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>

    <header>
        <h1>Kino </h1>
        <h1> Słodka kotka ♡</h1>
        <img src="https://c.tenor.com/YEwxWExn80kAAAAj/cat-cute.gif">
    </header>

    <nav>
        <a href="Repertuar.html">Repertuar</a>
        <a href="cennik.html">Cennik</a>
        <a href="kontakt2.html">Kontakt</a>

    </nav>

    <section>
        <h2>Aktualny repertuar</h2>
        <div class="movie-container">
        <?php
         $servername ="localhost";
         $username ="root";
         $password ="";
         $conn = new mysqli($servername, $username, $password);
         if ($conn->connect_error) {
         die("połączenie nieudane; ". $conn->connect_error);   
         }
         echo "połączenie nawiązane";
        ?>
            <div class="movie">
                <img src="https://fwcdn.pl/fpo/48/00/754800/8105774.6.jpg" alt="Barbie">
                <h3>Barbie</h3>
                <p>Barbie, która żyje w idealnym bajkowym świecie przechodzi kryzys egzystencjalny.</p>
                <button>Kup bilet</button>
            </div>
            <div class="movie">
                <img src="https://fwcdn.pl/fpo/87/83/868783/8102088.6.jpg" alt="Wonka">
                <h3>Wonka</h3>
                <p>Młody Willy Wonka poznaje Oompa-Loompas w czasie jednej ze swoich przygód.</p>
                <button>Kup bilet</button>
            </div>
            <div class="movie">
                <img src="https://fwcdn.pl/fpo/11/18/10041118/8089143.6.jpg" alt="TAYLOR SWIFT">
                <h3> TAYLOR SWIFT: THE ERAS TOUR</h3>
                <p>Kinowa wersja jednej z największych tras koncertowych w historii muzyki. </p>
                <button>Kup bilet</button>
            </div>
            <div class="movie">
                <img src="https://fwcdn.pl/fpo/60/03/10006003/8048048.6.jpg" alt="M3GAN">
                <h3>M3GAN</h3>
                <p>Pracowniczka firmy produkującej zabawki buduje lalkę imitującą człowieka, która zaczyna prowadzić samodzielne życie.</p>
                <button>Kup bilet</button>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Kino Słodka kotka. Wszelkie prawa zastrzeżone.</p>
    </footer>

</body>
</html>