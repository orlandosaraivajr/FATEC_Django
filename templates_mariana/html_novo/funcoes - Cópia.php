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
         $row = mysqli_fetch_row(consulta());
        
 
        do
        {
        
            print_r($row[1]);
            if(($user == $row[1]) && ($passwd == $row[2]))
             {
               return true;
             }

            else
             {   
               echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');</script>";
               return false;
             }

             }while ($row[1] != $user);
         
    }
     else{
         echo"<script language='javascript' type='text/javascript'>alert('FALHA NA CONEXÃO');</script>";
         die("Falha na conexão!!! " . mysqli_connect_errno());
         
     }
                                            
 }
     
?>
// if($_POST['acesso'] == "0"){
  //              header("Location: secretaria.php");
    //            }
                
      //          else{
        //            header("Location: secretaria.php");
          //      }