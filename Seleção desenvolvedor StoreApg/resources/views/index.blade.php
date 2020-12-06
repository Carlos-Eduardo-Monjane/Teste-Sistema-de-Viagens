
                    @extends('layout.app')
              
			  @if($msg == 'resultado')
	
     <div >
        <div >
            <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-notify modal-info" role="document">
                    <!--Content-->

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                
                                <h5 class="modal-title text-center" id="formModal">Resultados: {{$partida}} - {{$chegada}} </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
								
								<p>Distância: {{$distancia}} </p>
								<p>Custo: {{$custo}} </p>
								
                            </div>
                        </div>
                    </div>


                    <!--/.Content-->
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script>
                $(window).on('load',function(){
                    $('#modalPush').modal('show');
                });
            </script>
        </div>

    </div>

	
@endif
			  
			  
			  
			  
			  
			  
			  
                    @section('content')






	


                    @endsection

