<?php 
//check if Elementor is installed

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function ecs_dependencies(){
  $ecs_elementor=true;
  if(function_exists('get_blog_option')){
    $ecs_multi_site = get_blog_option(get_current_blog_id(), 'active_plugins');
    $ecs_multi_site = isset($ecs_multi_site) ? $ecs_multi_site : [];
    $ecs_multi_sitewide=get_site_option( 'active_sitewide_plugins') ;
    if (is_array($ecs_multi_sitewide)) foreach($ecs_multi_sitewide as $ecs_key => $ecs_value){
      $ecs_multi_site[] = $ecs_key;  
    }
    $ecs_plugins = $ecs_multi_site;
  }
  else{
    $ecs_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );
  }

  if ( !in_array( 'elementor/elementor.php',$ecs_plugins) ) $ecs_elementor=false;
  if ( !in_array( 'elementor-pro/elementor-pro.php', $ecs_plugins ) ) $ecs_elementor=false;
  
  return $ecs_elementor;
}  