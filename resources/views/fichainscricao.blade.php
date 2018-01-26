@extends ('layouts/master')

@section('title')

    BSP - Ficha Inscrição

@endsection

@section('content')



      <div style="margin: 0; width: 100%;  padding: 10px; padding-left: 20px; padding-right: 20px; background-color: #142C36; color: white;">
        
          <h2>Ficha Inscrição</h2>
      
      </div>
        

      <div class="table-responsive" style="margin: 0; width: 100%;  padding: 10px; padding-left: 20px; padding-right: 20px; background-color: #142C36;">

          <iframe src="https://docs.google.com/forms/d/1sDYTgGjN4nuBw-x7SUSnThtUyOtB8ztQy9DiIsvF4eM/viewform?edit_requested=true#responses" width="100%" height="1300" frameborder="0" marginheight="0" marginwidth="0" style="background: #FFFFFF;"></iframe>

      </div>

            
@endsection

@section('footer')

    @include ('layouts.footer')

@endsection