let youtub = document.getElementById("youtube");
let youtubeOn = document.getElementById("youtubeOn");
let youtubeClose = document.getElementById("youtubeClose");
youtub.style.width="0px";
youtubeClose.style.display="none";

function youtubeButton(){
    if(true){
    youtub.style.width="500px";
        youtubeOn.style.display="none";
        youtubeClose.style.display="Block";
    }

}
function youtubeButtonCLose(){
    if(true){
        youtub.style.width="0px";
        youtubeOn.style.display="initial";
        youtubeClose.style.display="none";
    }

}
