<h1> <?= $titulo ?> </h1>

<form method="post" action="<?= base_url('produto/save/' . $produto->id) ?>">
    <label for="descricao"> Descrição </label><br>
    <input type="text" name="descricao" value="<?= $produto->descricao ?>" required><br><Br>

    <label for="descricao"> Preço </label><br>
    <input type="text" name="preco" value="<?= $produto->preco ?>" required><br><Br>

    <input type="submit" value="Salvar">
</form>