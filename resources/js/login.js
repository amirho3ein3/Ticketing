function changeText() {
     document.getElementById("code").innerHTML = "کد  ملی :" ;
     document.getElementById("code").style.marginLeft = "6px";
     document.getElementById("button-back").href="/html/login.html" ;

     const a1 =document.getElementById("a-signup") ;
     a1.remove() ;
     document.getElementById("a-forget").innerHTML = "رمز : " ;
     // const element = document.createElement("p"); ;
     // element.innerHTML="" ;
     // const a2= document.getElementById("a-forget");
     // a2.replaceChild(element , a2.firstChild);
     document.getElementById("button-login").innerHTML = "دریافت رمز" ;

     document.getElementById("login-link").style.display="none" ;
     document.getElementById("button-givepass").style.display="block" ;
     
}

function receivedpass() {
     document.getElementById("a-forget").innerHTML = "رمز : 123456 " ;
}