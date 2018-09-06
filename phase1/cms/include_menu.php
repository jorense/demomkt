<!--[if lt IE 9]>
    <a href="http://browsehappy.com/" target="_blank">
        <div id="alert">
            Seems like you're using an outdated browser. Some of the features on this site may not function properly. Click here to upgrade.
        </div>
    </a>
<![endif]-->
<noscript>
    <div id="alert">
        Seems like javascript has been disabled on your browser. Some of the features on this site may not function properly.
	</div>
</noscript>
<div id="header">
    <h1><?php echo $cms_title; ?></h1>
</div>

<div id="menu">
    <ul>
        <a href="dashboard.php"><li>Dashboard</li></a>
    </ul>
    <div id="divider">&nbsp;</div>
    <ul>
        <a href="general_index.php"><li>General</li></a>
		<a href="industry_index.php"><li>Industries</li></a>
		<a href="infinitum_index.php"><li>Infinitum</li></a>
		<a href="service_index.php"><li>Services</li></a>
		<a href="datacenter_index.php"><li>Data Center</li></a>
		<a href="stories_index.php"><li>Stories</li></a>
    </ul>
	<div id="divider">&nbsp;</div>
	<ul>
		<a href="about_index.php"><li>About Us</li></a>
		<a href="news_index.php"><li>News</li></a>
		<a href="insight_index.php"><li>Insights</li></a>
		<a href="event_index.php"><li>Events</li></a>
		<a href="career_index.php"><li>Career</li></a>
		<a href="contact_index.php"><li>Contact</li></a>
		<a href="search_index.php"><li>Search</li></a>
	</ul>
    <div id="divider">&nbsp;</div>
    <ul>
        <a href="upload_index.php"><li class="secondary">Upload Files</li></a>
        <a href="account_index.php"><li class="secondary">Manage Accounts</li></a>
        <a href="<?php echo $real_root_directory; ?>"><li class="secondary">Visit Website</li></a>
        <a href="form_index.php"><li class="secondary">CMS Configuration</li></a>
    </ul>
    <div id="divider">&nbsp;</div>
    <ul>
        <a href="admin_logout.php"><li class="secondary">Log Out</li></a>
    </ul>
</div><!--
