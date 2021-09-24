function clicked(theID) {
    var string = '#' + theID + '_content';
    $(string).dialog("open");
    // alert(theID);
}


$(document).ready(function () {
    $(".accordion").accordion({
        heightStyle: "content",
        active: false,
        collapsible: true
    });

    $(".dialog").dialog({
        autoOpen: false,
        width: 550,
        height: 400,
        show: {
            effect: "blind",
            duration: 300
        },
    });

    // $(".opener").on("click", function () {
    //     var id = $(this).data('id');
    //     var string = id + '_content';
    //     $(string).dialog("open");
    // });


});