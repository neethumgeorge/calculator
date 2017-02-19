<html>
<head>
<title>COLOR CALCULATOR</title>
<link rel="stylesheet" type="text/css" href="inc/css/style.css">
<script src="inc/js/jquery.js"
        type="text/javascript"></script>
</head>
<form id="calc_form" class="bootstrap-frm" method="post" enctype="multipart/form-data">
 <h1>Calculator 
       
    </h1>
	<label>
	  <span>Val1 :</span>
<input type="text" name="val_a" id="vala" placeholder="INPUT 1">
</label>
	<label>
	  <span>Val2 :</span>
<input type="text" name="val_b" id="valb" placeholder="INPUT 2">
</label>
	<label>
	  <span>Result :</span>
<input type="text" name="result" id="result" placeholder="RESULT" readonly>
<input type="hidden" name="opt" id="opt" value="">
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
<script src="inc/js/function.js" type="text/javascript">

</script>