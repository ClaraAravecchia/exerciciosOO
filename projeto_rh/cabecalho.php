<?php

	$c = new CabecalhoHTML();
	$v = array("funcao"=>"Função","regiao"=>"Região","pais"=>"País","localizacao"=>"Localização");
	$c->add_menu($v);
	$c->exibe();

?>