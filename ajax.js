$(document).ready(function() {
    $("#province").change(function() {
        var id = $("#province").val();
        $.post("data.php", { id: id }, function(data) {
            $(".huyen").html(data);
        })
    })
})