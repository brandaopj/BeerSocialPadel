@extends ('layouts/master')



@section('title')

    BSP - Regras

@endsection

   


@section('content')
        

        
        
        <div class="table-responsive" style="margin: 0; width: 100%; background-color: #142C36; color: white;  padding: 10px; padding-left: 30px; padding-right: 30px;">
        	<BR>
        	
            <H3><div style="color:#e8491d;">Regras torneio:</div></H3>
            
            <p>Os torneios são realizados em formato non-stop, com jogos de 16/18 minutos, mediante o número de duplas em prova. Com 5min de aquecimento no 1º jogo do torneio.</p>

            <p>No final de cada jogo, soa a busina/apito, mas o ponto que se está a disputar será sempre realizado até ao final.</p>
            <p>Quanto terminar esse ponto, a decisão do vencedor é tomada através das seguintes regras:</p>
            
            <div> 
                <img src="/images/regras.png">
            </div>
            <BR>
            <H4><div style="color:#e8491d;">Critérios de desempate:</div></H4>

            <div style="padding-left: 20px;">   
                <ul>
                    <li> Pontuação </li>
                    <li> Diferenças de jogos </li>
                    <li> Maior numero de jogos ganhos </li>
                    <li> Confronto direto </li>
                </ul>
            </div>

            <BR>

        </div>
       


@endsection

@section('footer')

    @include ('layouts.footer')

@endsection