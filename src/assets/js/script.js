const next = document.getElementById('next')

next.addEventListener("click", () => {
    location.reload();
})



$(document).ready(function () {
    $("#validate").click(function (e) {
        var userHp = $("#userHp").val();
        if (userHp == hp) {
            $("#resultHp").html("Bien joué");
        } else {
            $("#resultHp").html("raté c'était " + hp);
        }
    });
});