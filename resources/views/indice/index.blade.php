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
    {{$nomeUnico}} </title>
<meta content="Já imaginou ganhar R$1.000 com apenas R$1 único real? O jogo da frutinha vai fazer você faturar muito." name="description">
<meta property="og:image" content="assets/images/doce1.png">
<meta property="og:url" content="index.html">
<meta content="{{$nomeUnico}}" property="og:title">
<meta content="Já imaginou ganhar R$1.000 com apenas R$1 único real? O jogo da frutinha vai fazer você faturar muito." property="og:description">
<meta name="twitter:site" content="@DropFruit">
<meta name="twitter:image" content="assets/images/doce1.png">
<meta content="FruitsMoney 🍓" property="twitter:title">
<meta content="Já imaginou ganhar R$1.000 com apenas R$1 único real? O jogo da frutinha vai fazer você faturar muito." property="twitter:description">
<meta property="og:type" content="website">
<meta content="summary_large_image" name="twitter:card">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="../assets/css/page.css" rel="stylesheet" type="text/css">
<script src="../assets/js/webfont.js" type="text/javascript"></script>

<script type="text/javascript">

  WebFont.load({

    google: {

      families: ["Space Mono:regular,700"]

    }

  });

</script>
<script type="d004d771cdc9fb104a01c815-text/javascript">
    ! function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
            .className += t + "touch")
    }(window, document);
    </script>
<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/doce1.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/doce1.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/doce1.png">
<script id="ze-snippet" src="../static.zdassets.com/ekr/snippet1e8a.js?key=034b691c-1a3c-4abb-92f4-c267f791703a" type="d004d771cdc9fb104a01c815-text/javascript"> </script>
</head>
<body>
<script>
    window.document.addEventListener('DOMContentLoaded', function() {
        var candygame = document.querySelector('.candygame');
        var doce1 = document.querySelector('.doce1');
        var doce2 = document.querySelector('.doce2');
        var doce3 = document.querySelector('.doce3');
        var doce4 = document.querySelector('.doce4');
        var doce5 = document.querySelector('.doce5');
        var doce6 = document.querySelector('.doce6');
        var moneyText = document.querySelector('.moneyText');

       setInterval(() => {
        setTimeout(() => {
            
            doce1.classList.add('movedLower');
            doce4.classList.add('movedUpper');
        }, 100);

        setTimeout(() => {
            doce1.classList.add('explode');
            doce5.classList.add('explode');
            doce6.classList.add('explode');
            doce4.classList.add('explode');
            doce2.classList.add('explode');
            doce3.classList.add('explode');
        }, 200);

        setTimeout(() => {
            moneyText.classList.add('moneyMove');
        }, 400);

        setTimeout(() => {
            doce1.classList.remove('movedLower');
            doce4.classList.remove('movedUpper');
            doce1.classList.remove('explode');
            doce5.classList.remove('explode');
            doce6.classList.remove('explode');
            doce4.classList.remove('explode');
            doce2.classList.remove('explode');
            doce3.classList.remove('explode');
            moneyText.classList.remove('moneyMove');
            
        }, 1500);
       }, 2000);

    });
    
</script>
<div class="candygame">
    <img class="doce1" src="../assets/images/doce1.png" alt="">
    <img class="doce2" src="../assets/images/doce3.png" alt="">
    <img class="doce3" src="../assets/images/doce3.png" alt="">
    <img class="doce4" src="../assets/images/doce3.png" alt="">
    <img class="doce5" src="../assets/images/doce1.png" alt="">
    <img class="doce6" src="../assets/images/doce1.png" alt="">
    <img class="doce7" src="../assets/images/doce3.png" alt="">
    <img class="doce8" src="../assets/images/doce1.png" alt="">
    <img class="doce9" src="../assets/images/doce1.png" alt="">
    <p class="moneyText">+R$10,00</p>
</div>

