@extends('layouts.frontend')
@section('contenido')
    <section class="w3l-contact-main py-5" id="contact">
        <div class="container py-lg-5 py-md-3">
            <div class="w3header-section text-center mb-md-5 mb-4">
                <h6 class="title-subhny">Info de contacto</h6>
                <h3 class="title-w3l mb-5">
                    No dudes, hablemos<br> de tu Proyecto</h3>

            </div>

            <div class="w3l-contact-info">
                <div class="row contact-infos">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fas fa-map-marked-alt"></span></div>
                            <div class="text-box">
                                <h3 class="mb-2">Dirección</h3>
                                <p>{{$empresa->direccion}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fas fa-phone-alt"></span></div>
                            <div class="text-box">
                                <h3 class="mb-2">Contacto</h3>
                                <p><a href="tel:{{$empresa->telefono1}}">{{$empresa->telefono1}}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fas fa-envelope-open-text"></span></div>
                            <div class="text-box">
                                <h3 class="mb-2">Email</h3>
                                <p> <a href="mailto:info@movitech.com.py">info@movitech.com.py</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/contact-map-->
    <section class="w3l-contact-main" id="contact">
        <div class="map pt-lg-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14418.42823773819!2d-57.1393716!3d-25.3844826!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945c331596143cc9%3A0xbc4e8d7613b877ee!2sMOVITECH%20PY!5e0!3m2!1ses!2spy!4v1699880342870!5m2!1ses!2spy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!--//contact-map-->
    <!--/contact-form-->
    <section class="w3l-contact-main" id="contact">
        <div class="contact-infhny py-5">
            <div class="container py-lg-5">
                <div class="top-map">
                    <div class="map-content-9">
                        <form action="{{ route('enviarcorreo') }}" method="post">
						    @csrf
                            <div class="form-top1">
                                <div class="w3header-section text-center">
                                    <h6 class="title-subhny">Pongase en contacto </h6>
                                    <h3 class="title-w3l mb-0">
                                        Rellena el formulario y envía tu consulta</h3>
                                </div>

                                <div class="form-top">
                                    <div class="form-top-left">
                                        <input type="text" name="nombre" id="w3lName" placeholder="Nombre" required="">
                                        <input type="number" name="celular" placeholder="Contacto" required="">
                                    </div>
                                    <div class="form-top-righ">
                                        <textarea name="mensaje" id="w3lMessage" placeholder="Mensaje*" required=""></textarea>
                                    </div>
                                </div>
                                <div class="text-lg-right text-center">
                                    <button type="submit" class="btn btn-style btn-primary">Enviar<i class="fas fa-paper-plane ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//contact-form-->
	
@stop
