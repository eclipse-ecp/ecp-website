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

<h3>1.0.0 RC Builds</h3>
<p>

<p>These are the release candidate builds for the upcoming 1.0.0 release of the EMF Client Platform. If you want to try out EMF Client Platform or plan on using it please use these release candidates until the 1.0.0 release.</p>

<h5>1.0.0RC3</h4>
<ul>
<li><a href="http://www.eclipse.org/downloads/download.php?file=/emfclient/milestones/100RC3/content.jar&format=xml">1.0.0 RC3 (Update Site)</a>.</li>
<li><a href="http://www.eclipse.org/downloads/download.php?file=/emfclient/milestones/100RC3/repository.zip">1.0.0 RC3 (Update Site as ZIP)</a>.</li>
</ul>
<a name="demo-products"></a><h3>Demo Products<h3>
<ul>
		<li><a href="http://www.eclipse.org/downloads/download.php?file=/emfclient/products/org.eclipse.emf.ecp.3x-win32.win32.x86.zip">Windows 32bit</a></li>
		<li><a href="http://www.eclipse.org/downloads/download.php?file=/emfclient/products/org.eclipse.emf.ecp.3x-win32.win32.x86_64.zip">Windows 64bit</a></li>
		<li><a href="http://www.eclipse.org/downloads/download.php?file=/emfclient/products/org.eclipse.emf.ecp.3x-macosx.cocoa.x86">Mac OS 32bit</a></li>
		<li><a href="http://www.eclipse.org/downloads/download.php?file=/emfclient/products/org.eclipse.emf.ecp.3x-macosx.cocoa.x86_64.zip">Mac OS 64bit</a></li>
		<li><a href="http://www.eclipse.org/downloads/download.php?file=/emfclient/products/org.eclipse.emf.ecp.3x-linux.gtk.x86_64.zip">Linux 32bit</a></li>
		<li><a href="http://www.eclipse.org/downloads/download.php?file=/emfclient/products/org.eclipse.emf.ecp.3x-linux.gtk.x86_64.zip">Linux 64bit</a></li>
</ul>
<h3>Release Builds</h3>
<p>

<p>You can get the the latest release 0.9.3 from this update site:

<ul>
<li><a href="http://download.eclipse.org/emf-store/releases/lates">http://download.eclipse.org/emf-store/releases/latest</a>.</li>
<li><a href="http://download.eclipse.org/emf-store/releases/latest/site.p2.zip">http://download.eclipse.org/emf-store/releases/latest/site.p2.zip</a>.</li>
</ul>

<p>An archive of release builds is available here:


<h6>0.8.9</h6>
<ul>
<li><a href="http://download.eclipse.org/emf-store/releases/archive/0.8.9">http://download.eclipse.org/emf-store/releases/archive/0.8.9</a>.</li>
<li><a href="http://download.eclipse.org/emf-store/releases/archive/0.8.9">http://download.eclipse.org/emf-store/releases/archive/0.8.9/site.p2.zip</a>.</li>
</ul>

A log of new and noteworthy for every release is available <a href="http://wiki.eclipse.org/ECP_-_News_and_Noteworthy">here</a>. <br/>

<h3>Milestone Builds</h3>
<p>

<p>Milestone builds reflect the most current development and are not as stable as release builds.</p>

<p>EMF Client Platform currently develops two branches. The 0.9.x branch has several stable releases, but will soon be maintanance only. The 1.x branch has not been release yet. The planed release for 1.x is in November. The 1.x branch contains the integration of different backends, such as CDO, while the 0.9.x branch works with EMFStore. If you are looking for a stable version, you should go for 0.9.x. If you want to test the new features of 1.x and provide feedback, please use the 1.x milestone build. For the 1.x milestone, you will need to install at least one backend, e.g. <a href="http://eclipse.org/cdo">CDO</a> or <a href="http://emfstore.org">EMFStore</a>.</p>

<h3>1.x Milestone Builds<h3>
<h4>1.0.0 Nightly</h4>
	<p>You can download the latest product build of ecp including an example model <a href="https://hudson.eclipse.org/hudson/job/emf-emfclient-maintenance/lastSuccessfulBuild/artifact/git/ECP2/org.eclipse.emf.ecp.products/target/products/">here</a>.
		</p>
	<p>The latest update site can be found <a href="https://hudson.eclipse.org/hudson/job/emf-emfclient-maintenance/lastSuccessfulBuild/artifact/git/ECP2/org.eclipse.emf.ecp.site-feature/target/repository/">here</a>.
		</p>
		<p>The corresponding JavaDoc can be found <a href="https://hudson.eclipse.org/hudson/job/emf-emfclient-maintenance/javadoc/">here</a>.</p>

<h4>1.0.0M3</h4>
<ul>
<li><a href="http://download.eclipse.org/emfclient/milestones/100M3">http://download.eclipse.org/emfclient/milestones/100M3</a>.</li>
</ul>

<h3>0.9.x Milestone Builds<h3>

<p>You can get the the latest milestone build from this update site or download as zip file:</p>

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