
var grey = 'rgb(200,200,200)';
var blue = 'rgb(54,82,168)';

// Memory /////////////////////////////////////////////////////////////////////////
var points = [];
var lines = [];

// Delegates //////////////////////////////////////////////////////////////////////
function ran(techo) {
	return Math.floor((Math.random() * 10000) % techo);
}
function dist(start, end) {
	return Math.sqrt(Math.pow(start.x - end.x, 2) + Math.pow(start.y - end.y, 2));
}
function drawCircle(_x, _y, r, context, color) {
	context.beginPath();
	context.arc(_x, _y, r, 0, 2 * Math.PI, false);
	context.fillStyle = color;
	context.fill();
}
function drawLine(start, end, context, color, opc) {
	context.globalAlpha = opc;
	context.beginPath();
	context.moveTo(start.x, start.y);
	context.lineTo(end.x, end.y);
	context.lineJoin = 'round';
	context.strokeStyle = color;
	context.stroke();

	drawCircle(start.x, start.y, 2.5, context, blue);
	drawCircle(end.x, end.y, 2.5, context, blue);

	console.log("drawLine from (" + start.x + ", " + start.y + ") to (" + end.x + ", " + end.y + ") and dist=" + dist(start, end));
}
function plotPoints(context) {
	context.globalAlpha = 1;
	for(var i = 0; i < points.length; i++)
		drawCircle(points[i].x, points[i].y, points[i].r, context, grey);
}
var _psl_line, _psl_context, _psl_i, _psl_step;
function _plotSomeLine(line, context, opc) {
	var the1 = ran(lines.length-1);
	if(_psl_i == 100) {
		_psl_step = -1;
		setTimeout(plotSomeLine, 3000);
		return;
	}
	_psl_i = _psl_i + _psl_step;

	console.log("Opacity: " + _psl_i);

	canvas.width = canvas.width;
	plotPoints(_psl_context);
	drawLine(lines[the1].start, lines[the1].end, _psl_context, blue, _psl_i/100);

	setTimeout(_plotSomeLine, 500);
}
function plotSomeLine(context) {
	// Aparece
	if(_psl_i != -1) {
		_psl_step = 1;
		_psl_i = 1;
	}
	_psl_context = context;
	setTimeout(_plotSomeLine, 100);
}

// Objeto pizarra
var canvas = document.getElementById('header-background-canvas');

// Resolución
var maxWidth = canvas.offsetWidth;
var maxHeight = canvas.offsetHeight;
canvas.width = maxWidth;
canvas.height = maxHeight;
	
var context = canvas.getContext('2d');
var radius = 0.75;

var x, y, xold, yold, distance;
for(var i = 0; i < 1000; i++) {
	x = ran(maxWidth);
	y = ran(maxHeight);
	points.push({
		x: x,
		y: y,
		r: radius + ran(10)/10
	});
	// drawCircle(x, y, radius + ran(10)/10, context, grey);
	
	if(i != 0) {
		distance = dist(
			{x: x, y: y},
			{x: xold, y: yold}
		);
		if(distance < 150)
			lines.push({
				start: {x: x, y: y},
				end: {x: xold, y: yold}
			});
			// drawLine(
			// 	{x: x, y: y},
			// 	{x: xold, y: yold},
			// 	context,
			// 	blue,
			// 	1
			// );
	}
	
	xold = x;
	yold = y;

}

// plotPoints(context);

// plotSomeLine(context);


