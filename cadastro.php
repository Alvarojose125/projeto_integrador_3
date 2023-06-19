<?php 
session_start();

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>INICIO</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="cadastro.css">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link rel="shortcut icon" href="images/ADOTE.ME.png" type="image/x-icon">
    <meta name="generator" content="Nicepage 5.6.2, nicepage.com">

</head>
<body data-home-page="Página-1.html" data-home-page-title="Página 1" class="u-body u-xl-mode" data-lang="pt"><header class="u-clearfix u-header u-header" id="sec-5191"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
          <a href="index.php" class="u-image u-logo u-image-1">
          <img src="images/ADOTE.ME.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="menu u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">INICIO</a>
              </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="imprimir.php" style="padding: 10px 20px;">ANIMAIS DISPONIVEIS</a></li>
              <li class="u-nav-item">
                    <script>
                    function changePage(page) {
                      window.location.href = page;
                    }
                    </script>

                    <select onchange="changePage(this.value)">
                      <option value="#">LOGIN/CADASTRO</option>
                      <option value="login.php">Login</option>
                      <option value="cadastro.php">Cadastro</option>
                    </select>
                  </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="sobre.php" style="padding: 10px 20px;">SOBRE</a>
              </li>
              <div class="menu_oculto">
              <li  >
                           <?php
                            

                            if (isset($_SESSION['nome'])) {
                              echo $_SESSION['nome'];
                              
                              }
                          ?>
              </li>
              <li>
                               <?php
                                if (isset($_SESSION['link_oculto'])) {
                                  echo $_SESSION['link_oculto'];
                                }
                                
                              ?>
              </li>
              <li>
                <?php
                                if (isset($_SESSION['sair'])) {
                                  echo $_SESSION['sair'];
                                }
                              ?>
                
              </li>
              </div>
            </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-90 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Página Inicial</a></li>
                <li class="u-nav-item1">
                  <?php if (!empty($_SESSION['nome'])) { ?>
                    <a class="u-button-style u-nav-link" href="index.php"><?php echo $_SESSION['nome']; ?></a>
                  <?php } ?>
                </li>
                <li class="u-nav-item1">
                  <?php if (!empty($_SESSION['link_oculto'])) { ?>
                    <a class="u-button-style u-nav-link" href="index.php"><?php echo $_SESSION['link_oculto']; ?></a>
                  <?php } ?>
                </li>
                <li class="u-nav-item1">
                  <?php if (!empty($_SESSION['sair'])) { ?>
                    <a class="u-button-style u-nav-link" href="index.php"><?php echo $_SESSION['sair']; ?></a>
                  <?php } ?>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="imprimir.php">ANIMAIS DISPONIVEIS</a></li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="cadastro.php">CADASTRO</a></li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.php">LOGIN</a></li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="sobre.php">SOBRE</a></li>
                </ul>

              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header>
    <div class="formulario">
              <!--FORMULÁRIO DE CADASTRO-->
        <div class="cadastro">
          <form method="post" action="processar.php"> 
            <h1>Cadastro</h1> 
             
            <p> 
              <label for="nome_cad">Seu nome</label>
              <input id="nome_cad" name="nome" required="required" type="text" placeholder="Nome">
            </p>
  
            <p> 
              <label for="nome_cad">Seu sobrenome</label>
              <input id="nome_cad" name="sobrenome" required="required" type="text" placeholder="Sobrenome">
            </p>
  
            <p> 
              <label for="nome_cad">seu CPF ou CNPJ</label>
              <input id="nome_cad" name="cpf" required="required" type="text" placeholder="CPF ou CNPJ">
            </p>
            
            <p> 
              <label for="nome_cad">Informe seu CEP</label>
              <input id="nome_cad" name="cep" required="required" type="number" placeholder="informe seu cep">
            </p>
            <p> 
              <label for="nome_cad">Informe nome da rua</label>
              <input id="nome_cad" name="rua" required="required" type="text" placeholder="Informe nome da rua">
            </p>
            <p> 
              <label for="nome_cad">Informe seu bairro</label>
              <input id="nome_cad" name="bairro" required="required" type="text" placeholder="Informe seu bairro">
            </p>
            <p> 
              <label for="nome_cad">Informe sua cidade </label>
              <input id="nome_cad" name="cidade" required="required" type="text" placeholder="Informe sua cidade">
            </p>
            <p> 
              <label for="nome_cad">Informe seu estado</label>
              <input id="nome_cad" name="estado" required="required" type="text" placeholder="Informe seu estado">
            </p>
  
            <p> 
              <label for="nome_cad">número de telefone</label>
              <input id="nome_cad" name="telefone" required="required" type="text" placeholder="numero de telefone">
            </p>
  
            <p> 
              <label for="email_cad">Informe seu e-mail</label>
              <input id="email_cad" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"> 
            </p>
             
            <p> 
              <label for="senha_cad">Crie uma senha</label>
              <input id="senha_cad" name="senha" required="required" type="password" placeholder="ex. 1234">
            </p>
             
            <p> 
              <label for="senha_cad">Repetir a senha</label>
              <input id="senha_cad" name="senharep" required="required" type="password" placeholder="ex. 1234">
            </p>
  
            <p> 
              <input type="submit" value="Cadastrar" name="submit"> 
            </p>
            <div id="container_msg">
             <?php
            if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            }
          ?>
            <p class="link">  
              Já tem conta?
              <a href="login.php"> Ir para Login </a>
            </p>
          
        </div></form>
      </div>
    </div>  
  
  </div>
  </div>
  </div>
  <footer>
  <section class="footer">
    <div class="rodape">
      <h6>Endereço:BR-101 Norte, Km 43,6 (ao lado da Unilever), Igarassu - PE</h6>
      <h6>Todos os direitos reservados ©</h6>
      <a href="https://www.facebook.com/adoteme.net/"><img src="images/facebook.png" alt="icone do facebook"></a>
      <a href="https://www.instagram.com"><img src="images/instagram.png" alt="icone do instagram"></a>
      <a href="https://twitter.com/"><img src="images/twitter.png" alt="icone do twitter"></a>
      <a href="https://br.linkedin.com"><img src="images/linkedin.png" alt="icone do linkedin"></a>
      <h6>Fone:40028922</h6>

    </div>

  </section>
</footer>

    
</body></html>