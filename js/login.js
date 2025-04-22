$(document).ready(function () {
    $("#close_eye").on("click", function () {
        $("#password").attr("type", "password");
        $("#open_eye").show();
        $("#close_eye").hide();
    });
    $("#open_eye").on("click", function () {
        $("#password").attr("type", "text");
        $("#open_eye").hide();
        $("#close_eye").show();
    });
});