<?php require("layout/header.view.php"); ?>

<h2><?= $total ?> Casos em Ponta Grossa</h2>

<div class="chart">
    <svg class="line-chart"></svg>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.xkcd@1.1/dist/chart.xkcd.min.js"></script>
<script>
    const svg = document.querySelector('.line-chart')
    new chartXkcd.XY(svg, {
        title: 'Evolução dos Casos Diários',
        yLabel: 'Casos',
        data: {
            datasets: [{
                label: 'Casos confirmados',
                data: <?= $casos ?>
            }],

        },
        options: {
            xTickCount: 5,
            yTickCount: 4,
            legendPosition: chartXkcd.config.positionType.upLeft,
            showLine: true,
            timeFormat: 'DD/MM/YYYY',
            dotSize: .4,
            dataColors: ['#ddcd45'],

        },
    });
</script>

<?php require("layout/footer.view.php"); ?>