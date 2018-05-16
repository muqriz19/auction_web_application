function goback() {
    window.history.back();
}
$(document).ready(function () {
    
    var chatInterval = 250;

    var $chatUsername = $("#username")
    var $chatScreen = $("#chatbox");
    var $chatMessageInput = $("#bid-input");
    var $chatSend = $("#submitmsg");

    function sendMessage() {

        var userNameString = $chatUsername.val();
        var chatInputString = $chatMessageInput.val();

        $.get("./write.php", {
            username: userNameString,
            text: chatInputString
        });

        $chatUsername.val("");
        retrieveMessages();
    }

    function retrieveMessages() {
        $.get("./read.php", function (data) {
            $chatScreen.html(data); //Paste content into chat output
        });
    }

    $chatSend.click(function () {
        sendMessage();

    });

    setInterval(function () {
        retrieveMessages();
    }, chatInterval);
});