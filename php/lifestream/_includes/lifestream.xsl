<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:atom="http://www.w3.org/2005/Atom" exclude-result-prefixes="atom">
	<xsl:output method="html" encoding="UTF-8" indent="yes" />
	<xsl:template match="atom:feed">
		<h2>Lifestream</h2>
		<xsl:apply-templates select="atom:entry/atom:content" />
	</xsl:template>

	<xsl:template match="atom:entry/atom:content">
			<div id="lifestream">
				<xsl:copy-of select="node()" />
			</div>
	</xsl:template>
</xsl:stylesheet>
