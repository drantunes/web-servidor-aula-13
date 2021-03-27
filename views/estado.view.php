<?php require("layout/header.view.php"); ?>

<h2>Casos no <?= $dados->state ?></h2>

<div class="row center">
    <div class="col-5 col center cardi border border-2 border-secondary">
        <h1><?= number_format($dados->cases, 0, '', '.'); ?></h1>
        <h4 class="text-secondary">casos</h4>
    </div>

    <div class="col-5 col center cardi border border-2 border-danger">
        <h1><?= number_format($dados->deaths, 0, '', '.'); ?></h1>
        <h4 class="text-danger">mortes</h4>
    </div>
</div>

<div class="row center">
    <div class="col-5 col center cardi border border-2 border-warning">
        <h1><?= number_format($dados->suspects, 0, '', '.'); ?></h1>
        <h4 class="text-warning">suspeitos</h4>
    </div>

    <div class="col-5 col center cardi border border-2 border-success">
        <h1><?= number_format($dados->refuses, 0, '', '.'); ?></h1>
        <h4 class="text-success">descartados</h4>
    </div>
</div>


<?php require("layout/footer.view.php"); ?>