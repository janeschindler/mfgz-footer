<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="container-fluid">
    <div class="row">
      <div class="site-footer-inner col-sm-12">
        <div class="row">
          <div class="col-sm-4 footer__links">
            <div class="footer__link">
              Museum <br>für Gestaltung <br>Zürich<br/><br/>
              eGuide
            </div>
          </div>
          <div class="col-sm-4 footer__links">
            <div class="footer__link">
              <a href="https://museum-gestaltung.ch/<?php print __('[:de]de[:en]en[:fr]fr'); ?>/kontakt/" target="_blank"><?php print __('[:de]Kontakt[:en]Contact[:fr]Contact[:]'); ?></a>
            </div>
            <div class="footer__link">
              <?php $discl_link = 'https://museum-gestaltung.ch/'.__('[:de]de[:en]en[:fr]fr[:]').'/rechtliche-hinweise/'; ?>
              <a href="<?php print $discl_link; ?>" target="_blank"><?php print __('[:de]Rechtliches / Impressum[:en]Legal information / Credits[:fr]Mentions légales / Crédits[:]'); ?></a>
            </div>
            <div class="footer__link">
              <?php $discl_link = 'https://museum-gestaltung.ch/'.__('[:de]de[:en]en[:fr]fr[:]').'/datenschutz/'; ?>
              <a href="<?php print $discl_link; ?>" target="_blank"><?php print __('[:de]Datenschutz[:en]Data protection[:fr]Confidentialité[:]'); ?></a>
            </div>
            <ul class="social-links social-links--margin">
              <li class="facebook"><a href="http://www.facebook.com/pages/Zurich-Switzerland/Museum-fur-Gestaltung-Zurich/74825495877?ref=ts" target="_blank">u</a></li>
              <li class="instagram"><a href="https://instagram.com/museumgestaltung/" target="_blank">y</a></li>
              <li class="youtube"><a href="https://www.youtube.com/channel/UCiYgRdZ5GYQr6eFxPyqPXHg" target="_blank"><img src="/wp-content/themes/_tk/mfgz-shared/mfgz-footer/youtube.svg" alt="youtube"/></a></li>
              <li class="twitter"><a href="https://twitter.com/Design_Museum" target="_blank">x</a></li>
            </ul>
          </div>
          <div class="col-sm-4 footer__links">
            <div class="row footer__link footer__link--noborder">
              <div class="col-sm-6">
                <?php print __('[:de]Das Museum der[:en]The museum of[:fr]Le musée de la[:]'); ?>
                  <br/>
                <?php print __('[:de]Zürcher Hochschule der Künste[:en]Zurich University of the Arts[:fr]Haute école des arts de Zurich[:]'); ?>
              </div>
              <div class="col-sm-6">
                <div class="zhdk-img">
                  <a href="http://<?php print __('[:de]zhdk.ch[:en]zhdk.ch/en[:fr]zhdk.ch/en[:]'); ?>" target="_blank" ><img src="<?php print get_template_directory_uri(); ?>/includes/2018_zhdk_logo_weiss.svg" alt="ZHDK Logo"/></a>
                </div>
              </div>
            </div>
            <div class="row footer__link footer__link--noborder fk-link">
              <div class="col-sm-6">
                <?php print __('[:de]Mit freundlicher Unterstützung von[:en]With the kind support of[:fr]Avec le soutien de[:]'); ?>
              </div>
              <div class="col-sm-6">
                <div class="fk-img">
                  <a href="https://museum-gestaltung.ch/<?php print __('[:de]de[:en]en[:fr]fr'); ?>/freundeskreis/" target="_blank"><img src="/wp-content/themes/_tk/mfgz-shared/mfgz-footer/FK_Logo.svg" alt="Freundeskreis Logo"/></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- close .container -->
</footer><!-- close #colophon -->
