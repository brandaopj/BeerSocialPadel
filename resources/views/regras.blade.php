@extends ('layouts/master')



@section('title')

    BSP - Regras

@endsection

   


@section('content')
        

        
        
        <div class="table-responsive" style="margin: 0; width: 100%; background-color: #142C36; color: white;  padding: 10px; padding-left: 30px; padding-right: 30px;">
        	<BR>
        	
            <H3><div style="color:#e8491d;">Regras torneio:</div></H3>
            <BR>
            <p>Os torneios são realizados em formato non-stop, com jogos de 16/18 minutos, mediante o número de duplas em prova. Com 5min de aquecimento no 1º jogo do torneio.</p>

            <p>No final de cada jogo, soa a busina/apito, mas o ponto que se está a disputar será sempre realizado até ao final. Quanto terminar esse ponto, a decisão do vencedor é tomada através das seguintes regras:</p>
            <div> 
                <img src="/images/regras.png">
            </div>
            <BR>
            <p>No caso de haver duplas com a mesma pontuação, o primeiro critério de desempate é a diferença de jogos, o 2º critério é o maior número de jogos ganho, o 3º critério é confronto directo.</p>
            <BR><BR>

        </div>
       


@endsection

@section('footer')

    @include ('layouts.footer')

@endsection