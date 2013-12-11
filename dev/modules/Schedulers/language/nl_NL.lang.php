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
  'ERR_CRON_SYNTAX' => 'Ongeldige Cron syntax',
  'ERR_DELETE_RECORD' => 'Een recordnummer moet worden opgegeven om de Taak te verwijderen.',
  'LBL_ADV_OPTIONS' => 'Geavanceeerde Opties',
  'LBL_ALL' => 'Elke dag',
  'LBL_ALWAYS' => 'Altijd',
  'LBL_AND' => 'en',
  'LBL_AT' => 'op',
  'LBL_AT_THE' => 'op',
  'LBL_BASIC_OPTIONS' => 'Standaard Setup',
  'LBL_CATCH_UP' => 'Uitvoeren wanneer gemist',
  'LBL_CATCH_UP_WARNING' => 'Uitvinken als deze taak vrij lang gaat duren',
  'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
  'LBL_CRONTAB_EXAMPLES' => 'Bovenstaand kan de standaard CRONTAB notatie gebruikt worden.',
  'LBL_CRONTAB_SERVER_TIME_POST' => '). Specificeer de taakplanner uitvoertijd ook op basis van deze tijdzone',
  'LBL_CRONTAB_SERVER_TIME_PRE' => 'De cron specificaties worden uitgevoerd op basis van server tijdzone (',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'Configureer Crontab',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Configureer Windows Taakplanner',
  'LBL_CRON_LINUX_DESC' => 'Voeg deze regel toe aan je CRONTAB (crontab -e):',
  'LBL_CRON_WINDOWS_DESC' => 'Maar een batch-file aan met de volgende commando&#39;s:',
  'LBL_DATE_TIME_END' => 'Einddatum en tijd',
  'LBL_DATE_TIME_START' => 'Startdatum en tijd',
  'LBL_DAY_OF_MONTH' => 'datum',
  'LBL_DAY_OF_WEEK' => 'dag',
  'LBL_EVERY' => 'elke',
  'LBL_EVERY_DAY' => 'Elke dag',
  'LBL_EXECUTE_TIME' => 'Uitvoertijd',
  'LBL_FRI' => 'Vrijdag',
  'LBL_FROM' => 'Van',
  'LBL_HOUR' => 'uren',
  'LBL_HOURS' => 'uur',
  'LBL_HOUR_SING' => 'uur',
  'LBL_IN' => 'in',
  'LBL_INTERVAL' => 'Interval',
  'LBL_JOB' => 'Taak',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Taaklog',
  'LBL_JOB_URL' => 'Job URL',
  'LBL_LAST_RUN' => 'Laatste Succesvolle Run',
  'LBL_LIST_EXECUTE_TIME' => 'Wordt uitgevoerd om:',
  'LBL_LIST_JOB_INTERVAL' => 'Interval:',
  'LBL_LIST_LIST_ORDER' => 'Taakplanners:',
  'LBL_LIST_NAME' => 'Taakplanner:',
  'LBL_LIST_RANGE' => 'Bereik:',
  'LBL_LIST_REMOVE' => 'Verwijderen:',
  'LBL_LIST_STATUS' => 'Status:',
  'LBL_LIST_TITLE' => 'Taaklijst:',
  'LBL_MINS' => 'min',
  'LBL_MINUTES' => 'minuten',
  'LBL_MIN_MARK' => 'minuutaanwijzing',
  'LBL_MODULE_NAME' => 'Sugar Taakplanner',
  'LBL_MODULE_NAME_SINGULAR' => 'Sugar Taakplanner',
  'LBL_MODULE_TITLE' => 'Taakplanner',
  'LBL_MON' => 'Maandag',
  'LBL_MONTH' => 'maand',
  'LBL_MONTHS' => 'ma',
  'LBL_NAME' => 'Taaknaam',
  'LBL_NEVER' => 'Nooit',
  'LBL_NEW_FORM_TITLE' => 'Nieuwe Taak',
  'LBL_NO_PHP_CLI' => 'Als je host geen PHP binary heeft, dan kun je wget of curl gebruiken om je taakplanner aan te sturen.<br>wget: * * * * *    wget --quiet --non-verbose /cron.php > /dev/null 2>&1<br>curl: * * * * *    curl --silent /cron.php > /dev/null 2>&1',
  'LBL_OFTEN' => 'Zo vaak mogelijk',
  'LBL_ON_THE' => 'op',
  'LBL_OOTB_BOUNCE' => 'Run Nightly Process Bounced Campaign Emails',
  'LBL_OOTB_CAMPAIGN' => 'Run Nightly Mass Email Campaigns',
  'LBL_OOTB_CLEANUP_QUEUE' => 'Clean Jobs Queue',
  'LBL_OOTB_CREATE_NEXT_TIMEPERIOD' => 'Maak toekomstige perioden aan',
  'LBL_OOTB_IE' => 'Controleer Inkomende E-mailboxen',
  'LBL_OOTB_PRUNE' => 'Prune Database on 1st of Month',
  'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Verwijderen van documenten van het filesystem',
  'LBL_OOTB_REPORTS' => 'Run Report Generation Scheduled Tasks',
  'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Run Email Reminder Notifications',
  'LBL_OOTB_SUGARFEEDS' => 'Prune SugarFeed Tables',
  'LBL_OOTB_TRACKER' => 'Prune Tracker Tables',
  'LBL_OOTB_WORKFLOW' => 'Process Workflow Tasks',
  'LBL_PERENNIAL' => 'oneindig',
  'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',
  'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Run Nightly Process Bounced Campaign Emails',
  'LBL_PROCESSQUEUE' => 'Run Report Generation Scheduled Tasks',
  'LBL_PROCESSWORKFLOW' => 'Process Workflow Tasks',
  'LBL_PRUNEDATABASE' => 'Prune Database on 1st of Month',
  'LBL_RANGE' => 'tot',
  'LBL_REFRESHJOBS' => 'Refresh Jobs',
  'LBL_REMOVEDOCUMENTSFROMFS' => 'Verwijderen van documenten van het filesystem',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Run Nightly Mass Email Campaigns',
  'LBL_SAT' => 'Zaterdag',
  'LBL_SCHEDULER' => 'Taakplanner:',
  'LBL_SEARCH_FORM_TITLE' => 'Taak Zoeken',
  'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
  'LBL_STATUS' => 'Status',
  'LBL_SUGARJOBCREATENEXTTIMEPERIOD' => 'Maak toekomstige perioden aan',
  'LBL_SUN' => 'Zondag',
  'LBL_THU' => 'Donderdag',
  'LBL_TIME_FROM' => 'Actief van',
  'LBL_TIME_TO' => 'Actief tot',
  'LBL_TOGGLE_ADV' => 'Geavanceeerde Opties',
  'LBL_TOGGLE_BASIC' => 'Standaard Opties',
  'LBL_TRIMSUGARFEEDS' => 'Prune SugarFeed Tables',
  'LBL_TRIMTRACKER' => 'Prune Tracker Tables',
  'LBL_TUE' => 'Dinsdag',
  'LBL_UPDATETRACKERSESSIONS' => 'Update Tracker Session Tables',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'Update tracker_sessions Table',
  'LBL_WARN_CURL' => 'Waarschuwing:',
  'LBL_WARN_CURL_TITLE' => 'CURL Waarschuwing:',
  'LBL_WARN_NO_CURL' => 'Dit systeem heeft geen cURL libraries geactiveerd/gecompileerd in de PHP module (--with-curl=/path/to/curl_library). Neem contact op met je system administrator om dit probleem op te lossen. Zonder cURL functionaliteit werkt de Taakplanner in Sugar niet.',
  'LBL_WED' => 'Woensdag',
  'LNK_LIST_SCHEDULED' => 'Geplande Taken',
  'LNK_LIST_SCHEDULER' => 'Taakplanners',
  'LNK_NEW_SCHEDULER' => 'Nieuwe Taak',
  'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen?',
  'NTC_LIST_ORDER' => 'Zet de volgorde van de Taken in de Takenlijst',
  'NTC_STATUS' => 'Zet de status op Inactief om deze Taak uit de Takenlijst te verwijderen.',
  'SOCK_GREETING' => 'Dit is de interface voor de SugarCRM Taakplanner Service. De beschikbare deamon commandos zijn: [start|restart|shutdown|status] Om te stoppen, type &#39;quit&#39;. Om de Service te stoppen type &#39;shutdown&#39;.',
);

