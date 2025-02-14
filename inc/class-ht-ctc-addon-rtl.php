<?php
/**
 * Class HT_CTC_Addon_RTL
 * 
 * This class handles the RTL (Right-to-Left) functionality for the Click to Chat addon.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'HT_CTC_Addon_RTL' ) ) : // Check if class exists

class HT_CTC_Addon_RTL {

    /**
     * Constructor
     * 
     * Initializes the class and sets up the hooks.
     */
    public function __construct() {
        // Call the hooks function
        $this->hooks();
    }

    /**
     * Hooks
     * 
     * Registers the filters for reversing the positions of elements for RTL pages.
     */
    public function hooks() {
        // Add filters to reverse the positions of elements for RTL pages
        add_filter( 'ht_ctc_fh_side_2', array($this, 'rtl_reverse_position') );
        // Add filters to reverse the positions of elements for RTL pages on mobile
        add_filter( 'ht_ctc_fh_mobile_side_2', array($this, 'rtl_reverse_position_mobile') );
    }

    /**
     * Reverse Position for Desktop
     * 
     * Reverses the position of elements for RTL pages on desktop.
     * 
     * @param string $side_2 The current position (left or right).
     * @return string The reversed position.
     */

     // This function is used to reverse the position of elements for RTL pages on desktop.
    public function rtl_reverse_position( $side_2 ) {
        // Check if the function is_rtl exists and if the page is RTL
        if ( function_exists('is_rtl') && is_rtl() ) {
            // If the page is RTL, reverse the position
            if ( 'left' == $side_2 ) {
                // If the current position is left, change it to right
                $side_2 = 'right';
            } elseif ( 'right' == $side_2 ) {
                // If the current position is right, change it to left
                $side_2 = 'left';
            }
        }
        // Return the reversed position
        return $side_2;
    }

    /**
     * Reverse Position for Mobile
     * 
     * Reverses the position of elements for RTL pages on mobile.
     * 
     * @param string $mobile_side_2 The current position (left or right).
     * @return string The reversed position.
     */

     // This function is used to reverse the position of elements for RTL pages on mobile.
    public function rtl_reverse_position_mobile( $mobile_side_2 ) {
        // Check if the functioon is_rtl exists and if the page is RTL
        if ( function_exists('is_rtl') && is_rtl() ) {
            // If the page is RTL, reverse the position
            if ( 'left' == $mobile_side_2 ) {
                // If the current position is left, change it to right
                $mobile_side_2 = 'right';
            } elseif ( 'right' == $mobile_side_2 ) {
                // If the current position is right, change it to left
                $mobile_side_2 = 'left';
                
            }
        }
        // Return the reversed position
        return $mobile_side_2;
    }

}

new HT_CTC_Addon_RTL();

endif; // END class_exists check