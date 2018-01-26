@extends ('layouts/master')

@section('title')

    BSP - Planeamento

@endsection

@section('content')
       



        <div style="margin: 0; width: 100%;  padding: 10px; padding-left: 30px; padding-right: 30px; background-color: #142C36; color: white;">
        <h2>Planeamento</h2>
        <p>
          <ul>
          Notas:<BR>
            <li>As inscrições abrem sempre às 2ªs feiras e às 6ªs feiras, entre as 12:00 e as 14:30;</li>
            <li>Os vencedores do torneio em dia Challenger, têm vaga garantida no primeiro dia Premium seguinte, após a actualização do rank;</li>
            <li>O BSP, reserva-se ao direito de atribuir 1 wildcard a jogador que não esteja elegivel para cabeça de serie;</li>
            <li>Em todos os torneios, seja dia Challenger ou dia Premium, haverá duas vagas para fundadores BSP;</li>
            <li>O ranking só terá uma actualização semanal.</li>
            <li>Nos dias Partners, as duplas onde ambos os membros são BSP's tem prioridade. As inscrições apenas são válidas quando são indicados ambos os membros da dupla.</li>
            <li>Em dias Premium, só se tiverem 14 inscritos ou mais da 1ª metade da tabela é que será um torneio com 4 campos. Se estiverem menos de 12 inscritos da 1ª metade da tabela, será um torneio com 3 campos e um BSP training no outro campo.</li>
            <li>Os torneios são realizados com 3, 4 ou 6 campos. No caso dos 6 campos, são realizados dois non-stop em simultaneo, onde os membros são divididos pelo rank.</li>
          </ul>
        </p>
        </div>
        

        <div class="table-responsive" style="margin: 0; width: 100%;  padding: 10px; padding-left: 30px; padding-right: 30px; background-color: #142C36;">

          <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=slijjac47e5ojsflasspikb9e4%40group.calendar.google.com&amp;color=%23125A12&amp;src=2451taabke0e117k8vd4ico8a8%40group.calendar.google.com&amp;color=%231B887A&amp;src=6ft5emqg6rueoqq9g46nbef8uk%40group.calendar.google.com&amp;color=%23711616&amp;src=375i9hu2smbo88ikkh2g67c3ts%40group.calendar.google.com&amp;color=%2342104A&amp;src=4o9v05vui7nbkasctn2f193nko%40group.calendar.google.com&amp;color=%23875509&amp;ctz=Europe%2FLisbon" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

      </div>

            

@endsection

@section('footer')

    @include ('layouts.footer')

@endsection
