function setup() {
  var canvasDiv = document.getElementById('sketch-holder');
  var width = canvasDiv.offsetWidth;

  var canvas = createCanvas(width, windowHeight / 2);
  canvas.parent('sketch-holder');
}

function draw() {
  background(220);

  // rect(200, 300, 130, 50);

  rect(mouseX, mouseY, 130, 50);

  //line(60, 60, 150, 150);

    line(mouseX, mouseY, mouseX + 150, mouseY + 150);

  // ellipse(mouseX, mouseY, 8, 8);

}
