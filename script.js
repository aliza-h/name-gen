// After dropdown click, the page gets longer. How to fix?!?!

// Just add and delete the panels as child divs??
// It might be a browser-specific issue.


let infoButton1 = document.getElementById("ibutton-1");
let info1 = document.getElementById("panel-1");

let infoButton2 = document.getElementById("ibutton-2");
let info2 = document.getElementById("panel-2");

let infoButton3 = document.getElementById("ibutton-3");
let info3 = document.getElementById("panel-3");

let visDetector1 = 0;
let visDetector2 = 0;
let visDetector3 = 0;

function setVisibility1() {
    if (visDetector1 == 0) {
        
        info1.style.height = "auto";
        info1.style.width = "50vw";
        info1.style.marginTop = "2vw";
        info1.style.marginBottom = "2vw";
        info1.style.marginLeft = "2vw";
        info1.style.padding = "2vw";

        info1.style.visibility = "visible";
        infoButton1.innerHTML = "<p>Why have a pen name?</p><p>&#9660;</p>";
        visDetector1 = 1;
    } else if (visDetector1 == 1) {
        
        info1.style.height = "0vh";
        info1.style.width = "0vw";
        info1.style.marginTop = "1vh";
        info1.style.marginBottom = "1vh";
        info1.style.marginLeft = "0vw";
        info1.style.padding = "0vw";

        info1.style.visibility = "hidden";
        infoButton1.innerHTML = "<p>Why have a pen name?</p><p>&#10148;</p>";
        visDetector1 = 0;
    }
}

function setVisibility2() {
    if (visDetector2 == 0) {
        
        info2.style.height = "auto";
        info2.style.width = "50vw";
        info2.style.marginTop = "2vw";
        info2.style.marginBottom = "2vw";
        info2.style.marginLeft = "2vw";
        info2.style.padding = "2vw";

        info2.style.visibility = "visible";
        infoButton2.innerHTML = "<p>How to choose names</p><p>&#9660;</p>";
        visDetector2 = 1;
    } else if (visDetector2 == 1) {
        
        info2.style.height = "0vh";
        info2.style.width = "0vw";
        info2.style.marginTop = "1vh";
        info2.style.marginBottom = "1vh";
        info2.style.marginLeft = "0vw";
        info2.style.padding = "0vw";
        

        info2.style.visibility = "hidden";
        infoButton2.innerHTML = "<p>How to choose names</p><p>&#10148;</p>";
        visDetector2 = 0;
    }
}

function setVisibility3() {
    if (visDetector3 == 0) {
        
        info3.style.height = "auto";
        info3.style.width = "50vw";
        info3.style.marginTop = "2vw";
        info3.style.marginBottom = "2vw";
        info3.style.marginLeft = "2vw";
        info3.style.padding = "2vw";

        info3.style.visibility = "visible";
        infoButton3.innerHTML = "<p>Name resources</p><p>&#9660;</p>";
        visDetector3 = 1;
    } else if (visDetector3 == 1) {
        
        info3.style.height = "0vh";
        info3.style.width = "0vw";
        info3.style.marginTop = "1vh";
        info3.style.marginBottom = "1vh";
        info3.style.marginLeft = "0vw";
        info3.style.padding = "0vw";
        
        info3.style.visibility = "hidden";
        infoButton3.innerHTML = "<p>Name resources</p><p>&#10148;</p>";
        visDetector3 = 0;
    }
}

infoButton1.addEventListener("click", setVisibility1);
infoButton2.addEventListener("click", setVisibility2);
infoButton3.addEventListener("click", setVisibility3);