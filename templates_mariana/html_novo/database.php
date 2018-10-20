<?php

function conectar (){
    $server = "localhost:3306";
    $user = "root";
    $password = "";
    $db="banco";
    
    $conecta = mysqli_connect($server, $user, $password, $db);
        
    return $conecta;
}

function consulta(){
    
    $conecta = conectar();
    
    if ($conecta) {
        $pesquisa = "SELECT * FROM usuarios;";
        $consulta = mysqli_query($conecta, $pesquisa);
        return $consulta;
        
    }
    
    else 
    {
        die("Não foi possível conectar!" . mysqli_connect_errno());
    }
}

function cadastrar()
{
    if (isset($_POST['criacad']))
    {
        if(isset($_POST['cpf']) && isset($_POST['senha']) && isset($_POST['nome']))
        {
            $cpf = $_POST['cpf'];
            $password = $_POST['senha'];
            $nome = $_POST['nome'];
            $rg = $_POST['rg'];
            $email = $_POST['email'];
            $turma = $_POST['turma'];
            $endereco = $_POST['endereco'];
            $cidade = $_POST['cidade'];
            $numero = $_POST['numero'];
            $estado = $_POST['estado'];
            $acesso = $_POST['acesso'];
            
            if ($acesso == 'Aluno')
            {
                $acesso = 1;
            }
            
            elseif ($acesso == 'Professor')
            {
                $acesso = 2;
            }
            
            else
            {
                $acesso = 0;
            
            }
            
        }
        
        else
        {
            return;
        }
    
        $conecta = conectar();

        if($conecta)
        {
            $sql = "INSERT INTO usuarios(`ID`, `CPF`, `PASSWORD`, `nome`, `rg`, `email`, `turma`, `endereco`, `cidade`, `estado`, `numero`,`acesso`) VALUES ('', '$cpf', '$password', '$nome', '$rg', '$email', '$turma', '$endereco', '$cidade', '$estado', '$numero', '$acesso');";
            
            $cadastro = mysqli_query($conecta, $sql);

            if($cadastro)
            {
                echo "<script>
                        alert(' {$nome} cadastrado com sucesso!');
                </script>";
                return;
            }

            else 
            {
                $erro = mysqli_connect_errno();
                echo " <script>
                alert('CPF já cadastro, falha no cadastro' + '{$erro}' );
                </script>";
                return $erro;

            }
        }
    
        else
        {
        return false;
        }
                   
    }
    
    else
    {
        return;
    }
    
}

function cadReserva()
{
    if (isset($_POST['reservar']))
    {
        if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['validade']))
        {
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $data = $_POST['validade'];
            $email = $_POST['email'];
            $turma = $_POST['turma'];
            $descricao = $_POST['descricao'];
        }
        
        else
        {
            return;
        }
    
        $conecta = conectar();

        if($conecta)
        {
            $sql = "INSERT INTO `reserva` (`COD`, `nome`, `sobrenome`, `email`, `data`, `turma`, `descricao`) VALUES ('', '$nome', '$sobrenome', '$email', '$data', '$turma', '$descricao');";
            
            $cadastro = mysqli_query($conecta, $sql);

            if($cadastro)
            {
                echo "<script>
                        alert('Reserva para o dia {$data} gravada com sucesso');
                </script>";
            }

            else 
            {
                $erro = mysqli_connect_errno();
                echo " <script>
                alert('falha no cadastro Aluno' + '{$erro}');
                </script>";

            }
        }
    
        else
        {
        return false;
        }
                   
    }
    
    else
    {
        return;
    }
    
}

    
?>
