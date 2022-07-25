<?php
session_start();
include_once ("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Karine</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="16x16"  href="favicon-16x16.png">

</head>
<body>
    <header id="toposite">
        <div class="div1">
            <img class="logo" src="logo-in8-dev.png" alt="Logo Site">
            <a class="div2" href="#cadastro">cadastro</a> 
            <h2>•</h2>
            <a class="div3" href="#lista">lista</a> 
            <h2>•</h2>
            <a class="div3" href="#rodape">sobre mim</a>
        </div>
        <div>
            <p class="tit">ESTÁGIO</p>
            <p class="tit2">PROVA DE SELEÇÃO</p>
        </div>
    </header>

    <main>
        <div id="cadastro">
            <div>
                <p class="cad">CADASTRO</p>
            </div>
            <div class="formulario">   
                <form action="teste.php" method="post" name="form" >
                    <div class="imput">
                        <label for="nome-box">Nome</label>
                        <input type="text" id="nome-box" name="nome">
                        
                    </div>
                    <div class="imput">
                        <label for="mail">E-mail</label>
                        <input type="text" id="mail" name="email">
                       
                    </div>
                    <div class="imput">
                        <label for="dnasc">Nascimento</label>
                        <input type="text" name="nasc" id="dnasc">
                        
                    </div>
                    <div class="imput">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="tel" id="telefone">
                        
                    </div>
                    
                    <input class="btn-cadastro" type="submit" value="CADASTRAR">

                </form>
            </div>
        </div>

    </main>

    <div id="lista">

        <?php
        $result_cadastro = "SELECT * FROM cadastro";
        $resultado_cadastro = mysqli_query($conn, $result_cadastro);
    
        ?>

        <div>
            <p class="tit-lista">LISTA DE CADASTRO</p>
        </div>

        <table>
            <div id="tabela">
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Nascimento</th>
                    <th>Telefone</th>
                </tr>
                <?php while($row_cadastro = mysqli_fetch_assoc($resultado_cadastro)){ ?>
                <tr>
                    <td><?php echo $row_cadastro ['id'];?></td>
                    <td><?php echo $row_cadastro ['nome'];?></td>
                    <td><?php echo $row_cadastro ['email'];?></td>
                    <td><?php echo $row_cadastro ['nascimento'];?></td>
                    <td><?php echo $row_cadastro ['telefone'];?></td>
                </tr>
                <?php } ?>
                
                </tr>
            </div>
        </table>
        <div class="top">
            <a href="#toposite"> <img src="icones/topo-pag.svg" alt="topo"> </a>
        </div>
    </div>

    <footer id="rodape">
        <p>Karine Aparecida Costa Barbosa</p>
        <p class="desc">karineaparecida01@yahoo.com.br</p>
        <p class="desc">(31) 99298-6621</p>
        <p class="desc">Centro Universitário Claretiano</p>
    </footer>   
    
</body>
</html>