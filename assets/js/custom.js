$(document).ready(function () {

    /* _____________________________________

     CountDown setting
     _____________________________________ */

    var finalDate = "2022/01/01"; // put the lunching time
    $('#clock').countdown(finalDate, function (event) {
        $(".days").html(event.strftime('%D'));
        $(".hours").html(event.strftime('%H'));
        $(".minutes").html(event.strftime('%M'));
        $(".seconds").html(event.strftime('%S'));
    });

    /* _____________________________________

     Validation Messages
     _____________________________________ */

    // jQuery Validation
    $("#subscribe").validate({
        errorLabelContainer: "#messageBox",
        invalidHandler: function () {
            $("#messageBox").empty();
        },
        // if valid, post data via AJAX
        submitHandler: function () {
            $.post("inc/subscribe.php",
                {
                    email: $("#email").val()
                },
                function (data) {
                    $('#messageBox').show("slow", "swing");
                    $('#messageBox').html(data);
                    setTimeout(function () {
                        $('#messageBox').html('');
                    }, 5000);
                });
        },
        // email fields are required
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com"
            }

        }

    });

    /* _____________________________________

    Click functions to show About and Newsletter Modal
     _____________________________________ */
    $("#showAbout").click(function () {
        $("#front").hide("slow");
        $("#about").show("slow");
    });
    $("#back").click(function () {
        $("#front").show("slow");
        $("#about").hide("slow");
    });

    $("#showNewsletter").click(function () {
        $("#notify").show();
    });
});
