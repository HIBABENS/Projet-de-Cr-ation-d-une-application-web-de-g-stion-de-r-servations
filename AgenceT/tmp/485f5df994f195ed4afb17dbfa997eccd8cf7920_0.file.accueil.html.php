<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 07:12:15
  from 'C:\xampp1\htdocs\AgenceT\views\accueil.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eec654f0b7860_77445824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '485f5df994f195ed4afb17dbfa997eccd8cf7920' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\AgenceT\\views\\accueil.html',
      1 => 1592550726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:navbar.html' => 1,
    'file:slides.html' => 1,
    'file:cards.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5eec654f0b7860_77445824 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
	<?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender('file:navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	

<!--Main Navigation-->

<!--Main layout-->
<main class="mt-5 rgba(121, 85, 72, 0.1) rgba-brown-slight" >
<?php $_smarty_tpl->_subTemplateRender('file:slides.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container">

<!--Secssion: bestof-->
    <section id="bestof" class="text-center">
      <br><br>
       <h2 class="mb-4 text-center font-weight-bold">Maroc Travel</h2>
       <!--Grid row-->
       <div class="row d-flex justify-content-center mb-4">

           <!--Grid colomn-->
           <div class="col-md-8">
              <!--Description-->
              <p>  </p>
           </div>
           <!--Grid colomn-->   
      </div>   
        <!--Grid row-->   

         <!--Grid row-->  
         <div class="row">
           <!--Grid colomn--> 
           <div class="col-md-4 mb-4">
             <i class="fa fa-camera-retro fa-4x cyan-text"></i>
             <h4 class="my-4">Experience</h4><p>Terre de contrastes saisissants, Le Maroc possède une atmosphère unique et inoubliable et offre 1001 voyages que nous vous invitons à découvrir au travers de nos activités et excursions.</p>             
           </div>
           <!--Grid colomn--> 

           <!--Grid colomn--> 
           <div class="col-md-4 mb-4">
             <i class="fa fa-heart fa-4x cyan-text"></i>
             <h4 class="my-4">Hapiness</h4>
             <p> Marrakech c’est aussi un arrière-pays riche et surprenant, nous vous emmenons aus régions. Une randonnée pédestre au travers des villages authentiques et des sites naturels merveilleux où vous vous sentirez en total harmonie avec la nature, la variété des paysages est à couper le souffle et la chaleur des rencontres humaines marquera certainement vos esprits.</p>
           </div>
           <!--Grid colomn--> 

           <!--Grid colomn--> 
           <div class="col-md-4 mb-4">
             <i class="fa fa-bicycle fa-4x cyan-text"></i>
             <h4 class="my-4">Aventure</h4>
             <p>Aventure et découverte ! Une excursion incontournable offrant un aperçu complet des paysages de haute montagne, de ses sommets enneigés à ses plateaux désertiques, une véritable rencontre avec le vrai Maroc et ses habitants de l’Atlas.</p>
           </div>
           <!--Grid colomn--> 

         </div>
         <!--Grid row-->  
       
         <!--Grid row-->  

    <hr class="my-5"></section>

    <!--Secssion: Examples-->
    <section id="examples">
      <!--GridRow-->
      
    </section>
    <hr class="my-5">

  	 <!--Secssion: Gallery-->
    <section id="gallery" >
    	<br><br>
    	 <h2 class="mb-4 text-center font-weight-bold">Choisissez votre thème</h2>
      
<?php $_smarty_tpl->_subTemplateRender('file:cards.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--Secssion: Examples-->
    <section id="examples">
      <!--GridRow-->
      
    </section>
    <hr class="my-5">

   

    <!--Secssion: Contact-->
    <section id="best-featurs">
      <!--Section: Contact v.1-->
<section class="section pb-5">

  <!--Section heading-->
  <h2 class="section-heading h1 pt-4">Contact</h2>
  <!--Section description-->
 
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 mb-4">

      <!--Form with header-->
      <div class="card">

        <div class="card-body">
          <!--Header-->
          <div class="form-header  ">
            <h3><i class="fas fa-envelope cyan-text"></i> Afin que nous revenions vers vous, veuillez remplir le formulaire ci dessous :</h3>
          </div>
          <br>
<form method="post" action="accueil.php">
          <!--Body-->
          <div class="md-form">
            <i class="fas fa-user prefix grey-text"></i>
            <input name="nom" type="text" id="form-name" class="form-control">
            <label for="form-name">Votre Nom</label>
          </div>

          <!-- Material input -->
<div class="md-form">
  <i class="fas fa-envelope prefix grey-text"></i>
  <input name="email" type="email" id="inputValidationEx" class="form-control validate">
  <label for="inputValidationEx" data-error="wrong" data-success="right">Votre Email</label>
</div>

			 <div class="md-form">
             <i class="fas fa-phone-alt prefix grey-text"></i>
            <input name="tel" type="text" id="form-name" class="form-control">
            <label for="form-name">Téléphone</label>
          </div>

          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <input name="sujet" type="text" id="form-Subject" class="form-control">
            <label for="form-Subject">Sujet</label>
          </div>

          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea name="msg" id="form-text" class="form-control md-textarea" rows="3"></textarea>
            <label for="form-text">Message</label>
          </div>

          <div class="text-center mt-4">
            <button name="contact" class="btn btn-light-blue">Envoyer</button>
          </div>

        </div>

      </div>
      
</form>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating  accent-1"><i class="fas fa-map-marker-alt"></i></a>
          <p>Marrakech, Geliz</p>
          <p>Maroc</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating  accent-1"><i class="fas fa-phone"></i></a>
          <p>+ 212 234 567 89</p>
          <p>Mon - Fri, 8:00-22:00</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating  accent-1"><i class="fas fa-envelope"></i></a>
          <p>info@gmail.com</p>
          <p>sale@gmail.com</p>
        </div>
      </div>

    </div>
    <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.1-->

    <hr class="my-5">
</div>
</main>
<!--Main layout-->



<?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 type="text/javascript">
  
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
