function countdown(element, minutes, seconds) {
    // set time for the particular countdown
    var time = minutes*60 + seconds;
    var interval = setInterval(function() {
        var el = document.getElementById(element);
        document.getElementById("class-disable").style.opacity=1;
        var childNodes = document.getElementById("class-disable").getElementsByTagName('*');
            for (var node of childNodes) {
                node.disabled = false;
                }
        //if the time is less than 5s then disable class
        if(time<=5){
            document.getElementById("class-disable").style.opacity=.3;
            var childNodes = document.getElementById("class-disable").getElementsByTagName('*');
            for (var node of childNodes) {
                node.disabled = true;
                }
           
        }
            
        // if the time is 0 then end the counter
        if (time <= 0) {
            
            var text = '<button class="btn btn-warning">Continue</button>';
            el.innerHTML = text;
            setTimeout(function() {
                countdown('time',0,10);
            }, 2000);
            clearInterval(interval);
            return;
        }
        var minutes = Math.floor( time / 60 );
        if (minutes < 10) minutes = "0" + minutes;
        var seconds = time % 60;
        if (seconds < 10) seconds = "0" + seconds; 
        var text = minutes + ':' + seconds;
        el.innerHTML = text;
        time--;
    }, 1000);
}
countdown('time',0,10);

var num=1;
let selectedMoney=10;
document.getElementById("ten").onclick=()=>{
    var num=1 ;
    document.getElementById("num").innerHTML=num;
    selectedMoney=10;
     
     document.getElementById("sum").innerHTML=selectedMoney;
};
document.getElementById("hundred").onclick=()=>{
    var num=1 ;
    document.getElementById("num").innerHTML=num;
    selectedMoney=100;
    document.getElementById("sum").innerHTML=selectedMoney;
    
};
document.getElementById("thousand").onclick=()=>{
    var num=1 ;
    document.getElementById("num").innerHTML=num;
  selectedMoney=1000;
  document.getElementById("sum").innerHTML=selectedMoney;
};
document.getElementById("tenThousand").onclick=()=>{
    var num=1 ;
    document.getElementById("num").innerHTML=num;
    selectedMoney=10000;
    document.getElementById("sum").innerHTML=selectedMoney;
  };

document.getElementById("num").innerHTML=num;
document.getElementById("sum").innerHTML=selectedMoney;
document.getElementById("dec").onclick=()=>{
    if(num>1){
        num--;
    }
    document.getElementById("num").innerHTML=num;
    document.getElementById("sum").innerHTML=num*selectedMoney;
}
document.getElementById("inc").onclick=()=>{
    if(num>=1){
        num++;
    }
    document.getElementById("num").innerHTML=num;
    document.getElementById("sum").innerHTML=num*selectedMoney;
}

