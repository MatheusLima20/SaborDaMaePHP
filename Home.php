
<?php
include_once './ConexaoBanco.php';
$titulo = array();
//$descricao = array();
$img = array();
$contHomeCarrossel = 0;
$result = mysqli_query($conexaoBanco, "select * from homecarrossel");

while ($linha = mysqli_fetch_array($result)) {

    $titulo[$contHomeCarrossel] = $linha['titulo'];
    //$descricao[$contCardapio] = $linha['descricao'];
    $img[$contHomeCarrossel] = $linha['img'];
    ++$contHomeCarrossel;
}
?>

<link type="text/css" rel="stylesheet" href="CSS/JCarrossel/jquery.excoloSlider.css" />

<script type="text/javascript" src="JS/JCarrossel/adapt.min.js"></script>
<script type="text/javascript" src="JS/JCarrossel/jquery.excoloSlider.js"></script>
<script type="text/javascript" src="JS/SliderSobre.js"></script>

<div class="content">

    <div class="body-pags">
        <br /><br />
        <div class="container_12">
            <div class="grid_8">
                <div id="sliderA" class="slider">
                    <?php
                    for ($i = 0; $i < $contHomeCarrossel; $i++) {

                        echo "<img src='Imgs/Slider/$img[$i]' ";

                        if ($titulo[$i] != "") {
                            echo "data-plugin-slide-caption='$titulo[$i]' />";
                        } else {
                            echo "/>";
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
        <br />
        <p> <span style="margin-left: 1.8em;"></span>
        <?php 
        
        $query = mysqli_query($conexaoBanco, "select * from txthome where id = '1'");
        $texto = "";
        while ($linha = mysqli_fetch_array($query)){
            $texto = $linha['textoHome'];
        }
        
        $txtHome = $texto;
        
        echo $txtHome;
                
        ?>
        </p>
        <br/><br/><br/>
    </div>    

</div>
