<?php

$nomeUnico = config('subway_pix.nomeUnico');
$nomeUm = config('subway_pix.nomeUm');
$nomeDois = config('subway_pix.nomeDois');

?>


<!DOCTYPE html>
<html lang="pt-br">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="pt-br">
<title>
       {{ $nomeUnico }}   </title>
<meta content="Já imaginou ganhar R$1.000 com apenas R$1 único real? O jogo da frutinha vai fazer você faturar muito." name="description">
<meta property="og:image" content="../assets/images/doce1.png">
<meta content="{{$nomeUnico}}" property="og:title">
<meta content="Já imaginou ganhar R$1.000 com apenas R$1 único real? O jogo da frutinha vai fazer você faturar muito." property="og:description">
<meta name="twitter:site" content="@DropFruit">
<meta name="twitter:image" content="../assets/images/doce1.png">
<meta content="{{$nomeUnico}}" property="twitter:title">
<meta content="Já imaginou ganhar R$1.000 com apenas R$1 único real? O jogo da frutinha vai fazer você faturar muito." property="twitter:description">
<meta property="og:type" content="website">
<meta content="summary_large_image" name="twitter:card">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="../assets/css/page.css" rel="stylesheet" type="text/css">
<script src="../assets/js/webfont.js" type="d004d771cdc9fb104a01c815-text/javascript"></script>
<script type="d004d771cdc9fb104a01c815-text/javascript">
    WebFont.load({
        google: {
            families: ["Space Mono:regular,700"]
        }
    });
    </script>

<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/doce1.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/doce1.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/doce1.png">

<script id="ze-snippet" src="../static.zdassets.com/ekr/snippet1e8a.js?key=034b691c-1a3c-4abb-92f4-c267f791703a" type="d004d771cdc9fb104a01c815-text/javascript"> </script>
</head>
<body>
<div>
<div data-collapse="small" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
<div class="container w-container" style="padding: 16px !important;">
<a href="../" aria-current="page" class="brand w-nav-brand w--current">
<img src="../assets/images/doce1.png" loading="lazy" height="28" alt class="image-6">
<div class="nav-link logo">{{$nomeUnico}}</div>
</a>
<nav role="navigation" class="nav-menu w-nav-menu" style="padding: 8px !important;">
<a href="../" class="nav-link w-nav-link">Jogar</a>
<a href="../saque" class="nav-link w-nav-link">Saque</a>
<a href="../afiliate" class="nav-link w-nav-link">Divulgue & Ganhe</a>
<a href="../logout" class="nav-link w-nav-link">Sair</a>
<a href="../deposito" class="button nav w-button">DEPOSITAR</a>
</nav>

<style type="text/css">/* Estilos gerais do menu */

.nav-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333; /* Cor de fundo do menu desktop */
    padding: 10px;
}

.menu-button {
    background-color: black; /* Cor de fundo do botão */
    color: #fff; /* Cor do texto do botão */
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

.mobile-menu {
    display: none; /* O menu móvel não é exibido inicialmente */
    background-color: #333; /* Cor de fundo do menu móvel */
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
    flex-direction: column;
    align-items: center;
}

.nav-link {
    color: #fff; /* Cor do texto dos links do menu móvel */
    padding: 10px 20px;
    text-decoration: none;
}
</style>
<div class="w-nav-button">
</div>
<div class="menu-button w-nav-button">
<div class="icon w-icon-nav-menu"></div>
</div>
    
</div>


</div>
  <div class="mobile-menu">
            <nav role="navigation" class="nav-menu w-nav-menu">
                <a href="../" class="nav-link w-nav-link">{{ $nomeUnico }}</a>
                <a href="../" class="nav-link w-nav-link">Jogar</a>
                <a href="../saque" class="nav-link w-nav-link">Saque</a>
                <a href="../afiliate" class="nav-link w-nav-link">Divulgue & Ganhe</a>
                <a href="../logout" class="nav-link w-nav-link">Sair</a>
                <a href="../deposito" style="margin-left: 5px !important;" class="button nav w-button"><center>DEPOSITAR</center></a>
            </nav>
        </div>
    </div>
</div>
 <script>
document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.querySelector(".menu-button");
    const mobileMenu = document.querySelector(".mobile-menu");

    menuButton.addEventListener("click", function() {
        if (mobileMenu.style.display === "none" || mobileMenu.style.display === "") {
            mobileMenu.style.display = "flex";
        } else {
            mobileMenu.style.display = "none";
        }
    });
});
</script>

