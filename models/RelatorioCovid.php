<?php

use Carbon\Carbon;

class RelatorioCovid
{

    public static function getDados() 
    {
        return include 'covid-pg.php';
    }
    

    public static function dadosPontaGrossa()
    {
        //Converte as datas no formato suportado pelo gráfico JS
        $dados = array_map(function ($dado) {
            return ['x' => (new Carbon($dado['x']))->format("Y-m-d"), 'y' => $dado['y']];
        }, self::getDados());

        // Gera um JSON para o gráfico
        return json_encode($dados);
    }

    public static function total()
    {
        return self::getDados()[0]['y'];
    }
}
