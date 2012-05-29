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

	$pageTitle 		= "EMF Client Platform - Download";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>
<p>To install the EMF Client Platform, you need a running Eclipse. The easiest way to get started is to use <a href="http://eclipse.org/downloads/packages/eclipse-modeling-tools/indigor">the latest modeling edition.</a></p>

<h3>Release Builds</h3>
<p>

<p>You can get the the latest release build from this update site:

<ul>
<li><a href="http://download.eclipse.org/emf-store/releases2/latest">http://download.eclipse.org/emf-store/releases2/latest</a>.</li>
<li><a href="http://download.eclipse.org/emf-store/releases2/latest/site.p2.zip">http://download.eclipse.org/emf-store/releases2/latest/site.p2.zip</a>.</li>
</ul>

<p>An archive of release builds is available here:

<h6>0.8.9</h6>
<ul>
<li><a href="http://download.eclipse.org/emf-store/releases/archive/0.8.9">http://download.eclipse.org/emf-store/releases/archive</a>.</li>
<li><a href="http://download.eclipse.org/emf-store/releases/archive/0.8.9">http://download.eclipse.org/emf-store/releases/archive/site.p2.zip</a>.</li>
</ul>

A log of new and noteworthy for every release is available <a href="http://wiki.eclipse.org/ECP_-_News_and_Noteworthy">here</a>. <br/>

<h3>Milestone Builds</h3>
<p>

<p>Milestone builds reflect the most current development and are not as stable as release builds. You can get the the latest milestone build from this update site or download as zip file:

<ul>
<li><a href="http://download.eclipse.org/emf-store/milestones/latest">http://download.eclipse.org/emf-store/milestones/latest</a>.</li>
<li><a href="http://download.eclipse.org/emf-store/milestones/latest/site.p2.zip">http://download.eclipse.org/emf-store/milestones/latest/site.p2.zip</a>.</li>
</ul>

<p>A list of archived milestone builds is available here

<h6>0.8.9.M948</h6>
<ul>
<li><a href="http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M948">http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M948</a>.</li>
<li><a href="http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M948/site.p2.zip">http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M948/site.p2.zip</a>.</li>
</ul>

<h6>0.8.9.M947</h6>
<ul>
<li><a href="http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M947">http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M947</a>.</li>
<li><a href="http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M947/site.p2.zip">http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M947/site.p2.zip</a>.</li>
</ul>

<h6>0.8.9.M946</h6>
<ul>
<li><a href="http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M946">http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M946</a>.</li>
<li><a href="http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M946/site.p2.zip">http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M946/site.p2.zip</a>.</li>
</ul>

<h6>0.8.9.M945</h6>
<ul>
<li><a href="http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M945">http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M945</a>.</li>
<li><a href="http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M945/site.p2.zip">http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M945/site.p2.zip</a>.</li>
</ul>

<h6>0.8.9.M938</h6>
<ul>
<li><a href="http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M938">http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M938</a>.</li>
<li><a href="http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M938/site.p2.zip">http://download.eclipse.org/emf-store/milestones/archive/0.8.9.M938/site.p2.zip</a>.</li>
</ul>

A log of new and noteworthy for every release is available <a href="http://wiki.eclipse.org/ECP_-_News_and_Noteworthy">here</a>. <br/>


To learn how to setup and run EMF Client Platform read the tutorial <a href="http://www.eclipse.org/emfclient/documentation/setup.php">here</a>.<br />

If you have any questions, please do not hesitate <a href="communication.php"> contact us.</a></p>




</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>