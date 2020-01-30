<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>My Friends</h2>
  <xsl:apply-templates/>
  </body>
  </html>
</xsl:template>

<xsl:template match="friend">
  <p>
  <xsl:apply-templates select="id"/>
  <xsl:apply-templates select="fname"/>
  <xsl:apply-templates select="lname"/>
  <xsl:apply-templates select="address"/>
  <xsl:apply-templates select="birthdate"/>
  </p>
</xsl:template>

<xsl:template match="id">
  ID: <span style="color:#ff0000">
  <xsl:value-of select="."/></span>
  <br />
</xsl:template>

<xsl:template match="fname">
  First Name: <span style="color:#00ff00">
  <xsl:value-of select="."/></span>&#160;
</xsl:template>

<xsl:template match="lname">
  <span style="color:#F6F">
  <xsl:value-of select="."/></span>
  <br />
</xsl:template>

<xsl:template match="address">
  Address: <span style="color:#03C">
  <xsl:value-of select="."/></span>
  <br />
</xsl:template>

<xsl:template match="birthdate">
  Birthdate: <span style="color:#0FF">
  <xsl:value-of select="."/></span>
  <br />
</xsl:template>

</xsl:stylesheet>