<?php

function login()
{
    
    if(isset($_POST['cpf']) && isset($_POST['senha']))
    {
        $user = $_POST['cpf'];
        $passwd = $_POST['senha'];
    }

    else
    {
        
        return;
    }            

    $conecta = conectar();
    
    
    if($conecta)
    {
        $row = mysqli_fetch_row(consulta());
       
        
        if(($user == $row[1]) && ($passwd == $row[2]))
            {            
                return true;
            }      
        else
            {   
                return false;
            }
        }
   
    
    else
    {
        die ("Falha na conexão!" . mysqli_connect_errno());
    }
    
}
?>
