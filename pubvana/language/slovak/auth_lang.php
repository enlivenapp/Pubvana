<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'This form post did not pass our security checks.';

// Login
$lang['login_heading']         = 'Prihlásenie';
$lang['login_subheading']      = 'Prosím prihláste sa s Vašim emailom/používateľským menom a heslom nižšie.';
$lang['login_identity_label']  = 'Email/Používateľské meno:';
$lang['login_password_label']  = 'Heslo:';
$lang['login_remember_label']  = 'Zapamätaj si ma:';
$lang['login_submit_btn']      = 'Prihlásiť';
$lang['login_forgot_password'] = 'Zabudli ste Vaše heslo?';

// Index
$lang['index_heading']           = 'Používatelia';
$lang['index_subheading']        = 'Below is a list of the users.';
$lang['index_fname_th']          = 'Krstné meno';
$lang['index_lname_th']          = 'Priezvisko';
$lang['index_email_th']          = 'Email';
$lang['index_groups_th']         = 'Skupiny';
$lang['index_status_th']         = 'Status';
$lang['index_action_th']         = 'Akcia';
$lang['index_active_link']       = 'Aktívny';
$lang['index_inactive_link']     = 'Neaktívny';
$lang['index_create_user_link']  = 'Vytvoriť nového používateľa';
$lang['index_create_group_link'] = 'Vytvoriť novú skupinu';

// Deactivate User
$lang['deactivate_heading']                  = 'Deaktivácia používateľa';
$lang['deactivate_subheading']               = 'Ste si istý, že chcete deaktivovať používateľa \'%s\'';
$lang['deactivate_confirm_y_label']          = 'Áno:';
$lang['deactivate_confirm_n_label']          = 'Nie:';
$lang['deactivate_submit_btn']               = 'Potvrdiť';
$lang['deactivate_validation_confirm_label'] = 'potvrdenie';
$lang['deactivate_validation_user_id_label'] = 'ID používateľa';

// Create User
$lang['create_user_heading']                           = 'Create User';
$lang['create_user_subheading']                        = 'Please enter the users information below.';
$lang['create_user_fname_label']                       = 'First Name:';
$lang['create_user_lname_label']                       = 'Last Name:';
$lang['create_user_identity_label']                    = 'Identity:';
$lang['create_user_company_label']                     = 'Company Name:';
$lang['create_user_email_label']                       = 'Email:';
$lang['create_user_phone_label']                       = 'Phone:';
$lang['create_user_password_label']                    = 'Password:';
$lang['create_user_password_confirm_label']            = 'Confirm Password:';
$lang['create_user_submit_btn']                        = 'Create User';
$lang['create_user_validation_fname_label']            = 'First Name';
$lang['create_user_validation_lname_label']            = 'Last Name';
$lang['create_user_validation_identity_label']         = 'Identity';
$lang['create_user_validation_email_label']            = 'Email Address';
$lang['create_user_validation_phone_label']            = 'Phone';
$lang['create_user_validation_company_label']          = 'Company Name';
$lang['create_user_validation_password_label']         = 'Password';
$lang['create_user_validation_password_confirm_label'] = 'Password Confirmation';

// Edit User
$lang['edit_user_heading']                           = 'Edit User';
$lang['edit_user_subheading']                        = 'Please enter the users information below.';
$lang['edit_user_fname_label']                       = 'First Name:';
$lang['edit_user_lname_label']                       = 'Last Name:';
$lang['edit_user_company_label']                     = 'Company Name:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = 'Phone:';
$lang['edit_user_password_label']                    = 'Password: (if changing password)';
$lang['edit_user_password_confirm_label']            = 'Confirm Password: (if changing password)';
$lang['edit_user_groups_heading']                    = 'Member of groups';
$lang['edit_user_submit_btn']                        = 'Save User';
$lang['edit_user_validation_fname_label']            = 'First Name';
$lang['edit_user_validation_lname_label']            = 'Last Name';
$lang['edit_user_validation_email_label']            = 'Email Address';
$lang['edit_user_validation_phone_label']            = 'Phone';
$lang['edit_user_validation_company_label']          = 'Company Name';
$lang['edit_user_validation_groups_label']           = 'Groups';
$lang['edit_user_validation_password_label']         = 'Password';
$lang['edit_user_validation_password_confirm_label'] = 'Password Confirmation';

// Create Group
$lang['create_group_title']                  = 'Create Group';
$lang['create_group_heading']                = 'Create Group';
$lang['create_group_subheading']             = 'Please enter the group information below.';
$lang['create_group_name_label']             = 'Group Name:';
$lang['create_group_desc_label']             = 'Description:';
$lang['create_group_submit_btn']             = 'Create Group';
$lang['create_group_validation_name_label']  = 'Group Name';
$lang['create_group_validation_desc_label']  = 'Description';

