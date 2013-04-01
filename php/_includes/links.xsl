<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" encoding="UTF-8" indent="yes" />

	<xsl:template match="links">
		<div id="banner_link_container">
			<xsl:apply-templates />
		</div>
	</xsl:template>

	<xsl:template match="link">
		<div id="banner_link">
			<a>
				<xsl:attribute name="href"><xsl:value-of select="service_link" /></xsl:attribute>
				<xsl:attribute name="title"><xsl:value-of select="service_description" /></xsl:attribute>
				<xsl:attribute name="target">_blank</xsl:attribute>
				<xsl:value-of select="title" />
 			</a>
 		</div>

 		<div id="banner_link_icon">
			<a>
				<xsl:attribute name="href"><xsl:value-of select="feed_link" /></xsl:attribute>
				<xsl:attribute name="title"><xsl:value-of select="feed_title" /></xsl:attribute>
				<xsl:attribute name="target">_blank</xsl:attribute>
				<img>
					<xsl:attribute name="alt"><xsl:value-of select="feed_icon_alt" /></xsl:attribute>
					<xsl:attribute name="src">+browseroot+/static/images/<xsl:value-of select="feed_icon" /></xsl:attribute>
					<xsl:attribute name="width">14</xsl:attribute>
				</img>
 			</a>
 		</div>
	</xsl:template>
</xsl:stylesheet>
