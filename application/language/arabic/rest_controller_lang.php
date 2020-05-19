<?php

/*
 * Arabic language
 */

// Error Messages for REST SETTINGS
$lang['text_rest_invalid_api_key']          = 'مفتاح API غير صالح %s'; // %s is the REST API key
$lang['text_rest_invalid_credentials']      = 'بيانات الاعتماد غير صالحة';
$lang['text_rest_ip_denied']                = 'نفى IP';
$lang['text_rest_ip_unauthorized']          = 'غير مصرح IP';
$lang['text_rest_unauthorized']             = 'غير مصرح';
$lang['text_rest_ajax_only']                = 'يُسمح فقط بطلبات AJAX';
$lang['text_rest_api_key_unauthorized']     = 'لا يملك مفتاح API هذا وصولاً إلى وحدة التحكم المطلوبة';
$lang['text_rest_api_key_permissions']      = 'لا يحتوي مفتاح API هذا على أذونات كافية';
$lang['text_rest_api_key_time_limit']       = 'وصل مفتاح API هذا إلى الحد الزمني لهذه الطريقة';
$lang['text_rest_ip_address_time_limit']    = 'وصل عنوان IP هذا إلى الحد الزمني لهذه الطريقة';
$lang['text_rest_unknown_method']           = 'طريقة غير معروفة';
$lang['text_rest_unsupported']              = 'بروتوكول غير مدعوم';

// Common messages
$lang['text_api_no_record']                 = 'لا توجد سجلات';
$lang['text_api_server_error']              = 'خطأ في الخادم';
$lang['text_invalid_email']                 = 'خطا في عنوان البريد الالكتروني';
$lang['text_empty_fields']                  = 'يجب ان لا تكون الحقول المطلوبة فارغه';
$lang['text_success_response']              = 'نجاح';
$lang['text_success_dynamic_done']          = 'أضيف بنجاح';
$lang['text_success_dynamic_delete']        = 'تم الحذف بنجاح';
$lang['text_success_dynamic_update']        = 'تم التحديث بنجاح';
$lang['text_yesterday_date_error']          = 'يرجى تحديد أي تاريخ في المستقبل أو تاريخ اليوم';

// Messages for user login
$lang['text_user_login_wrong_username']     = 'اسم المستخدم غير صحيح';
$lang['text_user_login_wrong_password']     = 'كلمة المرور غير صحيحة';
$lang['text_user_login_success']            = 'تم تسجيل الدخول بنجاح';
$lang['text_user_login_verify_number']      = 'يرجى التحقق من رقم هاتفك أولاً';
$lang['text_user_password_not_matched']     = 'كلمة المرور القديمة لا تتطابق مع سجلنا';
$lang['text_user_password_already_exist']   = 'الرقم السري مشابه للرقم السري المسبق';
$lang['text_recover_password_wrong_code']   = 'الرمز غير صحيح OTP او انتهت صلاحيته';
$lang['text_recover_password_success']      = 'لقد غيرنا كلمة مرورك بنجاح';
$lang['text_recover_code_not_verified']     = 'لم يتم التعرف على الرمز OTP';
$lang['text_user_owner_approval']           = 'لم تتم الموافقة على حسابك بعد';
$lang['text_account_under_verification']    = 'مبرووك! تم إنشاء حسابك ، ويجري التحقق من قبل فريقنا';

// Messages for adding new user
$lang['text_new_user_password_length']      = 'يرجى اختيار كلمة مرور من 6 إلى 20 حرفًا';
$lang['text_new_user_success']              = 'تمت إضافة المستخدم بنجاح';
$lang['text_new_user_email_exist']          = 'البريد الإلكتروني مسجل مسبقا';
$lang['text_new_username_less']             = 'يجب أن يحتوي اسمك على 3 أحرف على الأقل';
$lang['text_new_username_high']             = 'الاسم يجب ان لا يتعدى 20 حرف';
$lang['text_new_nickname_less']             = 'يجب أن يحتوي كنية على 3 أحرف على الأقل';
$lang['text_new_nickname_high']             = 'كنية يجب ان لا يتعدى 20 حرف';
$lang['text_new_nickname_exist']            = 'االاسم المستعار متكرر يالحلو ، يرجى اختيار اسم اخر';
$lang['text_same_user_phone']               = 'رقم الهاتف مسجل بالفعل';
$lang['text_invalid_phone']                 = 'رقم الهاتف غير صالح';
$lang['text_new_firstname_less']            = 'يجب أن يحتوي الاسم الاول على 3 أحرف على الأقل';
$lang['text_new_firstname_high']            = 'الاسم الاول يجب ان لا يتعدى 20 حرف';
$lang['text_new_lastname_less']             = 'يجب أن يحتوي الاسم الاخير على 3 أحرف على الأقل';
$lang['text_new_lastname_high']             = 'الاسم الاخير يجب ان لا يتعدى 20 حرف';

