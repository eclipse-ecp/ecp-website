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
<li><a href="documentation/setup.php">How to set up the EMF Client Platform</a></li>
<li><a href="documentation/core-feature-demo.php">Demonstration of the core features</a></li>
<li><a href="documentation/registermodel.php">How to register a model to be used in the application</a></li>
<li><a href="documentation/replace-editor.php">How to replace the editor which is opened on double click with a custom view</a></li>
<li><a href="documentation/arrange-attributes.php">Change the order of attributes which are shown in the editor</a></li>
<li><a href="documentation/how_to_extend_ecp_editor.php">How to extend the editor of ECP by replacing control displays</a></li>
<li><a href="documentation/customize-navigator.php">Customize the navigator</a></li>
<li><a href="documentation/validation.php">How to add custom validation rules</a></li>






 
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>