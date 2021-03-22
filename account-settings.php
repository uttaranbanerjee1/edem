<?php include "include/header.php";?>

<body>
<?php include "include/navigation-after-login.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-white left-form-panel">
            
            <div class="card mt-5">
  <div class="card-body shadow-sm left-form-part p-4">
  <form class="mt-1">

<div class="form-row">
    <div class="form-group col-md-12 mb-0">
        <h4 class="font-weight-medium ">Personal Details</h4>
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
    </div>
    <div class="form-group col-md-6">
        <input type="email" class="form-control mt-1" id="inputEmail" placeholder="email@example.com">
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control mt-1" id="inputContactno" placeholder="Contact no.">
    </div>
    <div class="form-group col-md-12">
        <input type="text" class="form-control mt-1" id="inputWebsite" placeholder="Website (optional)">
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
        <option selected="">Germany</option>
        <option>England</option>
      </select>
    </div>


</div>

<a class="btn btn-primary-cust" href="results.php" role="button">Update Information</a>
</form>
  </div>
</div>

           
               
            </div>
           
        </div>
    </div>

<?php include "include/footer.php";?>