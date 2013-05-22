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

	$pageTitle 		= "EMF Client Platform - Support";

	$html  = <<<EOHTML
<div id="midcolumn">
<ul>
<li><b><a href="gettingstarted.php"
		title="Getting Started">Getting Started</a></b> - first steps with EMF Client Platform</li>
	<li><b><a href="documentation.php"
		title="Documentation">Documentation</a></b> - read about
	the details</li>
	<li><b><a
		href="http://www.eclipse.org/forums/index.php/f/19/"
		title="http://www.eclipse.org/forums/index.php/f/19/"
		rel="nofollow">EMFT Newsgroup</a></b> - get an answer to your questions</li>
	<li><b><a
		href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EMFT.emfclient"
		title="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EMFT.emfclient"
		rel="nofollow">File a bug</a></b> - file bugs and feature requests</li>
</ul>

<h3>Professional Support</h3>
<p>Open-source software is free of licensing fees. Furthermore, it is easy to adapt and enhance by new features. Nevertheless, using open-source frameworks is not for free. Like in closed-source software, not everybody is an expert for any framework. The total cost of ownership also includes training, adoption, enhancement and maintainance of a framework. It might take significantly longer for somebody new to the project to extend a certain feature than for the person who introduced it at the first place. Furthermore, software has to be maintained. Even if this can be done literally by everybody for open-source software, a professional maintaiance agreement with fixed response times is often manditory in an industrial setting. This ensures your productivity.
EclipseSource employs several EMF Client Platform committers and <a href="http://eclipsesource.com/en/eclipse/eclipse-emf/">offers professional support</a> and <a href="http://eclipsesource.com/en/services/eclipse-training/">training</a>.</p>
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>