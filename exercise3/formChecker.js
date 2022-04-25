let reset = document.getElementById("resetBtn");
reset.addEventListener( "click", event => { resetAll(); } );

function resetAll(){
    document.getElementById("form1").reset();
}

function sub(){
    if( document.getElementById("username").value.length == 0 ){
        alert("One of the fields is empty!");
        return false;
    }
    if( document.getElementById("password").value.length == 0 ){
        alert("One of the fields is empty!");
        return false;
    }
    if( document.getElementById("artQ").value.length == 0 ){
        alert("One of the fields is empty!");
        return false;
    }
    if( document.getElementById("artQ").value < 0 ){
        alert("Can't have negative quantity!");
        return false;
    }
    if( document.getElementById("armorQ").value.length == 0 ){
        alert("One of the fields is empty!");
        return false;
    }
    if( document.getElementById("armorQ").value < 0 ){
        alert("Can't have negative quantity!");
        return false;
    }
    if( document.getElementById("swordQ").value.length == 0 ){
        alert("One of the fields is empty!");
        return false;
    }
    if( document.getElementById("swordQ").value < 0 ){
        alert("Can't have negative quantity!");
        return false;
    }
    if( !document.getElementById("free").checked &&
        !document.getElementById("3day").checked &&
        !document.getElementById("overnight").checked ){
        alert("One of the fields is empty!");
        return false;
    }
    return true;
}
