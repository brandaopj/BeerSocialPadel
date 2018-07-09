<style>

.navbar-custom {
    padding-right: 100px;
    padding-left: 50px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 15px;
    line-height: 1.5;
    background: #35424a;
    color: #ffffff;
    text-decoration: none;
    border-bottom: #e8491d 3px solid;
}


/* change the brand and text color */
.navbar-custom .navbar-brand,
.navbar-custom .navbar-text {
    color:#ffffff;
    font-weight:bold;
}
/* change the link color */
.navbar-custom .navbar-nav .nav-link {
    color: #ffffff;
    text-transform: uppercase;
}
/* change the color of active or hovered links */
.navbar-custom .nav-item.active .nav-link{
    color:#e8491d;
    font-weight:bold;
    text-transform: uppercase;
}

.navbar-custom .nav-item:hover .nav-link {
    color:#e8491d;
    font-weight:bold;
    text-transform: uppercase;
}

.highlight {
  color:#e8491d;
  font-weight:bold;
}

@media(max-width: 768px){
   .navbar-custom,
   .navbar-brand {
    padding-right: 40px;
    padding-left: 10px;
    }


    .navbar-brand h1{
    font-size: 20px;
    }

}


</style>


        <nav class="navbar navbar-expand-sm navbar-custom bg-faded">

        <button class="navbar-dark navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-dark navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <!-- <a class="navbar-brand" href="/welcome">
            <img src="https://i.imgur.com/sseswjN.jpg" width="60" height="60" class="d-inline-block align-top" alt=""> <h1><span class="highlight">BSP</span>  Beer Social Padel</h1>
        </a> -->

        <a class="navbar-brand" href="/welcome">
            <h1><span class="highlight">BSP</span> Beer Social Padel</h1>
        </a>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="nav-content">   
            
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Gerador Jogos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/randomcs">Gerador CS</a>
                      <a class="dropdown-item" href="/randomfx">Gerador Duplas Fixas</a>
                      <a class="dropdown-item" href="/random">Gerador Duplas Aleatórias</a>
                    </div>
                </li>
            
                <li class="nav-item">
                  <a class="nav-link" href="/conceito">Conceito</a>
                </li>
            

            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Torneios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/torneios">Funcionamento</a>
                      <a class="dropdown-item" href="/inscricoestorneios">Inscrições</a>
                      <a class="dropdown-item" href="/regras">Regras</a>
                      <a class="dropdown-item" href="/rankingcs">Pontuações</a>
                      <a class="dropdown-item" href="/planeamento">Planeamento</a>
                      <a class="dropdown-item" href="https://drive.google.com/drive/folders/1_X7TS2UOQF-JJlLZG83VBaZvER-sg2fP?usp=sharing" target='_blank'>Classificações / Resultados</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Inscrição
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/fichainscricao">Inscrição</a>
                      <a class="dropdown-item" href="/fichainscricaomistos">Inscrição Mistos</a>
                    </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/multimedia">Fotos/Videos</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/whatsapp">WhatsApp</a>
                </li>
            

                <!-- <li class="nav-item">
                  <a class="nav-link" href="/fichainscricao">Inscrição</a>
                </li> -->

          </ul>
       

 
            
        </nav>

        </div>
