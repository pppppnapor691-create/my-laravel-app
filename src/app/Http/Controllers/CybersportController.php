<?php

namespace App\Http\Controllers;

use App\Models\Cybersport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CybersportController extends Controller
{


    public function index(){
        return view('post');
    }
    public function createTable()
    {
        Artisan::call('migrate');
        return "Table created";
    }

    public function count()
    {
        $count = Cybersport::count();
        return "Всего записей $count";
    }

    public function create(){
        $date = [
            'name' => 'sashok',
            'elo_cs' => '3333',
            'length_of_service_years' => '2',
            'worth_of_inventory' => '3',
            'count_of_socked_dicks' => '2']
        ;

        $exists = Cybersport::where('name', $date['name'])->exists();
        if (!$exists) {
            Cybersport::create($date);
        } else dd('Данные не добавлены');

        dd('Внесены новые данные.');
    }

    public function update(){
        $up = Cybersport::where('name', 'update Aleksandr')->get();
        foreach ($up as $value) {
            $value->update(['name' => 'Aleksandr']);
        }
        dd('Изменение успешно');
    }

    public function delete(){
        $up = Cybersport::where('elo_cs', '=', 0)->delete();
        dd('Удаление - успешно');
    }

    public function restore(){
        Cybersport::onlyTrashed()->where('elo_cs', 0)->restore();
        dd('Данные восстановлены');
    }
}
