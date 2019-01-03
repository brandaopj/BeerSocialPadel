<?php

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



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
//use App\GamesGenReg;

Auth::routes();

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/conceito', function () {
    return view('conceito');
});

Route::get('/torneios', function () {
    return view('torneios');
});

Route::get('/planeamento', function () {
    return view('planeamento');
});

Route::get('/rankingcs', function () {
    return view('rankingcs');
});

Route::get('/regras', function () {
    return view('regras');
});

Route::get('/whatsapp', function () {
    return view('whatsapp');
});

Route::get('/bsp', function () {
    return view('bsp');
});

Route::get('/inscricoestorneios', function () {
    return view('inscricoestorneios');
});

Route::get('/fichainscricao', function () {
    return view('fichainscricao');
});

Route::get('/fichainscricaomistos', function () {
    return view('fichainscricaomistos');
});

Route::get('/multimedia', function () {
    return view('multimedia');
});






Route::post('/random/result', function(Request $request) 
{

    $validator = Validator::make($request->all(), [
        'players' => 'required',
    ]);


    if ($validator->fails()) {
        return back()
            ->withInput()
            ->withErrors($validator);
    }

    $pares = [];
    $jogos = [];
    $jogos_campos = [];
    


	$str2 = str_replace(chr(13),'',$request->input('players'));

	$title = $request->input('title');
	$club = $request->input('club');
	$start_at = $request->input('start_at');

    
    $a_players = explode(chr(10), $str2);



    foreach($a_players as $k=>$v)
    	{
		    if(trim($v) == '')
			    {
			    	$a_players[$k]=null;
			        unset($a_players[$k]);
			    }
		}
	
	$a_players = array_values($a_players);

	

	shuffle ($a_players);
//print count($a_players); die;
	IF(count($a_players)===0 OR (count($a_players) % 2) != 0)
	{
		\Session::flash('alert-warning', 'Numero de jogadores inválido');
    	
    	return view('random', compact('pares'));
	}

	$chunk = count($a_players)/2;


    $achunk_csplayers = array_chunk($a_players, $chunk);


	$a_csplayers = $achunk_csplayers[0];
	$a_players = $achunk_csplayers[1];



    if ( count($a_csplayers) !== count($a_players))
    {
    	\Session::flash('alert-warning', 'Numero de jogadores Cabeça de Série têm que ser igual ao numero de jogadores não cabeça de série!');
    	
    	return view('random', compact('pares'));
    }


    foreach($a_csplayers as $k=>$v)
    	{

	    	$x = rand(0, count($a_players)-1); 
	    	
	    	$pares[]  = [$v, $a_players[$x]];

	    	$equipas[]  = ["team" => $k, "players" => $v.' e '.$a_players[$x]];
	    	
	    	unset($a_players[$x]);
	    	
	    	$a_players = array_values($a_players);
    	}

    $_pares = $pares;

    

    foreach($pares as $k=>$v)
	{


    		foreach($_pares as $k2=>$v2)
    		{
    			

    			if($v != $v2)
    			{
    				//print "$v[0].' | '.$v[1].' | '.$v2[0].' | '.$v2[1].'<BR>'";

    				$jogos[]  = ["jog"=>$v[0].' e '.$v[1], "adv"=>$v2[0].' e '.$v2[1]];
    				
    			}
    			
    		}
    		
    		
    }



    $_jogos = $jogos;

    
    foreach($_jogos as $k=>$v)
	{

		$_jog=$v['jog'];
		$_adv=$v['adv'];

		foreach($jogos as $k2=>$v2)
		{

			$jog=$v2['jog'];
			$adv=$v2['adv'];
			

			// echo $jog.' '.$adv.'<BR>';

			// echo $v2['adv'].' '.$v2['jog'].'<BR>';
			

			if($_jog == $adv and $_adv == $jog)
			{


			 	$jogos[]  = ["jog"=>$jog, "adv"=>$adv, "campo"=>999];

			}
			
			unset($jogos[$k]);

			// $jogos = array_values($jogos);

		}

		
		//$jogos = array_values($jogos);
	}

	$jogos = array_values($jogos);

//**************************************************************************************************



	//var_dump($equipas); die;






	//var_dump($jogos); die;

	$num_campos = count($pares)/2;

	$num_rondas = count($pares)-1;

	$a_model[0] =	[ "round" => -9999,
					  "court" => -9999,
					  "team1" => 'invalid number of teams',
					  "team2" => 'please correct',
					  "title" => '',
					  "location" => '',
					  "date" => '',
					  "durationhours" => '',
					  "colsize" => '6'
					];

//print $num_rondas;

	if($num_rondas === 3)
	{

	$a_model_3[0] =	[ "round" => 1,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[1]['players'],
					  "title" => $title,
					  "location" => $club,
					  "date" => $start_at,
					  "durationhours" => '2',
					  "colsize" => '6'
					];
	$a_model_3[1] =	[ "round" => 1,
					  "court" => 2,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_3[2] =	[ "round" => 2,
					  "court" => 1,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_3[3] =	[ "round" => 2,
					  "court" => 2,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[2]['players']
						];
	$a_model_3[4] =	[ "round" => 3,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[3]['players']
						];
	$a_model_3[5] =	[ "round" => 3,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[2]['players']
						];

	}


	if($num_rondas === 5)
	{
	$a_model_5[0] =	[ "round" => 1,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[1]['players'],
					  "title" => $title,
					  "location" => $club,
					  "date" => $start_at,
					  "durationhours" => '2',
					  "colsize" => '4'
					];
	$a_model_5[1] =	[ "round" => 1,
					  "court" => 2,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_5[2] =	[ "round" => 1,
					  "court" => 3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_5[3] =	[ "round" => 2,
					  "court" => 1,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[4] =	[ "round" => 2,
					  "court" => 2,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[5] =	[ "round" => 2,
					  "court" => 3,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_5[6] =	[ "round" => 3,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_5[7] =	[ "round" => 3,
					  "court" => 2,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_5[8] =	[ "round" => 3,
					  "court" => 3,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[9] =	[ "round" => 4,
					  "court" => 1,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[10] = [ "round" => 4,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_5[11] = [ "round" => 4,
					  "court" => 3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_5[12] = [ "round" => 5,
					  "court" => 1,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_5[13] = [ "round" => 5,
					  "court" => 2,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[14] = [ "round" => 5,
					  "court" => 3,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[4]['players']
					];
	}


	if($num_rondas === 7)
	{
	$a_model_7[0] = [ "round" => 1,
					  "court" => 1,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[3]['players'],
					  "title" => $title,
					  "location" => $club,
					  "date" => $start_at,
					  "durationhours" => '2',
					  "colsize" => '3'
					];
	$a_model_7[1] = [ "round" => 1,
					  "court" => 2,
					  "team1" => $equipas[6]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[2] = [ "round" => 1,
					  "court" => 3,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[3] = [ "round" => 1,
					  "court" => 4,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[1]['players']
					];
	$a_model_7[4] =	[ "round" => 2,
					  "court" => 1,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[5] =	[ "round" => 2,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[6] =	[ "round" => 2,
					  "court" => 3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_7[7] =	[ "round" => 2,
					  "court" => 4,
					  "team1" => $equipas[5]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[8] =	[ "round" => 3,
					  "court" => 1,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[9] =	[ "round" => 3,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[10] = [ "round" => 3,
					  "court" => 3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[11] = [ "round" => 3,
					  "court" => 4,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[12] = [ "round" => 4,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_7[13] = [ "round" => 4,
					  "court" => 2,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[14] = [ "round" => 4,
					  "court" => 3,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_7[15] = [ "round" => 4,
					  "court" => 4,
					  "team1" => $equipas[5]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[16] = [ "round" => 5,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[17] = [ "round" => 5,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_7[18] = [ "round" => 5,
					  "court" => 3,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[19] = [ "round" => 5,
					  "court" => 4,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[20] = [ "round" => 6,
					  "court" => 1,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[21] = [ "round" => 6,
					  "court" => 2,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[22] = [ "round" => 6,
					  "court" => 3,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[23] = [ "round" => 6,
					  "court" => 4,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[24] = [ "round" => 7,
					  "court" => 1,
					  "team1" => $equipas[5]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[25] = [ "round" => 7,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[26] = [ "round" => 7,
					  "court" => 3,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_7[27] = [ "round" => 7,
					  "court" => 4,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[7]['players']
					];
	}

//print ($num_rondas); die;
	if($num_rondas == 3)	$jogos = $a_model_3;

	else if($num_rondas == 5)	$jogos = $a_model_5;

	else if($num_rondas == 7)	$jogos = $a_model_7;

	else
	{
		$jogos = $a_model;
		\Session::flash('alert-warning', 'Numero de duplas / Campos inválidos!'); 
	}

	
    if (count($pares)>0)
    {
    	
    	 
    	if(is_int(count($pares)/2))	{ \Session::flash('alert-success', 'Duplas Geradas com sucesso!'); }

    	else { \Session::flash('alert-warning', 'Numero de duplas / Campos inválidos!'); }
    }
    
    	
    return view('random', compact('pares','jogos'));
    
});


Route::get('/random', function () {
    return view('random')->with('pares', '')->with('jogos', '');



});










Route::post('/randomcs/result', function(Request $request) 
{

    $validator = Validator::make($request->all(), [
        'players' => 'required',
        'csplayers' => 'required',
    ]);


    if ($validator->fails()) {
        return back()
            ->withInput()
            ->withErrors($validator);
    }

	//return Input::all();
     // if(Input::has('generate')){
     //        print 1; die;
     // }
     //     elseif(Input::get('save')) {
     //       print 2; die;
     //    }

    $pares = [];
    $jogos = [];
    $jogos_campos = [];
    

	$str1 = str_replace(chr(13),'',$request->input('csplayers'));

	$str2 = str_replace(chr(13),'',$request->input('players'));

	$title = $request->input('title');
	$club = $request->input('club');
	$start_at = $request->input('start_at');

	$court1 = $request->input('court1');
	$court2 = $request->input('court2');
	$court3 = $request->input('court3');
	$court4 = $request->input('court4');

    $a_csplayers = explode(chr(10), $str1);
    $a_players = explode(chr(10), $str2);



    foreach($a_csplayers as $k=>$v)
    	{
		    if(trim($v) == '')
			    {
			    	$a_csplayers[$k]=null;
			        unset($a_csplayers[$k]);
			    }
		}
	
	$a_csplayers = array_values($a_csplayers);

	

	shuffle ($a_csplayers);

	

	foreach($a_players as $k2=>$v2)
    	{
    		
		    if(trim($v2) == '')
			    {
			    	$a_players[$k2]=null;
			        unset($a_players[$k2]);
			    }
		}

	$a_players = array_values($a_players);

    // dd($a_csplayers);


    if ( count($a_csplayers) !== count($a_players))
    {
    	\Session::flash('alert-warning', 'Numero de jogadores Cabeça de Série têm que ser igual ao numero de jogadores não cabeça de série!');
    	
    	return view('randomcs', compact('pares'));
    }


    //var_dump($a_csplayers); die;

    foreach($a_csplayers as $k=>$v)
    	{
	    	

	    	$x = rand(0, count($a_players)-1); 
	    	
	    	$pares[]  = [$v, $a_players[$x]];

	    	$equipas[]  = ["team" => $k, "players" => $v.' e '.$a_players[$x]];
	    	
	    	unset($a_players[$x]);
	    	
	    	$a_players = array_values($a_players);
    	}




    $_pares = $pares;

    //var_dump($pares); die;

    foreach($pares as $k=>$v)
	{




		



    		foreach($_pares as $k2=>$v2)
    		{
    			

    			if($v != $v2)
    			{
    				//print "$v[0].' | '.$v[1].' | '.$v2[0].' | '.$v2[1].'<BR>'";

    				
    				$jogos[]  = ["jog"=>$v[0].' e '.$v[1], "adv"=>$v2[0].' e '.$v2[1]];

    				
    			}
    			
    		}
    		
    		
    }


    
    //var_dump($jogos);
    //$num_campos = count($pares)/2;


 //    for ($x = 1; $x <= $num_campos; $x++) 
 //    {
 //    	echo "Campo número: $x <br>";
	// } 

    $_jogos = $jogos;

    //var_dump($_jogos); die;
    
    foreach($_jogos as $k=>$v)
	{

		$_jog=$v['jog'];
		$_adv=$v['adv'];

		foreach($jogos as $k2=>$v2)
		{

			$jog=$v2['jog'];
			$adv=$v2['adv'];
			

			// echo $jog.' '.$adv.'<BR>';

			// echo $v2['adv'].' '.$v2['jog'].'<BR>';
			

			if($_jog == $adv and $_adv == $jog)
			{
			 	//echo $k2.'<HR>';


			 	$jogos[]  = ["jog"=>$jog, "adv"=>$adv, "campo"=>999];
			 	//unset($jogos[$k2]);

			 	//print $_jog.' '.$adv;

			 	
			 	//echo $_jog.' '.$_adv.' '.$jog.' '.$adv.'<BR>';
			}
			
			unset($jogos[$k]);

			// $jogos = array_values($jogos);

		}

		
		//$jogos = array_values($jogos);
	}

	$jogos = array_values($jogos);

//**************************************************************************************************



	//var_dump($equipas); die;






	//var_dump($jogos); die;

	$num_campos = count($pares)/2;

	$num_rondas = count($pares)-1;

	$a_model[0] =	[ "round" => -9999,
					  "court" => -9999,
					  "team1" => 'invalid number of teams',
					  "team2" => 'please correct',
					  "title" => '',
					  "location" => '',
					  "date" => '',
					  "durationhours" => '',
					  "colsize" => '6'
					];

//print $num_rondas;

	if($num_rondas === 3)
	{

	$a_model_3[0] =	[ "round" => 1,
					  "court" => $court1,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[3]['players'],
					  "title" => $title,
					  "location" => $club,
					  "date" => $start_at,
					  "durationhours" => '2',
					  "colsize" => '6'
					];
	$a_model_3[1] =	[ "round" => 1,
					  "court" => $court2,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[1]['players']
					];
	$a_model_3[2] =	[ "round" => 2,
					  "court" => $court1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_3[3] =	[ "round" => 2,
					  "court" => $court2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[3]['players']
						];
	$a_model_3[4] =	[ "round" => 3,
					  "court" => $court1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[3]['players']
						];
	$a_model_3[5] =	[ "round" => 3,
					  "court" => $court2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[2]['players']
						];

	}


	if($num_rondas === 5)
	{
	$a_model_5[0] =	[ "round" => 1,
					  "court" => $court1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[1]['players'],
					  "title" => $title,
					  "location" => $club,
					  "date" => $start_at,
					  "durationhours" => '2',
					  "colsize" => '4'
					];
	$a_model_5[1] =	[ "round" => 1,
					  "court" => $court2,
					  "team1" => $equipas[5]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_5[2] =	[ "round" => 1,
					  "court" => $court3,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_5[3] =	[ "round" => 2,
					  "court" => $court1,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[1]['players']
					];
	$a_model_5[4] =	[ "round" => 2,
					  "court" => $court2,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[5] =	[ "round" => 2,
					  "court" => $court3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_5[6] =	[ "round" => 3,
					  "court" => $court1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_5[7] =	[ "round" => 3,
					  "court" => $court2,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_5[8] =	[ "round" => 3,
					  "court" => $court3,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[9] =	[ "round" => 4,
					  "court" => $court1,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[10] = [ "round" => 4,
					  "court" => $court2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_5[11] = [ "round" => 4,
					  "court" => $court3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_5[12] = [ "round" => 5,
					  "court" => $court1,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_5[13] = [ "round" => 5,
					  "court" => $court2,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[14] = [ "round" => 5,
					  "court" => $court3,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[4]['players']
					];
	}


	if($num_rondas === 7)
	{
	$a_model_7[0] = [ "round" => 1,
					  "court" => $court1,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[3]['players'],
					  "title" => $title,
					  "location" => $club,
					  "date" => $start_at,
					  "durationhours" => '2',
					  "colsize" => '3'
					];
	$a_model_7[1] = [ "round" => 1,
					  "court" => $court2,
					  "team1" => $equipas[6]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[2] = [ "round" => 1,
					  "court" => $court3,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[3] = [ "round" => 1,
					  "court" => $court4,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[1]['players']
					];
	$a_model_7[4] =	[ "round" => 2,
					  "court" => $court1,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[5] =	[ "round" => 2,
					  "court" => $court2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[6] =	[ "round" => 2,
					  "court" => $court3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_7[7] =	[ "round" => 2,
					  "court" => $court4,
					  "team1" => $equipas[5]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[8] =	[ "round" => 3,
					  "court" => $court1,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[9] =	[ "round" => 3,
					  "court" => $court2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[10] = [ "round" => 3,
					  "court" => $court3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[11] = [ "round" => 3,
					  "court" => $court4,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[12] = [ "round" => 4,
					  "court" => $court1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_7[13] = [ "round" => 4,
					  "court" => $court2,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[14] = [ "round" => 4,
					  "court" => $court3,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_7[15] = [ "round" => 4,
					  "court" => $court4,
					  "team1" => $equipas[5]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[16] = [ "round" => 5,
					  "court" => $court1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[17] = [ "round" => 5,
					  "court" => $court2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_7[18] = [ "round" => 5,
					  "court" => $court3,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[19] = [ "round" => 5,
					  "court" => $court4,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[20] = [ "round" => 6,
					  "court" => $court1,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[21] = [ "round" => 6,
					  "court" => $court2,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[22] = [ "round" => 6,
					  "court" => $court3,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[23] = [ "round" => 6,
					  "court" => $court4,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[24] = [ "round" => 7,
					  "court" => $court1,
					  "team1" => $equipas[5]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[25] = [ "round" => 7,
					  "court" => $court2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[26] = [ "round" => 7,
					  "court" => $court3,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_7[27] = [ "round" => 7,
					  "court" => $court4,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[7]['players']
					];
	}

//print ($num_rondas); die;
	if($num_rondas == 3)	$jogos = $a_model_3;

	else if($num_rondas == 5)	$jogos = $a_model_5;

	else if($num_rondas == 7)	$jogos = $a_model_7;

	else
	{
		$jogos = $a_model;
		\Session::flash('alert-warning', 'Numero de duplas / Campos inválidos!'); 
	}

	

    if (count($pares)>0)
    {
    	
    	 
    	if(is_int(count($pares)/2))	{ \Session::flash('alert-success', 'Duplas Geradas com sucesso!'); }

    	else { \Session::flash('alert-warning', 'Numero de duplas / Campos inválidos!'); }
    }
    
    	
    return view('randomcs', compact('pares','jogos'));
    
});


Route::get('/randomcs', function () {
    return view('randomcs')->with('pares', '')->with('jogos', '');



});


















Route::post('/randomfx/result', function(Request $request) 
{

    $validator = Validator::make($request->all(), [
        'players' => 'required',
        'csplayers' => 'required',
    ]);


    if ($validator->fails()) {
        return back()
            ->withInput()
            ->withErrors($validator);
    }

    $pares = [];
    $jogos = [];
    $jogos_campos = [];
    

	$str1 = str_replace(chr(13),'',$request->input('csplayers'));

	$str2 = str_replace(chr(13),'',$request->input('players'));

	$title = $request->input('title');
	$club = $request->input('club');
	$start_at = $request->input('start_at');

    $a_csplayers = explode(chr(10), $str1);
    
    $a_players = explode(chr(10), $str2);



    foreach($a_csplayers as $k=>$v)
    	{
		    if(trim($v) == '')
			    {
			    	$a_csplayers[$k]=null;
			        unset($a_csplayers[$k]);
			    }
		}
	
	$a_csplayers = array_values($a_csplayers);

	

	//shuffle ($a_csplayers);

	

	foreach($a_players as $k2=>$v2)
    	{
    		
		    if(trim($v2) == '')
			    {
			    	$a_players[$k2]=null;
			        unset($a_players[$k2]);
			    }
		}

	$a_players = array_values($a_players);

    // dd($a_csplayers);


    if ( count($a_csplayers) !== count($a_players))
    {
    	\Session::flash('alert-warning', 'Numero de jogadores Cabeça de Série têm que ser igual ao numero de jogadores não cabeça de série!');
    	
    	return view('randomfx', compact('pares'));
    }


    //var_dump($a_csplayers); die;

    foreach($a_csplayers as $k=>$v)
    	{
	    	

	    	//$x = rand(0, count($a_players)-1); 
	    	
	    	$pares[]  = [$v, $a_players[$k]];

	    	$equipas[]  = ["team" => $k, "players" => $v.' e '.$a_players[$k]];
	    	
	    	// unset($a_players[$x]);
	    	
	    	// $a_players = array_values($a_players);
    	}


    






    $_pares = $pares;

    

    foreach($pares as $k=>$v)
	{


    		foreach($_pares as $k2=>$v2)
    		{
    			

    			if($v != $v2)
    			{
    				//print "$v[0].' | '.$v[1].' | '.$v2[0].' | '.$v2[1].'<BR>'";

    				
    				$jogos[]  = ["jog"=>$v[0].' e '.$v[1], "adv"=>$v2[0].' e '.$v2[1]];

    				
    			}
    			
    		}
    		
    		
    }


    
    //var_dump($jogos);
    //$num_campos = count($pares)/2;


 //    for ($x = 1; $x <= $num_campos; $x++) 
 //    {
 //    	echo "Campo número: $x <br>";
	// } 

    $_jogos = $jogos;

    //var_dump($_jogos); die;
    
    foreach($_jogos as $k=>$v)
	{

		$_jog=$v['jog'];
		$_adv=$v['adv'];

		foreach($jogos as $k2=>$v2)
		{

			$jog=$v2['jog'];
			$adv=$v2['adv'];
			

			// echo $jog.' '.$adv.'<BR>';

			// echo $v2['adv'].' '.$v2['jog'].'<BR>';
			

			if($_jog == $adv and $_adv == $jog)
			{
			 	//echo $k2.'<HR>';


			 	$jogos[]  = ["jog"=>$jog, "adv"=>$adv, "campo"=>999];
			 	//unset($jogos[$k2]);

			 	//print $_jog.' '.$adv;

			 	
			 	//echo $_jog.' '.$_adv.' '.$jog.' '.$adv.'<BR>';
			}
			
			unset($jogos[$k]);

			// $jogos = array_values($jogos);

		}

		
		//$jogos = array_values($jogos);
	}

	$jogos = array_values($jogos);

//**************************************************************************************************



	//var_dump($equipas); die;






	//var_dump($jogos); die;

	$num_campos = count($pares)/2;

	$num_rondas = count($pares)-1;

	$a_model[0] =	[ "round" => -9999,
					  "court" => -9999,
					  "team1" => 'invalid number of teams',
					  "team2" => 'please correct',
					  "title" => '',
					  "location" => '',
					  "date" => '',
					  "durationhours" => '',
					  "colsize" => '6'
					];

//print $num_rondas;

	if($num_rondas === 3)
	{

	$a_model_3[0] =	[ "round" => 1,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[1]['players'],
					  "title" => $title,
					  "location" => $club,
					  "date" => $start_at,
					  "durationhours" => '2',
					  "colsize" => '6'
					];
	$a_model_3[1] =	[ "round" => 1,
					  "court" => 2,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_3[2] =	[ "round" => 2,
					  "court" => 1,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_3[3] =	[ "round" => 2,
					  "court" => 2,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[2]['players']
						];
	$a_model_3[4] =	[ "round" => 3,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[3]['players']
						];
	$a_model_3[5] =	[ "round" => 3,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[2]['players']
						];

	}


	if($num_rondas === 5)
	{
	$a_model_5[0] =	[ "round" => 1,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[1]['players'],
					  "title" => $title,
					  "location" => $club,
					  "date" => $start_at,
					  "durationhours" => '2',
					  "colsize" => '4'
					];
	$a_model_5[1] =	[ "round" => 1,
					  "court" => 2,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_5[2] =	[ "round" => 1,
					  "court" => 3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_5[3] =	[ "round" => 2,
					  "court" => 1,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[4] =	[ "round" => 2,
					  "court" => 2,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[5] =	[ "round" => 2,
					  "court" => 3,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_5[6] =	[ "round" => 3,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_5[7] =	[ "round" => 3,
					  "court" => 2,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_5[8] =	[ "round" => 3,
					  "court" => 3,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[9] =	[ "round" => 4,
					  "court" => 1,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[10] = [ "round" => 4,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_5[11] = [ "round" => 4,
					  "court" => 3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_5[12] = [ "round" => 5,
					  "court" => 1,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_5[13] = [ "round" => 5,
					  "court" => 2,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_5[14] = [ "round" => 5,
					  "court" => 3,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[4]['players']
					];
	}


	if($num_rondas === 7)
	{
	$a_model_7[0] = [ "round" => 1,
					  "court" => 1,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[3]['players'],
					  "title" => $title,
					  "location" => $club,
					  "date" => $start_at,
					  "durationhours" => '2',
					  "colsize" => '3'
					];
	$a_model_7[1] = [ "round" => 1,
					  "court" => 2,
					  "team1" => $equipas[6]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[2] = [ "round" => 1,
					  "court" => 3,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[3] = [ "round" => 1,
					  "court" => 4,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[1]['players']
					];
	$a_model_7[4] =	[ "round" => 2,
					  "court" => 1,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[5] =	[ "round" => 2,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[6] =	[ "round" => 2,
					  "court" => 3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_7[7] =	[ "round" => 2,
					  "court" => 4,
					  "team1" => $equipas[5]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[8] =	[ "round" => 3,
					  "court" => 1,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[9] =	[ "round" => 3,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[10] = [ "round" => 3,
					  "court" => 3,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[11] = [ "round" => 3,
					  "court" => 4,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[12] = [ "round" => 4,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_7[13] = [ "round" => 4,
					  "court" => 2,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[14] = [ "round" => 4,
					  "court" => 3,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_7[15] = [ "round" => 4,
					  "court" => 4,
					  "team1" => $equipas[5]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[16] = [ "round" => 5,
					  "court" => 1,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[17] = [ "round" => 5,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[4]['players']
					];
	$a_model_7[18] = [ "round" => 5,
					  "court" => 3,
					  "team1" => $equipas[3]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[19] = [ "round" => 5,
					  "court" => 4,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[20] = [ "round" => 6,
					  "court" => 1,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[7]['players']
					];
	$a_model_7[21] = [ "round" => 6,
					  "court" => 2,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[22] = [ "round" => 6,
					  "court" => 3,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[23] = [ "round" => 6,
					  "court" => 4,
					  "team1" => $equipas[2]['players'],
					  "team2" => $equipas[5]['players']
					];
	$a_model_7[24] = [ "round" => 7,
					  "court" => 1,
					  "team1" => $equipas[5]['players'],
					  "team2" => $equipas[3]['players']
					];
	$a_model_7[25] = [ "round" => 7,
					  "court" => 2,
					  "team1" => $equipas[1]['players'],
					  "team2" => $equipas[6]['players']
					];
	$a_model_7[26] = [ "round" => 7,
					  "court" => 3,
					  "team1" => $equipas[4]['players'],
					  "team2" => $equipas[2]['players']
					];
	$a_model_7[27] = [ "round" => 7,
					  "court" => 4,
					  "team1" => $equipas[0]['players'],
					  "team2" => $equipas[7]['players']
					];
	}

//print ($num_rondas); die;
	if($num_rondas == 3)	$jogos = $a_model_3;

	else if($num_rondas == 5)	$jogos = $a_model_5;

	else if($num_rondas == 7)	$jogos = $a_model_7;

	else
	{
		$jogos = $a_model;
		\Session::flash('alert-warning', 'Numero de duplas / Campos inválidos!'); 
	}

	

    if (count($pares)>0)
    {
    	
    	 
    	if(is_int(count($pares)/2))	{ \Session::flash('alert-success', 'Duplas Geradas com sucesso!'); }

    	else { \Session::flash('alert-warning', 'Numero de duplas / Campos inválidos!'); }
    }
    
    	
    return view('randomfx', compact('pares','jogos'));
    
});


Route::get('/randomfx', function () {
    return view('randomfx')->with('pares', '')->with('jogos', '');



});




