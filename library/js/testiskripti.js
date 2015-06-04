
var testiTeksti = 0;
var ask = true;

var leipäkebab = 5;
var cocis = 2;
var ranskalaiskebab = 6.5;
var rullakebab = 6.5;
var hawajipizza = 7.5;
var fanta = 2;
var dilinger = 7.5;
var darinspesialkebab = 9;

var lista = [cocis, fanta];

function kysymys(){
	while(ask === true){
		var foodType = prompt("Minkä annoksen söit?");
		var more = prompt("Söitkö muuta?");
		if(more !== "joo"){
			ask = false;
		}
	}
}

kysymys();
/*
var lasku = function(parametri){
	
}

jQuery.each(lista,function() {
    testiTeksti += this;
});

lasku();


//var jmaara = prompt("kuinka monta juomaa joit");


/*
for (var i = rmaara; i = 0; i++) {
	askFood();
};

var askFood = function(){
	var foodType = prompt("Mitä ruokaa söit?");
	return foodType;
}
*/

//Don't remove the lines below!!!

document.getElementById("container").innerHTML = testiTeksti;