<?php
session_start();
require_once("conexao.php");

// Verifica se o usuário está logado
if (!isset($_SESSION["cpf"])) {
    header("Location: processarLogin.php");
    exit();
}

// Consulta os animais cadastrados pelo usuário
$cpfUsuario = $_SESSION["cpf"];
$sql = "SELECT * FROM animais WHERE cpf_usuario = '$cpfUsuario'";
$resultado = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["excluir"])) {
    $animalId = $_POST["excluir"];

    // Excluir o animal selecionado
    $sqlExcluir = "DELETE FROM animais WHERE id = '$animalId' AND cpf_usuario = '$cpfUsuario'";
    $conn->query($sqlExcluir);

    $_SESSION['msg_ok'] = "Animal excluído com sucesso!";
    header("Location: meusAnimais.php");
    exit();
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>INICIO</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="meusAnimais.css">
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
                      <div class="tela">
    <h1>Cadastro de Animais para Doação</h1>
    <form action="processarAnimais.php" method="POST" enctype="multipart/form-data">
        <label for="nome">Nome do animal:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="especie">Espécie:</label>
        <select id="especie" name="especie" required>
            <option value="">Selecione uma espécie</option>
            <option value="Cachorro">Cachorro</option>
            <option value="Gato">Gato</option>
            <option value="Pássaro">Pássaro</option>
            <option value="Peixe">Peixe</option>
            <option value="Tartaruga">Tartaruga</option>
            <option value="Coelho">Coelho</option>
            <option value="Cobra">Cobra</option>
            <option value="Outra">Outra</option>
        </select><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <label for="raca">Raça:</label>
        <input type="text" id="raca" name="raca" required><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" placeholder="Descreva se o seu animal é dócil se é vacinado o seu comportamento." name="descricao" required></textarea><br><br>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

        <input type="submit" value="Cadastrar">
        <?php
        if(isset($_SESSION['msg_ok'])){
              echo $_SESSION['msg_ok'];
              unset($_SESSION['msg_ok']);
            }
          ?>
    </form>
   
    <h2>Animais Cadastrados</h2>
    <?php
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "<div class='lista_animal'>";
            echo "<p>Nome: " . $row["nome_pet"] . "</p>";
            echo "<p>Espécie: " . $row["especie"] . "</p>";
            echo "<p>Idade: " . $row["idade"] . "</p>";
            echo "<p>Raça: " . $row["raca"] . "</p>";
            echo "<p>Descrição: " . $row["descricao"] . "</p>";
            echo "<img src='" . $row["foto"] . "' alt='Foto do Animal'>";
            echo "<form action='' method='post'>";
            echo "<input type='hidden' name='excluir' value='" . $row["id"] . "'>";
            echo "<button type='submit'>Excluir</button>";
            echo "</form>";
            echo "</div>";
            echo "<hr>";
        }
    } else {
        echo "<p>Nenhum animal cadastrado.</p>";
    }
    ?>

                </div>
</body>
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
</html>
    </body></html>