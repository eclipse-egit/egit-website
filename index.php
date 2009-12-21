<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EGit";
	$pageKeywords	= "Git, Team Provider, VCS, DVCS, EGit";
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
		<b>EGit</b>, an <a href="http://www.eclipse.org/org/documents/epl-v10.php">EPL</a>
		licensed Eclipse Team provider built on top of <a href="/jgit/">JGit</a>.
		</p>

    <div>
      <h6>EGit Eclipse Plugin Screenshot</h6>
      <a href="images/fm0.3_800x500.png"><img src="images/fm0.3_800x500.png" width="400" height="250" border="0" /></a>
    </div>
	</div>

	<div id="rightcolumn">
		$side_html
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
