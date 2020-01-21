function setup() {

  var canvasDiv = document.getElementById('sketch-holder');
  var width = canvasDiv.offsetWidth;

  var canvas = createCanvas(width, windowHeight / 2);
  canvas.parent('sketch-holder');

  // background(127);

  // frameRate(80);

}

var phase = 0, speed = 0.03;
var maxCircleSize = 20

function draw() {

  background(127);

  var x = width/2 + sin(phase) * 200;
  var y = height/2 + sin(phase) * 200;

  phase = frameCount * speed;

  var sizeOffset = (cos(phase) + 1) * 0.5;
  var circleSize = sizeOffset * maxCircleSize;

  ellipse(x, y, circleSize, circleSize);
}
