<?php

/*
 * English language
 */

// Error Messages for REST SETTINGS
$lang['text_rest_invalid_api_key']          = 'Invalid API key %s'; // %s is the REST API key
$lang['text_rest_invalid_credentials']      = 'Invalid credentials';
$lang['text_rest_ip_denied']                = 'IP denied';
$lang['text_rest_ip_unauthorized']          = 'IP unauthorized';
$lang['text_rest_unauthorized']             = 'Unauthorized';
$lang['text_rest_ajax_only']                = 'Only AJAX requests are allowed';
$lang['text_rest_api_key_unauthorized']     = 'This API key does not have access to the requested controller';
$lang['text_rest_api_key_permissions']      = 'This API key does not have enough permissions';
$lang['text_rest_api_key_time_limit']       = 'This API key has reached the time limit for this method';
$lang['text_rest_ip_address_time_limit']    = 'This IP Address has reached the time limit for this method';
$lang['text_rest_unknown_method']           = 'Requested method is unknown';
$lang['text_rest_unsupported']              = 'Unsupported protocol';

// Common messages
$lang['text_api_no_record']                 = 'No record found.';
$lang['text_api_server_error']              = 'Server error.';
$lang['text_invalid_email']                 = 'Invalid email address.';
$lang['text_empty_fields']                  = 'Required fields should not be empty';
$lang['text_success_response']              = 'Success';
$lang['text_success_dynamic_done']          = ' successfully added.';
$lang['text_success_dynamic_delete']        = ' successfully deleted.';
$lang['text_success_dynamic_update']        = ' successfully updated.';
$lang['text_yesterday_date_error']          = 'Please select any future date or today date.';

// Messages for user login
$lang['text_user_login_wrong_username']     = 'Username is not correct.';
$lang['text_user_login_wrong_password']     = 'Password is not correct.';
$lang['text_user_login_success']            = 'Successfully logged in.';
$lang['text_user_login_verify_number']      = 'Please verify your phone number first.';
$lang['text_user_password_not_matched']     = 'Your old password is not matching with our record.';
$lang['text_user_password_already_exist']   = 'Your password is similar to previous password.';
$lang['text_recover_password_wrong_code']   = 'Your One Time Password (OTP) is wrong or expired.';
$lang['text_recover_password_success']      = 'You have successfully changed your password.';
$lang['text_recover_code_not_verified']     = 'Your One Time Password (OTP) not verified.';
$lang['text_user_owner_approval']           = 'Your account is not approved yet.';
$lang['text_account_under_verification']    = 'Congratulation! your account is created, and being verification by our team.';

// Messages for adding new user
$lang['text_new_user_password_length']      = 'Please choose a password between 6 to 20 characters.';
$lang['text_new_user_success']              = 'User added successfully.';
$lang['text_new_user_email_exist']          = 'Email already registered.';
$lang['text_new_username_less']             = 'Your name should contain at least 3 characters.';
$lang['text_new_username_high']             = 'Your name should not exceed 20 characters.';
$lang['text_new_nickname_less']             = 'Your nickname should contain at least 3 characters.';
$lang['text_new_nickname_high']             = 'Your nickname should not exceed 20 characters.';
$lang['text_new_nickname_exist']            = 'Nickname already taken by someone, please type another nickname.';
$lang['text_same_user_phone']               = 'Phone number already registered.';
$lang['text_invalid_phone']                 = 'Phone number not valid.';
$lang['text_new_firstname_less']            = 'Your first name should contain at least 3 characters.';
$lang['text_new_firstname_high']            = 'Your first name should not exceed 20 characters.';
$lang['text_new_lastname_less']             = 'Your last name should contain at least 3 characters.';
$lang['text_new_lastname_high']             = 'Your last name should not exceed 20 characters.';

// Messages for verify user phone number
$lang['text_verify_number_success']         = 'Successfully verified.';
$lang['text_reverification_code_sent']      = 'Verification code sent successfully.';
$lang['text_verification_wrong_phone']      = 'Phone number is not correct.';
$lang['text_recover_password_check_phone']  = 'Verify your code to recover password.';
$lang['text_recover_password_check_email']  = 'Check your email for further instructions.';