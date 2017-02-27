<html>
    <head>
        <title>COLOR CALCULATOR</title>
        <link rel="stylesheet" type="text/css" href="web/assets/custom/css/style.css">
        <script src="web/assets/global/js/jquery.js" type="text/javascript"></script>
    </head>
    <form id="calc_form" class="bootstrap-frm" method="post" enctype="multipart/form-data">
        <h1>Calculator </h1>
        <label>
            <span>Input 1</span>
            <input type="text" name="val_a" id="vala" placeholder="INPUT 1">
        </label>
        <label>
            <span>Input 2 </span>
            <input type="text" name="val_b" id="valb" placeholder="INPUT 2">
        </label>
        <label>
            <span>Result </span>
            <input type="text" name="result" id="result" placeholder="RESULT" readonly>
            <input type="hidden" name="operation" id="operation" value="">
        </label>
        <label>
            <span> </span>
            <button class="btn button" data-opt="add">+</button>
            <button class="btn button" data-opt="sub">-</button>
            <button class="btn button" data-opt="mul">*</button>
            <button class="btn button" data-opt="div">/</button>
        </label>

        <span class="error"> </span>

    </form>
</html>

<!-- custom script included here -->
<script src="web/assets/custom/js/function.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        calcOp = new calculatorClass();
        calcOp.clickOperators();
    });
    
</script>
<!-- custom script ends here -->