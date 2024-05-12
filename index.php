<?php



// Aggiungete al lavoro di ieri le classi Movie e TVSerie
// La classe Movie gestisce due proprietà: profitti e durata.
// La classe TVSerie gestisce il numero di stagioni.
// Facciamo in modo che Movie e TVSerie ereditino le proprietà di base dalla classe Production.
// Creiamo delle istanze di Movie e TVSerie e stampiamo le informazioni in pagina.
// P.S.
// Sentitevi liberi di aggiungere altre proprietà / metodi alle classi Movie e TVSerie.
// BONUS
// Facciamo in modo che la classe Production accetti più di un genere.
// Rendiamo il parametro dei generi opzionale, impostando un valore di default nel caso non venga passato al costruttore


include_once __DIR__ . '/TVSerie.php';
include_once __DIR__ . '/Movie.php';

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
$vikings = new TVSerie('Vikings', 'Inglese', 10, 'https://m.media-amazon.com/images/I/91JrGLeOGgL._AC_UF1000,1000_QL80_DpWeblab_.jpg', 6);
$fightClub = new Movie('Signore Degli Anelli', 'Italiano', 10, 'https://m.media-amazon.com/images/I/71QPnEkXygS._AC_UF1000,1000_QL80_.jpg', '3 miliardi', '2 ore');

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
        <!-- card 5 -->
        <div>
            <div>
                <img src="<?= $vikings->img ?>" alt="nessuna immagine :(">
            </div>
            <div>
                <h1>
                    <?= $vikings->titolo ?>
                </h1>
                <span><?= $vikings->lingua ?></span>
                <br>
                <span><?= $vikings->voto ?></span>
                <br>
                <span><?= $vikings->stagioni ?></span>
            </div>
        </div>
        <!-- card 6 -->
        <div>
            <div>
                <img src="<?= $fightClub->img ?>" alt="nessuna immagine :(">
            </div>
            <div>
                <h1>
                    <?= $fightClub->titolo ?>
                </h1>
                <span><?= $fightClub->lingua ?></span>
                <br>
                <span><?= $fightClub->voto ?></span>
                <br>
                <span><?= $fightClub->profitti ?></span>
                <br>
                <span><?= $fightClub->durata ?></span>
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