<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <footer>
  <i class="bi bi-buildings"></i>
  <br>
  <style>
    .face{
      padding: 2px;
    margin: 2px;
    
    height: 30px;
    /* border-color: rgb(255, 0, 0);
    border-radius: 20px; */
    /* background-color: red; */
    float: right;
    }
    .face:hover{
    background-color: rgb(36, 138, 36);
    filter: opacity(0.9) drop-shadow(0 0 0 red);
    filter: brightness(500%);
    filter: hue-rotate(0deg);
  }
  /* .contenedor{
    height: 300px;
    display: flex;
    justify-content:center;
    align-items: flex-end;

  } */
  </style>
  <div class="contenedor">Servicio Nacional de Aprendizaje SENA - Dirección General Calle 57 No. 8-69, Bogotá D.C - PBX (57 1) 5461500 <br>
Línea gratuita de atención al ciudadano Bogotá 3430111 - Resto del país 018000 910270 <br>
Horario de atención: lunes a viernes de 8:00 am a 5:30 pm <br>
                Todos los derechos reservados &copy; <br> Sena 2023</div>
            <div>
                

                
              <a href="https://www.youtube.com/user/SENATV"><img src="../../img/youtube.png" alt="logo youtube" class="face"></a>
              <a href="http://instagram.com/senacomunica"><img src="../../img/logotipo-de-instagram.png" alt="logo instagram" class="face"></a>
              <a href="https://twitter.com/SENAComunica"><img src="../../img/twitter_b.png" alt="logo twitter" class="face"></a>
              <a href="https://www.facebook.com/SENAColombiaOficial/"><img src="../../img/facebook.png" alt="logo facebook" class="face"></a>
                
            </div>
        </div>
    </div>
    <style>
       footer{
        align-items: center;
        justify-content: center;
        text-align: center;
        background-color:rgba(0, 0, 0, 0.938);
        color: white;
        height: 180px;
        width: auto;
        
      }

    </style>
   

    </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script>
  $(document).ready( function(){
    $("#tablaid").DataTable({
      "pagelength":3,
      lengthmenu:[
        [3,10,25,50],
        [3,10,25,50]

      ],
      "language":{ 
        "url":"https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"

      }

    });
  }

  );
  </script>
  
  <!-- <script>
    function borrar(codigousuario){
        Swal.fire({
  title: '¿Desea Borrar el Usuario?',
  showCancelButton: true,
  confirmButtonText: 'Si',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    //   Swal.fire('Eliminado!', '', 'success');
    window.location="index.php?txtID="+codigousuario;
  }
})
        //index.php?txtID=
        }
</script> -->
</body>

</html>