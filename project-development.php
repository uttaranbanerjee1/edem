<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/fontawesome.css" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.css" crossorigin="anonymous">

    <link rel="stylesheet" href="css/custom.css">

    <title>EDEM</title>
  </head>
  <body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-7 bg-white left-form-panel">
        <div class="navigation-menu text-right">
        <div class="dropdown d-inline mr-4">
  <button class="btn btn-lang-drop dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <span class="flag-icon flag-icon-gb-eng mr-2"></span> English
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de mr-2"></span> Germany</a>
   
  </div>
</div>

<a href="#" class="">Support</a>
        </div>

        <div class="left-form-part">
            <form class="">
            
            <div class="form-row">
    <div class="form-group col-md-12 mb-0">
    <h4 class="font-weight-medium ">Property Address</h4>
     </div>
    <div class="form-group col-md-9">
     <input type="text" class="form-control" id="inputStreet4" placeholder="Street">
    </div>
    <div class="form-group col-md-3">
     <input type="text" class="form-control" id="inputNumber4" placeholder="No.">
    </div>
    <div class="form-group col-md-6">
     <input type="text" class="form-control mt-1" id="inputStreet4" placeholder="Postal Code">
    </div>
    <div class="form-group country-select-2 col-md-6">
    <select id="inputState" class="form-control mt-1">
        <option selected>Germany</option>
        <option>England</option>
      </select>
    </div>
  </div>
            
  
  <div class="form-row mt-2">
    <div class="form-group col-md-12 mb-0">
    <h4 class="font-weight-medium ">Property Details</h4>
     </div>
    <div class="form-group col-md-6">
     <input type="text" class="form-control" id="inputStreet4" placeholder="Lettable Area">
    </div>
    <div class="form-group country-select-2 col-md-6">
    <select id="inputState" class="form-control ">
        <option selected>Utilization</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group country-select-2 col-md-6">
    <select id="inputState" class="form-control ">
        <option selected>Legal Permit Status</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-6">
     
    </div>
    <div class="form-group col-md-6">
     <input type="text" class="form-control mt-1" id="inputPurchasePrice" placeholder="Purchase Price or Estimated Market Value">
    </div>
    <div class="form-group col-md-6">
     <input type="text" class="form-control mt-1" id="inputFinancingTarget" placeholder="Financing Target">
    </div>
    
  </div>


  <div class="form-row mt-2">
    <div class="form-group col-md-6 mb-0">
    <h5 class="font-weight-medium">Business plan after completion</h5>


    <div class="custom-control custom-checkbox large-checkbox mb-3">
      <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
      <label class="custom-control-label" for="customCheck">Lease</label>
    </div>

    <div class="custom-control custom-checkbox large-checkbox mb-3">
      <input type="checkbox" class="custom-control-input" id="customCheck2" name="example2">
      <label class="custom-control-label" for="customCheck2">Sale</label>
    </div>

    </div>


    <div class="form-group col-md-6 mb-0">
    <h5 class="font-weight-medium">Business plan after completion</h5>

    
     </div>
    </div>

  <div class="form-row mt-4">
    <div class="form-group col-md-12 mb-0">
    <h5 class="font-weight-medium">Number of comparable projects that were successfully completed</h5>
    <a class="btn btn-outline-trans mr-2" href="#" role="button">0</a>
    <a class="btn btn-outline-trans mr-2" href="#" role="button">1 - 5</a>
    <a class="btn btn-outline-trans mr-2" href="#" role="button">6 - 20</a>
    <a class="btn btn-outline-trans" href="#" role="button">20+</a>
    
    </div>
 </div>

 <div class="mt-2">
            <a class="btn btn-light-blue" href="existing-property.php" role="button">Back</a>
            <a class="btn btn-light-blue" href="personal-details.php" role="button">Next</a>
            </div>

    </form>


        </div>

        <div class="cust-footer">
          <p class="m-0 text-muted"><span>© 2021 – EDM Advisors GmbH </span> | <span> Imprint – Privacy Statement</span></p>
        </div>
        </div>
        <div class="col-md-5 right-annim-panel">
        <h1 class="display-4 font-weight-medium">The Seamless
Connection Between
Projects And Capital</h1>
        </div>
    </div>
    </div>





    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js" crossorigin="anonymous"></script>
    <script src="vendor/twbs/bootstrap/assets/js/vendor/popper.min.js" crossorigin="anonymous"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>
    <script>
    $(function(){
    $('.lang_changer').selectpicker();
});
    </script>

  </body>
</html>