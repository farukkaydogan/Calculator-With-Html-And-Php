var value="";
var sifirla=0;

document.addEventListener('keydown', (event) => {
        var keyCode = (event.keyCode ? event.keyCode : event.which);
        if (event.key=="Backspace"){
                this.value=this.value.slice(0,value.length-1);
        }
        if (keyCode > 47 && keyCode < 58||keyCode>=96&&keyCode<=105||keyCode==111||keyCode==106||keyCode==107||keyCode==109) {
                value+=event.key;

        }

        document.getElementById('historical').innerHTML= this.value;


        if (event.key=="Enter"){
               document.getElementById('inp').value= eval(value);
        }

}, false);


function  func (value){
     if (sifirla==1){
             document.getElementById('historical').innerHTML=eval(this.value);
             document.getElementById('historical').innerHTML+=value;
             this.value=document.getElementById('historical').innerHTML;
             sifirla=0;
     }
     if (sifirla==0){
             document.getElementById('historical').innerHTML+=value;
             this.value=document.getElementById('historical').innerHTML;
     }
}

function f(val) {
        sifirla=1;
        document.getElementById('historical').innerHTML=eval(this.value)+val;

}




function show() {
        document.getElementById('inp').value= eval(value);
}
function cls() {
        this.value="";
        document.getElementById('historical').innerHTML="";
        document.getElementById('inp').value= "";
}


