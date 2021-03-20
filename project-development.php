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


  <div class="form-row mt-2 business-plan">
    <div class="form-group col-md-6 mb-0">
    <h5 class="font-weight-medium">Business plan after completion</h5>

    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="Lease" >
    <label class="custom-control-label" for="customRadio">Lease</label>
  </div>



  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="Sale">
    <label class="custom-control-label" for="customRadio2">Sale</label>
  </div>



  <div id="group1">
<div id="yes" class="hidden">
  <p>
    Yes
  </p>
</div>
<div id="no" class="hidden">
  <p>
    No
  </p>
</div>
<div id="maybe" class="hidden">
  <p>
    Maybe
  </p>
</div>
</div>

    </div>


    <div class="purchase-contract">
    <div class="form-group col-md-12 mb-0">
    <h5 class="font-weight-medium ">A purchase contract has been signed</h5>
     </div>
     <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="Yes">
    <label class="custom-control-label" for="customRadio3">Yes</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio4" name="example" value="No">
    <label class="custom-control-label" for="customRadio4">No</label>
  </div>
    
    </div>
    </div>

  <div class="form-row mt-4">
    <div class="form-group col-md-12 mb-0">
    <h5 class="font-weight-medium">Number of comparable projects that were successfully completed</h5>

    <ul class="select-property">
                                    <li>
                                        <input type="radio" id="zero-value" name="amount" />
                                        <label for="zero-value">0</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="one_five" name="amount" />
                                        <label for="one_five">1-5</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="six_twinty" name="amount" />
                                        <label for="six_twinty">6-20</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="twenty_plus" name="amount" />
                                        <label for="twenty_plus">20+</label>
                                    </li>




                                </ul>

    
    
    </div>
 </div>

 <div class="mt-2">
            <a class="btn btn-light-blue" href="existing-property.php" role="button">Back</a>
            <a class="btn btn-light-blue" href="personal-details.php" role="button">Next</a>
            </div>

    </form>


        </div>

      
        </div>
        <div class="col-md-5 right-annim-panel">
        <h1 class="display-4 font-weight-medium">The Seamless
Connection Between
Projects And Capital</h1>
        </div>
    </div>
    </div>

    <div class="cust-footer">
                    <p class="m-0 text-muted"><span>© 2021 – EDM Advisors GmbH</span> | <span>Imprint – Privacy
                            Statement</span></p>
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

    <script>
      $("input:radio[name='example']").click(function() {
  $("#group1 .hidden").hide().removeClass("shown");
  $("#" + $(this).val()).show();
  setTimeout(function() {
    $(".hidden").addClass("shown");
  }, 0);
});


    </script>

  </body>
</html>