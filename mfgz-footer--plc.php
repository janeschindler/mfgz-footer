<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="container-fluid">
      <div class="row">
          <div class="site-footer-inner col-sm-12">
              <div class="row">
                  <div class="col-sm-4 footer__links">
                      <div class="footer__link">
                          <a href="https://museum-gestaltung.ch/<?php print __('[:de]de[:en]en[:fr]fr'); ?>/kontakt/"><?php print __('[:de]Kontakt[:en]Contact[:fr]Contact[:]'); ?></a>
                      </div>
                      <div class="footer__link">
                        <a href="https://museum-gestaltung.ch/<?php print __('[:de]de[:en]en[:fr]fr'); ?>/pressebereich/"><?php print __('[:de]Medien[:en]Media[:fr]Média[:]'); ?></a>
                      </div>
                      <div class="footer__link">
                        <?php $discl_link = 'https://museum-gestaltung.ch/'.__('[:de]de[:en]en[:fr]fr[:]').'/disclaimer/'; ?>
                        <a href="<?php print $discl_link; ?>"><?php print __('[:de]Rechtliches / Impressum[:en]Legal information / Credits[:fr]Mentions légales / Crédits[:]'); ?></a>
                      </div>
                      <!--<div class="footer__link">
                        TODO Datenschutz!
                      </div>-->
                  </div>
                  <div class="col-sm-4 footer__links">
                    <ul class="social-links">
                      <li class="facebook"><a href="https://www.facebook.com/PavillonLeCorbusier/" target="_blank">u</a></li>
                      <li class="instagram"><a href="https://www.instagram.com/pavillonlecorbusier/" target="_blank">y</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4 footer__links">
                    <div class="footer__organisation">
                        <?php print __('[:de]Ein Angebot von:[:en]An offer of: [:fr]Une offre de:[:]'); ?><br />
                        <a href="https://www.stadt-zuerich.ch/kultur/de/index.html" target="_blank">Kultur Stadt Zürich</a><br /><br />
                        <?php print __('[:de]Inhalt und Betrieb:[:en]Content and operation:[:fr]Contenu et administration:[:]'); ?><br />
                        <a href=" https://museum-gestaltung.ch/de" target="_blank">Museum für Gestaltung Zürich</a>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div><!-- close .container -->
</footer><!-- close #colophon -->