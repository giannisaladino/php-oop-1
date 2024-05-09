<?php
class Production {
    private $titolo;
    private $lingua;
    private $voto;

    public function __construct($_titolo, $_lingua, $_voto) {
        $this->titolo = $_titolo;
        $this->lingua = $_lingua;
        $this->voto = $_voto;
    }

}
$film1 = new Production('Ciao', 'come stai', '3');
var_dump($film1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>