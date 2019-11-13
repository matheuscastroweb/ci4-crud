<h2>Notícias</h2>


<table class="table">
    <tr>
        <td>Nome</td>
        <td>Acao</td>
    </tr>
    <?php if (!empty($news) && is_array($news)) :  ?>
        <?php foreach ($news as $news_item) :  ?>
            <tr>
                <td><a href="<?= "/news/view/".$news_item['id'] ?>"><?= $news_item['title'] ?></a></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>

</table>