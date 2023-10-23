$(document).ready(function() {
    $(".sub").click(function() {
        inputVal = $(".in").val();
        $(".heading").css("color", inputVal);
        $(".heading").text(inputVal);
    });
});