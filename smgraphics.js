window.onload = function () {
  // Creates canvas 320 × 200 at 10, 50
  var paper = Raphael("holder", 600, 540);

  // Creates circle at x = 50, y = 40, with radius 10
  var circle = paper.circle(120, 120, 100);
  // Sets the fill attribute of the circle to red (#f00)
  circle.attr("stroke", "#f00");

  // Sets the stroke attribute of the circle to black
  circle.attr({gradient: "45-#000-#000", opacity: 0.1})
  
  // raphael supports svg path syntax
  // see http://www.w3.org/TR/SVG/paths.html
  // M = Move, L = Line to, Z = close Path
  var p = paper.path("M10 90 L50 30 L 11 11 L 110 100 Z");
  p.attr({fill: '#FFFFFF'});
  // animate radius to smaller in 2.2s with '<>' animation
  circle.animate({r: 50}, 2200, '<>');
  
  setTimeout(function() {
	  // animate path to new coordinates
    p.animate({path: "M10 120 L50 30 L 20 11 L 11 11  L 20 60 L 90 90  Z"}, 1000, 'bounce');
  }, 1000);

  var dot = paper.circle(10, 90, 10);
  dot.attr('fill', '#00F');
  dot.animateAlong(p, 1000);

  setTimeout(function() {
	  // animate path to new coordinates
//    p.rotate(-90, 90, 90);
    p.animate({rotation: '-90, 90, 90'}, 1000, '<>');
    dot.animate({rotation: '180, 90, 90'}, 1000, '<>');
  }, 2000);


  p.animate({fill: "#FA0"}, 2500);
  
};
