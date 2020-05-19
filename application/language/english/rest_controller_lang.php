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

// Adding new club messages
$lang['text_new_club_success']              = 'Your club added successfully.';
$lang['text_update_club_success']           = 'Your club updated successfully.';
$lang['text_delete_club_success']           = 'Your club deleted successfully.';
$lang['text_file_upload_path_error']        = 'File path is not defined properly.';
$lang['text_delete_not_allowed']            = 'Deletion not allowed, first delete clubs fields.';
$lang['text_add_club_featured_error']       = 'Club already subscribed as featured club.';
$lang['text_club_has_bookings_update_error'] = " 's timing cannot be update, found bookings there.";
$lang['text_club_missing_time']             = 'Please check some shifts missing opening or closing time.';
$lang['text_review_added_success']          = 'Your reviews added successfully.';
$lang['text_player_do_booking_first']       = 'Please do at least one booking in this club for reviews.';
$lang['text_photo_deleted_success']         = 'Photo deleted successfully.';
$lang['text_coupon_code_small']             = 'Your coupon should contain at least 3 characters.';
$lang['text_coupon_code_large']             = 'Your coupon should not exceed 10 characters.';

// Adding new field messages
$lang['text_new_field_success']             = 'Your field added successfully.';
$lang['text_update_field_success']          = 'Your field updated successfully.';
$lang['text_empty_photo']                   = 'Image is not selected yet.';
$lang['text_over_limit_photos']             = 'You can upload upto 2 photos.';
$lang['text_delete_not_allowed_field']      = 'You cannot delete your field it has bookings.';
$lang['text_offer_already_exist']           = 'We noticed you have already offer in this field.';
$lang['text_coupen_already_exist']          = 'You have already same coupon for this club.';

//Booking messages
$lang['text_booking_day_off']               = 'Club is closed for selected day.';
$lang['text_club_timing_finished']          = 'Club is closed now.';
$lang['text_booking_already_exist']         = 'We are sorry selected time is no more for you.';
$lang['text_booking_notify_exist']          = 'You have already activated an alert for this booking.';
$lang['text_schedule_booking']              = 'Schedule bookings successfully done, but some days have not free time for your schedule booking.';
$lang['text_facilities_updated']            = 'Facilities updated successfully.';
$lang['text_success_hide_slot']             = 'Your selected slots successfully hidden for players.';
$lang['text_hide_slots_skipped_time']       = 'Slots hidden successfully but some slots skipped due to already taken ';
$lang['text_success_hide_slot_deleted']     = 'Your hidden slots available for others now.';
$lang['text_booking_cannot_complete_now']   = 'You cannot complete booking before the time.';
$lang['text_match_request_age_not_valid']   = 'This match is valid for the age between ';

//Players messages
$lang['text_already_favorite']              = 'You already added as favorite.';
$lang['text_already_invited']               = ' has already invited.';
$lang['text_already_accepted']              = 'Someone already accepted invitation.';
$lang['text_invite_booking_expired']        = 'No invitation sent because booking is no more.';
$lang['text_invited_has_booking']           = ' has already booking at this time.';
$lang['text_invitation_not_cancel']         = 'You cannot cancel the invitation right now.';
$lang['text_player_has_booking']            = 'You have already booking at this time.';
$lang['text_already_having_invitation']     = 'You have already received invitation for this match.';
$lang['text_already_sent_challenge']        = 'You have already sent challenge request for this match.';
$lang['text_already_accepted_challenge']    = 'You have already accepted challenge request for this match.';
$lang['text_match_already_started']         = 'Your match is accepted by someone so, you cannot change the status now.';
$lang['text_required_players_less']         = 'Required players should be more than 0.';

//Player Matches OR Games (PUBLIC/PRIVATE)
$lang['text_already_joined_game']           = 'You have already sent request to join the game.';
$lang['text_already_joined_challenge']      = 'You have already sent request to join this challenge.';
$lang['text_already_created_match']         = 'You have already created match.';
$lang['text_players_need_finish']           = 'This game has completed its total number of players.';
$lang['text_match_type_not_valid']          = 'Match type for challenge is not valid.';
$lang['text_already_rated_player']          = 'Player already rated for this game.';
$lang['text_cannot_rate_before_time']       = 'You cannot rate the player before completing the game.';
$lang['text_friendly_game_team_full']       = 'The Game is full.';
$lang['text_player_no_free_time_match']     = 'You already have a booking or match at this time.';
$lang['text_team_already_created']          = 'Team already created for this game.';
$lang['text_team_names_same']               = 'Team names should be different.';
$lang['text_team_colors_same']              = 'Team colors should be different.';
$lang['text_team_name_already_exist']       = 'Please try another team name, its already stored.';
$lang['text_team_color_already_exist']      = 'Please try another team color, its already stored.';
$lang['player_already_added_in_team']       = 'This player already in the team.';
$lang['manual_player_already_added']        = 'Player name already stored in your team list.';
$lang['player_already_is_captain']          = 'This player already is a captain for this team.';
$lang['team_has_already_a_captain']         = 'Team has already a captain, first remove him to add new.';
$lang['text_position_already_filled']       = 'The position is full, try another position.';
$lang['player_already_added_into_game']     = 'Some of players already added to game.';
$lang['another_captain_adding_player']      = 'Wait a bit, another captain is adding his player.';
$lang['text_challenge_already_accepted']    = 'Challenge already accepted by team';
