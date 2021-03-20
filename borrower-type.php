<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/fontawesome.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.css" crossorigin="anonymous">

    <link rel="stylesheet" href="css/custom.css">

    <title>EDEM</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 bg-white left-form-panel">
                <div class="navigation-menu p-5 text-right">
                    <div class="dropdown d-inline mr-4">
                        <button class="btn btn-lang-drop dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-gb-eng mr-2"></span> English
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de mr-2"></span>
                                Germany</a>

                        </div>
                    </div>

                    <a href="#" class="">Support</a>
                </div>

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


    <div class="cust-footer">
                    <p class="m-0 text-muted"><span>© 2021 – EDM Advisors GmbH</span> | <span>Imprint – Privacy
                            Statement</span></p>
                </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"
        crossorigin="anonymous"></script>
    <script src="vendor/twbs/bootstrap/assets/js/vendor/popper.min.js" crossorigin="anonymous"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>
    <script>
    $(function() {
        $('.lang_changer').selectpicker();
    });
    </script>


</body>

</html>