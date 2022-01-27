//2-(2)
function mouseOver1(){
	var elem = document.getElementById("p2");
  elem.innerHTML = "産地:青森県<br>糖度:13度";
}
function mouseOut1(){
	var elem = document.getElementById("p2");
  elem.innerHTML = "";
}

//2-(3)
function pushBtn() {
  var age = document.getElementById("age");
  var age = age.value;

  if(!age.match(/^[0-9]+$/)){
    alert("正しく入力して下さい");
    exit;
  } else if(age >= 20) {
    alert("年齢:"+age+"歳"+"\n"+"成人です");
  } else {
    alert("年齢:"+age+"歳"+"\n"+"未成年です");
  }
  
}
