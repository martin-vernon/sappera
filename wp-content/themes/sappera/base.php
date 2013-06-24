<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <section id="sappera">
      <div class="wrap container" role="document">
          <div class="content row">
              <div class="span8">
                  <h5 class="white">Sappera</h5>
                  <hr>
                  <h2><span class="yellow">Sappera is an emerging Commodities Trading company dealing in minerals resources globally,</span> <span class="white">with presence in China, UK, Dubai, Johannesburg, Durban and Kigali.</span></h2>
              </div>
          </div>
      </div>
      <div class="scroll_down hidden-phone">
          <a href="#about" class="scrollLink">scroll down<i class="icon-caret-down icon-4x"></i></a>
      </div>
      <div class="sec_background top left">
          <img src="<?= get_stylesheet_directory_uri();?>/assets/img/sappera-lrg.jpg" style="min-height: 559px; min-width: 1246px;"/>
      </div>
  </section>
  <section id="about">
      <div class="wrap container" role="document">
          <div class="content row">
              <div class="span8">
                  <h2>Sappera is an emerging diversified mineral resources company focused on Commodities sourcing, mining and trading.</h2>
                  <hr>
              </div>
          </div>
          <div class="content row">
              <div class="span4">
                  <p>As a leading integrated producer and marketer of commodities with a well-balanced portfolio of resources assets, we are strongly positioned to unlock value at every stage of the supply chain, from sourcing materials deep underground to delivering products to an international customer base.</p>
              </div>
              <div class="span4">
                  <p>The Group’s operational and marketing activities are supported by offices in China, UK, Dubai, Johannesburg and Kigali. Our fast growing network of operations aims for a global reach and will soon include Gabon, Chile, Mozambique and Turkey.</p>
              </div>
              <div class="span4">
                  <p>Entrepreneurial by nature, we strive for excellence and sustainability, carefully matching customers requirements with our supply chain organization. We deliver value and support the community in which we do business.</p>
              </div>
          </div>
      </div>
      <div class="sec_background bottom left">
          <img src="<?= get_stylesheet_directory_uri();?>/assets/img/about-lrg.jpg" />
      </div>
  </section>
  <section id="strategy">
      <div class="sec_background bottom right hidden-phone">
          <img src="<?= get_stylesheet_directory_uri();?>/assets/img/strategy.jpg" style="width:866px; height:762px;"/>
      </div>
      <div class="wrap container" role="document">
          <div class="content row">
              <div class="span8">
                <h2 class="light-grey">Strategy</h2>
                <hr>
              </div>
          </div>
          <div class="content row">
              <div class="span7">
                  <h5 class="light-grey strSubHead">Sappera’s strategy is to maintain and build strong relationships with diversified natural resources companies on the ground, leveraging their presence to build a large scale operation.</h5>
              </div>
          </div>
          <div class="content row">
              <div class="span4">
                <h5 class="light-grey">Conflict-Free minerals policy</h5>
              </div>
          </div>
          <div class="content row">
              <div class="span4">
                  <p class="grey">In the United States, the enacted Dodd-Frank Wall Street Reform and Consumer Protection Act, HR 4173, Section 1502 (“Act”) includes provisions directing the Securities and Exchange Commission to promulgate new rules for SEC-reporting companies (both domestic and foreign) that use “conflict-minerals” originating in the Democratic Republic of Congo (“DRC”) or adjoining countries, in an attempt to address the violent conflict in the DRC.</p>
                  <p class="grey">While no member of Sappera is a SEC-reporting company, we are nevertheless, as a worldwide player in marketing and sourcing metals, minerals, ores and concentrates, committed to cooperating with our customers and business partners in their compliance.</p>
              </div>
              <div class="span4">
                  <p class="grey">with the Act and in furthering the objectives of the OECD Due Diligence guidance We take steps to identify and assess risk in the supply chain and will make continued efforts to verify that minerals from the conflict region do not enter our supply chain. Sappera has engaged with ITSCI to become a full member of ITRI.</p>
                  <h5 class="light-grey">Supply management policies</h5>
                  <p class="grey">All our minerals products follow a stringent “Tagged-and-bagged” system under ITRI-ITSCI supervision in Rwanda.</p>
              </div>
              <div class="span4">
                  <img src="<?=  get_stylesheet_directory_uri();?>/assets/img/stamp.png" />
              </div>
          </div>
      </div>
  </section>
  <section id="business">
      <div class="wrap container" role="document">
          <div class="content row">
              <div class="span8">
                  <h2>Our Business</h2>
                  <hr>
              </div>
          </div>
          <div class="content row">
              <div class="span8">
                  <div class="row">
                      <div class="span3">Operations Worldwide&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-circle yellow"></i></div>
                      <div class="span3">Future Operations&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-circle"></i></div>
                  </div>
                  <img class="busImg" src="<?= get_stylesheet_directory_uri();?>/assets/img/bus-map.jpg" />
              </div>
              <div class="span3 busText">
                <h4>Our commodities products in use in life</h4>
                <p>
                    <strong>Tin and Tantalum</strong><br/>
                    Electronic capacitors<br/>
                    Trabecular metal implants<br/>
                </p>
                <p>
                    <strong>Manganese</strong><br/>
                    Industrial  iron and steel production<br/>
                    Low-cost stainless steel formulations<br/>
                </p>
                <p>
                    <strong>Coal</strong><br/>
                    Electricity production<br/>
                    Steel manufacturing<br/>
                </p>
                <p>
                    <strong>Iron Ore</strong><br/>
                    Construction / Infrastructure<br/>
                    Building and construction<br/>
                </p>
                <p>
                    <strong>Used Rails</strong><br/>
                    Railway recycling
                </p>
              </div>
          </div>
      </div>
  </section>
  <section id="sustain">
      <div class="sec_background bottom right hidden-phone">
          <img src="<?= get_stylesheet_directory_uri();?>/assets/img/sustain.jpg" style="width:788px; height:763px;"/>
      </div>
      <div class="wrap container" role="document">
          <div class="content row">
              <div class="span8">
                  <div class="pull-left"><h2>Sustainability</h2></div>
                  <div class="pull-right"><img class="pull-right" src="<?= get_stylesheet_directory_uri();?>/assets/img/sus-logo.png" /></div>
              </div>
          </div>
          <div class="content row">
              <div class="span8">
                <hr>
              </div>
          </div>
          <div class="content row">
              <div class="span4">
                  <h4 class="white">Our Approach</h4>
                  <p>We believe sustainability is integral to how we do business, reflecting our belief that our long-term success requires us to prioritize sustainability throughout our business.</p>
                  <p>We realize that our work can have an impact on society and the environment. We are commiaed to improving our performance in human rights, health and safety, environmental protection and compliance.</p>
                  <p>In all our operations, we constantly strive to improve how we manage our health, safety and environmental practices, the welfare of all our workers and our support for the development and well-being of the communities in which we work. We are open and transparent in our engagement with our stakeholders.</p>
                  <p>Our number one priority in the workplace is to protect the health and well-being of all our workers. We take a proactive approach to health and safety and we are commiaed to ensuring a continuous improvement in the prevention of occupational disease and injuries.</p>
              </div>
          </div>
      </div>
  </section>
  <section id="contact">
      <div class="wrap container" role="document">
        <div class="content row">
          <div class="span8">
              <h2>Contact Us</h2>
              <hr>
          </div>
        </div>
        <div class="contact content row">
          <div class="span6"><?php echo do_shortcode('[contact-form-7 id="16" title="Contact form 1"]');?></div>
          <div class="span2">
              <span style="font-weight: 600;">Sappera DMCC</span><br/>
              Head Office<br/>
              P.O. Box 48999<br/>
              Al Mass Tower<br/>
              Dubai<br/>
              United Arab Emirates<br/>
          </div>
        </div>
      </div>
      <div class="back_to_top">
          <a href="#top" class="scrollLink"><i class="icon-caret-down icon-flip-vertical icon-4x"></i>Back to top</a>
      </div>
  </section>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
