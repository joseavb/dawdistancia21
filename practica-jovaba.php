<?php
/**
 * Advanced Web Interface to phpDocumentor
 *
 * PHP versions 4 and 5
 *
 * @category   DAW
 * @package    phpDocumentor
 * @author     Jose Antonio Vallecillo Barroso
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link       http://pear.php.net/package/PhpDocumentor
 * @see        phpdoc.php
 * @filesource
 * @todo       CS cleanup - change package to PhpDocumentor
 * @deprecated redirects automatically to docbuilder 
 *             (see {@link docbuilder/index.html})
 * @global: variable con valor por defecto para saludo
 */

class inventado{
    
        /*# 
       
     */
    protected $saludoPrivate = "Hola compis";

   /**
    * Funcion que permite obtener el valor de la variable saludo
    * @function getHolaMundo
    * @version 1.2
    * @return String
    * @desc obtiene el saludo
    * @author Jose Antonio Vallecillo Barroso
    */

    function getHolaMundo(){   
        return $this->$saludoPrivate;
    }

     /**
    * Funcion que permite setear el valor de la variable saludo
    * @function setHolaMundo
    * @version 1.2
    * @desc setea el saludo
    * @author Jose Antonio Vallecillo Barroso
    */
    function setHolaMundo($saludo){
      $this->$saludoPrivate =  $saludo;
    }
    
}
