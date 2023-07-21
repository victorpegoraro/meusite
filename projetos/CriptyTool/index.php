<?php require('function.php'); ?>
<!DOCTYPE html>
<html>
<head>

  <title>CriptyTool</title>
  <link rel="shortcut icon" href="title.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="w3.css">
  <script src="https://kit.fontawesome.com/2cad4882e2.js" crossorigin="anonymous"></script>
  
</head>
<body>
<header class="topbar"   >

    <a href='#home' class="itembar" style="float: left; display: block ;" > CriptyTool </a>

    <a href="#gerar" class="itembar">Gerar senha</a>
    <a href="#openssl" class="itembar">Openssl</a>
    <a href="#64" class="itembar" >Base64</a> 
    <a href="#md5" class="itembar"  >HASH</a>
       
    <span><button onclick="w3_open()" class="btnmenu"><i class="fas fa-bars"></i></button></span>
    
    
</header>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block sidebar" style="display:none ; background-color: #333 ; color: #F2E4BD ;" id="mySidebar">
    <button onclick="close_sidebar()" class="w3-bar-item w3-large w3-button" style="color: #12E0F9 ;" > Menu <span style="float: right;" > X</span</button>
    <button onclick="w3_close('#md5')" class="w3-bar-item w3-large w3-button">Hash</button>
    <button onclick="w3_close('#64')" class="w3-bar-item w3-large w3-button">Base64</button>
    <button onclick="w3_close('#openssl')" class="w3-bar-item w3-large w3-button">OpenSSl</button>
    <button onclick="w3_close('#gerar')" class="w3-bar-item w3-large w3-button">Gerar senha</button>
    
    
    
