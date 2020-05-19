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