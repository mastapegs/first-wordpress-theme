<?php get_header(); ?>

<h1>Hello, World!</h1>
<p>This is my FIRST theme!!!</p>
<ul id="test-ul"></ul>

<br/>

<p>Custom Element below</p>

<custom-element>
    <p>This slotted paragraph is server-side rendered via php, a child of the custom-element. Great for SEO!!!</p>
</custom-element>

<?php get_footer(); 