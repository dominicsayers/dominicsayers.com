<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

	<xsl:output method="html" encoding="UTF-8" indent="yes" />

	<xsl:template match="methods">
		<xsl:apply-templates />
		<br />
	</xsl:template>

	<xsl:template match="method">
		<div style="width: 20px; float: left;">
			<p class="ramble small" style="margin-bottom: 3px;">
				<a>
					<xsl:attribute name="href"><xsl:value-of select="link" /></xsl:attribute>
					<img>
						<xsl:attribute name="alt"><xsl:value-of select="description" /></xsl:attribute>
						<xsl:attribute name="src">+browseroot+/static/images/<xsl:value-of select="image" /></xsl:attribute>
						<xsl:attribute name="style">vertical-align:text-top</xsl:attribute>
					</img>
				</a>
			</p>
		</div>
		<div style="float: left;">
			<p class="ramble small" style="margin-bottom: 3px;">
				<xsl:value-of select="other_text" />
				<a>
					<xsl:attribute name="href"><xsl:value-of select="link" /></xsl:attribute>
					<xsl:value-of select="link_text" />
				</a>
			</p>
		</div>
		<br />
	</xsl:template>
</xsl:stylesheet>
