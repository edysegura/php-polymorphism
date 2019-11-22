<?php
//pacote com as outras classes
require_once("pkg_instrumento.php");
//fabrica de objetos
class instrumentoFactory
{
  private $vo_instrumento;
	public function getInstrumento($vs_instrumento)
	{
		switch($vs_instrumento)
		{
			 case "s": $this->vo_instrumento = new saxofone; break;
			 case "p": $this->vo_instrumento = new piano;    break;
			 case "v": $this->vo_instrumento = new violao;   break;
			 case "b": $this->vo_instrumento = new bateria;  break;
		}
		return $this->vo_instrumento;
	}
}
?>