<?php
     require "funcoes.php";
     require "database.php";
           
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> PyControlRoom </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" type="text/css" href="_css/Estilo.css" crossorigin="anonymous" title="bog standard">
    <link rel="stylesheet" type="text/css" href="_css/bootstrap/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    
</head>

<body>
    
    <?php 
         include "template/cabecalho_login.php";
    ?>
    
    
    <br>
    
    <div class="container">
        <div class="row">
        
            <br>
            <!-- -----------------------------------Coluna Esquerda ------------------------------------- -->
            
            <div class="col-sm">
                        <h3>Cadastro de Pessoas:</h3>
                <hr>
                        <!-- Cadastrar Pessoa -->
                        <div>
                            <button type="button" class="botao btn btn-info btn-block" data-toggle="modal" data-target="#myModalprofessor" > Cadastrar Professor</button>

                            <div id="myModalprofessor" class= "modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                            <div class="modal-body">
                                                 <?php 
                                                      include "formulario/CadastrarProfessor.php";
                                                 ?> 
                                            </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-default" type="button" data-dismiss="modal"> Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <br>
                    
                
                         <!-- Cadastrar Aluno -->
                        <div>
                            <button type="button" class="botao btn btn-info btn-block" data-toggle="modal" data-target="#myModalAluno" > Cadastrar Aluno</button>

                            <div id="myModalAluno" class= "modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                             <?php 
                                                  include "./formulario/CadastroAluno.php";
                                             ?> 
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-default" type="button" data-dismiss="modal"> Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Cadastrar Funcionario -->
                        <div>
                            <button type="button" class="botao btn btn-info btn-block" data-toggle="modal" data-target="#myModalCadastro" > Cadastrar Funcionario </button>

                            <div id="myModalCadastro" class= "modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                             <?php 
                                                 include "formulario/CadastroFuncionario.php";
                                             ?> 
                                   
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-default" type="button" data-dismiss="modal"> Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                <br>
            </div>
            
           
            <!-- ----------------------------------Coluna Central --------------------------------------- -->       
            <div class="col-sm">
                <h3> Cronograma:</h3>
                <hr>
                
                    <section id="calendario">
                         <?php 
                                include "./formulario/Calendario.php";
                         ?> 
                        
                    </section>

            </div>
            
            <!-- ---------------------------------- Coluna Direita---------------------------------------- -->
            <div class="col-sm">
                    <h3>Controle de Sala de Aula:</h3>
                <hr>
             <!-- Cadastrar Reserva -->
                        <div>
                            <button type="button" class="botao btn btn-info btn-block" data-toggle="modal" data-target="#myModalReserva" > Cadastrar Reserva</button>

                            <div id="myModalReserva" class= "modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                             <?php 
                                                   include "formulario/CadastrarReserva.php";
                                             ?> 
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-default" type="button" data-dismiss="modal"> Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                <br>
                <!-- Cadastrar Sala de Aula -->
                        <div>
                            <button type="button" class="botao btn btn-info btn-block" data-toggle="modal" data-target="#myModalReserva" > Cadastrar Sala de Aula</button>

                            <div id="myModalReserva" class= "modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                             <?php 
                                                   include "formulario/CadastrarReserva.php";
                                             ?> 
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-default" type="button" data-dismiss="modal"> Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> 

            </div>    
            
        </div>
     </div>
    <br>
    
    <?php 
    
            include "template/rodape.php";
    ?>
    

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script src="_css/bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    
        
</body>

</html>