@extends("layout.layoutMaster")
{{-- @section('css')
<style type="text/css">
    a{
  scroll-behavior: smooth!important;
}
</style>
@endsection --}}
                                @section("title", "Inicio")
                                @section("content")
                                <div class="container my-5">
                                <div class="d-flex justify-content-between">
                                    <img class="img-fluid" src="{{asset('assets/img/logo-crece.png')}}" alt="crece" width="170px">
                                    <img class="img-fluid mb-2" src="{{asset('assets/img/registrate.png')}}" alt="registrate" width="180px">
                                </div>
                                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                                <div class="row">
                                    <div class=" col-md-6 col-sm-12">
                                    <div class="line  mt-5">
                                    </div>
                                    <div class="background-burble">
                                         <img class="img-fluid mb-0" src="{{asset('assets/img/pepsico.png')}}" alt="pepsico" >
                                    <p class="maintext mt-0 Montreal-Serial">herramientas exclusivas<br/>
                                    para generar mas ventas</p>
                                    <div class="d-flex justify-content-between">
                                        <p class="secundarytext Montreal-Serial">accede y conoce<br/>
                                        los multiples materiales<br/>
                                    para impulsar tus ventas</p>
                                    <img class="img-fluid" src="{{asset('assets/img/gepp.png')}}" alt="gepp" width="135px" >
                                    </div>
                                    </div>
                                   
                                    <div class="line  mt-5">
                                    </div>
                                    </div>
                                    <div class="justify-content-between  col-md-6 col-sm-12">
                                    <div class="Montreal-Serial">
                                    <p class="maintext1 mt-4"><i>Estás a solo un clic  <br/>
                                    de conocer todos los beneficios</i></p>
                                    </div>
                                <div class="col ">
                                    <div class="text-decoration-none ">
                                         <ul class="nav nav-tabs responsive-tabs justify-content-left maintitle Montreal-Serial">
									<li class="active tabtext1 px-2"><a href="#login">Quiero ser Cliente</a></li>
									<li class="tabtext1 px-2"><a href="#yasoy" class="mr-5 pr-2 ml-2">  Ya soy cliente</a></li>
								  </ul>
                                    </div>
    							 
								  <div class="tab-content mainform">
									<div class="tab-pane active" id="login">
                                    <div class="row font-weight-bold mb-2 montreal-medium">
                                        <div class="col-7">
                                            <p class="mb-0"><i class="fa-solid fa-check redd"></i>Capacitaciones gratuitas en linea</p>
                                            <p class="mb-0"><i class="fa-solid fa-check redd"></i>Arma Posters de tus combos</p>
                                        </div>
                                        <div class="col">
                                           <p class="mb-0"><i class="fa-solid fa-check redd"></i>Comunica tu Whatsapp</p>
                                           <p class="mb-0"><i class="fa-solid fa-check redd"></i>Digitaliza tu Menú</p>
                                        </div>
                                    </div>
									  <form method="POST" action="{{ route('clients.store') }}"  role="form" class="montreal-medium">
                                         @csrf
                                    @method("POST")
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="Nombre">Nombre*</label>
                                        <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="Apellido">Apellido*</label>
                                        <input type="text" class="form-control" id="Apellido" name="Apellido" required>
                                        </div>
                                    </div>
                                     <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="email">Email*</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="telefono">Telefono*</label>
                                        <input type="number" class="form-control" id="telefono" name="telefono" required>
                                        </div>
                                    </div>
                                     <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="direccion">Dirección*</label>
                                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputState">Estado*</label>
                                            <select id="states" name="estado" class="form-control browser-default custom-select" required>
                                                <option selected>Seleccione su estado</option>
                                                @foreach ($state as $state)
                                                <option value="{{$state->id_estado}}">{{$state->estado}}</option>
                                                @endforeach
                                            </select>
                                            
                                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="ml-3 my-1 ">
                                            <label class="">*Campos obligatorios</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary my-1 ml-3 text-uppercase submit-button">  ¡sumate!</button>
                                    </div>


                                    </form>
									</div>

								
						<div class="tab-pane" id="yasoy">
                             <div class=" font-weight-bold mb-2 Montreal-Serial ">
                                     <p class=" tabtext1 text-center mb-0">descargá la app que te ayudará  <br> a que tu negocio crezca</p>
                                    </div>
                                    <div class="row text-sm-center responsive-margin">
                                <div class="col-md-8">
                                    <div class="row ">
                                        <div class="col-md-6"  >
                                <div class="d-flex align-self-sm-center justify justify-content-lg-around montreal-medium">
                                    <div class="mt-4">
                                    <img class="img-fluid icons" src="{{asset('assets/img/gaseosa.png')}}" alt="gaseosa">
                                    </div>
                                    <div class="">
                                    <div class="  mt-3">
                                        <p class=" ml-2 mb-0">Portafolio<br/>disponible</p>
                                    </div>
                                    </div>
                                </div>
                                        </div>
                                        <div class="col-md-6"  >
                                <div class="d-flex align-self-sm-center justify justify-content-lg-around montreal-medium">
                                    <div class="mt-4">
                                    <img class="img-fluid icons" src="{{asset('assets/img/crecimiento.png')}}" alt="crecimiento">
                                    </div>
                                    <div class="">
                                    <div class=" ml-1 mb-lg-5  mt-1">
                                        <p class=" ml-1 mb-0">Seguimiento<br/> tus<br/>compras</p>
                                    </div>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"  >
                                <div class="d-flex align-self-sm-center justify justify-content-lg-around montreal-medium">
                                    <div class="mt-4">
                                    <img class="img-fluid icons" src="{{asset('assets/img/telefono.PNG')}}" alt="telefono">
                                    </div>
                                    <div class="  mt-3">
                                        <p class=" ml-2 mb-0">Pedidos<br/>en linea</p>
                                    </div>
                                </div>
                                        </div>
                                        <div class="col-md-6"  >
                                <div class="d-flex align-self-sm-center justify justify-content-lg-around montreal-medium">
                                    <div class="mt-4">
                                    <img class="img-fluid icons" src="{{asset('assets/img/pepsi.png')}}" alt="pepsi">
                                    </div>
                                    <div class="  mt-3">
                                        <p class=" ml-1 mb-0">Noticias y <br/>promociones</p>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-12"  >
                                <div class="d-flex align-self-sm-center justify justify-content-lg-around Montreal-Serial">
                                      <div class=" tabtext responsive-top">
                                                <p class=" responsive-left mb-0">Escanea el <br/> codigo qr <br/> y descarga <br/> la app</p>
                                            </div>
                                </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-self-sm-center justify justify-content-lg-around montreal-medium">
                                        <div class="col-12"  >
                              <img class="img-fluid responsive-left1" src="{{asset('assets/img/qr_GETM.png')}}" alt="qr" width="120px">
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
@endsection

