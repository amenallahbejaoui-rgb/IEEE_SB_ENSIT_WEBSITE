let level=1;
let start=false;
let time=60;
let score = 0;
let error=0;
let open = [];
let selected = null;
let elselected = null;
let m =6;
let n = 3;
let pause =false;
let hs= 0;
let stats = [];
let player ="";
let p1=0;
let p2=0;
let mod = 0;
let odd = 0;
let isreleving = false;
let ncard = 18;
var selectlevl = new Audio('./assets/audio/levelselction.wav');
var backgroundsound = new Audio('./assets/audio/background.wav');
var successound = new Audio('./assets/audio/succes.wav');
var doublesuccess = new Audio('./assets/audio/suceccdouble.mp3');
var wooh = new Audio('./assets/audio/wooooh.mp3');
var failed = new Audio('./assets/audio/failed.mp3');
var end1v1game = new Audio('./assets/audio/win2.mp3');
var endgame = new Audio('./assets/audio/endgame.mp3');
var win = new Audio('./assets/audio/win1.mp3');
var hehe = new Audio('./assets/audio/suceccdouble2.mp3')
var strike = 0;
backgroundsound.loop=true;
function init(){
    console.log("hi");
    if(!localStorage.getItem("time"))localStorage.setItem("time",60);
    if(!localStorage.getItem("ncard"))localStorage.setItem("ncard",18);
   ncard= localStorage.getItem("ncard");
   time=localStorage.getItem("time");
    document.getElementById("selectime").value=time;
    document.getElementById("selectcard").value=ncard;
    if(!localStorage.getItem("stat"))localStorage.setItem("stat",'[]');
    if(!localStorage.getItem("heighscore"))localStorage.setItem("heighscore",0);
    document.getElementById("time").innerHTML="Time: "+time;
   // document.getElementById("howtoplay").display='block';
hs=localStorage.getItem('heighscore');
   console.log(
    localStorage.getItem("stat")
   );
   console.log(JSON.parse(localStorage.getItem("stat")));
   stats=JSON.parse(localStorage.getItem("stat"));
    genratecard(6);
}
var refreshIntervalId ;
let seconds = 0; 
async function gamestart(){
    player= document.getElementById("name").value;
    if(!start && player){
        await backgroundsound.play();
        mod=0;
        reset();
        document.getElementById('submenu').style.display="none";
        document.getElementById("cards").style.display="grid";
        document.getElementById("menu").style.display="flex";
        releve();
        hidestart();
        outputpname(player);
        start=true;
        seconds = 0;
       let refreshIntervalId=setInterval(async function() {
        seconds++;
        output(seconds);
        if(seconds == time){
            clearInterval(refreshIntervalId);
            await end();
            await reset();
        } 
    }, 1000);
    }
}
async function about(){
    await selectlevl.play();
    document.getElementById("about").style.display="block";
}
async function hideabout(){
    await selectlevl.play();
    document.getElementById("about").style.display="none";
}
function outputpname(s){
    document.getElementById("pname").innerHTML=s;
}
async function end(){
    await backgroundsound.pause();
    document.getElementById("finscreen").style.display="block";
    document.getElementById("flevel").innerHTML="Level "+level;
    document.getElementById("fscore").innerHTML="score: "+pad(score,6);
    if(score>hs)document.getElementById("hs").innerHTML="# 1 NEW HIGH SCORE !!!!";
    else if(hs-score<=30)document.getElementById("hs").innerHTML="#So CLOSE NEXT TIME HIGH SCORE IS "+hs;
    else document.getElementById("hs").innerHTML="# HIGH SCORE IS "+hs;
    setstat(score);
    document.getElementById('submenu').style.display="flex";
    document.getElementById("cards").style.display="none";
    document.getElementById("menu").style.display="none";
    if(score>hs){
        hs=score;
        localStorage.setItem("heighscore",score);
        await win.play();
    }else{
        await endgame.play();
    }
    
}
function setstat(stat){
    var statics =[];
    var prev={score:score,name:player} ;
   
    let i =0;
    while(i<stats.length && i<10){
        if(stats[i].score<stat){
            statics.push(prev);
            stat=0;
        }
            statics.push(stats[i]);
            i++;
        
    }
    if(i<=stats.length && i<10 && stat!=0){
        statics.push(prev);
    }
    if(stats.length==0){
        statics.push({score:score,name:player});
    }

    stats = statics;
    localStorage.setItem("stat",JSON.stringify(statics));
}
function fend(){
    document.getElementById("finscreen").style.display="none";
}
async function startmodal(){
    if(!start){
       await selectlevl.play();
        document.getElementById("playername").style.display="flex";

    }
}

