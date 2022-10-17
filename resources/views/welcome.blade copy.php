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
                                    <img class="img-fluid" src="{{asset('assets/img/registrate.png')}}" alt="registrate" width="180px">
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="line  mt-5">
                                    </div>
                                    <img class="img-fluid mb-0" src="{{asset('assets/img/pepsico.png')}}" alt="pepsico" >
                                    <p class="maintext mt-0">herramientas exclusivas<br/>
                                    para generar mas ventas</p>
                                    <div class="d-flex justify-content-between">
                                        <p class="secundarytext">accede y conoce<br/>
                                        los multiples materiales<br/>
                                    para impulsar tus ventas</p>
                                    <img class="img-fluid" src="{{asset('assets/img/gepp.png')}}" alt="gepp" width="150px">
                                    </div>
                                    <div class="line  mt-5">
                                    </div>
                                    </div>
                                    <div class="col justify-content-between">
                                    <div class="">
                                    <p class="maintext1 mt-5"><i>Estás a solo un clic  <br/>
                                    de conocer todos los beneficios</i></p>
                                    </div>
                                <div class="col ">
    							  <ul class="nav nav-tabs responsive-tabs justify-content-left maintitle">
									<li class="active tabtext1 px-2"><a href="#login">Quiero ser Cliente</a></li>
									<li class="tabtext1 px-2"><a href="#yasoy">  Ya soy cliente</a></li>
								  </ul>
								  <div class="tab-content mainform">
									<div class="tab-pane active" id="login">
                                    <div class="row font-weight-bold mb-2">
                                        <div class="col-7">
                                            <p class="mb-0"><i class="fa-solid fa-check redd"></i>Capacitaciones gratuitas en linea</p>
                                            <p class="mb-0"><i class="fa-solid fa-check redd"></i>Arma Posters de tus combos</p>
                                        </div>
                                        <div class="col">
                                           <p class="mb-0"><i class="fa-solid fa-check redd"></i>Comunica tu Whatsapp</p>
                                           <p class="mb-0"><i class="fa-solid fa-check redd"></i>Digitaliza tu Menú</p>
                                        </div>
                                    </div>
									  <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nombre*</label>
                                        <input type="text" class="form-control" id="inputNombre">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputPassword4">Apellido*</label>
                                        <input type="text" class="form-control" id="inputApellido">
                                        </div>
                                    </div>
                                     <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email*</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputPassword4">Telefono*</label>
                                        <input type="number" class="form-control" id="inputTelefono">
                                        </div>
                                    </div>
                                     <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Dirección*</label>
                                        <input type="text" class="form-control" id="inputdireccion4">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputState">Estado*</label>
                                        <select id="inputState" class="form-control ">
                                            <option selected>Seleccione su estado</option>
                                            <option>...</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="ml-3 my-1 ">
                                            <label class="">*Campos obligatorios</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary my-1 ml-3 text-uppercase sumate">  ¡Sumate!</button>
                                    </div>


                                    </form>
									</div>

								
						<div class="tab-pane font-weight-bold " id="yasoy">
                             <div class=" font-weight-bold mb-2">
                                     <p class=" tabtext1 text-center mb-0">descargá la app que te ayudará  </p>
                                        <p class=" tabtext1 text-center">a que tu negocio crezca</p>
                                    </div>
                                        <div class="row">
                                           <div class="  col-md-4" style="max-width: 540px;">
                                <div class="d-flex justify-content-around">
                                    <div class="mt-4">
                                    <img class="img-fluid iconos" src="{{asset('assets/img/gaseosa.png')}}" alt="gaseosa">
                                    </div>
                                    <div class="">
                                    <div class="  mt-5">
                                        <p class="  mb-0">Portafolio</p>
                                        <p class=" ">disponible</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                 <div class="  col-md-4" style="max-width: 540px;">
                                <div class="d-flex justify-content-around">
                                    <div class="mt-4">
                                    <img class="img-fluid iconos" src="{{asset('assets/img/gaseosa.png')}}" alt="gaseosa">
                                    </div>
                                    <div class="">
                                    <div class="  mt-5">
                                        <p class="  mb-0">Seguimiento</p>
                                        <p class="  mb-0">de tus</p>
                                        <p class=" ">compras</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                        <div class="  mb-0 col-md-4" style="max-width: 540px;">
                                <div class="d-flex justify-content-around">
                                      <div class="ml-3  mt-3 tabtext">
                                                <p class="  mb-0">Escanea el</p>
                                                <p class="  mb-0">codigo qr</p>
                                                <p class="  mb-0">y descarga</p>
                                                <p class=" ">la app</p>
                                            </div>
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="  mb-3 col-md-4" style="max-width: 540px;">
                                <div class="d-flex justify-content-around">
                                    <div class="mt-4">
                                    <img class="img-fluid iconos" src="{{asset('assets/img/gaseosa.png')}}" alt="gaseosa">
                                    </div>
                                    <div class="  mt-5">
                                        <p class="  mb-0">Pedidos</p>
                                        <p class=" ">en linea</p>
                                    </div>
                                </div>
                                </div>
                                 <div class="  mb-3 col-md-4" style="max-width: 540px;">
                                <div class="d-flex justify-content-around">
                                    <div class="mt-4">
                                    <img class="img-fluid iconos" src="{{asset('assets/img/gaseosa.png')}}" alt="gaseosa">
                                    </div>
                                    <div class="  mt-5">
                                        <p class="  mb-0">Noticias y </p>
                                        <p class=" ">promociones</p>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-4" style="max-width: 540px;">
                              <img class="img-fluid" src="{{asset('assets/img/qr_GETM.png')}}" alt="gepp" width="180px">
                                </div>
                                </div>
									</div>
								  </div>

							</div>
    </div>

  </div>

</div>
@endsection

