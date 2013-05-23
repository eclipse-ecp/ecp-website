<?php

/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "Nova";
	

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	
	# If you want to override the eclipse.org navigation, uncomment below.
	$Nav->setLinkList(array());
	
	# Break the navigation into sections
	$Nav->addNavSeparator("MyProject", 	"/default");
	$Nav->addCustomNav("Home", "/emfclient", "_self", 3);
	$Nav->addCustomNav("Download", "/emfclient/download.php", "_self", 3);
	$Nav->addCustomNav("Communication", "/emfclient/communication.php", "_blank", 3);
	$Nav->addCustomNav("Getting Involved", "/emfclient/gettinginvolved.php", "_blank", 3);
	$Nav->addCustomNav("About", "http://www.eclipse.org/projects/project_summary.php?projectid=modeling.emft.emf-client", "_blank", 3);
	$Nav->addCustomNav("Documentation", "/emfclient/documentation.php", "_blank", 3);
	# $Nav->addCustomNav("Support", "/project/support.php", "_blank", 3);
	# $Nav->addCustomNav("Getting Involved", "/project/developers", "_blank", 3);

	# Define keywords, author and title here, or in each PHP page specifically
	$pageKeywords	= "emf, client, platform, eef, reflectiv, editor";
	$pageAuthor		= "Jonas";
	$pageTitle 		= "EMF Client Platform";


	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/emfclient", "_self");
	$Menu->addMenuItem("Download", "/emfclient/download.php", "_self");
	$Menu->addMenuItem("Communication", "/emfclient/communication.php", "_self");
	$Menu->addMenuItem("Getting involved", "/emfclient/gettinginvolved.php", "_self");
	$Menu->addMenuItem("About", "http://www.eclipse.org/projects/project_summary.php?projectid=modeling.emft.emf-client", "_self");
	$Menu->addMenuItem("Documentation", "/emfclient/documentation.php", "_self");
	# $Menu->addMenuItem("Support", "/project/support.php", "_self");
	# $Menu->addMenuItem("Developers", "/project/developers", "_self");
	
	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>');
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
	$App->SetGoogleAnalyticsTrackingCode("UA-31075157-1");
?>