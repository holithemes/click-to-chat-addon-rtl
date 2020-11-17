<?php
/**
 * demo
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'HT_CTC_Addon_RTL' ) ) :

class HT_CTC_Addon_RTL {

    public function __construct() {
        $this->hooks();
    }


    public function hooks() {
        add_filter( 'ht_ctc_fh_side_2', array($this, 'rtl_reverse_position') );
        add_filter( 'ht_ctc_fh_mobile_side_2', array($this, 'rtl_reverse_position_mobile') );
    }


    public function rtl_reverse_position( $side_2 ) {

        if ( function_exists('is_rtl') && is_rtl() ) {
            if ( 'left' == $side_2 ) {
                $side_2 = 'right';
            } elseif ( 'right' == $side_2 ) {
                $side_2 = 'left';
            }
        }

        return $side_2;
    }

    public function rtl_reverse_position_mobile ( $mobile_side_2 ) {
        if ( function_exists('is_rtl') && is_rtl() ) {
            if ( 'left' == $mobile_side_2 ) {
                $mobile_side_2 = 'right';
            } elseif ( 'right' == $mobile_side_2 ) {
                $mobile_side_2 = 'left';
            }
        }

        return $mobile_side_2;
    }




}

new HT_CTC_Addon_RTL();

endif; // END class_exists check