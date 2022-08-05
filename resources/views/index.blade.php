
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Federal University Dutsin-ma Staff Management System">
    <meta name="author" content="Ahmad Jafar Waziri">
  <!--Date: 09-02-2022 -->
    <link rel="icon" href="{{asset('images/fudma.png')}}">

    <title>Federal Univeristy Dutsin-Ma - Staff Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <style>
      .ajax_loader{
        background: url({{ asset('images/Preloader_8.gif')}});
        background-repeat: no-repeat;
        background-position: center; 
        background-size:auto;
        height:50px;
        cursor:default;
        z-index:-1;
      }
    </style>
   <style>
#tooltip {
}

#tooltip #tooltiptext {
    visibility: hidden;
    width: 90%;
    background-color:red;;
    color: #ED1C24;
    text-align: right;
    border-radius: 6px;
    padding: 5px;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

#tooltip:hover #tooltiptext {
    visibility: visible;
}

body {
  background-image: url({{ asset('images/fudma.jpg')}});
  background-size:1700px;
}
footer {
  position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 8%;
  text-align: center;
  padding: 0px;
  background-color: darkgreen;
  color: white;
}
</style>
  </head>

  <body style="padding-top:70px;">

    <div class="container">

      <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">



          <div class="flip">
        <div class="card"> 
          <div class="face front"> 
              


            <div class="panel panel-default" >

                   <form class="form-horizontal" name="sign_in_form" id="sign_in_form">
               

                <h1 class="text-center"><img  src="{{ asset('images/fudma.png')}}" width="100"></h1>
                <center><h4>Admin Panel</h4></center>


                <br>
         

               <input class="form-control" placeholder="STAFF ID" id="staffid" name="staffid" type="text" autocomplete="on" required="true" />


               <input class="form-control" placeholder="Password" id="password" name="password" type="password" required="true" />
     <p id="sign_in_result" ><button class="btn btn-primary btn-block" id="btn_sign_in" >SIGN IN</button></p>

<div id="haqq"></div>

                <hr>





              </form>

            </div>


          </div> 
        




          </div>
        </div>   
      </div>




        </div>
        <div class="col-md-4"></div>

     

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script>

    $('.fliper-btn').click(function(){
    $('.flip').find('.card').toggleClass('flipped');

});

    
    </script>


    <script>
      $(document).ready(function(){
        $("#sign_in_form").on('submit',function(e){
          e.preventDefault();
          
          $("#staffid").prop('disabled', true);
          $("#password").prop('disabled', true);
          

          $("#btn_sign_in").prop("disabled", true);
          $("#btn_sign_in").html("");
          $("#btn_sign_in").blur();
          $("#btn_sign_in").removeClass("btn-primary");
          $("#haqq").addClass("ajax_loader")

          $.ajax({
            url: "dologin.php",
            type: "POST",
            data: {
              staffid: $("#staffid").val(),
              password: $("#password").val()
            },
            beforeSend: function(){
                $("#btn_sign_in").prop("disabled", true);
            },
            success: function(result){
              $("#sign_in_result").html(result);
            },
            error: function(){
              $("#btn_sign_in").prop("disabled", false);
            }
          });
        });
      });
    </script>
<footer>
  <p>&copy;2022  Federal University Dutsin-Ma || Staff  Portal || Powered By ICT DIRECTORATE || Portal Support:staff_audit@fudutsinma.edu.ng</p> <br>
  
</footer>
  </body>
</html>




      