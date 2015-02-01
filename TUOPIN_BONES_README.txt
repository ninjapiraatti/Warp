What have I done?

NOTES:
-For body text use Google fonts and Bones php call in functions.php.

FUNCTIONS.PHP

02.11.2014
-Added a custom sized thumbnail better suitable for both mobile and desktop, especially nice for Isotope.
-Added a nice plugin for the end user to add columns in wysiwyg, still needs slight tweaking though.
-Also added script to clean up the shitty HTML that WP wraps the shortcodes with.
-Added a code for placing language choice in WP menu. Works nicely when there are two languages. Uncomment to use.



SCRIPTS.JS

02.11.2014
-Added Wurfl wrapper.



STYLE.SCSS

02.11.2014
-Modified breakpoints, remember to rename the breakpoint SCSS files.



BASE.SCSS

26.11.2014
-Made the #svg-icons invisible
02.11.2014
-Added icon class, default size for svg icons is 64px.
-Added .main-section.



GRID.SCSS

02.11.2014
-Complete overhaul of the breakpoints. New classes are: .m .s .t .d .dl .xl.
-Replaced em-based margin with variable.



VARIABLES.SCSS

02.11.2014
-Added $mapaS, $mapaM and $mapaL. Use these to keep the margins and paddings uniform.



HEADER.PHP

02.11.2014
-Added SVG include, brilliant way to use icons.
-Added wurfl.js.



FOOTER.PHP

02.11.2014
-.



INDEX.PHP

02.11.2014
-Added an example of SVG icon. Uncomment to use, modify the .SVGs inside library/icons/.
-Added example use for the columns plugin. Uses ACF repeater.
-Changed the HTML to suit the one pager style with sections: removed #content, added section and content div.



MISC

02.11.2014
-Inside js folder you'll find the columns.js and the needed .png for the wysiwyg icon.
-Added _1600up.scss.
-