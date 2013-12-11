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
  'ERR_DELETE_RECORD' => 'Du skal angive et postnummer for at slette virksomheden.',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Medarbejdernavnet',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'findes allerede. Identiske medarbejdernavne er ikke tilladt. Rediger medarbejdernavnet, så det bliver entydigt.',
  'ERR_LAST_ADMIN_1' => '"Medarbejdernavnet """',
  'ERR_LAST_ADMIN_2' => 'Er den sidste medarbejder med administrator-adgang. Mindst en medarbejder skal være en administrator."',
  'LBL_ADDRESS' => 'Adresse:',
  'LBL_ADDRESS_CITY' => 'By',
  'LBL_ADDRESS_COUNTRY' => 'Land',
  'LBL_ADDRESS_INFORMATION' => 'Adresseoplysninger',
  'LBL_ADDRESS_POSTALCODE' => 'Postnummer',
  'LBL_ADDRESS_STATE' => 'Stat',
  'LBL_ADDRESS_STREET' => 'Gade',
  'LBL_ADMIN' => 'Administrator:',
  'LBL_ANY_ADDRESS' => 'Adresse:',
  'LBL_ANY_EMAIL' => 'E-mail:',
  'LBL_ANY_PHONE' => 'Telefon:',
  'LBL_AUTHENTICATE_ID' => 'Godkendelses-id',
  'LBL_CITY' => 'By:',
  'LBL_COUNTRY' => 'Land:',
  'LBL_CREATED_BY_NAME' => 'Oprettet af',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Opret bruger',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Opret bruger [Alt+N]',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_DATE_ENTERED' => 'Oprettet den',
  'LBL_DATE_FORMAT' => 'Datoformat:',
  'LBL_DATE_MODIFIED' => 'Ændret den',
  'LBL_DEFAULT_TEAM' => 'Standardteam:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Vælger standardteam for nye poster',
  'LBL_DELETED' => 'Slettet',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Er du sikker på at du vil slette denne medarbejder?',
  'LBL_DELETE_USER_CONFIRM' => 'Denne medarbejder er også en bruger. Sletning af medarbejderposten vil også slette brugerposten, og brugeren vil ikke længere kunne tilgå applikationen. Ønsker du at forsætte med at slette denne post?',
  'LBL_DEPARTMENT' => 'Afdeling:',
  'LBL_DESCRIPTION' => 'Beskrivelse',
  'LBL_EMAIL' => 'E-mail-adresse:',
  'LBL_EMAIL_LINK_TYPE' => 'E-mail klient',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Sugar e-mail klient:</b> Send e-mails ved hjælp af e-mail klienten i Sugar-programmet.<br><b>Ekstern e-mail klient:</b> Send e-mail ved hjælp af en e-mail klient uden for Sugar-programmet, f.eks. Microsoft Outlook.',
  'LBL_EMPLOYEE' => 'Medarbejdere:',
  'LBL_EMPLOYEE_INFORMATION' => 'Medarbejderoplysninger',
  'LBL_EMPLOYEE_NAME' => 'Medarbejdernavn:',
  'LBL_EMPLOYEE_SETTINGS' => 'Medarbejderindstillinger',
  'LBL_EMPLOYEE_STATUS' => 'Medarbejderstatus:',
  'LBL_ERROR' => 'Fejl:',
  'LBL_EXT_AUTHENTICATE' => 'Ekstern godkendelse',
  'LBL_FAVORITE_COLOR' => 'Favoritfarve:',
  'LBL_FAX' => 'Fax:',
  'LBL_FAX_PHONE' => 'Fax',
  'LBL_FF_CLEAR' => 'Ryd',
  'LBL_FIRST_NAME' => 'Fornavn:',
  'LBL_GROUP' => 'Gruppebruger',
  'LBL_GROUP_USER' => 'Gruppebruger',
  'LBL_HOME_PHONE' => 'Telefon "privat":',
  'LBL_IS_ADMIN' => 'Er administrator',
  'LBL_LANGUAGE' => 'Sprog:',
  'LBL_LAST_NAME' => 'Efternavn:',
  'LBL_LIST_ACCEPT_STATUS' => 'Acceptér status',
  'LBL_LIST_ADMIN' => 'Administration',
  'LBL_LIST_DEPARTMENT' => 'Afdeling',
  'LBL_LIST_DESCRIPTION' => 'Beskrivelse',
  'LBL_LIST_EMAIL' => 'E-mail',
  'LBL_LIST_EMPLOYEE_NAME' => 'Medarbejdernavn',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Medarbejderstatus',
  'LBL_LIST_FORM_TITLE' => 'Medarbejdere',
  'LBL_LIST_LAST_NAME' => 'Efternavn',
  'LBL_LIST_NAME' => 'Navn',
  'LBL_LIST_PRIMARY_PHONE' => 'Primær telefon',
  'LBL_LIST_REPORTS_TO_NAME' => 'Rapporterer til',
  'LBL_LIST_USER_NAME' => 'Brugernavn',
  'LBL_LOGIN' => 'Log på',
  'LBL_MESSENGER_ID' => 'Chatnavn:',
  'LBL_MESSENGER_TYPE' => 'Chattype:',
  'LBL_MOBILE_PHONE' => 'Mobiltelefon:',
  'LBL_MODIFIED_BY' => 'Ændret af',
  'LBL_MODIFIED_BY_ID' => 'Ændret af id',
  'LBL_MODULE_NAME' => 'Medarbejdere',
  'LBL_MODULE_TITLE' => 'Medarbejdere: Startside',
  'LBL_MY_TEAMS' => 'Mine team',
  'LBL_NAME' => 'Navn:',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Ny medarbejder',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Ny medarbejder [Alt+N]',
  'LBL_NEW_FORM_TITLE' => 'Ny medarbejder',
  'LBL_NOTES' => 'Noter:',
  'LBL_OFFICE_PHONE' => 'Telefon "arbejde":',
  'LBL_ONLY_ACTIVE' => 'Aktive medarbejdere',
  'LBL_OTHER' => 'Andet:',
  'LBL_OTHER_EMAIL' => 'Anden e-mail:',
  'LBL_OTHER_PHONE' => 'Andet:',
  'LBL_PASSWORD' => 'Adgangskode:',
  'LBL_PHOTO' => 'Billede',
  'LBL_PICTURE_FILE' => 'Billede',
  'LBL_PORTAL_ONLY' => 'Portal kun bruger',
  'LBL_PORTAL_ONLY_USER' => 'Portal API bruger',
  'LBL_POSTAL_CODE' => 'Postnummer:',
  'LBL_PRIMARY_ADDRESS' => 'Primær adresse:',
  'LBL_PSW_MODIFIED' => 'Adgangskoden er sidst ændret',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Giv besked om tildeling',
  'LBL_REPORTS_TO' => 'Rapporterer til id:',
  'LBL_REPORTS_TO_NAME' => 'Rapporterer til',
  'LBL_RESET_PREFERENCES' => 'Nulstil til standardindstillinger',
  'LBL_SAVED_SEARCH' => 'Layoutindstillinger',
  'LBL_SEARCH_FORM_TITLE' => 'Søg efter medarbejdere',
  'LBL_SELECT' => 'Vælg',
  'LBL_SHOW_ON_EMPLOYEES' => 'Vis medarbejderpost',
  'LBL_STATE' => 'Stat:',
  'LBL_STATUS' => 'Status',
  'LBL_SUGAR_LOGIN' => 'Er Sugar-bruger',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Systemgenereret adgangskode',
  'LBL_THEME' => 'Tema:',
  'LBL_TIMEZONE' => 'Aktuelt klokkeslæt:',
  'LBL_TIME_FORMAT' => 'Klokkeslætsformat:',
  'LBL_TITLE' => 'Titel:',
  'LBL_USER_HASH' => 'Adgangskode',
  'LBL_USER_NAME' => 'Brugernavn:',
  'LBL_USER_TYPE' => 'Brugertype',
  'LBL_WORK_PHONE' => 'Telefon "arbejde":',
  'LNK_EDIT_TABS' => 'Rediger faner',
  'LNK_EMPLOYEE_LIST' => 'Medarbejdere',
  'LNK_NEW_EMPLOYEE' => 'Opret medarbejder',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Er du sikker på, at du vil fjerne denne medarbejder\\s medlemskab?',
);

