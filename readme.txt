=== PressOK - Collapsible Region ===
Contributors: PressOK
Tags: UI, Fancy stuff
Requires at least: 3.0.1
Tested up to: 3.0.1
Stable tag: 0.3

Allows users to define collapsible regions which can be controlled on mouse click.

== Description ==

<p>This plugin allows you to hide certain regions within a post or page. By clicking on the first element within the defined region, e.g. a subheading or 'read more', the hidden region will gently expand using jQuery. Clicking the trigger once more will hide the region again.</p>

<p>This plugin might be useful when you have a large amount of information that's not equally important, but might be useful depending on the interests of the user. Or if there are differences in the knowledge levels of your audience: hide detailed explanations, so the advanced users can quickly scan the text and give the less experienced users the opportunity to read some more in depth information if needed.</p>

<h4>
    Usage
</h4>

<p>Every item can be placed within the collapsible region. The specific plugin-tags define the area of the collapsing region</p>
<ul>
    <li>
        The start tag: [PressOK-col-reg] or [PressOK-col-reg open] if you want to initially open the region.
    </li>
    <li>
        The end tag: [/PressOK-col-reg]
    </li>
</ul>
<p>Place these tags on a single paragraph in your post or page (or even better) insert these tags on a new line in your HTML view. The first element within the collapsible region</p>

<h4>Options and functionality</h4>
<p>By default the collapsible region is collapsed (closed), the user can choose whether the region opens on page load by adding the word "open" to the start tag. The start tag will then become: [PressOK-col-reg open]</p>
<p>For styling purposes the class "open" and "closed" are added to the region. With this addition authors are able to style the component the way they want.</p>


== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

== Changelog ==
v0.1
Initial release
v0.2
Path bugfix to js and css
v0.3
Now with correct version number