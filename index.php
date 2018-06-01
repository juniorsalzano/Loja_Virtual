<?php 
	require './lib/autoload.php';

	$smarty = new Template();
	Rotas::get_Pagina();
	
	//valores para o template
	$smarty->assign('NOME', 'Junior Salzano');
	$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
	$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
	$smarty->display('index.tpl');
?>