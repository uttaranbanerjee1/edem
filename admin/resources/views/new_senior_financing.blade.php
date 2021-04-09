@extends('layout.default')

@section('title', 'Create new senior financing')

@push('css')
<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
<link href="/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" />
<link href="/assets/plugins/select-picker/dist/picker.min.css" rel="stylesheet" />
@endpush

@push('scripts')

<script src="/assets/plugins/highlight.js/highlight.min.js"></script>
<script src="/assets/js/demo/highlightjs.demo.js"></script>
<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/plugins/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="/assets/js/demo/table-plugins.demo.js"></script>
<script src="/assets/js/demo/sidebar-scrollspy.demo.js"></script>




<script src="/assets/plugins/moment/min/moment.min.js"></script>
<script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="/assets/plugins/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
<script src="/assets/plugins/bootstrap-3-typeahead/bootstrap3-typeahead.js"></script>
<script src="/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
<script src="/assets/plugins/tag-it/js/tag-it.min.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="/assets/plugins/blueimp-tmpl/js/tmpl.min.js"></script>
<script src="/assets/plugins/blueimp-load-image/js/load-image.all.min.js"></script>
<script src="/assets/plugins/blueimp-canvas-to-blob/js/canvas-to-blob.min.js"></script>
<script src="/assets/plugins/blueimp-gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-audio.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-video.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-validate.js"></script>
<script src="/assets/plugins/blueimp-file-upload/js/jquery.fileupload-ui.js"></script>
<script src="/assets/plugins/summernote/dist/summernote-lite.min.js"></script>
<script src="/assets/plugins/spectrum-colorpicker2/dist/spectrum.min.js"></script>
<script src="/assets/plugins/select-picker/dist/picker.min.js"></script>
<script src="/assets/plugins/highlight.js/highlight.min.js"></script>
<script src="/assets/js/demo/highlightjs.demo.js"></script>
<script src="/assets/js/demo/form-plugins.demo.js"></script>


@endpush

