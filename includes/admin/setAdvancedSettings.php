<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$cu = wp_get_current_user();
if ($cu->has_cap('manage_options')) { 
        $hide_sel_stat_back=array();
        if(isset($_POST['hide_selected_status_ticket_backend'])){
            $hide_sel_stat_back=$_POST['hide_selected_status_ticket_backend'];
        }
        $modify_raised_by=array();
        if(isset($_POST['modify_raised_by'])){
            $modify_raised_by=$_POST['modify_raised_by'];
        }
        $advancedSettings=array(
            'guest_ticket_submission_message'=>htmlspecialchars($_POST['guest_ticket_submission_message'],ENT_QUOTES),
            'pending_ticket_close'=>$_POST['pending_ticket_close'],
            'ticket_label_alice'=>$_POST['ticket_label_alice'],
            'wpsp_reply_form_position'=>$_POST['wpsp_reply_form_position'],
            'wpsp_shortcode_used_in'=>$_POST['wpsp_shortcode_used_in'],
            'enable_accordion'=>$_POST['enable_accordion'],
            'hide_selected_status_ticket'=>$_POST['hide_selected_status_ticket'],
            'hide_selected_status_ticket_backend'=>$hide_sel_stat_back,
            'modify_raised_by'=>$modify_raised_by,
            'wpsp_dashboard_menu_label'=>$_POST['wpsp_dashboard_menu_label'],
            'logout_Settings'=>$_POST['logout_Settings'],
            'admin_bar_Setting'=>$_POST['admin_bar_Setting'],
            'ticketId'=>$_POST['ticketId'],
            'wpsp_ticket_id_prefix'=>$_POST['wpsp_ticket_id_prefix'],
            'reply_above'=>$_POST['reply_above'],
            'datecustfield'=>$_POST['datecustfield'],
            'active_tab'=>$_POST['active_tab'],
            'guest_ticket_redirect'=>$_POST['guest_ticket_redirect'],
            'guest_ticket_redirect_url'=>$_POST['guest_ticket_redirect_url'],
            'message_for_ticket_url'=>$_POST['message_for_ticket_url'],
            'wpsp_redirect_after_ticket_update'=>$_POST['wpsp_ticket_list'],
            'wpspAttachMaxFileSize'=>$_POST['wpspAttachMaxFileSize'],
            'wpspBootstrapCSSSetting'=>$_POST['wpspBootstrapCSSSetting'],
            'wpspBootstrapJSSetting'=>$_POST['wpspBootstrapJSSetting'],
            'wpsp_attachment_download_url'=>$_POST['wpsp_attach_download_url'],
            'wpspAttachment_bc'=>$_POST['wpspAttachment_bc'],             
            'wpspAttachment_pc'=>$_POST['wpspAttachment_pc']
	);
        update_option('wpsp_advanced_settings',$advancedSettings);
        update_option('wpsp_ticket_open_page_shortcode',$_POST['ticket_link_page']);
}
?>