// Messages for verify user phone number
$lang['text_verify_number_success']         = 'تم التحقق بنجاح';
$lang['text_reverification_code_sent']      = 'تم إرسال رمز التحقق بنجاح';
$lang['text_verification_wrong_phone']      = 'رقم الهاتف غير صحيح';
$lang['text_recover_password_check_phone']  = 'تحقق من الكود الخاص بك لاستعادة كلمة المرور';
$lang['text_recover_password_check_email']  = 'تحقق من بريدك الالكتروني لمزيد من التعليمان';

// Adding new club messages
$lang['text_new_club_success']              = 'تم اضافة ملعبك بنجاح';
$lang['text_update_club_success']           = 'تم تحديث ملعبك بنجاح';
$lang['text_file_upload_path_error']        = 'ملف المسار ليس معرف بالطريقة الصحيحه';
$lang['text_delete_not_allowed']            = 'الحذف غير مسموح به ، اولا احذف الملاعب';
$lang['text_add_club_featured_error']       = 'ملعبك مشترك في ميزة الاعلان من قبل';
$lang['text_club_has_bookings_update_error'] = "اوقات الاثنين لا يمكن تحديثها ، توجد حجوزات هناك";
$lang['text_club_missing_time']             = 'نرجو منك التاكد من اوقات عمل و الاغلاق';
$lang['text_review_added_success']          = 'تم إضافة تعليقاتك بنجاح';
$lang['text_player_do_booking_first']       = 'يرجى القيام بحجز واحد على الأقل في هذا النادي للاستعراض';
$lang['text_coupon_code_small']             = 'يجب أن يحتوي كوبون على 3 أحرف على الأقل';
$lang['text_coupon_code_large']             = 'كوبون يجب ان لا يتعدى 10 حرف';

// Adding new field messages
$lang['text_new_field_success']             = 'تم اضافة ملعبك بنجاح';
$lang['text_update_field_success']          = 'تم تحديث ملعبك بنجاح';
$lang['text_empty_photo']                   = 'لم يتم اختيار الصورة';
$lang['text_over_limit_photos']             = 'هل يمكنك تحميل صورتين';
$lang['text_delete_not_allowed_field']      = 'لا يمكن حذف ملعبك بسبب الحجوزات';
$lang['text_coupen_already_exist']          = 'لقد قمت بوضع اسم هذا الكوبون مسبقا';

//Booking messages
$lang['text_booking_day_off']               = 'الملعل مغلق في الايام المحددة';
$lang['text_club_timing_finished']          = 'الملعب مغلق حاليا';
$lang['text_booking_already_exist']         = 'الوقت الذي اخترته محجوز حاليا';
$lang['text_booking_notify_exist']          = 'لقد قمت بالفعل بتنشيط تنبيه لهذا الحجز';
$lang['text_schedule_booking']              = 'تم تثبيت حجوزاتك بنجاح، عدا الاوقات الغير متاحة بسبب وجود حجز اخر';
$lang['text_offer_already_exist']           = 'لقد لاحظنا أنك عرضت بالفعل في هذا ملاعب';
$lang['text_facilities_updated']            = 'تم تحديث المرافق بنجاح';
$lang['text_success_hide_slot']             = 'فتحاتك المحددة مخفية بنجاح للاعبين';
$lang['text_hide_slots_skipped_time']       = 'تم إخفاء الفتحات بنجاح ولكن تم تخطي بعض الفتحات بسبب اتخاذها بالفعل ';
$lang['text_success_hide_slot_deleted']     = 'فتحاتك المخفية متاحة للآخرين الآن';
$lang['text_booking_cannot_complete_now']   = 'لا يمكنك اكمال الحجز قبل توقيت الحجز';
$lang['text_match_request_age_not_valid']   = 'هذه المباراه متاحه لعمر ';