<style>
    ul.playersOn {
        display: block;
        position: absolute;
        top: calc(50vh - 240px);
        left: -154px;
        width: 190px;
        height: 460px;
        padding: 0;
        margin: 0;
        background: #00BCD4;
        border: 4px solid #000;
        box-shadow: -3px 3px 0 2px #000;
        border-radius: 0 15px 15px 0;
        filter: drop-shadow(2px 2px 6px #000000cc);
        transition: 2s;
        opacity: 0;
        z-index: 100;
    }

    ul.playersOn.ativo {
        left: -5px;
    }

    ul.playersOn li {
        display: block;
        margin: 10px 5px 0 5px;
    }

    ul.playersOn li img {
        float: left;
        width: 20px;
        margin: 0 -150px 0 150px;
        filter: drop-shadow(1px 1px 3px black);
        transition: 4s;
    }

    ul.playersOn.ativo li img {
        margin: 0 8px 0 0;
    }

    ul.playersOn li span {
        display: block;
        font-size: 12px;
        line-height: 12px;
    }

    ul.playersOn li i {
        display: block;
        font-size: 10px;
        margin-top: -6px;
    }
    </style>
<ul class="playersOn"></ul>
<div style="position: absolute; top: 100px; width: 100%; line-height: 26px; color: #fff; z-index: 10; text-align: center;">
</div>
<section id="hero" class="hero-section dark wf-section">
    <font color="white">SALDO DISPONÍVEL: R$<b class="saldo"> {{ $saldo }} </b></font>
<style>
            a.escudo {
                display: block;
                width: 247px;
                line-height: 65px;
                font-size: 12px;
                margin: -60px 0 0px 0;
                background-image: url(../assets/images/escudo-branco.png);
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
                filter: drop-shadow(1px 1px 3px #00000099) hue-rotate(0deg);
            }

            a.escudo img {
                width: 50px;
                margin: -10px 0 0 0;
            }

            .containerPop {
                border-style: solid;
                border-width: 8px;
                border-color: #1f2024;
            }

            .button2 {
                background-color: #fe1f4f !important;
                border: solid !important;
                border-color: #1f2024 !important;
                box-shadow: -3px 3px 0 0 #1f2024 !important;
            }
            .rarity-row.roboto-type2 {
                    border-color: #DB7093 !important;
                    background-color: #FFC0CB !important;
                }
                .minting-container{
                    border-color: #C71585 !important;
                }
                .sectionFruits {
                    background-color: #FF69B4;
                    background-image: url(../assets/images/candy-bg.png) !important;
                }
                .button2 {
                    border-radius: 10px;
                    background-color: #FF69B4 !important;
                }

            .button2:hover{
                box-shadow: -6px 6px 0 0 #1f2024 !important;
            }
            </style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const queryString = window.location.search;

    const urlParams = new URLSearchParams(queryString);

    window.addEventListener('load', () => {
        const saldo = @json($saldo);
        var mensagem = saldo > 0 ? " Vamos jogar!" : " Deposite com o link abaixo, e vem ganhar com a gente!";
        var mensagemBtn = saldo > 0 ? "Jogar!" : "<a href='../deposito' style='color: #fff;'>Depositar!";
        const msg = urlParams.get("msg");
        const value = parseFloat(urlParams.get("value")).toFixed(2);
        let texto;
        let titulo;
        if(msg == "ganhou"){
            texto = "<p>Parabéns! Você ganhou R$" + value + "</span><br></p>"
            titulo = "UHUL!"
        } else {
            texto = "<p>Você poderia ter ganho <span style='color: #000; font-weight:bold;'>R$" + value + "</span><br>" + mensagem + "</p>"
            titulo = "Uau!"
        }
        if(!isNaN(value)){
            setTimeout(() => {
                
                
                    clearTimeout(timeoutId);
                    Swal.fire({
                        title: titulo,
                        html: texto,
                        confirmButtonText: mensagemBtn,
                        customClass: {
                            confirmButton: "primary-button button2 w-button",
                            popup: "minting-container"
                        }
                    })
                    .then(() => {
                        exibirNomesAleatorios();
                    })
            
            }, 1000);
        }
    })

</script>

@extends('layout.app')
<div class="minting-container w-container">
<a href="#" class="escudo">
Ranking
<img src="../trophy.gif">
Ranking
</a>
<h2>Jogar</h2>
<p>Use a versão Teste para conhecer os mapas antes de apostar! #ficadica!</p>
    
<form data-name id="play" method="post" aria-label="Form" action="../jogar">
    @csrf
<input type="hidden" name="_token" value="vmYl7uSIUvRRBXLjvgIcTJVTyqm0bBfegpnjAmNU">
<div class="properties">

</div>
<div class>
<input type="submit" value="Jogar" {{ $saldo <= 0 ? 'disabled' : '' }} class="primary-button w-button" style="{{ $saldo <= 0 ? 'background-color: #4f515b !important;' : '' }}"><br><br>
</div>
</form>
<p>Tentativas restantes: 1 </p>
<input type="button" value="Testar"  id="testar" onclick="irPara('../jogar')" class="primary-button w-button"><br><br>

<input type="button" value="Depositar" id="depositarBtn" onclick="irPara('../deposito')" class="primary-button w-button" style="background-color: #2CAF70 !important; height: 80px !important;"><br><br>

<input type="button" value="R$20 Grátis" id="indique" onclick="irPara('../afiliate')" class="primary-button w-button" style="background-color: red !important;"><br><br>

<script>
    function irPara(goFor){
        location.href = goFor;
    }
</script>

</div>
<div id="wins" style="
                display: block;
                width: 240px;
                font-size: 12px;
                padding: 5px 0;
                text-align: center;
                line-height: 13px;
                background-color: #FFC107;
                border-radius: 10px;
                border: 3px solid #1f2024;
                box-shadow: -3px 3px 0 0px #1f2024;
                margin: -24px auto 0 auto;
                z-index: 1000;
            ">Usuários Online<br>20630</div>
</section> 

<section id="mint" class="mint-section wf-section">
<div class="minting-container w-container">
<img src="../assets/images/person.png" loading="lazy" width="240" alt class="mint-card-image">
<h2>{{$nomeUnico}}</h2>
<p class="paragraph">Bem-vindo ao mundo suculento e lucrativo de {{$nomeUnico}}, o joguinho que vai deixar
você com água na boca e o bolso cheio! Prepare-se para uma experiência emocionante, onde suas
habilidades de corte serão testadas e sua conta bancária pode crescer a cada fatia. </p>
<a href="../" class="primary-button w-button">JOGAR AGORA</a>
<div class="price">
<strong>Rodadas de boas vindas disponível</strong>
</div>
</div>
</section>

<div class="footer-section wf-section">
<div class="domo-text">{{$nomeUm}} <br>
</div>
<div class="domo-text purple">{{$nomeDois}} <br>
</div>
<div class="follow-test">© Copyright</div>
<div class="follow-test">
<a href="../terms">
<strong class="bold-white-link">Termos de uso</strong>
</a>
</div>
<div class="follow-test"><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="c2a1adacb6a3b6ad82a4b0b7abb6b1afadaca7bbeca1adaf">[email&#160;protected]</a></div>

</div>


</html>