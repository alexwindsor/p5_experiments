function setup() {

  var canvasDiv = document.getElementById('sketch-holder');
  var width = canvasDiv.offsetWidth;

  var canvas = createCanvas(width, windowHeight / 2);
  canvas.parent('sketch-holder');

  frameRate(160);

}

let visible = 0;

/*
function draw() {

  if (mouseIsPressed) {
    fill(0);
    visible = 5;
  } else {
    fill(255);
    visible = 0;
  }

  ellipse(mouseX, mouseY, visible, visible);
}
*/

function draw() {

  if (mouseIsPressed) {
    fill(0);
    ellipse(mouseX, mouseY, 15, 15);
  }


}
