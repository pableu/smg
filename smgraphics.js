window.onload = function () {
  // Creates canvas 320 × 200 at 10, 50
  var paper = Raphael("holder", 600, 540);

  // Creates circle at x = 50, y = 40, with radius 10
  var circle = paper.circle(120, 120, 100);
  // Sets the fill attribute of the circle to red (#f00)
  circle.attr("stroke", "#f00");

  // Sets the stroke attribute of the circle to black
  circle.attr({gradient: "45-#000-#000", opacity: 0.1})
};
