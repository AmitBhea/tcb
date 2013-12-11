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
(function(app){app.error=_.extend(app.error);function backToLogin(bDismiss){if(bDismiss)app.alert.dismissAll();app.router.login();}
function alertUser(key,title,msg){app.alert.show(key,{level:"error",messages:app.lang.getAppString(msg),title:app.lang.get(title),autoClose:true});}
app.error.handleNeedLoginError=function(error){backToLogin(true);alertUser("needs_login_error","LBL_INVALID_CREDS_TITLE",error.message);};app.error.handleInvalidGrantError=function(error){backToLogin(true);alertUser("invalid_grant_error","LBL_INVALID_GRANT_TITLE","LBL_INVALID_GRANT");};app.error.handleInvalidClientError=function(error){backToLogin(true);alertUser("invalid_client_error","LBL_AUTH_FAILED_TITLE","LBL_AUTH_FAILED");};app.error.handleInvalidRequestError=function(error){backToLogin(true);alertUser("invalid_request_error","LBL_INVALID_REQUEST_TITLE","LBL_INVALID_REQUEST");};app.error.handleTimeoutError=function(error){app.alert.dismissAll();alertUser("timeout_error","LBL_REQUEST_TIMEOUT_TITLE","LBL_REQUEST_TIMEOUT");};app.error.handleUnauthorizedError=function(error){backToLogin(true);alertUser("unauthorized_request_error","LBL_UNAUTHORIZED_TITLE","LBL_UNAUTHORIZED");};app.error.handleForbiddenError=function(error){app.alert.dismissAll();if(error.code=="portal_not_configured"){backToLogin(true);}
alertUser("forbidden_request_error","LBL_RESOURCE_UNAVAILABLE_TITLE",error.message?error.message:"LBL_RESOURCE_UNAVAILABLE");};app.error.handleNotFoundError=function(error){var layout=app.controller.layout;if(!_.isObject(layout.error)||!_.isFunction(layout.error.handleNotFoundError)||layout.error.handleNotFoundError(error)!==false){app.controller.loadView({layout:"error",errorType:"404",module:"Error",create:true});}};app.error.handleMethodNotAllowedError=function(error){backToLogin(true);alertUser("not_allowed_error","LBL_METHOD_NOT_ALLOWED_TITLE","LBL_METHOD_NOT_ALLOWED");};app.error.handleValidationErrorOld=app.error.handleValidationError;app.error.handleValidationError=function(error){var layout=app.controller.layout;if(!_.isObject(layout.error)||!_.isFunction(layout.error.handleValidationError)||layout.error.handleValidationError(error)!==false){return app.error.handleValidationErrorOld(error);}};app.error.handleHeaderPreconditionFailed=function(error,b,c,d){if(app.isSynced){app.sync();}};app.error.handleMethodFailureError=function(error){backToLogin(true);alertUser("precondtion_failure_error","LBL_PRECONDITION_MISSING_TITLE","LBL_PRECONDITION_MISSING");};app.error.handleServerError=function(error){if(error.payload.url){if(app.acl.hasAccess('admin','Administration')){app.router.navigate(error.payload.url,{trigger:true,replace:true});return;}}
app.controller.loadView({layout:"error",errorType:error.status||"500",module:"Error",error:error,create:true});};})(SUGAR.App);