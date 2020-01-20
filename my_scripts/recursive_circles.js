
function setup() {

  var canvasDiv = document.getElementById('sketch-holder');
  var width = canvasDiv.offsetWidth;

  var canvas = createCanvas(width, windowHeight / 2);
  canvas.parent('sketch-holder');

    }



function draw() {

  background(240);

  strokeWeight(2);
  stroke(0);
  noFill();
  drawCircle(450, 200, 350);

}



function drawCircle(x, y, d) {

  ellipse(x, y, d);

  if (d > 2) {
    drawCircle(x + d * 0.6, y, d * 0.5);
    drawCircle(x - d * 0.6, y, d * 0.5);
  }

}
