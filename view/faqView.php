<?php
$title = 'FAQ';
include('header.php')
?>



    <div class="container my-5">

        <style>
          .w-10 {
            width: 3rem
          }
        </style>
      
        <!--Section: Content-->
        <section class="">
      
          <h6 class="font-weight-normal text-uppercase font-small grey-text mb-4 text-center">FAQ</h6>
          <!-- Section heading -->
          <h3 class="font-weight-bold white-text mb-4 pb-2 text-center">Service d'aide</h3>
          <hr class="w-10">
          <!-- Section description -->
          <p class="lead text-muted mx-auto mt-4 pt-2 mb-5 text-center">Got a question? We've got answers. If you have some other questions, see our support center.</p>
      
          <section class="row">
            <section class="col-md-12 col-lg-10 mx-auto">
            
              <!--Accordion wrapper-->
              <section class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
      
                <!-- Accordion card -->
                <section class="card border-top border-bottom-0 border-left border-right border-light">
      
                  <!-- Card header -->
                  <section class="card-header bg-color border-bottom border-light" role="tab" id="headingOne1">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                      aria-controls="collapseOne1">
                      <h5 class="white-text font-weight-normal mb-0">
                          Qu'est ce que Kornflix?<i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </section>
      
                  <!-- Card body -->
                  <section id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                    data-parent="#accordionEx">
                    <section class="card-body bg-color ">
                        Streaming Kornflix Kornflix est un service de diffusion en streaming qui permet à ses membres 
                        de regarder une grande variété de séries TV, films, documentaires, etc. 
                        sur des milliers d'appareils connectés à Internet. Avec Kornflix, 
                        vous pouvez regarder un nombre illimité de titres, sans aucune publicité. 
                        Nous proposons sans cesse des nouveautés et, tous les mois, 
                        de nouveaux films et séries TV.
                        Si vous êtes déjà utilisateur de Kornflix et souhaitez savoir mieux 
                        utiliser nos services, consultez Premiers pas avec Kornflix.
                    </section>
                  </section>
      
                </section>
                <!-- Accordion card -->
      
                <!-- Accordion card -->
                <section class="card border-bottom-0 border-left border-right border-light">
      
                  <!-- Card header -->
                  <section class="card-header bg-color border-bottom border-light" role="tab" id="headingTwo2">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                      aria-expanded="false" aria-controls="collapseTwo2">
                      <h5 class="white-text font-weight-normal mb-0">
                          Facturation et paiement<i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </section>
      
                  <!-- Card body -->
                  <section id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                    data-parent="#accordionEx">
                    <section class="card-body bg-color">
                        Kornflix est un service d'abonnement prépayé permettant de regarder un nombre illimité de séries TV 
                        et de films sur tous vos appareils (ordinateurs portables, téléviseurs, téléphones et tablettes). 
                        Les abonnés Kornflix sont prélevés automatiquement tous les mois, 
                        à la date à laquelle ils se sont inscrits. Lisez ce qui suit pour en savoir plus sur 
                        le prix des abonnements Kornflix, les modes de paiement, les frais, etc.

                        Si vous êtes un nouvel utilisateur de Kornflix et souhaitez en savoir plus sur notre service, consultez l'article Premiers pas avec Kornfli
                    </section>
                  </section>
      
                </section>
                <!-- Accordion card -->
      
                <!-- Accordion card -->
                <section class="card border-bottom-0 border-left border-right border-light">
      
                  <!-- Card header -->
                  <section class="card-header bg-color border-bottom border-light" role="tab" id="headingThree3">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                      aria-expanded="false" aria-controls="collapseThree3">
                      <h5 class="white-text font-weight-normal mb-0">
                          J'ai des problème d'images lorsque j'essaie de regarder Kornflix
                          <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </section>
      
                  <!-- Card body -->
                  <section id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                    data-parent="#accordionEx">
                    <section class="card-body bg-color">
                        Si Kornflix ne fonctionne pas, le problème peut venir de la connectivité réseau, de l'appareil,
                        ou de votre application ou compte Kornflix.
                        Pour pouvoir retrouver le service de streaming, 
                        vérifiez si vous voyez un code ou un message d'erreur à l'écran et saisissez-le dans 
                        la barre de recherche dessous. Si aucun code ou message d'erreur n'est associé à votre problème,
                        effectuez une recherche en décrivant celui-ci, par exemple "je vois un écran noir" ou "je n'arrive pas à m'identifier".
                        
                    </section>
                  </section>
      
                </section>
                <!-- Accordion card -->
                
                <!-- Accordion card -->
                <section class="card border-left border-right border-light">
      
                  <!-- Card header -->
                  <section class="card-header bg-color border-bottom border-light" role="tab" id="headingThree4">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
                      aria-expanded="false" aria-controls="collapseThree4">
                      <h5 class="white-text font-weight-normal mb-0">
                          Je ne parviens pas à m'Identifier <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </section>
      
                  <!-- Card body -->
                  <section id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
                    data-parent="#accordionEx">
                    <section class="card-body bg-color">
                        Si vous n'arrivez pas à vous identifier sur votre compte Kornflix, 
                        cela signifie généralement que votre dernière tentative de connexion ne s'est pas terminée correctement 
                        ou que des informations d'un compte inactif sont enregistrées sur votre appareil. Suivez les étapes de résolution 
                        indiquées ci-dessous pour remédier au problème.

                        Si vous avez oublié votre adresse e-mail ou votre mot de passe, 
                        ou si vous n'y avez plus accès, consultez l'article J'ai oublié mon identifiant 
                        ou mon mot de passe Kornflix pour réinitialiser les informations de votre compte et récupérer l'accès à celui-ci.    
                    </section>
                  </section>
      
                </section>
                <!-- Accordion card -->
      
              </section>
              <!-- Accordion wrapper -->
              
              
            </section>
          </section>
      
        </section>
        
      </section>

<?php
include('footer.php')
?>
