<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EGit";
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
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>
		EGit is an Eclipse Team provider for <a href="http://git-scm.com/">Git</a>.
		Git is a distributed SCM, which means every developer has a full copy of all
		history of every revision of the code, making queries against the history
		very fast and versatile. The EGit project is implementing Eclipse tooling
		for the JGit Java implementation of Git.
		</p>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Incubation</h6>
			<div align="center"><a href="/projects/what-is-incubation.php"><img align="center" src="/images/egg-incubation.png" border="0" alt="Incubation" /></a></div>
		</div>
		<div class="sideitem" style="text-align: center">
			<img src="egit2.png" width="150">
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/projects/project_summary.php?projectid=technology.egit">Project Summary</a></li>
				<li><a href="http://www.eclipse.org/proposals/egit/">Project Proposal</a></li>
			</ul>
		</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
