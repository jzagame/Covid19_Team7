$(document).ready(function() {

});

function addactive(a) {
    $("#" + a).click(function() {
        $("#" + a).addClass("active");
    });
}