<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Ecs_Notice {
    /**
		 * Message of the notice.
		 *
		 * @since  1.2.2
		 * @access private
		 * @var    string
		 */
		private $message = "";

		/**
		 * The id of the notice.
		 *
		 * @since  1.0.0
		 * @access private
		 * @var    string
		 */
		private $notice = "";
  
 		/**
		 * The id of the notice.
		 *
		 * @since  1.0.0
		 * @access private
		 * @var    string
		 */
		private $type = "info";
  
    /**
		 * The user role.
		 *
		 * @since  1.0.0
		 * @access private
		 * @var    string
		 */
		private $role = 'administrator';
  
    public function __construct($message,$notice="") {
      $this->message = $message;
      $this->notice = $notice;
    }
  
    public function set_role($role){
      $this->role = $role;
    }
    public function set_type($type){
      $this->type = $type;
    }
    public function show(){
       add_action('admin_notices', [$this,'admin_notice']);
    }
    public function admin_notice(){
      $user_id = get_current_user_id();
      if ($this->notice && get_user_meta( $user_id, $this->notice )) return;
      $image = '<img width="30px" src="'.ELECS_URL . 'assets/dudaster_icon.png" style="width:32px;margin-right:10px;margin-bottom: -11px;"/> ';
      $user = wp_get_current_user();
      if ( in_array( $this->role, (array) $user->roles ) ) {
      echo '<div class="notice notice-'.$this->type.' " style="padding-right: 38px; position: relative;">
            <p> '.$image.$this->message.'</p>
          <a href="?ecsn_shown='.$this->notice.'"><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></a>
          </div>';
      }
    }
  
}

function ecs_notice_dismiss() {
    $user_id = get_current_user_id();
    if ( isset( $_GET['ecsn_shown'] )  )
       if ( $_GET['ecsn_shown']) add_user_meta( $user_id,  $_GET['ecsn_shown'] , 'true', true );
}
add_action( 'admin_init', 'ecs_notice_dismiss' );

