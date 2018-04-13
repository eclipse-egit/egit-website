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

require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");

$App = new App();
include ($App->getProjectCommon());

// Remove sidebar on frontpage
$Theme->setNav(new Nav());

$variables['header_nav']['links'][] = array(
  'icon' => 'fa-book',
  'url' => 'documentation',
  'title' => 'Documentation',
  'text' => 'Tutorials, Examples, Videos, Reference Documentation'
);

$variables['header_nav']['links'][] = array(
  'icon' => 'fa-download',
  'url' => 'download',
  'title' => 'Download',
  'text' => 'Eclipse Distribution, Update Site, Dropins'
);

$variables['header_nav']['links'][] = array(
  'icon' => 'fa-users',
  'url' => 'developers',
  'title' => 'Getting Involved',
  'text' => 'Contributor Guide, Mailing Lists, Wiki'
);

$variables['header_nav']['links'][] = array(
  'icon' => 'fa-support',
  'url' => 'support',
  'title' => 'Support',
  'text' => 'Contributor Guide, Mailing Lists, Wiki'
);
$Theme->setThemeVariables($variables);

$Theme->setHtml(file_get_contents('_index.html'));

$Theme->setExtraHeaders('<style>.header_nav{background: url("images/backgroundMain.png") top left no-repeat;}</style>');
$Theme->generatePage();