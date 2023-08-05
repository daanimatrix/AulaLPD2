<?php 

class Retangulo {
    private $largura;
    private $altura;

    public function setLargura($largura) {
        $this->largura = $largura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

// Criar um objeto Retangulo
$retangulo = new Retangulo();

// Obter valores definidos pelo usuário (supondo que você esteja obtendo esses valores a partir de um formulário ou entrada do usuário)
$larguraUsuario = 5; // Defina aqui a largura informada pelo usuário
$alturaUsuario = 8;  // Defina aqui a altura informada pelo usuário

// Definir os valores do retângulo
$retangulo->setLargura($larguraUsuario);
$retangulo->setAltura($alturaUsuario);

// Calcular e exibir a área e o perímetro
$area = $retangulo->calcularArea();
$perimetro = $retangulo->calcularPerimetro();

echo "Área do retângulo: " . $area . "<br>";
echo "Perímetro do retângulo: " . $perimetro;


?>