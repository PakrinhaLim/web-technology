<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <head>
    <meta charset="utf-8" />
    <title>My Friends</title>
  </head>
  <body>
	<table width="500" border="1">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Address</th>
        <th scope="col">Birthday</th>
      </tr>
      <xsl:for-each select="Myfriends/friend">
      <xsl:sort order="ascending" select="birthdate" />
      <xsl:choose>
          <xsl:when test="id&lt;60023124">
          <tr bgcolor="#66FF00">
            <td><xsl:value-of select="id" /></td>
            <td><xsl:value-of select="fname"/></td>
            <td><xsl:value-of select="lname"/></td>
            <td><xsl:value-of select="address"/></td>
            <td><xsl:value-of select="birthdate"/></td>
          </tr>
          </xsl:when>
          <xsl:otherwise>
              <tr bgcolor="#9966FF">
                <td><xsl:value-of select="id" /></td>
                <td><xsl:value-of select="fname"/></td>
                <td><xsl:value-of select="lname"/></td>
                <td><xsl:value-of select="address"/></td>
                <td><xsl:value-of select="birthdate"/></td>
              </tr>
          </xsl:otherwise>

      </xsl:choose>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>