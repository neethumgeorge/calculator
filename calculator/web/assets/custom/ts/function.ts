class calculatorClass {
    /**
     * constructor 
     */
    constructor() {
        this.clickOperators();
    }
    
    /**
     * operator cick action
     */
    public clickOperators(){
        $(".btn").off('click');
        $(".btn").click(function (e) {
            e.preventDefault();
            let data = $(this).data('opt');
            $("#operation").val(data);
            if (($("#valb").val() != '') && ($("#vala").val() != ''))
            {
                $.ajax({ 
                    type: "POST",
                    url: 'calculate.php',
                    data: $("#calc_form").serialize(),
                    success: function (data) {
                        $("#result").val(data);
                    }

                });
            } else {
                $(".error").html("**ENTER INPUT VALUES FIRST");
            } 
        });
    }
}