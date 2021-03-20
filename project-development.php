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

    <?php include "include/footer.php";?>