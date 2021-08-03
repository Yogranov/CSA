function sendFlag(flag) {
    $.post("https://csa.845.co.il/checkFlag.php",
        {
            Flag: flag
        }, function (data) {
            $("#answer").hide("fast");
            $("#answer").html(data);
            $("#answer").show("slow");
        });
}