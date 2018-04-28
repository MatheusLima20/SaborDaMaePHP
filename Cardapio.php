
<?php include_once './ConexaoBanco.php'; 

                $titulo = array();
                $descricao = array();
                $img = array();
                $idTitulo = array();
                $contCardapio = 0;
                $result = mysqli_query($conexaoBanco, "select * from cardapio");

                while ($linha = mysqli_fetch_array($result)) {

                    $titulo[$contCardapio] = $linha['titulo'];
                    $descricao[$contCardapio] = $linha['descricao'];
                    $img[$contCardapio] = $linha['img'];
                    $idTitulo [$contCardapio] = str_replace(" ", "", $titulo[$contCardapio]);
                    ++$contCardapio;
                }
                
?>

<script type="text/javascript" src="JS/tabelaCardapio.js" ></script>

<div class="content">

    <div class="body-pags">
        <br /><br />
        
        
        
        <div id="tabs">
            <ul>
                <?php
                for ($i = 0; $i < $contCardapio; $i++) {                   

                    echo "<li><a href='#$idTitulo[$i]]'> $titulo[$i] </a></li>";
                    
                }
                ?>

            </ul>
            <?php
            for ($i = 0; $i < $contCardapio; $i++) {
                
                echo "<div id='$idTitulo[$i]]'> $descricao[$i] "
                        . "<br /><br /> <img width='50%' height='20%' src='Imgs/Cardapio/$img[$i]' />"
                        . "</div>";
            }
            ?>
            
        </div>
        <br/><br/><br/>
    </div>    

</div>