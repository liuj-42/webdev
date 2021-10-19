var ajaxResponse;

$(document).ready(function() {
    $.ajax({
        type:"GET",
        url:"https://api.frankfurter.app/latest",
        dataType:"json",
        success: function(data, status) {
            //do stuff here
            output = "";
            ajaxResponse = data;
            console.log(data);
            for (cur in data["rates"]) {
                // console.log(cur);
                output += '<option value="' + cur + '">' + cur + '</option>';
                // <option value="dog">Dog</option>
                const option = document.createElement("option");
                const node = document.createTextNode(cur);
                option.appendChild(node);
                const element = document.getElementById("currency-select")
                element.appendChild(option);
            }
            

        }, error: function(msg) {
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    });
});

function convert() {
    // console.log("you called the convert function")
    amt = document.getElementById("EURamt");
    if (amt.value == "" || isNaN(amt.value)) {
        amt.value = 0;
        return;
    }
    let amt_number = parseInt(amt.value);

    let cur = $('#currency-select option:selected').text();
    let cur_rate = parseInt(ajaxResponse["rates"][cur]);
    let cur_input = document.getElementById("#curAMT");
    console.log("amt_number:" + amt_number);
    console.log("cur_rate:"+cur_rate);
    console.log("multiplied:"+amt_number * cur_rate)
    // cur_input.value= amt_number * cur_rate;
    // cur_input.setAttribute(value, amt_number * cur_rate)
    $('#curAMT').html(amt_number*cur_rate);
    $('#cur').html(cur);

}
