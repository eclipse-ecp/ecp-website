<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:plan="http://www.eclipse.org/project/plan">
    <xsl:template match="/plan:plan">
        <html>
            <body>
                <div style="width: 600px">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr style="background-image: url(http://dash.eclipse.org/dash/commits/web-app/header_bg.gif);">
                            <td>
                                <a href="http://www.eclipse.org/">
                                    <img src="http://dash.eclipse.org/dash/commits/web-app/header_logo.gif" width="163" height="68" border="0" alt="Eclipse Logo" class="logo"/>
                                </a>
                            </td>
                            <td align="right" style="color: white; font-family: verdana,arial,helvetica; font-size: 1.25em; font-style: italic; padding-right: 10px">
                                <b>Eclipse Project Plan </b>
                            </td>
                        </tr>
                    </table>
                    <p style="font-family: arial,helvetica; ">
                        This Eclipse project plan for the
                        <b>
                            <xsl:value-of select="release/@projectid"/>
                            project
                        </b>
                        is an XML document whose tags have
                        <a href="http://wiki.eclipse.org/index.php/Development_Resources/Project_Plan">defined semantics</a>
                        . Please use the
                        <a>
                            <xsl:attribute name="href">
   /projects/project-plan.php?projectid=<xsl:value-of select="plan:release/@projectid"/>
 </xsl:attribute>
                            project plan viewer
                        </a>
                        to properly interpret these semantics and fully display the plan and all of its cross links and queries.
                        Or, you can look at the
                        <a>
                            <xsl:attribute name="href">
   /projects/project-plan.php?projectid=<xsl:value-of select="plan:release/@projectid"/>&amp;raw=1
 </xsl:attribute>
                            raw XML
                        </a>
                        of the plan.
                    </p>
                </div>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>