<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.7.0/dist/paper.min.css">
    <style>
        .container {
            max-width: 1280px !important;
        }
        .mt-30 {
            margin-top: 30px
        }

        .-mt-30 {
            margin-top: -30px;
        }

        .wrapper {
            display: flex;
            flex: wrap;
            order: row;
        }

        body {
            background-color: #f4f4f4;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23cccccc' fill-opacity='0.24' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .xkcd-chart-xyline {stroke-width: 2 !important;}
        .hover-button div { visibility: hidden;}
        tr:hover .hover-button div {visibility: visible;}
        .center {justify-content: center; align-items: center; text-align: center;}
        .center h4 {margin-top: -50px;}
        .cardi {display: flex; flex-direction: column;}
        .cardi:not(:nth-child(1)) { margin-left: 25px;}
    
    </style>
    <title>Casos Covid 2020</title>
</head>

<body>
    <div class="paper container mt-30 border border-3 border-primary">

        <nav class="split-nav">
            <div class="nav-brand">
                <h3><a href="/">Relatório Covid</a></h3>
            </div>
            <div class="collapsible">
                <input id="collapsible1" type="checkbox" name="collapsible1">
                <label for="collapsible1">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </label>
                <div class="collapsible-body">
                    <ul class="inline">
                        <li><a href="/">Home</a></li>
                        <li><a href="/ponta-grossa">Casos em Ponta Grossa</a></li>
                        <li><a href="/estados">Casos por Estado</a></li>
                    </ul>
                </div>
            </div>
        </nav>