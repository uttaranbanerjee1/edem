<?php include "include/header.php";?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 bg-white left-form-panel">
            <?php include "include/navigation-before-login.php";?>

                <div class="left-form-part">
                    <form id="form2" action="existing-property.php">

                        <div>
                            <h4 class="font-weight-medium mt-5">Borrower is a...</h4>

                            <div>
                                <ul class="select-property">
                                    <li>
                                        <input type="radio" id="natural" name="natural" />
                                        <label for="natural">Natural Person</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="legal" name="legal" />
                                        <label for="legal">Legal Entity</label>
                                    </li>




                                </ul>


                            </div>



                        </div>


                        <div>
                            <div class="form-group country-select">
                                <h4 class="font-weight-medium mt-5">The borrower is domiciled in...</h4>
                                <select id="inputState" class="form-control mt-3">
                                    <option selected>Germany</option>
                                    <option>England</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a class="btn btn-light-blue" href="index.php" role="button">Back</a>
                            <input class="btn btn-light-blue" id="btn" type="submit" value="Next" />
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