// Edit Group
$lang['edit_group_title']                  = 'Edit Group';
$lang['edit_group_saved']                  = 'Group Saved';
$lang['edit_group_heading']                = 'Edit Group';
$lang['edit_group_subheading']             = 'Please enter the group information below.';
$lang['edit_group_name_label']             = 'Group Name:';
$lang['edit_group_desc_label']             = 'Description:';
$lang['edit_group_submit_btn']             = 'Save Group';
$lang['edit_group_validation_name_label']  = 'Group Name';
$lang['edit_group_validation_desc_label']  = 'Description';

// Change Password
$lang['change_password_heading']                               = 'Change Password';
$lang['change_password_old_password_label']                    = 'Old Password:';
$lang['change_password_new_password_label']                    = 'New Password (at least %s characters long):';
$lang['change_password_new_password_confirm_label']            = 'Confirm New Password:';
$lang['change_password_submit_btn']                            = 'Change';
$lang['change_password_validation_old_password_label']         = 'Old Password';
$lang['change_password_validation_new_password_label']         = 'New Password';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirm New Password';

// Forgot Password
$lang['forgot_password_heading']                 = 'Forgot Password';
$lang['forgot_password_subheading']              = 'Please enter your %s so we can send you an email to reset your password.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Submit';
$lang['forgot_password_validation_email_label']  = 'Email Address';
$lang['forgot_password_username_identity_label'] = 'Username';
$lang['forgot_password_email_identity_label']    = 'Email';
$lang['forgot_password_email_not_found']         = 'No record of that email address.';

// Reset Password
$lang['reset_password_heading']                               = 'Change Password';
$lang['reset_password_new_password_label']                    = 'New Password (at least %s characters long):';
$lang['reset_password_new_password_confirm_label']            = 'Confirm New Password:';
$lang['reset_password_submit_btn']                            = 'Change';
$lang['reset_password_validation_new_password_label']         = 'New Password';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirm New Password';

// Activation Email
$lang['email_activate_heading']    = 'Activate account for %s';
$lang['email_activate_subheading'] = 'Please click this link to %s.';
$lang['email_activate_link']       = 'Activate Your Account';

// Forgot Password Email
$lang['email_forgot_password_heading']    = 'Reset Password for %s';
$lang['email_forgot_password_subheading'] = 'Please click this link to %s.';
$lang['email_forgot_password_link']       = 'Reset Your Password';

// New Password Email
$lang['email_new_password_heading']    = 'New Password for %s';
$lang['email_new_password_subheading'] = 'Your password has been reset to: %s';

// Please translate
// 
// NEW for OB
$lang['group_removed']						= 'Group Removed';
$lang['group_protected']					= 'Protected Group. You can not remove it.';
$lang['group_not_removed']					= 'Failed to Remove Group.  Please try again.';
$lang['remove_group_heading']				= 'Remove Group';

// permissions
$lang['permissions_label']					= 'Permissions';
$lang['permissions_desc']					= 'Choose the actions this group may perform.';
$lang['admin_perm_notice']					= 'The Admin group has access to all areas of the website. Administrator permissions can not be changed.';
$lang['index_create_perm_link']				= 'New Permission';
$lang['permissions_name_label']				= 'Name';
$lang['edit_perm_heading']					= 'Edit Permission';
$lang['edit_perm_subheading']				= 'Please Edit the permission information below.';
$lang['remove_perm_heading']				= 'Remove Permission';
$lang['edit_perm_saved']					= 'Permission Saved';



$lang['users_perms_slug']					= 'Users';
$lang['users_perms_desc']					= 'Is this group permitted to administer users?';
$lang['posts_perms_slug']					= 'Posts';
$lang['posts_perms_desc']					= 'Is this group permitted to administer posts?';
$lang['pages_perms_slug']					= 'Pages';
$lang['pages_perms_desc']					= 'Is this group permitted to administer pages?';
$lang['links_perms_slug']					= 'Links';
$lang['links_perms_desc']					= 'Is this group permitted to administer links?';
$lang['social_perms_slug']					= 'Social';
$lang['social_perms_desc']					= 'Is this group permitted to administer social links?';
$lang['comments_perms_slug']					= 'Comments';
$lang['comments_perms_desc']					= 'Is this group permitted to administer comments?';
$lang['navigation_perms_slug']					= 'Navigation';
$lang['navigation_perms_desc']					= 'Is this group permitted to administer navigation?';
$lang['themes_perms_slug']					= 'Themes';
$lang['themes_perms_desc']					= 'Is this group permitted to administer themes?';
$lang['settings_perms_slug']					= 'Settings';
$lang['settings_perms_desc']					= 'Is this group permitted to administer settings?';
$lang['updates_perms_slug']					= 'Updates';
$lang['updates_perms_desc']					= 'Is this group permitted to administer updates?';


$lang['perm_already_exists']					= 'Permission already exists.';
