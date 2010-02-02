<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Nova";
	

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList(array());
	$Nav->addNavSeparator("EGit", 	"/egit");
	$Nav->addCustomNav("Download", "/EGit/download", "_self", 3);
	$Nav->addCustomNav("Documentation", "/EGit/documentation", "_blank", 3);
	$Nav->addCustomNav("Support", "/EGit/support", "_blank", 3);
	$Nav->addCustomNav("Getting Involved", "/EGit/developers", "_blank", 3);
	
	$pageKeywords	= "eclipse, egit, git, vcs";
	$pageAuthor		= "Chris Aniszczyk";
	$pageTitle 		= "EGit";

	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/EGit", "_self");
	$Menu->addMenuItem("Download", "/EGit/download", "_self");
	$Menu->addMenuItem("Documentation", "/EGit/documentation", "_self");
	$Menu->addMenuItem("Support", "/EGit/support", "_self");
	$Menu->addMenuItem("Developers", "/EGit/developers", "_self");
	
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>' . "\n\t");
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style2.css"/>' . "\n\t");
	
	$App->Promotion = TRUE;
?>
