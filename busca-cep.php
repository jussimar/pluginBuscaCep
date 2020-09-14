<?php
/**
 * Plugin Name: Busca Pelo Cep
 * Description: Plugin que busca dados do endereço de uma pessoa pelo cep
 * Version: 1.0
 * Author: Jussimar Leal
 * Author URI: http://www.jussimarleal.com.br
 */

 function busca_cep(){
   return '<h3> Teste cep </h3>'
 }

 add_shortcode('buscaCep','busca_cep');