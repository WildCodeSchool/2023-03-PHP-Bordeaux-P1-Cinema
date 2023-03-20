/*script boutons youtube*/
let youtube = document.getElementById("youtube");
let youtubeOn = document.getElementById("youtubeOn");
let youtubeClose = document.getElementById("youtubeClose");
youtube.style.display="none";
youtubeClose.style.display="none";

/*fonction boutons visualisation youtube*/
function youtubeButton(){
    if(true){
    youtube.style.display="block";
        youtubeOn.style.display="none";
        youtubeClose.style.display="Block";
    }
}

/*fonction boutons fermeture youtube*/
function youtubeButtonCLose(){
    if(true){
        youtube.style.display="none";
        youtubeOn.style.display="initial";
        youtubeClose.style.display="none";
    }
}

/*script header home aléatoire*/
let homeRandow=["avatarTop","creedTop","GoneWithTheWindTop","matrixTop","monCrimeTop","pussInBootsTop","screamTop","terminatorTop","the5ElementTop"];
let homeBackground= document.getElementById("home");
let rand = homeRandow[Math.floor(Math.random()*homeRandow.length)];

if(window.matchMedia("(min-width: 1200px)").matches){
    homeBackground.style.backgroundImage="url('"+ rand + ".jpg')";
} else if(window.matchMedia("(min-width: 767px)").matches){
    homeBackground.style.backgroundImage="url('" + rand + "Medium.jpg')";
}
else if (window.matchMedia("(min-width: 10px)").matches) {
    homeBackground.style.backgroundImage="url('" + rand + "Small.jpg')";
}