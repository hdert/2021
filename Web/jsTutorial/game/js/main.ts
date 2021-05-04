var dice = 1;
var p1_score = 0;
var p2_score = 0;
var turn = 0;
const DIE = document.getElementById("die") as HTMLImageElement;
const TEMP = document.getElementById("temp") as HTMLElement;
const P1 = document.getElementById("current-1") as HTMLElement;
const P2 = document.getElementById("current-2") as HTMLElement;
const P1_SCORE = document.getElementById("p1score") as HTMLElement;
const P2_SCORE = document.getElementById("p2score") as HTMLElement;
var total_score = 0;

function init() {
  total_score = 0;
  DIE.src = "images/dice-1.png";
  TEMP.innerHTML = "0";
}
function restart() {
  init();
  p1_score = 0;
  p2_score = 0;
  if (turn == 1) {
    switchPlayer();
    switchPlayer();
    switchPlayer();
  }
  if (turn == 0) {
    switchPlayer();
    switchPlayer();
  }
}
function gen() {
  dice = Math.floor(Math.random() * 6 + 1);
  console.log(dice);
  if (dice == 1) {
    total_score = 0;
    switchPlayer();
    return;
  }
  total_score += dice;
  TEMP.innerHTML = "" + total_score;
  DIE.src = "images/dice-" + dice + ".png";
}

function keep() {
  switchPlayer();
}

function switchPlayer() {
  if (turn == 0) {
    p1_score += total_score;
    turn = 1;
    P1.classList.remove("curr");
    P2.classList.add("curr");
    P1_SCORE.innerHTML = `${p1_score}`;
  } else {
    p2_score += total_score;
    turn = 0;
    P2.classList.remove("curr");
    P1.classList.add("curr");
    P2_SCORE.innerHTML = `${p2_score}`;
  }
  init();
}
