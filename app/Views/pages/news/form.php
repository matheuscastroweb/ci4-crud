<h2><?= isset($id) ? "Editando notícia" : "Cadastrar nova notícia" ?></h2>
<?= \Config\Services::validation()->listErrors(); ?>
<form action="/news/store" method="POST" class="">
<!-- Generates: <input type="hidden" name="{csrf_token}" value="{csrf_hash}" /> -->
<?= csrf_field() ?>
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= isset($title) ? $title : set_value('title') ?>">
    </div>

    <div class="form-group">
        <label for="body">Título</label>
        <textarea type="body" name="body" id="body" class="form-control"><?= isset($body) ? $body : set_value('body')?></textarea>
    </div>

    <input type="hidden" name="id" class="" value="<?= isset($id) ? $id : set_value('id') ?>">
    <input type="submit" class="btn btn-primary" value="Salvar">
    
</form>