<%@ page session="false" contentType="text/html; charset=EUC-KR" %>
<%@ page import="java.net.*" %>
<%@ page import="java.io.*" %>

<%
String _url = request.getParameter("url");


HttpURLConnection httpConn = null;
long start = System.currentTimeMillis();
try
{
    URL httpUrl = new URL(_url);
    URLConnection conn = httpUrl.openConnection();
    httpConn = (HttpURLConnection) conn;
    httpConn.connect();
    InputStream is = null;
    try
    {
        is = httpConn.getInputStream();
    }
    catch (Exception e)
    {
        throw e;
    }
    BufferedReader in = new BufferedReader(new InputStreamReader(is));
    String line = null;
    while ((line = in.readLine()) != null)
    {
        out.println(line + "\n");
    }
}
finally
{
    if (httpConn != null)
        try
        {
            httpConn.disconnect();
        }
        catch (Exception e)
        {
        }
    }
    long end = System.currentTimeMillis();
%>