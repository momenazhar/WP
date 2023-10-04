$(document).ready(function() {
    $(".box").hover(function() {
        $(this).css("background-color", "gray");
        $(this).css("color", "white");
        $(this).css("border-radius", "15px");
    }, function(){
        $(this).css("background-color", "white");
        $(this).css("color", "black");
        $(this).css("border-radius", "0px");
    });

    $("input").focus(function() {
        $(this).css("background-color", "pink");
        $(this).css("border-radius", "15px");
    });
    $("input").blur(function() {
        $(this).css("background-color", "aliceblue");
        $(this).css("border-radius", "0px");
    });

    $("#bt").click(function() {
        var username = $("#username").val();
        var email = $("#email").val();
        alert(username + " " + email);
    })
});