<?php
/**
 * Copyright (c) 2018 Eclipse Foundation and others.
 *
 * This program and the accompanying materials are made
 * available under the terms of the Eclipse Public License 2.0
 * which is available at https://www.eclipse.org/legal/epl-2.0/
 *
 * Contributors:
 *    Christopher Guindon (Eclipse Foundation)
 *
 * SPDX-License-Identifier: EPL-2.0
 */

require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");

// Load Eclipse Theme
$Theme = $App->getThemeClass("eclipse_ide");

# Define your project-wide Nav bars here.
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
# these are optional
$Nav = new Nav();
$Nav->setLinkList(array());
$Nav->addNavSeparator("EGit", "/egit/");
$Nav->addCustomNav("Download", "/egit/download/", "_self", 3);
$Nav->addCustomNav("Documentation", "/egit/documentation/", "_self", 3);
$Nav->addCustomNav("Support", "/egit/support/", "_self", 3);
$Nav->addCustomNav("Getting Involved", "/egit/developers/", "_self", 3);
$Theme->setNav($Nav);

$Theme->setPageKeywords("eclipse, egit, git, vcs");
$Theme->setPageAuthor("Chris Aniszczyk");
$Theme->setPageTitle("EGit");

$Menu = new Menu();
$Menu->setMenuItemList(array());
$Menu->addMenuItem("Home", "/egit/", "_self");
$Menu->addMenuItem("Download", "/egit/download/", "_self");
$Menu->addMenuItem("Documentation", "/egit/documentation/", "_self");
$Menu->addMenuItem("Support", "/egit/support/", "_self");
$Menu->addMenuItem("Developers", "/egit/developers/", "_self");
$Theme->setMenu($Menu);

$App->Promotion = TRUE;