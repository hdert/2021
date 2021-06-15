import "../scss/styles.scss";
import Call_of_Cthulhu from "../img/optimized/Call_of_Cthulhu.png";
import printMe from "./print.js";

function component() {
  const element = document.createElement("div");
  const btn = document.createElement("button");

  element.innerHTML = "Hello Webpack";
  element.classList.add("hello");

  btn.innerHTML = "Click me and check the console!";
  btn.onclick = printMe;

  element.appendChild(btn);

  const image = new Image();
  image.src = Call_of_Cthulhu;

  element.appendChild(image);

  return element;
}

document.body.appendChild(component());
