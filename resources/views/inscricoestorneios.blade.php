@extends ('layouts/master')



@section('title')

    BSP - Inscrições Torneios

@endsection

   


@section('content')
        

        
        
        <div class="table-responsive" style="margin: 0; width: 100%; background-color: #142C36; color: white;  padding: 10px; padding-left: 30px; padding-right: 30px;">
        	<BR>
        	<H2>Inscrições Torneios Beer Social Padel</H2>
            <BR>
            <H3><div style="color:#e8491d;">Como funcionam:</div></H3>
            <BR>
            <p>As inscrições nos torneios são sempre feitas no grupo whatsapp da época em curso, com diferentes regras para cada tipo de torneio:</p>
			
            <H5>PREMIUM | CHALLENGER | PARTNERS</H5>
			
            <p>Todos os jogadores podem-se inscrever em qualquer um dos torneios, no entanto, de forma a possibilitar que o maior número de pessoas consigam participar, e também por forma a equilibrar os níveis, existem prioridades diferentes em função da pontuação RANKING CS de cada jogador.</p>
			
            <p>Nos torneios PREMIUM, os jogadores da 1ª metade da tabela RANKING CS têm prioridade. Todas as inscrições dos jogadores que estão na 2ª metade da tabela, são consideradas, e os jogadores colocados em standby.</p>
			
			<p>A 24h da hora do torneio, deixa de haver prioridade, e caso não se consiga preencher o torneio com jogadores da zona premium, as restantes vagas são preenchidas pelos jogadores em standby, tendo prioridade os jogadores com melhor classificação no ranking. Se até 24h antes do inicio do torneio, o numero de inscrições de jogadores com prioridade ultrapssar o numero de vagas, será considerada a ordem de inscrição.</p>

			<p>Nos torneios CHALLENGER, é exactamente o inverso.</p>

            <BR>
            <p>Os vencedores dos torneios CHALLENGER, têm vaga garantida no torneio PREMIUM da semana seguinte.</p> 

			<p>Nos torneios PARTNERS, não há prioridades, sendo considerada a ordem de inscrição.</p>
            
            <BR>
            <p>Em todos os torneios, há sempre uma vaga para um Fundador BSP, e sempre que ache necessário poderão ser atribuídos Wild Cards.</p>

        </div>
       


@endsection

@section('footer')

    @include ('layouts.footer')

@endsection