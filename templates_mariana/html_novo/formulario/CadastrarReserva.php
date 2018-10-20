<!doctype html>
<html lang="pt-br">

  <head>
      <title>Formulário</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" type="text/css" href="../_css/Estilo.css" crossorigin="anonymous" title="bog standard">
    <link rel="stylesheet" type="text/css" href="../_css/bootstrap/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  </head>

  <body>
      
      <div class="container">
        
            <h3> Reserva de Sala de Aula</h3>
          
          <br>
          <!-- formulário de cadastro de pessoa-->
          <form id="formExemplo" data-toggle="validator" role="form" method="post" action="#">
              <!--Nome e sobrenome -->
              <div class="form-row">
                <div class="col">
                <label for="inputEmail4">Primeiro Nome</label>
                  <input type="text" name="nome" class="form-control" placeholder="Primeiro Nome">
                </div>
                <div class="col">
                    <label for="inputEmail4">Último Nome</label>
                  <input type="text" name="sobrenome" class="form-control" placeholder="Último Nome">
                </div>
              </div>
              
              <br>
              
              <!-- E-mail e Senha -->
              <div class="form-row">
                <label for="inputEmail4">E-mail</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              
              <br>
              
              <!-- Nome da Turma e Data -->
           
                <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">Data para Reservar: </label>
                      <input type="date" name="validade" class="form-control" id="inputDate" placeholder="Data"> 

                  </div>

                  <div class="form-group col-md-6">
                      <label for="inputAddress">Turma</label>
                      <select type="text" name="turma" class="form-control" id="exampleFormControlTextarea1" placeholder="Turma">                     
                            <option selected>Selecionar...</option>
                            <option>Eng. da Computacao</option>
                            <option>Eng. Mecânica</option>
                      </select>
                      
                  </div>
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3" placeholder="Descreva sua solicitação!"></textarea>
              </div>
        
              <button name="reservar" type="submit" class="btn btn-primary">Reservar</button>
          </form>
           <?php
                cadReserva();
            ?>
      </div>
        
      
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../_css/bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

  </body>

</html>