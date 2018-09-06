<?php 
	include('include_security.php'); 
	
	// Localize GET variables
	foreach($_GET as $key=>$value) { 
		${strip_tags(mysqli_real_escape_string($conn, $key))} = strip_tags(mysqli_real_escape_string($conn, $value));
		// task, form_id, identifier, reference_id, return_link
	}
	
	if($form_id=='') {
		// No form id
		header('Location: index.php');
		exit();
	}
	
	if($task!='edit' && $task!='add') {
		// Invalid task
		header('Location: index.php');
		exit();
	}
	
	// Edit task must have identifier
	if($task=='edit' && $identifier=='') {
		header('Location: index.php');
		exit();
	}
	
	// Get form info
	$result = mysqli_query($conn, "
		SELECT
			*
		FROM
			cms_form
		WHERE
			remove = '0' AND
			id = '$form_id'
		LIMIT
			1
	");
	$exist = mysqli_num_rows($result);
	if($exist!=1) {
		// Form does no exist
		header('Location: index.php');
		exit();
	}
	while($row=mysqli_fetch_array($result)) {
		// Localize row array
		foreach($row as $key=>$value) { 
			${$key} = $value;
		}
		
		// Set return link
		if($return_link=='') {
			$return_link = $default_return;
		}
		
		// Check if current task is allowed
		if($task=='edit' && $task_edit==0) {
			// Edit not allowed
			header('Location: ' . $return_link);
			exit();
		}
		elseif($task=='add' && $task_add==0) {
			// Add not allowed
			header('Location: ' . $return_link);
			exit();
		}
		
		// Set title & description
		if($task=='edit') {
			$heading = $edit_title;
			$description = $edit_description;
		}
		elseif($task=='add') {
			$heading = $add_title;
			$description = $add_description;
		}
	}
	
	// Get fields
	$result = mysqli_query($conn, "
		SELECT
			*
		FROM
			cms_field
		WHERE
			remove = '0' AND
			form_id = '$form_id'
		ORDER BY
			sequence
	");
	while($row=mysqli_fetch_array($result)) {
		// Localize row array
		foreach($row as $key=>$value) { 
			${$key} = $value;
		}
		
		// Form ID
		$field_id = $id;
		
		// Compulsory Detect
		if($compulsory==1) {
			$compulsory = 'required';
		}
		else {
			$compulsory = '';
		}
		
		// Requirements Detect
		switch($requirement) {
			case 'email':
				$requirement = 'data-parsley-type="email"';
				break;
				
			case 'number':
				$requirement = 'data-parsley-type="number"';
				break;
				
			case 'url':
				$requirement = 'data-parsley-type="url"';
				break;
		}
		
		// Get target value for edit task
		if($task=='edit') {
			$target_result = mysqli_query($conn, "
				SELECT
					*
				FROM
					" . $target_table . "
				WHERE
					id = '" . $identifier . "'
				LIMIT 
					1
			");
			while($target_row=mysqli_fetch_array($target_result)) {
				$target_value = htmlentities($target_row[$target_column]);
			}
		}
		else {
			$target_value = '';
		}
		
		// Field label
		$field .= '
			<div id="field_wrap">
				<div id="label">
					' . $label . '
				</div><!--
		';
		
		// Field input based on type
		switch($type) {
			case 'Text Field':
				$field .= '
                    --><div id="field">
                    	<input class="form_field" type="text" name="' . $field_id . '" value="' . $target_value . '" ' . $compulsory . ' ' . $requirement . '/>
                    </div><!--
				';
				break;
				
			case 'Rich Text Editor':
				$field .= '
                    --><div id="field">
                        <textarea class="form_field" name="' . $field_id . '" id="rte' . $field_id . '" ' . $compulsory . ' ' . $requirement . '>' . $target_value . '</textarea>
                    </div><!--
				';
				$rich_text_editor .= 'CKEDITOR.replace( "rte' . $field_id . '" );';
				break;
				
			case 'Dropdown (Custom Value)':
				$option = '
					<option value="">Please Select</option>
				';
				// Explode the values in the cell into an option array
				$option_array = explode(', ', $value_data);
				foreach ($option_array as $value_pair) {
					// Explode the value elements (option value and option text) into array
					$value_element = explode(';', $value_pair);
					// Check if target value matches current option value
					if($target_value==$value_element[1]) {
						$selected = ' selected';
					}
					else {
						$selected = '';								
					}
					//build options
					$option .= '
						<option value="' . $value_element[1] . '"' . $selected . '>' . ucfirst($value_element[0]) . '</option>
					';

				}
				
				$field .= '
					--><div id="field">
						<select class="form_field" name="' . $field_id . '" ' . $compulsory . ' ' . $requirement . '>
							' . $option . '
						</select>
					</div><!--
				';
				break;
				
			case 'Dropdown (Reference Value)':
				$option = '
					<option value="">Please Select</option>
				';
				// Explode the values in the cell into an option array
				$option_array = explode(', ', $value_data);
				$target_option_table = $option_array[0];
				$target_option_text = $option_array[1];
				$target_option_data = $option_array[2];
				
				// Get options from db
				$option_result = mysqli_query($conn, "
					SELECT
						*
					FROM
						" . $target_option_table . "
					WHERE
						remove = '0'
					ORDER BY
						" . $target_option_text . "
				");
				while($option_row=mysqli_fetch_array($option_result)) {
					$option_text = $option_row[$target_option_text];
					$option_data = $option_row[$target_option_data];
					
					// Check if target value matches current option value
					if($target_value==$option_data) {
						$selected = ' selected';
					}
					else {
						$selected = '';								
					}
					
					//build options
					$option .= '
						<option value="' . $option_data . '"' . $selected . '>' . ucfirst($option_text) . '</option>
					';
				}
				
				$field .= '
					--><div id="field">
						<select class="form_field" name="' . $field_id . '" ' . $compulsory . ' ' . $requirement . '>
							' . $option . '
						</select>
					</div><!--
				';
				break;
				
			case 'Upload (File)':
				if($target_value!='') {
					$filename = '../file_lib/' . $target_value;
					// Check file exisits
					if(file_exists($filename)) {
						$existing_file = '
							<span>
								<a href="' . $filename . '" target="_blank">View Existing File</a>
								<a href="uploadremove.php?identifier=' . $identifier . '&target_table=' . $target_table . '&target_column=' . $target_column . '" target="download" class="remove_upload">
									Remove <i class="fa fa-trash-o"></i>
								</a> 
							</span>
						';
					}					
				}
				$field .= '
                    --><div id="field">
                    	<input class="form_field" type="file" name="' . $field_id . '" ' . $compulsory . ' ' . $requirement . '/>
						' . $existing_file . '
                    </div><!--
				';
				$existing_file = '';
				break;
				
			case 'Upload (Image)':
				if($target_value!='') {
					$filename = '../img_lib/' . $target_value;
					// Check image exisits
					if(file_exists($filename)) {
						$existing_file = '
							<span>
								<a href="' . $filename . '" target="_blank"><img src="../include/imgresize.php?src=' . $filename . '&w=400&zc=0&q=60" /></a>
								<a href="uploadremove.php?identifier=' . $identifier . '&target_table=' . $target_table . '&target_column=' . $target_column . '" target="download" class="remove_upload">
									Remove <i class="fa fa-trash-o"></i>
								</a>
							</span>
						';
						// $remove_img = '<label><input type="checkbox" name="remove_img" value="1" />Remove image</label>';
					}
				}
				$field .= '
                    --><div id="field">
                    	<input class="form_field" type="file" name="' . $field_id . '" ' . $compulsory . ' ' . $requirement . '/>
						' . $existing_file . '
                    </div><!--
				';
				$existing_file = '';
				break;
				
			case 'Date Time Picker':
				$field .= '
                    --><div id="field">
                    	<input class="form_field datetimepicker" type="text" name="' . $field_id . '" value="' . $target_value . '" ' . $compulsory . ' ' . $requirement . '/>
                    </div><!--
				';
				$date_time_picker = '
					jQuery(".datetimepicker").datetimepicker({
						step:10,
						format:"Y-m-d H:i:00"
					});
				';
				break;
		}
		
		// Field instructions
		$field .= '
				--><div id="help">
					' . $instruction . '
				</div>
			</div>
		';
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>    
    <?php include('include_sitewidehead.php'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $cms_title; ?></title>
</head>

<body>
	<div id="wrap">
	    <?php include('include_menu.php'); ?>
        --><div id="content_wrap">
			<h1><?php echo $heading; ?></h1>
            <?php echo $description; ?>
            <form id="form" method="post" enctype="multipart/form-data" action="submit.php" data-parsley-validate>
                <input type="hidden" name="form_id" value="<?php echo $form_id; ?>" />
                <input type="hidden" name="task" value="<?php echo $task; ?>" />
                <input type="hidden" name="identifier" value="<?php echo $identifier; ?>" />
                <input type="hidden" name="reference_id" value="<?php echo $reference_id; ?>" />
                <input type="hidden" name="return_link" value="<?php echo $return_link; ?>" />
                
                <?php echo $field; ?>

            	<div id="field_wrap">
                	<div id="label">
                    	&nbsp; 
                    </div><!--
                	--><div id="field">
                    	<input class="button" type="submit" value="Save"> <img class="load" src="loading.gif" />
                    </div><!--
                	--><div id="help">
                    	Sends the content you have entered to the server to be saved, which may take several minutes. Please be patient and do not click the button more than once.
                    </div>
                </div>
                <script>
					<?php echo $rich_text_editor; ?>
					<?php echo $date_time_picker; ?>
				</script>
            </form>
			<div id="divider">&nbsp;</div>
            <a href="<?php echo $return_link; ?>">
                <div class="button">
                    Back
                </div>
            </a>
        </div>
	</div>
    
	<script type="text/javascript">
		$(document).ready(function(){
			// Hide uploaded content when remove is clicked
			$(".remove_upload").click(function() {
				$(this).parent().addClass("hide_upload");
			});
			
			// Display loading gif after clicking save and parsley is passed
			$(".button").click(function() {
				setTimeout(function(){
					if($('.parsley-error').length==0) {
						$("img.load").addClass("ing");
					}
					else {
						$("img.load").removeClass("ing");
					}
				},200);
			})
		});
	</script>
    
    <?php include('include_sitewidebody.php'); ?>
</body>
</html>