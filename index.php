<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JGit / EGit";
	$pageKeywords	= "Git, Team Provider, VCS, DVCS, JGit, EGit";
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
		The EGit project maintains two components:
		</p>

		<p>
		<b>JGit</b>, a <a href="http://www.eclipse.org/org/documents/edl-v10.php">EDL/BSD</a>
		licensed, lightweight, pure Java library implementing the <a href="http://git-scm.com/">Git</a>
		version control file access routines, network protocols, and core version
		control algorithms.
		</p>

		<p>
		<b>EGit</b>, an <a href="http://www.eclipse.org/org/documents/epl-v10.php">EPL</a>
		licensed Eclipse Team provider built on top of JGit.
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
