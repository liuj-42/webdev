var show_hide = localStorage.getItem("show_hide");

$( document ).ready((function () {
    if (show_hide=='undefined') {
        show_hide="ones";
    }
    // alert(localStorage.getItem("eqn"));
    var formObj = document.getElementById("form");
    // childs = form.children;
    // childs["ones"].classList.add("show");

    // childs["twos"].classList.add("hide");

    check_show(formObj);
    
}));


function check_show(formObj) {
    if (show_hide == "ones") {
        showOne(formObj);
        
    } else if (show_hide == "twos") {
        showTwo(formObj);
    }
    if (localStorage.getItem("eqn") != 'undefined') {
        formObj.children["result"].value = localStorage.getItem("eqn");
    }
}

function remember(formObj) {
    localStorage.setItem("eqn", formObj.children["result"].innerHTML);
}




function showOne(formObj) {
    inputs = formObj.children;
    inputs["ones"].classList.add("show");
    inputs["ones"].classList.remove("hide");

    formObj["one"].classList.add("active");
    formObj["one"].classList.remove("inactive");

    inputs["twos"].classList.add("hide");
    inputs["twos"].classList.remove("show");

    formObj["two"].classList.add("inactive");
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
    formObj["two"].classList.remove("inactive");
    

    inputs["ones"].classList.add("hide");
    inputs["ones"].classList.remove("show");

    formObj["one"].classList.add("inactive");
    formObj["one"].classList.remove("active");

    inputs["name2"].classList.add("show");
    inputs["name2"].classList.remove("hide");

    localStorage.setItem("show_hide", "twos");
    
}



