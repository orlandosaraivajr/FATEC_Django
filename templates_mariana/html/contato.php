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
                        <h5>Campus Dra. Duse Rüegger Ometto</h5>
                        <p> O curso de Engenharia conta com os seguintes prédios disponíveis:</p>
                        <ul>
                            <li>Prédio "Dr. Sérgio Roberto Ieda"</li>
                            <li>Prédio "Jorge Hiroshi Murakami"</li>
                            <li>Prédio "Jorge Hiroshi Murakami 2 "</li>
                            
                        </ul>
                    </section>
                </article>

            </div>
            
            <div class="col-sm">

                <article class="clrbox">
                    <section>
                        <h5>Fundação Hermínio Ometto</h5>
                        <p> Av. Dr. Maximiliano Baruto, 500 </p>
                        <p> Jd. Universitário | Araras - SP </p>
                        <p> CEP: 13607-339 </p>
                        <p> (19) 3543-1400 </p>
                        
                    </section>
                </article>

            </div>
            
             <div class="col-sm">
                  <button type="button" class="botao btn btn-info btn-block" data-toggle="modal" data-target="#myModalLogin"> Área Restrita</button>
                        
                        <div id="myModalLogin" class= "modal fade" role="dialog">
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
    </div>
    <?php 
            include "rodape.php";
    ?>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script src="_css/bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    
</body>

</html>
