<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Teste</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="actech_template/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="actech_template/assets/css/style.css">
    <link rel="stylesheet" href="actech_template/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="actech_template/assets/css/custom.css">
    <link rel="stylesheet" href="actech_template/assets/bundles/izitoast/css/iziToast.min.css">


</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">




{{--NAVBAR--}}
        @include('layout.navbar')



        <!-- Main Content -->
        <div class="main-content">
            <section class="section">



			
				                <form action="{{ route('viagem') }}" method="post">
        {!! csrf_field() !!}
        <div class="row">

            
            <div class="col-lg-10 col-md-10 col-12 col-sm-10">

                <div class="card">


                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card-header">
                            <h4>Faça a tua viagem </h4>
                        </div>

                    </div>
                    <div class="card-body">


                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ponto de partida</label>
                            <div class="col-sm-12 col-md-7">
                                <input name="partida" type="text" class="form-control" required>
                            </div>
                        </div>
						
						<div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ponto de chegada</label>
                            <div class="col-sm-12 col-md-7">
                                <input name="chegada" type="text" class="form-control" required>
                            </div>
                        </div>

                    </div>
					
					<div class="card-footer">
					<button class="btn btn-success float-right"> Calcular a distância </button>
					</div>
                </div>
				
				


            </div>
          

           
        </div>
    </form>
	
	

				@yield('content')


            </section>

{{--        End Main Content--}}




        </div>

    {{--Footer--}}
@include('layout.footer')



    </div>
</div>
<!-- General JS Scripts -->
<script src="actech_template/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="actech_template/assets/bundles/apexcharts/apexcharts.min.js"></script>
<!-- Page Specific JS File -->
<script src="actech_template/assets/js/page/index.js"></script>
<!-- Template JS File -->
<script src="actech_template/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="actech_template/assets/js/custom.js"></script>
{{--Biblioteca para mascaras nos inputs--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
{{--                End Input Masks--}}
<script src="actech_template/assets/bundles/izitoast/js/iziToast.min.js"></script>
<!-- Page Specific JS File -->
<script src="actech_template/assets/js/page/toastr.js"></script>
<!-- JS Libraies -->


<script src="actech_template/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
