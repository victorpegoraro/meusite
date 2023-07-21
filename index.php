<?php require_once('config.php');

$data_inicial = '2019-06-01'; 
$data_final= date("Y-m-d");
$diferenca = strtotime($data_final) - strtotime($data_inicial);
$dias = floor($diferenca / (60 * 60 * 24)); 

$anos = date("Y") - 2018;
$horashack = $dias * 1;
$horasdev = $dias * 5 ;
$linhas = $horasdev * 60 ;

?>
<!DOCTYPE html>
<html lang='pt-br'>

<head>

    <title>Victor Pegoraro</title>
    <meta name="description" content="Victor Pegoraro - Programador e Pentester">
    <link rel="icon" type="image/x-icon" href="imgs/vp.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="w3.css">

    <script src="https://kit.fontawesome.com/2cad4882e2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--
    <meta http-equiv="Content-Security-Policy" content="script-src 'none'">
    -->
</head>
<body id="particles-js" >
<script src="particles.min.js"></script>
<script>
    particlesJS("particles-js", {"particles":{"number":{"value":71,"density":{"enable":true,"value_area":789.1476416322727}},"color":{"value":"#43c262"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"grab"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":false});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>

<div class='page' >

<header class="topbar container"   >
    <span ><img src='imgs/vp.webp' class="logo" onclick="javascript:location.href='#home'" alt='Logo' > </span>

    <a href="#contato" class="btncontato" rel="noopener" >contato</a>
    <a href="#projetos" class="itembar" style="margin-right: 3% ;" rel="noopener" >projetos</a>    
    <a href="#servicos" class="itembar" rel="noopener" >serviços</a>
    <a href="#habilidades" class="itembar" rel="noopener" >habilidades</a>
    <a href="#sobre" rel="noopener" class="itembar">sobre</a>
    <span><button onclick="w3_open()" class="btnmenu" aria-label="Fechar" ><i class="fas fa-bars"></i></button></span>
    
    
</header>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block sidebar" style="display:none ; background-color: #333 ; color: #F2E4BD ;" id="mySidebar">
    <button onclick="close_sidebar()" class="w3-bar-item w3-large w3-button" style="color: #43C262 ;" > Menu <span style="float: right;" > X</span</button>
    <button onclick="w3_close('#sobre')" class="w3-bar-item w3-large w3-button">Sobre</button>
    <button onclick="w3_close('#habilidades')" class="w3-bar-item w3-large w3-button">Habilidades</button>
    <button onclick="w3_close('#servicos')" class="w3-bar-item w3-large w3-button">Serviços</button>
    <button onclick="w3_close('#projetos')" class="w3-bar-item w3-large w3-button">Projetos</button>
    <button onclick="w3_close('#contato')" class="w3-bar-item w3-large w3-button">Contato</button>
</div>


<section id='home' class="container section1"  >
    <div class="w3-row">
        <div class="w3-col l8 s12" >
            <span class="ola" >[ Olá, meu nome é ]</span><br>
            <span class="nome digitando" >Victor Pegoraro</span><br>
            <span style="color: #899299 ; font-size: 26px ;" ><?php echo  $anos ;  ?> anos como <b style="color: 43C262 ;" > < Programador e Pentester /> </b> </span><br>
            <br>
            <span style="color:  #d9d9d9 ; font-size: 17px ;" >
                Realizo serviços de segurança digital e desenvolvimento de software. 
                Me empenho diariamente para entregar alta qualidade em todos os projetos. 
            </span>
            <br><br><br>
            <button onclick="javascript:location.href='#sobre'" class="bannerbtn1" > Conheça minha trajetória </button>
            <button onclick="javascript:location.href='#servicos'" class="bannerbtn2" > Serviços oferecidos </button>
            <div style="margin-top: 100px ;" ></div>
        </div>
        <!--
        <div align='center' class="w3-col l5 imgbanner"  >
            <img alt='Foto' src="imgs/perfil1.webp" class="foto w3-card-4"  >
        </div>
        -->
    </div>

    <div id='sobre' class="w3-row" >

        <div class="w3-col l6 s12" style="margin-bottom: 25px;" >
            <!-- <span style="color: #43C262 ; font-size: 25px ;" > [ Minha trajetória ] </span><br>
            <br><br> -->
            <span class="tag1" > < Experiência e Qualidade /> </span><br>
            <br>
            <span style="color:  #d9d9d9 ; font-size: 17px ;" >
                Sou apaixonado por tecnologia e tudo que ela proporciona, 
                acredito que com meu trabalho posso ajudar as pessoas a alcançar seus objetivos de 
                forma mais simples e rápida com soluções tecnológicas, trazendo assim mais qualidade 
                e tempo pra suas vidas.
            </span>
            <br><br>
            <button onclick="javascript:location.href='#habilidades'" class="bannerbtn1" > Minhas habilidades </button>
        </div>
        <div  class="w3-col l6 s12">

            <div class="cardbig" style="border-bottom: 2px solid #43C262;" >
                
                <div class="w3-row" >
                    <div align='center' class="w3-col s4" >
                        <img alt='Horas hacking' src="imgs/horashacking.png" alt="Horas programando" style="margin-top: 15px;margin-bottom: 15px ;" >   
                    </div>
                    <div  class="w3-col s8" style="padding-top: 15px;" >
                        <span style="font-size: 20px;" >+<?php echo $horashack ?></span><br>
                        <span>// Horas de hacking </span>
                    </div>
                </div>
                    
            </div>
                

            <div  class="cardbig1" style="border-bottom: 2px solid #43C262;" >
                
                <div class="w3-row" >
                    <div align='center' class="w3-col s4" style="margin-top: 15px;margin-bottom: 15px ;" >
                        <img alt='Xicaras' src="imgs/xicaras.png" alt="Horas programando">   
                    </div>
                    <div  class="w3-col s8" style="padding-top: 15px; ;" >
                        <span style="font-size: 20px;" >+1337</span><br>
                        <span>// Xícaras de café </span>
                    </div> 
                </div>

            </div>

            <div  class="cardbig" style="border-bottom: 2px solid #43C262;" >
                
                <div class="w3-row" >
                    <div align='center' class="w3-col s4" style="margin-top: 15px;margin-bottom: 15px ;" >
                        <img alt='Horas dev' src="imgs/horasdev.png" alt="Horas programando">   
                    </div>
                    <div  class="w3-col s8" style="padding-top: 15px;" >
                        <span style="font-size: 20px;" >+<?php echo $horasdev ?></span><br>
                        <span>// Horas programando </span>
                    </div>
                </div>
                    
            </div>

            
            <div  class="cardbig1" style="border-bottom: 2px solid #43C262;" >
                
                <div class="w3-row" >
                    <div align='center' class="w3-col s4" style="margin-top: 15px;margin-bottom: 15px ;" >
                        <img alt='Linhas de código' src="imgs/linhascodigo.png" alt="Horas programando">   
                    </div>
                    <div  class="w3-col s8" style="padding-top: 15px;" >
                        <span style="font-size: 20px;" >+<?php echo $linhas ?></span><br>
                        <span>// Linhas de código </span>
                    </div> 
                </div>

            </div>


        </div>

    </div>
    
</section>

<section id='habilidades' class="container section2"  >

    <p style="text-align: center; margin-bottom: 30px ; font-size: 30px ; " > [ Habilidades ]</p>

    <div class="w3-row" >
        <div class="w3-col l3 s12" >
            <b style="font-size: 20px ; " > < Linguagens /> </b>
        </div>
        <div class="w3-col l9 s12" style="border-left: 2px solid gray ; padding-left: 20px ; " >
            <span>
                O potencial da programação é fantástico , e cada linguagem tem seu poder de construção
            </span>
        </div>
    </div>
    <br>
    <div align='center' class="w3-row" >
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img alt='Javascript' src="imgs/logojs.png" class="imgleng" >
            <br>JavaScript
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img alt='php' src="imgs/logophp.png" class="imgleng" >
            <br>PHP
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img alt='React' src="imgs/logoreact.png" class="imgleng" >
            <br>React Native
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img alt='SQL' src="imgs/logosql.png" class="imgleng" >
            <br>SQL
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img alt='Python' src="imgs/logopython.png" class="imgleng" >
            <br>Python
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img alt='Bash' src="imgs/bash-logo.png" class="imgleng" >
            <br>Bash
        </div>
    </div>
    <br><!--
    <div class="w3-row" >
        <div class="w3-col l3 s12" >
            <b style="font-size: 20px ; " > ( Frameworks ) </b>
            <br><br>
        </div>
        <div class="w3-col l9 s12" style="border-left: 2px solid gray ; padding-left: 20px ; " >
            <span>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan
            </span>
        </div>
    </div>
    <br>
    
    <div align='center' class="w3-row" >
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img src="imgs/ferramentas-metasploit.png" class="imgleng" >
            <br>JQuery
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img src="imgs/ferramentas-metasploit.png" class="imgleng" >
            <br>w3 css
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img src="imgs/ferramentas-metasploit.png" class="imgleng" >
            <br>Angular
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img src="imgs/ferramentas-metasploit.png" class="imgleng" >
            <br>Vue
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img src="imgs/ferramentas-metasploit.png" class="imgleng" >
            <br>Bootstrap
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img src="imgs/ferramentas-metasploit.png" class="imgleng" >
            <br>MetaSploit
        </div>
    </div>
    <br> -->
    <div class="w3-row" >
        <div class="w3-col l3 s12" >
            <b style="font-size: 20px ; margin-bottom: 20px ;" > { Ferramentas } </b>
            <br><br>
        </div>
        <div class="w3-col l9 s12" style="border-left: 2px solid gray ; padding-left: 20px ; " >
            <span>
                Para auxiliar na rotina, utilizo ferramentas para organização e produtividade
            </span>
        </div>
    </div>
    <br>
    <div align='center' class="w3-row" >
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img alt='SQLMap' src="imgs/sqlmap.png" class="imgleng" >
            <br>Sqlmap
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img alt='Burpsuit' src="imgs/burpsuite.png" class="imgleng" >
            <br>Burp Suit
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img alt='nmap' src="imgs/nmap.png" class="imgleng" >
            <br>Nmap
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img  alt='Metasploit'src="imgs/ferramentas-metasploit.png" class="imgleng" >
            <br>MetaSploit
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img alt='GitHub' src="imgs/git.png" class="imgleng" >
            <br>GitHub
        </div>
        <div class="w3-col l2 s6" style="margin-bottom: 20px;" >
            <img alt='Excel' src="imgs/ferramentas-excel.png" class="imgleng" >
            <br>Excel
        </div>
    </div>
    <br>
    <div class="w3-row" >
        <div class="w3-col l6 s12" >

            <b style="font-size: 20px ; " > { Sistemas operacionais } </b>
            <br><br>
            <span>
                Conhecimento em diferentes ambientes de desenvolvimento
            </span>

            <div align='center' class="w3-row" style="margin-top: 20px ;" >
                <div class="w3-col s4" style="margin-bottom: 20px;" >
                    <img alt='Windows' src="imgs/windows.webp" class="imgleng" >
                    <br>Windows
                </div>
                <div class="w3-col s4" style="margin-bottom: 20px;" >
                    <img alt='Linux' src="imgs/linux.webp" class="imgleng" >
                    <br>Linux
                </div>
                <div class="w3-col s4" style="margin-bottom: 20px;" >
                    <img alt='Kali' src="imgs/kali.webp" class="imgleng" >
                    <br>Kali linux
                </div>
            </div>

        </div>
        
        <div class="w3-col l6 s12" >

            <div class="certificados " >
                <div style="padding-top: 60px ;" >
                    <b class="numcert" >+ 40 Certificações</b>
                    <br>
                    <span>Apendizado é continuo , sempre estou melhorando minhas 
                        habilidades
                    </span>
                    <br><br><br>
                    <a rel="noopener" href='https://drive.google.com/drive/folders/1JyJ8BiIJSaDSWrocI7E_Fyb7htNlP8wA?usp=sharing' target="_black" class="btncertificados" >Conferir certificaçoes</a>
                </div>
            </div>

        </div>
    </div>
    <br>
    <div class="w3-row" >
        <div class="w3-col l12 s12" style="margin-top: 20px ;" >
            <b style="font-size: 20px ; " > { Plataformas de treino } </b>
            <br><br>
            <span style="float: left ;" >
                Sempre melhorando habilidades específicas
            </span>
        </div>
        <div align='center' class="w3-col l4 s12" style="margin-top: 20px ;" >

            <div style="background-color: #151C2A ; padding: 15px 25px ; border-radius: 5px ; margin-top: 15px ; cursor: pointer; " onclick="hackthebox()"  >
                <img src="https://app.hackthebox.com/images/logos/logo-htb.svg" height="78" width="90%" >
            </div>

        </div>
        <div align='center' class="w3-col l4 s12" style="margin-top: 20px ; cursor: pointer ;" onclick="codewars()" >

            <img src="https://www.codewars.com/packs/assets/logo.61192cf7.svg" width="60" height="60" width="90%" >
            <span><b>Code Wars</b></span>
            <br><br>
            <img src="https://www.codewars.com/users/victorpegoraro/badges/large" alt="Code Wars" width="90%" >

        </div>
        <div align='center' class="w3-col l4 s12" style="margin-top: 20px ;" >
            <div style="background-color: #151C2A ; padding: 15px 25px ; border-radius: 5px ; margin-top: 15px ; cursor: pointer; " onclick="codinggame()"  >
                <img src="imgs/codingame-logo.png" height="78" width="90%" >
            </div>
        </div>
        
    </div>

</section>

<section id='servicos' class="container section3" >

    <span class="ola" >[ Serviços ]</span><br><br>
    <!-- <span class="tag1" >< 3 pilares de atuação /></span><br> -->
    <span>
        Atualmente sou especializado em 3 campos de atuação relacionadas à área de programação tanto para app, 
        quanto para web e também atuo na área de segurança digital, através de testes de intrusão para avaliar 
        a segurança de um sistema ou rede.<br>
        <br>
        Nos cards abaixo você pode conferir cada um destes serviços e saber um pouco sobre eles.
    </span>

    <div class="w3-row-padding" style="margin-top: 50px ;" >
        <div class="w3-third">
            <div class="card-servico w3-card-4" >
                <img alt='Serviço 1' src="imgs/servicos-01.webp" class="imgservico" >
                <div class="card-conteudo" >
                    <b class="titulo-servico" >Desenvolvimento <br> web e aplicativo</b>
                    <br><br>
                    <span>
                        Desenvolvimento Full Stack de sistemas web e criação de aplicativos 
                    </span>
                    <br><br>
                    <span class="itens-servicos" ><i class="fas fa-check" style="color: #1A9866 ;" ></i> Sistemas online</span><br>
                    <span class="itens-servicos"><i class="fas fa-check" style="color: #1A9866 ;"></i> Criação de sites e lojas virtuais</span><br>
                    <span class="itens-servicos"><i class="fas fa-check" style="color: #1A9866 ;"></i> Aplicativos</span><br>
                    <br>
                    <div align='center' style="width: 100%;" >
                        <a rel="noopener" href='#contato' class="btnconversar" >Vamos conversar</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="w3-third">
            <div class="card-servico w3-card-4" >
                <img alt='Serviço 2'  src="imgs/servicos-02.webp" class="imgservico" >
                <div class="card-conteudo" >
                    <b class="titulo-servico" >Teste de intrusão de sistema (Pentest)</b>
                    <br><br>
                    <span>
                        Testes de vulnerabilidades para garantia da segurança, 
                        integridade e confiabilidade
                    </span>
                    <br><br>
                    <span class="itens-servicos" ><i class="fas fa-check" style="color: #1A9866 ;" ></i> Análise completa</span><br>
                    <span class="itens-servicos"><i class="fas fa-check" style="color: #1A9866 ;"></i> Configuração avançada</span><br>
                    <span class="itens-servicos"><i class="fas fa-check" style="color: #1A9866 ;"></i> Teste de vulnerabilidade</span><br>
                    <br>
                    <div align='center' style="width: 100%;" >
                        <a rel="noopener" href='#contato' class="btnconversar" >Vamos conversar</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="w3-third">
            <div class="card-servico w3-card-4" >
                <img alt='Serviço 3'  src="imgs/servicos-03.webp" class="imgservico" >
                <div class="card-conteudo" >
                    <b class="titulo-servico" >Automação empresarial</b>
                    <br><br>
                    <span>
                        Criação de robôs para automação de tarefas repetitivas e análiticas
                    </span>
                    <br><br>
                    <span class="itens-servicos" ><i class="fas fa-check" style="color: #1A9866 ;" ></i> Chatboot</span><br>
                    <span class="itens-servicos"><i class="fas fa-check" style="color: #1A9866 ;"></i> Criação de robos</span><br>
                    <span class="itens-servicos"><i class="fas fa-check" style="color: #1A9866 ;"></i> Sistemas para indústria</span><br>
                    <br>
                    <div align='center' style="width: 100%;" >
                        <a rel="noopener" href='#contato' class="btnconversar"  >Vamos conversar</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</section>

<section id='projetos' class="container section4" >

    <p style="text-align: center; margin-bottom: 30px ; font-size: 30px ; " > [ Projetos ]</p>

    <div class="w3-row-padding" style="margin-top: 50px ;" >
        <div class="w3-half">
            <div class="projetotela w3-card-4" >
                <span><i class="fas fa-circle" style="color: #FC5753; margin-left: 4px ;" ></i></span>
                <span><i class="fas fa-circle" style="color: #FDBD41;" ></i></span>
                <span><i class="fas fa-circle" style="color: #34c749;" ></i></span>
                <img alt='IP tool'  src="imgs/projeto-iptool.webp" class="projetoimg">
            </div>

        </div>
        <div class="w3-half">
            <div class="projetotext " >

                <b>Nome: </b><span>IP Tools</span><br>
                <b>Descrição: </b><span>Ferramenta online para análise e resoluções de domínios e IPs</span><br>
                <b>Tecnologias: </b><span>PHP, JS, W3css, CSS</span><br>
                <br>
                <a rel="noopener" href="projetos/IPTool/" class="btnprojeto" target="_blank" >Ver projeto <i class="fas fa-external-link-alt"></i></a>
             </div>
                
        </div>
    </div>

    <div class="w3-row-padding" style="margin-top: 50px ;" >
        <div class="w3-half">
            <div class="projetotela w3-card-4" >
                <span><i class="fas fa-circle" style="color: #FC5753; margin-left: 4px ;" ></i></span>
                <span><i class="fas fa-circle" style="color: #FDBD41;" ></i></span>
                <span><i class="fas fa-circle" style="color: #34c749;" ></i></span>
                <img alt='Cryptytool'  src="imgs/criptytool.webp" class="projetoimg">
            </div>

        </div>
        <div class="w3-half">
            <div class="projetotext " >

                <b>Nome: </b><span>CriptyTool</span><br>
                <b>Descrição: </b><span>Ferramentas de criptografia online</span><br>
                <b>Tecnologias: </b><span>PHP, JS, W3css, CSS</span><br>
                <br>
                <a rel="noopener" href="projetos/CriptyTool/" class="btnprojeto" target="_blank" >Ver projeto <i class="fas fa-external-link-alt"></i></a>
            </div>
                
        </div>
    </div>

    <div class="w3-row-padding" style="margin-top: 50px ;" >
        <div class="w3-half">
            <div class="projetotela w3-card-4" >
                <span><i class="fas fa-circle" style="color: #FC5753; margin-left: 4px ;" ></i></span>
                <span><i class="fas fa-circle" style="color: #FDBD41;" ></i></span>
                <span><i class="fas fa-circle" style="color: #34c749;" ></i></span>
                <img alt='XSS'  src="imgs/gitxss.webp" class="projetoimg">
            </div>

        </div>
        <div class="w3-half">
            <div class="projetotext " >

                <b>Nome: </b><span>XSS Scan</span><br>
                <b>Descrição: </b><span>Escaner de vulnerabilidade 'Cross Site Script - XSS'</span><br>
                <b>Tecnologia: </b><span>Python</span><br>
                <br>
                <a rel="noopener" href="https://github.com/victorpegoraro/XSS_Scan" class="btnprojeto" target="_blank"  >Ver projeto <i class="fas fa-external-link-alt"></i></a>
                
            </div>   
        </div>
    </div>

    <!-- MAis projetos -->

    <div class="w3-row-padding mais" style="margin-top: 50px ;" >
        <div class="w3-half">
            <div class="projetotela w3-card-4" >
                <span><i class="fas fa-circle" style="color: #FC5753; margin-left: 4px ;" ></i></span>
                <span><i class="fas fa-circle" style="color: #FDBD41;" ></i></span>
                <span><i class="fas fa-circle" style="color: #34c749;" ></i></span>
                <img alt='DOS Tool'  src="imgs/gitdostool.webp" class="projetoimg">
            </div>

        </div>
        <div class="w3-half">
            <div class="projetotext " >

                <b>Nome: </b><span>DOS Tool</span><br>
                <b>Descrição: </b><span>Ferramentas para testes de redes e servidores, usando ataques controlados</span><br>
                <b>Tecnologia: </b><span>Python</span><br>
                <br>
                <a rel="noopener" href="https://github.com/victorpegoraro/dos_tools" class="btnprojeto" target="_blank" >Ver projeto <i class="fas fa-external-link-alt"></i></a>
            </div>
                
        </div>
    </div>

    <div class="w3-row-padding mais" style="margin-top: 50px ;" >
        <div class="w3-half">
            <div class="projetotela w3-card-4" >
                <span><i class="fas fa-circle" style="color: #FC5753; margin-left: 4px ;" ></i></span>
                <span><i class="fas fa-circle" style="color: #FDBD41;" ></i></span>
                <span><i class="fas fa-circle" style="color: #34c749;" ></i></span>
                <img alt='Reverse shell'  src="imgs/gitreverse.webp" class="projetoimg">
            </div>

        </div>
        <div class="w3-half">
            <div class="projetotext " >

                <b>Nome: </b><span>Reverse shell</span><br>
                <b>Descrição: </b><span>Conjunto de programas para criação de acesso remoto para outro sistema</span><br>
                <b>Tecnologia: </b><span>Python</span><br>
                <br>
                <a rel="noopener" href="https://github.com/victorpegoraro/reverse_shell" class="btnprojeto" target="_blank"  >Ver projeto <i class="fas fa-external-link-alt"></i></a>
                
            </div>   
        </div>
    </div>

    <div class="w3-row-padding mais" style="margin-top: 50px ;" >
        <div class="w3-half">
            <div class="projetotela w3-card-4" >
                <span><i class="fas fa-circle" style="color: #FC5753; margin-left: 4px ;" ></i></span>
                <span><i class="fas fa-circle" style="color: #FDBD41;" ></i></span>
                <span><i class="fas fa-circle" style="color: #34c749;" ></i></span>
                <img alt='Mr Dog'  src="imgs/gitmrdog.webp" class="projetoimg">
            </div>

        </div>
        <div class="w3-half">
            <div class="projetotext " >

                <b>Nome: </b><span>MR Dog Miner</span><br>
                <b>Descrição: </b><span>Minerador de cripitomoedas local</span><br>
                <b>Tecnologia: </b><span>Python</span><br>
                <br>
                <a rel="noopener" href="https://github.com/victorpegoraro/MrDogMiner" class="btnprojeto" target="_blank"  >Ver projeto <i class="fas fa-external-link-alt"></i></a>
                
            </div>   
        </div>
    </div>

    <div class="w3-row-padding mais" style="margin-top: 50px ;" >
        <div class="w3-half">
            <div class="projetotela w3-card-4" >
                
                <span><i class="fas fa-circle" style="color: #FC5753; margin-left: 4px ;" ></i></span>
                <span><i class="fas fa-circle" style="color: #FDBD41;" ></i></span>
                <span><i class="fas fa-circle" style="color: #34c749;" ></i></span>
                <img alt='Snake Game'  src="imgs/projeto-snake.webp" class="projetoimg">
            
            </div>
        </div>
        <div class="w3-half">
            <div class="projetotext " >

                <b>Nome: </b><span>Snake Game</span><br>
                <b>Descrição: </b><span>Jogo clássico 'snake' para web</span><br>
                <b>Tecnologias: </b><span>HTML, CSS, JS</span><br>
                <br>
                <a rel="noopener" href="projetos/SnakeGame/" class="btnprojeto" target="_blank" >Ver projeto <i class="fas fa-external-link-alt"></i></a>
                
            </div>    
        </div>
    </div>

    <div align='center' style="width: 100%; padding-top: 20px ;" >
        <button id='btnmais1' class="bannerbtn2" ><i class="fas fa-plus"></i> Mais projetos </button>
        <button id='btnmais2' class="bannerbtn2" style="display: none;" ><i class='fas fa-minus'></i> Menos projetos </button>
    </div>

</section>

<section id='contato' class="section5 container"  >

    <div class="w3-row" >
        <div class="w3-col l6 s12" >
            <span class="ola" >[ Contato ]</span>
            <br><br>
            <span style="color: #F2F2F2 ; font-size: 40px ; " >Posso ajudar seu projeto a sair do papel. Entre em contato!</span><br>
            <br>
            <span style="font-size: 20px; color: #B4BEDC ; " >
                Para entrar em contato é bem simples, 
                basta preencher os campos do formulário 
                ou basta me seguir e chamar nas redes sociais
            </span><br>
            <br>
            <div class="w3-row" >
                <div class="w3-col l6 s12" >
                
                    <div class="w3-row social" onclick="window.open('https://github.com/victorpegoraro', '_blank')" >

                        <div class="w3-col s2 "  >
                            <i class="fab fa-github-square fa-3x"  ></i>
                        </div>
                        <div class="w3-col s10 " >
                            <span> Github <br> /victorpegoraro </span>
                        </div>

                    </div>

                </div>
                <div class="w3-col l6 s12" >
                
                    <div class="w3-row social" onclick="window.open('https://www.linkedin.com/in/victor-pegoraro-770bb6157/', '_blank')" >

                        <div class="w3-col s2"  >
                        <i class="fab fa-linkedin fa-3x"></i>
                        </div>
                        <div class="w3-col s10 " >
                            <span> Linkedin <br> /victorpegoraro </span>
                        </div>

                    </div>

                </div>
            </div>
            <div class="w3-row" >
                <div class="w3-col l6 s12" >
                
                    <div class="w3-row social" onclick="sendemail()"  >

                        <div class="w3-col s2" >
                        <i class="fas fa-envelope fa-3x"></i>
                        </div>
                        <div class="w3-col s10" >
                            <span> Email <br> /v.pegoraro@protonmail.com </span>
                        </div>

                    </div>

                </div>
                <div class="w3-col l6 s12" >
                
                    <div class="w3-row social" style="color: #25D366;" onclick="whatsapp()" >

                        <div class="w3-col s2"  >
                        <i class="fab fa-linkedin fa-3x"></i>
                        </div>
                        <div class="w3-col s10" >
                            <span> Whatsapp <br> /victorpegoraro </span>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <div class="w3-col l6 s12" style="color: whitesmoke;" >
            <?php display_msg(); ?>
            <!--
            <form action="sendemail.php" method="post">
                <div class='w3-row-padding' >
                    <div class='w3-half' >
                        <span>Nome</span><br><br>
                        <input type="text" name="nome" id="" placeholder="EX: Victor Pegoraro" class="input" required >
                    </div>
                    <div class='w3-half' >
                        <span>Email</span><br><br>
                        <input type="mail" name="email" id="" placeholder="EX: v.pegoraro@protonmail.com" class="input" required >
                    </div>
                </div>
                <div class='w3-row-padding' >
                    <div class='w3-half' >
                        <span>Telefone</span><br><br>
                        <input type="tel" name="tel" id="" placeholder="(xx) xxxxx-xxxx" class="input" required >
                    </div>
                    <div class='w3-half' >
                        <span>Assunto</span><br><br>
                        <input type="texto" name="assunto" id="" placeholder="EX: Desenvolvimento de site" class="input" required >
                    </div>
                    <div class='w3-col s12'   >
                        <span>Mensagem</span><br><br>
                        <textarea style="padding: 5px;" name="texto" rows="5" class='input' placeholder="Sua mensagem" required >

                        </textarea>
                        <input type="submit" value="ENVIAR" class="btnenviar" >
                    </div>
                </div>
            </form>
            -->
        </div>

    </div>

</section>

<footer class='rodape' >
    <div class="colrodape" >
        <span><img alt='Logo'  src="imgs/vp.webp" width="32px" height="32px" ></span>
        <span style="margin-left: 10px ; margin-top: 12px ;" >Victor Pegoraro</span>
    </div>
    <div class="colrodape" >
        <span class="copy" >© Copyright - Todos os direitos reservados</span>
    </div>
</footer>

</div>

<script>

$(document).ready(function(){

$("#btnmais1").click(function(){
    $(".mais").fadeToggle(2000);
    $("#btnmais1").hide();
    $("#btnmais2").show();
});

$("#btnmais2").click(function(){
    $(".mais").fadeToggle();
    $("#btnmais2").hide();
    $("#btnmais1").show();
});

$("#closemsg").click(function(){
  $(".msg").hide();
});

});

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
function mais_projetos() {
  document.getElementsByClassName("mais").style.display = "block";
}

function sendemail() 
{
    window.location = "mailto:v.pegoraro@protonmail.com";
}

function NewTab(url) {
 window.open(url, '_blank').focus();
}

function whatsapp() {
 window.open('https://api.whatsapp.com/send?phone=5511934091631&text=Ol%C3%A1%20vi%20seu%20site', '_blank').focus();
}

function hackthebox() {
 window.open('https://app.hackthebox.com/profile/303774', '_blank').focus();
}

function codewars() {
 window.open('https://www.codewars.com/users/victorpegoraro', '_blank').focus();
}

function codinggame(){
    window.open('https://www.codingame.com/profile/59c25dea2215ba20ee464db218d5b90d8591035', '_blank').focus();
}

</script>

</body>
</html>
