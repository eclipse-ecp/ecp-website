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

	$pageTitle 		= "EMF Client Platform - Getting started";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>Getting Started</h2>
This tutorial shows the easiest way to get started with the EMF Client platform. You find more documentation <a href="documentation.php">here</a>.
<h3>Step 1: Download and install an Eclipse Modeling Edition</h3>
<h3>Step 2: Install the current release of the EMF Client Platform</h3>
<ul>
<li>Add Update Site to your Eclipse: Help => Install new Software => Add Update Site</li>
<li>Enter <a href="download.php">EMF Client Platform Update Site</a></li>
<li>Important: Uncheck "Group Items by Category" and "Contact all update sites ..."</li>
<li>Select "EMF Client Platform complete" from the update site and install</li> 
</ul>
<h3>Step 4: Import example model</h3>
<ul>
<li>Download the <a href="exampleModel.zip">Example Model Plugins for ECP</a></li>
<li>Select File => Import</li>
<li>Select "Existing projects into workspace"</li>
<li>Select "Archive" and the downloaded zip file</li>
<li>Finish Import</li>
</ul>
<h3>Step 5: Start EMF Client Platform</h3>
Launch a default debug configuration including all plugins in your workspace 


 
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>