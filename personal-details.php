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
                <div class="navigation-menu text-right">
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

                    <div class="preview-panel">
                        <table class="table table-striped output-result">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>



                    <form class="mt-5">

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
                                <input type="email" class="form-control mt-1" id="inputEmail"
                                    placeholder="email@example.com">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control mt-1" id="inputContactno"
                                    placeholder="Contact no.">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control mt-1" id="inputWebsite"
                                    placeholder="Website (optional)">
                            </div>
                            <div class="form-group col-md-12">
                                <div class="custom-control custom-checkbox medium-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck"
                                        name="example1">
                                    <label class="custom-control-label text-muted" for="customCheck"><small>Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt
                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                            aute
                                            irure dolor in reprehenderit in voluptate.</small></label>
                                </div>
                            </div>

                        </div>

                        <a class="btn btn-primary-cust" href="results.php" role="button">Get Result</a>
                    </form>


                </div>

                <div class="cust-footer">
                    <p class="m-0 text-muted"><span>© 2021 – EDM Advisors GmbH </span> | <span> Imprint – Privacy
                            Statement</span></p>
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