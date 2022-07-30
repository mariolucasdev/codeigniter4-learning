<h1> <?= $titulo ?> </h1>

<a href="<?= base_url('produto/cadastrar') ?>"> Cadastrar </a>

<ul>
    <?php foreach ($produtos as $produto) : ?>
        <li>
            <?= $produto->descricao ?> <br>
            <?= $produto->preco ?> <br>
            <a href="<?= base_url('produto/excluir/' . $produto->id) ?>"> Excluir </a>
            <a href="<?= base_url('produto/editar/' . $produto->id) ?>"> Editar </a>
        </li>
        <hr>
    <?php endforeach ?>
</ul>