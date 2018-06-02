<?php 
	require './lib/autoload.php';

	$smarty = new Template();
	
	//valores para o template
	$smarty->assign('NOME', 'Junior Salzano');
	$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
	$smarty->assign('PAG_HOME', Rotas::get_SiteHOME());
	$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
	$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
	$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
	$smarty->display('index.tpl');
?>