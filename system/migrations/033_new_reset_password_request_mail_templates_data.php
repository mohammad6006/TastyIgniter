<?php
/**
 * TastyIgniter
 *
 * An open source online ordering, reservation and management system for restaurants.
 *
 * @package Igniter
 * @author Samuel Adepoyigi
 * @copyright (c) 2013 - 2016. Samuel Adepoyigi
 * @copyright (c) 2016 - 2017. TastyIgniter Dev Team
 * @link https://tastyigniter.com
 * @license http://opensource.org/licenses/MIT The MIT License
 * @since File available since Release 1.0
 */
if (!defined('BASEPATH')) exit('No direct access allowed');

/**
 * New mail template for reset password request
 */
class Migration_new_reset_password_request_mail_templates_data extends TI_Migration
{

    public function up()
    {
        // Update existing template
        $this->db->update('mail_templates_data', [
            'subject' => 'Password reset at {site_name}',
            'body'    => '<div id="mailsub" class="notification" align="center"><table style="min-width: 320px;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="center" bgcolor="#eff3f8"><!-- [if gte mso 10]><table width="680" border="0" cellspacing="0" cellpadding="0"><tr><td><![endif]--><table class="table_width_100" style="max-width: 680px; min-width: 300px;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div></td></tr><tr><td align="center" bgcolor="#ffffff"><div style="height: 30px; line-height: 30px; font-size: 10px;"> </div><table border="0" width="90%" cellspacing="0" cellpadding="0"><tbody><tr><td align="left"><div class="mob_center_bl" style="float: left; display: inline-block; width: 115px;"><table class="mob_center" style="border-collapse: collapse;" border="0" width="115" cellspacing="0" cellpadding="0" align="left"><tbody><tr><td align="left" valign="middle"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="115" cellspacing="0" cellpadding="0"><tbody><tr><td class="mob_center" align="left" valign="top"><a style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;" href="{site_url}" target="_blank"><span style="color: #596167; font-size: medium;"><img style="display: block;" src="{site_logo}" alt="{site_name}" width="115" height="19" border="0" /></span></a></td></tr></tbody></table></td></tr></tbody></table></div> <!-- [if gte mso 10]></td><td align="right"><![endif]--><div class="mob_center_bl" style="float: right; display: inline-block; width: 88px;"><table style="border-collapse: collapse;" border="0" width="88" cellspacing="0" cellpadding="0" align="right"><tbody><tr><td align="right" valign="middle"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="right"><div class="mob_center_bl" style="width: 88px;"><table border="0" cellspacing="0" cellpadding="0"><tbody><tr><td style="line-height: 19px;" align="center" width="30"> </td><td style="line-height: 19px;" align="center" width="39"> </td><td style="line-height: 19px;" align="right" width="29"> </td></tr></tbody></table></div></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody></table><div style="height: 50px; line-height: 50px; font-size: 10px;"> </div></td></tr><tr><td align="center" bgcolor="#fbfcfd"><table border="0" width="90%" cellspacing="0" cellpadding="0"><tbody><tr><td align="left"><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div><div style="line-height: 44px;"><span style="font-size: x-large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;">Password changed!</span></span></div><div style="height: 30px; line-height: 30px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Hello {staff_name},</span></span></div><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Your password was changed for the following account:</span></span></div><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Username: {staff_username}</span></span></div><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Password: {created_password}</span></span></div><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">If you think this password update is a mistake, reset your password immediately.<br /> {signature}</span></span></div><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div></td></tr></tbody></table></td></tr><tr><td class="iage_footer" align="center" bgcolor="#ffffff"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="center"><span style="font-size: medium; color: #96a5b5; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">{site_name}.</span></span></td></tr></tbody></table><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div></td></tr></tbody></table> <!-- [if gte mso 10]></td></tr></table><![endif]--></td></tr></tbody></table></div>',
        ], ['template_id' => '11', 'code' => 'password_reset_alert']);

        $this->db->update('mail_templates_data', [
            'subject' => 'Password reset at {site_name}',
            'body'    => '<div id="mailsub" class="notification" align="center"><table style="min-width: 320px;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="center" bgcolor="#eff3f8"><!-- [if gte mso 10]><table width="680" border="0" cellspacing="0" cellpadding="0"><tr><td><![endif]--><table class="table_width_100" style="max-width: 680px; min-width: 300px;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div></td></tr><tr><td align="center" bgcolor="#ffffff"><div style="height: 30px; line-height: 30px; font-size: 10px;"> </div><table border="0" width="90%" cellspacing="0" cellpadding="0"><tbody><tr><td align="left"><div class="mob_center_bl" style="float: left; display: inline-block; width: 115px;"><table class="mob_center" style="border-collapse: collapse;" border="0" width="115" cellspacing="0" cellpadding="0" align="left"><tbody><tr><td align="left" valign="middle"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="115" cellspacing="0" cellpadding="0"><tbody><tr><td class="mob_center" align="left" valign="top"><a style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;" href="{site_url}" target="_blank"><span style="color: #596167; font-size: medium;"><img style="display: block;" src="{site_logo}" alt="{site_name}" width="115" height="19" border="0" /></span></a></td></tr></tbody></table></td></tr></tbody></table></div> <!-- [if gte mso 10]></td><td align="right"><![endif]--><div class="mob_center_bl" style="float: right; display: inline-block; width: 88px;"><table style="border-collapse: collapse;" border="0" width="88" cellspacing="0" cellpadding="0" align="right"><tbody><tr><td align="right" valign="middle"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="right"><div class="mob_center_bl" style="width: 88px;"><table border="0" cellspacing="0" cellpadding="0"><tbody><tr><td style="line-height: 19px;" align="center" width="30"> </td><td style="line-height: 19px;" align="center" width="39"> </td><td style="line-height: 19px;" align="right" width="29"> </td></tr></tbody></table></div></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody></table><div style="height: 50px; line-height: 50px; font-size: 10px;"> </div></td></tr><tr><td align="center" bgcolor="#fbfcfd"><table border="0" width="90%" cellspacing="0" cellpadding="0"><tbody><tr><td align="left"><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div><div style="line-height: 44px;"><span style="font-size: x-large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;">Password changed!</span></span></div><div style="height: 30px; line-height: 30px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Hello {first_name} {last_name},</span></span></div><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Your password was changed successfully! Please <a href="{account_login_link}" target="_blank">login</a> using your new password: {created_password}.</span></span></div><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">If you think this password update was a mistake, reset your password immediately.<br />{signature}</span></span></div><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div></td></tr></tbody></table></td></tr><tr><td class="iage_footer" align="center" bgcolor="#ffffff"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="center"><span style="font-size: medium; color: #96a5b5; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">{site_name}.</span></span></td></tr></tbody></table><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div></td></tr></tbody></table> <!-- [if gte mso 10]></td></tr></table><![endif]--></td></tr></tbody></table></div>',
        ], ['template_id' => '11', 'code' => 'password_reset']);

        $this->db->insert('mail_templates_data', [
            'template_id'  => '11',
            'code'         => 'password_reset_request_alert',
            'subject'      => 'Password reset request at {site_name}',
            'body'         => '<div id="mailsub" class="notification" align="center"><table style="min-width: 320px;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="center" bgcolor="#eff3f8"><!-- [if gte mso 10]><table width="680" border="0" cellspacing="0" cellpadding="0"><tr><td><![endif]--><table class="table_width_100" style="max-width: 680px; min-width: 300px;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div></td></tr><tr><td align="center" bgcolor="#ffffff"><div style="height: 30px; line-height: 30px; font-size: 10px;"> </div><table border="0" width="90%" cellspacing="0" cellpadding="0"><tbody><tr><td align="left"><div class="mob_center_bl" style="float: left; display: inline-block; width: 115px;"><table class="mob_center" style="border-collapse: collapse;" border="0" width="115" cellspacing="0" cellpadding="0" align="left"><tbody><tr><td align="left" valign="middle"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="115" cellspacing="0" cellpadding="0"><tbody><tr><td class="mob_center" align="left" valign="top"><a style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;" href="{site_url}" target="_blank"><span style="color: #596167; font-size: medium;"><img style="display: block;" src="{site_logo}" alt="{site_name}" width="115" height="19" border="0" /></span></a></td></tr></tbody></table></td></tr></tbody></table></div> <!-- [if gte mso 10]></td><td align="right"><![endif]--><div class="mob_center_bl" style="float: right; display: inline-block; width: 88px;"><table style="border-collapse: collapse;" border="0" width="88" cellspacing="0" cellpadding="0" align="right"><tbody><tr><td align="right" valign="middle"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="right"><div class="mob_center_bl" style="width: 88px;"><table border="0" cellspacing="0" cellpadding="0"><tbody><tr><td style="line-height: 19px;" align="center" width="30"> </td><td style="line-height: 19px;" align="center" width="39"> </td><td style="line-height: 19px;" align="right" width="29"> </td></tr></tbody></table></div></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody></table><div style="height: 50px; line-height: 50px; font-size: 10px;"> </div></td></tr><tr><td align="center" bgcolor="#fbfcfd"><table border="0" width="90%" cellspacing="0" cellpadding="0"><tbody><tr><td align="left"><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div><div style="line-height: 44px;"><span style="font-size: x-large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;">Password reset request!</span></span></div><div style="height: 30px; line-height: 30px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Hello {staff_name},</span></span></div><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">You have just requested a password reset for the following account:</span></span></div><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Username: {staff_username}</span></span></div><div style="line-height: 24px;"> </div><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;"><a href="{reset_link}">Click here</a> to reset password or alternatively, copy and paste the link below in a new browser window:</span></span></div><div style="line-height: 24px;"> </div><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">{reset_link}</span></span></div><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">{signature}</span></span></div><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div></td></tr></tbody></table></td></tr><tr><td class="iage_footer" align="center" bgcolor="#ffffff"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="center"><span style="font-size: medium; color: #96a5b5; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">{site_name}.</span></span></td></tr></tbody></table><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div></td></tr></tbody></table> <!-- [if gte mso 10]></td></tr></table><![endif]--></td></tr></tbody></table></div>',
            'date_added'   => mdate('%Y-%m-%d %H:%i:%a', time()),
            'date_updated' => mdate('%Y-%m-%d %H:%i:%a', time()),
        ]);

        $this->db->insert('mail_templates_data', [
            'template_id'  => '11',
            'code'         => 'password_reset_request_alert',
            'subject'      => 'Password reset request at {site_name}',
            'body'         => '<div id="mailsub" class="notification" align="center"><table style="min-width: 320px;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="center" bgcolor="#eff3f8"><!-- [if gte mso 10]><table width="680" border="0" cellspacing="0" cellpadding="0"><tr><td><![endif]--><table class="table_width_100" style="max-width: 680px; min-width: 300px;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div></td></tr><tr><td align="center" bgcolor="#ffffff"><div style="height: 30px; line-height: 30px; font-size: 10px;"> </div><table border="0" width="90%" cellspacing="0" cellpadding="0"><tbody><tr><td align="left"><div class="mob_center_bl" style="float: left; display: inline-block; width: 115px;"><table class="mob_center" style="border-collapse: collapse;" border="0" width="115" cellspacing="0" cellpadding="0" align="left"><tbody><tr><td align="left" valign="middle"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="115" cellspacing="0" cellpadding="0"><tbody><tr><td class="mob_center" align="left" valign="top"><a style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;" href="{site_url}" target="_blank"><span style="color: #596167; font-size: medium;"><img style="display: block;" src="{site_logo}" alt="{site_name}" width="115" height="19" border="0" /></span></a></td></tr></tbody></table></td></tr></tbody></table></div> <!-- [if gte mso 10]></td><td align="right"><![endif]--><div class="mob_center_bl" style="float: right; display: inline-block; width: 88px;"><table style="border-collapse: collapse;" border="0" width="88" cellspacing="0" cellpadding="0" align="right"><tbody><tr><td align="right" valign="middle"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="right"><div class="mob_center_bl" style="width: 88px;"><table border="0" cellspacing="0" cellpadding="0"><tbody><tr><td style="line-height: 19px;" align="center" width="30"> </td><td style="line-height: 19px;" align="center" width="39"> </td><td style="line-height: 19px;" align="right" width="29"> </td></tr></tbody></table></div></td></tr></tbody></table></td></tr></tbody></table></div></td></tr></tbody></table><div style="height: 50px; line-height: 50px; font-size: 10px;"> </div></td></tr><tr><td align="center" bgcolor="#fbfcfd"><table border="0" width="90%" cellspacing="0" cellpadding="0"><tbody><tr><td align="left"><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div><div style="line-height: 44px;"><span style="font-size: x-large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;">Password reset request!</span></span></div><div style="height: 30px; line-height: 30px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Hello {first_name} {last_name},</span></span></div><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">You have just requested a password reset.</span></span></div><div style="line-height: 24px;"> </div><div style="line-height: 24px;"> </div><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;"><a href="{reset_link}" target="_blank">Click here</a> to reset password or alternatively, copy and paste the link below in a new browser window: </span></span></div><div style="line-height: 24px;"> </div><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">{reset_link}.</span></span></div><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td align="left"><div style="line-height: 24px;"><span style="font-size: large; color: #57697e; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">{signature}</span></span></div><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div></td></tr></tbody></table></td></tr><tr><td class="iage_footer" align="center" bgcolor="#ffffff"><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div><table border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td align="center"><span style="font-size: medium; color: #96a5b5; font-family: Arial, Helvetica, sans-serif;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">{site_name}</span></span></td></tr></tbody></table><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div></td></tr><tr><td><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div></td></tr></tbody></table> <!-- [if gte mso 10]></td></tr></table><![endif]--></td></tr></tbody></table></div>',
            'date_added'   => mdate('%Y-%m-%d %H:%i:%a', time()),
            'date_updated' => mdate('%Y-%m-%d %H:%i:%a', time()),
        ]);
    }

