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

	$pageTitle 		= "EMF Client Platform - Documentation";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>Documentation</h2>
We are always trying to keep the documentation up-to-date. If you find anything outdated, wrong or missing, please do not hesitate to <a href=communication.php">contact us</a>.

<h3>Tutorials</h3>
<li><a href="gettingstarted.php">Getting started</a></li>
<li><a href="documentation/registermodel.php">Register a model to be used with EMF Client Platform</a></li>
<li><a href="documentation/customizeeditor.php"></a>Customize the editor</li>



<h3>Start EMF Client Platform</h3>

    * Launch a default debug configuration including all plugins in your workspace 



 
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>