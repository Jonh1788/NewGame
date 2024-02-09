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
      if(seconds <= 20) {
          el.style.color = 'red';
          el.style.fontSize = '28px';
      }
      if (seconds == 0) {
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
    timer: typeGame == 'real' ? 180 : 180,//timer para quem esta jogando no modo normal e para os demais que seria demo ou presell
    meta: () => { return typeGame == 'real' ? configGame.value * 4 : configGame.value * 4; }//meta que seria o apostado x4, tanto para o modo real como para o modo presell
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
function extTriggerPoints(coin = 5) {
    var currentPoints = els.currentPoints();
    var percent = typeGame == 'real'? 5 : 5;
    var point = (coin / percent) * configGame.value;
    var calc = (Number(point) + Number(configGame.currentValue)).toFixed(2);
    configGame.currentValue = calc;
    currentPoints.innerText = calc;
    
    if (+currentPoints.innerText >= configGame.meta()) {
        // Criar o botão Encerrar Jogada
        var closeButton = document.createElement('button');
        closeButton.innerText = 'Encerrar Jogada';
        closeButton.style.transform = 'translateX(-50%)';
        closeButton.style.backgroundColor = '#BA55D3';
        closeButton.style.fontSize = '15px';
        closeButton.style.padding = '15px';
        closeButton.style.boxShadow = '0 0 5px rgba(0, 0, 0, 0.5)';
        closeButton.style.color = 'white';
        closeButton.style.borderStyle = 'solid';
        closeButton.style.borderColor = '#BA55D3';
        closeButton.style.borderRadius = '5%';
        closeButton.style.position = 'absolute';
        closeButton.style.display = 'flex';
        closeButton.style.top = '85%';
        closeButton.style.left = '50%';

        // Adicionar evento de clique ao botão
        closeButton.addEventListener('click', function() {
            execGreen();
        });

        // Inserir o botão no documento
        document.body.appendChild(closeButton);
    }
}
function execGreen() {
    if(configGame.stateGame && configGame.currentValue >= configGame.meta()) {
      configGame.stateGame = false;
      if (typeGame == 'real') {
        $.post("../auth?action=game&type=win",{ session: session, bet: configGame.value, val: configGame.currentValue },function (data) {
        });
          let msg = 'Parabens, você ganhou R$ ' + configGame.currentValue + '!';
          location.href = "../gameover/win.php?type=loss&msg=" + configGame.currentValue;
        
      }else if(typeGame == 'demo'){
          window.location.replace('../painel/win.php?type=loss&msg=' + configGame.currentValue);
      }else if(typeGame == 'presell') {
          window.location.replace('./win.php?type=loss&msg=' + configGame.currentValue +"&bet=" + configGame.currentValue);
      }
    }
}
function execRed() {
    if(configGame.stateGame) {
      configGame.stateGame = false;
      if(typeGame == 'real') {
          var msg_loss = 'Que pena, não foi dessa vez!';
          $.post("../auth?action=game&type=loss", { session: session, bet: configGame.currentValue }, function (data) {
              });
                  location.href = "../gameover/loss.php?type=loss&msg=" + configGame.currentValue;
      }else if(typeGame == 'demo'){
          window.location.replace('../painel/loss.php?type=loss&msg=' + configGame.currentValue);
      }else if(typeGame == 'presell') {
          window.location.replace('./loss.php?type=loss&msg=' + configGame.currentValue + "&bet=" + configGame.currentValue);
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
    var containerContent = document.querySelector('#containerContent');
    var inpBet   = document.querySelector('#valueBet');
    var btnStart = document.querySelector('#startGame');
    btnStart.addEventListener('click', () => {
      if(+inpBet.value > saldo && typeGame == 'real') {
        alert("Valor da aposta acima do saldo em conta!");
      }else{
        container.style.zIndex = '100';
        containerContent.style.zIndex = '100';
        hideDiv(container);
        configGame.value = +inpBet.value;
        loadGame();
      }
    });
});