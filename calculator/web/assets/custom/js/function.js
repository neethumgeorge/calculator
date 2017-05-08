var calculatorClass = (function () {
    /**
     * constructor
     */
    function calculatorClass() {
        this.clickOperators();
    }
    /**
     * operator cick action
     */
    calculatorClass.prototype.clickOperators = function () {
        $(".btn").off('click');
        $(".btn").click(function (e) {
            e.preventDefault();
            var data = $(this).data('opt');
            $("#operation").val(data);
            if (($("#valb").val() != '') && ($("#vala").val() != '')) {
                $.ajax({
                    type: "POST",
                    url: 'calculate.php',
                    data: $("#calc_form").serialize(),
                    success: function (data) {
                        $("#result").val(data);

                    },
                    error: function () {
                        $(".error").html("**ENTER INPUT VALUES FIRST");
                    }
                });
            }
            else {
                $(".error").html("**ENTER INPUT VALUES FIRST");
            }
        });
    };
    return calculatorClass;
}());
