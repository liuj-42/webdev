function validate() {
    var form = document.getElementById("addForm");
    // alert(document.getElementById("addForm").elements.length);
    var isValid = true;
    var msg = "Form is valid";
    // alert(formObj.fullName.value);
    if (form.fullName.value=="") {
        if (isValid) {
            msg = "You must enter a name\n";
            isValid = false;
            form.fullName.focus();
        } else {
            msg += "You must enter a name\n";
        }
    }

    if (form.email.value=="") {
        if (isValid) {
            msg = "You must enter an email\n";
            isValid = false;
            form.email.focus();
        } else {
            msg += "You must enter an email\n";
        }
    }

    if (form.phone.value=="") {
        if (isValid) {
            msg = "You must enter a phone number\n";
            isValid = false;
            form.phone.focus();
        } else {
            msg += "You must enter a phone number\n";
        }
    }

    if (form.message.value=="") {
        if (isValid) {
            msg = "You must enter the content of the message\n";
            isValid = false;
            form.message.focus();
        } else {
            msg += "You must enter the content of the message\n";
        }
    }
    alert(msg);
    return isValid; 
}