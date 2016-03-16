# Page Editor for Monstra CMS

_Page Editor_ is a WYSIWYG editor for pages (including blog posts) in Monstra CMS. It is an implementation of [wyishtml5 by Xing](http://xing.github.io/wysihtml5/), but that project is no longer maintained. The core of the project was built by Mancho Varela (@nakome).  This implementation is really just an update to make the editor work with Monstra 3 and its use of Bootstrap 3.

The plugin adds visual editing tools for users when they are creating post text. For users who are not comfortable with HTML or Markdown, it makes it easy to add headers, adjust font sizes, indent text, make text *bold* or _italic_, and insert hyperlinks or images (from URL).

## Installation

Install as you would any other Monstra plugin. Go to *Admin Menu -> Extends -> Plugins -> Install New* and upload the .zip file. Click the _Install_ button to activate. 

-  You will need to *deactivate other 'editor' plugins* like Summernote, CKEditor, CLeditor, or TinyMCE if you have them installed. This plugin replaces that functionality.
	
	
The plugin will add a row of buttons above the editing area as shown here: 

![screenshot](https://raw.githubusercontent.com/monstrahost/page-editor/master/screenshot.png)