</div>

  <div class="container">
      <div id="home" class="w3-row" style="padding-top: 90px;">
        <div class="w3-half" >
          <img src="img1.png" style="width: 100%; height: 100% ;">
        </div>
        <div class="w3-half">
            <h2>O que é criptografia ?</h2>
            <br>
            <p>Criptografia ou criptologia (em grego: kryptós, "escondido", e gráphein, "escrita")
              é o estudo e prática de princípios e técnicas para comunicação segura na presença de 
              terceiros, chamados "adversários". Mas geralmente, a criptografia refere-se à construção 
              e análise de protocolos que impedem terceiros, ou o público, de lerem mensagens privadas. 
              Muitos aspectos em segurança da informação, como confidencialidade, integridade de dados, 
              autenticação e não-repúdio são centrais à criptografia moderna. A criptografia moderna existe 
              na interseção das disciplinas de matemática, ciência da computação, engenharia elétrica, 
              ciência da comunicação e física. Aplicações de criptografia incluem comércio eletrônico, 
              cartões de pagamento baseados em chip, moedas digitais, senhas de computadores e comunicações 
              militares.
            </p>
        </div>

        </div>
        <hr>
        <div id=md5 class="w3-row" style="padding-top: 90px;" >
          <div class="w3-half" >
            <h2>O que são hashs ?</h2>
                <br>
                <p>Uma função de hash criptográfico, muitas vezes é conhecida simplesmente como hash – 
                  é um algoritmo matemático que transforma qualquer bloco de dados em uma série de caracteres de comprimento fixo. 
                  Independentemente do comprimento dos dados de entrada, o mesmo tipo de hash de saída será sempre um valor hash do mesmo comprimento.
                  <br><br>
                  As funções de hash criptográficas também são usadas ​​para garantir uma coisa chamada integridade da mensagem. Em outras palavras, 
                  você pode garantir que alguma comunicação ou um arquivo não seja adulterado através de uma examinação dos has criados antes e depois da 
                  transmissão de dados. Se os dois hash são idênticos, então a transmissão é autêntica, significando que não houve adulteração.
                </p>
          </div>
          <div class="w3-half" >
            <h4>Gerar Hashes</h4>
              <form action="index.php#md5" method="post">
                <div class="form-group">
                  <textarea class="form-control box" rows="5" name="texto" placeholder="Insira seu texto..."></textarea>
                </div>
                <?php
                  if(isset($_POST['gerar'])){

                    $md5 = md5($_POST['texto']);
                    $ripemd160 = hash('ripemd160', $_POST['texto']);
                    $sha1 = hash('sha1', $_POST['texto']);
                    $sha256 = hash('sha256', $_POST['texto']);
                    $gost = hash('gost', $_POST['texto']);

                    echo "<div style='word-wrap: break-word;' > ";
                    echo "<b>MD5:</b> {$md5} <br><br>" ;
                    echo "<b>Ripemd160:</b> {$ripemd160} <br><br>" ;
                    echo "<b>GOST:</b>{$gost} <br><br>" ;
                    echo "<b>SHA1:</b> {$sha1} <br><br>" ;
                    echo "<b>SHA256:</b>{$sha256} <br>" ;
                    echo "</div> ";
                  }
                ?>
                <div align="center" class="form-group">
                  <input type="submit" name="gerar" class="gerar" value="Gerar Hash">
                </div>
              </form>
          </div>
          
        </div>
        <hr>
        <div id='64' class="w3-row" style="padding-top: 90px;" >
          <div align="center" class="w3-half" >
            <img src="img02.png" style="width: 100%; height: 100% ;">
          </div>
          <div align="center" class="w3-half" >
            <h2>Criptografia Base64</h2>
              <br>
              <p>Base64 é um algoritmo de codificação (encoding) que permite transformar qualquer caractere de qualquer idioma em um alfabeto que consiste em letras latinas, 
                dígitos e sinais. Com isso podemos converter caracteres especiais como os logogramas chineses, emoji e até imagens em uma sequência “legível” 
                (para qualquer computador), que pode ser salvo e/ou transferido para qualquer outro lugar. É utilizado frequentemente para transmitir dados binários 
                por meio de transmissões que lidam apenas com texto, como, por exemplo, para enviar imagens e arquivos em anexo por e-mail.
              </p>
          </div>
        </div>

        <div class="w3-row" style="padding-top: 40px;" >
          <div align="center" class="w3-half" >
            <h4>Base 64 Encode</h4>
            <form action="index.php#64" method="post">
              <div class="form-group">
                <textarea class="form-control box" rows="5" name="base64encode" placeholder="Insira seu texto..."></textarea>
              </div>
              <?php

                  if(isset($_POST['encode'])){

                    $resb64 = base64_encode($_POST['base64encode']);
                  
                    echo "<p>Codigo: <br> {$resb64} </p>" ;

                  }
              
              ?>
              <div align="center" class="form-group">
                <input type="submit" name="encode" class="gerar" value="Codificar">
              </div>
            </form>
          </div>

          <div align="center" class="w3-half" >
            <h4>Base 64 Decode</h4>
            <form action="index.php#64" method="post">
              <div class="form-group">
                <textarea class="form-control box" rows="5" name="base64decode" placeholder="Insira seu texto..."></textarea>
              </div>
              <?php

                  if(isset($_POST['decode'])){

                    $resb64 = base64_decode($_POST['base64decode']);
                  
                    echo "<p>Resultado: <br> {$resb64} </p>" ;

                  }
              
              ?>
              <div align="center" class="form-group">
                <input type="submit" name="decode" class="gerar" value="Decoodificar">
              </div>
            </form>
          </div>

        </div>
        <hr>
        <div id='openssl' class="w3-row" style="padding-top: 40px;" >
          <div align="center" class="w3-col s12" >
            <h1>OpenSSl</h1>
          </div>
        </div>
        <div class="w3-row" style="padding-top: 40px;" >
          <div align="center" class="w3-half" >

            
            <p>Codifique seu texto com uma senha usando openssl</p>
            <form action="index.php#openssl" method="post">

                  <input type="pwd" name="pass" id="" placeholder="Senha" class="form-control box" >
                  <br>
                  <textarea class="form-control box" rows="5" name="textssl" placeholder="Insira seu texto..."></textarea>
                  <input type="submit" name="decode" class="gerar" value="Codificar">
            </form>
            <?php
                if(isset($_POST['textssl'])){

                $codigo = encrypt_msg($_POST['textssl'], $_POST['pass']);

                echo "<p>Resultado: <br> {$codigo} </p>" ;

              }
            ?>

          </div>
          <div align="center" class="w3-half" >

            <p>Decodifique seu texto com uma senha usando openssl</p>
            <form action="index.php#openssl" method="post">

                  <input type="pwd" name="pass2" id="" placeholder="Senha" class="form-control box" >
                  <br>
                  <textarea class="form-control box" rows="5" name="textssl2" placeholder="Insira seu texto..."></textarea>
                  <input type="submit" name="decode" class="gerar" value="Decodificar">
            </form>
            <?php
                if(isset($_POST['textssl2'])){

                $res = decrypy_msg($_POST['textssl2'], $_POST['pass2']);

                echo "<p>Resultado: <br> {$res} </p>" ;

              }
            ?>

          </div>
        </div>
        <hr>
        <div id='gerar' class="w3-row" style="padding-top: 40px;" >
          <div align="left" class="w3-col l4 s12" >
            <h1>Gerar senha</h1>
              <form action="index.php#gerar" method="post">

              <input type="number" name="number" min='1' placeholder="Números de caracteres" class="form-control box"  ><br>
              <input type="checkbox" name="mai" >
              <label for="mai"> Maiúsculas</label><br>
              <input type="checkbox" name="min" >
              <label for="min"> Minusculas</label><br>
              <input type="checkbox" name="num" >
              <label for="num"> Números</label><br>
              <input type="checkbox" name="sim" >
              <label for="sim"> Símbolos</label><br><br>
              <input type="submit" name='gen' value="GERAR" class="gerar" >

              </form>

              <?php

              if(isset($_POST['gen'])){

                if(isset( $_POST['mai'] )){
                  $mai = true;
                }else{ $mai = false; }
                if(isset( $_POST['min'] )){
                  $min = true;
                }else{ $min = false; }
                if( isset($_POST['sim']) ){
                  $sim = true;
                }else{ $sim = false; }
                if(isset( $_POST['num'] )){
                  $num = true;
                }else{ $num = false; }

                echo  "<br>Senha : " . gerar_senha( $_POST['number'] , $mai, $min, $num, $sim);

              }

              
              ?>

          </div>
        </div>

      </div>
    </div>
  </div>
<hr>
</div>


<footer style="background-color: #333 ; color: white;  left: 0; bottom: 0; width: 100% ; height: 45px ;" >
  <span style="position: relative ;  top: 13px ;left: 8px ;" >Desenvolvido por Victor Pegoraro</span>
</footer>

<script>

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function close_sidebar() {
  document.getElementById("mySidebar").style.display = "none";
}

function w3_close(section) {
  document.getElementById("mySidebar").style.display = "none";
  location.href= section;
}



</script>


</body>
</html>
