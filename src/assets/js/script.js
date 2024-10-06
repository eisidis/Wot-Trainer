$(document).ready(function() {
    $("#validate").click(function() {
        var userHp = $("#userHp").val();
        $.ajax({
            url: "controllers/indexCtrl.php",
            method: "GET",
            data: { userHp: userHp },
            success: function(response) {
                $("#resultHp").html(response);
            }
        });
    });
});