async function start1v1(){
    if(!start){
        await selectlevl.play();

        await backgroundsound.play();
        document.getElementById('submenu').style.display="none";
        document.getElementById("cards").style.display="grid";
        document.getElementById("menu1v1").style.display="flex";
        document.getElementById("level").style.display="none";
        start= true;
        document.getElementById('cards').style.gridTemplateColumns=" 200px 200px 200px 200px 200px 200px";
        genratecard(ncard);
        p1=0;
        p2=0;
        outputscore1v1();
        selected=null;
        elselected=null;
        mod=1;
        odd=0;
        m=ncard;
        document.getElementById("level").innerHTML=">P1";
        document.getElementById("menu").style.display="none";
        document.getElementById("menu1v1").style.display='flex';
        open=[];
    }
}

async function hidestart(){
    await selectlevl.play();
    document.getElementById("playername").style.display="none";
    
}
async function confsettings(){
    await selectlevl.play();
    if(document.getElementById("selectime").value){
        time = Number(document.getElementById("selectime").value);
        localStorage.setItem("time",time);
    }
    if(document.getElementById("selectcard").value){
        ncard = Number(document.getElementById("selectcard").value);
        localStorage.setItem("ncard",ncard);
    }
}
async function hidesettings(){
    await selectlevl.play();
    document.getElementById("settings").style.display="none";
}
async function stat(){
    await selectlevl.play();
    let tds = "";
    let  i =0;
    stats.forEach(ele=>{if(i<10){tds+="<tr><td>#"+(++i)+"</td><td>"+ele.name+"</td><td>"+ele.score+"</td></tr>"}});
    document.getElementById("tstats").innerHTML=tds;
    document.getElementById("stats").style.display="block";
}
async function hidestat(){
    await selectlevl.play();
    document.getElementById("stats").style.display="none";
}
async function settings(){
    await selectlevl.play();
    document.getElementById("settings").style.display="block";
}
async function reset(){
    document.getElementById('cards').style.gridTemplateColumns=" 200px 200px 200px";
    output(0);
    start=false;
    clearInterval(refreshIntervalId);
    level=1;
    outputlevel();
    genratecard(6);
    open = [];
    m=6;
    selected=null;
    elselected=null;
    score=0;
    outputscore();
    document.getElementById('submenu').style.display="flex";
    document.getElementById("cards").style.display="none";
    document.getElementById("menu1v1").style.display="none";
    document.getElementById("menu").style.display="none";
    document.getElementById("level").style.display="block";
    document.getElementById("level").innerHTML="-SELECT-";

}
function output(s){
    document.getElementById("time").innerHTML="Time: "+(time-s);
}
function animepixel(){
var pix = document.getElementsByClassName("pixel");
for (var i = 0; i < pix.length; i++) {
  pix[i].style.animationDelay = Math.ceil(Math.random()*5000)+"ms";
}
}
let s;
let d=3;
function genratecard(m){
    arr=[...Array(m/2).keys(),...Array(m/2).keys()];;
    shuffle(arr);
    cards="";
    s= getet(3);
    for(let i =0;i<m;i++)cards+='<div class="flipCard">  <div class="card" onclick="check('+i+','+arr[i]+');">  <div class="side front"><div class="sidePanel"><div class="pixelCon">    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div>    <div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div><div class="pixel"></div></div></div></div>  <div class="side back"><img src="./assets/images/Icon'+(arr[i]+1+12*s)+'.png" width="75px"/></div>  </div> </div> ';
    document.getElementById('cards').innerHTML=cards;
    if(m/d>3)document.getElementById('cards').style.gridTemplateColumns+=" 200px";
    animepixel();
    open=[];
    
}
async function releve() {
    await selectlevl.play();
    isreleving=true;
    var cards = document.getElementsByClassName("card");
    for(let i =0;i<cards.length;i++)cards[i].classList.toggle('flipped');
    await new Promise(r => setTimeout(r, 2500));
    for(let i =0;i<cards.length;i++)cards[i].classList.toggle('flipped');
    seconds-=3;
    isreleving=false;
}

