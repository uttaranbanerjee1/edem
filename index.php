<?php include "include/header.php";?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 bg-white left-form-panel">
                <?php include "include/navigation-before-login.php";?>


                <div class="left-form-part">
                    <form id="form1" action="borrower-type.php">
                        <h4 class="font-weight-medium mt-5">What do you need?</h4>
                        <div>
                            <ul class="select-property">
                                <li>
                                    <input type="radio" id="senior_financing" name="amount" />
                                    <label for="senior_financing">Senior Financing</label>
                                </li>
                                <li>
                                    <input type="radio" id="mezzanine_financing" name="amount" />
                                    <label for="mezzanine_financing">Mezzanine Financing</label>
                                </li>




                            </ul>


                        </div>

                        <h4 class="font-weight-medium mt-3">For</h4>
                        <div>
                            <ul class="select-property">
                                <li>
                                    <input type="radio" id="existing" name="amount" />
                                    <label for="existing">An Existing
                                        Property</label>
                                </li>
                                <li>
                                    <input type="radio" id="development" name="amount" />
                                    <label for="development">A Project Development</label>
                                </li>




                            </ul>


                        </div>

                        <div class="mt-4">

                            <input class="btn btn-light-blue" id="btn" type="submit" value="Next" />

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