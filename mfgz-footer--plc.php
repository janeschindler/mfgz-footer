<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="container-fluid">
      <div class="row">
          <div class="site-footer-inner col-sm-12">
              <div class="row">
                  <div class="col-sm-4 footer__links">
                      <div class="footer__link">
                          <a href="<?php print __('[:de]de[:en]en[:fr]fr'); ?>/ueber-uns"><?php print __('[:de]Kontakt[:en]Contact[:fr]Contact[:]'); ?></a>
                      </div>
                      <div class="footer__link">
                        <a href="https://museum-gestaltung.ch/<?php print __('[:de]de[:en]en[:fr]fr'); ?>/pressebereich" target="_blank"><?php print __('[:de]Medien[:en]Media[:fr]Média[:]'); ?></a>
                      </div>
                      <div class="footer__link">
                        <?php $discl_link = '/'.__('[:de]de[:en]en[:fr]fr[:]').'/rechtliche-hinweise'; ?>
                        <a href="<?php print $discl_link; ?>"><?php print __('[:de]Rechtliches / Impressum[:en]Legal information / Credits[:fr]Mentions légales / Crédits[:]'); ?></a>
                      </div>
                      <div class="footer__link">
                        <?php $discl_link = '/'.__('[:de]de[:en]en[:fr]fr[:]').'/rechtliche-hinweise'; ?>
                        <a href="<?php print $discl_link; ?>"><?php print __('[:de]Datenschutz[:en]Privacy[:fr]Confidentialité[:]'); ?></a>
                      </div>
                  </div>
                  <div class="col-sm-4 footer__links">
                    <ul class="social-links">
                      <li class="facebook"><a href="https://www.facebook.com/PavillonLeCorbusier/" target="_blank">u</a></li>
                      <li class="instagram"><a href="https://www.instagram.com/pavillonlecorbusier/" target="_blank">y</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4 footer__links">
                    <div class="footer__organisation">
                        <?php print __('[:de]Ein Angebot von:[:en]An offer of:[:fr]Une offre de:[:]'); ?><br />
                        <a href="https://www.stadt-zuerich.ch/kultur/de/index.html" target="_blank">Kultur Stadt Zürich</a><br /><br />
                        <?php print __('[:de]Leitung und Kuratorium:[:en]Direction and curation:[:fr]Direction et commissariat:[:]'); ?><br />
                        <a href=" https://museum-gestaltung.ch/<?php print __('[:de]de[:en]en[:fr]fr'); ?>" target="_blank">Museum für Gestaltung Zürich</a>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div><!-- close .container -->
</footer><!-- close #colophon -->
