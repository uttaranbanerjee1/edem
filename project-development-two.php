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
                                <h4 class="font-weight-medium ">Project Address</h4>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="inputStreet4" placeholder="Street">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="inputNumber4" placeholder="No.">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control mt-1" id="inputStreet4"
                                    placeholder="Postal Code">
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
                                <h4 class="font-weight-medium ">Project Details</h4>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputStreet4" placeholder="Lettable Area">
                            </div>
                            <div class="form-group country-select-2 col-md-6">
                                <select id="utilization" class="form-control ">
                                    <option selected>Utilization</option>
                                    <option>Residential</option>
                                    <option>Office</option>
                                    <option>Retail</option>
                                    <option>Logistics</option>
                                    <option>Industrial</option>
                                    <option>Hotel</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group country-select-2 col-md-6">
                                <select id="legal-permit" class="form-control ">
                                    <option selected>Legal Permit Status</option>
                                    <option>No Development Plan</option>
                                    <option>Development Plan or §34 BauGB</option>
                                    <option>Outline Building Permit</option>
                                    <option>Building Permit</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">

                            </div>
                            <div class="form-group mt-3 col-md-6">
                            <div class="purchase-contract">
                                <div class="mb-0">
                                    <h5 class="font-weight-medium ">A purchase contract has been signed</h5>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-3">
                                    <input type="radio" class="custom-control-input" id="customRadio3" name="example2" value="Yes">
                                    <label class="custom-control-label" for="customRadio3">Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio4" name="example2" value="No">
                                    <label class="custom-control-label" for="customRadio4">No</label>
                                </div>

                            </div>
                            </div>
                            

                        </div>


                        <div class="form-row mt-4">
                            <div class="form-group col-md-12 mb-0">
                                <h4 class="font-weight-medium ">Capital Structure</h4>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="inputInvestment" placeholder="Total Investment">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputAvailableEquity" placeholder="Available Equity">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputAvailableSeniorLoan" placeholder="Available Senior Loan">
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="inputRequiredMezzanine" placeholder="Required Mezzanine" disabled>
                            </div>
                           
                          
                            <div class="form-group col-md-6">

                            </div>
                            

                        </div>


                        <div class="form-row mt-2 business-plan">
                            <div class="form-group col-md-6 mb-0">
                                <h5 class="font-weight-medium">Business plan after completion</h5>

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio" name="example"
                                        value="Lease" />
                                    <label class="custom-control-label " for="customRadio">Lease</label>
                                    <input style="display:none;" class="form-control lease-bttn " type="text"
                                        name="lease" id="lease" / placeholder="Annual Rent">
                                </div>



                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio2" name="example"
                                        value="Sale" />
                                    <label class="custom-control-label" for="customRadio2">Sale</label>
                                    <input style="display:none;" class="form-control lease-bttn" type="text" name="sale"
                                        id="sale" / placeholder="Estimated Sales Value">
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


                           
                        </div>


                        <div class="form-row mt-4">
                        <div class="form-group col-md-12 mb-0">
                                <h5 class="font-weight-medium">Available securities</h5>

                                <ul class="select-property">
                                    <li>
                                        <input type="radio" id="land_charge" name="amount" />
                                        <label for="land_charge">Land Charge</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="guarantee" name="amount" />
                                        <label for="guarantee">Guarantee</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="share_pledge" name="amount" />
                                        <label for="share_pledge">Share Pledge</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="others" name="amount" />
                                        <label for="others">Others</label>
                                    </li>
                             </ul>



                            </div>
                            </div>



                        <div class="form-row mt-3">
                            <div class="form-group col-md-12 mb-0">
                                <h5 class="font-weight-medium">Number of comparable projects that were successfully
                                    completed</h5>

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
                <?php include "include/footer-text.php";?>
            </div>
        </div>
    </div>

    <?php include "include/footer.php";?>

    <script>
    $("input[type='radio']").change(function() {
        console.log($(this).val())
        if ($(this).val() == "Lease") {
            $("#lease").show();
            $("#sale").hide();
        }
        if ($(this).val() == "Sale") {
            $("#sale").show();
            $("#lease").hide();
        }


    });
    </script>