<script>
    window.document.addEventListener('DOMContentLoaded', function() {
        var candygame = document.querySelector('.candygame3');
        var doce1 = document.querySelector('.doce12');
        var doce2 = document.querySelector('.doce22');
        var doce3 = document.querySelector('.doce32');
        var doce4 = document.querySelector('.doce42');
        var doce5 = document.querySelector('.doce52');
        var doce6 = document.querySelector('.doce62');
        var moneyText = document.querySelector('.moneyText2');

       setInterval(() => {
        setTimeout(() => {
            
            doce1.classList.add('movedLower');
            doce4.classList.add('movedUpper');
        }, 100);

        setTimeout(() => {
            doce1.classList.add('explode');
            doce5.classList.add('explode');
            doce6.classList.add('explode');
            doce4.classList.add('explode');
            doce2.classList.add('explode');
            doce3.classList.add('explode');
        }, 200);

        setTimeout(() => {
            moneyText.classList.add('moneyMove');
        }, 400);

        setTimeout(() => {
            doce1.classList.remove('movedLower');
            doce4.classList.remove('movedUpper');
            doce1.classList.remove('explode');
            doce5.classList.remove('explode');
            doce6.classList.remove('explode');
            doce4.classList.remove('explode');
            doce2.classList.remove('explode');
            doce3.classList.remove('explode');
            moneyText.classList.remove('moneyMove');
            
        }, 1500);
       }, 2000);

    });
    
</script>
<div class="candygame3">
    <img class="doce12" src="../assets/images/doce1.png" alt="">
    <img class="doce22" src="../assets/images/doce3.png" alt="">
    <img class="doce32" src="../assets/images/doce3.png" alt="">
    <img class="doce42" src="../assets/images/doce3.png" alt="">
    <img class="doce52" src="../assets/images/doce1.png" alt="">
    <img class="doce62" src="../assets/images/doce1.png" alt="">
    <img class="doce72" src="../assets/images/doce3.png" alt="">
    <img class="doce82" src="../assets/images/doce1.png" alt="">
    <img class="doce92" src="../assets/images/doce1.png" alt="">
    <p class="moneyText2">+R$15,00</p>
</div>

<script>
    window.document.addEventListener('DOMContentLoaded', function() {
        var candygame = document.querySelector('.candygame');
        var doce1 = document.querySelector('.doce10');
        var doce2 = document.querySelector('.doce20');
        var doce3 = document.querySelector('.doce30');
        var doce4 = document.querySelector('.doce40');
        var doce5 = document.querySelector('.doce50');
        var doce6 = document.querySelector('.doce60');
        var doce7 = document.querySelector('.doce70');
        var doce8 = document.querySelector('.doce80');
        var moneyText = document.querySelector('.moneyText0');

       setInterval(() => {
        setTimeout(() => {
            doce7.classList.add('movedRight');
            doce8.classList.add('movedLeft');
        }, 100);

        setTimeout(() => {
            doce5.classList.add('explode');
            doce7.classList.add('explode');
            doce2.classList.add('explode');
        }, 200);

        setTimeout(() => {
            moneyText.classList.add('moneyMove');
        }, 400);

        setTimeout(() => {
            doce5.classList.remove('explode');
            doce7.classList.remove('explode');
            doce2.classList.remove('explode');
            doce7.classList.remove('movedRight');
            doce8.classList.remove('movedLeft');
            moneyText.classList.remove('moneyMove');
            
        }, 1500);
       }, 2000);

    });
    
</script>
<div class="candygame2">
    <img class="doce10" src="../assets/images/doce1.png" alt="">
    <img class="doce20" src="../assets/images/doce3.png" alt="">
    <img class="doce30" src="../assets/images/doce3.png" alt="">
    <img class="doce40" src="../assets/images/doce3.png" alt="">
    <img class="doce50" src="../assets/images/doce3.png" alt="">
    <img class="doce60" src="../assets/images/doce1.png" alt="">
    <img class="doce70" src="../assets/images/doce3.png" alt="">
    <img class="doce80" src="../assets/images/doce1.png" alt="">
    <img class="doce90" src="../assets/images/doce1.png" alt="">
    <p class="moneyText0">+R$5,00</p>
</div>

