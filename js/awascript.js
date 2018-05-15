function goback() {
    window.history.back();
}

$(document).ready(function() {
    $("#logout").click(function() {
        var exit = confirm("If you logout auction will end.");

        console.log("Logout pressed");
        console.log(exit);
})