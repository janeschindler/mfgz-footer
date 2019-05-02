<!-- FOOTER MUSEUM -->
<?php
    $environment = get_bloginfo('url');

    if (strpos($environment, 'eguide.pavillon-le-corbusier') !== false||strpos($environment, 'plceguide') !== false) {
        include_once('mfgz-footer--plc-eguide.php');
    } else if (strpos($environment, 'pavillon-le-corbusier') !== false||strpos($environment, 'plc') !== false) {
        include_once('mfgz-footer--plc.php');
    } else if (strpos($environment, 'eguide') !== false) {
        include_once('mfgz-footer--eguide.php');
    } else {
        include_once('mfgz-footer--mfgz.php');
    }
?>
