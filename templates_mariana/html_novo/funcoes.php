<?php 

 function login(){
     
            if(isset($_POST['cpf']) && isset($_POST['senha']))
            {
                $user = $_POST['cpf'];
                $passwd = $_POST['senha']; 
            }
            
            else {
                
                return;    
            }
         
         $conecta = conectar();
     
     if($conecta)
     {
           $resultado = consulta();
         
            while($row = mysqli_fetch_row($resultado)){
             
            if(($user == $row[1]) && ($passwd == $row[2]))
             {                
                return true;
             }
     
         }
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');</script>";
            return false;      
    }          
     
     else{
         echo"<script language='javascript' type='text/javascript'>alert('FALHA NA CONEXÃO');</script>";
         die("Falha na conexão!!! " . mysqli_connect_errno());
         
     }
                                            
 }
     
?>