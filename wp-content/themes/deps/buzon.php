<?php  
    /*
    Template Name: Buzon
    */
?>

<!--/*Cabecera-->
<?php include('header.php'); ?>

   <!--/*Menú-->
   <?php include('components/c-menu.php'); ?>
	
   <h3 class="f-h3"> Buzón </h3>
    <div>
    <p class="p-b"> Si tienes alguna sugerencia o comentario, proporciona los datos que se solicitan a continuación. Elige el servicio a quien está dirigido y después presiona el botón "Enviar". </p> 
    <p class="p-b"> Consulta nuestras <a href="http://11.32.41.22/deps_wp/deps_wp/sitio_wp/aviso-de-privacidad/"> políticas de privacidad. </a>
    </p></div>

   <?php echo do_shortcode( '[contact-form-7 id="1203" title="Buzón de contacto"] ' ); ?>

<!--/*Pié-->
<?php include('footer.php'); ?> 
<style>
  .wpcf7-form {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
justify-content:center;
}

.wpcf7 select {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin: 0;
margin-bottom: 7px;
margin-top: 7px;
    padding: 10px;
    text-indent: 0px;
    width: 80%;
    z-index: 100;
}

.wpcf7-form-control{
  border: 2px solid #eee;      /* borde para el formulario */
  padding:12px 16px 8px 28px;
  -webkit-border-radius: 4px;  /* bordes redondeados */
  -moz-border-radius: 4px;
  border-radius: 4px;
  margin-top: .5rem;
}

.flex-item {
    display: flex;
    flex-direction: column;
    flex-basis: 5%;
    margin:auto;
}
.wpcf7 {
  background-color: #f5f5f5;   /* Color de fondo */
  border: 2px solid #eee;      /* borde para el formulario */
  padding:20px 10px 10px 10px;
  -webkit-border-radius: 4px;  /* bordes redondeados */
  -moz-border-radius: 4px;
  border-radius: 4px;
margin-top: 4rem;

}
.wpcf7-submit{
background-color: #ff9e2b!important;
    color: white!important;
    border: 2px solid #ccc;
    border-radius: 20px;
    padding: 0.5rem 0.1rem 0.5rem;
    width: 150px;
}
label{
padding: 1rem;
}
.f-h3{
margin-top: 8rem;
text-align: center;
margin-bottom: 2rem;
font-size: 28px;
color: #339999;
}
.p-b{
margin: 2rem 2rem 2rem;
}
.p-b a{
margin-top: .5rem;
color: #339999;
}
.t-b {
margin-bottom: 2px;
}

</style>
