
@extends('layouts.header2')

@section('content')
    
<section class="wrapper-bottom-sec">
        <div class="p-30"></div>
        <div class="p-15 p-t-none p-b-none m-l-10 m-r-10">
                </div>
        
   <div class="row">

            <div class="col-lg-12">
                <div class="panel-body">
                    <div class="row text-center">

                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-success text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-users"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15">10
                              Staffs</span>
                                        <br>
                                        <!--<a href="Applicants" class="btn btn-complete btn-xs text-uppercase">View All</a>-->
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-complete text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-users"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15">10
                                         Teaching Staffs</span>
                                        <br>
                                       
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-primary text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-users"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15">10
                                         Non Teaching Senior Staffs</span>
                                        <br>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-complete-darker text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-users"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15">10
                                         Non Teaching Junior Staffs</span>
                                        <br>
                                       
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-primary text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-users"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15">10
                                      Staffs with active Email</span>
                                        <br>
                                        <!--<a href="PaymentHis"-->
                                        <!--   class="btn btn-success btn-xs text-uppercase">View All</a>-->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-success text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-users"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15">10
                                         Staffs Self Activation</span>
                                        <br>
                                        <!--<a href="PaymentHis"-->
                                        <!--   class="btn btn-success btn-xs text-uppercase">View All</a>-->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-complete-darker text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-users"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15">10
                                         Staffs completed Data Capture</span>
                                        <br>
                                        <!--<a href="PaymentHis"-->
                                        <!--   class="btn btn-success btn-xs text-uppercase">View All</a>-->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-complete text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-users"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15">10
                                         Staffs Arranged Name</span>
                                        <br>
                                        <!--<a href="PaymentHis"-->
                                        <!--   class="btn btn-success btn-xs text-uppercase">View All</a>-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/libs/jquery-1.10.2.min.js"></script>

<script src="assets/libs/jquery.slimscroll.min.js"></script>

<script src="assets/libs/smoothscroll.min.js"></script>

<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/libs/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>

<script src="assets/libs/alertify/js/alertify.js"></script>

<script src="assets/libs/bootstrap-select/js/bootstrap-select.min.js"></script>

<script src="assets/js/scripts.js"></script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('input[name="_token"]').val()
        }
    });
</script>
<input type="hidden" id="_DatePicker" value="jS M y">

    <script src="assets/libs/handlebars/handlebars.runtime.min.js"></script>

    <script src="assets/libs/moment/moment.min.js"></script>

    <script src="assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

    <script src="assets/js/form-elements-page.js"></script>

    <script src="assets/libs/data-table/datatables.min.js"></script>

    <script src="assets/js/bootbox.min.js"></script>


    <script src="assets/libs/handlebars/handlebars.runtime.min.js"></script>

    <script src="assets/js/form-elements-page.js"></script>

    <script src="assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"></script>

    <script src="assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"></script>


    <script src="assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"></script>

    <!-- <script src="assets/libs/handlebars/handlebars.runtime.min.js"></script> -->

    <script src="assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"></script>

    <!-- <script src="assets/js/form-elements-page.js"></script> -->

    <script src="assets/libs/data-table/datatables.min.js"></script>



<script>
	
	$(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "ajaxupload.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});
</script>
 <script>
        $(document).ready(function(){
            $('.data-table').DataTable();
        });
    </script>


@endsection




