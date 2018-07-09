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
            <p>Todas as semanas, há três dias em que o Beer Social Padel (BSP) organiza torneios das 21:00 às 23:00 no indoor da Quinta de Monserrate em Matosinhos:</p>
            <BR>
			<H5>SEGUNDA-FEIRA | TERÇA-FEIRA | QUINTA-FEIRA</H5>
            <BR>
			<p>As inscrições são livres, e qualquer jogador que esteja no grupo WhatsApp pode fazer a sua inscrição.</p>
			<p>Os torneios são todos realizados em formato Non-Stop, e temos três tipos de torneios BSP:</p>
            <BR>
			<H5>PREMIUM | CHALLENGER | PARTNERS</H5>
            <BR>
			<p>Nos torneios PREMIUM / CHALLENGER, as duplas são sorteadas. A definição do sorteio tem por base a classificação de cada jogador no Ranking BSP CS, para definir quais são os cabeças de serie, e a pontuação de cada jogador também serve de critério para distribuir os jogadores pelos 6 campos, pois são realizados simultaneamente dois nonstops de 6 duplas cada.</p>
			<p>Nos torneios PARTNERS, cada jogador pode escolher o seu parceiro. Neste formato, as duplas são distribuídas pelos 6 campos através da pontuação da dupla, havendo 2  grupos de 6 duplas, jogam entre si em formato non-stop, havendo ainda finalíssima no final, com o 1º do grupo A a defrontar o 1º do grupo B, 2ª vs 2ª, etc.</p>
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
            

        </div>
       


@endsection

@section('footer')

    @include ('layouts.footer')

@endsection