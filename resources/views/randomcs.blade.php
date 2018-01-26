@extends ('layouts/master')

@section('title')

    BSP - Generator Cabeças de Série

@endsection


@section('content')

        <script type="text/javascript">
            // Plain javascript example
            function setHiddenValue(value)
            {
                getElementById('#players').value = value;
            }

            
            // jQuery example
            function setHiddenValue(value)
            {
                $('#players').val(value);
            }
        </script>
        

       


    
        

        
    

        <div style="width: 95%; margin: auto; padding: 5px">
    
        


            {!! Form::open(['url'=>'/randomcs/result', 'name' => 'formcs', 'id' => 'idformcs']) !!}

           <!--  <div class="row">
                
                <div class="col-6 {{ $errors->has('numplayers') ? 'has-error' : '' }}" style="padding: 10px;>
                    {!! Form::label('Number of Players:') !!}
                    {!! Form::select('numplayers', ['8' => '8', '12' => '12', '16' => '16'], null, ['class'=>'form-control', 'onchange' => 'setHiddenValue(this.numplayers);']) !!}
                    <span class="text-danger">{{ $errors->first('numplayers') }}</span>
                </div>

                <div class="col-6 {{ $errors->has('club') ? 'has-error' : '' }}" style="padding: 10px;>
                    {!! Form::label('Courts Number:') !!}
                    {!! Form::select('courtsnumber', ['2' => '2', '3' => '3', '4' => '4'], null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('courtsnumber') }}</span>
                </div>

            </div> -->

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                {!! Form::label('Title:') !!}
                {!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>

            


            <div class="row">

                <div class="col-6 {{ $errors->has('club') ? 'has-error' : '' }}" style="padding: 10px;>
                   {!! Form::label('Club:') !!}
                   {!! Form::select('club', ['Quinta de Monserrate Club' => 'Quinta de Monserrate Club', 'Quinta de Monserrate Indoor' => 'Quinta de Monserrate Indoor', 'Quinta de Monserrate Parque' => 'Quinta de Monserrate Parque', 'Top Padel industrial' => 'Top Padel industrial', 'Top Padel Fojo' => 'Top Padel Fojo', 'Top Padel Fluvial' => 'Top Padel Fluvial', 'Total Padel' => 'Total Padel'], null, ['class'=>'form-control']) !!}
                   <span class="text-danger">{{ $errors->first('club') }}</span>
               </div>

               <div class="col-6 {{ $errors->has('start_at') ? 'has-error' : '' }}" style="padding: 10px;>
                   {!! Form::label('Start date:') !!}
                   {!! Form::date('start_at', old('start_at'), ['class'=>'form-control']) !!}
                   <span class="text-danger">{{ $errors->first('start_at') }}</span>
               </div>

            </div>


            <div class="row">

                <div class="col-6 {{ $errors->has('court1') ? 'has-error' : '' }}">
                    {!! Form::label('Court 1:') !!}
                    {!! Form::text('court1', old('court1'), ['class'=>'form-control', 'placeholder'=>'Enter Court 1']) !!}
                    <span class="text-danger">{{ $errors->first('court1') }}</span>
                </div>

                <div class="col-6 {{ $errors->has('court2') ? 'has-error' : '' }}">
                    {!! Form::label('Court 2:') !!}
                    {!! Form::text('court2', old('court2'), ['class'=>'form-control', 'placeholder'=>'Enter Court 2']) !!}
                    <span class="text-danger">{{ $errors->first('court2') }}</span>
                </div>

            </div>

            <div class="row">

                <div class="col-6 {{ $errors->has('court3') ? 'has-error' : '' }}">
                    {!! Form::label('Court 3:') !!}
                    {!! Form::text('court3', old('court3'), ['class'=>'form-control', 'placeholder'=>'Enter Court 3']) !!}
                    <span class="text-danger">{{ $errors->first('court3') }}</span>
                </div>

                <div class="col-6 {{ $errors->has('court4') ? 'has-error' : '' }}">
                    {!! Form::label('Court 4:') !!}
                    {!! Form::text('court4', old('court4'), ['class'=>'form-control', 'placeholder'=>'Enter Court 4']) !!}
                    <span class="text-danger">{{ $errors->first('court4') }}</span>
                </div>

            </div>

            <div class="row">

                <div class="col-6 {{ $errors->has('csplayers') ? 'has-error' : '' }}">
                    {!! Form::label('Cabeças de Série:') !!}
                    {!! Form::textarea('csplayers', old('csplayers'), ['class'=>'form-control', 'placeholder'=>'adicionar jogadores (1 jogador por linha)', 'rows' => '8']) !!}
                    <span class="text-danger">{{ $errors->first('csplayers') }}</span>
                </div>

                <div class="col-6 {{ $errors->has('players') ? 'has-error' : '' }}">
                    {!! Form::label('Jogadores:') !!}
                    {!! Form::textarea('players', old('players'), ['class'=>'form-control', 'placeholder'=>'adicionar jogadores (1 jogador por linha)', 'rows' => '8']) !!}
                    <span class="text-danger">{{ $errors->first('players') }}</span>
                </div>

            </div>

            <div style="padding: 10px;">
            {{ Form::button('Gerar Duplas', ['type' => 'submit', 'class' => 'btn btn-primary', 'name' => 'generate', 'id' => 'generate'] )  }}
            </div>

           <!--  <div style="padding: 10px;">
            {{ Form::button('Guardar Duplas', ['type' => 'submit', 'class' => 'btn btn-primary', 'name' => 'save', 'id' => 'save'] )  }}
            </div> -->

           
            
            {!! Form::close() !!}



        </div>


        <div style="page-break-before: always;"> </div>

        <div style="width: 95%; margin: auto; padding: 5px">

            

            @if($pares != '') 

                <div style="background-color: #FF6602; padding: 5px;">
                     
                    <h4> {{ $jogos[0]['title'] }} </h4>
                    <BR>
                    <h6>
                        Clube: {{ $jogos[0]['location'] }} &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp;
                        Data: {{ $jogos[0]['date'] }} &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp;
                        Nº de Campos: {{ count($pares)/2 }} &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; 
                        Nº de jogos por dupla: {{ count($pares)-1 }} &nbsp; &nbsp; &nbsp;| &nbsp; &nbsp; &nbsp; 
                        Nº total de Jogos: {{ (count($pares)/2)*(count($pares)-1) }}
                    </h6>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Dupla</th>
                        <th>Cabeça de Série</th>
                        <th>Par</th>
                      </tr>
                    </thead>
                   
                  

                @foreach ($pares as $k=>$v)

                   
                    
                    <tr>
                        <td style="width:10%">{{ $k+1 }}</td>
                        <td style="width:45%">{{ $v[0] }}</td>
                        <td style="width:45%">{{ $v[1] }}</td>
                    </tr>
                   
                        
                            
                   
                   
                
                @endforeach
                
                 </table>
                </div>
        </div>

        <div style="page-break-before: always;"> </div>

        <div style="width: 95%; margin: auto; padding: 5px;">
                

                <div style="background-color: #FF6602; margin: auto; padding: 5px; text-align: center;
vertical-align: middle;">

                <h4>Lista de jogos por ronda</h4> 

                </div>

                @php $colsize = $jogos[0]['colsize'] @endphp

                <div class="row">

                
                
                @foreach ($jogos as $k=>$v)

                  
                    <div class="col-{{$colsize}}" style="width: 15rem;">
                        <div class="card" style="margin: 5px;">
                            <div class="card-header" style="padding:0.5rem;">
                                Ronda {{ $v['round'] }} | Campo: {{ $v['court'] }}
                            </div>
                            <div class="card-body" style="padding:0.5rem;">
                                <p class="card-title">{{ $v['team1'] }}</p>
                                <p class="card-text">{{ $v['team2'] }}</p>
                            </div>
                        </div>
                    </div>


                @endforeach

                </div>








        <div style="page-break-before: always;"> </div>

        <div style="width: 95%; margin: auto; padding: 5px;">
                

                <div style="background-color: #FF6602; margin: auto; padding: 5px; text-align: center;
vertical-align: middle;">

                <h4>Lista de jogos por Dupla</h4> 

                </div>

                 @php $games = count($pares)-1 @endphp

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Dupla</th>
                        @for ($x = 1; $x <= $games; $x++) 
                        <th>Jogo{{ $x }}</th>
                        @endfor

                      </tr>
                    </thead>
                   
                  

                @foreach ($pares as $k=>$v)

                   
                    
                    <tr>
                        <td>{{ $v[0]}} e {{ $v[1]}}</td>
                        
                        
                            
                            @foreach ($jogos as $k2=>$v2)

                             

                                @if (
                                        ($v[0].' e '.$v[1] == $v2['team1'] OR $v[0].' e '.$v[1] == $v2['team2']) 

                                        

                                    )
                                   
                                    
                                    <th>Campo: {{ $v2['court'] }}</th>
                                     

                                @endif

                           

                            @endforeach

                           
                        
                        
                    </tr>
                   
                        
                            
                   
                   
                
                @endforeach
                
                 </table>
                </div>



        </div>





















            @endif

        </div>

@endsection

        
@section('footer')

    @include ('layouts.footer')

@endsection
       




    