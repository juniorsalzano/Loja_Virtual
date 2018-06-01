<?php
  Class Rotas{

  	public static $pag;

  	private static $pasta_Controller = 'controller';
  	private static $pasta_View       = 'view';

  	Static function get_SiteHOME(){
  	  return Config::SITE_URL.'/'.Config::SITE_PASTA;
  	}

  	Static function get_SiteRaiz(){
  	  return $_SERVER['DOCUMENT_ROOT'].'/'.Config::SITE_PASTA;
  	}

  	Static function get_SiteTEMA(){
  	  return self::get_SiteHOME().'/'.self::$pasta_View;
  	}

    Static function pag_Carrinho(){
      return self::get_SiteHOME().'/carrinho';	
    }
  
  	
  	Static function get_Pagina(){
 		  
 		  if(isset($_GET['pag'])){

 		  	$pagina = $_GET['pag'];
 		    
 		    self::$pag = explode('/',$pagina);

 		    $pagina = 'controller/'.self::$pag[0].'.php';
 		    //$pagina = 'controller/'.$_GET['pag'].'.php';
 		    
 		    if (file_exists($pagina)){
 		      include $pagina;
 		    }else{
 		  	  include 'erro.php';
 		    }  
 		  }
  	}
  } 
 ?>