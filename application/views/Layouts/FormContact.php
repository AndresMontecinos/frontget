<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!-- Formulario de contacto -->
 <main>
      <section id="contact-5">
        <div class="container-contacto">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Necesitas una asesoria.</h2>
              <p class="lead mt-3 pr-lg-4">Envianos tus consultas y un ejecutivo te ayudara.</p>
            </div>
            <div class="col-lg-10 mt-4">
              <form class="zform p-3 p-md-6 background-11 radius-secondary border color-9" action="<?php echo base_url(); ?>index.php/cFrontget/enviar"method="post">
                <div class="row justify-content-center">
                  <div class="col-md-12">
                    <div class="form-group"><input class="form-control background-white border-2x" type="hidden" name="to" value="username@domain.extension"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"><label class="ls text-uppercase color-3 fw-700 mb-0" for="exampleInputName1">Nombres</label><input class="form-control background-white" id="exampleInputName1" type="text" name="firstname" required="required"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"><label class="ls text-uppercase color-3 fw-700 mb-0" for="exampleInputName2">Apellidos</label><input class="form-control background-white" id="exampleInputName2" type="text" name="lastname" required="required"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"><label class="ls text-uppercase color-3 fw-700 mb-0" for="exampleInputCompany">Empresa</label><input class="form-control background-white" id="exampleInputCompany" type="text" name="company" required="required"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"><label class="ls text-uppercase color-3 fw-700 mb-0" for="exampleInputEmail1">Email</label><input class="form-control background-white" id="exampleInputEmail1" type="email" name="from" required="required"></div>
                  </div>
                  <div class="col-12">
                    <div class="form-group"><label class="ls text-uppercase color-3 fw-700 mb-0" for="exampleInputPassword1">Mensaje</label><textarea class="form-control background-white" id="exampleInputPassword1" rows="5" name="message"></textarea></div>
                  </div>
                  <div class="col-md-6 text-center mt-4"><input class="btn btn-primary btn-block" type="submit" name="submit" value="Enviar!"></div>
                </div>
                <div class="zform-feedback mt-3"></div>
              </form>
            </div>
          </div>
          <!--/.row-->
        </div>
        <!--/.container-->
      </section>
    </main>
    <br>
    <br>