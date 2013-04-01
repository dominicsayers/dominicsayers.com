<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:atom="http://www.w3.org/2005/Atom" exclude-result-prefixes="atom">
	<xsl:output method="html" encoding="UTF-8" indent="yes" />
	<xsl:template match="atom:feed">
		<h4><a href="+browseroot+/lifestream">Lifestream</a></h4>
		<xsl:apply-templates select="atom:entry" />
	</xsl:template>

	<xsl:template match="atom:entry">
		<xsl:if test="position() &lt;= 12">
			<xsl:apply-templates select="atom:link" />
			<p class="mini"><xsl:value-of select="substring(atom:updated,1,10)" />&#160;<xsl:value-of select="substring(atom:updated,12,5)" /></p>
		</xsl:if>
	</xsl:template>

	<xsl:template match="atom:link">
		<p class="ramble small">
			<a>
				<xsl:attribute name="href"><xsl:value-of select="@href" /></xsl:attribute>
				<xsl:attribute name="target">_blank</xsl:attribute>
				<xsl:value-of select="../atom:title" />
			</a>
		</p>
	</xsl:template>
</xsl:stylesheet>
