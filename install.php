<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EGit Installation";
	$pageKeywords	= "Git, Team Provider, VCS, DVCS";
	$pageAuthor		= "Shawn Pearce";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	include("_sideBars.php");
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>
		An official update site is not yet available.
		</p>
		
		<h5>Non-Eclipse Snapshot Update Site</h5>
		<p>
		Robin Rosenberg maintains an external update site at
		<a href="http://www.jgit.org/updates/">http://www.jgit.org/updates/</a>
		hosting periodic snapshots from the development trunk.  These are
		<b>not official</b> releases and are only made available to help the
		EGit development team use the plugin to develop itself.
		</p>
	</div>

	<div id="rightcolumn">
		$side_html
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
