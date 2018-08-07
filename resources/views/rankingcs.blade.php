@extends ('layouts/master')


@section('title')

    BSP - Rankings

@endsection

        


@section('content')
       



    <div style="margin: 0 auto; width: 100%;  padding: 10px; padding-left: 30px; padding-right: 30px; background-color: #142C36; color: white;">
        <BR>
        <h2>RANKINGS</h2>
        <p>
          No sistema Beer Social Padel (BSP), há dois tipos de rankings:
		    </p>
		    <h5>RANKING GERAL | RANKING CABEÇAS DE SÉRIE (CS)</h5>
        <BR>
        <p> No RANKING GERAL, a classificação de cada jogador resulta do somatório dos pontos dos torneios em que o jogador participou na temporada em curso. Sendo apenas considerados os 20 melhores torneios de cada temporada.</p>
        <BR>
        <p>
		    No RANKING CS, há dois parâmetros para definir a classificação de cada jogador. Um parâmetro fixo, o RANKING CS da temporada anterior. E o valor do RANKING CS da temporada em curso, que é obtido através da média dos pontos que o jogador obteve sobre os torneios que participou na temporada em curso.
        </p>


        <div> 
          <img src="/images/formula.png">
        </div>
		
		    <BR>
		    <p>
    		Para o cálculo do RANKING CS da temporada em curso, sempre que cada jogador chegar a 6 torneios num mês, apenas serão considerados os 5 melhores torneios. E em cada época, apenas são considerados os 20 melhores torneios de cada jogador.
    		</p>
        </div>
        <div style="margin: 0 auto; width: 100%;  padding: 10px; padding-left: 30px; padding-right: 30px; background-color: #142C36;">

        @php
        
          $table1000 = "<div style='margin: 0 auto; padding-right: 20px; color:black;'>
                        <table class='table table-striped' style='text-align:center'>
                        <thead>
                          <tr>
                            <th class='bg-warning' colspan=3 style='text-align:center; font-size: 1.4em'>BSP 1000</th>
                          </tr>
                        
                        <tr>
                          <th width='80'></th>
                          <th width='120'>6 Duplas</th>
                          <th width='120'>8 Duplas</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td style = 'font-weight: bold'>1º</td>
                          <td>225</td>
                          <td>270</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>2º</td>
                          <td>180</td>
                          <td>200</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>3º</td>
                          <td>125</td>
                          <td>155</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>4º</td>
                          <td>85</td>
                          <td>125</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>5º</td>
                          <td>55</td>
                          <td>90</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>6º</td>
                          <td>30</td>
                          <td>75</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>7º</td>
                          <td></td>
                          <td>55</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>8º</td>
                          <td></td>
                          <td>30</td>
                        </tr>



                        </tbody>
                        </table>
                        </div>";



          $table1500 = "<div style='margin: 0 auto; padding-left: 10px; padding-right: 10px; color:black;'>
                        <table class='table table-striped' style='text-align:center'>
                        <thead>
                          <tr>
                            <th colspan=3 style='text-align:center; font-size: 1.4em; background-color: #ff704d'>BSP 1500</th>
                          </tr>
                        
                        <tr>
                          <th width='80'></th>
                          <th width='120'>6 Duplas</th>
                          <th width='120'>8 Duplas</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td style = 'font-weight: bold'>1º</td>
                          <td>325</td>
                          <td>405</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>2º</td>
                          <td>260</td>
                          <td>300</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>3º</td>
                          <td>175</td>
                          <td>230</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>4º</td>
                          <td>115</td>
                          <td>180</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>5º</td>
                          <td>85</td>
                          <td>145</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>6º</td>
                          <td>40</td>
                          <td>115</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>7º</td>
                          <td></td>
                          <td>85</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>8º</td>
                          <td></td>
                          <td>50</td>
                        </tr>



                        </tbody>
                        </table>
                        </div>";


          $table2000 = "<div style='margin: 0 auto; padding-left: 20px; color:black;'>
                        <table class='table table-striped' style='text-align:center'>
                        <thead>
                          <tr>
                            <th colspan=3 style='text-align:center; font-size: 1.4em; background-color: #ff3300'>BSP 2000</th>
                          </tr>
                        
                        <tr>
                          <th width='80'></th>
                          <th width='120'>6 Duplas</th>
                          <th width='120'>8 Duplas</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td style = 'font-weight: bold'>1º</td>
                          <td>450</td>
                          <td>540</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>2º</td>
                          <td>360</td>
                          <td>400</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>3º</td>
                          <td>250</td>
                          <td>310</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>4º</td>
                          <td>170</td>
                          <td>250</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>5º</td>
                          <td>110</td>
                          <td>180</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>6º</td>
                          <td>60</td>
                          <td>150</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>7º</td>
                          <td></td>
                          <td>110</td>
                        </tr>
                        <tr>
                          <td style = 'font-weight: bold'>8º</td>
                          <td></td>
                          <td>60</td>
                        </tr>
                        </tbody>
                        </table>
                        </div>";

        @endphp 

        <div style="margin: 0 auto; width: 100%;  padding: 10px; padding-left: 30px; padding-right: 30px; background-color: #142C36; color: white;">
          <p>
          
          Os torneios em geral serão <b>BSP 1000</b>.
          <BR><BR>
          Porém decorrente da qualidade e competitividade dos inscritos para cada torneio, poderá existir uma
          majoração dos pontos disponíveis.
          <BR>
          Isso será feito, em função da média do ranking de CS dos inscritos em função da média geral CS.
          <BR><BR>
          Assim para um torneio ser considerado <b>BSP 2000</b> a média dos inscritos tem que ser igual ou superior à media dos primeiros 35% do ranking CS.
          <BR>
          Para ser considerado <b>BSP 1500</b> a média dos inscritos tem que ser igual ou superior à media dos primeiros 55% do ranking CS.
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
              <th colspan=3 style='text-align:center; font-size: 2em; background-color: #FF6600; '>Beer Social Padel Season 2</th>
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
