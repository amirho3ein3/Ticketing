///////////////// footer date and time//////////////////
function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    let y= today.getFullYear();
    let mn= today.getMonth()+1 ;
    let d= today.getDate() ;
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =y +"/"+ mn + "/" + d  ;
    document.getElementById('txt-2').innerHTML =h + ":" + m + ":" + s ;
    setTimeout(startTime, 1000);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }
//////////// header ///////////

function show_head () {
    document.getElementById("text-add").style.display="block" ;
    document.getElementById("text-p").style.display="block" ;
    document.getElementById("text-search").style.display="block" ;
    document.getElementById("close").style.display="block" ;
    document.getElementById("meno1").style.display="none" ;
} 
function hide_head () {
    document.getElementById("text-add").style.display="none" ;
    document.getElementById("text-p").style.display="none" ;
    document.getElementById("text-search").style.display="none" ;
    document.getElementById("close").style.display="none" ;
    document.getElementById("meno1").style.display="block" ;
    // window.location.reload();
} 

function new_ticket() {
    document.getElementById("peygiri-ticket").style.display="none" ;
    document.getElementById("c-r-massage").style.display="none" ;
    var sh1=document.getElementById("new-ticket") ;
    if(sh1.style.display == "none"){
        sh1.style.display="flex"; 
    }
    else
    {sh1.style.display="none";} 
}


/////////// pyygiri js ///////////////

function peygiri_ticket() {
    document.getElementById("new-ticket").style.display="none" ;
    document.getElementById("c-r-massage").style.display="none" ;
    var sh1=document.getElementById("peygiri-ticket") ;
    if(sh1.style.display == "none"){
        sh1.style.display="flex"; 
    }
    else
    {sh1.style.display="none";} 
}

//////////// replay-massage/////////////
function hide_rmassage() {
    document.getElementById("c-r-massage").style.display="none" ;
    document.getElementById("peygiri-ticket").style.display="flex" ;
}
var list = document.querySelector('div.contianer-ticket-list');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    document.getElementById("c-r-massage").style.display="flex" ;
    document.getElementById("peygiri-ticket").style.display="none" ;
  }
}, false);

function back_massage() {
    document.getElementById("peygiri-ticket").style.display="flex" ;
    document.getElementById("c-r-massage").style.display="none" ;
    var sh1=document.getElementById("new-ticket") ;
    if(sh1.style.display == "none"){
        sh1.style.display="flex"; 
    }
    else
    {sh1.style.display="none";} 
}

// function show_select (value) {
//     console.log(value)
//     if(value=="condition")
//     {document.getElementById("select-condition").style.display="block" ;
//     console.log(document.getElementById("select-condition").style.display) }
//     if(value=="topic")
//     document.getElementById("select-topic").style.display="block" ;
//     document.getElementById("select-one").style.display="none" ;
// }
