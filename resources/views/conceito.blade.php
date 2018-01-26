@extends ('layouts/master')

@section('title')

    BSP - Conceito

@endsection

@section('content')
        
        
    <div class="table-responsive" style="margin: 0; width: 100%; background-color: #142C36; color: white;  padding: 10px; padding-left: 30px; padding-right: 30px; min-height: 320px">
        <BR>
        <H2 style="color:#e8491d;">Conceito</H2>
        <BR>
        O BSP tem o intuito de promover o convívio, o padel e também a cerveja, que está sempre presente em todos os nossos torneios. 
        <BR><BR>
        O objectivo principal do BSP é o convívio entre todos os membros do grupo. Assim, nos nossos modelos de torneios BSP PREMIUM e BSP CHALLENGER, todas as duplas são sorteadas. 
        <BR><BR>
        O BSP é diferenciador, pois possibilita a diversificação do estilo de jogo de cada jogador mediante o parceiro que lhe saiu, do mesmo modo que faz com que duplas inicialmente improváveis criem uma empatia, e se tornem uma dupla forte fora do universo BSP nos torneios do circuito nacional de padel.
        <BR><BR>
        <BR>

    </div>


    <section id="boxes">

        <div class="container">

    <div class="box">
          <img src="https://i.imgur.com/sseswjN.jpg">
          <h3><a href="/welcome">BSP</a></h3>
        </div>


        <div class="box">
          <img src="/images/equal.png">
          
        </div>

        <div class="box">
          <img src="/images/smash.png">
          
        </div>

        <div class="box">
          <img src="/images/plus.png">
          
        </div>


        <div class="box">
          <img src="/images/beer.png">
          
        </div>

    </div>

    </section>
       
    
 
@endsection

@section('footer')

    @include ('layouts.footer')

@endsection
