window.onload = init;

function init(){
	//maps events to specific elements to eventhandlers
	document.getElementById("arrow1").onclick = left;
	document.getElementById("arrow2").onclick = right;
}

function left(){
	var j = whichpic();
	j--;
	
	if (j==0){
		j=5;
	}
	document.getElementById("slide").setAttribute("src","pictures/trainshow/train"+j+".jpg");
}

function right(){
	var j = whichpic();
	j++;
	
	if (j==6){
		j=1;
	}
	document.getElementById("slide").setAttribute("src","pictures/trainshow/train"+j+".jpg");
}

function whichpic(){
	var currentpic = document.getElementById("slide").getAttribute("src");
	if (currentpic == "pictures/trainshow/train1.jpg"){
		return 1;
	}else if(currentpic == "pictures/trainshow/train2.jpg"){
		return 2;
	}else if(currentpic == "pictures/trainshow/train3.jpg"){
		return 3;
	}else if(currentpic == "pictures/trainshow/train4.jpg"){
		return 4;
	}else{
		return 5;
	}
}
