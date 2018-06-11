<br>
<br>
<br>
<script>
    function LoadExa(){
        document.getElementById('contenedo-pago').style.visibility='visible';
    }
    function LoadPaM(){
        document.getElementById('correo').style.visibility='hidden';
        document.getElementById('P-C').style.visibility='hidden';
        document.getElementById('P-M').style.visibility='visible';
        document.getElementById('btn-envio').style.visibility='visible';
    }
    function LoadPaC(){
        document.getElementById('correo').style.visibility='hidden';
        document.getElementById('P-M').style.visibility='hidden';
        document.getElementById('P-C').style.visibility='visible';
        document.getElementById('btn-envio').style.visibility='visible';
    }
    function LoadEnvio(){
        document.getElementById('P-M').style.visibility='hidden';
        document.getElementById('P-C').style.visibility='hidden';
        document.getElementById('correo').style.visibility='visible';
        
    }
</script>

<div class="container text-center">
    <div class="row">
          <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading" id="titleMessage">Examen de Admisión</h2>

                <p>Bienvenido a la nueva plataforma del único diplomado en artes para músicos y maestros en México y centro américa. Para poder acceder a la guía de estudios y a los 5 intentos de tu examen de admisión hay que realizar un pago de $100 pesos mexicanos (6 dolares americanos) </p>

                <p>Es un examen diseñado para poder comenzar con lo básico de la música, serán 14 preguntas de opción múltiple, cada una solicitando una única respuesta. El exámen podrá realizarse hasta 5 veces para poderlo acreditar, la calificación mínima es 9, esto para conservar y compartir nuestro nivel de excelencia y calidad. </p>
              <button type="button" class="btn btn-info" onclick="LoadExa();">¿Dónde realizo mi pago? </button>
              <div id="contenedo-pago" style="visibility:hidden">
                  <br>
                  <h5 class="section-heading">¿De dónde eres?</h5>
                  <div class="row">
                    <div class="col-lg-3 mx-auto text-center">
                        <button type="button" class="btn btn-success" onclick="LoadPaM();">México</button>
                        
                    </div>
                      <div class="col-lg-3 mx-auto text-center">
                          <button type="button" class="btn btn-success" onclick="LoadPaC();">Centro américano </button>                        
                    </div>
                  
                 </div>
                <div id="conPago">
                    <br>
                    <ul class="list-group" id="P-M" style="visibility:hidden">
                      <li class="list-group-item"><h6>Banamex: </h6> <br>5204-1653-7457-4790</li>
                    </ul>  
                    <ul class="list-group" id="P-C" style="visibility:hidden; margin-top:-14%">
                      <li class="list-group-item"><h6>Clave Interbancaria Santarder: </h6> <br>0144-7020-0113-0438-59</li>
                    </ul> 
                     <ul class="list-group" id="correo" style="visibility:hidden; margin-top:-14%">
                              <li class="list-group-item"><h6>Enviar comprobante a: </h6> <br>contacto@diplomadosdelasep.com.mx</li>
                    </ul> 
                </div>
                  <br>
               
                    <button type="button" class="btn btn-success" id="btn-envio" onclick="LoadEnvio();" style="visibility:hidden" >enviar comprobante de pago</button>
                  
               
        </div>
        
    </div>
</div>
