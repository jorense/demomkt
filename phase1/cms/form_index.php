<?php include('include_security.php'); ?>

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
            <h1>Edit the forms are are used in the CMS</h1>
            <div id="divider">&nbsp;</div>
          	<h3 id="navigation_menu">Input Forms</h3>
            <p>The forms used in this CMS to edit and add content. Click "View" to manage the fields in the forms.</p>
            <?php 
				// Table variables
				$db_table = 'cms_form';
				$input_form_id = '';
				$reference_column = '';
				$reference_id = '';
			
				// Bulkremove Variables
				$br_form = 'cmsform_bulkremove';
				$br_button = 'cmsform_button';
				$br_checkbox = 'cmsform_check';
			?>
            <a href="form.php?task=add&form_id=3&identifier=&reference_id=&return_link=<?php echo $url; ?>">
                <div class="button">
                    + Add an item
                </div>
            </a>
            <a href="javascript:void(0)">
                <div class="button <?php echo $br_button; ?>">
                    Remove Selected
                </div>
            </a>
            <div id="table_wrap">
                <table id="table_dump">
                    <thead>
                        <tr>
                        	<th scope="col"></th>
                            <th scope="col" class="sort">ID <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Last Modified <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Modified By <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Form Name <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Heading (Edit Item) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Description (Edit Item) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Heading (Add Item) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Description (Add Item) <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Core Table <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Allow Edit <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Allow Add <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Reference ID Column <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Sequence Required <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Default Return Location <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col" class="sort">Remarks <a href="javascript:void(0)"><i class="fa fa-sort"></i></a></th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<form class="<?php echo $br_form; ?>" method="post" action="bulkremove.php">
                            <input type="hidden" name="br_target_table" value="<?php echo $db_table; ?>" />
                            <input type="hidden" name="br_return_link" value="<?php echo $url; ?>" />
                            <?php
                                $result = mysqli_query($conn, "							
                                    SELECT 
                                        *
                                    FROM 
                                        " . $db_table . "
                                    WHERE
                                        remove='0'
									ORDER BY
										name
                                ");
                                $i = 1;
                                while($row = mysqli_fetch_array($result)) {
                                    // Localize variables
                                    foreach($row as $key=>$value) { 
                                        ${$key} = strip_tags($value);
                                    }
        
                                    // ID
                                    $form_id = $id;
                                    $identifier = $id;
                                    
                                    // Last Modified
                                    if($last_modified=='0000-00-00 00:00:00') {
                                        $last_modified = '';
                                    }
                                    else {
                                        $last_modified = '<!--' . date('U', strtotime($last_modified)) . '-->' . date('F d, Y g:i A', strtotime($last_modified));
                                    }
                                    
                                    // Modified By
                                    if($modifier==0) {
                                        $modifier = '';
                                    }
                                    else {
                                        $modifier_result = mysqli_query($conn, "
                                            SELECT
                                                *
                                            FROM
                                                cms_user
                                            WHERE
                                                id='$modifier'
                                            LIMIT
                                                1
                                        ");
                                        while($modifier_row = mysqli_fetch_array($modifier_result)) {
                                            $modifier = $modifier_row['first_name'] . ' ' . $modifier_row['last_name'];
                                        }
                                    }
									
									// Desciption (Edit Item)
									$char_count = 60;
									$edit_description = (mb_strlen($edit_description, mb_detect_encoding($edit_description)) > $char_count) ? mb_substr($edit_description,0,$char_count,mb_detect_encoding($edit_description)) . '...' : $edit_description;
									
									// Desciption (Add Item)
									$char_count = 60;
									$add_description = (mb_strlen($add_description, mb_detect_encoding($add_description)) > $char_count) ? mb_substr($add_description,0,$char_count,mb_detect_encoding($add_description)) . '...' : $add_description;
    
                                    // Allow Edit
                                    if($task_edit==1) {
                                        $task_edit = 'Yes';
                                    }
                                    elseif($task_edit==0) {
                                        $task_edit = 'No';
                                    }
                                    
                                    // Allow Add
                                    if($task_add==1) {
                                        $task_add = 'Yes';
                                    }
                                    elseif($task_add==0) {
                                        $task_add = 'No';
                                    }
                                    
                                    // Sequence Required
                                    if($require_sequence==1) {
                                        $require_sequence = 'Yes';
                                    }
                                    elseif($require_sequence==0) {
                                        $require_sequence = 'No';
                                    }
                                    
                                    // Default Return Location
                                    $default_return = '<a href="' . $default_return . '">' . $default_return . '</a>';
                                    
                                    // Row Background
                                    if($i % 2 == 0) {
                                        $bkg = 'dark';
                                    }
                                    else {
                                        $bkg = 'light';
                                    }
                                    
                                    echo '
                                        <input type="hidden" name="bulk_remove[]" class="check' . $identifier . '" value="" />
                                        <script>
                                            $(document).ready(function(){
                                                $(".' . $br_checkbox . '.' . $identifier . '").click(function() {
                                                    var value' . $identifier . ' = $(".check' . $identifier . '").val();
                                                    if(value' . $identifier . '=="") {
                                                        $(".check' . $identifier . '").val("' . $identifier . '");
                                                    }
                                                    else {
                                                        $(".check' . $identifier . '").val("");
                                                    }
                                                });
                                            });
                                        </script>
                                        <tr class="' . $bkg . '">
                                            <td><input type="checkbox" class="' . $br_checkbox . ' ' . $identifier . '" /></td>
                                            <td>' . $form_id . '</td>
                                            <td>' . $last_modified . '</td>
                                            <td>' . $modifier . '</td>
                                            <td>' . $name . '</td>
                                            <td>' . $edit_title . '</td>
                                            <td>' . $edit_description . '</td>
                                            <td>' . $add_title . '</td>
                                            <td>' . $add_description . '</td>
                                            <td>' . $core_table . '</td>
                                            <td>' . $task_edit . '</td>
                                            <td>' . $task_add . '</td>
                                            <td>' . $reference_id_column . '</td>
                                            <td>' . $require_sequence . '</td>
                                            <td>' . $default_return . '</td>
                                            <td>' . $remark . '</td>
                                            <td><a href="form_view.php?form_id=' . $identifier . '&back=' . $url . '">View</a></td>
                                        </tr>
                                    ';
                                    $i++;
                                }
                            ?>
                        </form>
                        <script>
							$(document).ready(function(){
								// Update these 3 variables for each table
								var button = '.<?php echo $br_button; ?>';
								var checkbox = '.<?php echo $br_checkbox; ?>';
								var form = '.<?php echo $br_form;?>';
								
								var checked = checkbox + ':checked';
								
								$(button).hide();
								
								$(checkbox).click(function() {
									if ( $(checked).length > 0) {
										$(button).show();
									} else {
										$(button).hide();
									}
								}); 

								$(button).click(function(){
									var removeConfirm = confirm("Are you sure you want to remove the selected items? This cannot be undone. If you want to hide the items on the website, simply set \"Public\" to \"No\"");
									if (removeConfirm){
										$(form).submit();
									}
								});
							});
						</script>
                  </tbody>
                </table>
            </div>
            

        </div>
	</div>
    <?php include('include_sitewidebody.php'); ?>
</body>
</html>