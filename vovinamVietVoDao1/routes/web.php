<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/UpadteScore/{controler_id}/{score}', function ($controler_id,$score) {

    $controler=DB::select('select id from controllers where code= ?',[$controler_id]);
    if($controler!=null)
    {
        $array = json_decode(json_encode($controler[0]), true);
        if($array['id']!=null)
        {
            $combrat=DB::select('select * from combats where controller_bleu_id = ?',[$array['id']]);

            if($combrat == null)
            {
                $combrat=DB::select('select * from combats where controller_red_id = ?',[$array['id']]);
                if($combrat != null)
                {
                    $affected = DB::table('combats')
                        ->where('controller_red_id', $array['id'])
                        ->update(['scoreRed' => $score]);
                    if($affected!=0)
                    {
                        return 'marche';
                    }
                }
            }
            else{
                $affected = DB::table('combats')
                    ->where('controller_bleu_id', $array['id'])
                    ->update(['scoreBlue' => $score]);
                if($affected!=0)
                {
                    return 'marche';
                }
            }
        }

    }

    return 'ne marche pas';
});
Route::get('/EnregistrerCombat/{controler_id}', function ($controler_id) {

    $controler=DB::select('select id from controllers where code= ?',[$controler_id]);
    if($controler!=null)
    {
        $array = json_decode(json_encode($controler[0]), true);
        if($array['id']!=null) {
            $requetteSql='select * from combats WHERE'
                .' scoreBlue IS NOT NULL '
                .' And controller_bleu_id =? '
                .' And scoreRed IS NOT NULL ';

            $combrat=DB::select($requetteSql,[$array['id']]);
            $combat = json_decode(json_encode($combrat), true);
            if($combrat == null) {

                $requetteSql='select * from combats WHERE'
                .' scoreBlue IS NOT NULL '
                .' And controller_red_id =? '
                .' And scoreRed IS NOT NULL ';

                $combrat=DB::select($requetteSql,[$array['id']]);
                $combat = json_decode(json_encode($combrat), true);
            }
            if($combat!=null)
            {
                
                $delete=DB::table('combats')->where('id', $combat[0]['id'])->delete();
                $insert=DB::table('combat_historics')->insert(
                ['joueur_bleu_id'=> $combat[0]['joueur_bleu_id'] ,
                'entraineur_bleu_id'=> $combat[0]['entraineur_bleu_id'],
                'juge_bleu_id'=> $combat[0]['juge_bleu_id'],
                'controller_bleu_id'=> $combat[0]['controller_bleu_id'],
                'scoreBlue'=> $combat[0]['scoreBlue'],
                'scoreRed'=> $combat[0]['scoreRed'],
                'joueur_red_id'=> $combat[0]['joueur_red_id'],
                'entraineur_red_id'=> $combat[0]['entraineur_red_id'],
                'controller_red_id'=> $combat[0]['controller_red_id'],
                'juge_red_id'=> $combat[0]['juge_red_id'],
                'arbitre_id'=> $combat[0]['arbitre_id'],
                'date'=> $combat[0]['date'],
                'salle_id'=> $combat[0]['salle_id'],
                'created_at'=> $combat[0]['created_at'],
                'updated_at'=> $combat[0]['updated_at']]
                );
                dd($insert);
            }
        }

    }

    return 'ne marche pas';
});
Route::get('/vovinam', function () {
    return view('vovinam');
})->name('vovinam');
Route::get('/technique', function () {
    return view('technique');
})->name('technique');
Route::get('/arbitrage', function () {
    return view('arbitrage');
})->name('arbitrage');
Route::get('/documentation', function () {
    return view('documentation');
})->name('documentation');
Route::get('/histoire', function () {
    return view('histoire');
})->name('histoire');
Route::get('/connecter', function () {
    return redirect('/admin');
})->name('connecter');
