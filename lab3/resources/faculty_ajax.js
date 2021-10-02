$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "../resources/faculty.json",
        dataType: "json",
        success: function(data, status){
          var output = ""; 
            $.each(data.profs, function(i, item) {
                output += '<div class="info">';
                output += '<img src = "../resources/' + item.picURL + '" alt="' + item.name + '"class = portrait>'
                output += '<h2>' + item.name + '</h2>';
                output += '<div>';
                output += '<p class="align-left"><i>' + item.role + '</i></p>';
                output += '<p class="align-right"><a href="' +item.email+'">'+item.email+'</a></p>';
                output += '</div>';
                output += '<p>' + item.desc + '<p>';
                output += '</div>';
          });
        output += "<br/>";
        $('#content').html(output);
        }, error: function(msg) {
          alert("There was a problem: " + msg.status + " " + msg.statusText);
        }
    });
  });