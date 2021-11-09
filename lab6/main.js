var show_hide = localStorage.getItem("show_hide");

$( document ).ready((function () {
    if (show_hide=='undefined') {
        show_hide="ones";
    }
    var formObj = document.getElementById("form");

    check_show(formObj);
    
}));


function check_show(formObj) {
    if (show_hide == "ones") {
        showOne(formObj);
        
    } else if (show_hide == "twos") {
        showTwo(formObj);
    }
}

function showOne(formObj) {
    inputs = formObj.children;
    inputs["ones"].classList.add("show");
    inputs["ones"].classList.remove("hide");

    formObj["one"].classList.add("active");

    inputs["twos"].classList.add("hide");
    inputs["twos"].classList.remove("show");

    formObj["two"].classList.remove("active");

    inputs["name2"].classList.add("hide");
    inputs["name2"].classList.remove("show");
    
    localStorage.setItem("show_hide", "ones");

    
}


function showTwo(formObj) {
    inputs = formObj.children;

    inputs["twos"].classList.add("show");
    inputs["twos"].classList.remove("hide");

    formObj["two"].classList.add("active");
    

    inputs["ones"].classList.add("hide");
    inputs["ones"].classList.remove("show");

    formObj["one"].classList.remove("active");

    inputs["name2"].classList.add("show");
    inputs["name2"].classList.remove("hide");

    localStorage.setItem("show_hide", "twos");
    
}



