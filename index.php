<?php

// Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui è definita una classe Production che rappresenta una produzione cinematografica / televisiva.
// All’interno della classe dovrete gestire un titolo, una lingua e un voto (su una scala da 1 a 10).
// La classe deve avere le sue variabili d’istanza, il costruttore e i metodi.
// Istanziate poi almeno due oggetti Production e stampate in pagina i loro valori, con un layout a vostro piacere.

class Production
{
    public $titolo;
    public $lingua;
    public $voto;
    public $img;
    public function checkVoto($_voto)
    {
        if ($_voto > -1 && $_voto < 11) {
            return $this->voto = $_voto;
        } else {
            return $this->voto = 'inserire voto da 0 a 10';
        };
    }
    function __construct($titolo, $lingua, $_voto, $img)
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->voto = $this->checkVoto($_voto);
        $this->img = $img;
    }
}

$signoreDegliAnelli = new Production('Signore Degli Anelli', 'Italiano', 10, 'https://pad.mymovies.it/filmclub/2002/01/011/locandina.jpg');
$slime = new Production('Tensei Shitara No Slime Datta Ken', 'Giapponese', 10, 'https://www.animeclick.it/immagini/anime/Tensei_Shitara_Slime_Datta_Ken/cover/Tensei_Shitara_Slime_Datta_Ken-cover.jpg');
$onePiece = new Production('One Piece', 'Giapponese', 10, 'https://www.starcomics.com/files/immagini/fumetti-cover/onepiece-ne-100-1200px');
$bleach = new Production('Bleach', 'Giapponese', 10, 'https://upload.wikimedia.org/wikipedia/en/7/72/Bleachanime.png');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <!-- card 1 -->
        <div>
            <div>
                <img src="<?= $bleach->img ?>" alt="nessuna immagine :(">
            </div>
            <div>
                <h1>
                    <?= $bleach->titolo ?>
                </h1>
                <span><?= $bleach->lingua ?></span>
                <br>
                <span><?= $bleach->voto ?></span>
                <br>
            </div>
        </div>
        <!-- card 2 -->
        <div>
            <div>
                <img src="<?= $onePiece->img ?>" alt="nessuna immagine :(">
            </div>
            <div>
                <h1>
                    <?= $onePiece->titolo ?>
                </h1>
                <span><?= $onePiece->lingua ?></span>
                <br>
                <span><?= $onePiece->voto ?></span>
                <br>
            </div>
        </div>
        <!-- card 3 -->
        <div>
            <div>
                <img src="<?= $slime->img ?>" alt="nessuna immagine :(">
            </div>
            <div>
                <h1>
                    <?= $slime->titolo ?>
                </h1>
                <span><?= $slime->lingua ?></span>
                <br>
                <span><?= $slime->voto ?></span>
                <br>
            </div>
        </div>
        <!-- card 4 -->
        <div>
            <div>
                <img src="<?= $signoreDegliAnelli->img ?>" alt="nessuna immagine :(">
            </div>
            <div>
                <h1>
                    <?= $signoreDegliAnelli->titolo ?>
                </h1>
                <span><?= $signoreDegliAnelli->lingua ?></span>
                <br>
                <span><?= $signoreDegliAnelli->voto ?></span>
                <br>
            </div>
        </div>
    </main>
</body>

</html>

<style>
    img {
        max-width: 300px;
        max-height: 550px;
    }
</style>