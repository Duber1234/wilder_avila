<?php if ( ! defined('BASEPATH')) exit('No se permite el acceso directo al script');
require 'C:\xampp\htdocs\wilder_avila\vendor\twilio\sdk\src\Twilio\autoload.php';
use Twilio\Rest;
class client extends Client{
   //funciones que queremos implementar en Miclase.

  function __construct() { 
		parent::__construct(); 
	}
}

?>