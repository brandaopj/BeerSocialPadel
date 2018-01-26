@extends ('layouts/master')



@section('title')

    BSP - Torneios

@endsection

   


@section('content')
        

        
        
        <div class="table-responsive" style="margin: 0; width: 100%; background-color: #142C36; color: white;  padding: 10px; padding-left: 30px; padding-right: 30px;">
        	<BR>
        	<H2>Torneios Beer Social Padel</H2>
            <BR>
            <H3><div style="color:#e8491d;">Como funcionam:</div></H3>
            <BR>
            <p>Todas as semanas, o BSP organiza dois torneios semanais, às 2ªs feiras e às 5ªs feiras, das 21h – 23h. Um Premium e um Challenger.</p>
			<p>As inscrições estão abertas a todos os membros BSP que estejam no grupo do Whatsapp.</p>
			<p>De forma a possibilitar que o maior número de jogadores consigam participar num dos dois torneios semanais, existem prioridades para os diferentes tipos de torneios, em função da classificação de cada jogador na Tabela Cabeças de Serie.</p>
			<p>Esta tabela é calculada através da média de pontos obtidos por cada jogador nos torneios em que participou.</p>
			<p>Quando um jogador está um mês sem participar nos torneios, será retirado da tabela de cabeças de serie, sendo os seus pontos congelados até regressarem aos torneios, podendo a organização atribuir Wild Cards para a sua participação nesse 1º torneio de regresso.</p>
			<p>A tabela de classificação geral, é o somatório de todas as pontuações em todos os torneios. Esta tabela geral não tem influência nas prioridades.</p>
			<p>As tabelas são atualizadas uma vez por semana.</p>
            <BR><BR>
            <H3><div style="color:orange;">BSP PREMIUM</div></H3>
            <BR>
            <p>Depois da abertura das inscrições do torneio, nas primeiras 24h, só serão consideradas válidas as inscrições dos jogadores presentes na 1ª metade da Tabela Cabeças de Serie.</p> 
			<p>Mas todos os jogadores podem inscrever-se e ficam em standby durante 24h, caso não se consiga preencher o torneio com jogadores da zona Premium, as restantes vagas são preenchidas por jogador da zona Challenger, tendo prioridade os jogadores com melhor classificação no ranking.</p>
            <BR><BR>
            <H3><div style="color:green;">BSP CHALLENGER</div></H3>
            <BR>
            <p>Depois da abertura das inscrições do torneio, nas primeiras 24h, só serão consideradas válidas as inscrições dos jogadores presentes na 2ª metade da Tabela Cabeças de Serie.</p>
			<p>Mas todos os jogadores podem inscrever-se e ficam em standby durante 24h, caso não se consiga preencher o torneio com jogadores da zona Challenger, as restantes vagas são preenchidas por jogador da zona Premium, tendo prioridade os jogadores com pior classificação no ranking.</p>
			<p>Os vencedores deste torneio, serão premiados com vaga garantida no torneio BSP PREMIUM após a atualização da tabela.</p>
            <p>Após esse tempo, todas as inscrições são válidas tendo prioridade os membros com classificação mais baixa até 24h antes do inicio do torneio.</p>
            <BR><BR>
            <H3><div style="color:blue;">BSP PARTNERS</div></H3>
            <BR>
            <p>Este modelo servirá para que todos os membros possam treinar com o parceiro com que jogam em torneios oficiais.</p>
			<p>Serão realizados pontualmente e divulgados antecipadamente pela organização.</p>
			<p>Não há prioridades nas inscrições, nem pontuações atribuídas para as tabelas de classificação geral e cabeças de serie.</p> 
			<p>Em todos os torneios haverá sempre uma vaga garantida para um fundador BSP.</p>
			<p>Os fundadores tem o direito a atribuir Wild Cards aos jogadores sempre que achem necessário.</p>
            <BR><BR>
            <H3><div style="color:#e8491d;">Regras torneio:</div></H3>
            <BR>
            <ul>
	            <li>Jogos são cronometrados, 15/20 min por jogo (mediante os campos utilizados);</li>
				<li>Quando soar o apito/aviso acaba o jogo;</li>
				<li>Se estiver 4-3 (0-15) ganha quem ta a ganhar 4-3;</li>
				<li>Se estiver 4-4 (15-0) ganha quem ta a ganhar 15-0;</li>
				<li>Se estiver 4-4 (15-15) fazem esse ponto até ao fim;</li>
				<li>No final de cada jogo, os vencedores devem comunicar o resultado e segue-se para a ronda seguinte.</li>
				<li>Cada jogador tem direito a uma água de 0,5 L.</li>
				<li>No caso de haver duplas com a mesma pontuação, o primeiro critério de desempate é a diferença de jogos, o 2º critério é o maior numero de jogos ganho, o 3º critério é confronto directo.</li>
			</ul>
            <BR><BR>
            <BR><BR>

        </div>
       


@endsection

@section('footer')

    @include ('layouts.footer')

@endsection