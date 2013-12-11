<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Müşteriyi silmek için bir kayıt numarası belirtilmelidir.',
  'ERR_EMAIL_INCORRECT' => 'Şifre oluşturulabilmesi ve gönderilebilmesi için geçerli bir E-Posta temin edin.',
  'ERR_EMAIL_NOT_SENT_ADMIN' => 'Sistem talebinizi işleyemiyor. Lütfen kontrol edin:',
  'ERR_EMAIL_NO_OPTS' => 'Gelen E-Postalar için optimum ayarlar bulunamadı.',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Lütfen şifre onayınızı girin.',
  'ERR_ENTER_NEW_PASSWORD' => 'Lütfen yeni şifrenizi girin.',
  'ERR_ENTER_OLD_PASSWORD' => 'Lütfen eski şifrenizi girin.',
  'ERR_IE_FAILURE1' => '[Geri Dönmek İçin Buraya Tıklayın]',
  'ERR_IE_FAILURE2' => 'E-Posta hesabına bağlanırken hata oluştu. Lütfen ayarlarınızı kontrol edip, tekrar deneyin.',
  'ERR_IE_MISSING_REQUIRED' => 'Gelen E-Posta ayarlarında zorunlu bilgide eksiklik var.<br />  Lütfen ayarlarınızı gözden geçirip tekrar deneyiniz.<br /><br />Eğer Gelen E-Posta ayarlarını değiştiremiyorsanız, lütfen bu bölümdeki tüm alanları temizleyiniz.',
  'ERR_INVALID_PASSWORD' => 'Geçerli bir kullanıcı ve şifre girmelisiniz.',
  'ERR_LAST_ADMIN_1' => 'Kullanıcı İsmi "',
  'ERR_LAST_ADMIN_2' => '" sistem yöneticisi erişimine sahip son kullanıcıdır. En az bir kullanıcı sistem yöneticisi olmak zorundadır.',
  'ERR_NO_LOGIN_MOBILE' => 'Bu uygulamaya ilk bağlantınız mobil olmayan bir web tarayıcıdan veya normal modda tamamlanmalıdır. Lütfen normal web tarayıcısı moduyla dönün veya aşağıdaki normal link&#39;e tıklayın. Ortaya çıkan problem nedeniyle özür dileriz.',
  'ERR_PASSWORD_CHANGE_FAILED_1' => 'Kullanıcı şifresi değişikliği hatalı:',
  'ERR_PASSWORD_CHANGE_FAILED_2' => 'başarısız. Yeni şifre tanımlanmalı.',
  'ERR_PASSWORD_CHANGE_FAILED_3' => '. Yeni şifre geçersiz.',
  'ERR_PASSWORD_INCORRECT_OLD_1' => 'Kullanıcı için mevcut şifre yanlış:',
  'ERR_PASSWORD_INCORRECT_OLD_2' => '. Şifre bilgisini tekrar giriniz.',
  'ERR_PASSWORD_LINK_EXPIRED' => 'Link&#39;iniz zaman aşımına uğradı, lütfen yeni bir tane oluşturun',
  'ERR_PASSWORD_MISMATCH' => 'Şifreler uyuşmuyor.',
  'ERR_PASSWORD_USERNAME_MISSMATCH' => 'Geçerli bir Kullanıcı İsmi ve E-Posta Adresi belirtmek zorundasınız.',
  'ERR_REASS_DIFF_USERS' => 'Lütfen farklı kullanıcı için seçiniz.',
  'ERR_REASS_SELECT_MODULE' => 'Lütfen geri dönün ve en azından bir modül seçin.',
  'ERR_RECIPIENT_EMAIL' => 'Alıcı E-Posta Adresi',
  'ERR_REENTER_PASSWORDS' => 'Yeni Şifre ve Onay Şifreleri uyuşmuyor.',
  'ERR_REPORT_LOOP' => 'Sistem bir organizasyonel raporlama sonsuz döngüsü fark etti. Bir kullanıcı kendisine rapor edemez veya yöneticilerinden herhangi biri rapor edemez.',
  'ERR_RULES_NOT_MET' => 'Girmiş olduğunuz şifre, şifre ihtiyaçlarını karşılamamaktadır.  Lütfen tekrar deneyiniz.',
  'ERR_SERVER_SMTP_EMPTY' => 'Sistem kullanıcıya E-Posta gönderemiyor. Lütfen <a href="index.php?module=EmailMan&action=config">E-Posta Ayarları</a>&#39;ndaki Giden E-Posta Yapılandırma değerlerini kontrol ediniz.',
  'ERR_SERVER_STATUS' => 'Sunucunuzun Durumu',
  'ERR_SMTP_URL_SMTP_PORT' => 'SMTP Sunucu URL ve Portu',
  'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'SMTP Kullanıcı İsmi ve SMTP Şifresi',
  'ERR_USER_INFO_NOT_FOUND' => 'Kullanıcı Bilgisi bulunamadı',
  'ERR_USER_IS_LOCKED_OUT' => 'Bu kullanıcının Sugar uygulamasına girişi engellenmekte olup, var olan şifresi ile bağlanamaz.',
  'ERR_USER_NAME_EXISTS_1' => 'Kullanıcı İsmi',
  'ERR_USER_NAME_EXISTS_2' => 'zaten mevcut. Mevcut isim girişine izin verilmez. Olmayan bir kullanıcı ismiyle değiştiriniz.',
  'LBL_ACCOUNT_NAME' => 'Müşteri İsmi',
  'LBL_ADDRESS' => 'Adres',
  'LBL_ADDRESS_CITY' => 'Adres Şehir',
  'LBL_ADDRESS_COUNTRY' => 'Adres Ülke',
  'LBL_ADDRESS_INFORMATION' => 'Adres Bilgisi',
  'LBL_ADDRESS_POSTALCODE' => 'Adres Posta Kodu',
  'LBL_ADDRESS_STATE' => 'Adres Eyalet',
  'LBL_ADDRESS_STREET' => 'Adres Sokak',
  'LBL_ADDRESS_STREET_2' => 'Adres Sokak 2',
  'LBL_ADDRESS_STREET_3' => 'Adres Sokak 3',
  'LBL_ADMIN' => 'Sistem Yöneticisi',
  'LBL_ADMIN_DESC' => 'Kullanıcı Sistem Yönetimi sayfasındaki bütün kayıtlara ulaşabilir.',
  'LBL_ADMIN_USER' => 'Sistem Yöneticisi Kullanıcı',
  'LBL_ADVANCED' => 'Gelişmiş',
  'LBL_AFFECTED' => 'etkilendi',
  'LBL_ANY_ADDRESS' => 'Adres:',
  'LBL_ANY_EMAIL' => 'E-Posta',
  'LBL_ANY_PHONE' => 'Telefon',
  'LBL_APPLY_OPTIMUMS' => 'Optimum Değerleri Uygula',
  'LBL_ASSIGN_PRIVATE_TEAM' => 'Özel takım kayıtta',
  'LBL_ASSIGN_TEAM' => 'Takıma Ata',
  'LBL_ASSIGN_TO_USER' => 'Kullanıcıya Ata',
  'LBL_AUTHENTICATE_ID' => 'Doğrulama ID',
  'LBL_BASIC' => 'Gelen Kurulumu',
  'LBL_BUTTON_CREATE' => 'Oluştur',
  'LBL_BUTTON_EDIT' => 'Değiştir',
  'LBL_CALENDAR_OPTIONS' => 'Takvim Seçenekleri',
  'LBL_CANCEL' => 'İptal',
  'LBL_CANNOT_SEND_PASSWORD' => 'Şifre gönderilemiyor',
  'LBL_CERT' => 'Sertifikayı Denetleyin',
  'LBL_CERT_DESC' => 'Posta sunucusunun Güvenlik Sertifikasının denetlenmesini şart koş  - self-signing ise kullanmayınız.',
  'LBL_CHANGE_PASSWORD' => 'Üretilen Şifreyi Değiştir',
  'LBL_CHANGE_PASSWORD_TITLE' => 'Şifre',
  'LBL_CHANGE_SYSTEM_PASSWORD' => 'Lütfen yeni bir şifre belirtin.',
  'LBL_CHECKMARK' => 'Kontrol İşareti',
  'LBL_CHOOSE_A_KEY' => 'İzinsiz olarak takviminizin yayınlanmasını engellemek için bir anahtar seçiniz',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'E-posta Servis sağlayıcınızı seçiniz:',
  'LBL_CHOOSE_WHICH' => 'Navigasyon barda gösterilecek sekmeleri seçiniz. Modüllerin görünmesini istediğiniz sıralamayı belirleyin.',
  'LBL_CITY' => 'Şehir',
  'LBL_CLEAR_BUTTON_TITLE' => 'Temizle',
  'LBL_CONFIRM_PASSWORD' => 'Şifreyi Onaylayın',
  'LBL_CONFIRM_REGULAR_USER' => 'Kullanıcı tipini Sistem Yöneticisinden Normal Kullanıcıya değiştirdiniz. Bu değişikliği kaydettikten sonra, kullanıcı artık sistem yöneticisi haklarına sahip olmayacak.\\n\\nDevam etmek için TAMAM butonuna basın.\\nİptal butonuna basarak kayda dönebilirsiniz.',
  'LBL_COUNTRY' => 'Ülke',
  'LBL_CREATED_BY_NAME' => 'Oluşturan',
  'LBL_CURRENCY' => 'Para Birimi',
  'LBL_CURRENCY_EXAMPLE' => 'Para Birimi Örnek Görüntüleme',
  'LBL_CURRENCY_SIG_DIGITS' => 'Para Birimi Anlamlı Ondalık Kısmı',
  'LBL_CURRENCY_SIG_DIGITS_DESC' => 'Para biriminde gösterilen ondalık basamak sayısı',
  'LBL_CURRENCY_TEXT' => 'Yeni kayıtlar oluşturduğunuzda varsayılan olarak görüntülenmesini istediğiniz para birimini seçin. Bu aynı zamanda Fırsatlar Liste Görünümünde Tutar sütunlarında görüntülenecek para birimidir.',
  'LBL_DATE_ENTERED' => 'Giriş Tarihi',
  'LBL_DATE_FORMAT' => 'Tarih Formatı',
  'LBL_DATE_FORMAT_TEXT' => 'Tarih formatını belirtin',
  'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
  'LBL_DECIMAL_SEP' => 'Ondalık Sembolü',
  'LBL_DECIMAL_SEP_TEXT' => 'Ondalık kısmı ayırmak için kullanılan karakter',
  'LBL_DEFAULT_PRIMARY_TEAM' => 'Varsayılan Asıl Takım',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kullanıcılar',
  'LBL_DEFAULT_TEAM' => 'Varsayılan Takımlar',
  'LBL_DEFAULT_TEAM_TEXT' => 'Üyesi olduğunuz ve Mevcut kayıtlara otomatik olarak atanan takımlar.',
  'LBL_DELETED' => 'Silindi',
  'LBL_DELETE_GROUP_CONFIRM' => 'Grup Kullanıcısını silmek istediğinizden emin misiniz? Kullanıcı kaydını silmek için TAMAM&#39;ı tıklayın.<br/> TAMAM&#39;ı tıkladıktan sonra, Grup Kullanıcısına atanmış tüm kayıtları başka bir kullanıcıya atayabileceksiniz.',
  'LBL_DELETE_PORTAL_CONFIRM' => 'Bu Portal API kullanıcıyı silmek istediğinizden emin misiniz? Kullanıcı kaydını silmek için TAMAM&#39;a tıklayın.',
  'LBL_DELETE_USER' => 'Kullanıcıyı Sil',
  'LBL_DELETE_USER_CONFIRM' => 'Kullanıcıya ait kayıt silindiğinde, aynı zamanda tekabül ettiği çalışan kaydı da silinecektir. Kullanıcı silindikten sonra, kullanıcıyı içeren tüm tanımlar ve raporlar da güncellenmelidir. <br /><br />Kullanıcı kaydını silmek için OK&#39;ye tıklayınız. OK&#39;yi tıkladıktan sonra, kullanıcıya atanmış tüm kayıtları başka bir kullanıcıya atayabileceksiniz.',
  'LBL_DEPARTMENT' => 'Departman',
  'LBL_DESCRIPTION' => 'Tanım',
  'LBL_DISPLAY_TABS' => 'Sekmeleri Göster',
  'LBL_DOWNLOADS' => 'İndirilenler',
  'LBL_DST_INSTRUCTIONS' => '(+DST) Günışığı Koruma Zamanı uyumluluğunu gösterir',
  'LBL_EAPM_SUBPANEL_TITLE' => 'Harici Hesaplar',
  'LBL_EDIT' => 'Değiştir',
  'LBL_EDITLAYOUT' => 'Yerleşimi Değiştir',
  'LBL_EDIT_TABS' => 'Navigasyon Bar İçin Modülleri Seçin',
  'LBL_EMAIL' => 'E-Posta Adresi',
  'LBL_EMAILS' => 'E-Postalar',
  'LBL_EMAIL_ADDRESS' => 'E-Posta Adresi',
  'LBL_EMAIL_CHARSET' => 'Gönderilen E-Posta Karakter Seti',
  'LBL_EMAIL_EDITOR_OPTION' => 'Format oluştur',
  'LBL_EMAIL_GMAIL_DEFAULTS' => 'Gmail&#153; Varsayılan Ayarları İle Doldur',
  'LBL_EMAIL_INBOUND_TITLE' => 'Gelen E-Posta Ayarları',
  'LBL_EMAIL_LINK_TYPE' => 'E-Posta İstemcisi',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Sugar E-Posta İstemcisi</b> : Sugar uygulamasını kullanarak E-Posta gönderin.<br><b>Harici Posta İstemcisi</b> : Microsoft Outlook gibi harici uygulamayı kullanarak E-Posta gönderin.',
  'LBL_EMAIL_NOT_SENT' => 'Sistem talebinizi yerine getiremiyor. Lütfen sistem yöneticisine başvurun.',
  'LBL_EMAIL_OTHER' => 'E-Posta 2',
  'LBL_EMAIL_OUTBOUND_TITLE' => 'Gönderilen E-Posta Ayarları',
  'LBL_EMAIL_PROVIDER' => 'E-Posta Konumlandırıcı',
  'LBL_EMAIL_SHOW_COUNTS' => 'E-Posta sayısını göster?',
  'LBL_EMAIL_SIGNATURE_ERROR1' => 'Bu imza bir isim gerektiriyor.',
  'LBL_EMAIL_SMTP_SSL' => 'SSL üzerinden SMTP&#39;yi aktif hale getir',
  'LBL_EMAIL_TEMPLATE_MISSING' => 'Kullanıcıya gönderilecek olan şifreyi içeren E-Posta için E-Posta şablonu seçilmedi. Lütfen Şifre Yönetimi (Password Management) sayfasında bir E-Posta şablonu seçiniz.',
  'LBL_EMPLOYEE_INFORMATION' => 'Çalışan Bilgileri',
  'LBL_EMPLOYEE_STATUS' => 'Çalışan Durumu',
  'LBL_ERROR' => 'Hata',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange Şifresi:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange Sunucu Portu:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Sunucusu:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange Kullanıcı İsmi:',
  'LBL_EXPORT_CHARSET' => 'Veri Yükleme/Dışarı Aktarma Karakter Seti',
  'LBL_EXPORT_CHARSET_DESC' => 'Yerel ayarlarınızda kullanılan karakter setini seçin.  Bu değer veri yüklemelerinde, giden E-Postalarda, .cvs veri aktarımlarında ve vCard oluşturulurken kullanılacaktır.',
  'LBL_EXPORT_CREATED_BY' => 'Oluşturan ID',
  'LBL_EXPORT_DELIMITER' => 'Dışarı Aktarım Ayıracı',
  'LBL_EXPORT_DELIMITER_DESC' => 'Dışa aktarılan veri için ayraç karakter(lerini) belirtiniz.',
  'LBL_EXTERNAL_AUTH_ONLY' => 'Bu kullanıcının kimliğinin doğrulanma tek yöntemi:',
  'LBL_EXT_AUTHENTICATE' => 'Harici Sistemden Otorizasyon',
  'LBL_FAX' => 'Faks',
  'LBL_FAX_PHONE' => 'Faks',
  'LBL_FDOW' => 'Haftanın İlk Günü',
  'LBL_FDOW_TEXT' => 'Hafta, Ay ve Yıl görünümünde görünen İlk Gün',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_FIND_OPTIMUM_MSG' => '<br>Optimum bağlantı değişkenlerini buluyor.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Optimum Konfigürasyonu Bul',
  'LBL_FIRST_NAME' => 'İsim',
  'LBL_FORCE' => 'Tersine Zorla',
  'LBL_FORCE_DESC' => 'Bazı IMAP/POP3 sunucular için özel opsiyon ihtiyacı bulunmaktadır. Bağlanırken opsiyonun tersine zorlayın (örneğin, /notls)',
  'LBL_FORECASTS' => 'Tahminler',
  'LBL_FOUND_OPTIMUM_MSG' => '<br>Optimum ayarlar bulundu.  Lütfen aşağıdaki butona basarak, posta hesabınıza uygulayınız.',
  'LBL_GENERATE_PASSWORD' => 'Şifre Sıfırla',
  'LBL_GENERATE_PASSWORD_BUTTON_KEY' => 'G',
  'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Şifre Sıfırla',
  'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Şifre Sıfırla',
  'LBL_GMAIL_SMTPPASS' => 'Gmail Şifresi:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail E-Posta Adresi:',
  'LBL_GROUP_DESC' => 'Bir grup öğeleri atamak için kullanın (Örnek: Gelen E-Posta için). Bu kullanıcı Sugar web sayfasına bağlanamaz.',
  'LBL_GROUP_USER' => 'Grup Kullanıcısı',
  'LBL_GROUP_USER_STATUS' => 'Grup Kullanıcısı',
  'LBL_HELP' => 'Yardım',
  'LBL_HIDEOPTIONS' => 'Seçenekleri Gizle',
  'LBL_HIDE_TABS' => 'Sekmeleri Gizle',
  'LBL_HOME_PHONE' => 'Ev Telefonu',
  'LBL_ICAL_PUB_URL' => 'iCal entegrasyon URL',
  'LBL_ICAL_PUB_URL_HELP' => 'iCal içerisinde Sugar takvimine abone olmak için bu URL adresini kullanın.',
  'LBL_INBOUND_TITLE' => 'Müşteri Bilgisi',
  'LBL_IS_ADMIN' => 'Sistem Yöneticisi',
  'LBL_IS_GROUP' => 'Grup',
  'LBL_LANGUAGE' => 'Dil',
  'LBL_LAST_ADMIN_NOTICE' => 'Kendinizi seçtiniz. Kendinizin Kullanıcı Tipi veya Durumunu değiştiremezsiniz.',
  'LBL_LAST_NAME' => 'Soyisim',
  'LBL_LAST_NAME_SLASH_NAME' => 'Soyisim/İsim',
  'LBL_LAYOUT_OPTIONS' => 'Yerleşim Seçenekleri',
  'LBL_LDAP' => 'LDAP',
  'LBL_LDAP_AUTHENTICATION' => 'LDAP Kimlik Denetimi',
  'LBL_LDAP_ERROR' => 'LDAP Hatası: Sistem Yöneticisi ile bağlantı kurun',
  'LBL_LDAP_EXTENSION_ERROR' => 'LDAP Hatası: Eklemeler yüklenmedi',
  'LBL_LIST_ACCEPT_STATUS' => 'Kabul Durumu',
  'LBL_LIST_ADMIN' => 'Sistem Yöneticisi',
  'LBL_LIST_DEPARTMENT' => 'Departman',
  'LBL_LIST_DESCRIPTION' => 'Tanım',
  'LBL_LIST_EMAIL' => 'E-Posta',
  'LBL_LIST_FORM_TITLE' => 'Kullanıcılar',
  'LBL_LIST_GROUP' => 'Grup',
  'LBL_LIST_LAST_NAME' => 'Soyisim',
  'LBL_LIST_MEMBERSHIP' => 'Üyelik',
  'LBL_LIST_NAME' => 'İsim',
  'LBL_LIST_PASSWORD' => 'Şifre',
  'LBL_LIST_PRIMARY_PHONE' => 'Asıl Telefon',
  'LBL_LIST_STATUS' => 'Durum',
  'LBL_LIST_TITLE' => 'Başlık',
  'LBL_LIST_USER_NAME' => 'Kullanıcı İsmi',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'İsim Gösterim Formatı',
  'LBL_LOCALE_DESC_FIRST' => '[İsim]',
  'LBL_LOCALE_DESC_LAST' => '[Soyisim]',
  'LBL_LOCALE_DESC_SALUTATION' => '[Önad]',
  'LBL_LOCALE_DESC_TITLE' => '[Başlık]',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Örnek',
  'LBL_LOCALE_NAME_FORMAT_DESC' => 'İsimlerin nasıl gösterileceğini belirt.',
  'LBL_LOCALE_NAME_FORMAT_DESC_2' => '<i>"h" Hitap <br> "i" İsim<br>"s" Soyisim </i>',
  'LBL_LOGGED_OUT_1' => 'Oturumunuz kapanmış. Tekrar giriş yapmak için tıklayınız',
  'LBL_LOGGED_OUT_2' => 'burada',
  'LBL_LOGGED_OUT_3' => '.',
  'LBL_LOGIN' => 'Kullanıcı İsmi',
  'LBL_LOGIN_ADMIN_CALL' => 'Lütfen sistem yöneticisi ile iletişime geçiniz.',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Çok fazla başarısız giriş denemesi.',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_BUTTON_LABEL' => 'Giriş',
  'LBL_LOGIN_BUTTON_TITLE' => 'Giriş',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Şifreyi mi Unuttunuz?',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Girişi tekrar deneyebileceğiniz süre:',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'gün.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 's.',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'dak.',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'sn.',
  'LBL_LOGIN_OPTIONS' => 'Seçenekler',
  'LBL_LOGIN_SUBMIT' => 'Gönder',
  'LBL_LOGIN_WELCOME_TO' => 'Hoş geldiniz',
  'LBL_MAILBOX' => 'İzlenen Dosya',
  'LBL_MAILBOX_DEFAULT' => 'Gelen Kutusu',
  'LBL_MAILBOX_SSL_DESC' => 'Bağlanırken SSL kullan. Eğer bu yöntem çalışmazsa, PHP kurulumu konfigürasyonunda "--with-imap-ssl" seçeneğinin olduğunu kontrol edin.',
  'LBL_MAILBOX_TYPE' => 'Olası Aksiyonlar',
  'LBL_MAILMERGE' => 'Posta Birleştir',
  'LBL_MAILMERGE_TEXT' => 'Posta Birleştirmeyi aktif hale getir (Posta Birleştirme, sistem yöneticisi tarafından Ayarları Düzenle bölümünde de etkinleştirilmelidir)',
  'LBL_MAIL_FROMADDRESS' => 'Yanıtlanacak Adres',
  'LBL_MAIL_FROMNAME' => 'Yanıtlanacak İsim',
  'LBL_MAIL_OPTIONS_TITLE' => 'E-Posta Ayarları',
  'LBL_MAIL_SENDTYPE' => 'Mesaj Aktarım Servisi',
  'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP Kimlik Doğrulaması Kullanılsın mı?',
  'LBL_MAIL_SMTPPASS' => 'SMTP Şifresi:',
  'LBL_MAIL_SMTPPORT' => 'SMTP Portu:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP Sunucusu:',
  'LBL_MAIL_SMTPTYPE' => 'SMTP Sunucu Türü:',
  'LBL_MAIL_SMTPUSER' => 'SMTP Kullanıcı ismi:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Sunucu Özellikleri',
  'LBL_MARK_READ' => 'Mesajları sunucuda bırak',
  'LBL_MARK_READ_DESC' => 'Verileri Yükleme sırasında, posta sunucusundaki mesajları okundu olarak işaretle; silme.',
  'LBL_MARK_READ_NO' => 'E-Posta içeri aktarmadan sonra silindi olarak işaretlendi',
  'LBL_MARK_READ_YES' => 'İçeri aktarmadan sonra sunucuda kalan E-Posta',
  'LBL_MAX_SUBTAB' => 'Alt Sekme Sayısı',
  'LBL_MAX_SUBTAB_DESCRIPTION' => 'Diğerleri menüsü gözükmeden önce, her sekmede gösterilecek alt sekme sayısı.',
  'LBL_MAX_TAB' => 'Sekmelerin Sayısı',
  'LBL_MAX_TAB_DESCRIPTION' => 'Navigasyon barında görüntülenmesini istediğiniz modüllerin sayısını belirtiniz. Görüntülenecek Modüllerin sayısı tarayıcınız genişliğine bağlıdır. Görüntülenmeyen modüller Daha fazlası menüsünde gösterilecek.',
  'LBL_MESSENGER_ID' => 'IM İsmi',
  'LBL_MESSENGER_TYPE' => 'IM Tipi',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Yönetim henüz varsayılan giden hesabı yapılandırmamış. Test E-Postası gönderemezsiniz.',
  'LBL_MOBILE_PHONE' => 'Mobil',
  'LBL_MODIFIED_BY' => 'Değiştiren',
  'LBL_MODIFIED_BY_ID' => 'Değiştiren ID',
  'LBL_MODIFIED_USER_ID' => 'Değiştirilmiş Kullanıcı ID&#39;si',
  'LBL_MODULE_NAME' => 'Kullanıcılar',
  'LBL_MODULE_NAME_SINGULAR' => 'Kullanıcı',
  'LBL_MODULE_TITLE' => 'Kullanıcılar: Ana Sayfa',
  'LBL_MY_TEAMS' => 'Takımlarım',
  'LBL_NAME' => 'Tam İsim',
  'LBL_NAVIGATION_PARADIGM' => 'Navigasyon',
  'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => 'Navigasyon menüsünde, modüllerin daha önce belirlenmiş gruplar halinde görünmesi için seçiniz. Seçildiğinde, "Daha fazlası" menüsünde, "Menüyü Filtrele" seçeneği görünecektir.',
  'LBL_NEW_FORM_TITLE' => 'Yeni Kullanıcı',
  'LBL_NEW_PASSWORD' => 'Yeni Şifre',
  'LBL_NEW_PASSWORD1' => 'Şifre',
  'LBL_NEW_PASSWORD2' => 'Şifreyi Onaylayın',
  'LBL_NEW_USER_BUTTON_KEY' => 'N',
  'LBL_NEW_USER_BUTTON_LABEL' => 'Yeni Kullanıcı',
  'LBL_NEW_USER_BUTTON_TITLE' => 'Yeni Kullanıcı',
  'LBL_NEW_USER_PASSWORD_1' => 'Şifre başarıyla değiştirildi.',
  'LBL_NEW_USER_PASSWORD_2' => 'Kullanıcıya sistem-tarafından-üretilen şifreyi de içeren E-Posta gönderildi.',
  'LBL_NEW_USER_PASSWORD_3' => 'Şifre başarıyla oluşturuldu.',
  'LBL_NORMAL_LOGIN' => 'Normal Görünüme geç',
  'LBL_NOTES' => 'Notlar',
  'LBL_NO_KEY' => 'Anahtar değeri girilmedi. Yayını etkinleştirmek için anahtarı giriniz.',
  'LBL_NUMBER_GROUPING_SEP' => '1000 ler ayracı',
  'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Binleri ayırmak için kullanılan karakter',
  'LBL_OAUTH_TOKENS' => 'OAuth Anahtarları',
  'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => 'OAuth Erişim Anahtarları',
  'LBL_OFFICE_PHONE' => 'Ofis Telefonu',
  'LBL_OK' => 'Tamam',
  'LBL_OLD_PASSWORD' => 'Şimdiki Şifre',
  'LBL_ONLY' => 'Yalnızca',
  'LBL_ONLY_SINCE' => 'Yalnızca Son Kontrolden sonraki Verileri Yükle',
  'LBL_ONLY_SINCE_DESC' => 'POP3 kullanırken, PHP Yeni ve Okunmamış mesajları filtreleyemez.  Bu seçenek, posta hesabına son bağlantıdan sonra oluşan mesajların kontrolüne izin verir.  Bu sunucunuz IMAP kullanmıyorsa, performansın önemli ölçüde artmasını sağlayacaktır.',
  'LBL_ONLY_SINCE_NO' => 'Hayır. Posta sunucusundaki tüm E-Postaları kontrol et.',
  'LBL_ONLY_SINCE_YES' => 'Evet.',
  'LBL_OTHER' => 'Diğer',
  'LBL_OTHER_EMAIL' => 'Diğer E-Posta Adresi',
  'LBL_OTHER_PHONE' => 'Diğer Telefon',
  'LBL_OWN_OPPS' => 'Fırsat mevcut değil',
  'LBL_OWN_OPPS_DESC' => 'Eğer bu kullanıcıya Fırsat atanmayacaksa seçiniz. Satış aktivitelerinde yer almayan yöneticiler için bu ayarı kullanabilirsiniz. Bu ayar Tahmin Modülü için kullanılmaktadır.',
  'LBL_PASSWORD' => 'Şifre',
  'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Şifreniz sistem tarafından üretildi',
  'LBL_PASSWORD_EXPIRATION_LOGIN' => 'Şifrenin süresi sona erdi. Lütfen bir şifre tanımlayınız.',
  'LBL_PASSWORD_EXPIRATION_TIME' => 'Şifrenin süresi sona erdi. Lütfen bir şifre tanımlayınız.',
  'LBL_PASSWORD_GENERATED' => 'Yeni şifre oluşturuldu',
  'LBL_PASSWORD_SENT' => 'Şifre Güncellendi',
  'LBL_PDF_FONT_NAME_DATA' => 'Alt Bilgi için Yazı Tipi',
  'LBL_PDF_FONT_NAME_DATA_TEXT' => 'Seçilen yazı tipi, PDF Dokümanı sayfa altındaki metinde kullanılacak',
  'LBL_PDF_FONT_NAME_MAIN' => 'Başlık ve Gövde Yazı Tipi',
  'LBL_PDF_FONT_NAME_MAIN_TEXT' => 'Seçilen yazı tipi, PDF Dokümanı sayfa üstünde ve sayfa içindeki metinde kullanılacak',
  'LBL_PDF_FONT_SIZE_DATA' => 'Veri Yazı Tipi Boyutu',
  'LBL_PDF_FONT_SIZE_DATA_TEXT' => '',
  'LBL_PDF_FONT_SIZE_MAIN' => 'Ana Yazı Tipi Boyutu',
  'LBL_PDF_FONT_SIZE_MAIN_TEXT' => '',
  'LBL_PDF_MARGIN_BOTTOM' => 'Alt Kenar Boşluğu',
  'LBL_PDF_MARGIN_BOTTOM_TEXT' => '',
  'LBL_PDF_MARGIN_FOOTER' => 'Sayfa Altı Kenar Boşluğu',
  'LBL_PDF_MARGIN_FOOTER_TEXT' => '',
  'LBL_PDF_MARGIN_HEADER' => 'Başlık Kenar Boşluğu',
  'LBL_PDF_MARGIN_HEADER_TEXT' => '',
  'LBL_PDF_MARGIN_LEFT' => 'Sol Kenar Boşluğu',
  'LBL_PDF_MARGIN_LEFT_TEXT' => '',
  'LBL_PDF_MARGIN_RIGHT' => 'Sağ Kenar Boşluğu',
  'LBL_PDF_MARGIN_RIGHT_TEXT' => '',
  'LBL_PDF_MARGIN_TOP' => 'Üst Kenar Boşluğu',
  'LBL_PDF_MARGIN_TOP_TEXT' => '',
  'LBL_PDF_PAGE_FORMAT' => 'Sayfa Formatı',
  'LBL_PDF_PAGE_FORMAT_TEXT' => 'Sayfalar için kullanılan format',
  'LBL_PDF_PAGE_ORIENTATION' => 'Sayfa Yönlendirmesi',
  'LBL_PDF_PAGE_ORIENTATION_L' => 'Yatay (Landscape)',
  'LBL_PDF_PAGE_ORIENTATION_P' => 'Düşey (Portrait)',
  'LBL_PDF_PAGE_ORIENTATION_TEXT' => '',
  'LBL_PDF_SETTINGS' => 'PDF Ayarları',
  'LBL_PHONE' => 'Telefon',
  'LBL_PHONE_FAX' => 'Fax',
  'LBL_PHONE_HOME' => 'Ev Telefonu',
  'LBL_PHONE_MOBILE' => 'Cep Telefonu',
  'LBL_PHONE_OTHER' => 'Diğer Telefon',
  'LBL_PHONE_WORK' => 'İş Telefonu',
  'LBL_PICK_TZ_DESCRIPTION' => 'Devam etmeden önce, lütfen bulunduğunuz zaman dilimini seçiniz ve Kaydet butonuna basarak devam ediniz.  İstediğinizde zaman dilimini Hesabım  bölümünden değiştirebilirsiniz.',
  'LBL_PICK_TZ_WELCOME' => 'Sugar Uygulamasına Hoş geldiniz.',
  'LBL_PICTURE_FILE' => 'Resim',
  'LBL_PORT' => 'Posta Sunucusu Portu',
  'LBL_PORTAL_ONLY' => 'Sadece Portalde',
  'LBL_PORTAL_ONLY_DESC' => 'Portal API için kullanımı için. Sugar web ara yüzünden bu yöntemle sisteme giriş yapamaz.',
  'LBL_PORTAL_ONLY_USER' => 'Portal API Kullanıcısı',
  'LBL_POSTAL_CODE' => 'Posta Kodu',
  'LBL_PRIMARY_ADDRESS' => 'Asıl Adresi',
  'LBL_PRIVATE_TEAM_FOR' => '...için özel takım',
  'LBL_PROCESSING' => 'İşlenen',
  'LBL_PROMPT_TIMEZONE' => 'Kullanıcı Sihirbazı',
  'LBL_PROMPT_TIMEZONE_TEXT' => 'İlk girişte kullanıcıların Yeni Kullanıcı Sihirbazını kullanmaları için işaretleyin.',
  'LBL_PROSPECT_LIST' => 'Aday Müşteri Listesi',
  'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Hem Kullanıcı ismini hem de E-Posta adresini sağlayınız.',
  'LBL_PSW_MODIFIED' => 'Son Şifre Değişimi',
  'LBL_PUBLISH_KEY' => 'Anahtarı Yayınla',
  'LBL_QUOTAS' => 'Kotalar',
  'LBL_REASS_ASSESSING' => 'Değerlendirilen',
  'LBL_REASS_BUTTON_CLEAR' => 'Temizle',
  'LBL_REASS_BUTTON_CONTINUE' => 'Sonraki >',
  'LBL_REASS_BUTTON_GO_BACK' => '< Önceki',
  'LBL_REASS_BUTTON_REASSIGN' => 'Tekrar Belirle',
  'LBL_REASS_BUTTON_RESTART' => 'Yeniden Başlat',
  'LBL_REASS_BUTTON_RETURN' => 'Dönüş',
  'LBL_REASS_BUTTON_SUBMIT' => 'Gönder',
  'LBL_REASS_CANNOT_PROCESS' => 'işlenememiş:',
  'LBL_REASS_CONFIRM_REASSIGN' => 'Tüm kullanıcıların kayıtlarını yeniden atamak mı istiyorsunuz?',
  'LBL_REASS_CONFIRM_REASSIGN_NO' => 'Hayır',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE' => 'Yeniden ata',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => 'Evet',
  'LBL_REASS_DESC_PART1' => 'Belli bir kullanıcıdan diğer bir kullanıcıya atanmış kayıtları içeren modülleri seçiniz.<br /><br />Her bir seçilen modülde güncellenecek olan kayıt sayısını görüntüleyebilmek için İleri&#39;ye tıklayınız. Herhangi bir kaydı atamadan sayfadan çıkmak için İptal&#39; e tıklayınız.',
  'LBL_REASS_DESC_PART2' => 'Hangi iş akışlarına hangi modüllerinin karşılık geldiğini seçiniz, atama bildirilerini gönderiniz, ve yeniden atamalar süresince değişiklik tarihçesi takibini yapınız. Devam etmek ve kayıtları yeniden atamak için İleri&#39;ye tıklayınız. Başlatmak için Tekrar başlat&#39;a tıklayınız.',
  'LBL_REASS_FAILED' => 'Başarısız',
  'LBL_REASS_FAILED_SAVE' => 'Kayıtları kaydetme işlemi başarısız oldu',
  'LBL_REASS_FILTERS' => 'Filtreler',
  'LBL_REASS_FROM' => 'den',
  'LBL_REASS_HAVE_BEEN_UPDATED' => 'güncellenenler:',
  'LBL_REASS_MOD_REASSIGN' => 'Yeniden Atamanın İçerdiği Modüller:',
  'LBL_REASS_NONE' => 'Yok',
  'LBL_REASS_NOTES_ONE' => 'Çalışan iş akışları yeniden atama sürecini önemli ölçüde yavaşlatacaktır.',
  'LBL_REASS_NOTES_THREE' => 'Kendinize atanan kayıtlar atama duyurularını tetiklemeyecektir.',
  'LBL_REASS_NOTES_TITLE' => 'Notlar:',
  'LBL_REASS_NOTES_TWO' => 'Değişiklik Tarihçesini seçmemiş olsanız bile, Geliştirilme Tarihi ve Kim Tarafından Geliştirildiği bilgisi kayıtlarda güncellenmeye devam edecektir.',
  'LBL_REASS_NOT_PROCESSED' => 'işlenememiş:',
  'LBL_REASS_RECORDS_FROM' => 'gelen kayıtlar',
  'LBL_REASS_SCRIPT_TITLE' => 'Kayıtları Yeniden Ata',
  'LBL_REASS_STEP2_DESC' => 'Aşağıdaki takımlar gönderen kullanıcının takımında mevcuttu, ancak gönderilen kullanıcının takımında yoktu. Gönderen kullanıcının takımındaki kayıtlar, takım kayıtları eşleşene kadar gönderilen kullanıcının takımında gözükmez.',
  'LBL_REASS_STEP2_TITLE' => 'Takımın Yeniden Atanması',
  'LBL_REASS_SUCCESSFUL' => 'Başarılı',
  'LBL_REASS_SUCCESS_ASSIGN' => 'Başarıyla atandı',
  'LBL_REASS_TEAMS_GOOD_MSG' => 'Gönderilen kullanıcı, Gelen kullanıcının takımlarının hepsine erişebilmektedir. Eşleştirme gerekmemektedir. 5 saniye içinde sonraki sayfaya yönlendireceksiniz.',
  'LBL_REASS_TEAM_NO_CHANGE' => 'Değişiklik yok',
  'LBL_REASS_TEAM_SET_TO' => 've takımların ayarlanma sebebi',
  'LBL_REASS_TEAM_TO' => 'Takımları ayarla:',
  'LBL_REASS_THE_FOLLOWING' => 'Takip eden',
  'LBL_REASS_TO' => 'kadar',
  'LBL_REASS_UPDATE_COMPLETE' => 'Güncelleme tamam',
  'LBL_REASS_USER_FROM' => 'Kullanıcıdan:',
  'LBL_REASS_USER_FROM_TEAM' => 'Kullanıcı Takımından:',
  'LBL_REASS_USER_TO' => 'Kullanıcıya:',
  'LBL_REASS_USER_TO_TEAM' => 'Kullanıcı Takımına:',
  'LBL_REASS_VERBOSE_HELP' => 'İş akışlarını içeren görevleri yeniden atama hakkında detaylı bilgi için bu tercihi seçiniz.',
  'LBL_REASS_VERBOSE_OUTPUT' => 'Ayrıntılı Çıktı',
  'LBL_REASS_WILL_BE_UPDATED' => 'kaydı güncellenecek.',
  'LBL_REASS_WORK_NOTIF_AUDIT' => 'İş Akışı / Duyurular / Değişiklik Tarihçesi (önemli ölçüde yavaş) dahil et',
  'LBL_RECAPTCHA_FILL_FIELD' => 'Resim içinde görünen metni Giriniz.',
  'LBL_RECAPTCHA_IMAGE' => 'Resme Geç',
  'LBL_RECAPTCHA_INSTRUCTION' => 'Aşağıdaki İki Kelimeyi Giriniz',
  'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'İki Kelimeyi Sağa Giriniz',
  'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Hatalı Recaptcha Özel Anahtarı',
  'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'Recaptcha scriptinin challenge parametresi hatalıydı.',
  'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Başka bir CAPTCHA Al',
  'LBL_RECAPTCHA_SOUND' => 'Sese Geç',
  'LBL_RECAPTCHA_UNKNOWN' => 'Bilinmeyen Recaptcha Hatası',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Atamalarda Bilgilendir',
  'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Bir kayıt size atandığında, bilgilendirme E-Postası alın.',
  'LBL_REGISTER' => 'Yeni Kullanıcı? Lütfen Kayıt Olun',
  'LBL_REGULAR_DESC' => 'Kullanıcı modüllere ve kayıtlara roller temelinde ulaşabilir.',
  'LBL_REGULAR_USER' => 'Normal Kullanıcı',
  'LBL_REMINDER' => 'Hatırlatıcılar',
  'LBL_REMINDER_EMAIL' => 'E-Posta',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Tüm davetlilerin e-postası',
  'LBL_REMINDER_POPUP' => 'Ekran',
  'LBL_REMINDER_TEXT' => 'Telefon araması veya toplantılar için varsayılan hatırlatıcıyı belirleyin.',
  'LBL_REMOVED_TABS' => 'Yönetici Sekmeleri Sil',
  'LBL_REPORTS_TO' => 'Rapor Edilen Kişi:',
  'LBL_REPORTS_TO_ID' => 'Rapor Edilen ID:',
  'LBL_REPORTS_TO_NAME' => 'Rapor Edilen Kişi:',
  'LBL_REQUEST_SUBMIT' => 'Talebiniz gönderildi.',
  'LBL_RESET_DASHBOARD' => 'Gösterge Panosunu Sıfırla',
  'LBL_RESET_HOMEPAGE' => 'Ana Sayfayı Sıfırla',
  'LBL_RESET_HOMEPAGE_WARNING' => 'Ana Sayfanızı sıfırlamak istediğinizden emin misiniz?',
  'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Bu kullanıcı için Ana sayfay&#39;ı sıfırlamak istediğinizden emin misiniz?',
  'LBL_RESET_PREFERENCES' => 'Kullanıcı Tercihlerini Sıfırla',
  'LBL_RESET_PREFERENCES_WARNING' => 'Tüm tercihlerinizi sıfırlamak istediğinizden emin misiniz? Uyarı: Bu işlem ayrıca sizi uygulama dışına çıkartacaktır.',
  'LBL_RESET_PREFERENCES_WARNING_USER' => 'Bu kullanıcı için tüm tercihleri sıfırlamak istediğinizden emin misiniz?',
  'LBL_RESET_TO_DEFAULT' => 'Varsayılanlara Sıfırla',
  'LBL_RESOURCE_NAME' => 'İsim',
  'LBL_RESOURCE_TYPE' => 'Tipi',
  'LBL_ROLES_SUBPANEL_TITLE' => 'Roller',
  'LBL_SALUTATION' => 'Hitap',
  'LBL_SAVED_SEARCH' => 'Kayıtlı  Arama & Yerleşim',
  'LBL_SEARCH_FORM_TITLE' => 'Kullanıcı Arama',
  'LBL_SEARCH_URL' => 'Lokasyon Arama',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'İşaretli Kullanıcıları Seç',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'İşaretli Kullanıcıları Seç',
  'LBL_SERVER_OPTIONS' => 'Gelişmiş Kurulum',
  'LBL_SERVER_TYPE' => 'Posta Sunucu Protokolü',
  'LBL_SERVER_URL' => 'Posta Sunucu Adresi',
  'LBL_SESSION_EXPIRED' => 'açtığınız oturumun süresi dolduğundan sistemden çıktınız.',
  'LBL_SETTINGS_URL' => 'URL',
  'LBL_SETTINGS_URL_DESC' => 'Sugar Plug-in for Microsoft&reg; Outlook&reg; and the Sugar Plug-in for Microsoft&reg; Word&reg; için bağlantı ayarlarını oluştururken bu URL i kullanın.',
  'LBL_SHOWOPTIONS' => 'Seçenekleri Göster',
  'LBL_SHOW_ON_EMPLOYEES' => 'Çalışan Kaydı Göster',
  'LBL_SIGNATURE' => 'İmza',
  'LBL_SIGNATURES' => 'İmzalar',
  'LBL_SIGNATURE_DEFAULT' => 'İmza Kullan?',
  'LBL_SIGNATURE_HTML' => 'HTML İmza',
  'LBL_SIGNATURE_NAME' => 'İsim',
  'LBL_SIGNATURE_PREPEND' => 'Yanıt üstünde İmza?',
  'LBL_SMTP_SERVER_HELP' => 'Bu SMTP Mail Sunucusu giden posta için kullanılabilir. E-Posta sunucusu kullanmak için, E-Posta hesabınızın kullanıcı ismi ve şifresini girin.',
  'LBL_SSL' => 'SSL Kullan',
  'LBL_SSL_DESC' => 'Posta sunucusuna bağlanırken Güvenli Soket Etiket kullan.',
  'LBL_STATE' => 'Eyalet',
  'LBL_STATUS' => 'Durum',
  'LBL_SUBPANEL_LINKS' => 'Alt panel Link&#39;leri',
  'LBL_SUBPANEL_LINKS_DESCRIPTION' => 'Detay Görünümünde, Alt panel kısa yol link&#39;lerini bir satırda göster.',
  'LBL_SUBPANEL_TABS' => 'Alt panel Sekmeleri',
  'LBL_SUBPANEL_TABS_DESCRIPTION' => 'Detay Görünümünde, Alt panelleri sekme olarak gruplayıp, her seferinde bir sekme göster.',
  'LBL_SUGAR_LOGIN' => 'Sugar Kullanıcısıdır',
  'LBL_SUPPORTED_THEME_ONLY' => 'Yalnız bu seçeneği destekleyen temaları etkiler.',
  'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => 'Eğer işaretlenmiş ise, Son Görüntülenenler Sekmesini yanda gösterir. Aksi takdirde üstte görünecektir.',
  'LBL_SWAP_LAST_VIEWED_POSITION' => 'Son Görüntülenenler yanda',
  'LBL_SWAP_SHORTCUT_DESCRIPTION' => 'Eğer işaretlenmişse, Kısa yollar Sekmesini üstte gösterir. Aksi takdirde yanda görünecektir.',
  'LBL_SWAP_SHORTCUT_POSITION' => 'Kısa yollar üstte',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Sistem Tarafından Üretilen Şifre',
  'LBL_TAB_TITLE_EMAIL' => 'E-Posta Ayarları',
  'LBL_TAB_TITLE_USER' => 'Kullanıcı Ayarları',
  'LBL_TEAMS' => 'Takımlar',
  'LBL_TEAM_MEMBERSHIP' => 'Takım Üyeliği',
  'LBL_TEAM_SET' => 'Takım Kümesi',
  'LBL_TEAM_UPLINE' => 'Üyenin Raporladığı kişi',
  'LBL_TEAM_UPLINE_EXPLICIT' => 'Üye',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Test',
  'LBL_TEST_SETTINGS' => 'Ayarları Test Et',
  'LBL_TEST_SUCCESSFUL' => 'Bağlantı başarıyla tamamlandı.',
  'LBL_THEME' => 'Temalar',
  'LBL_THEMEPREVIEW' => 'Ön izleme',
  'LBL_THEME_COLOR' => 'Renk',
  'LBL_THEME_FONT' => 'Yazı Tipi',
  'LBL_TIMEZONE' => 'Zaman Dilimi',
  'LBL_TIMEZONE_DST' => 'Gün Işığından Faydalanma',
  'LBL_TIMEZONE_DST_TEXT' => 'Gün Işığından Tasarrufu İzle',
  'LBL_TIMEZONE_TEXT' => 'Zaman dilimini belirleyin',
  'LBL_TIME_FORMAT' => 'Zaman Formatı',
  'LBL_TIME_FORMAT_TEXT' => 'Saat formatını belirleyin',
  'LBL_TITLE' => 'Başlık',
  'LBL_TLS' => 'TLS Kullan',
  'LBL_TLS_DESC' => 'Posta sunucusuna bağlanırken Transport Layer Security kullanın - yalnızca posta sunucunuz bu protokol desteğini sağlıyorsa kullanılabilir.',
  'LBL_TOGGLE_ADV' => 'Detaylı Gösterim',
  'LBL_TOO_MANY_CONCURRENT' => 'Aynı kullanıcı ismi altında başka bir oturum başlatıldığından ilgili oturum sona erdi.',
  'LBL_UPDATE_FINISH' => 'Güncelleme tamam',
  'LBL_USER' => 'Kullanıcılar',
  'LBL_USER_ACCESS' => 'Erişim',
  'LBL_USER_HASH' => 'Şifre',
  'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Kullanıcı Tatilleri',
  'LBL_USER_INFORMATION' => 'Kullanıcı Bilgisi',
  'LBL_USER_LOCALE' => 'Yerel Ayarlar',
  'LBL_USER_NAME' => 'Kullanıcı İsmi',
  'LBL_USER_NAME_FOR_ROLE' => 'Kullanıcılar/Takımlar/Roller',
  'LBL_USER_PREFERENCES' => 'Kullanıcı Tercihleri',
  'LBL_USER_SETTINGS' => 'Kullanıcı Ayarları',
  'LBL_USER_TYPE' => 'Kullanıcı Tipi',
  'LBL_USE_GROUP_TABS' => 'Gruplanmış Modüller',
  'LBL_USE_REAL_NAMES' => 'İsim - Soyisim göster',
  'LBL_USE_REAL_NAMES_DESC' => 'Atanan alanlardaki Kullanıcı İsmi yerine Kullanıcıların tam ismini göster.',
  'LBL_WIZARD_BACK_BUTTON' => '< Önceki',
  'LBL_WIZARD_FINISH' => 'Ayarlarınızı kaydetmek ve Sugar&#39;ı kullanmaya başlamak için aşağıdaki <b>Bitir</b>&#39;i tıklayınız. Sugar kullanımı hakkında daha fazla bilgi için:<br /><br /><br /><table cellpadding=0 cellspacing=0><br /><tr><td><!--not_in_theme!--><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar Üniversitesi</b></a><br>Son kullanıcı ve Sistem Yöneticisi Eğitim İçeriği ve Kaynaklar</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>Dokümantasyon</b></a><br>Ürün Kılavuzları ve Yayın Notları</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>Bilgi Tabanı</b></a><br>SugarCRM Destek ekibinden sık gerçekleştirilen görevler ve işler için İpuçları</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>Forumlar</b></a><br>Sugar Topluluğunun birbiri ve SugarCRM Geliştiricileri ile ilgilendikleri konularda bilgi paylaştıkları forumlar</td></tr><br /></table>',
  'LBL_WIZARD_FINISH1' => 'Sonrasında ne yapmak istersiniz?',
  'LBL_WIZARD_FINISH10' => 'Uygulama alanları ve yerleşimleri oluşturmak ve yönetmek için Stüdyo kullanılabilir.',
  'LBL_WIZARD_FINISH11' => 'Sugar Üniversitesini Ziyaret et',
  'LBL_WIZARD_FINISH12' => 'Uygulamanın bir sistem yöneticisi veya son kullanıcısı olarak çalışmaya başlamanız için size yardım edecek eğitim materyallerini ve sınıflarını bul.',
  'LBL_WIZARD_FINISH14' => 'Dokümantasyon',
  'LBL_WIZARD_FINISH15' => 'Ürün Rehberi ve Versiyon Notları',
  'LBL_WIZARD_FINISH16' => 'Bilgi Tabanı',
  'LBL_WIZARD_FINISH17' => 'Sugar uygulamasında kullanılan ortak görev ve iş akışları için SugarCRM Destek Ekibinden ipuçları',
  'LBL_WIZARD_FINISH18' => 'Forumlar',
  'LBL_WIZARD_FINISH19' => 'Forumlar, SugarCRM Uygulama Geliştiricileri ve ortak ilgili alanlarında bilgi paylaşmak üzere Sugar Topluluğu için oluşturulmuştur',
  'LBL_WIZARD_FINISH2' => 'Kullanmaya Başlayın',
  'LBL_WIZARD_FINISH2DESC' => 'Doğruca uygulamanın Ana Sayfasına git.',
  'LBL_WIZARD_FINISH3' => 'Veri Yükle',
  'LBL_WIZARD_FINISH4' => 'Uygulamaya harici kaynaklardan veri yükleyin.',
  'LBL_WIZARD_FINISH5' => 'Kullanıcıları oluştur',
  'LBL_WIZARD_FINISH6' => 'Kişilerin uygulamaya erişmeleri için yeni kullanıcı hesapları oluşturun.',
  'LBL_WIZARD_FINISH7' => 'Uygulama Ayarlarını Görüntüleyin ve Yönetin',
  'LBL_WIZARD_FINISH8' => 'Varsayılan uygulama ayarları dahil olmak üzere gelişmiş ayarları yönet.',
  'LBL_WIZARD_FINISH9' => 'Uygulamayı Yapılandırın',
  'LBL_WIZARD_FINISH_BUTTON' => 'Bitir',
  'LBL_WIZARD_FINISH_TAB' => 'Bitir',
  'LBL_WIZARD_FINISH_TITLE' => 'Sugar ı kullanmaya hazırsınız!',
  'LBL_WIZARD_LOCALE' => 'Bölgeniz',
  'LBL_WIZARD_LOCALE_DESC' => 'Saat diliminizi ve Sugar&#39;da tarihler, para birimleri ve isimlerin nasıl görünmesini istediğinizi belirtiniz.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Sonraki >',
  'LBL_WIZARD_PERSONALINFO' => 'Bilgileriniz',
  'LBL_WIZARD_PERSONALINFO_DESC' => 'Kendinizle ilgili bilgi verin. Kendinizle ilgili verdiğiniz bilgi diğer Sugar kullanıcıları tarafından görülecektir.<br/> <span class="required">*</span> ile işaretli alanları doldurmak zorunludur.',
  'LBL_WIZARD_SKIP_BUTTON' => 'Atla',
  'LBL_WIZARD_SMTP' => 'E-Posta Hesabınız',
  'LBL_WIZARD_SMTP_DESC' => 'Varsayılan giden E-Posta sunucusu için E-Posta hesabınızın kullanıcı ismi ve şifresini girin.',
  'LBL_WIZARD_TITLE' => 'Kullanıcı Yeteneği',
  'LBL_WIZARD_WELCOME' => 'Sugar&#39;ı kullanmak için gerekli birkaç temel ayarı yapılandırmak için <b>İleri</b> butonuna tıklayın.',
  'LBL_WIZARD_WELCOME_NOSMTP' => 'Sugar&#39;ı kullanmak için gerekli birkaç temel ayarı yapılandırmak için <b>İleri</b> butonuna tıklayın.',
  'LBL_WIZARD_WELCOME_TAB' => 'Hoş geldiniz',
  'LBL_WIZARD_WELCOME_TITLE' => 'Sugar Uygulamasına Hoş geldiniz!',
  'LBL_WORKSHEETS' => 'Çalışma Sayfaları',
  'LBL_WORK_PHONE' => 'İş Telefonu',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! E-Posta Şifresi:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! E-Posta ID:',
  'LBL_YOUR_PUBLISH_URL' => 'Lokasyonumda yayınla',
  'LBL_YOUR_QUERY_URL' => 'Sorgu URL iniz',
  'LNK_EDIT_TABS' => 'Sekmeleri Değiştirin',
  'LNK_IMPORT_USERS' => 'Kullanıcı Verilerini Yükle',
  'LNK_NEW_GROUP_USER' => 'Grup Kullanıcısı Oluştur',
  'LNK_NEW_PORTAL_USER' => 'Portal API Kullanıcısı Oluştur',
  'LNK_NEW_USER' => 'Yeni Kullanıcı Oluşturun',
  'LNK_REASSIGN_RECORDS' => 'Kayıtları Yeniden Ata',
  'LNK_USER_LIST' => 'Kullanıcıları Görüntüle',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Bu kullanıcının üyeliğini kaldırmak istediğinizden emin misiniz?',
);

