@extends ('layouts/master')


@section('title')

    BSP - Rankings

@endsection

        


@section('content')
       



    <div style="margin: 0 auto; width: 100%;  padding: 10px; padding-left: 30px; padding-right: 30px; background-color: #142C36; color: white;">
        <BR>
        <h2>RANKINGS</h2>
        <p>
          No sistema Beer Social Padel (BSP), há 3 tipos de rankings que são actualizados uma vez por semana, e são validos durante todos os torneios da semana seguinte.
		    </p>
		    <h5>RANKING GERAL | RANKING CABEÇAS DE SÉRIE (CS) | RANKING PARTNERS</h5>
        <BR>
        <p>No RANKING GERAL, a classificação de cada jogador resulta do somatório dos pontos dos torneios em que o jogador participou na temporada em curso. São apenas considerados os 25 melhores torneios de cada temporada.</p>
        <BR>
        <p>No RANKING CS, há dois parâmetros para definir a classificação de cada jogador. Um parâmetro fixo, o RANKING CS da temporada anterior e e o valor do RANKING CS da temporada em curso.</p> 
        <p>Estes valores são obtidos através de um algoritmo BSP, que visa obter uma classificação próxima do valor do jogador tendo em conta a sua prestação nos torneios BSP durante as duas ultimas temporadas.</p>
        


        <div> 
          <img src="/images/formula.png">
        </div>
		
		    <BR>
		    <p>Para o RANKING CS, apenas são consideradas as 7 melhores pontuações de cada jogador no mês, e os 25 melhores da temporada</p>
      </div>

      <div style="margin: 0 auto; width: 100%;  padding: 10px; padding-left: 10px; padding-right: 10px; background-color: #142C36;">

        @php
        
          $table1000 = "<div style='margin: 0 auto; color:black;'>
                        <table class='table table-striped' style='text-align:center'>
                        <thead>
                          <tr>
                            <th class='bg-warning' colspan=2 style='text-align:center; font-size: 1.4em'>BSP 1000</th>
                          </tr>
                        
                        
                        </thead>
                        <tbody>
                        <tr>
                          <td style = 'font-weight: bold'>1º</td>
                          <td>225</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>2º</td>
                          <td>180</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>3º</td>
                          <td>125</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>4º</td>
                          <td>85</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>5º</td>
                          <td>55</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>6º</td>
                          <td>30</td>
                        </tr>



                        </tbody>
                        </table>
                        </div>";



          $table1500 = "<div style='margin: 0 auto; padding-left: 10px; padding-right: 10px; color:black;'>
                        <table class='table table-striped' style='text-align:center'>
                        <thead>
                          <tr>
                            <th colspan=2 style='text-align:center; font-size: 1.4em; background-color: #ff704d'>BSP 1500</th>
                          </tr>
                        
                        
                        </thead>
                        <tbody>
                        <tr>
                          <td style = 'font-weight: bold'>1º</td>
                          <td>275</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>2º</td>
                          <td>220</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>3º</td>
                          <td>150</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>4º</td>
                          <td>100</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>5º</td>
                          <td>70</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>6º</td>
                          <td>35</td>
                        </tr>
                        </tbody>
                        </table>
                        </div>";


          $table2000 = "<div style='margin: 0 auto; color:black;'>
                        <table class='table table-striped' style='text-align:center'>
                        <thead>
                          <tr>
                            <th colspan=2 style='text-align:center; font-size: 1.4em; background-color: #ff3300'>BSP 2000</th>
                          </tr>
                        
                        
                        </thead>
                        <tbody>
                        <tr>
                          <td style = 'font-weight: bold'>1º</td>
                          <td>325</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>2º</td>
                          <td>260</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>3º</td>
                          <td>175</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>4º</td>
                          <td>115</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>5º</td>
                          <td>85</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>6º</td>
                          <td>40</td>
                        </tr>
                        </tbody>
                        </table>
                        </div>";

        @endphp 

        <div style="margin: 0 auto; width: 100%;background-color: #142C36; color: white;">
          <p>
          Os torneios em geral serão <b>BSP 1000</b>.
          <BR><BR>
          Porém decorrente da qualidade e competitividade dos inscritos para cada torneio, poderá existir uma
          majoração dos pontos disponíveis.
          <BR>
          Isto será feito, em função da média do ranking de CS dos inscritos em função da média geral CS.
          <BR><BR>
          Assim para um torneio ser considerado <b>BSP 2000</b> a média dos inscritos tem que ser igual ou superior à media dos primeiros 33,3% do ranking CS.
          <BR>
          Para ser considerado <b>BSP 1500</b> a média dos inscritos tem que ser igual ou superior à media dos primeiros 66,6% do ranking CS.
          <BR><BR>
          Com esta alteração pretendemos valorizar os torneios com um grau de dificuldade superior.
          <BR><BR>
          Para os torneios PARTNERS, de momento não há qualquer tipo de pontuação.
        </p>


      </div>

        <div class="table-responsive">
        <table class='table table-striped table-dark' style='text-align:center'>
          <thead>
            <tr>
              <th colspan=3 style='text-align:center; font-size: 2em; background-color: #FF6600; '>
                Beer Social Padel Season 4
              </th>
            </tr>
           </thead>
           <tbody>
            <tr>
              
              <td>@php print $table1000; @endphp</td>
              <td>@php print $table1500; @endphp</td>
              <td>@php print $table2000; @endphp</td>

            </tr>
          </tbody>
          </table>
          </div>
          </div>

        

            


        
        
        
       
    
 

        
                
@endsection


@section('footer')

    @include ('layouts.footer')

@endsection
