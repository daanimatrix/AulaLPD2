<?php 
    class Carro{
        //Criando os atributos
        private $marca;
        private $modelo;
        private $ano;

        //Construtor
        function __construct($marca, $modelo, $ano){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            // if($ano > 2000){
            //     // echo'Não permitido';
            //     $this->ano = 'Não permitido';
            // }else{
            //     $this->ano = $ano;
            // }
            

        }

        public function set_marca($marca){
            $this->marca = $marca;
        }

        public function get_marca(){
           return  $this->marca ;
        }

        public function set_modelo($modelo){
            $this->modelo = $modelo;
        }

        public function get_modelo(){
           return  $this->modelo ;
        }

        public function set_ano($ano){
            $this->ano = $ano;
        }

        public function get_ano(){
           return  $this->ano ;
        }

    }

    //Criando o objeto
    $carro1 = new carro('vw','uno','2000');
    echo '<hr>';
    echo 'INSTANCIANDO A CLASSE';
    echo "<br> Marca:  ".$carro1->get_marca();
    echo "<br> Modelo:  ".$carro1->get_modelo();
    echo "<br> Ano:   ".$carro1->get_ano();
    echo '<hr>';

    echo '<hr>';
    echo 'ALTERANDO O OBJETO ';
    //criando a objeto e alterando o ano 
    $carro2 = new carro('hyndai','hb','2020');
    echo "<br>Antes: ".$carro2->get_ano();
    $carro2->set_ano('2023');
    echo "<br>Depois: ".$carro2->get_ano();
    echo '<hr>';
    echo "";
    echo '<hr>';









?>