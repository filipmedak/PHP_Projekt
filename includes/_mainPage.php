<?php

//mainPage.php

echo '
<!-- Sticky Language Menu - Desktop only -->
<div class="sticky">
    <a class="dropdown-item font-weight-bold" href="#"><img src="img/cro_lang.png" id="croIcon" alt="Smiley face" height="30" width="30"></a>
    <a class="dropdown-item font-weight-bold" href="#"><img src="img/ger_lang.png" id="gerIcon" alt="Smiley face" height="30" width="30"></a>
    <a class="dropdown-item font-weight-bold" href="#"><img src="img/eng_lang.png" id="engIcon" alt="Smiley face" height="30" width="30"></a>
</div>
<!-- Sticky Language Menu - Desktop only  !END!-->

<!-- Search engine -->
<div id="searchEngine" class="text-center p-4">
  <div id="searchEngineBar" class="p-4">
    <div id="searchEngineBarText" class="p-4" data-aos="zoom-in" data-aos-duration="2000">
      <h2 class="pt-3">Search for real estates!</h2>
      <!-- Location autoseach-->    
      <div class="input-group mt-3">
          <input type="text" class="form-control" placeholder="Insert location:" aria-label="" aria-describedby="basic-addon1">
      </div>
      <!--Type of real estate-->
      <div class="input-group mt-3">
        <select class="custom-select" id="inputGroupSelect04">
          <option selected>Type of real estate:</option>
          <option value="1">House</option>
          <option value="2">Apartment</option>
          <option value="3">Cottage</option>
        </select>
      </div>
         
      <!--Search button-->
      <a href="#"><button type="button" class="blueButton btn btn-dark mt-3 pl-5 pr-5">Search!</button></a>

      <!--Expand button-->
      <div id="accordion" class="mt-3">
        <div class="card">
          <div class="card-header" id="searchEngineButtonExtend">
            <h5 class="mb-0">
              <button class="searchEngineButtonExtend btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                More detailed search.
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <!--Additional setting for search-->
              <div class="form-group">
                <div class="input-group mt-3">
                  <input type="text" class="form-control" placeholder="min €" aria-label="" aria-describedby="basic-addon1">
                  <input type="text" class="form-control" placeholder="max €" aria-label="" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mt-3">
                  <input type="text" class="form-control" placeholder="min room" aria-label="" aria-describedby="basic-addon1">
                  <input type="text" class="form-control" placeholder="max room" aria-label="" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mt-3 mb-3">
                  <input type="text" class="form-control" placeholder="min m²" aria-label="" aria-describedby="basic-addon1">
                  <input type="text" class="form-control" placeholder="max m²" aria-label="" aria-describedby="basic-addon1">
                </div>
                <div id="searchEngineBarTextDetails">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">New building</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Old building</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">Lift</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                    <label class="form-check-label" for="inlineCheckbox4">Balcony</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                    <label class="form-check-label" for="inlineCheckbox5">Garage</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                    <label class="form-check-label" for="inlineCheckbox6">Parking</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                    <label class="form-check-label" for="inlineCheckbox7">View</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                    <label class="form-check-label" for="inlineCheckbox8">Discount</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Search engine !END! -->

