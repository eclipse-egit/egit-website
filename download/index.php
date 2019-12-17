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
$Theme->setPageTitle("EGit - Download");

$version = "5.6.0.201912101111-r";
$html = file_get_contents('_index.html');
$html = preg_replace('/@VERSION@/', $version, $html);
$Theme->setHtml($html);

$Theme->generatePage();
