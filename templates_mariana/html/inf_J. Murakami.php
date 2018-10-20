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
        include "cabecalho.php";
    ?>


    <br>

    <div class="container">
        
            <div class="row">
                <div class="col-sm">

                    <article class="clrbox">
                        <section>
                            <h5> Jorge Hiroshi Murakami 2</h5>
                            <p>O curso conta com uma ampla estrutura, onde se destaca o Núcleo de Engenharia, composto por laboratórios de informática, Laboratório de Experimentos, Fábrica Integrada Modelo, todos equipados com o que há de mais moderno no mercado.</p>

                            <p>
                                O corpo docente, formado em sua grande maioria por mestres e doutores, garante a sólida formação dos alunos e a constante atualização do Projeto Pedagógico do curso. Outro importante diferencial é a possibilidade de participação em projetos multidisciplinares em andamento nas engenharias como: Projeto FHObots – projeto de futebol de robôs, Projeto de Energias Renováveis – projeto que estuda aerogeradores e painéis solares mais eficientes, Projeto Aerodesign – Projeto de implementação e controle de um aeromodelo, FHOBaja - veículo para competição nacional, e na Empresa Junior. Tais programas oferecem ao aluno a oportunidade de por em prática os conhecimentos adquiridos ao longo do curso, assim como de desenvolver o espírito empreendedor, por meio da participação em projetos multidisciplinares e desafiadores, com cenários similares aos encontrados nas mais modernas empresas.

                            </p>
                            
                            <div class="col-sm-">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="_img\nucleo\lab_exp.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="_img\nucleo\lab_comp.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="_img\nucleo\oficina.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
                                </div>
                            </div>


                        </section>
                    </article>

                </div>



            </div>


            <div class="col-sm">


                <div id="myModalLogin" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-body">
                                <?php 
                                                include "login.php";
                                             ?>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" data-dismiss="modal"> Close</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!--
            <div class="col-sm">  
                <?php 
                    include "carrosel.php";
                ?>       
            </div>
            -->
        </div>
        <br>
    
    <?php 
            include "rodape.php";
    ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="_css/bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>

</html>
