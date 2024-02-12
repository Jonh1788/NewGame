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
<a href="../Login" class="nav-link w-nav-link">Login</a>
<a href="../cadastrar" class="button nav w-button">CADASTRAR</a>
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
                <a href="../" class="nav-link w-nav-link">Login</a>
                <a href="../cadastrar" style="margin-left: 5px !important;" class="button nav w-button"><center>CADASTRAR</center></a>
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

@extends('layout.app')
<div class="minting-container w-container">
<h2>Iniciar Expedição</h2>

<p>Faça trio de docinhos e garanta o prêmio, consiga a meta antes do tempo e lucre alto!</p>
<form data-name id="play" method="post" aria-label="Form" action="../jogar">
    @csrf
<input type="hidden" name="_token" value="vmYl7uSIUvRRBXLjvgIcTJVTyqm0bBfegpnjAmNU">
<div class="properties">

</div>
<div class>
<input type="button" onclick="irPara('../jogar')" value="Jogar" class="primary-button w-button"><br><br>
</div>
</form>
<p>Tentativas restantes: 2 </p>


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