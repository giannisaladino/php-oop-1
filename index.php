<?php
class Production {
    public $titolo;
    public $lingua;
    public $voto;

    public function __construct($_titolo, $_lingua) {
        $this->titolo = $_titolo;
        $this->lingua = $_lingua;
        // $this->voto = $_voto;
    }

    public function getVote($_voto) {
        if(is_numeric($_voto) && $_voto > 0 && $_voto <= 10) {
            $this->voto = intval($_voto);
        }
    }
}

$film1 = new Production('Star Wars', 'Inglese');
$film1->getVote(7);

$film2 = new Production('F&F 2', 'Italiano');
$film2->getVote(8);

$film3 = new Production('Spiderman 3', 'Tedesco');
$film3->getVote(6);

var_dump($film1, $film2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <strong>Titolo:</strong> <?php echo $film1->titolo ?></h5>
                            <p class="card-text"> <strong>Lingua:</strong> <?php echo $film1->lingua ?></p>
                            <p class="card-text"> <strong>Voto:</strong> <?php echo $film1->voto ?></p>
                        </div>
                    </div>            
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <strong>Titolo:</strong> <?php echo $film2->titolo ?></h5>
                            <p class="card-text"> <strong>Lingua:</strong> <?php echo $film2->lingua ?></p>
                            <p class="card-text"> <strong>Voto:</strong> <?php echo $film2->voto ?></p>
                        </div>
                    </div>            
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> <strong>Titolo:</strong> <?php echo $film3->titolo ?></h5>
                            <p class="card-text"> <strong>Lingua:</strong> <?php echo $film3->lingua ?></p>
                            <p class="card-text"> <strong>Voto:</strong> <?php echo $film3->voto ?></p>
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </main>
</body>
</html>