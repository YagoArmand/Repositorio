<?php
    include('cabecalho.php');
?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conexao = mysqli_connect("localhost","root","ifsuldeminas","scif");

            if($conexao){
                echo "Conexao bem sucedida . </br>";
                $resultado = mysqli_query($conexao, "SELECT * FROM produto");
                if($resultado){
                    $filds = mysqli_fetch_fields($resultado);
                    $contador = mysqli_num_rows($resultado);

                    print("Total de linhas resultantes: $contador" . "</br>");

                    while($linha = mysqli_fetch_assoc($resultado)){
                        print($linha['nome'] . "</br>");
                    }
                    //echo'<pre>';
                    //print_r($filds);
                    //echo'<pre>';
                }
            }
            else{
                echo "Ocorreu um erro";
            }

                $array = [
                    ["nome" => "Joao",
                    "valor" => "12.45"],
                    
                    ["nome" => "Lênio",
                    "valor" => "44.66"],
                ];

                for ($i=0; $i < count($array); $i++) { 
                    $nome = $array[$i]["nome"];
                    $valor = $array[$i]["valor"];
                    echo 
                    '<tr>
                        <th scope="row">' . $i + 1 . '</th>
                        <td>' . $nome . '</td>
                        <td>' . $valor . '</td>
                    </tr>';
                }
            ?>

        </tbody>
    </table>
</div>

<?php
    include('rodape.php');
?>