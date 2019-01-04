@extends ('layouts/master')

@section('title')

    BSP - Welcome

@endsection



@section('content')

        <div class="alert alert-info alert-dismissible fade show" role="alert" style="text-align: center">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Consulta a tua classificação no Ranking</strong>  <a href="https://drive.google.com/drive/folders/1_X7TS2UOQF-JJlLZG83VBaZvER-sg2fP" class="alert-link">aqui!</a>
        </div>

        <section id = "showcase">
          <!-- <div class="container"> -->
          
          
           <!-- <h1>Novidades 2018!</h1>
           <p>Passamos a disponibilizar torneios na categoria de Mistos.</p>
           <p>Faz já a tua <a href="/fichainscricaomistos">inscrição</a> nesta modalidade!</p> -->
         <!-- </div> -->
        </section>
        <div class="table-responsive" style="margin: 0; width: 100%; background-color: #142C36; color: white;  padding: 10px; text-align:center;">Legenda: Bruno Tomé, Tiago Benigno, Vasco Sampaio, Eduardo Pires, Pedro Serapicos e Adriano Oliveira (da esquerda para a direita)</div>

        


        <!-- <section id="newsletter">
          <div class="container">
            <h1>Subscribe To Our Newsletter</h1>
            <form>
              <input type="email" placeholder="Enter Email...">
              <button type="submit" class="button_1">Subscribe</button>
            </form>
          </div>
        </section> -->

      <!-- <section id="boxes"> -->

        <!-- <div class="container"> -->

        <!-- <div class="box">
          <img src="https://i.imgur.com/sseswjN.jpg">
          <h3><a href="/welcome">BSP</a></h3>
        </div> -->

        <!-- <div class="box">
          <img src="/images/BSP_QRCODE.png">
          <h3><a href="/welcome">QR Code BSP</a></h3>
        </div> -->
        
        <!-- <div class="box">
          <img src="/images/cartri.png">
          <h3><a href="https://www.facebook.com/cartripadel/">Cartri</a></h3>
        </div> -->
       

        <!-- <div class="box">
          <img src="/images/facebook.png">
          <h3><a href="https://www.facebook.com/BeerSocialPadel/">Facebook</a></h3>
          
        </div>

        <div class="box">
          <img src="/images/instagram.png">
          <h3><a href="https://www.instagram.com/beersocialpadel.bsp/?hl=pt">Instagram</a></h3>
          
        </div>

        <div class="box">
          <img src="/images/youtube.png">
          <h3><a href="https://www.youtube.com/channel/UCP-_X9u2XK0cGFrYaEWYSAg">Youtube</a></h3>
          
        </div> -->

      <!-- </div>
    </section> -->


@endsection



@section('footer')

    @include ('layouts.footer')

@endsection
