<?php include "include/header.php";?>
  <body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-7 bg-white left-form-panel">
        <?php include "include/navigation-before-login.php";?>

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
            
  
  <div class="form-row mt-3">
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
    <div class="form-group col-md-6">
     <input type="text" class="form-control mt-1" id="inputCurrentRent" placeholder="Annual Net Rent (current)">
    </div>
    <div class="form-group col-md-6">
     <input type="text" class="form-control mt-1" id="inputTargetRent" placeholder="Annual Net Rent (target)">
    </div>
    <div class="form-group col-md-6">
     <input type="text" class="form-control mt-1" id="inputPurchasePrice" placeholder="Purchase Price or Estimated Market Value">
    </div>
    <div class="form-group col-md-6">
     <input type="text" class="form-control mt-1" id="inputFinancingTarget" placeholder="Financing Target">
    </div>
    
  </div>


  <div class="form-row mt-3 purchase-contract">
    <div class="form-group col-md-12 mb-0">
    <h5 class="font-weight-medium ">A purchase contract has been signed</h5>
     </div>
     <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
    <label class="custom-control-label" for="customRadio">Yes</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
    <label class="custom-control-label" for="customRadio2">No</label>
  </div>
    
    </div>

    <div class="mt-4">
            <a class="btn btn-light-blue" href="borrower-type.php" role="button">Back</a>
            <a class="btn btn-light-blue" href="project-development.php" role="button">Next</a>
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

    <?php include "include/footer.php";?>