    public function down()
    {
        $this->db->update('mail_templates_data', [
            'subject' => 'Password reset at {site_name}',
            'body'    => '<div id="mailsub" class="notification" align="center"><table style="min-width: 320px;" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td align="center" bgcolor="#eff3f8"><!--[if gte mso 10]><table width="680" border="0" cellspacing="0" cellpadding="0"><tr><td><![endif]--><table class="table_width_100" style="max-width: 680px; min-width: 300px;" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td><!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"></div></td></tr><!--header --><tr><td align="center" bgcolor="#ffffff"><!-- padding --><div style="height: 30px; line-height: 30px; font-size: 10px;"></div><table border="0" cellpadding="0" cellspacing="0" width="90%"><tbody><tr><td align="left"><!-- Item --><div class="mob_center_bl" style="float: left; display: inline-block; width: 115px;"><table class="mob_center" style="border-collapse: collapse;" align="left" border="0" cellpadding="0" cellspacing="0" width="115"><tbody><tr><td align="left" valign="middle"><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div><table border="0" cellpadding="0" cellspacing="0" width="115"><tbody><tr><td class="mob_center" align="left" valign="top"><a href="{site_url}" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;"><font face="Arial, Helvetica, sans-seri; font-size: 13px;" color="#596167" size="3"><img src="{site_logo}" alt="{site_name}" style="display: block;" height="19" border="0" width="115"></font></a></td></tr></tbody></table></td></tr></tbody></table></div><!-- Item END--><!--[if gte mso 10]></td><td align="right"><![endif]--><!-- Item --><div class="mob_center_bl" style="float: right; display: inline-block; width: 88px;"><table style="border-collapse: collapse;" align="right" border="0" cellpadding="0" cellspacing="0" width="88"><tbody><tr><td align="right" valign="middle"><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td align="right"><!--social --><div class="mob_center_bl" style="width: 88px;"><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td style="line-height: 19px;" align="center" width="30"><a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><font face="Arial, Helvetica, sans-serif" color="#596167" size="2"></font></a></td><td style="line-height: 19px;" align="center" width="39"><a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><font face="Arial, Helvetica, sans-serif" color="#596167" size="2"></font></a></td><td style="line-height: 19px;" align="right" width="29"><a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><font face="Arial, Helvetica, sans-serif" color="#596167" size="2"></font></a></td></tr></tbody></table></div><!--social END--></td></tr></tbody></table></td></tr></tbody></table></div><!-- Item END--></td></tr></tbody></table><!-- padding --><div style="height: 50px; line-height: 50px; font-size: 10px;"></div></td></tr><!--header END--><!--content 1 --><tr><td align="center" bgcolor="#fbfcfd"><table border="0" cellpadding="0" cellspacing="0" width="90%"><tbody><tr><td align="left"><!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"></div><div style="line-height: 44px;"><font style="font-size: 34px;" face="Arial, Helvetica, sans-serif" color="#57697e" size="5"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;">Reset your password!</span></font></div><!-- padding --><div style="height: 30px; line-height: 30px; font-size: 10px;"></div></td></tr><tr><td align="left"><div style="line-height: 24px;"><font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#57697e" size="4"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Hello {staff_name},</span></font></div><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div></td></tr><tr><td align="left"><div style="line-height: 24px;"><font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#57697e" size="4"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">You requested that the password be reset for the following account:</span></font></div><div style="line-height: 24px;"><font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#57697e" size="4"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Username: {staff_username}</span></font></div><div style="line-height: 24px;"><font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#57697e" size="4"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Password: {created_password}</span></font></div><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div></td></tr><tr><td align="left"><div style="line-height: 24px;"><font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#57697e" size="4"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Please do not forget to change your password after you login.<br> {signature}</span></font></div><!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"></div></td></tr></tbody></table></td></tr><!--content 1 END--><!--footer --><tr><td class="iage_footer" align="center" bgcolor="#ffffff"><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td align="center"><font style="font-size: 13px;" face="Arial, Helvetica, sans-serif" color="#96a5b5" size="3"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">2015 © {site_name} All Rights Reserved.</span></font></td></tr></tbody></table><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div></td></tr><!--footer END--><tr><td><!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"></div></td></tr></tbody></table><!--[if gte mso 10]></td></tr></table><![endif]--></td></tr></tbody></table></div>',
        ], ['template_id' => '11', 'code' => 'password_reset_alert']);

        $this->db->update('mail_templates_data', [
            'subject' => 'Password reset at {site_name}',
            'body'    => '<div id="mailsub" class="notification" align="center"><table style="min-width: 320px;" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td align="center" bgcolor="#eff3f8"><!--[if gte mso 10]><table width="680" border="0" cellspacing="0" cellpadding="0"><tr><td><![endif]--><table class="table_width_100" style="max-width: 680px; min-width: 300px;" border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td><!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"></div></td></tr><!--header --><tr><td align="center" bgcolor="#ffffff"><!-- padding --><div style="height: 30px; line-height: 30px; font-size: 10px;"></div><table border="0" cellpadding="0" cellspacing="0" width="90%"><tbody><tr><td align="left"><!-- Item --><div class="mob_center_bl" style="float: left; display: inline-block; width: 115px;"><table class="mob_center" style="border-collapse: collapse;" align="left" border="0" cellpadding="0" cellspacing="0" width="115"><tbody><tr><td align="left" valign="middle"><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div><table border="0" cellpadding="0" cellspacing="0" width="115"><tbody><tr><td class="mob_center" align="left" valign="top"><a href="{site_url}" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;"><font face="Arial, Helvetica, sans-seri; font-size: 13px;" color="#596167" size="3"><img src="{site_logo}" alt="{site_name}" style="display: block;" height="19" border="0" width="115"></font></a></td></tr></tbody></table></td></tr></tbody></table></div><!-- Item END--><!--[if gte mso 10]></td><td align="right"><![endif]--><!-- Item --><div class="mob_center_bl" style="float: right; display: inline-block; width: 88px;"><table style="border-collapse: collapse;" align="right" border="0" cellpadding="0" cellspacing="0" width="88"><tbody><tr><td align="right" valign="middle"><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td align="right"><!--social --><div class="mob_center_bl" style="width: 88px;"><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td style="line-height: 19px;" align="center" width="30"><a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><font face="Arial, Helvetica, sans-serif" color="#596167" size="2"></font></a></td><td style="line-height: 19px;" align="center" width="39"><a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><font face="Arial, Helvetica, sans-serif" color="#596167" size="2"></font></a></td><td style="line-height: 19px;" align="right" width="29"><a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><font face="Arial, Helvetica, sans-serif" color="#596167" size="2"></font></a></td></tr></tbody></table></div><!--social END--></td></tr></tbody></table></td></tr></tbody></table></div><!-- Item END--></td></tr></tbody></table><!-- padding --><div style="height: 50px; line-height: 50px; font-size: 10px;"></div></td></tr><!--header END--><!--content 1 --><tr><td align="center" bgcolor="#fbfcfd"><table border="0" cellpadding="0" cellspacing="0" width="90%"><tbody><tr><td align="left"><!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"></div><div style="line-height: 44px;"><font style="font-size: 34px;" face="Arial, Helvetica, sans-serif" color="#57697e" size="5"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;">Reset your password!</span></font></div><!-- padding --><div style="height: 30px; line-height: 30px; font-size: 10px;"></div></td></tr><tr><td align="left"><div style="line-height: 24px;"><font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#57697e" size="4"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Hello {first_name} {last_name},</span></font></div><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div></td></tr><tr><td align="left"><div style="line-height: 24px;"><font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#57697e" size="4"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Your password has been reset successfull! Please <a href="{account_login_link}" target="_blank">login</a> using your new password: {created_password}.</span></font></div><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div></td></tr><tr><td align="left"><div style="line-height: 24px;"><font style="font-size: 15px;" face="Arial, Helvetica, sans-serif" color="#57697e" size="4"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">Please don\'t forget to change your password after you login.<br> {signature}</span></font></div><!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"></div></td></tr></tbody></table></td></tr><!--content 1 END--><!--footer --><tr><td class="iage_footer" align="center" bgcolor="#ffffff"><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td align="center"><font style="font-size: 13px;" face="Arial, Helvetica, sans-serif" color="#96a5b5" size="3"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">2015 © {site_name} All Rights Reserved.</span></font></td></tr></tbody></table><!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"></div></td></tr><!--footer END--><tr><td><!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"></div></td></tr></tbody></table><!--[if gte mso 10]></td></tr></table><![endif]--></td></tr></tbody></table></div>',
        ], ['template_id' => '11', 'code' => 'password_reset']);

        $this->db->delete('mail_templates_data', ['template_id' => '11', 'code' => 'password_reset_request_alert']);
        $this->db->delete('mail_templates_data', ['template_id' => '11', 'code' => 'password_reset_request']);
    }
}

/* End of file 033_new_reset_password_request_mail_templates_data.php */
/* Location: ./system/tastyigniter/migrations/033_new_reset_password_request_mail_templates_data.php */