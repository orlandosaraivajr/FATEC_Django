
<!doctype html>
<html lang="pt-br">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" type="text/css" href="../_css/Estilo.css" crossorigin="anonymous" title="bog standard">
    <link rel="stylesheet" type="text/css" href="../../_css/bootstrap/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">
        <h3>Cadastrar Aluno</h3>
        
         <br>
          <!-- formulário de cadastro de pessoa-->
           <form id="formExemplo" data-toggle="validator" role="form" method="post" action="#">
               
               <!-- NOME -->
                <div class="form-group">
                    <label for="textNome" class="control-label"> *Nome </label>
                        <input name="nome" id="textNome" class="form-control" placeholder="Digite o seu nome..." required>
                </div>
               
                         
                <!-- CPF -->
               <div class="form-row">
                 <div class="form-group col-md-6">
                  <label for="inputCPF" class="control-label"> *CPF </label>
                        <input type="text" name="cpf" maxlength="11" id="inputCPF" class="form-control" placeholder="Digite o seu CPF..." required>
                     
                     <p style="font-size: 11px;">* Insira somente os números</p>
                   </div>
                   
                  <div class="form-group col-md-6">
                     <label for="inputRG" class="control-label"> *RG </label>
                        <input type="text" name="rg" maxlength="9" id="inputRG" class="form-control" placeholder="Digite o seu RG..." required>
                     
                     <p style="font-size: 11px;">* Insira somente os números</p>
                      
                  </div>
              </div>
               
               
               <!-- EMAIL -->
                 <div class="form-group">
                    <label for="inputEmail" class="control-label"> *Email </label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Digite o seu e-mail..." required>
                </div>
                              
               
                <!-- Endereço -->
                
                <div class="form-group">
                    <label for="inputAddress">*Endereço</label>
                        <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Digite o seu endereço...">
                </div>
               <!-- -->
                <div class="form-row">
                    
                <!-- NUMERO-->
                    <div class="form-group col-md-3">
                        <label for="inputZip">Número</label>
                        <input type="text" name="numero" class="form-control" id="inputZip">
                    </div>
                <!-- CIDADE -->
                    <div class="form-group col-md-5">
                        <label for="inputCity">Cidade</label>
                        <input type="text" name="cidade" class="form-control" id="inputCity">
                    </div>
                    
                 <!-- ESTADO -->
                    <div class="form-group col-md-4">
                        <label for="inputState">Estado</label>
                        <select id="inputState" name="estado" class="form-control">
                            <option selected>Selecionar...</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>RJ</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SC</option>
                            <option>SP</option>
                            <option>SE</option>
                            <option>TO</option>
                                                        
                        </select>
                </div>
                
              </div>
               
                 
           
                <div class="form-row">
                 
                 <!-- Tipo de Usuário -->
                 
                  <div class="form-group col-md-6">
                      <label for="inputAddress">Tipo de Usuário</label>
                      <select type="text" name="acesso" class="form-control" id="exampleFormControlTextarea1" placeholder="Turma">         
                            <option selected>Aluno</option>
                      </select>
                      
                  </div>
                    
                <!-- Nome da Turma e Data -->
                    
                  <div class="form-group col-md-6">
                      <label for="inputAddress">Turma</label>
                      <select type="text" name="turma" class="form-control" id="exampleFormControlTextarea1" placeholder="Turma">                     
                            <option selected>Selecionar...</option>
                            <option>Eng. da Computacao</option>
                            <option>Eng. Mecânica</option>
                      </select>
                      
                  </div>
                    
              </div>
              
               
                <!-- Senha -->
                 
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputPassword" class="control-label"> *Senha </label>
                            <input name="senha"  type="password" id="inputPassword" class="form-control" placeholder="Digite a sua senha..." required>
                    </div>
                    
                    <div class="form-group col-md-6">
                      <label for="inputConfirmPassword" class="control-label"> * Confirme sua Senha </label>
                            <input name="confSenha" type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirme sua senha..." required>
                    </div>
                <button name="criacad" type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
               
            
            </form>
            <?php
                $acesso2 = $_POST['acesso'];
                
                if ($acesso2 == 'Aluno')
                {
                    cadastrar();
                }
             ?>
      </div>
        
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../_css/bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

  </body>

</html>    

