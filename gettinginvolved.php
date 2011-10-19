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
<h2>Getting Involved</h2>
<p>Everyone is invited to getting involved with the EMF Client project. Before you plan any kind of contribution, it is a good idea to contact the <a href="communication.php">project team</a>.<br /> Contributing may include:<br /> <ul> <li>Writing bug reports: Please provide a short and concise explanation of the problem, a snippet to reproduce the issue, ideally a JUnit test case that outlines the expected behavior. See the <a href="support.php">support page</a> for details. You are also invited to enter feature requests.<br /> </li> <li>Providing a patch to an existing bug report: If you are no committer on the project, please upload your bug report in the <a href="support.php">bugzilla</a><br /> </li> <li>Contribute documentation, i.e. if you found something which is not documented yet, please share you knowledge with other users. Please <a href="communication.php">contact us</a>, to find the appropriate place to add your documentation.</li> </ul></p>

<h2>Developer Resources</h2>
<p>To work on the source code of the EMF Client Platform, you should use <a href="http://dl.dropbox.com/u/23674036/EMFStoreECP.yoxos">this Yoxos profile</a> (use right click => save as). Yoxos is a free tool, which will automatically create an Eclipse instance for you containing all necessary development tools. You can get a free version <a href ="http://eclipsesource.com/en/yoxos/">here.</a> Once you have installed the Yoxos launcher, you can simply double click the Yoxos Profile. Yoxos will download and create a Eclipse instance for you containing all relevant settings. Although, we do not recommend, it is of course possible to manually set up your Eclipse Instance.</p>
<p>Yoxos will try to already clone the GIT repositories for you. This only works, if your id is set correctly in the global settings. If you are unsure, or if you want to check out anonymous, please delete the repositories created by Yoxos and clone the again manually. If you have clone them as a committer with the wrong ID, you will not be able to commit later on.</p>
<p>You can clone the following GIT repositories:
<ul>
If you want to use GIT as a committer please use the following URIs:
<ul>
<li>org.eclipse.emf.ecp.core.git (ssh://committer_id@git.eclipse.org/gitroot/emfclient/org.eclipse.emf.ecp.core.git): Contains all core plugins, this is what you usually need as a developer</li>
<li>org.eclipse.emf.ecp.other.git (ssh://committer_id@git.eclipse.org/gitroot/emfclient/org.eclipse.emf.ecp.other.git): Contains additional optional features (e.g. XMI Workspace)</li>
<li>org.eclipse.emf.ecp.releng.git (ssh://committer_id@git.eclipse.org/gitroot/emfclient/org.eclipse.emf.ecp.releng.git): Contains release engineering resources such as features and updates sites</li> 
</ul>
If you want to use GIT as an anonymous user (read only) please use the following URIs:
<ul>
<li>org.eclipse.emf.ecp.core.git (git://git.eclipse.org/gitroot/emfclient/org.eclipse.emf.ecp.core.git)</li>
<li>org.eclipse.emf.ecp.other.git (git://git.eclipse.org/gitroot/emfclient/org.eclipse.emf.ecp.other.git)</li>
<li>org.eclipse.emf.ecp.releng.git (git://git.eclipse.org/gitroot/emfclient/org.eclipse.emf.ecp.releng.git)</li>
</ul>
Please refer to <a href="http://wiki.eclipse.org/EGit/User_Guide/Remote#Cloning_remote_Repositories">this tutorial</a> to clone GIT repositories.
</p>

<p>Now, you can import the projects from the cloned GIT repository. <a href="http://wiki.eclipse.org/ImportGitProjects">See here how to import projects from a GIT repository</a></p>


<p>Please download <a href="http://dl.dropbox.com/u/23674036/emfcptargetplatform.zip">this target platform</a> unzip this folder in your workspace and set the target:
<ul>
<li>Select Import => Existing Projects into Workspace</li>
<li>Select the downloaded archive and the contained project "target"</li>
<li>After import, open the target project, double click the target definition file and click "set as target" in the right upper corner</li>
</ul>
</p>
<p>
To run the EMF Client Platform please include an EMF model in the launch configuration. For testing, you can use <a href="http://www.eclipse.org/emfstore/exampleModel.zip">this example model.</a> Import it into your EMFCP workspace and start it along with EMFCP. You should be able to create instances of the example model (bowling).
</p>




 
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>