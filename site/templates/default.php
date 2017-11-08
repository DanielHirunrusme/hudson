<?php snippet('header') ?>

  <main class="main page-template" data-template="home" role="main">

    
    
    <div class="text home-hero">
      
  	  <?php snippet('about-header') ?>
    
      <div class="home-callout" data-module-init="callout">
        <div class="text">
          <h1 class="line-header hero"><span>Our</span><span class="underline"></span><span>Work</span></h1>
        </div>
      </div>
      <!-- /home-callout -->
    
    </div>
    <!-- /home-hero -->
    
    
	
	<div class="page-container">
    
    
      <section id="services">
        <h6>Beginning to end.<br>Research. Strategize. Concept. Design. Execute.</h6>
        <div class="service-list">
          <ul>
            <li class="service-header">Advertising</li>
            <li>360 advertising campaigns</li>
            <li>New Brand Initiatives<li>
            <li>Experiential Marketing<li>
            <li>Brand Collaborations<li>
          </ul>
          <ul>
            <li class="service-header">Digital</li>
            <li>INNOVATIVE DIGITAL SITE EXPERIENCES<li>
            <li>DIGITAL EDITORIAL CONTENT + CREATION<li>
            <li>INFLUENCER MARKETING<li>
            <li>VIDEO<li> 
          </ul>
          <ul>
            <li class="service-header">Print</li>
            <li>Print Collateral<li>
            <li>In-Store Experience<li>
            <li>Branding + Identity<li>
            <li>Packaging<li>
          </ul>
        </div>
      </section>

     
      <a href="<?= $pages->find('work')->url() ?>">
      <section id="work-callout" class="page-callout footer-callout">
        <div class="inner-container">
          <h1 class="line-header hero"><span>Our</span><span class="underline"></span><span>Work</span></h1>
        </div>
        
      </section>
      </a>
      
    </div>
	
  
  
  
  

  </main>
	
    
    
<?php snippet('footer') ?>