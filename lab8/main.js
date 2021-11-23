$(document).ready(function(){
    load_contents();
    show_me("lec1");
});

let json_object;

function load_contents() {
    $.ajax({
        type:"POST",
        url:"part_1.json",
        dataType:"json",
        success: function(data, status) {
            json_object = data;
            let output_nav = "";
            let output_content = "";
            for (let type in data["Websys_course"]) {
                output_nav += "<h2>" + type + "</h2>";
                output_nav += "<ul class=" + type + ">";
                let num = 1;
                for (let name in data["Websys_course"][type]) {
                    let content = data["Websys_course"][type][name];
                    output_nav += "<li class='" + name.slice(0, 3).toLowerCase() + num +" nav-links' onclick=\"show_me('" + name.slice(0, 3).toLowerCase() + num + "');\">" + name + "</li>";
                    output_content += `<div id=\"${name.slice(0, 3).toLowerCase()}${num++}\" class=\"${type.slice(0, 3).toLowerCase()}\">`;
                    // Title Desc Link
                    output_content += "<p>" + name + ": " + content["Title"] + "</p>";
                    output_content += `<p>${content['Desc']}</p>`;
                    if (Object.keys(content["Link"]).length > 1) {
                        let links = 1;
                        for (let link in content["Link"]) {
                            output_content += `<p><a href="${link}">Link ${links++}</a></p>`;
                        }
                    } else {
                        output_content += `<p><a href="${content["Link"]}">Link</a></p>`;
                    }
                    output_content += "</div>";
                }
                output_nav += "</ul>";
                $("#"+type).html(output_content);
                output_content = "";
            }
            $("#nav-ajax").html(output_nav);
            show_me('lec1');
        }, error: function(msg) {
            alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    });

}

function show_me(id) {
    $(".lab").removeClass("show").addClass("hide");
    $(".lec").addClass("hide").removeClass("show");

    $("#"+id).addClass("show").removeClass("hide");

    $(".nav-links").removeClass("active");
    $("."+id).addClass("active")

}

function archive() {

    $.ajax({
        url: 'script.php',
        type: 'post',
        data: { "callFunc1": json_object["Websys_course"]},
        success: function(response) {
            $(".output").removeClass("hide").html(response);
        }
    });
}

function unarchive() {

    $.ajax({
        url: 'script.php',
        type: 'post',
        data: { "callFunc2": json_object["Websys_course"]},
        success: function(response) {
            // alert(response);
            $(".output").removeClass("hide").html(response);
        }
    });
}