<!-- Promo -->
<div id="promo" class="mt-5 mb-5 pt-5 pb-5">
  <div class="card-deck">
    <div class="card shadow-lg mb-5" data-aos="fade-up" data-aos-duration="1500">
      <img src="img/promoImage01.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title text-center pt-3 pb-1">House in Zagreb</h5>
        <p class="card-text">Price: <b>60,000€</b></p>
        <p class="card-text">Type: <b>House</b></p>
        <p class="card-text">Location: <b>Zagreb</b></p>
        <div class="cardIcon">
          <p class="card-text"><img src="img/sizeIcon.png" alt=".." width="25px">Size: <b>53,38m²</b></p>
          <p class="card-text"><img src="img/roomIcon.png" alt=".." width="25px">Rooms: <b>5</b></p>
          <p class="card-text text-center text-muted">ID: <b>7328193</b></p>
          <p class="card-text text-start text-muted""><b>More</b>></p>
        </div>
      </div>
    </div>
    <div class="card shadow-lg mb-5" data-aos="fade-up" data-aos-duration="1500">
      <img src="img/promoImage02.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title text-center pt-3 pb-1">Flat in Osijek</h5>
        <p class="card-text">Price: <b>80,000€</b></p>
        <p class="card-text">Type: <b>Flat</b></p>
        <p class="card-text">Location: <b>Osijek</b></p>
        <div class="cardIcon">
          <p class="card-text"><img src="img/sizeIcon.png" alt=".." width="25px">Size: <b>40,12m²</b></p>
          <p class="card-text"><img src="img/roomIcon.png" alt=".." width="25px">Rooms: <b>3</b></p>
          <p class="card-text text-center text-muted">ID: <b>8762983</b>></p>
          <p class="card-text text-start text-muted""><b>More</b>></p>
        </div>
      </div>
    </div>
    <div class="card shadow-lg mb-5" data-aos="fade-up" data-aos-duration="1500">
      <img src="img/promoImage03.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title text-center pt-3 pb-1">Cottage in Pula</h5>
        <p class="card-text">Price: <b>50,000€</b></p>
        <p class="card-text">Type: <b>Cottage</b></p>
        <p class="card-text">Location: <b>Pula</b></p>
        <div class="cardIcon">
          <p class="card-text"><img src="img/sizeIcon.png" alt=".." width="25px">Size: <b>70,24m²</b></p>
          <p class="card-text"><img src="img/roomIcon.png" alt=".." width="25px">Rooms: <b>4</b></p>
          <p class="card-text text-center text-muted">ID: <b>2955432</b>></p>
          <p class="card-text text-start text-muted""><b>More</b>></p>
        </div>
      </div>
    </div>
    <div class="card shadow-lg mb-5" data-aos="fade-up" data-aos-duration="1500">
      <img src="img/promoImage04.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title text-center pt-3 pb-1">House in Rijeka</h5>
        <p class="card-text">Price: <b>120,000€</b></p>
        <p class="card-text">Type: <b>House</b></p>
        <p class="card-text">Location: <b>Rijeka</b></p>
        <div class="cardIcon">
          <p class="card-text"><img src="img/sizeIcon.png" alt=".." width="25px">Size: <b>87,21m²</b></p>
          <p class="card-text"><img src="img/roomIcon.png" alt=".." width="25px">Rooms: <b>6</b></p>
          <p class="card-text text-center text-muted">ID: <b>9647267</b>></p>
          <p class="card-text text-start text-muted""><b>More></b></p>
        </div>
      </div>
    </div>
    <div id="promoBtn">
      <a href="#"><button type="button" class="btn btn-dark mt-3 pl-5 pr-5">Find more!</button></a>
    </div>
  </div>
</div>

<!-- Promo !END! -->

<!-- Services -->
<div id="services">
  <div id="servicesBar">
    <div id="servicesContent" class="pt-5 text-center">
      <div id="servicesSection1" class="m-4 pt-4 pb-4" data-aos="zoom-in" data-aos-duration="1000">
        <img src="img/evaluationIcon.svg" alt="..." width="100px">
        <h3 class="text-center">Evaluation</h3>
        <p class="ml-3 mr-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a href="#"><button type="button" class="blueButton btn btn-dark mt-3 pl-5 pr-5">Find out more!</button></a>
      </div>
      <div id="servicesSection2" class="m-4 pt-4 pb-4" data-aos="zoom-in" data-aos-duration="1000">
        <img src="img/brokingIcon.svg" alt="..." width="123px">
        <h3 class="text-center">Broking</h3>
        <p class="ml-3 mr-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a href="#"><button type="button" class="blueButton btn btn-dark mt-3 pl-5 pr-5">Find out more!</button></a>
      </div>
      <div id="servicesSection3" class="m-4 pt-4 pb-4" data-aos="zoom-in" data-aos-duration="1000">
        <img src="img/salesIcon.svg" alt="..." width="125px">
        <h3 class="text-center">Sales</h3>
        <p  class="ml-3 mr-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a href="#"><button type="button" class="blueButton btn btn-dark mt-3 pl-5 pr-5">Find out more!</button></a>
      </div>
    </div>
  </div>
</div>
<!-- END -->';

?>
