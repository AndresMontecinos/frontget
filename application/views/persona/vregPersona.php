<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="UTF-8">
  <title>FrontGet</title>
</head>
<body>
 <main>
      <section id="contact-5">
  
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Necesitas una asesoria.</h2>
              <p class="lead mt-3 pr-lg-4">Si necesitas asesoria en tus proyectros y como mostrar tus servicios envianos un correo y te ayudaremos.</p>
            </div>
            <div class="col-lg-10 mt-4">
              <form class="zform p-3 p-md-6 background-11 radius-secondary border color-9" action="<?php echo base_url(); ?>index.php/cPersona/guardar" method="POST">
                <div class="row justify-content-center">
                  <div class="col-md-12">
                    <div class="form-group"><input class="form-control background-white border-2x" type="hidden" name="to" value="username@domain.extension"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"><label class="ls text-uppercase color-3 fw-700 mb-0" for="exampleInputName1">id persona</label><input class="form-control background-white" id="exampleInputName1" type="text" name="txtidpersona" required="required"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"><label class="ls text-uppercase color-3 fw-700 mb-0" for="exampleInputName2">Nombres</label><input class="form-control background-white" id="exampleInputName2" type="text" name="txtnombres" required="required"></div>
                  </div>
                  <div class="col-md-6 text-center mt-4"><input class="btn btn-primary btn-block" type="submit" name="submit" value="Guardar"></div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>