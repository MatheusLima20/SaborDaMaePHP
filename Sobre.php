
<?php
include_once './ConexaoBanco.php';


?>

<link type="text/css" rel="stylesheet" href="CSS/JCarrossel/jquery.excoloSlider.css" />

<script type="text/javascript" src="JS/JCarrossel/adapt.min.js"></script>
<script type="text/javascript" src="JS/JCarrossel/jquery.excoloSlider.js"></script>
<script type="text/javascript" src="JS/SliderSobre.js"></script>

<div class="content">


    <div class="body-pags">
        <span style="margin-left: 1.8em;"></span>
        <?php 
         $query = mysqli_query($conexaoBanco, "select * from txtsobre where id = '1'");
        $texto = "";
        while ($linha = mysqli_fetch_array($query)){
            $texto = $linha['textoSobre'];
        }
        
        $txtSobre = $texto;
        
        echo $txtSobre;
        ?>
        <br/><br/>
    </div>

</div>
