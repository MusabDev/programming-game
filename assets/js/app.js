$(document).ready(function() {
    function generate_challenge() {
        $.ajax({
            url: "vendor/ajax/generate_challenges.php",
            type: "post",
            success: function (result) {
                $("#get_challenge").html(result);
            }
        });
    }
    setTimeout(function(){
        generate_challenge();
    }, 3000);

    $(document).on("click", "#i_dont_know", function () {
        $(this).addClass("none");
        setTimeout(function(){
            generate_challenge();
        }, 1000);
    });

    $(document).on("click", ".programming_lang", function () {
        var this_btn = $(this);
        var pl = $(this).text();
        var cl = $(this).data("id");
        
        $.ajax({
            url: "vendor/ajax/submit_challenges.php",
            type: "post",
            data: {pl, cl},
            success: function (result) {
                $(".programming_lang").attr("disabled", "disabled");
                if (result == 1) {
                    this_btn.attr({
                        "disabled" : "disabled",
                        "class" : "currect"
                    });
                    $.ajax({
                        url: "vendor/ajax/update_point.php",
                        type: "post",
                        data: {cl, "add" : "true"},
                        success: function (output) {
                            $("#total_score").text(output);
                        }
                    });
                } else {
                    this_btn.attr({
                        "disabled" : "disabled",
                        "class" : "wrong"
                    });
                    $.ajax({
                        url: "vendor/ajax/update_point.php",
                        type: "post",
                        data: {cl, "remove" : "true"},
                        success: function (output) {
                            $("#total_score").text(output);
                        }
                    });
                }
                setTimeout(function(){
                    generate_challenge();
                }, 1000);
            }
        });
    });
});