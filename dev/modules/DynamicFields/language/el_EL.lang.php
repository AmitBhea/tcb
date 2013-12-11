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
  'COLUMN_DISABLE_NUMBER_FORMAT' => 'Απενεργοποιημένη Μορφή',
  'COLUMN_TITLE_AUDIT' => 'Λογιστικός Έλεγχος',
  'COLUMN_TITLE_AUTOINC_NEXT' => 'Αυτόματη Αύξηση Επόμενης Τιμής',
  'COLUMN_TITLE_COMMENT_TEXT' => 'Σχόλιο Κειμένου',
  'COLUMN_TITLE_DATA_TYPE' => 'Τύπος Δεδομένων',
  'COLUMN_TITLE_DEFAULT_EMAIL' => 'Προκαθορισμένη Αξία',
  'COLUMN_TITLE_DEFAULT_VALUE' => 'Προκαθορισμένη Αξία',
  'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# εμφανιζόμενα είδη',
  'COLUMN_TITLE_DISPLAY_LABEL' => 'Εμφάνιση Ετικέτας',
  'COLUMN_TITLE_DUPLICATE_MERGE' => 'Διπλότυπη Συγχώνευση',
  'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Ενεργοποίηση Εύρος Αναζήτησης',
  'COLUMN_TITLE_EXT1' => 'Επιπλέον Meta Πεδίο 1',
  'COLUMN_TITLE_EXT2' => 'Επιπλέον Meta Πεδίο 2',
  'COLUMN_TITLE_EXT3' => 'Επιπλέον Meta Πεδίο 3',
  'COLUMN_TITLE_FRAME_HEIGHT' => 'Ύψος Πλαισίου',
  'COLUMN_TITLE_FTS' => 'Πλήρες Κείμενο Αναζήτησης',
  'COLUMN_TITLE_GLOBAL_SEARCH' => 'Σφαιρική Αναζήτηση',
  'COLUMN_TITLE_HELP_TEXT' => 'Βοήθεια Κειμένου',
  'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
  'COLUMN_TITLE_IMPORTABLE' => 'Εισαγώγιμη',
  'COLUMN_TITLE_LABEL' => 'Ετικέτα Συστήματος',
  'COLUMN_TITLE_LABEL_COLS' => 'Στήλες',
  'COLUMN_TITLE_LABEL_ROWS' => 'Σειρές',
  'COLUMN_TITLE_LABEL_VALUE' => 'Αξία Ετικέτας',
  'COLUMN_TITLE_MASS_UPDATE' => 'Μαζική Ενημέρωση',
  'COLUMN_TITLE_MAX_SIZE' => 'Μέγιστο Μέγεθος',
  'COLUMN_TITLE_MAX_VALUE' => 'Μέγιστη Αξία',
  'COLUMN_TITLE_MIN_VALUE' => 'Ελάχιστη Αξία',
  'COLUMN_TITLE_NAME' => 'Όνομα Πεδίου',
  'COLUMN_TITLE_PRECISION' => 'Ακρίβεια',
  'COLUMN_TITLE_REPORTABLE' => 'Καταγράψιμη',
  'COLUMN_TITLE_REQUIRED_OPTION' => 'Υποχρεωτικό Πεδίο',
  'COLUMN_TITLE_URL' => 'Προεπιλογή URL',
  'COLUMN_TITLE_VALIDATE_US_FORMAT' => 'Μορφή U.S.',
  'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Το Όνομα του Πεδίου υπάρχει ήδη',
  'ERR_NO_MODULE_INCLUDED' => 'Δεν περιλαμβάνει Ενότητα. Δεν μπόρεσε να σώσει',
  'ERR_RESERVED_FIELD_NAME' => 'Διατηρημένη λέξη κλειδί',
  'ERR_SELECT_FIELD_TYPE' => 'Παρακαλώ επιλέξτε Τύπο Πεδίου',
  'LBL_ADDING_COLUMN' => 'Προσθέτοντας Στήλη {0} ΣΕ',
  'LBL_ADD_FIELD' => 'Προσθήκη Πεδίου:',
  'LBL_AUDITED' => 'Ελεγμένη',
  'LBL_BTN_ADD' => 'Προσθήκη',
  'LBL_BTN_EDIT' => 'Επεξεργασία',
  'LBL_BTN_EDIT_VISIBILITY' => 'Επεξεργασία Διαφάνειας',
  'LBL_CALCULATED' => 'Υπολογισμένη Αξία',
  'LBL_DATA_TYPE' => 'Τύπος Δεδομένων',
  'LBL_DEFAULT_VALUE' => 'Προκαθορισμένη Αξία',
  'LBL_DEPENDENT' => 'Εξαρτώμενη',
  'LBL_DEPENDENT_CHECKBOX' => 'Εξαρτώμενη',
  'LBL_DEPENDENT_TRIGGER' => 'Trigger',
  'LBL_DONE' => 'Ολοκληρώθηκε',
  'LBL_DROPPING_COLUMN' => 'Πτώση Στήλης {0} από {1} για ενότητα',
  'LBL_DROP_DOWN_LIST' => 'Αναπτυσσόμενη Λίστα',
  'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Εξαρτώμενη',
  'LBL_EDIT_VIS' => 'Επεξεργασία Διαφάνειας',
  'LBL_ENFORCED' => 'Επιβολή',
  'LBL_EXE_NON_SIM_MODE' => 'Εκτέλεση καμία λειτουργία προσομοίωσης',
  'LBL_FIELD_MISSING' => 'πεδίο(α) λείπει από',
  'LBL_FIX_COLUMN_TYPE' => 'Επιδιόρθωση Στήλης για {0} αλλάζει {1} σε',
  'LBL_FORMULA' => 'Τύπος',
  'LBL_GENERATE_URL' => 'Δημιουργία διεύθυνσης URL',
  'LBL_HAS_PARENT' => 'Έχει Γονικό',
  'LBL_HELP' => 'Βοήθεια',
  'LBL_IMAGE_BORDER' => 'Περιθώριο',
  'LBL_IMAGE_HEIGHT' => 'Ύψος',
  'LBL_IMAGE_WIDTH' => 'Πλάτος',
  'LBL_LABEL' => 'Ετικέτα',
  'LBL_LINK_TARGET' => 'Άνοιγμα Συνδέσμου στο',
  'LBL_MODULE' => 'Ενότητα',
  'LBL_MODULE_SELECT' => 'Ενότητα σε Επεξεργασία',
  'LBL_MULTI_SELECT_LIST' => 'Λίστα Πολλαπλής Επιλογής',
  'LBL_PARENT_DROPDOWN' => 'Γονικός Αναδυόμενος',
  'LBL_RADIO_FIELDS' => 'Πεδία Δέκτη',
  'LBL_REPORTABLE' => 'Καταγράψιμη',
  'LBL_SCAN_MODULE' => 'Σαρώνει',
  'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Ενότητας',
  'LBL_SIMULATION_MODE' => 'ΛΕΙΤΟΥΡΓΊΑ ΠΡΟΣΟΜΟΙΩΣΗΣ - ΚΑΜΙΑ ΑΛΛΑΓΗ ΔΕΝ ΜΠΟΡΕΣΕ ΝΑ ΓΙΝΕΙ ΕΚΤΟΣ ΑΝ ΚΑΘΑΡΙΣΤΕΙ Η CACHE',
  'LBL_VISIBLE_IF' => 'Ορατό Αν',
  'LNK_CALL_LIST' => 'Κλήσεις',
  'LNK_EMAIL_LIST' => 'Emails',
  'LNK_MEETING_LIST' => 'Συναντήσεις',
  'LNK_NEW_CALL' => 'Νέα Κλήση',
  'LNK_NEW_EMAIL' => 'Αρχειοθέτηση Email',
  'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
  'LNK_NEW_NOTE' => 'Δημιουργία Σημείωσης ή Επισύναψης',
  'LNK_NEW_TASK' => 'Δημιουργία Εργασίας',
  'LNK_NOTE_LIST' => 'Σημειώσεις',
  'LNK_REPAIR_CUSTOM_FIELD' => 'Επιδιόρθωση Προσαρμοσμένων Πεδίων',
  'LNK_SELECT_CUSTOM_FIELD' => 'Επιλογή Προσαρμοσμένου Πεδίου',
  'LNK_TASK_LIST' => 'Εργασίες',
  'MSG_DELETE_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το είδος;',
  'POPUP_EDIT_HEADER_TITLE' => 'Επεξεργασία Προσαρμοσμένου Πεδίου',
  'POPUP_INSERT_HEADER_TITLE' => 'Προσθήκη Προσαρμοσμένου Πεδίου',
);

