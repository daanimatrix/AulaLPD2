<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<!-- <body> -->
<?php 
class Fruta {
    public $nome;
    public $cor;

    function __construct($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;
    }

    function set_nome($nome) {
        $this->nome = $nome;
    }

    function set_cor($cor) {
        $this->cor = $cor;
    }

    function get_nome() {
        return $this->nome;
    }

    function get_cor() {
        return $this->cor;
    }
}

$maca = new Fruta('banana','amarela');
// $banana = new Fruta();
// $mamamo = new Fruta();

// $maca->set_nome();
echo "<br>".$maca->get_nome();
echo "<br>".$maca->get_cor();



?>

<!-- </body>
</html> -->