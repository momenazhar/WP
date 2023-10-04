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

    $("#courseslist").change(function() {
        var course = $(this).val();

        if(course == "all") {
            $("#business").show();
            $("#computer").show();
        }
        
        else if(course == "bus") {
            $("#business").show();
            $("#computer").hide();
        }

        else if(course == "cps") {
            $("#business").hide();
            $("#computer").show();
        }
    })
});