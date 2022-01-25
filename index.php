<?php get_header(); ?>

<h1>Hello, World!</h1>
<p>This is my FIRST theme!!!</p>

<hr/>

<p>This list below is filled with client-side JavaScript</p>
<ul id="test-ul"></ul>

<hr/>

<p>The list below is rendered with server-side PHP</p>
<ul>
    <?php 
        $listItems = array(
            "First SSR'd li",
            "Second SSR'd li",
            "Third SSR'd li",
            "Fourth SSR'd li",
        );
    ?>
        <?php foreach ($listItems as $item) : ?>
            <li><?=$item?></li>
        <?php endforeach ?>
        
</ul>

<hr/>

<p>Custom Element below</p>

<custom-element>
    <p>This slotted paragraph is server-side rendered via php, a child of the custom-element. Great for SEO!!!</p>
</custom-element>

<form method="post">
    <label for="name">Name: </label>
    <input id="name" type="text" name="name" />
    <button>Submit</button>
</form>

<?php if ($_POST["name"]) : ?>
    <p><?= $_POST["name"] ?></p>
<?php endif ?>

<?php get_footer(); 