@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN row -->
        <div class="row justify-content-center">
            <!-- BEGIN col-10 -->
            <div class="col-xl-10">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-9 -->
                    <div class="col-xl-12">
                        <div class="d-flex bd-highlight mb-3">
                            <div class="me-auto p-2 bd-highlight">
                                <h1 class="page-header">
                                    Create new senior financing
                                </h1>
                            </div>

                            <div class="p-2 bd-highlight">
                                <a class="btn btn-primary" href="{{url('/')}}" role="button">Add New Entry</a>

                            </div>
                        </div>






                        <hr class="mb-4" />

                        <!-- BEGIN #datatable -->

                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Name of the Bank</label>
                                        <input type="text" class="form-control" name="bank_name" required>

                                    </div>
                                    <div class="mb-3">
                                        <label for="bank_website" class="form-label">Website of the Bank</label>
                                        <input type="url" class="form-control" mame="bank_website">
                                    </div>
                                    <div class="mb-3">
                                        <label for="type_of_finance" class="form-label">What kind of borrowers do they
                                            finance?</label>

                                        <select class="selectpicker form-control" id="ex-multiselect" multiple>
                                            <optgroup>
                                                <option>Natürliche Personen</option>
                                                <option>Juristische Personen</option>

                                            </optgroup>

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="whwre_borrower_have" class="form-label">Where does the borrower have
                                            to
                                            be domiciled?</label>

                                        <select class="selectpicker form-control" id="ex-search" multiple>
                                            <option value="1">Deutschland</option>
                                            <option value="2">Europäische Union</option>
                                            <option value="3">außer</option>

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="where_in_germany" class="form-label">Where in Germany do they
                                            finance properties?</label>

                                        <select class="selectpicker form-control" id="where-germany" multiple>
                                            <option value="Berlin">Berlin</option>
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich (München)">Munich (München)</option>
                                            <option value="Cologne (Köln)">Cologne (Köln)</option>
                                            <option value="Frankfurt am Main">Frankfurt am Main</option>
                                            <option value="Stuttgart">Stuttgart</option>
                                            <option value="Düsseldorf">Düsseldorf</option>
                                            <option value="Dortmundf">Dortmund</option>
                                            <option value="Essen">Essen</option>
                                            <option value="Leipzig">Leipzig</option>
                                            <option value="Bremen">Bremen</option>
                                            <option value="Dresden">Dresden</option>
                                            <option value="Hanover (Hannover)">Hanover (Hannover)</option>
                                            <option value="Nuremberg (Nürnberg)"> Nuremberg (Nürnberg)</option>
                                            <option value="Duisburg">Duisburg</option>
                                            <option value="Bochum">Bochum</option>
                                            <option value="Wuppertal">Wuppertal</option>
                                            <option value="Bielefeld">Bielefeld</option>
                                            <option value="Münster">Münster</option>
                                            <option value="Karlsruhe">Karlsruhe</option>
                                            <option value="Mannheim">Mannheim</option>
                                            <option value="Augsburg">Augsburg</option>
                                            <option value="Wiesbaden">Wiesbaden</option>
                                            <option value="Gelsenkirchen">Gelsenkirchen</option>
                                            <option value="Mönchengladbach">Mönchengladbach</option>
                                            <option value="Braunschweig">Braunschweig</option>
                                            <option value="Chemnitz">Chemnitz</option>
                                            <option value="Kiel">Kiel</option>
                                            <option value="Aachen">Aachen</option>
                                            <option value="AHalle (Saale)">Halle (Saale)</option>
                                            <option value="Magdeburg">Magdeburg</option>
                                            <option value="Freiburg im Breisgau"> Freiburg im Breisgau</option>
                                            <option value="Krefeld"> Krefeld</option>
                                            <option value="Lübeck"> Lübeck</option>
                                            <option value="Oberhausen"> Oberhausen</option>
                                            <option value="Erfurt"> Erfurt</option>
                                            <option value="Mainz"> Mainz</option>
                                            <option value="Rostock"> Rostock</option>
                                            <option value="Kassel"> Kassel</option>
                                            <option value="Hagen"> Hagen</option>
                                            <option value="Hamm"> Hamm</option>
                                            <option value="Saarbrücken"> Saarbrücken</option>
                                            <option value="Mülheim an der Ruhr"> Mülheim an der Ruhr</option>
                                            <option value="Potsdam"> Potsdam</option>
                                            <option value="Ludwigshafen am Rhein"> Ludwigshafen am Rhein</option>
                                            <option value="Oldenburg"> Oldenburg</option>
                                            <option value="Leverkusen"> Leverkusen</option>
                                            <option value="Osnabrück"> Osnabrück</option>
                                            <option value="Solingen"> Solingen</option>
                                            <option value="Heidelberg"> Heidelberg</option>
                                            <option value="Herne"> Herne</option>
                                            <option value="Neuss"> Neuss</option>
                                            <option value="Darmstadt"> Darmstadt</option>
                                            <option value="Paderborn"> Paderborn</option>
                                            <option value="Regensburg"> Regensburg</option>
                                            <option value="Ingolstadt"> Ingolstadt</option>
                                            <option value="Würzburg"> Würzburg</option>
                                            <option value="Fürth"> Fürth</option>
                                            <option value="Wolfsburg"> Wolfsburg</option>
                                            <option value="Offenbach am Main"> Offenbach am Main</option>
                                            <option value="Ulm"> Ulm</option>
                                            <option value="Heilbronn"> Heilbronn</option>
                                            <option value="Pforzheim"> Pforzheim</option>
                                            <option value="Göttingen"> Göttingen</option>
                                            <option value="Bottrop"> Bottrop</option>
                                            <option value="Trier"> Trier</option>
                                            <option value="Recklinghausen"> Recklinghausen</option>
                                            <option value="Reutlingen"> Reutlingen</option>
                                            <option value="Bremerhaven"> Bremerhaven</option>
                                            <option value="Koblenz"> Koblenz</option>
                                            <option value="Bergisch Gladbach"> Bergisch Gladbach</option>
                                            <option value="Jena"> Jena</option>
                                            <option value="Remscheid"> Remscheid</option>
                                            <option value="Erlangen"> Erlangen</option>
                                            <option value="Moers"> Moers</option>
                                            <option value="Siegen">Siegen</option>
                                            <option value="Hildesheim"> Hildesheim</option>
                                            <option value="Salzgitter"> Salzgitter</option>



                                        </select>
                                        <script type="text/javascript">
                                        $('#where-germany').picker({
                                            containerWidth: 410
                                        });
                                        </script>
                                    </div>

                                    <button type=" submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                        </div>




                    </div>
                    <!-- END col-9-->

                </div>
                <!-- END row -->
            </div>
            <!-- END col-10 -->
        </div>
        <!-- END row -->
    </div>
    <!-- END container -->
</div>
<!-- END #content -->
@endsection

<script>
$('#ex-multiselect-limit').picker({
    limit: 2
});
$('#ewhere-in-limit').picker({
    limit: 25
});
</script>