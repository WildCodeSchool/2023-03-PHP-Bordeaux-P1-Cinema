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

/*---------SEARCHBOX---------*/


function search(e) {



    var pages=Array(
        ["Avatar","avatar.php"],
        ["avatar","avatar.php"],
        ["AVATAR","avatar.php"],
        ["creed 3","creed3.php"],
        ["creed three","creed3.php"],

        ["Creed three","creed3.php"],
        ["creed Three","creed3.php"],
        ["Creed Three","creed3.php"],
        ["CREED THREE","creed3.php"],
        ["CREED 3","creed3.php"],
        ["mon crime","mon_crime.php"],
        ["Mon crime","mon_crime.php"],
        ["mon Crime","mon_crime.php"],
        ["MON CRIME","mon_crime.php"],
        ["puss in boots","pussinboots.php"],
        ["Puss in boots","pussinboots.php"],
        ["puss in Boots","pussinboots.php"],
        ["Puss in Boots","pussinboots.php"],
        ["PUSS IN BOOTS","pussinboots.php"],
        ["scream 6","scream6.php"],
        ["Scream 6","scream6.php"],
        ["SCREAM 6","scream6.php"],
        ["scream six","scream6.php"],
        ["scream Six","scream6.php"],
        ["Scream Six","scream6.php"],
        ["Scream six","scream6.php"],

        ["SCREAM SIX","scream6.php"]    );
    let page=document.getElementById("pages").value;
    for(let i=0;i<pages.length;i++) {
        if(page==pages[i][0]) {
            window.location.href=pages[i][1];
            return false;
        }
    }
    window.location.href="error.php";
    return false;
}

["SCREAM SIX","scream6.php"]




);
var page=document.getElementById("page").value;
for(var i=0;i<pages.length;i++) {
    if(page==pages[i][0]) {
        window.location.href=pages[i][1];
        return false;
    }
}
window.location.href="error.php";
return false;
}
