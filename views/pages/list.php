
<ul>

<?php foreach ($pages as $page) : ?>

    <li><a href="/page?id=<?= $page['id'] ?>"><?= $page['title'] ?></a></li>

<?php endforeach; ?>

</ul>



<br />
<form method="post" action="/pages">
    <h2>Create page form</h2>
    <label>Page title:</label>
    <br />
    <input name="page[title]" />
    <br />
    <label>Page content:</label>
    <br />
    <textarea name="page[content]"></textarea>
    <br/>
    <br />
    <input type="submit"/>
</form>