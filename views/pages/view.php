<h1><?= $page['title'] ?></h1>

<p><i>Created at: <?= $page['created_at'] ?></i></p>

<br>
<br>

<pre>
<?= $page['content'] ?>
</pre>

<br>
<br>

<form method="post" action="/edit" '>
<h2>Edit page form</h2>

<label>Page title:</label>
<br />

<input name="page[title]" value="<?=$page['title']?>" />
<br />

<label>Page content:</label>
<br />

<textarea name="page[content]" placeholder="<?=$page['content']?>"></textarea>
<br/>

<input type = "hidden" name="page[id]" value="<?=$_GET['id']?>"/>
<br />

<input type="submit"/>
</form>

<br>
<br>

<form method = "post" action="/page">
    <input type="hidden" name="page[id]" value="<?=$_GET['id']?>"/>
    <button>Delete Page</button>
</form>

<a href="/pages">List of pages</a>
