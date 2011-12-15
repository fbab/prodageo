<?xml version="1.0" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

	<xsl:template match="/">
		<xhtml>
		<body>
		<xsl:apply-templates select="xml_api_reply/weather/forecast_information/city"/>
		</body>
		</xhtml>
	</xsl:template>
	
	<xsl:template match="city">
		<p><b><xsl:value-of select="@data"/></b></p>
	</xsl:template>

</xsl:stylesheet>

