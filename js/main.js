$(document).ready(function () {
    $("#CreateID").click(function (e) {

        var ExaName = $('#ExaName').val();
        var phone = $('#phone').val();
        $("#ex6-2").html('<img src="img/ajax-loader.gif" />');
        $.post('CreateID.php', { 'ExaName': ExaName, 'phone': phone }, function (data) {
            $("div").animate({}, "slow");
            $("#ex6-2").html(data);
        });
    });
});