async function check(ele,i){
    if(start && !(open.includes(i)) && !isreleving){
        console.log("hi");
        let el = document.getElementsByClassName("card")[ele];
        if(selected==null || selected==null){
            let el = document.getElementsByClassName("card")[ele];
            if(el)el.classList.toggle('flipped');
            selected = i;
            elselected=el;
        }else if(el!=elselected){
            odd++;
                if(el)el.classList.toggle('flipped');
                await new Promise(r => setTimeout(r, 500));
                if(selected!=i){
                    el.classList.toggle('flipped');
                    elselected.classList.toggle('flipped');
                    if(mod){
                        document.getElementById("p1").classList.toggle("s1v1");
                        document.getElementById("p2").classList.toggle("s1v1");
                    }else{
                        score-=Math.floor(15*60/time);
                        outputscore();
                    }

                    await failed.play();
                    strike=0;
                }else{
                    open.push(i);
                    strike++;
                    if(strike<3){
                        await successound.play();
                    }else {
                        await doublesuccess.play();
                    }
                    if(mod){
                        if(mod && odd%2==0)p2+=1;
                        else if(mod)p1+=1
                        odd--;
                        outputscore1v1();
                    }else{
                        score+=Math.floor(30*60/time);
                        outputscore();
                    }
                    
                }

            if(mod)document.getElementById("level").innerHTML=odd%2?">P2":">P1";
                selected=null;
                elselected=null;
        }
    }
    if(open.length==m/2){
        if(mod)end1v1();
        else{
            await backgroundsound.pause();
            await wooh.play();
            await backgroundsound.play();
            if(m<24)m+=2;
            level+=1;
            outputlevel();
            genratecard(m);
            releve();
        }
    }
}
function outputscore1v1(){
    document.getElementById("p1").innerHTML="P1:"+pad(p1,3);
    document.getElementById("p2").innerHTML="p2:"+pad(p2,3);
}
function skip(){odd++;document.getElementById("level").innerHTML=odd%2?">P2":">P1";}
const commnets = ["THE GOAT !!!!","MIND MASTER ;-> ","Scary !","KASO7I !!",":=)","5oooooBZA","THAJIRT 7OTA"];
async function end1v1(){
    await backgroundsound.pause();
    if(p1-p2>ncard/4)await hehe.play();
    else await end1v1game.play();
    document.getElementById("winner").innerHTML=p1>p2?"#P1 IS THE WINNER !!!!!!":"#P2 IS THE WINNER !!!!!!!";
    document.getElementById("commnet").innerHTML=commnets[Math.floor(Math.random()*7)];
    document.getElementById("result").innerHTML="P1:"+pad(p1,3)+" P2:"+pad(p2,3);
    document.getElementById("finscreen1v1").style.display="block";
    document.getElementById("level").innerHTML="-SELECT-";
    document.getElementById("menu").style.display="flex";
    document.getElementById("menu1v1").style.display='none';
    start=false;
    reset();
}
function hidefin1v1(){
    document.getElementById("finscreen1v1").style.display="none";
}
function outputlevel(){
    document.getElementById("level").innerHTML="Level "+level;
}
function outputscore(){
    document.getElementById("score").innerHTML="score: "+pad(score,6);
}
function pad(num, size) {
    num = num.toString();
    while (num.length < size) num = "0" + num;
    return num;
}
function getet(s){
    return Math.floor(Math.random() * s);
}
function shuffle(array) {
    let currentIndex = array.length;
    while (currentIndex != 0) {
      let randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex--;
      [array[currentIndex], array[randomIndex]] = [
        array[randomIndex], array[currentIndex]];
    }
  }

  let canvas = document.querySelector('canvas');
let c = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.addEventListener('resize', () => {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
});

let HorizontalArray = [];
function Horizontal(y) {
  this.y = y;
  this.dy = 0.5;
  this.opacity = 0;

  this.draw = () => {
    c.beginPath();
    c.lineWidth = 3;
    c.strokeStyle = `rgba(255, 0, 255, ${this.opacity})`;
    c.moveTo(0, this.y);
    c.lineTo(canvas.width, this.y);
    c.stroke();
  }

  this.update = () => {
    if(this.y >= canvas.height) {
      HorizontalArray.splice(HorizontalArray.indexOf(this), 1);
    }

    this.opacity += 0.003;

    this.dy += 0.05;
    this.y += this.dy;
    this.draw();
  }
}

let grad = c.createLinearGradient(0,canvas.height,0,0);
grad.addColorStop("0", "rgba(255, 0, 255, 0.5)");
grad.addColorStop("0.55", "rgba(255, 0, 255, 0)");
grad.addColorStop("1.0", "rgba(255, 0, 255, 0)");
let VerticalArray = [];
function Vertical(x) {
  this.x = x;

  this.draw = () => {
    c.beginPath();
    c.lineWidth = 3;
    c.strokeStyle = grad;
    c.moveTo(canvas.width / 2, 200);
    c.lineTo(this.x, canvas.height);
    c.stroke();
  }

  this.update = () => {
    this.draw();
  }
}

let interval = (canvas.width / 10);
let cross = 0 - interval * 8;
for(let i = 0; i < 27; i++) {
  VerticalArray.push(new Vertical(cross));
  cross += interval;
}

setInterval(() => {
  HorizontalArray.push(new Horizontal(canvas.height / 2));
}, 300);

function animate() {
  requestAnimationFrame(animate);
  c.clearRect(0, 0, canvas.width, canvas.height);

  for(let i = 0; i < HorizontalArray.length; i++) {
    HorizontalArray[i].update();
  }
  for(let i = 0; i < VerticalArray.length; i++) {
    VerticalArray[i].update();
  }
}
animate();
