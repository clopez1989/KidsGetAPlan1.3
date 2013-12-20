(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// library properties:
lib.properties = {
	width: 1667,
	height: 734,
	fps: 24,
	color: "#F7ED4E",
	manifest: [
		{src:"images/five.png", id:"five"},
		{src:"images/four.png", id:"four"},
		{src:"images/one.png", id:"one"},
		{src:"images/six.png", id:"six"},
		{src:"images/three.png", id:"three"},
		{src:"images/two.png", id:"two"}
	]
};

// stage content:
(lib.gearCanvas = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.gearMaster("synched",2);
	this.instance.setTransform(845,335.9,1.288,1.288,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(180));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(829.7,368.6,1531.7,742.1);


// symbols:
(lib.five = function() {
	this.initialize(img.five);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,225,43);


(lib.four = function() {
	this.initialize(img.four);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,146,43);


(lib.one = function() {
	this.initialize(img.one);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,781,172);


(lib.six = function() {
	this.initialize(img.six);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,27,43);


(lib.three = function() {
	this.initialize(img.three);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,146,231);


(lib.two = function() {
	this.initialize(img.two);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,614,282);


(lib.Symbol6 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#292929").p("AB8mKIgYBIQBDAaAyAnIAxg5QBBA6AlBDIg+AfQAhA6ADBDIBIABQAIBIgVBIIhHgWQgVBBgwA4IAAACIA9AtQg+BEg/AjIgmhAQg2AchMAIIACBIQhMALhKgYIAbhMQhCgRgxgyIg5BGQg8g4gohAIBHgmQgjg9gMhFIhLACQgEhMARhNIBNAYQAbg9Asg0Ig+g4QAzhABMggIAbA9QBFgVA+gOIgFhIQBYgDBIAQg");
	this.shape.setTransform(41.7,40.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#3BADE3").s().p("Ah3GIIAbhMQhCgRgxgyIg5BGQg8g4gohAIBHgmQgjg9gMhFIhLACQgEhMARhNIBNAYQAbg9Asg0Ig+g4QAzhABMggIAbA9QBFgVA+gOIgFhIQBYgDBIAQIgYBIQBDAaAyAnIAxg5QBBA6AlBDIg+AfQAhA6ADBDIBIABQAIBIgVBIIhHgWQgVBBgwA4IAAACIA9AtQg+BEg/AjIgmhAQg2AchMAIIACBIQgXADgWAAQg1AAg0gQg");
	this.shape_1.setTransform(41.7,40.9);

	this.addChild(this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-1,-1,85.4,83.8);


(lib.Symbol5 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#292929").p("AEXmfQAUANAeAZIAwgjIAjAkIgjAvQAWAYATAaIA1gVIAZArIgsAjQAPAeALAeIA3gGIANAxIgyAVQAFAfADAjIA2AIIABAxIg3AHQgBAigGAgIAxAWIgNAwIg0gGQgJAfgQAgIAoAhIgYArIgygTQgVAfgUAWIAgAqIgkAkIgrggQgYAWgcAUIASAwIgrAaIgggoQgeAPghAKIAGAzIgwAOIgWgxQgdAFgkADIgJA1IgwAAIgIg2QgggCghgGIgXAyIgwgOIAGg1QgjgMgagNIgiAqIgsgZIAWg0QgagSgagXIguAiIgjgkIAigvQgSgUgVgeIg2AUIgZgqIAtglQgOgfgJgcIg7AGIgMgwIA2gZQgFgggCgeIg8gJIAAgwIA9gKQADgiAFgbIg4gYIAMgwIA+AGQAKgdAOgcIgxgnIAagrIA6AXQAQgYAWgYIgmg0IAkgjIAzAmQAWgTAagTIgXg7IAsgZIAnAxQAagOAegKIgGg9IAwgNIAZA5QAegGAfgCIAJg+IAwAAIAKA+QAdACAgAFIAZg4IAwANIgHA7QAeAKAeAPIAkgvIAsAYgAEEh9QgIgRgLgQIgLgNIhtCGIAAABQAEAMABAEIACAfIgCARIgFATIBtCHIAOgTQALgQAIgQQAKgVAEgPQAFgPAEgWQAEgUAAgRQABgIgBgJQABgJgBgLQgBgVgEgQQgDgSgHgUQgGgRgJgRgAgSkaIgiAEQgTAEgUAHQgRAFgPAIQgUAKgOAKQgLAGgHAHICIBtIASgGIAPgBQAEgBAEAAIAIAAIAgAGIAFACICHhtIgVgPQgPgKgSgKIgigNQgQgFgWgEQgNgCgXgCgAgWhFIgBABIgHADIgJAGQgEABgFAEIgHAIQgDADgDAFQgEAFgBAEQgCADgCAFIAAABIgDAKIgBATIABAKQABAGACAEIADAJQACAEAEAFIAFAJIAEAEIAEACIAIAIQADACAGADIAIADIABAAIAKAEIALABIASgBIALgDIACgBIAQgIIAQgOIAGgJQAEgFABgEIADgHIABgCQACgEABgFIABgUIgBgKQgBgFgCgFIAAgBIgEgJIgMgQIgDgEIgEgEQgEgDgFgDIgJgGIgFgCIgOgDQgDgBgHAAIgSABgAj/h7QgJARgFAQQgGASgEAUQgDASgCARIAAAmQAAARAEASQADAUAGATQAGASAIAPQAHARAMARQAGAKAKALIBsiGQgBgCAAgDQgCgGgCgLIgDgQIABgPQAAgGACgJIAEgRIABgCIhtiHIgMAQQgMARgIARgAifDzQAOAKATAKQASAJARAGQAUAHARACQAWAFAPAAQAOABAFAAIARAAQARAAAWgFQAUgEAQgGQARgEATgKQAQgHAQgMIATgNIiHhuQgCABgCAAQgHAEgIABIgRACQgDAAgFAAIgHAAIgRgDQgIgBgHgDIgBgBIiHBugAA0gMIAAAAIAEAMIgBAEIAAADIgCAOIgBABQgBAEgBABIgEAGIgEAGIgKAJIgLAHIgCAAIgGABIgIAAQgBABgCgBIgIAAIgHgCIgBABIgGgDIgLgJIgFgFIgIgLIgEgNIAAgOIAAgFIACgHIABAAIACgFQACgFACgCIAGgIIAIgGIALgFIABgBIAHgCIAIgBIAEABIAGAAIAHACIACABIAEABQAFADACABIAIAGIAGAIQADAFABABg");
	this.shape.setTransform(56,56);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#3BADE3").s().p("AgYIvIgIg1QgggCghgHIgXAxIgwgNIAGg2QgjgLgagOIgiArIgsgaIAWg0QgagRgagXIguAiIgjgkIAigvQgSgUgVgeIg2AUIgZgrIAtgkQgOgegJgdIg7AGIgMgxIA2gYQgFgfgCgfIg8gJIAAgwIA9gJQADgjAFgbIg4gYIAMgwIA+AHQAKgeAOgcIgxgnIAagrIA6AXQAQgYAWgYIgmg0IAkgjIAzAmQAWgTAagSIgXg8IAsgZIAnAyQAagOAegLIgGg9IAwgNIAZA5QAegFAfgDIAJg+IAwAAIAKA+QAdACAgAFIAZg4IAwANIgHA8QAeAKAeAOIAkgvIAsAYIgWA4QAUANAeAZIAwgiIAjAjIgjAvQAWAZATAZIA1gVIAZArIgsAkQAPAdALAfIA3gGIANAwIgyAWQAFAfADAiIA2AJIABAwIg3AHQgBAigGAhIAxAVIgNAwIg0gFQgJAegQAgIAoAgIgYAsIgygTQgVAfgUAWIAgAqIgkAkIgrggQgYAWgcAUIASAwIgrAaIgggpQgeAQghAKIAGAzIgwANIgWgwQgdAFgkADIgJA1gAitDpIAOAKQAOAKATAKQASAJARAGQAUAGARADQAWAEAPABIATABIARAAQARAAAWgFQAUgEAQgFQARgFATgKQAQgHAQgMIATgNIiHhuQgBAAAAABQAAAAgBAAQAAAAgBAAQAAAAgBAAQgHAEgIABIgRACIgIAAIgHAAIgRgCQgIgCgHgDIgBgBgAjridQgMARgIARQgJARgFARQgGARgEAVIgFAjIAAAlQAAASAEARQADAUAGATQAGASAIAPQAHARAMASIAQAUIBsiGQgBgCAAgDIgEgRIgDgQIABgPQAAgFACgKIAEgRIABgCIhtiHgAB5glIAAACIAFAPIACAfIgCARIgFATIBtCHIAOgSQALgRAIgQQAKgVAEgPQAFgQAEgVQAEgUAAgRQABgIgBgJQABgJgBgKQgBgWgEgQQgDgRgHgVQgGgRgJgQQgIgSgLgQIgLgNgAgLhHIgLADIgBAAIgHADIgJAGIgJAGIgHAHQgDAEgDAEQgEAFgBAEIgEAIIAAABIgDAKIgBATIABAKIADAKIADAJQACAFAEAEIAFAJIAEAEIAEADIAIAGIAJAGIAIADIABAAIAKAEIALABIASgBIALgDIACgBIAQgIIAQgOIAGgJQAEgEABgFIADgHIABgCIADgJIABgUIgBgKQgBgFgCgFIAAgBIgEgJIgMgQIgDgEIgEgDQgEgEgFgCIgJgHIgFgCIgOgDIgKgBgAAKh4IAgAHIAFABICHhtIgVgPQgPgKgSgKIgigMQgQgGgWgEIgkgEIgmAAIgiAFQgTADgUAHQgRAGgPAHQgUALgOAKQgLAGgHAGICIBtIASgGIAPgBIAIgBgAACA4IgIAAIgHgCIgBABIgGgDIgLgIIgFgGIgIgLIgEgNIAAgOIAAgFIACgHIABAAIACgFIAEgGIAGgJIAIgGIALgFIABgBIAHgCIAIgBIAEABIAGAAIAHACIACABIAEACIAHADIAIAGIAGAIIAEAHIACAFIAAAAIAEAMIgBAEIAAAEIgCANIgBABIgCAFIgEAGIgEAGIgKAJIgLAHIgCAAIgGABIgIAAIgBABIgCgBg");
	this.shape_1.setTransform(56,56);

	this.addChild(this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-1,-1,114,113.9);


(lib.Symbol4 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#292929").p("AHcogIgjBIIgQAXQAOANANAQIAXgSIBIgiIA2BGIg0A8IgWARIAUAjIAZgJIBQgOIAiBRIhEAtIgXAIIALAqIAZgEIBQAHIALBXIhMAbIgYACIgBAnIAZAEIBLAbIgLBYIhRAGIgZgEQgDAUgGAWIAXAIIBCAuIgjBSIhPgQIgVgJIgUAlIARAOIA1A9Ig3BGIhHgkIgTgOQgQARgNALIAOAUIAiBHIhGA3Ig8g0IgPgSQgTAMgSAIIAJAVIAOBQIhRAiIgthEIgIgUQgUAGgVAEIADAYIgGBPIhXALIgbhMIgDgXQgVABgTgCIgDAYIgbBMIhXgMIgGhQIADgZIgogKIgLAWIgtBCIhRgiIAPhOIAJgWQgRgJgSgMIgPASIg+A1IhFg2IAihJIARgUQgNgNgQgSIgVARIhIAiIg2hGIA0g8IAWgSIgUgjIgaALIhPAPIghhSIBDgtIAZgLQgGgTgFgUIgaAEIhQgHIgMhYIBMgaIAdgEQAAgRACgVIgfgEIhLgbIALhYIBQgFIAfADIAKglIgcgNIhCgtIAihRIBPAPIAcALIATgiIgXgTIg1g9IA3hFIBHAiIAaAUQATgTAKgJIgUgZIgihJIBGg2IA9A1IATAZIAjgTIgMgfIgQhNIBSgiIAtBCIAMAcIAngKIgEgeIAHhQIBXgMIAaBMIAEAhQASgCAUAAIAEgeIAahMIBYALIAHBRIgFAeIAnAKIAMgcIAuhCIBRAjIgPBOIgMAaIAjAUIARgWIA+g0gAEGlkQgWg2g3gVQg1gYg1AXQg2AWgWA2QgVA1AUA3QAWA1A2AWQA1AXA2gXQA2gVAXg2QAWg1gWg3gAFHk7QgOARACAUQADAWASAMQAQAOAVgEQAVgDANgQQANgRgEgVQgCgVgRgNQgPgMgWACQgVADgMARgABAhbQARANAKAPQANAPAGATQAJAXgFAYQgFAwgmAcQglAcgugGQgugGgcglQgegmAHgtQAHgvAmgcQAlgcAsAGQAbACAUAOgAAWiPQg9gJgwAmQgxAlgJA/QgHA7AlAyQAlAyA+AHQA7AJAzgnQAwglAJg9QAFghgLgfQgHgYgQgVQgQgVgXgQQgagRgjgEgADfh9QglAuAIA5QAHA5AvAjQAtAjA6gHQA7gIAigtQAkgtgIg5QgHg5gugkQgugjg6AGQg6AIgiAugAHNDaQARgNADgWQAEgUgPgRQgMgRgWgDQgUgDgRANQgQANgEAVQgCAVAMAQQAOASAUABQAVAFARgNgADfB9Qg5gHguAjQguAkgJA5QgHA6AjAuQAkAvA4AHQA7AHAugiQAugkAIg5QAHg6gjguQgjgvg6gIgAivCwQg0AXgYA2QgWA2AWA1QAXA3A1AWQA1AWA3gXQA0gVAVg2QAXg3gWg1QgWg1g0gWQg2gXg2AVgABQGiQgTgIgUAIQgTAHgIAUQgJAUAJATQAIAUAUAHQATAJATgJQAUgHAIgUQAJgTgIgUQgKgTgTgIgAhUn8QgUAIgIAUQgIAUAJATQAHAUAUAIQATAIATgIQAUgIAIgUQAJgUgJgSQgIgUgUgJQgSgHgUAHgAmUiFQASgNADgWQACgUgNgRQgNgRgUgDQgWgCgRANQgQAMgDAVQgDAVANARQAOASAUABQAUADARgMgAiwmPQg6gIguAjQguAkgIA5QgHA6AjAuQAkAvA4AHQA7AJAugkQAvgjAGg6QAIg5gjguQgjgug6gJgAlUheQg5AIgjAuQglAsAIA6QAIA5AtAjQAvAkA5gHQA6gIAjgvQAkgugIg4QgHg5gtgjQgugig7AGgAlTD4QgRgOgVADQgVADgNAQQgNASADAVQAEAVAQAMQAPAOAXgDQAVgDANgRQAMgQgDgVQgCgVgRgNg");

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["#F04F45","#EF4D44"],[0,1],-11.3,0,11.4,0).s().p("AgOBwQgugGgdglQgdglAHguQAGguAmgdQAlgcAtAGQAaADAUAOQASAMAKAQQANAOAGAUQAJAWgGAYQgFAwgmAcQgeAXgmAAIgOgBg");
	this.shape_1.setTransform(0.2,0.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#3BADE3").s().p("AAWKHIgDgYQgWABgSgCIgEAYIgbBMIhXgMIgFhQIADgZIgogKIgLAXIgtBCIhRgjIAOhOIAJgWQgQgJgTgMIgOATIg+A1IhGg3IAjhJIARgUIgegeIgVAQIhIAjIg2hHIA1g8IAWgSIgVgjIgZALIhPAPIghhSIBCgtIAZgKIgKgoIgaAEIhRgHIgLhYIBMgaIAdgEQgBgRADgUIgfgFIhLgbIALhYIBQgFIAfADIAJglIgcgNIhCgtIAjhRIBPAPIAcALIATghIgYgTIg0g9IA2hGIBIAjIAZATIAegcIgUgZIgjhJIBHg2IA8A1IAUAZIAigTIgLgfIgQhNIBRgiIAuBCIALAcIAogKIgFgeIAHhQIBYgLIAaBLIAEAhQASgCAUABIAEgfIAahLIBYAKIAHBRIgFAeIAmAKIAMgcIAvhCIBRAkIgPBOIgMAZIAiAVIASgXIA9g0IBGA2IgjBIIgRAXQAOANAOAQIAXgSIBIgiIA2BGIg1A9IgVARIAUAiIAZgJIBPgOIAjBRIhEAtIgXAIIALAqIAZgEIBQAHIALBXIhMAbIgZADIgBAmIAaAFIBLAaIgLBZIhRAFIgZgDIgJApIAXAIIBCAuIgjBSIhPgPIgVgKIgUAlIARAPIA1A8Ig3BGIhHgkIgTgNQgQARgOALIAPAUIAiBHIhGA2Ig9g0IgOgSQgTAMgSAIIAJAWIAOBQIhRAhIgthDIgIgVQgUAGgVAFIADAXIgHBPIhXALgAApGiQgTAHgIAUQgJAUAJATQAHAUAVAIQATAJATgJQATgIAJgUQAJgSgJgVQgJgSgTgJQgKgEgKAAQgJAAgKAEgAivCxQg0AWgYA2QgWA3AWA0QAXA3A0AWQA2AWA2gWQA1gWAVg2QAWg3gVg1QgWg1g1gWQgbgMgcAAQgaAAgaALgAB3CZQguAlgIA4QgIA6AkAuQAjAwA5AGQA7AIAtgjQAvgkAHg4QAIg6gkgvQgigug6gJIgUgBQguAAgmAdgAl5DtQgWADgMARQgNASACAUQAEAVAQANQAQANAWgDQAWgDAMgRQAMgQgDgVQgCgVgRgNQgNgLgRAAIgHAAgAGOCIQgQANgEAVQgBAVAMAQQAOASATABQAWAFAQgNQARgMADgXQAFgUgPgRQgMgRgWgDIgIAAQgQAAgOAKgAlUheQg5AJgjAtQglAsAIA6QAIA5AsAjQAwAkA5gHQA5gIAkgvQAkgugIg3QgIg6gsgiQgngegwAAIgSABgAhYhyQgwAlgJA/QgHA7AkAyQAmAyA9AIQA8AIAygmQAwglAKg+QAEgggKggQgIgYgPgVQgRgVgWgQQgagRgjgEQgMgBgKAAQgwAAgoAegAE7izQg6AJgiAtQglAuAIA5QAHA5AvAjQAsAkA6gIQA8gHAiguQAkgtgIg4QgHg6gugkQgogdgvAAIgRAAgAkYl0QgvAlgHA4QgHA6AjAuQAkAvA4AHQA6AJAvgkQAvgjAGg6QAIg4gjgvQgkgug5gIIgVgCQguAAglAcgAnTjWQgPAMgDAVQgEAVANARQAOASAVABQAUADARgMQARgMADgXQADgTgOgSQgMgRgUgCIgGgBQgTAAgPALgABPmwQg2AWgXA2QgUA2AUA2QAVA1A3AXQA1AWA2gWQA2gWAWg2QAXg1gXg3QgVg1g3gWQgcgMgbAAQgaAAgZALgAFolPQgWADgMARQgNARACAUQADAWARAMQARAOAVgDQAVgDAMgQQAOgRgEgVQgCgWgRgNQgNgKgTAAIgFAAgAhVn8QgTAIgJAUQgHAVAIASQAIAUATAIQAUAJATgJQAUgIAIgTQAIgVgIgRQgIgVgUgJQgJgDgKAAQgJAAgLADg");

	this.addChild(this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-73.2,-73.3,146.5,146.6);


(lib.Symbol3 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#292929").p("AHml9QBDBXAbB/IhwAeQAkBjgSBiIBsAMQgOB2g6BtIhmhAQgyBXhRBBIBHBdQhYBBhzAhIAAAEIgfhwQhqAYhigOIgJByQhrgRhpg3IAAgGIA6hjQhdg5g4hIIhZA9QhHhYgehyIBsghQgZhmAShVIhygXQAHhyBGhmIBhA5QA2hjBIg6Ig+hZQBZhHBugbIAhBuQBlgiBUAWIAXhxQB1AJBgA/Ig5BpQBdAvA4BOgAFUgLQAAiOhlhjQhkhliLAAQiOAAhlBlQhjBjAACOQAACMBjBlQBlBkCOAAQCMAABjhkQBlhlAAiMg");
	this.shape.setTransform(0,1.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#3BADE3").s().p("AkrIUIAAgFIA6hjQhdg6g4hIIhZA+QhHhZgdhxIBrgiQgZhmAShVIhygXQAIhyBFhmIBhA5QA2hiBIg6Ig9hZQBZhIBtgbIAiBuQBlgiBTAXIAXhxQB1AJBhA/Ig6BoQBeAvA3BOIBhhFQBCBYAbB+IhwAeQAkBkgRBhIBrANQgOB2g5BtIhnhBQgxBYhSBAIBIBdQhZBChzAgIAAAFIgehxQhqAZhjgPIgIByQhsgQhpg4gAlWAAQAACLBjBlQBlBkCOAAQCNAABihkQBmhlgBiLQABiOhmhjQhjhmiMAAQiOAAhlBmQhjBjAACOIAAAAgAjzDwQhjhlAAiLQAAiOBjhjQBlhmCOAAQCMAABjBmQBmBjgBCOQABCLhmBlQhiBkiNAAQiOAAhlhkgAFUAAIAAAAg");

	this.addChild(this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-60.4,-61.4,120.9,124.3);


(lib.Symbol2 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#292929").p("Ah1rUQBygQB3ARIgYCrQAAAAABAAQCDAWBlBHIBoiIQBbBFBKBhIiJBoQASAaAPAaQAtBOARBTQACAMACALICogXQARB3gQByIirgYQgXCEhJBlICGBmQhKBhhbBFIhoiJQhtBNh6ATIAXCnQh3ARhygQIAXiqQiEgYhkhJIhnCHQhhhKhFhbICKhpQhLhrgTh3IisAXQgQhyARh3ICsAYQAFgdAIgcQACgKADgKQAJgdAMgbQAIgUAKgUQAQgeAUgcIiKhqQBFhcBhhKIBpCLQABgBABAAQBshOB5gVgAjJkXQAQgLAQgJQAPgJAPgHQAugVAxgGQAwgFA0AIQCOAXBUB1QBUB2gYCLQgCARgEAPQgCALgEAKQgJAegPAbQgBABAAACQgCACgBADQgLATgOARQgOATgQAQQgVASgXARQh0BUiNgXQiOgXhUh1QhTh1AXiMQADgQADgQQAMguAXgnQAWgnAhggQAUgTAXgSg");
	this.shape.setTransform(55.9,55.9);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#336C8A").s().p("Ag3FVQiNgWhUh1QhUh2AXiMIAHgfQALgvAXgnQAWgnAhggQAUgTAYgRQAPgLAQgJQAPgJAQgHQAugVAxgGQAvgGA1AJQCOAXBUB1QBTB1gXCMIgGAgIgGAUQgKAegPAcIgBADIgDAEQgLATgOASQgNASgRAQQgUATgXARQhbBBhsAAQgcAAgfgFg");
	this.shape_1.setTransform(55.9,56.1);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#3BADE3").s().p("Ah2LVIAXiqQiEgYhkhJIhnCHQhhhKhFhbICKhpQhLhrgTh3IisAXQgQhyARh3ICsAYQAFgdAIgcIAFgUQAJgdAMgbQAIgUAKgTQAQgfAUgdIiKhpQBFhcBhhKIBpCLIACgBQBshOB6gVIgYirQBygQB3ARIgYCrIABAAQCDAWBlBHIBoiIQBbBFBKBhIiJBoQASAaAPAaQAtBOARBTIAEAXICogXQARB3gQByIirgYQgXCEhJBlICGBmQhKBhhbBFIhoiJQhtBNh6ATIAXCnQg+AJg5AAQg6AAg4gIgAgslWQgxAGgtAVQgQAHgPAJQgQAJgQALQgXASgUATQghAggWAnQgXAngMAuIgGAgQgXCMBTB1QBUB1COAXQCNAXB0hUQAXgRAVgSQAQgRAOgRQAOgSALgTIACgFIACgDQAPgbAJgeIAGgVIAGggQAYiLhUh2QhUh1iOgXQgggFgcAAQgUAAgUACg");
	this.shape_2.setTransform(55.9,55.9);

	this.addChild(this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-18.4,-18.4,148.6,148.7);


(lib.Symbol1 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#292929").p("AhChZQAkgcAtAGQAaACAVAPQAPALAMAQQAMAPAHATQAJAXgGAYQgFAxgmAbQgkAcgugGQgugGgdglQgcgmAGgtQAHgvAmgcg");
	this.shape.setTransform(72.4,72.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["#F04F45","#EF4D44"],[0,1],-11.3,0,11.4,0).s().p("AgOBwQgugGgdglQgcgmAGgtQAHgvAmgcQAkgcAtAGQAaACAVAPQAPALAMAQQAMAPAHATQAJAXgGAYQgFAxgmAbQgeAXgmAAIgOgBg");
	this.shape_1.setTransform(72.4,72.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#292929").p("AGonAQAOAMANAQIAYgSIBIgiIA2BGIg1A9IgWARIAUAiIAagJIBPgOIAjBRIhEAtIgXAJIALApIAZgDIBQAGIALBXIhMAbIgZADIgBAnIAaADIBLAbIgMBZIhQAGIgZgEQgEAWgFATIAWAIIBCAuIgiBSIhPgPIgVgKQgHANgOAYIARAOIA2A9Ig3BGIhIgkIgTgNQgNAOgQAOIAOAUIAiBHIhGA2Ig8g0IgPgSQgMAIgZANIAJAVIAPBQIhSAhIgshDIgJgVQgSAGgXAFIADAXIgGBPIhXALIgbhLIgDgYQgVABgTgBIgDAXIgbBMIhXgMIgGhQIADgYIgogLIgKAXIguBCIhRgiIAPhPIAJgWQgRgJgSgMIgPATIg9A0IhGg2IAjhJIAQgUQgUgUgJgKIgVAQIhIAiIg2hGIA0g8IAWgRIgUgjIgaAKIhPAPIghhSIBDgtIAZgKQgHgYgDgPIgbADIhQgGIgLhYIBLgaIAdgEQAAgNACgZIgfgFIhLgbIALhXIBRgGIAfAEIAJgmIgcgNIhCgtIAihRIBPAQIAcAKIATghIgXgUIg0g9IA2hFIBIAiIAZAUIAdgcIgTgZIgjhJIBGg2IA9A2IATAYIAjgTIgMgfIgPhNIBRgiIAuBCIALAdIAngLIgEgeIAHhQIBXgLIAaBMIAEAgQATgCATABIAEgfIAahLIBYALIAHBQIgFAeIAnALIAMgcIAuhDIBRAkIgPBNIgMAbIAjAUIASgWIA9g1IBGA2IgjBIgAGfkiQgCgVgRgOQgPgMgWACQgUADgNARQgOASADATQADAWARAMQAQAOAVgDQAWgDAMgRQANgQgEgVgAHYg4QgIg5guglQgugjg5AHQg7AIgiAtQglAtAIA7QAHA4AvAjQAsAjA7gHQA6gHAkguQAigtgGg4gAHgC3QAEgTgOgRQgNgSgVgDQgVgCgRAMQgRAOgDAUQgDAUANASQANAQAVADQAVADARgMQARgNADgWgAnTjWQgQANgDAUQgDAVANASQANARAVABQAVADAQgMQASgMADgWQADgVgOgRQgOgRgTgCQgWgDgRANgAgvn8QgSgHgUAHQgUAIgIAUQgIAWAJARQAGATAVAJQAUAJASgJQAUgIAIgUQAJgTgJgSQgIgVgUgJgAixmOQg5gIguAiQgvAkgIA5QgHA6AjAuQAkAvA4AHQA7AIAugjQAvgjAGg5QAJg6gkguQgkgvg5gHgAlVheQg5AIgjAvQglArAIA6QAIA6AtAiQAuAkA6gHQA6gHAjgwQAkgtgIg5QgGg4gugkQgtgig8AGgAiSgOQgHA8AlAxQAmAzA9AGQA7AJAzgnQAxglAIg9QAFghgLgeQgHgYgQgWQgSgXgVgNQgbgSgigDQg8gJgxAlQgxAmgJA+gAEFljQgWg2g2gVQg2gYg1AWQg2AXgWA2QgVA2AVA1QAUA1A3AXQA1AWA2gWQA2gWAXg2QAWg1gWg2gADfB9Qg5gGgvAiQgvAkgHA5QgIA7AkAtQAiAvA5AHQA6AIAvgjQAugkAIg5QAIg5gkguQgigvg6gJgAAoGiQgTAHgIAUQgIAUAIATQAIAUAUAIQATAIATgIQAUgIAIgUQAJgTgIgUQgJgSgUgJQgTgJgUAJgAAGD9QgVg1g1gWQg2gXg2AWQg0AXgXA1QgYA3AXA0QAWA2A2AXQA2AWA2gXQA0gVAVg1QAXg3gWg2gAlUD4QgQgNgWADQgVADgMAPQgOASADAVQADAVARANQAPANAXgDQAVgDANgRQAMgQgDgVQgDgVgQgNg");
	this.shape_2.setTransform(72.3,72.3);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#3BADE3").s().p("AAVKHIgDgYQgVABgTgBIgDAXIgbBMIhXgMIgGhQIADgYIgogLIgKAXIguBCIhRgiIAPhPIAJgWQgRgJgSgMIgPATIg9A0IhGg2IAjhJIAQgUIgdgeIgVAQIhIAiIg2hGIA0g8IAWgRIgUgjIgaAKIhPAPIghhSIBDgtIAZgKQgHgYgDgPIgbADIhQgGIgLhYIBLgaIAdgEQAAgNACgZIgfgFIhLgbIALhXIBRgGIAfAEIAJgmIgcgNIhCgtIAihRIBPAQIAcAKIATghIgXgUIg0g9IA2hFIBIAiIAZAUIAdgcIgTgZIgjhJIBGg2IA9A2IATAYIAjgTIgMgfIgPhNIBRgiIAuBCIALAdIAngLIgEgeIAHhQIBXgLIAaBMIAEAgQATgCATABIAEgfIAahLIBYALIAHBQIgFAeIAnALIAMgcIAuhDIBRAkIgPBNIgMAbIAjAUIASgWIA9g1IBGA2IgjBIIgRAYQAOAMANAQIAYgSIBIgiIA2BGIg1A9IgWARIAUAiIAagJIBPgOIAjBRIhEAtIgXAJIALApIAZgDIBQAGIALBXIhMAbIgZADIgBAnIAaADIBLAbIgMBZIhQAGIgZgEQgEAWgFATIAWAIIBCAuIgiBSIhPgPIgVgKIgVAlIARAOIA2A9Ig3BGIhIgkIgTgNQgNAOgQAOIAOAUIAiBHIhGA2Ig8g0IgPgSQgMAIgZANIAJAVIAPBQIhSAhIgshDIgJgVQgSAGgXAFIADAXIgGBPIhXALgAAoGiQgTAHgIAUQgIAUAIATQAIAUAUAIQATAIATgIQAUgIAIgUQAJgTgIgUQgJgSgUgJQgJgEgKAAQgKAAgKAEgAiwCxQg0AXgXA1QgYA3AXA0QAWA2A2AXQA2AWA2gXQA0gVAVg1QAXg3gWg2QgVg1g1gWQgcgMgcAAQgaAAgaALgAB3CZQgvAkgHA5QgIA7AkAtQAiAvA5AHQA6AIAvgjQAugkAIg5QAIg5gkguQgigvg6gJIgSgBQgvAAgnAdgAl6DuQgVADgMAPQgOASADAVQADAVARANQAPANAXgDQAVgDANgRQAMgQgDgVQgDgVgQgNQgNgLgRAAIgIABgAGOCIQgRAOgDAUQgDAUANASQANAQAVADQAVADARgMQARgNADgWQAEgTgOgRQgNgSgVgDIgGAAQgSAAgOAKgAlVheQg5AIgjAvQglArAIA6QAIA6AtAiQAuAkA6gHQA6gHAjgwQAkgtgIg5QgGg4gugkQgngdgwAAIgSABgAhYhyQgxAmgJA+QgHA8AlAxQAmAzA9AGQA7AJAzgnQAxglAIg9QAFghgLgeQgHgYgQgWQgSgXgVgNQgbgSgigDQgMgCgJAAQgxAAgnAegAE7iyQg7AIgiAtQglAtAIA7QAHA4AvAjQAsAjA7gHQA6gHAkguQAigtgGg4QgIg5guglQgmgdgvAAIgSABgAkYl0QgvAkgIA5QgHA6AjAuQAkAvA4AHQA7AIAugjQAvgjAGg5QAJg6gkguQgkgvg5gHIgVgCQgtAAglAcgAnTjWQgQANgDAUQgDAVANASQANARAVABQAVADAQgMQASgMADgWQADgVgOgRQgOgRgTgCIgHgBQgSAAgOALgABOmwQg2AXgWA2QgVA2AVA1QAUA1A3AXQA1AWA2gWQA2gWAXg2QAWg1gWg2QgWg2g2gVQgcgNgcAAQgZAAgaALgAFnlPQgUADgNARQgOASADATQADAWARAMQAQAOAVgDQAWgDAMgRQANgQgEgVQgCgVgRgOQgNgKgSAAIgGAAgAhVn8QgUAIgIAUQgIAWAJARQAGATAVAJQAUAJASgJQAUgIAIgUQAJgTgJgSQgIgVgUgJQgJgDgJAAQgKAAgKADg");
	this.shape_3.setTransform(72.3,72.3);

	this.addChild(this.shape_3,this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-1,-1,146.6,146.6);


(lib.gear10 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#292929").p("AIfsoIgiBnIgWAlQAVAPAUASIAfgfIBbg7IBUBVIg8BbIgeAdIAgArIAjgVIBqggIA5BmIhRBJIggAUIAUAwIAlgJIBrgGIAeBzIhgAxIgmAKQAFAaACAbIAoABIBpAXIgCB2IhoAUIgnABQgEAegBAYIAhAJIBhAyIgfB0IhsgHIghgLIgWA1IAeARIBPBHIg8BoIhngiIgcgTQgRAYgTAUIAaAaIA6BaIhVBUIhbg8IgXgZQgVAUgYAPIASAcIAgBoIhnA6IhJhQIgOgcIgzAXIAFAcIAGBtIhyAeIgxhhIgHgeQgdAFgcABIAAAgIgVBqIh2gCIgVhpIAAgfQgcgDgdgFIgJAeIgxBhIhzghIAJhsIAGgcQgRgGgjgQIgPAaIhJBPIhmg8IAjhmIAQgbQgYgPgUgVIgYAXIhbA6IhThTIA9hcIAXgWQgTgWgQgYIgdASIhmAgIg8hoIBShHIAcgRQgKgVgKgeIghAJIhrAEIgehyIBggwIAigJQgEgegBgaIglAAIhogXIAAh2IBrgVIAkAAIAHg2IgjgKIhhgwIAghzIBqAGIAlAKQAMgeAKgVIgggSIhRhIIA9hoIBnAiIAhAVQAOgTAVgWIgcgdIg6hcIBThUIBbA8IAdAeQASgPAZgSIgUgjIghhoIBlg7IBJBRIAUAlQAZgNAagIIgKgnIgHhtIBzgdIAwBhIALAoQAcgDAagBIABgtIAWhqIB1ABIAWBpIgBAtIA1AHIAMgoIAwhhIB0AgIgHBrIgMAnQAZAJAbAMIAUgkIBIhPgAA7nJIABgBQAJiwCAAgQAbAJANAFQB4AwBhBjQBiBjAwB7QAHAUAEAOQAnCIi3AFIgDABQgQifh2h3Qhxh0iegUgABwhqQAtAvAABBQgBBDguAuQgvAwhBAAQhCgDgugvQgugvAAhCQABg/AvgvQAtgvBDACQBAgCAwAvgAADrmQkzAAjdDaQjcDZgDEzQgBE2DaDcQDYDcE1AEQE0ABDcjaQDdjYACk3QABkyjYjdQjajek1gDgAHSA/QC2AJgoCHQgFATgHAPQgvB4hkBhQhiBjh5AuIgrAPQh/AhgHizIAAgDQCcgRB0hyQB4hzASiggAnQgxIgDgBQi0gLAmiFIAMgjQAwh4BihhQBkhiB7guQANgHAbgIQCAgdAFCvIABABQidARh2BzQh2B1gRCggAg9HVIABACQgJCxiBghQgSgGgWgJQh3gvhjhlQhjhjgth5IgNghQgkiJC1gGIAEAAQAOCfBzB2QB2B3CcARg");
	this.shape.setTransform(-0.1,-0.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#336D8A").s().p("AgELsQk1gEjYjbQjajcABk0QADk2DcjZQDdjaEzABQE1ADDaDdQDYDdgBEzQgCE2jdDZQjaDYkyAAIgEAAgAA4GSIAAAPIgBAuIAAADQAHCzB/ghIArgOQB5gvBihjQBkhgAvh5QAHgPAFgSQAoiHi2gJIhJgCQlJAGgKFUgApjDCIANAhQAtB4BjBkQBjBkB3AwQAWAJASAFQCBAhAJiwIgBgDIABgvIgBgPQgFlUlLgKIhDgBIgEAAQi1AHAkCJgAhuhwQgvAwgBBAQAABBAuAvQAuAuBCADQBBAAAvgvQAuguABhEQAAhAgtgvQgwgvhCABIgCAAQhAAAgsAtgAA+nPIgBAAIAABAQAHFUFIAKIBGABIADgBQC3gFgniJQgEgNgHgVQgwh7hihiQhhhkh4gvIgogPQgUgFgRAAQhdAAgHCWgAi6pjQgbAIgNAHQh7AvhkBiQhiBhgwB4IgMAiQgmCGC0AKIADABIBFgBQFKgDAKlUIABhAIgBgBQgEiXhfAAQgQAAgSAEg");
	this.shape_1.setTransform(-0.3,0.2);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#3BADE3").s().p("AhBPMIgVhpIAAgfQgcgDgdgFIgJAeIgxBhIhyghIAIhsIAGgcQgRgGgigQIgQAaIhJBPIhmg8IAjhmIAQgbQgYgPgUgVIgXAXIhcA6IhThTIA9hcIAYgWQgUgWgPgYIgeASIhmAgIg7hoIBShHIAbgRQgJgVgLgeIggAJIhsAEIgehyIBggwIAigJQgDgegCgaIglAAIhogXIABh2IBqgVIAkAAIAHg2IgjgKIhhgwIAghzIBqAGIAlAKQAMgeAKgVIgggSIhRhIIA9hoIBnAiIAhAVQAOgTAVgWIgcgdIg6hcIBThUIBcA8IAcAeQASgPAZgSIgUgjIghhoIBlg7IBJBRIAUAlQAagNAZgIIgKgnIgHhtIBzgdIAwBhIALAoQAcgDAbgBIAAgtIAWhqIB1ABIAWBpIAAAtIA1AHIAMgoIAvhhIB0AgIgHBrIgMAnQAZAJAbAMIAUgkIBIhPIBnA8IghBnIgXAlQAWAPATASIAfgfIBbg7IBVBVIg9BbIgdAdIAfArIAjgVIBrggIA4BmIhRBJIgfAUIAUAwIAkgJIBsgGIAdBzIhfAxIgnAKQAFAaACAbIAoABIBpAXIgBB2IhpAUIgnABQgDAegCAYIAhAJIBhAyIgfB0IhsgHIgggLIgXA1IAfARIBOBHIg7BoIhogiIgcgTQgQAYgUAUIAaAaIA6BaIhVBUIhbg8IgWgZQgWAUgYAPIATAcIAfBoIhmA6IhJhQIgPgcIgzAXIAFAcIAHBtIhyAeIgyhhIgHgeQgdAFgcABIAAAgIgVBqgAoMoMQjdDZgCEzQgCE2DaDcQDYDcE1AEQE1ABDbjaQDdjYACk3QABkyjYjdQjajek1gDIgBAAQkzAAjbDagAA1HYIAAgDQCcgRB0hyQB4hzASigIADAAQC3AJgpCHQgFATgHAPQgvB4hkBhQhiBjh5AuIgqAPQgUAFgRAAQhcAAgGiXgAjFJnQgSgGgXgJQh3gvhjhlQhjhjgth5IgMghQgliJC2gGIADAAQAOCfB0B2QB1B3CcARIABACQgHCVhdAAQgRAAgUgFgAhyB1QgugvAAhCQACg/AugvQAugvBCACQBAgCAwAvQAtAvAABBQgBBDguAuQgvAwhAAAQhDgDgugvgAFKlBQhxh0idgUIAAgBQAJiwCAAgIAoAOQB4AwBiBjQBhBjAwB7QAIAUADAOQAnCIi2AFIgDABQgRifh2h3gAnTgyQi0gLAmiFIAMgjQAwh4BjhhQBjhiB7guQANgHAbgIQCAgdAGCvIAAABQidARh2BzQh2B1gRCgg");
	this.shape_2.setTransform(-0.1,-0.3);

	this.addChild(this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-98.5,-98.8,196.7,197);


(lib.gear8 = function() {
	this.initialize();

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#336D8A").s().p("AgkGyIAAgPIgdgDIgEANIgYAxIg5gPIADg2IADgNIgbgLIgGAMIgkApIg0geIARg0IAHgMIgXgRIgKAKIgtAeIgqgqIAdguIAJgKIgSgVIgLAGIgzARIgegzIAogkIAKgGQgHgNgFgOIgMADIg1ADIgQg5IAxgYIAKgEIgEgdIgKAAIg2gKIAAg6IA0gLIALgBIAEgdIgLgDIgwgYIAPg5IA2ACIAJACIALgbIgIgEIgpgkIAeg0IAzAQIAIAFIATgYIgGgGIgfguIApgpIAvAcIAGAHIAYgTIgFgHIgSgzIA0gfIAkAoIAEAHIAcgMIgCgHIgEg2IA6gQIAYAwIADAIIAegEIAAgIIALg1IA6gBIAKA1IAAAIIAeAEIADgIIAYgwIA5APIgDA2IgBAHIAbAMIAEgHIAkgpIA0AdIgQA0IgFAIIAXATIAHgHIAtgfIAqAqIgcAtIgIAJQAJAJAJAOIAJgGIAzgRIAeA0IgnAkIgJAFIALAbIAKgDIA2gEIAQA7IgxAZIgKADIADAcIANAAIA0AKIAAA6Ig0AMIgNAAIgDAcIAMAEIAwAZIgPA5Ig2gDIgMgDIgLAaIALAHIAoAkIgcAzIg1gQIgMgHIgRAXIAKAKIAfAtIgrAqIgtgdIgKgKIgWARIAHAMIARA0Ig0AeIgkgnIgHgMIgaALIAEANIADA1Ig6AQIgYgwIgEgNIgdAEIAAAOIgKA1Ig6ABg");

	this.addChild(this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-48.6,-48.7,97.4,97.5);


(lib.gear1 = function() {
	this.initialize();

	// Layer 3
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#336D8A").s().p("ApNJOQgxgwgpg6IBsg+QAeApAoAoQC5C4D8AUIAAB9QkxgVjcjdgABILDQD2gXC3i1QAogpAigrIBsA+QgpA4g1A1QjbDbkqAWgAtBAAQAAi9BKihIBtA/Qg7CEAACbQAACnBCCJIhsA/QhSinAAjIgAKFEsQBBiIAAikQAAiYg6iDIBtg/QBJCfAAC7QAADGhRClgAgEA7QgSgCgNgOIgFgFQgEgFgCgEQgDgGgBgKIAAgLQABgIADgGIAFgIIAGgHQANgOASgBIAEgBIAEABIABAAQARACAOANIAGAHIAFAIQAFAKgBAJQAAALgEALIgGAJIgFAFQgNAOgTACIgEAAgAH1n0Qi1i1j4gXIAAh+QErAXDaDaQA8A8AsA/IhtA/Qglg0gugtgAqxnVQArg9A5g7QDUjTEegcIAbgDIAAB+IgbADQjsAciuCuQgrArglAzg");
	this.shape.setTransform(0.5,-0.6);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#292929").p("AFfwxIgPCEQAvAPAtAWIBShnIBrA+IgxB8QAkAZAqAjIBshQIBYBZIhQBrQAfAkAdAqIB9gyIA9BsIhnBSQAUAqASAyICDgQIAgB4Ih8A2QAJAvAEAyICGAUIAAB6IiHAUQgDArgJA1IB8A2IghB4IiEgPQgQAsgWAuIBoBUIg9BrIiAgyQgaAlgiAmIBUBwIhYBXIhwhSQgmAgglAaIAzCBIhrA9IhWhqQgsAUgtAQIAPCJIh4AgIg3iAQguAIgwADIgVCLIh6AAIgUiMQgsgCgzgJIg4CBIh4ggIARiLQgvgQgqgUIhWBsIhrg9IAziDQgngdgjgdIhyBUIhYhXIBVhyQgdgigdgoIiCAzIg/hrIBthWQgSglgTg0IiLAQIgfh4ICBg3QgJg0gDgrIiLgUIAAh6ICLgVQADgzAIgsIiAg3IAgh4ICIAQQAQgsAWguIhthUIA/hsICAAzQAXgiAkgqIhThuIBYhZIBwBSQAggcArggIgyh+IBrg+IBUBpQAsgWAugQIgQiFIB4ghIA2B9QAwgJApgCIAJgCIATiGIB6AAIAUCGQA3AEArAIIA0h7gAhZs/QkeAdjUDTQg6A6gqA+IH2EiIAEgFQApgoAzgUQAPgFAMgDIAApEgAhhhlQgHAGgKAMQgIANgFALQgNAcAAAeQAAAfANAdQAHANAIAKQAHAKAIAGQAlAmAyAEIAaAAQAygEAlgmQAFgFAJgLQAIgKAGgOQAOgbAAggQAAgegMgbQgHgNgHgLQgKgNgGgGQglglgygEIgPgCIgLACQgtADgiAdgADBizIH2kiQgsg/g7g7QjbjbkrgXIAAJGQA/ARAxAwgArtFsIH2kiQgKgjAAgoQAAghAGgbIn6kjQhKCgAAC/QAADGBSCngAisC/In5EjQAqA5AwAwQDcDdExAVIAApCQg+gQgwgsgABKD4IAAJEQErgWDbjbQA0g1Apg4In4kjQgwAtg7AQgANEgBQAAi9hJifIn7ElQAGAaAAAdQAAAmgJAhIH3EiQBQikAAjFg");
	this.shape_1.setTransform(0.3,-0.3);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#3BADE3").s().p("Ag9RpIgUiMQgrgCg0gJIg3CBIh5ghIAQiKQgvgRgpgTIhWBtIhrg+IAziEQgngcgjgdIhxBUIhYhXIBUhyQgdgigdgoIiDAzIg+hsIBthVQgSglgTg0IiKARIggh5ICBg4QgJg0gDgpIiLgVIAAh6ICLgVQADgzAIgsIiAg2IAgh4ICIAPQAQgrAVgvIhshUIA/hsICAA0QAXgjAkgqIhShuIBXhZIBwBSQAfgdArgfIgxh+IBrg+IBUBoQAsgVAugQIgQiFIB5ggIA1B7QAwgIApgDIAJgBIATiGIB6AAIAUCGQA3AEArAHIA0h6IB5AgIgPCEQAuAPAtAWIBRhnIBsA+IgwB7QAjAZAqAkIBshQIBYBZIhRBrQAgAlAdApIB9gyIA9BsIhnBRQAUArASAyICDgPIAfB3Ih6A2QAIAvAEAyICGAUIAAB6IiHAUQgEArgIA2IB7A1IgfB5IiGgRQgPAtgWAuIBoBTIg9BsIiAgyQgaAkghAnIBTBwIhYBXIhvhTQgnAggmAcIA0CAIhsA+IhVhrQgsATgtARIAQCIIh5AhIg3iAQguAHgwAEIgVCLgAqlHhQApA6AxAwQDcDdExAVIAApCQg+gRgwgrgABKD4IAAJFQEqgXDbjbQA1g1Apg3In4kkQgvAtg8AQgAs/gBQAADGBSCnIH3kiQgLgjAAgoQgBghAHgbIn6kkQhKChAAC/gAEAg5QAGAbAAAdQAAAmgJAgIH2EjQBRikAAjFQAAi8hJifgAgKiOQgtADgiAdIgJAIIgQATIgOAYQgMAcABAeQgBAfANAdQAHANAJALQAGAJAHAHQAlAkAzAFIAaAAQAxgFAmgkIAOgRQAIgKAGgOQAOgbAAggQAAgegNgbQgFgMgIgMQgKgNgGgHQglgkgygEIgPgBgABKj7QA/ARAwAxIAIAHIH2kjQgsg/g8g7QjajakrgYgAhZs/QkeAcjUDUQg5A6grA9IH2EiIAEgDQApgpAzgUQAPgFAMgDIAApDg");
	this.shape_2.setTransform(0.3,-0.3);

	this.addChild(this.shape_2,this.shape_1,this.shape);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-113.6,-114.2,227.9,227.9);


(lib.gearMaster = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 7
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(2,1,1).p("ABuAAQAAAtghAgQggAhgtAAQgsAAggghQghggAAgtQAAgsAhggQAgghAsAAQAtAAAgAhQAhAgAAAsg");
	this.shape.setTransform(-476.8,81.8);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(0.1,1,1).p("AQmqmQAAAbgUAUQgTAUgcAAQgCAAgCAAQgZgBgSgTQgUgUAAgbQAAgcAUgTQASgSAYgCIAAAAQADAAACAAQAcAAATAUQAUATAAAcgAEsKdQAAAggWAWQgWAXggAAQgfAAgXgXQgWgWAAggQAAgfAWgWQAXgXAfAAQAgAAAWAXQAWAWAAAfgAIMKdQAAAggXAWQgVAXggAAQggAAgWgXQgWgWAAggQAAgfAWgWQAWgXAgAAQAgAAAVAXQAXAWAAAfgAiSKdQAAAggXAWQgVAXggAAQggAAgWgXQgWgWAAggQAAgfAWgWQAWgXAgAAQAgAAAVAXQAXAWAAAfgABMKdQAAAggXAWQgWAXgfAAQgeAAgWgXQgWgWAAggQAAgfAWgWQAWgXAeAAQAfAAAWAXQAXAWAAAfgAuNKdQAAAggXAWQgWAXgfAAQggAAgWgXQgWgWAAggQAAgfAWgWQAWgXAgAAQAfAAAWAXQAXAWAAAfg");
	this.shape_1.setTransform(-297,69.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#F79433").ss(4,1,1).p("EAiDgM8I0lAAMgrSAAAQioAIgdC1IAAMoQAIAxAmAnQAxAwBEAAQA6AAAsgjAmuoeIB0AAIAAB1Ih0AAgAyKIvIXgAAQA4AAAnAnQAoAoAAA4QAAA4goAnQgnAng4AAI3gAAQg3AAgognQgngnAAg4QAAg4AngoQAognA3AAgAjnnnIRCAAIUoAAAoMmpIAAADIh0AAIAAgDIAAh1IB0AAIAAB1Ih0AAAtSobIB0AAIAAB1Ih0AAgAwkobIB0AAIAAB1Ih0AAgA/rhMQAmgNArAAQBbAABBA7QAFAFAFAEQBFBDAABhQAABhhFBEQhEBGhiAAQhhAAhEhGQg8g7gHhSAugK4IFMAA");
	this.shape_2.setTransform(-283.2,67);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#F79433").ss(2,1,1).p("AzihGQABgXACgXQABgHAAgHQAyABAiAjQAkAjAAA0QAAAxgkAjQgiAjgyABQgBAAAAAAQgBAAgBAAQgzAAgkgkQgjgjAAgyQAAgzAjgjQAkgkAzAAQABAAACAAQAAAAAAAAQADgZADgZQA3mrE+k+QGBmBIdAAQIgAAGBGBQGAGBAAIeQAAIfmAGBQlcFbneAiAgwUeQnagjlZlZQlIlIgwm7QgCgQgBgQQgBgHAAgHQgCgSgBgT");
	this.shape_3.setTransform(-72.8,2.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#F79433").ss(1.5,1,1).p("ABqAAQAAAsgfAfQgfAfgsAAQgqAAgggfQgegfAAgsQAAgBAAgBQABgqAdgdQAggfAqAAQAsAAAfAfQAdAdACAqQAAACAAAAg");
	this.shape_4.setTransform(-67.1,133.7);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#EF4137").s().p("ACSLUQgWgXAAgfQAAgfAWgXQAXgWAfgBQAgABAWAWQAWAXAAAfQAAAfgWAXQgWAWggAAQgfAAgXgWgAhMLUQgWgXAAgfQAAgfAWgXQAXgWAfgBQAeABAWAWQAWAXAAAfQAAAfgWAXQgWAWgeAAQgfAAgXgWgAksLUQgWgXAAgfQAAgfAWgXQAWgWAggBQAfABAWAWQAXAXAAAfQAAAfgXAXQgWAWgfAAQggAAgWgWgAoMLUQgWgXAAgfQAAgfAWgXQAWgWAggBQAfABAWAWQAXAXAAAfQAAAfgXAXQgWAWgfAAQggAAgWgWgA0HLUQgWgXAAgfQAAgfAWgXQAXgWAfgBQAgABAVAWQAXAXAAAfQAAAfgXAXQgVAWggAAQgfAAgXgWgAe3LLQgfgfAAgsIAAgFQABgpAegeQAfgeAsAAQAsAAAfAeQAeAeABAqIAAAEQAAAsgfAfQgfAegsAAQgsAAgfgegEghLADFQgggfAAgtQAAguAgghQAgggAtAAQAuAAAhAgQAgAhAAAuQAAAtggAfQghAhguAAQgtAAggghgArunCIAAgDIB0AAIAAADgAvAnCIAAh0IB1AAIAAB0gAySnCIAAh0IB0AAIAAB0gAocnFIAAh0IB0AAIAAB0gAp6nFIh0AAIAAh0IB0AAIAAB0gArunFgALmpjQgYgBgTgTQgTgUAAgbQAAgbATgUQATgSAYgBIAAAAIAFgBQAcAAATAUQAUAUAAAbQAAAbgUAUQgTAVgcgBIgFAAg");
	this.shape_5.setTransform(-272.2,69.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(180));

	// gear1 copy 3
	this.instance = new lib.gear1();
	this.instance.setTransform(-70.5,2.5,1,1,0,0,0,-0.3,-0.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regY:-0.3,rotation:-60,x:-70.2,y:3.1},179).wait(1));

	// gear3 copy 2
	this.instance_1 = new lib.Symbol4();
	this.instance_1.setTransform(-449.9,-147);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({rotation:60.1},179).wait(1));

	// gear2 copy 2
	this.instance_2 = new lib.Symbol1();
	this.instance_2.setTransform(75.4,-110.5,1,1,0,0,0,72.3,72.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({rotation:59.8},179).wait(1));

	// gear4 copy 3
	this.instance_3 = new lib.Symbol2();
	this.instance_3.setTransform(-288,-151.9,0.872,0.872,0,0,0,56.1,56.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({rotation:44.6,x:-287.9,y:-152},179).wait(1));

	// gear5 copy 2
	this.instance_4 = new lib.Symbol6();
	this.instance_4.setTransform(-360.8,-214.5,1,1,0,0,0,41.7,40.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({regX:41.6,rotation:-44.7},179).wait(1));

	// gear6 copy 2
	this.instance_5 = new lib.Symbol5();
	this.instance_5.setTransform(-475.7,-2.4,1,1,0,0,0,56,56);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).to({rotation:-88.3,y:-2.6},179).wait(1));

	// gear9 copy 2
	this.instance_6 = new lib.Symbol3();
	this.instance_6.setTransform(419.2,165.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).to({rotation:-44.7,x:419.3},179).wait(1));

	// gear7 copy 2
	this.instance_7 = new lib.gear10();
	this.instance_7.setTransform(248.8,186.2,1.092,1.092);

	this.timeline.addTween(cjs.Tween.get(this.instance_7).to({rotation:89.7},179).wait(1));

	// gear10 copy 2
	this.instance_8 = new lib.gear10();
	this.instance_8.setTransform(204.8,-10.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_8).to({rotation:-89},179).wait(1));

	// gear8 copy 2
	this.instance_9 = new lib.gear8();
	this.instance_9.setTransform(351,187.4);

	this.timeline.addTween(cjs.Tween.get(this.instance_9).to({rotation:14.2},179).wait(1));

	// Layer 4
	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#F89943").ss(3,1,1).p("AvCnHIA7AAAtRnHIA8AAAhQnHIA8AAAAgnHIA7AAAi5nHIA6AAAoDnHIA7AAAmXnHIA7AAApznHIA8AAAksnHIA8AAAK4m9IA4ATAJFnHIA7AAACSnHIA7AAAFtnHIA8AAAD9nHIA8AAAHZnHIA8AAAMgmRIAzAeAP0iWIASA4AQOgoIAEA5APDj6IAcA0AN9lTIAoAsArfnHIA8AAAPuC6IgaA1ANsFuIguAmAMRGqIg5ARAKjHDIg7AFAGOHIIA7AAAEiHIIA7AAACyHIIA8AAAH6HIIA7AAAibHIIA8AAAgqHIIA6AAAkJHIIA8AAAl7HIIA8AAAnmHIIA7AAApSHIIA7AAABHHIIA7AAAO3EbIgjAuAsuHIIA7AAAufHIIA7AAAwRHIIA7AAArCHIIA7AAAQQBOIgOA5");
	this.shape_6.setTransform(394.3,-10.4);

	this.timeline.addTween(cjs.Tween.get(this.shape_6).wait(180));

	// Layer 5
	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#FFF680").ss(3,1,1).p("EgirgDnIVBAAIAkAAIAAntIAAgkMAvxAAAIgfXx");
	this.shape_7.setTransform(-432,235.7);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#A39D33").ss(3,1,1).p("EgirgDnIVmAAIAAgkIAAntIAjAAMAvNAAAIgeXx");
	this.shape_8.setTransform(-435.6,239.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_8},{t:this.shape_7}]}).wait(180));

	// Layer 6
	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#FFF680").ss(3,1,1).p("Eg5FgEHQAjgEAlAAQD5AACwCwQCwCuAAD5QAAAtgGAsIVPAAQBTkRDZjXQFhlhH0AAQHyAAFhFhQDZDXBUERMAugAAA");
	this.shape_9.setTransform(128,-191.7);

	this.timeline.addTween(cjs.Tween.get(this.shape_9).wait(180));

	// Layer 2
	this.instance_10 = new lib.six();
	this.instance_10.setTransform(-507.4,178.7);

	this.instance_11 = new lib.six();
	this.instance_11.setTransform(-253,178.7);

	this.instance_12 = new lib.six();
	this.instance_12.setTransform(-54,-194.2);

	this.instance_13 = new lib.six();
	this.instance_13.setTransform(189.5,-194.2);

	this.instance_14 = new lib.three();
	this.instance_14.setTransform(380.2,-58.9);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#000000").ss(1.5,1,1).p("AQSo9QA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAgAJxo9QA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAgARhGJQAAArgXAeQgXAeggAAQggAAgXgeQgXgeAAgrQAAgrAXgeQAXgeAgAAQAgAAAXAeQAXAeAAArgALAGJQAAArgXAeQgXAeggAAQggAAgXgeQgXgeAAgrQAAgrAXgeQAXgeAgAAQAgAAAXAeQAXAeAAArgApwo9QA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAgAwRo9QA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAgAjPo9QA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAgADQo9QA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAgAvCGJQAAArgXAeQgXAeggAAQggAAgXgeQgXgeAAgrQAAgrAXgeQAXgeAgAAQAgAAAXAeQAXAeAAArgAEfGJQAAArgXAeQgXAeggAAQggAAgXgeQgXgeAAgrQAAgrAXgeQAXgeAgAAQAgAAAXAeQAXAeAAArgAiAGJQAAArgXAeQgXAeggAAQggAAgXgeQgXgeAAgrQAAgrAXgeQAXgeAgAAQAgAAAXAeQAXAeAAArgAohGJQAAArgXAeQgXAeggAAQggAAgXgeQgXgeAAgrQAAgrAXgeQAXgeAgAAQAgAAAXAeQAXAeAAArg");
	this.shape_10.setTransform(-65.7,234.8);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(1,1,1).p("AybjJMAk3AAAIAAGTMgk3AAAg");
	this.shape_11.setTransform(373.3,-214.1);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#336D8A").s().p("AO2IYQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAQA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmgAPcFAQgXAeAAArQAAArAXAeQAXAeAgAAQAgAAAXgeQAXgeAAgrQAAgrgXgeQgXgeggAAQggAAgXAegAIVIYQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAQA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmgAI7FAQgXAeAAArQAAArAXAeQAXAeAgAAQAgAAAXgeQAXgeAAgrQAAgrgXgeQgXgeggAAQggAAgXAegAB0IYQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAQA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmgACaFAQgXAeAAArQAAArAXAeQAXAeAgAAQAgAAAXgeQAXgeAAgrQAAgrgXgeQgXgeggAAQggAAgXAegAkrIYQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAQA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmgAkFFAQgXAeAAArQAAArAXAeQAXAeAgAAQAgAAAXgeQAXgeAAgrQAAgrgXgeQgXgeggAAQggAAgXAegArMIYQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAQA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmgAqmFAQgXAeAAArQAAArAXAeQAXAeAgAAQAgAAAXgeQAXgeAAgrQAAgrgXgeQgXgeggAAQggAAgXAegAxtIYQgmgmAAg2IAAt3QAAg2AmgmQAmgmA2AAQA2AAAlAmQAnAmAAA2IAAN3QAAA2gnAmQglAmg2AAQg2AAgmgmgAxHFAQgXAeAAArQAAArAXAeQAXAeAgAAQAgAAAXgeQAXgeAAgrQAAgrgXgeQgXgeggAAQggAAgXAeg");
	this.shape_12.setTransform(-65.7,234.8);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#3BADE3").s().p("AyaDKIAAmTMAk2AAAIAAGTg");
	this.shape_13.setTransform(373.3,-214.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.instance_14},{t:this.instance_13},{t:this.instance_12},{t:this.instance_11},{t:this.instance_10}]}).wait(180));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-659.1,-255.8,1185.3,572.7);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;