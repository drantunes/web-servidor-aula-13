<?php require("layout/header.view.php"); ?>

<h2>Casos Atuais por Estado</h2>
<table class="table-hover table-alternating">
    <thead>
        <tr>
            <th>Estado</th>
            <th>Atualização</th>
            <th>Confirmados</th>
            <th>Detalhes</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dados->data as $dado) : ?>
            <tr>
                <td><?= $dado->state ?></td>
                <td><?= (new DateTime($dado->datetime))->format('d/m/Y') ?></td>
                <td><?= $dado->cases ?></td>
                <td class="hover-button">
                    <div>
                        <a class="text-secondary" href="/estados/<?= strtolower($dado->uf) ?>"><?= $dado->uf ?> 👉🏻</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require("layout/footer.view.php"); ?>