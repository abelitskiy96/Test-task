$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'calc.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url,
        type:     "POST", 
        dataType: "html",
        data: $("#"+ajax_form).serialize(),
        success: function(response) {
        	result = $.parseJSON(response);
        	$('#result_form').html(result.sum);
    	},
    	error: function(response) { 
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}

function SetVL1(vl) {
	document.getElementById('sum1').value = vl;
}

function SetVL2(vl) {
	document.getElementById('sum2').value = vl;
}

function SetRG1(vl) {
	document.getElementById('range1').value = vl;
}

function SetRG2(vl) {
	document.getElementById('range2').value = vl;
}