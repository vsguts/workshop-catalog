
<ul>

<?php foreach ($pages as $page) : ?>

    <li><a href="/page?id=<?= $page['id'] ?>"><?= $page['title'] ?></a></li>

<?php endforeach; ?>

</ul>
