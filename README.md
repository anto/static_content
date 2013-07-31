# Static Content for Wolf CMS
Static Content for Wolf CMS is a plugin that allows the usage of a auxillary web server to serve 'static' content from a site using Wolf CMS from another source.  Static Content for Wolf CMS introduces two new constants for use in developing layouts and themes.  The new constants are <b>URL_STATIC</b> and <b>STHEMES_URI</b>.

## History
This plugin was developed to enable sites developed to have higher YSlow! scores without the need of setting up a seperate server to host 'static' content.

## Install
Copy the files to <i>wolf/plugins/static_content/</i> folder.

<pre>
cd wolf/plugins/
git clone git://github.com/leedtech/static_content.git static_content
</pre>

Modify the file <i>content.static</i> to include the new locations.  Do not include http:// or trailing slash.
Use a double semi-colon ';;' as a delimiter between the locations.  Include both locations even if they are the same.
<pre>
static.example.com;;static.example.com/themes
</pre>

## Usage
This plugin was designed to be used in tandem with a subdomain pointing to the public folder of an installation of Wolf CMS.

#### Example Setup
<pre>
Wolf CMS Base = /
Base Domain = http://www.example.org
Subdomain = http://static.example.org
</pre>
In this example the subdomain points to <i>http://www.example.org/public/</i>.

#### Example Usage
Within a layout, a developer might call upon a resource residing in the respective folder for his/her theme. The layout may call an image:
```
<h1><img src="<?php echo THEMES_URI; ?>logo.png" alt="logo" /></h1>
```
This would create a code that looks like:
```
<h1><img src="http://www.example.org/public/themes/user_theme/logo.png" alt="logo" /></h1>
```
Using <b>STHEMES_URI</b> instead of THEMES_URI would create code that looks like:
```
<h1><img src="http://static.example.org/themes/user_theme/logo.png" alt"logo" /></h1>
```
The enables the image <i>logo.png</i> to reside within the Wolf CMS installation, yet be served by a different "server," which YSlow! likes!

### Notes
Other uses for this plugin may exist.  If you determine other uses, please let the developers know.

##Change Log

### 0.1a
Initial
