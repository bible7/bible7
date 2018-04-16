function random(min, max) {
   return parseInt(Math.random()*(max-min+1)+min,10);
}
document.getElementById("num").innerHTML = random(1, 1000);
