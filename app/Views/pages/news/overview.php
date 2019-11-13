
<h2>Notícias</h2>
<a href="news/create" class="btn btn-secondary my-3">Criar postagem</a>
<table class="table">
    <tr>
        <td>Nome</td>
        <td>Acao</td>
    </tr>
    <?php if (!empty($news) && is_array($news)) :  ?>
        <?php foreach ($news as $news_item) :  ?>
            <tr>
                <td><a href="<?= "/news/view/" . $news_item['id'] ?>"><?= $news_item['title'] ?></a></td>
                <td><a href="<?= "/news/edit/" . $news_item['id'] ?>">Editar</a> - <a href="<?= "/news/delete/" . $news_item['id'] ?>">Deletar</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="2">Nenhuma notícia encontrada</td>
            
        </tr>
    <?php endif; ?>

</table>