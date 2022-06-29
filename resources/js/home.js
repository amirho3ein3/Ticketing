const searchBtn = document.getElementById("searchButton");

searchBtn.addEventListener('click', (e) => {
    const searchInput = document.getElementById("inputContainer");
    if(searchInput.classList.contains("open-input")){
        searchInput.classList.add("close-input");
        searchInput.classList.remove("open-input");
    }else{
        searchInput.classList.remove("close-input");
        searchInput.classList.add("open-input");
    }
})

function show1() {
    var sh1=document.getElementById("phone") ;
    if(sh1.style.display == "none")
    {sh1.style.display="block"; 
    }
    else
    {sh1.style.display="none";} 
    document.getElementById("telegram").style.display="none" ;
    document.getElementById("pey").style.display="none" ; 
}
function show2() {
    var sh2=document.getElementById("telegram") ;
    if(sh2.style.display == "none")
    {sh2.style.display="block"; 
    }
    else
    {sh2.style.display="none";}  
    document.getElementById("phone").style.display="none" ;
    document.getElementById("pey").style.display="none" ; 
}
function show3() {
    var sh3=document.getElementById("pey") ;
    if(sh3.style.display == "none")
    {sh3.style.display="block"; 
    }
    else
    {sh3.style.display="none";}  
    document.getElementById("telegram").style.display="none" ;
    document.getElementById("phone").style.display="none" ;  
}
function showabout(){
    var t=document.getElementById("about") ;
    if(t.style.display == "none")
    {t.style.display="block"; 
    }
    else
    {t.style.display="none";}
}