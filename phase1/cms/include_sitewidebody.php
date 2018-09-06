<?php
	
	if($_SESSION['pccws_feedback']==TRUE) {
		$feedback_status = $_SESSION['pccws_feedback_status'];
		$feedback_heading = $_SESSION['pccws_feedback_heading'];
		$feedback_message = $_SESSION['pccws_feedback_message'];
		
		$_SESSION['pccws_feedback'] = FALSE;
		$_SESSION['pccws_feedback_status'] = '';
		$_SESSION['pccws_feedback_heading'] = '';
		$_SESSION['pccws_feedback_message'] = '';
		
		// Detect status
		if($feedback_status=='error') {
			$error = ' error';
		}
		
		// Activate feedback div through jquery variable
		$feedback_var = 'var feedback = \'true\';';
	}
	
?>

<iframe name="download" width="0" height="0" src="about:blank" frameborder="0"></iframe>

<div class="feedback<?php echo $error; ?>">
	<h3><?php echo $feedback_heading; ?></h3>
    <p>
    	<?php echo $feedback_message; ?>
    </p>
    <a id="dismiss" href="javascript:void(0)">
	    Dismiss
    </a>
</div>

<script>
	<?php echo $feedback_var; ?>
	$(document).ready(function(){
		$(".feedback").hide();
		
		if(feedback=='true') {
			$(".feedback").show().delay(5000).fadeOut(1000);
		}
		
		$("#dismiss").click(function(){
			$(".feedback").hide();
		});
		
	});
	
		$("a").click(function() {
			$(this).addClass("progress");
		});
	
	// Table Sorting
	$('th.sort').click(function(){
	    var table = $(this).parents('table').eq(0)
	    var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
	    this.asc = !this.asc
	    if (!this.asc){rows = rows.reverse()}
	    for (var i = 0; i < rows.length; i++){table.append(rows[i])}
	})
	function comparer(index) {
	    return function(a, b) {
	        var valA = getCellValue(a, index), valB = getCellValue(b, index)
	        return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
	    }
	}
	function getCellValue(row, index){ return $(row).children('td').eq(index).html() }
</script>