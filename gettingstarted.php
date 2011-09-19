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
<h2>Getting Started</h2>

1. Download and install an Eclipse Modeling Edition
2. Install the current release of the EMF Client Platform:
<ul>
<li>Add Update Site to your Eclipse: Help => Install new Software => Add Update Site</li>
<li>Enter EMF Client Platform Update Site: http://unicase.googlecode.com/svn/updatesite/ecpNightly</li>
<li>Important: Uncheck "Group Items by Category" and "Contact all update sites ..."</li>
<li>Select all Features from the update site and install</li> 
</ul>
3. Import example model

    * Download the Example Model Plugins for ECP
    * Select File => Import
    * Select "Existing projects into workspace"
    * Select "Archive" and the downloaded zip file
    * Finish Import 

4. Start EMF Client Platform

    * Launch a default debug configuration including all plugins in your workspace 

Links to required resources:

    * Eclipse Modeling Edition Download
    * EMFCP Update Site
    * Example Model Plugins for ECP 


 
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>