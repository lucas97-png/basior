<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style2.css">
    <title>Siat My Cat</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    
    <button onclick="smoothScroll('header')" id="up-button">
      <i class="bi bi-arrow-bar-up"></i>
    </button>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 text-dark text-decoration-none">
          <div class="col-6 mx-auto"><img src="logo.jpg" alt="" srcset=""></div>
        </a>
        
        <ul class="nav nav-pills mt-5 column py-3 flex-column">
          <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
          <li class="nav-item"><a onclick="smoothScroll('#info')"class="nav-link">O firmie</a></li>
          <li class="nav-item"><a onclick="smoothScroll('#price')" class="nav-link">Wycena</a></li>
          <li class="nav-item"><a onclick="smoothScroll('#contact')" class="nav-link">Formularz kontaktowy</a></li>
        </ul>
      </header>

      

     <section id="firm">
      <div class="container col-xxl-8 px-4 py-5 my-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-sm-12 col-md-10 col-lg-6">
            <img src="mainsiatka.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            
            <p class="lead dark">Montaż siatek balkonowych często jest koniecznością w miastach, gdzie populacja gołębi bywa naprawdę duża. Jeśli chce się uniknąć zanieczyszczania balkonu przez ptaki czy sytuacji, w której zdecydują się one na gniazdowanie na balkonie, najlepiej wybrać trwałe i wytrzymałe siatki polietylenowe przeciw ptakom.

             Siatki balkonowe mogą być również wykorzystane do ochrony kotów. Koty są z natury ciekawskie i jeśli chce się im zapewnić bezpieczeństwo i uchronić je przed upadkiem ze znacznej wysokości lub ucieczką, warto zdecydować się na montaż siatki na balkonie.</p>
            
          </div>
        </div>
      </div>
     </section>
      

      <main id="info">
        <div class="row featurette col-lg-9 col-md-9 col-sm-12 mx-auto px-3">
            <div class="col-md-7 px-5">
              <h2 class="featurette-heading">Jak zabezpieczamy?</h2>
              <p class="lead">Montaż opiera się na instalacji mocowań wokół powierzchni do zabezpieczenia w odległości 30-40 cm od siebie. Przez owe mocowania przechodzi mocno napięta linka stalowa, która przebiega bardzo blisko sufitu, elewacji, podłogi. Siatka jest przyczepiana do linki metalowymi spinkami.</p>
            </div>
            <div class="col-md-5">
                <img src="siatka1.png" alt="" srcset="">
      
            </div>
          </div>
    
          <div class="row featurette col-lg-9 col-md-9 col-sm-12 mx-auto my-5 px-3">
            <div class="col-md-7 order-md-2 px-5">
                    <h2 class="featurette-heading">Osiatkowanie ochronne dla kotów</h2>
                    <p class="lead">Siatka zabezpieczająca dla zwierząt domowych, nie tylko kotów, wykonana jest z grubszego sznurka, o rozmiarze oczek 4 na 4cm. Siatki tego typu, przeznaczone dla niemal wszystkich domowych czworonogów wytrzymują duży nacisk - do aż 80kg! Siatka dla zwierząt jest w kolorze piaskowym, który uniwersalnie komponuje się z elewacją, nie rzucając się w oczy.</p>
            </div>
            
            <div class="col-md-5 order-md-1">
             <img src="siatka2.png" alt="" srcset="">
      
            </div>
          </div>
    
          <div class="row featurette col-lg-9 col-md-9 col-sm-12 mx-auto px-3">
            <div class="col-md-7 px-5">
                <h2 class="featurette-heading">Siatka na okno dla kota</h2>
                <p class="lead pt-2">Kocia ciekawość sprawia, że zwierzęta mogą wyjść z domu nawet przez uchylone okno. Zdarza się, że kot podejmując taką próbę, zakleszczy się w uchylonym oknie. Może się to skończyć uszkodzeniem kręgosłupa lub uduszeniem. Najpopularniejsza formą obrony przed tym zdarzeniem jest siatka z polietylenu ze wzmocnionym splotem. Najlepszym rozwiązaniem jest montaż siatki w całym świetle okna</p>
              </div>
            <div class="col-md-5">
                <img src="siatka3.png" alt="" srcset="">
      
            </div>
          </div>
      </main>

      <section id="price">
        <div class="container col-lg-6 col-md-9 col-sm-12 my-5 px-5">
          <h1 class="text-center">Wycena montażu</h2>
          <p class="text-center h4 mt-5">Każdy balkon jest nieco inny, a siatka balkonowa zwykle przygotowywana jest na wymiar. Dlatego w przypadku montażu siatki na balkonie cena jest zróżnicowana i zależy m.in. od metrażu powierzchni do osiatkowania i wybranego rodzaju siatki. Zapraszam do kontaktu w celu ustalenia wyceny</p>
      </div>
      </section>

      <section id="contact">
        <div class="container col-md-3 mt-5 px-5">
          <form action="contact_form.php" method="POST">
              <div class="row">
                  <label for="name">Imię:</label>
                  <input type="text" class="form-control" name="name">
                  <label for="surname">Nazwisko</label>
                  <input type="text" class="form-control" name="surname">
              </div>
              <div class="row">
                  <label for="email">Adres email:</label>
                  <input type="email" class="form-control" name="email">
              </div>
              <div class="row">
                  <label for="message">Wiadomość:</label>
                  <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
                <div class="g-recaptcha d-flex justify-content-center my-3" data-sitekey="6LfscCAcAAAAAEl4JjiLSaTFetPnMIvIhN2T0F7y"></div>
              <div class="row">
                <input type="submit" value="Wyślij wiadomość" class="btn btn-secondary mt-4 p-3">
              </div>
              
          </form>
          </div>
      </section>

        <!-- FOOTER -->
        <footer class="container">
        <div class="row d-flex justify-content-center my-5">
            <div class="row d-flex col-lg-6 col-sm-12 text-center media p-3">
                <a href="tel:+605554231"><i class="bi bi-telephone"></i></a>
                <a href="tel:+605554231" class="text-white">605554231</a>
            </div>
          <div class="row d-flex col-lg-6 col-sm-12 text-center media p-3">
            <a href="mailto:rafalbasinski@siatmycat.pl"><i class="bi bi-envelope"></i></a>
            <a href="mailto:rafalbasinski@siatmycat.pl" class="text-white">rafalbasinski@siatmycat.pl</a>
          </div>
        </div>
        </footer>





        <script src="script.js"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>


    -->
  </body>
</html>