//Players messages
$lang['text_already_favorite']              = 'لقد اضفته في المفضله مسبقا';
$lang['text_already_invited']               = 'لقد قمت باضافة اللاعب مسبقا';
$lang['text_already_accepted']              = 'يوجد احد قبل الدعوه';
$lang['text_invite_booking_expired']        = 'لا توجد دعوة وذلك بسبب انه لا يوجد حجز';
$lang['text_invited_has_booking']           = 'اللاعب لديه حجز بنفس هذا التوقيت';
$lang['text_invitation_not_cancel']         = 'لا يمكنك الغاء الدعوة الان';
$lang['text_player_has_booking']            = 'لديك حجز بنفس هذا التوقيت';
$lang['text_already_having_invitation']     = 'تمت دعوتك على هذه المباراه مسبقا';
$lang['text_already_sent_challenge']        = 'لقد قمت بارسال التحدي مسبقا';
$lang['text_already_accepted_challenge']    = 'لقد قمت بقبول التحدي مسبقا';
$lang['text_match_already_started']         = 'تم الحصول على فريق ليلعب ضدك ، لا يمكن تغيير الحالة الان';
$lang['text_required_players_less']         = 'يجب أن يكون اللاعبون المطلوبون أكثر من الصفر';

//Player Matches OR Games (PUBLIC/PRIVATE)
$lang['text_already_joined_game']           = 'لقد أرسلت بالفعل طلبًا للانضمام إلى اللعبة';
$lang['text_already_joined_challenge']      = 'لقد أرسلت بالفعل طلبًا للانضمام إلى هذا التحدي';
$lang['text_already_created_match']         = 'لقد قمت بالفعل بإنشاء مباراة';
$lang['text_players_need_finish']           = 'أكملت هذه اللعبة العدد الإجمالي للاعبين';
$lang['text_match_type_not_valid']          = 'نوع المطابقة للتحدي غير صالح';
$lang['text_already_rated_player']          = 'تم تقييم اللاعب بالفعل لهذه اللعبة';
$lang['text_cannot_rate_before_time']       = 'لا يمكنك تقييم اللاعب قبل إكمال اللعبة';
$lang['text_friendly_game_team_full']       = 'لقد اكتمل العدد لا يمكنك قبول لاعب اخر';
$lang['text_player_no_free_time_match']     = 'لديك حجز بهذا الوقت ، لا يمكنك ارسال طلب للعب';
$lang['text_team_already_created']          = 'لقد أنشأ الفريق بالفعل لهذه اللعبة';
$lang['text_team_names_same']               = 'يجب أن تكون أسماء الفرق مختلفة';
$lang['text_team_colors_same']              = 'يجب أن تكون ألوان الفريق مختلفة';
$lang['text_team_name_already_exist']       = 'يُرجى تجربة اسم فريق آخر ، فقد تم تخزينه بالفعل';
$lang['text_team_color_already_exist']      = 'يرجى تجربة لون فريق آخر ، فقد تم تخزينه بالفعل';
$lang['player_already_added_in_team']       = 'هذا اللاعب موجود بالفعل في الفريق';
$lang['manual_player_already_added']        = 'اسم اللاعب المخزن بالفعل في قائمة فريقك';
$lang['player_already_is_captain']          = 'هذا اللاعب هو بالفعل قائد لهذا الفريق';
$lang['team_has_already_a_captain']         = 'الفريق لديه قبطان بالفعل ، قم بإزالته أولاً لإضافة جديد';
$lang['text_position_already_filled']       = 'الموقف ممتلئ ، حاول وضع آخر';
$lang['player_already_added_into_game']     = 'تمت إضافة بعض اللاعبين إلى اللعبة';
$lang['another_captain_adding_player']      = 'انتظر قليلا ، انه وقت الكبتن الاخر لاختيار اللاعب';
$lang['text_challenge_already_accepted']    = 'لقد قمت بقبول فريق اخر';