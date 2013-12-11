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
  'ERR_ARCHIVE_EMAIL' => 'Kļūda: Atzīmējiet e-pastus arhivēšanai.',
  'ERR_DATE_START' => 'Sākuma datums',
  'ERR_DELETE_RECORD' => 'Kļūda: Lai dzēstu klientu, jānorāda ieraksta numurs.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Nepareizs obligātais lauks',
  'ERR_MISSING_CREDENTIALS' => 'error: missing credentials',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Trūkst obligāts lauks',
  'ERR_MSG_FAILED' => '',
  'ERR_NOT_ADDRESSED' => 'Kļūda: E-pastam vismaz vienā no laukiem Kam, CC vai BCC jānorāda e-pasta adrese.',
  'ERR_NO_IEID' => 'error: no ieID',
  'ERR_NO_UID' => 'error: no UID',
  'ERR_RCD_NUM_TO_DEL' => 'Lai dzēstu epastu jānorāda ieraksta numurs.',
  'ERR_TIME_SENT' => 'Nosūtīšanas laiks',
  'ERR_TIME_START' => 'Sākuma laiks',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klienti',
  'LBL_ACTIVITIES_REPORTS' => 'Darbību atskaite',
  'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Adresātu meklēšanai ievadiet e-pastu, vārdu, uzvārdu vai uzņēmuma nosaukumu',
  'LBL_ADD_ANOTHER_FILE' => 'Pievienot citu failu',
  'LBL_ADD_BCC' => 'Pievienot Bcc',
  'LBL_ADD_CC' => 'Pievienot Cc',
  'LBL_ADD_CC_BCC_SEP' => '|',
  'LBL_ADD_DASHLETS' => 'Pievienot Dašletus',
  'LBL_ADD_DOCUMENT' => 'Pievienot dokumentus no SugarDocuments krātuves',
  'LBL_ADD_ENTRIES' => 'Pievienot',
  'LBL_ADD_FILE' => 'Pievienot failus',
  'LBL_ADD_INBOUND_ACCOUNT' => 'Pievienot',
  'LBL_ADD_OUTBOUND_ACCOUNT' => 'Pievienot',
  'LBL_ADD_TO_ADDR' => 'Pievienot saņēmējam',
  'LBL_ALL' => 'Visi',
  'LBL_ARCHIVED_EMAIL' => 'Arhivēts e-pasts',
  'LBL_ARCHIVED_EMAILS_CREATE' => 'Izveidot',
  'LBL_ARCHIVED_MODULE_NAME' => 'Veidot arhivētus e-pastus',
  'LBL_ARCHIVED_MODULE_NAME_SINGULAR' => 'Arhivētais e-pasts izveidots',
  'LBL_ASSIGNED_TO' => 'Piešķirts lietotājam:',
  'LBL_ASSIGNMNT_ACT_RESULT' => '',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Piešķirt izvēlētos rezultātus:',
  'LBL_ASSIGN_WARN' => 'Pārliecinieties vai abas opcijas ir atzīmētas.',
  'LBL_ATTACHMENT' => 'Pielikums',
  'LBL_ATTACHMENTS' => 'Pielikumi:',
  'LBL_BACK_TO_GROUP' => 'Atpakaļ uz Grupas Pastkasti',
  'LBL_BCC' => 'Bcc:',
  'LBL_BODY' => 'Teksts:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Kļūdas',
  'LBL_BUTTON_CHECK' => 'Pārbaudīt pastu',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_CHECK_TITLE' => 'Pārbaudīt jaunos e-pastus',
  'LBL_BUTTON_CREATE' => 'Izveidot',
  'LBL_BUTTON_DISTRIBUTE' => 'Piešķirt',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Piešķirt',
  'LBL_BUTTON_EDIT' => 'Rediģēt',
  'LBL_BUTTON_FORWARD' => 'Pārsūtīt',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_FORWARD_TITLE' => 'Pārsūtīt e-pastu',
  'LBL_BUTTON_GRAB' => 'Paņemt no grupas',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_BUTTON_GRAB_TITLE' => 'Paņemt no grupas',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_RAW_LABEL' => 'Rādīt neapstrādātu',
  'LBL_BUTTON_RAW_LABEL_HIDE' => 'Slēpt neapstrādāto',
  'LBL_BUTTON_RAW_TITLE' => 'Rādīt neapstrādātu ziņu',
  'LBL_BUTTON_REPLY' => 'Atbildēt',
  'LBL_BUTTON_REPLY_ALL' => 'Atbildēt visiem',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_BUTTON_REPLY_TITLE' => 'Atbildēt',
  'LBL_CASES_SUBPANEL_TITLE' => 'Pieteikumi',
  'LBL_CC' => 'Cc:',
  'LBL_CHECKEMAIL' => 'Pārbaudīt e-pastu',
  'LBL_CHECKING_ACCOUNT' => 'Pārbauda kontu',
  'LBL_CHECK_ATTACHMENTS' => 'Pārbaudiet pielikumus!',
  'LBL_CHECK_INLINE' => 'Pareizi',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Izvēlieties e-pasta pakalpojumu sniedzēju:',
  'LBL_CLOSE' => 'Aizvērt',
  'LBL_COLON' => ':',
  'LBL_COMPOSEEMAIL' => 'Rakstīt e-pastu',
  'LBL_COMPOSE_MODULE_NAME' => 'Rakstīt e-pastu',
  'LBL_COMPOSE_MODULE_NAME_SINGULAR' => 'Rakstīt e-pastu',
  'LBL_CONFIRM_DELETE' => 'Vai tiešām vēlaties dzēst šo mapi?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktpersonas',
  'LBL_CONTACTS_SUBPANEL_TITLE_SNIP' => 'E-pasta kontaktpersonas',
  'LBL_CONTACT_FIRST_NAME' => 'Kontaktpersonas vārds',
  'LBL_CONTACT_LAST_NAME' => 'Kontaktpersonas uzvārds',
  'LBL_CONTACT_NAME' => 'Kontaktpersona:',
  'LBL_CREATED_BY' => 'Izveidoja',
  'LBL_CREATE_BUG' => 'Izveidot kļūdas pieteikumu',
  'LBL_CREATE_BUGS' => 'Veidot kļūdu pieteikumus',
  'LBL_CREATE_CASE' => 'Izveidot pieteikumu',
  'LBL_CREATE_CASES' => 'Veidot pieteikumus',
  'LBL_CREATE_CONTACT' => 'Izveidot kontaktpersonu',
  'LBL_CREATE_CONTACTS' => 'Veidot kontaktpersonas',
  'LBL_CREATE_LEAD' => 'Izveidot interesentu',
  'LBL_CREATE_LEADS' => 'Veidot interesentus',
  'LBL_CREATE_TASK' => 'Izveidot uzdevumu',
  'LBL_CREATE_TASKS' => 'Veidot uzdevumus',
  'LBL_DATE' => 'Nosūtīšanas datums:',
  'LBL_DATE_AND_TIME' => 'Nosūtīšanas datums un laiks',
  'LBL_DATE_CREATED' => 'Izveidošanas datums',
  'LBL_DATE_MODIFIED' => 'Modificēts',
  'LBL_DATE_SENT' => 'Nosūtīšanas datums:',
  'LBL_DELETE_FROM_SERVER' => 'Dzēst ziņu no serevera',
  'LBL_DELETE_INLINE' => 'Dzēst',
  'LBL_DESCRIPTION' => 'Apraksts',
  'LBL_DIST_TITLE' => 'Piešķīrumi',
  'LBL_EDIT_ALT_TEXT' => 'Rediģēt tekstu',
  'LBL_EDIT_LAYOUT' => 'Rediģēt izkārtojumu',
  'LBL_EDIT_MY_SETTINGS' => 'Rediģēt manus uzstādījumus',
  'LBL_EMAIL' => 'E-pasts:',
  'LBL_EMAILSETTINGS' => 'E-pasta iestatījumi',
  'LBL_EMAILS_ACCOUNTS_REL' => 'E-pasts:Uzņēmumi',
  'LBL_EMAILS_BUGS_REL' => 'E-pasts:Kļūdas',
  'LBL_EMAILS_CASES_REL' => 'E-pasts:Pieteikumi',
  'LBL_EMAILS_CONTACTS_REL' => 'E-pasts:Kontaktpersonas',
  'LBL_EMAILS_LEADS_REL' => 'E-pasts:Interesenti',
  'LBL_EMAILS_MEETINGS_REL' => 'e-pasti: Tikšanās',
  'LBL_EMAILS_NOTES_REL' => 'E-pasts:Piezīmes',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Nav norādīta primārā darba grupa',
  'LBL_EMAILS_OPPORTUNITIES_REL' => 'E-pasts:Iespējas',
  'LBL_EMAILS_PROJECT_REL' => 'E-pasts:Projekts',
  'LBL_EMAILS_PROJECT_TASK_REL' => 'E-pasts:Projekta uzdevums',
  'LBL_EMAILS_PROSPECT_REL' => 'E-pasti:Mērķis',
  'LBL_EMAILS_QUOTES_REL' => 'E-pasti:Piedāvājumi',
  'LBL_EMAILS_TASKS_REL' => 'E-pasti:Uzdevumi',
  'LBL_EMAILS_USERS_REL' => 'E-pasti:Lietotāji',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Izvēloties "--Neviens--", tiks izdzēsts viss iepriekš e-pasta ziņojumā ievadītais teksts. Vai turpināt?',
  'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Sūtot vairākiem adresātiem e-pastus, izmantojot sagataves ar kontakta kartiņas mainīgajiem, tādiem kā vārds, var iegūt negaidītu rezultātu. Masveida sūtījumiem ieteicams izmantot e-pasta kampaņas.',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Ja norādīsiet šablonu, viss iepriekš ievadītais e-pasta teksts tiks aizstāts ar šablona tekstu. Vai turpināt?',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Lūdzu pārbaudiet!',
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Brīdinājums',
  'LBL_EMAIL_ACCOUNTS_INBOUND' => 'E-pasta konta  parametri',
  'LBL_EMAIL_ATTACHMENT' => 'E-pasta pielikums',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Šeit ir prasītais piedāvājums (Šo tekstu variet mainīt)',
  'LBL_EMAIL_DETAIL_VIEW_MORE' => 'vairāk',
  'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'rādīt',
  'LBL_EMAIL_EDITOR_OPTION' => 'Sūtīt e-pastu HTML formātā',
  'LBL_EMAIL_FLAGGED' => 'Atzīmēts:',
  'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Personīgs</b>: E-pasta kontam variet piekļūt tikai Jūs. Tikai Jūs variet pārvaldīt un importēt e-pastus no šī konta.<br><b>Grupas</b>: E-pasta kontam var piekļūt norādītas darba grupas locekļi. Darba grupas locekļi var pārvaldīt un importēt e-pastus no šī konta.<br><b>Grupas - auto-importa</b>: E-pasta kontam var piekļūt norādītas darba grupas locekļi. E-pasti tiek automātiski importēti kā ieraksti.',
  'LBL_EMAIL_QUOTE_FOR' => 'Piedāvājums:',
  'LBL_EMAIL_RELATE' => 'Attiecas uz',
  'LBL_EMAIL_REPLY_TO_STATUS' => 'Atbildes statuss:',
  'LBL_EMAIL_SELECTOR_CLEAR' => 'Notīrīt',
  'LBL_EMAIL_SELECTOR_SELECT' => 'Atzīmēt',
  'LBL_EMAIL_SETTINGS_INBOUND' => 'Ienākošais e-pasts',
  'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'E-pasta konti',
  'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Izejošais e-pasts',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Izejošais SMTP serveris',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Izejošais SMTP serveris',
  'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>Ziņojumam nav satura</em></span></p>',
  'LBL_EMPTY_FOLDER' => 'Nav attēlojamu e-pastu',
  'LBL_ENTER_FOLDER_NAME' => 'Norādiet mapes nosaukumu',
  'LBL_ERROR_SAVING_DRAFT' => 'Kļūda, saglabājot uzmetumu',
  'LBL_ERROR_SELECT_MODULE' => 'Lūdzu norādiet moduli laukā Saistīts ar',
  'LBL_ERROR_SELECT_MODULE_SELECT' => 'Lai izvēlētos saistītā moduļa nosaukumu, spiediet pogu blakus lauciņam Saistīts ar.',
  'LBL_ERROR_SELECT_REPORT' => 'Norādiet atskaiti',
  'LBL_ERROR_SENDING_EMAIL' => 'Kļūda, nosūtot e-pastu',
  'LBL_EXCEPTION' => '',
  'LBL_EXCHANGE_LOGO' => 'Exchange',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange parole:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange servera ports:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange serveris:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange lietotājvārds:',
  'LBL_FILTER_BY_RELATED_BEAN' => 'Rādīt tikai saistītos adresātus',
  'LBL_FORWARD_HEADER' => 'Pārsūtītās ziņas sākums:',
  'LBL_FROM' => 'No:',
  'LBL_FROM_NAME' => 'Sūtītāja vārds',
  'LBL_FW' => 'FW:',
  'LBL_GMAIL_LOGO' => 'Gmail',
  'LBL_GMAIL_SMTPPASS' => 'Gmail Parole:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail E-pasta adrese:',
  'LBL_HAS_ATTACHMENT' => 'Ir pielikums?:',
  'LBL_HAS_ATTACHMENTS' => 'Šim e-pastam jau ir pielikums(-i). Vai vēlaties paturēt pielikumu(-us)?',
  'LBL_HELP' => 'Palīdzība',
  'LBL_HTML_BODY' => 'HTML ziņa',
  'LBL_ID_MISMATCH' => '',
  'LBL_IMPORT_STATUS_TITLE' => 'Statuss',
  'LBL_INBOUND_TITLE' => 'Ienākošais e-pasts',
  'LBL_INTENT' => 'Nodoms',
  'LBL_INVALID_OPS' => '',
  'LBL_INVALID_TYPE' => '',
  'LBL_INVITEE' => 'Saņēmēji',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interesenti',
  'LBL_LESS_OPTIONS' => 'Mazāk',
  'LBL_LIST_ASSIGNED' => 'Piešķirts lietotājam',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
  'LBL_LIST_BUG' => 'Kļūdas',
  'LBL_LIST_CASE' => 'Pieteikumi',
  'LBL_LIST_CONTACT' => 'Kontaktpersonas',
  'LBL_LIST_CONTACT_NAME' => 'Kontaktpersonas vārds',
  'LBL_LIST_CREATED' => 'Izveidots',
  'LBL_LIST_DATE' => 'Nosūtīšanas datums',
  'LBL_LIST_DATE_SENT' => 'Nosūtīšanas datums',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'Uzmetums',
  'LBL_LIST_FORM_SENT_TITLE' => 'Nosūtītie e-pasti',
  'LBL_LIST_FORM_TITLE' => 'E-pastu saraksts',
  'LBL_LIST_FROM_ADDR' => 'No',
  'LBL_LIST_LEAD' => 'Interesenti',
  'LBL_LIST_RELATED_TO' => 'Saņēmēja veids:',
  'LBL_LIST_STATUS' => 'Statuss',
  'LBL_LIST_SUBJECT' => 'Temats',
  'LBL_LIST_TASK' => 'Uzdevumi',
  'LBL_LIST_TIME' => 'Nosūtīšanas laiks',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'Grupas pastkaste',
  'LBL_LIST_TITLE_MY_ARCHIVES' => 'Mani arhivētie e-pasti',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'Mani uzmetumi',
  'LBL_LIST_TITLE_MY_INBOX' => 'Mana pastkaste',
  'LBL_LIST_TITLE_MY_SENT' => 'Mani nosūtītie e-pasti',
  'LBL_LIST_TO_ADDR' => 'Kam',
  'LBL_LIST_TYPE' => 'Tips',
  'LBL_LOCK_FAIL_DESC' => 'Izvēlētais e-pasts patlaban nav pieejams.',
  'LBL_LOCK_FAIL_USER' => 'ir jau piešķirts.',
  'LBL_MAILBOX_TYPE_GROUP' => 'Grupa',
  'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Grupa - Automātisks-Imports',
  'LBL_MAILBOX_TYPE_PERSONAL' => 'Personīgs',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Lietot SMTP autentifikāciju?',
  'LBL_MAIL_SMTPPASS' => 'SMTP parole:',
  'LBL_MAIL_SMTPPORT' => 'SMTP ports:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP serveris:',
  'LBL_MAIL_SMTPTYPE' => 'SMTP Servera Tips:',
  'LBL_MAIL_SMTPUSER' => 'SMTP lietotājvārds:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Servera specifikācija',
  'LBL_MASS_DELETE_ERROR' => 'Neviens atzīmētais e-pasts netika nodzēsts.',
  'LBL_MEMBER_OF' => 'Priekštecis:',
  'LBL_MESSAGE_ID' => 'Ziņas ID',
  'LBL_MESSAGE_SENT' => 'Ziņa nosūtīta',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administrators vēl nav nokonfigurējis izejošo kontu. Nevar nosūtīt testa e-pastu.',
  'LBL_MODIFIED_BY' => 'Modificēja',
  'LBL_MODULE_NAME' => 'Visi e-pasti',
  'LBL_MODULE_NAME_NEW' => 'Arhivēt e-pastu',
  'LBL_MODULE_NAME_SINGULAR' => 'E-pasts',
  'LBL_MODULE_NAME_SINGULAR_NEW' => 'Arhivēt E-pastu',
  'LBL_MODULE_TITLE' => 'E-pasti:',
  'LBL_MORE_OPTIONS' => 'Vairāk',
  'LBL_MOVE_TO_BCC' => '',
  'LBL_MY_EMAILS' => 'Mani e-pasti',
  'LBL_NEW' => 'Jauns',
  'LBL_NEW_FORM_TITLE' => 'Arhivēt e-pastu',
  'LBL_NEXT_EMAIL' => 'Nākamais brīvais e-pasts',
  'LBL_NONE' => 'Neviens',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Pielikumi',
  'LBL_NOTE_SEMICOLON' => 'Piezīme: Lai atdalītu vairākas e-pasta adreses, lietojiet komatus vai semikolus.',
  'LBL_NOT_SENT' => 'Nosūtīšanas kļūda',
  'LBL_NOT_SUGAR_FOLDER' => '',
  'LBL_NO_FOLDER_TYPE' => '',
  'LBL_NO_GRAB_DESC' => 'Nebija pieejamu e-pastu.  Pamēģiniet atkal pēc mirkļa.',
  'LBL_NO_SEARCH_CRITERIA' => '',
  'LBL_NO_SUBJECT' => '(bez temata)',
  'LBL_OF' => 'no',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Iespējas',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projekta uzdevumi',
  'LBL_QS_DISABLED' => '(Ātrā meklēšana šim modulim nav pieejama. Lūdzu izmantojiet atlases pogu.)',
  'LBL_QUICK_CREATE' => 'Ātrā izveide',
  'LBL_QUICK_REPLY' => 'Atbildēt',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Piedāvājumi',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'Piedāvājuma struktūras fails nav atrasts: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'Piedāvājuma struktūras fails nav reģistrēts pie modules/Quotes/Layouts.php',
  'LBL_RAW' => 'Neapstrādāts pasts',
  'LBL_RE' => 'RE:',
  'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'Adresāti ir pievienoti.',
  'LBL_REPLIED' => 'Atbildēts',
  'LBL_REPLY_HEADER_1' => 'Uz',
  'LBL_REPLY_HEADER_2' => 'rakstīja:',
  'LBL_REPLY_TO' => 'Atbildēt uz:',
  'LBL_REPLY_TO_ADDRESS' => 'Atbildēt adresei:',
  'LBL_REPLY_TO_NAME' => 'Atbildēt vārdam:',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'R',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'Saglabāt uzmetumu',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Saglabāt uzmetumu',
  'LBL_SEARCH_FOR' => 'Meklēt',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'Meklēt uzmetumos',
  'LBL_SEARCH_FORM_SENT_TITLE' => 'Meklēt nosūtītajos e-pastos',
  'LBL_SEARCH_FORM_TITLE' => 'E-pastu meklēšana',
  'LBL_SEE_LOG' => '',
  'LBL_SELECTED_ADDR' => 'Atzīmēti',
  'LBL_SELECT_TEAM' => 'Izvēlēties darba grupas',
  'LBL_SEND' => 'Sūtīt',
  'LBL_SEND_ANYWAYS' => 'E-pastam nav  norādīts temats. Tik un tā nosūtīt/saglabāt?',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LBL_SEND_BUTTON_LABEL' => 'Sūtīt',
  'LBL_SEND_BUTTON_TITLE' => 'Sūtīt',
  'LBL_SEND_EMAIL_FAIL_TITLE' => 'Kļūda sūtot e-pastu',
  'LBL_SEND_IN_PLAIN_TEXT' => 'Sūtīt tekstā',
  'LBL_SENT_MODULE_NAME' => 'Nosūtītie e-pasti',
  'LBL_SENT_MODULE_NAME_SINGULAR' => 'Nosūtītie E-pasti',
  'LBL_SHOW_ALT_TEXT' => 'Rādīt tekstu',
  'LBL_SIGNATURE' => 'Paraksts',
  'LBL_SIGNATURE_PREPEND' => 'Paraksts pirms atbildes',
  'LBL_SMTP_SERVER_HELP' => 'Šis SMTP pasta serveris var tikt izmantots izejošam pastam. Lai to izmantotu, norādiet paroli un lietotājvārdu savam e-pasta kontam.',
  'LBL_STATUS' => 'E-pasta statuss:',
  'LBL_SUBJECT' => 'Temats:',
  'LBL_TAKE_ONE_TITLE' => 'atsk.',
  'LBL_TEST_EMAIL_BODY' => 'E-pasts tika nosūtīts, lai pārbaudītu Sugar programmā norādīto izejošā e-pasta servera informāciju. Ziņojuma saņemšana apliecina, ka izejošā e-pasta servera informācija ir norādīta pareizi.',
  'LBL_TEST_EMAIL_SUBJECT' => 'Testa E-pasts no Sugar',
  'LBL_TEST_SETTINGS' => 'Uzstādījumu tests',
  'LBL_TEXT_BODY' => 'Teksts',
  'LBL_TIME' => 'Nosūtīšanas laiks:',
  'LBL_TITLE_SEARCH_RESULTS' => 'Meklēšanas rezultāti',
  'LBL_TO' => 'Kam:',
  'LBL_TOGGLE_ALL' => 'Pārslēgt visu',
  'LBL_TO_ADDRS' => 'Kam',
  'LBL_TYPE' => 'Tips:',
  'LBL_UNKNOWN' => 'Nezināms',
  'LBL_UNREAD' => 'Nelasīts',
  'LBL_UNREAD_HOME' => 'Nelasītie e-pasti',
  'LBL_USE' => 'Pieškirt:',
  'LBL_USERS' => 'Lietotāji',
  'LBL_USERS_SUBPANEL_TITLE' => 'Lietotāji',
  'LBL_USER_SELECT' => 'Norādīt lietotājus',
  'LBL_USE_ALL' => 'Visi meklēšanas rezultāti',
  'LBL_USE_CHECKED' => 'Tikai atzīmētie',
  'LBL_USE_MAILBOX_INFO' => 'Izsūtīšanas e-pasta adrese',
  'LBL_USE_TEMPLATE' => 'Lietot veidni:',
  'LBL_USING_RULES' => 'Izmantotie noteikumi:',
  'LBL_WAIT' => 'Gaidīt',
  'LBL_WARN_NO_DIST' => 'Nav norādīta izsūtīšanas metode',
  'LBL_WARN_NO_USERS' => 'Nav norādīti lietotāji',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'Norādiet lietotāju vai darba grupu piešķiršanai.',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! E-pasta parole:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
  'LBL_YAHOO_MAIL' => 'Yahoo',
  'LNK_ALL_EMAIL_LIST' => 'Visi e-pasti',
  'LNK_ARCHIVED_EMAIL_LIST' => 'Arhivētie e-pasti',
  'LNK_CALL_LIST' => 'Zvani',
  'LNK_CHECK_MY_INBOX' => 'Pārbaudīt manu pastu',
  'LNK_DATE_SENT' => 'Nosūtīšanas datums',
  'LNK_DRAFTS_EMAIL_LIST' => 'Visi uzmetumi',
  'LNK_EMAIL_LIST' => 'E-pasti',
  'LNK_EMAIL_TEMPLATE_LIST' => 'E-pastu veidnes',
  'LNK_GROUP_INBOX' => 'Grupas iesūtne',
  'LNK_MEETING_LIST' => 'Tikšanās',
  'LNK_MY_ARCHIVED_LIST' => 'Mani arhīvi',
  'LNK_MY_DRAFTS' => 'Mani uzmetumi',
  'LNK_MY_INBOX' => 'Mana pastkaste',
  'LNK_NEW_ARCHIVE_EMAIL' => 'Veidot arhivēto e-pastu',
  'LNK_NEW_CALL' => 'Ieplānot zvanu',
  'LNK_NEW_EMAIL' => 'Arhivēt e-pastu',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Izveidot e-pasta veidni',
  'LNK_NEW_MEETING' => 'Ieplānot tikšanos',
  'LNK_NEW_NOTE' => 'Izveidot piezīmi vai pielikumu',
  'LNK_NEW_SEND_EMAIL' => 'Rakstīt e-pastu',
  'LNK_NEW_TASK' => 'Izveidot uzdevumu',
  'LNK_NOTE_LIST' => 'Piezīmes',
  'LNK_QUICK_REPLY' => 'Atbildēt',
  'LNK_SENT_EMAIL_LIST' => 'Nosūtītie e-pasti',
  'LNK_TASK_LIST' => 'Uzdevumi',
  'LNK_VIEW_CALENDAR' => 'Šodien',
  'LNK_VIEW_MY_INBOX' => 'Skatīt manus e-pastus',
  'NTC_REMOVE_INVITEE' => 'Vai tiešām vēlaties izņemt šo saņēmēja adresi no e-pasta?',
  'WARNING_NO_UPLOAD_DIR' => 'Pielikumi var nebūt sekmīgi pievienoti, jo "upload_tmp_dir" vērtība nav uzstādīta.  Lūdzu izlabojiet to php.ini failā.',
  'WARNING_SETTINGS_NOT_CONF' => 'Brīdinājums: Jūsu e-pasta uzstādījumi nav pietiekami, lai sūtītu e-pastus.',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => 'Pielikumi var nebūt sekmīgi pievienoti,  jo "upload_tmp_dir" satur nepareizas vai neizmantojamas vertības.  Lūdzu izlabojiet to php.ini failā.',
);

