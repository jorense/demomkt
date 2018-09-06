<?php
	if($wedding_package==TRUE) {
		// Miscellaneous
		$result = mysql_query("
			SELECT
				*
			FROM
				miscellaneous
			WHERE
				id IN(236, 237, 238, 239, 240, 241, 242, 243, 244, 245, 246)
		");
		while($row=mysql_fetch_array($result)) {
			foreach($row as $key=>$value) { 
				${$key} = $value;
			}
			$copy = str_replace(["\r\n","\r","\n"], "", $row['copy_' . $lang]);
			
			switch($id) {
				case '236':
					$wedding_menu_about = strip_tags($copy);
					break;	
					
				case '237':
					$wedding_menu_guide = strip_tags($copy);
					break;
						
				case '238':
					$wedding_menu_photo = strip_tags($copy);
					break;	
					
				case '239':
					$wedding_menu_faq = strip_tags($copy);
					break;	
					
				case '240':
					$wedding_menu_contact = strip_tags($copy);
					break;	
					
				case '241':
					$wedding_menu_home = strip_tags($copy);
					break;	
					
				case '242':
					$wedding_footer_heading_package = strip_tags($copy);
					break;
					
				case '243':
					$wedding_footer_heading_about = strip_tags($copy);
					break;	
					
				case '244':
					$wedding_footer_heading_contact = strip_tags($copy);
					break;	
					
				case '245':
					$wedding_footer_heading_language = strip_tags($copy);
					break;	
					
				case '246':
					$wedding_package_more = strip_tags($copy);
					break;	
			}
		}
		
		// Side Menu Prefix
		$wedding_side_wedding = '
			<div class="shadow_hide">
				<div class="group">
					<ul>
		';
		$wedding_side_photo = '
			<div class="shadow_hide">
				<div class="group">
					<ul>
		';
		
		$recommend_count = 0;
		
		$result = mysql_query("
			SELECT
				*
			FROM
				package_index
			WHERE
				active_" . $lang . " = '1' AND
				publish_date <= '$current_time' AND
				expiry_date >= '$current_time' AND
				(
					type = 'wedding' OR
					type = 'pre-wedding'
				)
			ORDER BY
				publish_date DESC	
		");
		$wedding_package_count = mysql_num_rows($result);
		while($row=mysql_fetch_array($result)) {
			foreach($row as $key=>$value) { 
				${$key} = $value;
			}
			
			// Language
			switch($lang) {
				case "en":
					$description = strip_tags($description_en);
					$char_count = 300;
					break;
					
				case "tc":
					$description = strip_tags($description_tc);
					$char_count = 150;
					break;
			}
			
			// ID	
			$package_id = $id;
			
			// Description
			$description = (mb_strlen($description, mb_detect_encoding($description)) > $char_count) ? mb_substr($description,0,$char_count,mb_detect_encoding($description)) . '...' : $description;
			
			// Location
			$location_query = mysql_query("
				SELECT
					*
				FROM
					package_location
				WHERE
					remove = '0' AND
					id = '$location_id'
				LIMIT
					1
			");
			$location = '';
			while($location_row=mysql_fetch_array($location_query)) {
				$location = $location_row['location_' . $lang];
			}
			
			// Build Side Menu
			if($type=='wedding') {
				$wedding_side_wedding .= '
                	<a href="package_detail.php?id=' . $package_id . '&lang=' . $lang . '" title="' . $description . '">
                    	<li>
                        	' . $location . '
                            <i class="fa fa-diamond fa-fw"></i>
                        </li>
					</a>
				';
			}
			elseif($type=='pre-wedding') {
				$wedding_side_photo .= '
                	<a href="package_detail.php?id=' . $package_id . '&lang=' . $lang . '" title="' . $description . '">
                    	<li>
                        	' . $location . '
                            <i class="fa fa-camera-retro fa-fw"></i>
                        </li>
					</a>
				';
			}
			
			// Build Header & Footer
			if($recommend==1 && $recommend_count<=7) {
				if($type=='wedding') {
					$type_icon = '<i class="fa fa-diamond fa-fw"></i>';
				}
				elseif($type=='pre-wedding') {
					$type_icon = '<i class="fa fa-camera-retro fa-fw"></i>';
				}
				
				$wedding_header .= '
					<a href="package_detail.php?id=' . $package_id . '&lang=' . $lang . '"><li class="destination">' . $type_icon . ' ' . $location . '</li></a>
				';
				
				$wedding_footer .= '
					<li><a href="package_detail.php?id=' . $package_id . '&lang=' . $lang . '">' . $location . ' ' . $type_icon . '</a></li>
				';
				
				$recommend_count++;
			}
		}
		
		// Side Menu Suffix
		$wedding_side_wedding .= '
					</ul>
				</div>
			</div>
		';
		$wedding_side_photo .= '
					</ul>
				</div>
			</div>
		';
		
		// Footer Suffix 
		if($wedding_package_count > $recommend_count) {
			$wedding_footer .= '
				<li class="open_side"><a href="javascript:void(0);">' . $wedding_package_more . '</a></li>
			';
		}
	}
?>

<!-- Footer (normal) -->
<div class="footer shadow">
    <div class="container no_space desktop_only">
        <div class="item_wrap">
            <ul>
                <li>
                    <a href="index.php?lang=<?php echo $lang; ?>"><img class="brand" src="img_asset/logo-grey.svg" /></a>
                </li>
                <li>
                    <?php echo $company_name; ?> &copy; <?php echo date("Y") ?>
                </li>
                <li>
                    <?php echo $agency_license; ?>
                </li>
                <li>
                    <?php echo $all_rights_reserved; ?>
                </li>
            </ul>
        </div>
        <?php echo $footer_menu; ?>
        <div class="item_wrap">
            <ul>
                <li><h6><?php echo $footer_language_option; ?></h6></li>
                <li class="<?php echo $inactive_tc; ?>"><a href="<?php echo $tc_current_url; ?>">繁體中文</a></li>
                <li class="<?php echo $inactive_en; ?>"><a href="<?php echo $en_current_url; ?>">English</a></li>
                <li class="<?php echo $inactive_jp; ?>"><a href="<?php echo $jp_current_url; ?>">日本語</a></li>
            </ul>
        </div>
        <div class="item_wrap">
            <ul>
                <li><h6><?php echo $footer_social; ?></h6></li>
                <li>
                    <?php echo $facebook . $weibo . $pinterest . $linkedin . $instagram; ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="container exception pad mobile_only">
        <div class="item_wrap">
            <a href="index.php?lang=<?php echo $lang; ?>"><img src="img_asset/logo-grey.svg" /></a>
            <p>
                <?php echo $company_name; ?> &copy; <?php echo date("Y") ?><br>
                <?php echo $agency_license; ?><br>
                <?php echo $all_rights_reserved; ?><br>
            </p>
            <div class="clear"></div>
        </div>
    </div>
</div>

<!-- Footer (wedding) -->
<div class="footer shadow wedding">
    <div class="container no_space desktop_only">
        <div class="item_wrap">
            <ul>
                <li>
                    <a href="wedding.php?lang=<?php echo $lang; ?>"><img class="brand" src="img_asset/wedding-logo-grey.svg" /></a>
                </li>
                <li>
                    <?php echo $company_name; ?> &copy; <?php echo date("Y") ?>
                </li>
                <li>
                    <?php echo $agency_license; ?>
                </li>
                <li>
                    <?php echo $all_rights_reserved; ?>
                </li>
            </ul>
        </div>
        <div class="item_wrap">
            <ul>
                <li><h6><?php echo $wedding_footer_heading_package; ?></h6></li>
                <?php echo $wedding_footer; ?>
            </ul>
        </div>
        <div class="item_wrap">
            <ul>
                <li><h6><?php echo $wedding_footer_heading_about; ?></h6></li>
                <li class="menu_about"><a class="anchor" href="wedding.php?lang=<?php echo $lang; ?>#about"><?php echo $wedding_menu_about; ?></a></li>
                <li class="menu_guide"><a class="anchor" href="wedding.php?lang=<?php echo $lang; ?>#guide"><?php echo $wedding_menu_guide; ?></a></li>
                <li class="menu_photography"><a class="anchor" href="wedding.php?lang=<?php echo $lang; ?>#photography"><?php echo $wedding_menu_photo; ?></a></li>
                <li class="menu_faq"><a class="anchor" href="wedding.php?lang=<?php echo $lang; ?>#faq"><?php echo $wedding_menu_faq; ?></a></li>
            </ul>
        </div>
        <div class="item_wrap">
            <ul>
                <li><h6><?php echo $wedding_footer_heading_contact; ?></h6></li>
                <li><a href="#"><?php echo $wedding_menu_contact; ?></a></li>
                <li><a href="index.php?lang=<?php echo $lang; ?>"><?php echo $wedding_menu_home; ?></a></li>
            </ul>
        </div>
        <div class="item_wrap">
            <ul>
                <li><h6><?php echo $wedding_footer_heading_language; ?></h6></li>
                <li><a href="<?php echo $tc_current_url; ?>">繁體中文</a></li>
                <li><a href="<?php echo $en_current_url; ?>">English</a></li>
            </ul>
        </div>
    </div>
    <div class="container exception pad mobile_only">
        <div class="item_wrap">
            <a href="wedding.php?lang=<?php echo $lang; ?>"><img src="img_asset/wedding-logo-grey.svg" /></a>
            <p>
                <?php echo $company_name; ?> &copy; <?php echo date("Y"); ?><br>
                <?php echo $agency_license; ?><br>
                <?php echo $all_rights_reserved; ?><br>
            </p>
            <div class="clear"></div>
        </div>
    </div>
</div>