<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "EMF Client Platform - Getting involved";

	$html  = <<<EOHTML
<div id="midcolumn">
Everyone is invited to getting involved with the EMF Client project. Before you plan any kind of contribution, it is a good idea to contact the <a href="communication.php">project team</a>.<br /> Contributing may include:<br /> <ul> <li>Writing bug reports: Please provide a short and concise explanation of the problem, a snippet to reproduce the issue, ideally a JUnit test case that outlines the expected behavior. See the <a href="support.php">support page</a> for details. You are also invited to enter feature requests.<br /> </li> <li>Providing a patch to an existing bug report: If you are no committer on the project, please upload your bug report in the <a href="support.php">bugzilla</a><br /> </li> <li>Contribute documentation, i.e. if you found something which is not documented yet, please share you knowledge with other users. Please <a href="communication.php">contact us</a>, to find the appropriate place to add your documentation.</li> </ul> 
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>