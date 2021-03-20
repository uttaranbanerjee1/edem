<?php include "include/header.php";?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 bg-white left-form-panel">
            <?php include "include/navigation-before-login.php";?>

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

               
            </div>
            <div class="col-md-5 right-annim-panel">
                <h1 class="display-4 font-weight-medium">The Seamless
                    Connection Between
                    Projects And Capital</h1>
            </div>
        </div>
    </div>


    <?php include "include/footer.php";?>