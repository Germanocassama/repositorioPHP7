<?php 
/* Template é uma metodologia que nos permite separar a programação lógica (PHP) da visual (HTML), o que torna o seu projeto mais organizado e seu código-fonte mais bonito aos olhos de terceiros.
*/
require_once "vendor/autoload.php";


use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/", // precisa da pasta TPL
    "cache_dir"     => "cache/" // precisa da pasta cache
);
Tpl::configure( $config );
// caminho da classe TPL
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Germano sadjo cassama" );
$tpl->assign( "version", PHP_VERSION );
$tpl->assign("date", date("d/m/Y H:i:s"));
// assign an array
// draw the template -- desenhar tamplate o seu tamplate
$tpl->draw( "index" );

/////////////////////////////////////////////////////////////////////////


 ?>