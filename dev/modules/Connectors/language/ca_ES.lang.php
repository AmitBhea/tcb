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
  'ERROR_EMPTY_RECORD_ID' => 'Error: El Id de registre no ha estat especifícat o està buit.',
  'ERROR_EMPTY_SOURCE_ID' => 'Error: El Id d´origen no ha estat especifícat o està buit.',
  'ERROR_EMPTY_WRAPPER' => 'Error: Ha estat impossible recuperar la instància adaptadora (wrapper) per l´origen [{$source_id}]',
  'ERROR_NO_ADDITIONAL_DETAIL' => 'Error: No s´han trobat més detalls per el registre.',
  'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Error: No s´han mapejat conectors a aquest mòdul.',
  'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Error: No s´ha mapejat cap camp de mòdul per ser mostrat com part dels resultats.  Si us plau, contacti amb el administrador del sistema.',
  'ERROR_NO_FIELDS_MAPPED' => 'Error: Té que mapejar com a mínim un camp del Conector a un camp de mòdul per cada entrada de mòdul.',
  'ERROR_NO_SEARCHDEFS_DEFINED' => 'No s´han habilitat mòduls per aquest conector.  Seleccioni un mòdul per aquest conector en la pàgina Habilitar Conectors.',
  'ERROR_NO_SEARCHDEFS_MAPPED' => 'Error: No hi ha cap conector habilitat amb camps de cerca difinits.',
  'ERROR_NO_SEARCHDEFS_MAPPING' => 'Error: No s´han definit camps de recerca per el mòdul i el conector.  Si us plau, contacti amb el administrador del sistema.',
  'ERROR_NO_SOURCEDEFS_FILE' => 'Error: No s´ha trobat cap arxiu sourcedefs.php.',
  'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Error: No s´han especificat orígens d´on obtenir dades.',
  'ERROR_RECORD_NOT_SELECTED' => 'Error: Si us plau, seleccioni un registre de la llista abans de continuar.',
  'LBL_ADDRCITY' => 'Ciutat',
  'LBL_ADDRCOUNTRY' => 'País',
  'LBL_ADDRCOUNTRY_ID' => 'Id País',
  'LBL_ADDRSTATEPROV' => 'Estat/Província',
  'LBL_ADD_MODULE' => 'Afegir',
  'LBL_ADMINISTRATION' => 'Administració de Conectors',
  'LBL_ADMINISTRATION_MAIN' => 'Configuració de Conectors',
  'LBL_AVAILABLE' => 'Disponible',
  'LBL_BACK' => '< Enrera',
  'LBL_CLOSE' => 'Tancar',
  'LBL_COMPANY_ID' => 'Id Companyia',
  'LBL_CONFIRM_CONTINUE_SAVE' => 'Alguns camps requerits s´han deixat en blanc.  ¿Vol continuar i desar els canvis?',
  'LBL_CONNECTOR' => 'Conector',
  'LBL_CONNECTOR_FIELDS' => 'Camps del Conector',
  'LBL_DATA' => 'Datdes',
  'LBL_DEFAULT' => 'Per Defecte',
  'LBL_DELETE_MAPPING_ENTRY' => 'Està segur de que desitja esborrar aquesta entrada?',
  'LBL_DISABLED' => 'Deshabilitat',
  'LBL_DUNS' => 'DUNS',
  'LBL_EMPTY_BEANS' => 'No s´ha trobat cap ocurrencia per els criteris de recerca.',
  'LBL_ENABLED' => 'Habilitat',
  'LBL_EXTERNAL' => 'Permeten als usuaris crear registres externs per aquet connector.',
  'LBL_EXTERNAL_SET_PROPERTIES' => 'Per poder utilitzar aquest connector, les propietats també s&#39;ha d&#39;establir en el connector d&#39;establir les propietats en la pàgina de configuració.',
  'LBL_FINSALES' => 'Vendes Anuals',
  'LBL_INFO_INLINE' => 'Info',
  'LBL_MARKET_CAP' => 'Cap. Bursàtil',
  'LBL_MERGE' => 'Combinar',
  'LBL_MODIFY_DISPLAY_DESC' => 'Seleccioni quins mòduls estàn habilitats per cada conector.',
  'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Configuració de Conectors: Habilitar Conectors',
  'LBL_MODIFY_DISPLAY_TITLE' => 'Habilitar Conectors',
  'LBL_MODIFY_MAPPING_DESC' => 'Mapejar camps del conector a camps del mòdul per determinar quines dades del conector poden ser vistos i combinats junt amb els registres del mòdul.',
  'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Configuració de Conectors: Mapejar Camps del Conector',
  'LBL_MODIFY_MAPPING_TITLE' => 'Mapejar Camps del Conector',
  'LBL_MODIFY_PROPERTIES_DESC' => 'Configurar les propietats de cada conector, incloent les URLs i les claus del API.',
  'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Configuració de Conectors: Establir les Propietats del Conector',
  'LBL_MODIFY_PROPERTIES_TITLE' => 'Establir Propietats del Conector',
  'LBL_MODIFY_SEARCH' => 'Recerca',
  'LBL_MODIFY_SEARCH_DESC' => 'Seleccioni els camps del conector a utilitzar per la recerca de dades de cada mòdul.',
  'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Configuració de Conectors: Administrar Recerca de Conectors',
  'LBL_MODIFY_SEARCH_TITLE' => 'Administrar Recerca de Conectors',
  'LBL_MODULE_FIELDS' => 'Camps del Mòdul',
  'LBL_MODULE_NAME' => 'Conectors',
  'LBL_MODULE_NAME_SINGULAR' => 'Connector',
  'LBL_NO_PROPERTIES' => 'No hi ha propietats configurables per aquest conector.',
  'LBL_PARENT_DUNS' => 'DUNS Parent',
  'LBL_PREVIOUS' => '< Enrera',
  'LBL_QUOTE' => 'Pressupost',
  'LBL_RECNAME' => 'Nom de la Companyia',
  'LBL_RESET_BUTTON_TITLE' => 'Restablir [Alt+R]',
  'LBL_RESET_TO_DEFAULT' => 'Reestablir valors Per Defecte',
  'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Està segur de que vol restablir la configuració per defecte?',
  'LBL_RESULT_LIST' => 'Llista de Dades',
  'LBL_RUN_WIZARD' => 'Executar Assistent',
  'LBL_SAVE' => 'Guardar',
  'LBL_SEARCHING_BUTTON_LABEL' => 'Buscant...',
  'LBL_SHOW_IN_LISTVIEW' => 'Mostrar en Vista de Llista de Combinació',
  'LBL_SMART_COPY' => 'Copia Inteligent',
  'LBL_STEP1' => 'Buscar i Veure Dades',
  'LBL_STEP2' => 'Combinar Registres amb',
  'LBL_SUMMARY' => 'Resumen',
  'LBL_TEST_SOURCE' => 'Prova de Conector',
  'LBL_TEST_SOURCE_FAILED' => 'Error en Prova',
  'LBL_TEST_SOURCE_RUNNING' => 'Realizant Prova...',
  'LBL_TEST_SOURCE_SUCCESS' => 'Prova Exitosa',
  'LBL_TITLE' => 'Combinació de Dades',
  'LBL_ULTIMATE_PARENT_DUNS' => 'DUNS Parent Final',
);

