let firstNameArray = ["g1", "g2", "g3", "g4"];

let surnameArray = ["s1", "s2", "s3", "s4"];


let name1div = document.querySelector(".name1");
let name2div = document.querySelector(".name2");
let name3div = document.querySelector(".name3");
let name4div = document.querySelector(".name4");

let divArray = [name1div, name2div, name3div, name4div];


for (let i in firstNameArray) {
    let currentDiv = divArray[i];
    for (let j in surnameArray) {
        
        console.log(firstNameArray[i], surnameArray[j]);

        var p = document.createElement("P");
        var pText = document.createTextNode(firstNameArray[i]+ " " + surnameArray[j]);
        p.appendChild(pText);
        currentDiv.appendChild(p);

    }
}