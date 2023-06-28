<?php
$this->layout("_theme");
?>
    <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto align-self-center">
            <div class="site-block-cover-content text-center">
              <h1 class="mb-0">About <strong class="text-primary">Pharmative</strong></h1>
              <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non quibusdam vel quidem.</p>
                </div>
              </div>
              <p><a href="#" class="btn btn-primary px-5 py-3">Shop Now</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h3 class="text-black h4">Why Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem assumenda, delectus. Amet repellendus quidem, fugiat.</p>
            
          </div>
          <div class="col-lg-4">
            <h3 class="text-black h4">History</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda iste aut, ut similique nobis ab?</p>
            
          </div>
          <div class="col-lg-4">
            <h3 class="text-black h4">Awards</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nisi magni in fugit, ad laudantium.</p>
            
          </div>
        </div>
      </div>
    </div>    

    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">


          <div class="title-section text-center col-md-7">
            <h2>Perguntas<strong class="text-primary">  Frequentes</strong></h2>
          </div>

        </div>
        <div class="container">
         <h1>Perguntas frequentes</h1>

         <table class = "table table-striped">
            <tr>
                <th scope="col">Pergunta</th>
                <th scope="col">Resposta</th>
            </tr>
         </table>
         <tbody>
            <?php
            foreach($faqs as $faq){
            ?>
            <tr>
                <td><?= $faq->question; ?></td>
                <td><?= $faq->answer; ?></td>
            </tr>
            <?php
            }
            ?>
         </tbody>
         </tablr>
</div>
  