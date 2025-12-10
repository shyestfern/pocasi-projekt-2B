<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
use App\Models\Station;
use App\Models\Data;

class Main extends BaseController
{   
    public function index()
    {
        $bundesland = new Bundesland();
        $zeme = $bundesland->findAll();
        //var_dump($zeme);
        $data = [
            'zeme' => $zeme
        ];
        echo view('zeme', $data);
    }
/**
 * @param $zeme - id země
 */
    public function stanice($zeme){
        $bundesland = new Bundesland();
        $nejakeZeme = $bundesland->find($zeme);
        $station = new Station();
        $stanice = $station->where('bundesland', $zeme)->findAll();
        $data = [
            'zeme' => $nejakeZeme,
            'stanice' => $stanice
        ];
        echo view('stanice', $data);
    }

    public function data($stanice){
        $celaData = new Data();
        $nejakeData = $celaData->where('Stations_ID', $stanice)->orderBy('date', 'desc')->paginate(25);
        $pager = $celaData->pager;
        $data = [
            'data' => $nejakeData,
            'pager' => $pager
        ];
        echo view('data', $data);
    }

    public function kartyStanic(){
        $bundesland = new Bundesland();
        $zeme = $bundesland->findAll();
        $station = new Station();
        $stanice = $station->where('bundesland', $zeme)->findAll();
        $data = [
            'stanice' => $stanice
        ];
        echo view('stanice', $data);
    }
}
