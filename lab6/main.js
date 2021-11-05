ones = []
twos = []
function showOne(formObj) {
    let inputs = formObj.children["blank"].children;
    for (let i = 0; i < inputs.length; i++) {
        console.log(inputs[i]);
        if (inputs[i].name in ones) {

        }
    }
}