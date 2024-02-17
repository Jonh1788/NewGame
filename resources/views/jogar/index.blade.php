<!DOCTYPE html>
<html lang="pt-Br">
  <head>
    <script>
        if(localStorage.getItem('glmdataCC') !== null) {
            localStorage.removeItem('glmdataCC');
        }
    </script>
    
    
    <meta charset="UTF-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="pragma" content="no-cache">
    <meta name='description' content='Candy Crush is a popular mobile puzzle game where players match colorful candies to progress through levels and earn points.'>
    <meta name="robots" content="noindex">
    <title>Candy Crush</title>
    <meta name="game-slug" content="Mayas-Match" />
    <meta name="splashscreen-game-url" content="img/teaser.jpg" />
    <meta name="splashscreen-big-game-url" content="img/teaser@2x.jpg" />
    <meta name="supports-ad-play-button" content="true" />
    <link rel="stylesheet" href="../candy/css/stylesheet.css" type="text/css" charset="utf-8" />
    <script src="../candy/js/custom-phaser.min.js"></script>
    <script src="../candy/js/game.min.js?1707450315"></script>
    <script type="text/javascript">
      function scorepost(href, inputs) {
        var gform = document.createElement('form');
        gform.method = 'post';
        gform.action = href;
        gform.target = '_parent';
        for (var k in inputs) {
          var input = document.createElement('input');
          input.setAttribute('name', k);
          input.setAttribute('value', inputs[k]);
          gform.appendChild(input);
        }
        document.body.appendChild(gform);
        gform.submit();
        document.body.removeChild(gform);
      }
    </script>

    <script type="text/javascript">
      
      const session = 'eb3c61ac9597755c98320f4acf3f9d03';
      const typeGame = @json($jogo);
      const difyGame = 0;
      const balance  = @json($saldo);

      function hideDiv(el) {
        el.style.display = 'none';
      }
      function showDiv(el) {
        el.style.display = '';
      }

      /******************* TIMER CONFIG ******************/

      function updateTimer(el, seconds) {
        if(configGame.stateGame) {
          const minutes = Math.floor(seconds / 60);
          const remainingSeconds = seconds % 60;
          const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
          const formattedSeconds = remainingSeconds < 10 ? '0' + remainingSeconds : remainingSeconds;
          el.innerText = formattedMinutes + ':' + formattedSeconds;
        }
      }

      function startTimer(el, seconds) {
        updateTimer(el, seconds);
        const timerInterval = setInterval(function () {
          seconds--;
          if (seconds <= 0) {
            clearInterval(timerInterval);
            execRed();
          }
          updateTimer(el, seconds);
        }, 1000);
      }

      /******************* GAME CONFIG  *********************/
      const configGame = {
        stateGame: true,
        value: '',
        currentValue: 0,
        timer: 90,
        meta: () => { return configGame.value * 10; }
      }

      function setText(el, value) {
        el.innerText = value;
      }

      const els = {
        currentRound: () => {
          return  document.querySelector(`#round-1`);
        },
        currentPoints: () => {
          return  document.querySelector(`#round-1 .currentPoint`);
        },
        currentMeta: () => {
          return  document.querySelector(`#round-1 .currentMeta`);
        },
        currentTimer: () => {
          return document.querySelector(`#round-1 .currentTimer`);
        }
      }

      function extTriggerPoints(coin = 1) {
        var currentPoints = els.currentPoints();
        var percent = 10;
        var multDB = @json($multiplicador);
        multDB = parseFloat(multDB);
        var mult = email ? (multDB * 1.52) : (multDB * 3.52);
        var point = ((coin / percent) * configGame.value) * mult;
        var calc = (Number(point) + Number(configGame.currentValue)).toFixed(2);
        configGame.currentValue = calc;
        currentPoints.innerText = calc;
        var element = document.getElementById('apostarBtn');
        if(+currentPoints.innerText >= configGame.meta()) {
          element.style.display = 'block';
        }
      }

      function encerrarAposta(){
        execGreen();
      }
      var email = @json($email);
      function execGreen() {
        if(configGame.stateGame && configGame.currentValue >= configGame.meta()) {
          configGame.stateGame = false;
          if (typeGame != 'Demo') {
            $.post("../gameover/win",{ valor: configGame.currentValue - configGame.value },function (data) {
              location.href = "../painel?msg=ganhou&value=" + (configGame.currentValue - configGame.value);
            });
          }else {
            if(email){
              return location.href = "../painel?value=" + configGame.currentValue;
            }
            location.href = "../cadastrar?value=" + configGame.currentValue;
          }
        }
      }
      function execRed() {
        if(configGame.stateGame) {
          configGame.stateGame = false;
          if(typeGame != 'Demo') {
            var msg_loss = 'Que pena, não foi dessa vez!';
            $.post("../gameover/loss", { aposta: configGame.value, email: @json($emailSession) }, function (data) {
              location.href = "../painel?msg=perdeu&value=" + configGame.currentValue;
            });
          }else {
            if(email){
              return location.href = "../painel?value=" + configGame.currentValue;
            }
            location.href = "../cadastrar?value=" + configGame.currentValue;
          }
        }
      }
      function loadGame() {
        var currentRound = els.currentRound();
        var currentMeta = els.currentMeta();
        var currentTimer = els.currentTimer();

        currentRound.style.display = '';
        setText(currentMeta, configGame.meta().toFixed(2));
        startTimer(currentTimer, configGame.timer);
      }

      window.addEventListener('load', (event) => {
        var container = document.querySelector('#containerFormBet');
        var inpBet   = document.querySelector('#valueBet');
        var btnStart = document.querySelector('#startGame');
        btnStart.addEventListener('click', () => {
          if(+inpBet.value > balance && typeGame != 'Demo') {
            alert("Valor da aposta acima do saldo em conta!");
          }else{
            hideDiv(container);
            configGame.value = +inpBet.value;
            loadGame();
          }
        });
      });

    </script>
  </head>
  <body onLoad="initGame()">
    <div id="gameFontPreload">
      <div style="font-family: ComicSansBold" class="fontPreload">.</div>
    </div>
    <div id="focusHelper"></div>
    <div id="containerFormBet">
      <div id="containerContent">
        <div id="formBet">
          <label>Inisira o valor da aposta</label>
          <input type="number" id="valueBet" value="5">
          <button id="startGame">INICIAR</button>
          <div style="margin-top: 10px;">Saldo: R$ {{$saldo}}</div>
          <div class="msg-erro"></div>
        </div>
      </div>
    </div>
    <div class="placeGameBet" id="round-1" style="display: none;">
      <div class="placeGame">
        <div class="infos">Meta: R$ <span class="currentMeta">0.00</span></div>
        <div class="infos">Valor Atual: R$ <span class="currentPoint">0.00</span></span></div>
        <div class="infos destaque" style="font-size: 23px;"><span class="currentTimer">00:00</span>
      </div>
    </div>
    </div>
    <div class="encerrarAposta">
      <button id="apostarBtn" class="apostaBtn" onclick="encerrarAposta()">Encerrar Aposta</button>
    </div>

    <script>
      window.addEventListener("blur", function() {
        document.getElementById('focusHelper').style['display'] = "block"
      })
      window.addEventListener("focus", function() {
        document.getElementById('focusHelper').style['display'] = "none"
      })
    </script>
    <script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool@latest'></script>
  </body>
</html>