<style>
    .nomeDois{
        background-color: #fff;
        color: #333333;
        padding: 0 5px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nomeUm{
        display: flex;
        gap: 5px;
    }

    .nav-link {
        display: flex;
    }
</style>

<div>
<div data-collapse="small" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
<div class="container w-container">
<a href="index.php" aria-current="page" class="brand w-nav-brand w--current" style="background-color:#333333 !important;">
<img src="../assets/images/doce1.png" loading="lazy" height="28" alt class="image-6">
<div class="nav-link logo"><p class="nomeUm">{{$nomeUm}} <span class="nomeDois">{{$nomeDois}}</span> </p></div>
</a>
<nav role="navigation" class="nav-menu w-nav-menu" style="padding: 8px !important; background-color:#333333 !important;">
<a href="../login" class="nav-link w-nav-link">Jogar</a>
<a href="../login" class="nav-link w-nav-link">Login</a>
<a href="../cadastrar" class="button nav w-button">Cadastrar</a>
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
                <a href="../login" class="nav-link w-nav-link">{{$nomeUnico}}</a>
                <a href="../login" class="nav-link w-nav-link">Jogar</a>
                <a href="../login" class="nav-link w-nav-link">Login</a>
                <a href="../cadastrar" style="margin-left: 5px !important;" class="button nav w-button"><center>CADASTRAR</center></a>
            </nav>
        </div>
    </div>
</div>
 <script>
document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.querySelector(".menu-button");
    const mobileMenu = document.querySelector(".mobile-menu");
    const bugamobile = document.querySelector(".bugamobile");

    menuButton.addEventListener("click", function() {
        if (mobileMenu.style.display === "none" || mobileMenu.style.display === "") {
            mobileMenu.style.display = "flex";
            bugamobile.style.display = "none";
        } else {
            mobileMenu.style.display = "none";
            bugamobile.style.display = "flex";
        }
    });
});

</script>

<div class="bugamobile">
<section id="hero" class="hero-section wf-section" style="background-color:#FD1942 !important"> 
<div class="hero-container style="background-color:#FD1942 !important"">
<div class="hero-letters">
<h1 data-w-id="00c96275-55a4-2839-457b-174c20d342ba" class="hero-heading">{{$nomeUm}}<br>{{$nomeDois}}</h1>
</div>

<!-- <img src="../assets/images/doce.png loading="lazy width="132" alt class="image cr1">

<img src="../assets/images/doce3.png" loading="lazy" width="132" alt class="image cl1">

<img src="../assets/images/doce2.png" loading="eager" width="132" alt class="image tr">

<img src="../assets/images/doce1.png" loading="eager" width="132" alt class="image tl">

<img src="../assets/images/doce3.png" loading="lazy" width="132" alt class="image cr2">

<img src="../assets/images/doce.png" loading="lazy" width="132" alt class="image cl2">

<img src="../assets/images/doce1.png" loading="lazy" width="132" alt class="image bl1">

<img src="../assets/images/doce2.png" loading="lazy" width="132" alt class="image br1">

<img src="../assets/images/doce1.png" loading="lazy" width="132" alt class="image br">

<img src="../assets/images/doce3.png" loading="lazy" width="132" alt class="image bc">

<img src="../assets/images/doce2.png" loading="eager" width="132" alt class="image"> -->

<a href="../login" class="primary-button hero w-button">JOGAR AGORA</a>
<div class="hero-price">
</div>
</div>
</section>
</div>
<section id="mint" class="mint-section wf-section">
<div class="minting-container w-container">
<img src="../assets/images/person.png" loading="lazy" width="240" alt class="mint-card-image">
<h2>{{$nomeUnico}}</h2>
<p class="paragraph">Bem-vindo ao mundo suculento e lucrativo do {{$nomeUnico}}, o joguinho que vai deixar
você com água na boca e o bolso cheio! Prepare-se para uma experiência emocionante, onde suas
habilidades de corte serão testadas e sua conta bancária pode crescer a cada fatia. </p>
<a href="../login" class="primary-button w-button">JOGAR AGORA</a><br>
<div class="price">
    <strong>Rodadas de boas vindas disponível</strong>
</div>

</div>
</section>

<div class="footer-section wf-section">
<div class="domo-text">{{$nomeUm}} <br>
</div>
<div class="domo-text purple">{{$nomeDois}}<br>
</div>
<div class="follow-test">© Copyright</div>
<div class="follow-test">
<a href="../terms">
<strong class="bold-white-link">Termos de uso</strong>
</a>
</div>
<div class="follow-test"><a href="#" class="__cf_email__" data-cfemail="c2a1adacb6a3b6ad82a4b0b7abb6b1afadaca7bbeca1adaf"></a></div>

</div>


</html>