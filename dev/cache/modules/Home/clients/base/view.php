<?php
$clientCache['Home']['base']['view'] = array (
  'about-resources' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
     */
({initialize:function(opts){this.serverInfo=app.metadata.getServerInfo();app.view.View.prototype.initialize.call(this,opts);}})',
    ),
    'templates' => 
    array (
      'about-resources' => '{{!
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

}}
<h4>{{str "LBL_RESOURCES" module}}</h4>
<ul class="list">
    <li><a target="_blank" href="http://support.sugarcrm.com/02_Documentation/01_Sugar_Editions?utm_source=App&utm_medium=about&utm_content={{this.serverInfo.version}}&utm_campaign={{this.serverInfo.product_name}}">{{str "LBL_RESOURCES_DOCUMENTATION" module}}</a></li>
    <li><a target="_blank" href="http://support.sugarcrm.com/04_Find_Answers/03_Developers?utm_source=App&utm_medium=about&utm_content={{this.serverInfo.version}}&utm_campaign={{this.serverInfo.product_name}}">{{str "LBL_RESOURCES_DEVELOPERS" module}}</a></li>
    <li><a target="_blank" href="http://www.sugarcrm.com/company-overview?utm_source=App&utm_medium=about&utm_content={{this.serverInfo.version}}&utm_campaign={{this.serverInfo.product_name}}">{{str "LBL_RESOURCES_SUGAR_INFO" module}}</a></li>
</ul>
',
    ),
  ),
  'tutorial' => 
  array (
    'meta' => 
    array (
      'record' => 
      array (
        'version' => 1,
        'intro' => 'LBL_TOUR_INTRO',
        'content' => 
        array (
          0 => 
          array (
            'name' => '[href=#Home]',
            'text' => 'LBL_TOUR_CUBE',
            'full' => true,
          ),
          1 => 
          array (
            'name' => '.routeLink.[data-route="#Accounts"]',
            'text' => 'LBL_TOUR_NAV_BAR',
            'full' => true,
          ),
          2 => 
          array (
            'name' => '.search-query',
            'text' => 'LBL_TOUR_SEARCH',
            'full' => true,
          ),
          3 => 
          array (
            'name' => '#notificationDrop',
            'text' => 'LBL_TOUR_NOTIFICATIONS',
            'full' => true,
            'horizAdj' => -15,
            'vertAdj' => -5,
          ),
          4 => 
          array (
            'name' => '#userActions',
            'text' => 'LBL_TOUR_AVATAR',
            'full' => true,
          ),
          5 => 
          array (
            'name' => '#createList',
            'text' => 'LBL_TOUR_ADD',
            'full' => true,
          ),
          6 => 
          array (
            'name' => '#tour',
            'text' => 'LBL_TOUR_TOUR',
            'full' => true,
          ),
        ),
      ),
    ),
  ),
  'top-activity-user' => 
  array (
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'name' => 'LBL_MOST_ACTIVE_COLLEAGUES',
          'description' => 'LBL_MOST_ACTIVE_COLLEAGUES_DESC',
          'config' => 
          array (
            'filter_duration' => '7',
            'module' => 'Home',
          ),
          'preview' => 
          array (
            'filter_duration' => '7',
            'module' => 'Home',
          ),
          'filter' => 
          array (
            'module' => 
            array (
              0 => 'Home',
            ),
            'view' => 'record',
          ),
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_body',
          'columns' => 1,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'filter_duration',
              'label' => 'Filter',
              'type' => 'enum',
              'options' => 'activity_user_options',
            ),
          ),
        ),
      ),
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'filter_duration',
          'label' => 'Filter',
          'type' => 'enum',
          'options' => 'activity_user_options',
        ),
      ),
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
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
({plugins:[\'Dashlet\',\'GridBuilder\'],events:{\'change select[name=filter_duration]\':\'filterChanged\'},initDashlet:function(viewName){this.collection=new app.BeanCollection();if(!this.meta.config){this.collection.on("reset",this.render,this);}else{app.view.invokeParent(this,{type:\'view\',name:\'record\',method:\'_buildGridsFromPanelsMetadata\',args:[this.meta.panels]});}},_mapping:{meetings:{icon:\'icon-comments\',label:\'LBL_MOST_MEETING_HELD\'},inbound_emails:{icon:\'icon-envelope\',label:\'LBL_MOST_EMAILS_RECEIVED\'},outbound_emails:{icon:\'icon-envelope-alt\',label:\'LBL_MOST_EMAILS_SENT\'},calls:{icon:\'icon-phone\',label:\'LBL_MOST_CALLS_MADE\'}},loadData:function(params){if(this.meta.config){return;}
var url=app.api.buildURL(\'mostactiveusers\',null,null,{days:this.settings.get("filter_duration")}),self=this;app.api.call("read",url,null,{success:function(data){if(self.disposed){return;}
var models=[];_.each(data,function(attributes,module){if(_.isEmpty(attributes)){return;}
var model=new app.Bean(_.extend({id:_.uniqueId(\'aui\')},attributes));model.module=module;model.set("name",model.get("first_name")+\' \'+model.get("last_name"));model.set("icon",self._mapping[module][\'icon\']);var template=Handlebars.compile(app.lang.get(self._mapping[module][\'label\'],self.module));model.set("label",template({count:model.get("count")}));model.set("pictureUrl",app.api.buildFileURL({module:"Users",id:model.get("user_id"),field:"picture"}));models.push(model);},this);self.collection.reset(models);},complete:params?params.complete:null});},filterChanged:function(evt){this.loadData();},_dispose:function(){if(this.collection){this.collection.off("reset",null,this);}
app.view.View.prototype._dispose.call(this);}})',
    ),
    'templates' => 
    array (
      'top-activity-user' => '{{!
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

}}
<div class="dashlet-options">
    <div class="row-fluid">
        <div class="span6">
            {{#each this.dashletConfig.buttons}}
                {{field ../this model=../this.settings template="edit"}}
            {{/each}}
        </div>
    </div>
</div>
{{#each this.collection.models}}
    <div class="news-article">
        <div class="row-fluid header">
            <div class="span12">
                <p>
                    <img src="{{getFieldValue this "pictureUrl"}}" class="avatar"> <a href="#{{buildRoute module=\'Employees\' id=this.attributes.user_id}}">{{getFieldValue this "name"}}</a>
                </p>
                <span class="details">
                    <icon class="{{getFieldValue this "icon"}} icon-large"></icon> {{getFieldValue this "label"}}
                </span>
            </div>
        </div>
    </div>
{{/each}}
',
    ),
  ),
  'twitter' => 
  array (
    'templates' => 
    array (
      'twitter-need-configure' => '{{!
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

}}
<div class="block-footer">
    {{#if showGeneric}}
        {{str errorLBL}}
    {{/if}}
{{#if needConnect}}
    <a target="blank" class="connect-twitter" href="index.php?module=EAPM&refreshParentWindow=yesPlease&closeWhenDone=1&action=QuickSave&application=Twitter">
        {{str \'LBL_CONNECT_TWITTER\'}}
    </a>
{{/if}}
    {{#if needOAuth}}
        {{#if showAdmin}}
            <a href=\'#bwc/index.php?module=Connectors&action=ModifyProperties\'>
                {{str \'LBL_CONNECT_TWITTER_FOR_ADMIN\'}}
            </a>
        {{else}}
            <em>{{str \'LBL_CONFIGURE_TWITTER\'}}</em>
        {{/if}}
    {{/if}}
</div>
',
      'twitter' => '{{!
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

}}
{{#if tweets}}
    <div class="twitter-widget">
        {{#each tweets}}
            <div class="news-article">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span1">
                                <a target="_blank" href="https://twitter.com/{{screen_name}}"><img src="{{profile_image_url}}" class="pull-right"></a>
                            </div>
                            <div class="span11">
                                <div class="row-fluid header">
                                    <div class="span6">
                                        <h5>
                                            <a target="_blank" href="https://twitter.com/{{screen_name}}"><strong>{{name}}</strong></a>
                                            <a target="_blank" href="https://twitter.com/{{screen_name}}">@{{screen_name}}</a>
                                        </h5>
                                    </div>
                                    <div class="span6">
                                        <a class="pull-right" target="_blank" href="https://twitter.com/{{screen_name}}/status/{{id}}">
                                            {{timeago date timeLabel}}
                                        </a>
                                    </div>
                                </div>
                                <div class="row-fluid body">
                                    <div class="span12"><p>{{{text}}}</p></div>
                                </div>
                                <div class="details">
                                        <a class=""
                                           target="twitter"
                                           href="https://twitter.com/intent/tweet?in_reply_to={{id}}"
                                           title="reply"><i
                                                class="icon-reply"></i> {{str "LBL_TWITTER_REPLY"}}
                                        </a>
                                        <a class=""
                                           title="retweet" target="twitter"
                                           href="https://twitter.com/intent/retweet?tweet_id={{id}}"><i
                                                class="icon-retweet"></i> {{str "LBL_TWITTER_RETWEET"}}
                                        </a>
                                        <a class="" target="twitter"
                                           href="https://twitter.com/intent/favorite?tweet_id={{id}}"><i
                                                class="icon-star"></i> {{str "LBL_TWITTER_FAVORITE"}}
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{/each}}
    </div>

{{else}}
    <div class="block-footer">{{str "LBL_NO_DATA_AVAILABLE"}}</div>
{{/if}}

{{#if current_twitter_user_name}}
<div class="block-footer">
    <div class="pull-left">  <i class="icon-twitter"></i> @{{current_twitter_user_name}} <img class="icon-large" src="{{current_twitter_user_pic}}"></div>
</div>
{{/if}}
',
      'dashlet-config' => '{{!
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

}}
<div class="record">
    {{#each dashletConfig.config.fields}}
        <div class="row-fluid panel_body">
            <div class="record-cell">
                <div class="record-label">{{str label}}</div>
                {{field ../this model=../this.settings template=../this.action}}
            </div>
        </div>
    {{/each}}
</div>
',
    ),
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'name' => 'LBL_TWITTER_NAME',
          'description' => 'LBL_TWITTER_DESCRIPTION',
          'config' => 
          array (
            'limit' => '20',
          ),
          'preview' => 
          array (
            'title' => 'LBL_TWITTER_MY_ACCOUNT',
            'twitter' => 'sugarcrm',
            'limit' => '3',
          ),
        ),
      ),
      'config' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'type' => 'base',
            'name' => 'twitter',
            'label' => 'LBL_TWITTER_ID',
          ),
          1 => 
          array (
            'name' => 'limit',
            'label' => 'LBL_TWITTER_DISPLAY_ROWS',
            'type' => 'enum',
            'options' => 
            array (
              5 => 5,
              10 => 10,
              15 => 15,
              20 => 20,
              50 => 50,
            ),
          ),
        ),
      ),
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
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
({plugins:[\'Dashlet\',\'Timeago\'],limit:20,events:{\'click .connect-twitter\':\'onConnectTwitterClick\'},initDashlet:function(){if(this.meta.config){this.dashletConfig=app.metadata.getView(app.controller.context.get(\'module\'),this.name)||this.dashletConfig;}
var limit=this.settings.get("limit")||this.limit;this.settings.set("limit",limit);this.cacheKey="twitter.dashlet.current_user_cache";var currentUserCache=app.cache.get(this.cacheKey);if(currentUserCache&&currentUserCache.current_twitter_user_name){self.current_twitter_user_name=currentUserCache.current_twitter_user_name;}
if(currentUserCache&&currentUserCache.current_twitter_user_pic){self.current_twitter_user_pic=currentUserCache.current_twitter_user_pic;}},onConnectTwitterClick:function(event){if(!_.isUndefined(event.currentTarget)){event.preventDefault();var href=this.$(event.currentTarget).attr(\'href\');app.bwc.login(false,function(response){window.open(href);});}},_render:function(){if(this.tweets||this.meta.config){app.view.View.prototype._render.call(this);}},bindDataChange:function(){if(this.model){this.model.on("change",this.loadData,this);}},loadData:function(options){if(this.disposed||this.meta.config){return;}
var twitter=this.model.get(\'twitter\')||this.model.get(\'name\')||this.model.get(\'account_name\')||this.model.get(\'full_name\'),limit=parseInt(this.settings.get("limit"),10)||this.limit,self=this;this.screen_name=this.settings.get(\'twitter\')||false;if(_.isNull(this.context.parent)){twitter=this.settings.get(\'twitter\');}
if(!twitter||this.viewName===\'config\'){return false;}
twitter=twitter.replace(/ /g,"");this.twitter=twitter;var currentUserUrl=app.api.buildURL(\'connector/twitter/currentUser\');if(!self.current_twitter_user_name){app.api.call(\'READ\',currentUserUrl,{},{success:function(data){app.cache.set(self.cacheKey,{\'current_twitter_user_name\':data.screen_name,\'current_twitter_user_pic\':data.profile_image_url});self.current_twitter_user_name=data.screen_name;self.current_twitter_user_pic=data.profile_image_url;if(!this.disposed){self.render();}}});}
var url=app.api.buildURL(\'connector/twitter\',\'\',{id:twitter},{count:limit});app.api.call(\'READ\',url,{},{success:function(data){if(self.disposed){return;}
var tweets=[];if(data.success!==false){_.each(data,function(tweet){var time=new Date(tweet.created_at.replace(/^\\w+ (\\w+) (\\d+) ([\\d:]+) \\+0000 (\\d+)$/,"$1 $2 $4 $3 UTC")),date=app.date.format(time,"Y/m/d H:i:s"),text=tweet.retweeted_status?\'RT @\'+tweet.retweeted_status.user.screen_name+\': \'+tweet.retweeted_status.text:tweet.text,sourceUrl=tweet.source,id=tweet.id_str,name=tweet.user.name,tokenText=text.split(\' \'),screen_name=tweet.user.screen_name,profile_image_url=tweet.user.profile_image_url_https,j,rightNow=new Date(),diff=(rightNow.getTime()-time.getTime())/(1000*60*60*24),timeLabel=diff>1?\'LBL_TIME_RELATIVE_TWITTER_LONG\':\'LBL_TIME_RELATIVE_TWITTER_SHORT\';for(j=0;j<tokenText.length;j++){if(tokenText[j].charAt(0)==\'h\'&&tokenText[j].charAt(1)==\'t\'){tokenText[j]="<a class=\'googledoc-fancybox\' href="+\'"\'+tokenText[j]+\'"\'+"target=\'_blank\'>"+tokenText[j]+"</a>";}}
text=tokenText.join(\' \');tweets.push({id:id,name:name,screen_name:screen_name,profile_image_url:profile_image_url,text:text,source:sourceUrl,date:date,timeLabel:timeLabel});},this);}
self.tweets=tweets;if(!this.disposed){self.template=app.template.get(self.name+\'.Home\');self.render();}},error:function(xhr,status,error){self.showGeneric=true;self.errorLBL=app.lang.get(\'ERROR_UNABLE_TO_RETRIEVE_DATA\');self.template=app.template.get(self.name+\'.twitter-need-configure.Home\');if(xhr.status===404){self.showGeneric=true;self.errorLBL=app.lang.get(\'LBL_ERROR_CANNOT_FIND_TWITTER\')+self.twitter;}else if(xhr.status===424){app.cache.cut(self.key);self.needConnect=false;self.showGeneric=false;if(xhr.code&&xhr.code===\'ERROR_NEED_AUTHORIZE\'){self.needConnect=true;}else if(xhr.code&&xhr.code===\'ERROR_NEED_OAUTH\'){self.needOAuth=true;}
self.showAdmin=app.acl.hasAccess(\'admin\',\'Administration\');}
if(!self.disposed){app.view.View.prototype._render.call(self);}},complete:(options)?options.complete:null});},_dispose:function(){if(this.model){this.model.off("change",this.loadData,this);}
app.view.View.prototype._dispose.call(this);}})',
    ),
  ),
  'about-copyright' => 
  array (
    'templates' => 
    array (
      'about-copyright' => '{{!
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

}}
<p>Copyright {{{str \'LBL_SUGAR_COPYRIGHT_SUB\' module}}}</p>
',
    ),
  ),
  'about-language-packs' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
     */
({linkTemplate:null,initialize:function(opts){app.view.View.prototype.initialize.call(this,opts);this.linkTemplate=app.template.getView(this.name+\'.link\',this.module);},_renderHtml:function(){_.each(this.meta.providers,function(provider){provider.link=this.linkTemplate(provider);},this);app.view.View.prototype._renderHtml.call(this);}})',
    ),
    'meta' => 
    array (
      'providers' => 
      array (
        0 => 
        array (
          'language' => 'Albanian',
          'name' => 'Unixitech Solutions',
          'url' => 'http://www.unixitech.com',
        ),
        1 => 
        array (
          'language' => 'Bulgarian',
          'name' => 'CreaSoft Ltd',
          'url' => 'http://www.creasoft.biz',
        ),
        2 => 
        array (
          'language' => 'Catalan (Spanish)',
          'name' => 'REDK Ingenieria del Software, SL',
          'url' => 'http://redk.net',
        ),
        3 => 
        array (
          'language' => 'Chinese',
          'name' => 'SR Force',
          'url' => 'http://www.srforce.com',
        ),
        4 => 
        array (
          'language' => 'Czech',
          'name' => 'ExtendIT',
          'url' => 'http://extendit.cz',
        ),
        5 => 
        array (
          'language' => 'Dutch',
          'name' => 'BrixCRM',
          'url' => 'http://www.brixcrm.nl',
        ),
        6 => 
        array (
          'language' => 'English UK',
          'name' => 'Provident CRM',
          'url' => 'http://www.providentcrm.com',
        ),
        7 => 
        array (
          'language' => 'French',
          'name' => 'Synolia',
          'url' => 'http://www.synolia.com',
        ),
        8 => 
        array (
          'language' => 'German',
          'name' => 'Kinamu',
          'url' => 'http://www.kinamu.com',
        ),
        9 => 
        array (
          'language' => 'Greek',
          'name' => 'Qualisys',
          'url' => 'http://www.qualisys.gr',
        ),
        10 => 
        array (
          'language' => 'Hungarian',
          'name' => 'Infoteka',
          'url' => 'http://www.infoteka.hu',
        ),
        11 => 
        array (
          'language' => 'Italian',
          'name' => 'OpenSymbol',
          'url' => 'http://www.opensymbol.it',
        ),
        12 => 
        array (
          'language' => 'Japanese',
          'name' => 'CBA',
          'url' => 'http://www.cba-japan.com',
        ),
        13 => 
        array (
          'language' => 'Korean',
          'name' => 'Bhea Knowledge Technologies Ltd',
          'url' => 'http://www.bhea.co.in',
        ),
        14 => 
        array (
          'language' => 'Latvian',
          'name' => 'Exigen Services',
          'url' => 'http://www.exigenservices.com',
        ),
        15 => 
        array (
          'language' => 'Lithuanian',
          'name' => 'OptimusCRM',
          'url' => 'http://www.optimuscrm.lt',
        ),
        16 => 
        array (
          'language' => 'Norwegian',
          'name' => 'Redpill Linpro',
          'url' => 'http://www.redpill-linpro.se',
        ),
        17 => 
        array (
          'language' => 'Polish',
          'name' => 'eVolpe',
          'url' => 'http://www.evolpe.pl',
        ),
        18 => 
        array (
          'language' => 'Portuguese',
          'name' => 'DRI',
          'url' => 'http://www.dri.pt',
        ),
        19 => 
        array (
          'language' => 'Portuguese Brazilian',
          'name' => 'Lampada Global',
          'url' => 'http://www.lampadaglobal.com',
        ),
        20 => 
        array (
          'language' => 'Romanian',
          'name' => 'Mycroft System',
          'url' => 'http://www.mycroft-system.com',
        ),
        21 => 
        array (
          'language' => 'Russian',
          'name' => 'Richlode Solutions',
          'url' => 'http://www.richlodesolutions.com',
        ),
        22 => 
        array (
          'language' => 'Serbian',
          'name' => ' PS Tech',
          'url' => 'http://pstech.rs',
        ),
        23 => 
        array (
          'language' => 'Slovak',
          'name' => 'Open IT',
          'url' => 'http://www.openit.sk',
        ),
        24 => 
        array (
          'language' => 'Spanish',
          'name' => 'RedK',
          'url' => 'http://www.redk.net',
        ),
        25 => 
        array (
          'language' => 'Swedish',
          'name' => 'Redpill Linpro',
          'url' => 'http://www.redpill-linpro.com',
        ),
        26 => 
        array (
          'language' => 'Turkish',
          'name' => 'Advocotech',
          'url' => 'http://advocotek.com',
        ),
      ),
    ),
    'templates' => 
    array (
      'about-language-packs' => '{{!
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

}}
<h4>{{str "LBL_LANGUAGE_PACKS" module}}</h4>
<dl class="list">
    {{#each this.meta.providers}}
        <dt>{{language}}</dt>
        <dd>{{{str "TPL_LANGUAGE_PACKS_PROVIDED_BY" ../module this}}}</dd>
    {{/each}}
</dl>
',
      'link' => '{{!
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

}}
{{#if url}}<a target="_blank" href="{{url}}">{{name}}</a>{{else}}{{name}}{{/if}}
',
    ),
  ),
  'about-source-code' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
     */
({initialize:function(opts){this.serverInfo=app.metadata.getServerInfo();app.view.View.prototype.initialize.call(this,opts);}})',
    ),
    'meta' => 
    array (
      'external_libs' => 
      array (
        0 => 
        array (
          'name' => 'XTemplate',
          'url' => 'http://sourceforge.net/projects/xtpl',
          'description' => 'A template engine for PHP.',
        ),
        1 => 
        array (
          'name' => 'NuSOAP',
          'url' => 'http://sourceforge.net/projects/nusoap/',
          'description' => 'A set of PHP classes that allow developers to create and consume web services.',
        ),
        2 => 
        array (
          'name' => 'JS Calendar',
          'url' => 'http://www.dynarch.com/mishoo/calendar.epl',
          'description' => 'A calendar for entering dates.',
        ),
        3 => 
        array (
          'name' => 'PHP PDF',
          'url' => 'http://ros.co.nz/pdf/',
          'description' => 'A library for creating PDF documents.',
        ),
        4 => 
        array (
          'name' => 'HTTP_WebDAV_Server',
          'url' => 'http://pear.php.net/package/HTTP_WebDAV_Server',
          'description' => 'A WebDAV Server Implementation in PHP.',
        ),
        5 => 
        array (
          'name' => 'PclZip',
          'url' => 'http://www.phpconcept.net/pclzip/',
          'description' => 'library offers compression and extraction functions for Zip formatted archives.',
        ),
        6 => 
        array (
          'name' => 'Smarty',
          'url' => 'http://www.smarty.net/',
          'description' => 'A template engine for PHP.',
        ),
        7 => 
        array (
          'name' => 'Yahoo! User Interface Library',
          'url' => 'http://developer.yahoo.net/yui/',
          'description' => 'The UI Library Utilities facilitate the implementation of rich client-side features.',
        ),
        8 => 
        array (
          'name' => 'JShrink',
          'url' => 'https://github.com/tedivm/JShrink/',
          'description' => 'A Javascript minifier written in PHP.',
        ),
        9 => 
        array (
          'name' => 'PHPMailer',
          'url' => 'https://github.com/PHPMailer/PHPMailer',
          'description' => 'A full featured email transfer class for PHP.',
        ),
        10 => 
        array (
          'name' => 'Crypt_Blowfish',
          'url' => 'http://pear.php.net/package/Crypt_Blowfish/',
          'description' => 'Allows for quick two-way blowfish encryption without requiring the MCrypt PHP extension.',
        ),
        11 => 
        array (
          'name' => 'XML_HTMLSax3',
          'url' => 'http://pear.php.net/package/XML_HTMLSax3/',
          'description' => 'A SAX parser for HTML and other badly formed XML documents.',
        ),
        12 => 
        array (
          'name' => 'Yahoo! UI Extensions Library',
          'url' => 'http://www.jackslocum.com/blog/',
          'description' => 'Extensions to the Yahoo! User Interface Library.',
        ),
        13 => 
        array (
          'name' => 'SWFObject',
          'url' => 'http://blog.deconcept.com/swfobject/',
          'description' => 'Javascript Flash Player detection and embed script.',
        ),
        14 => 
        array (
          'name' => 'TinyMCE',
          'url' => 'http://wiki.moxiecode.com/index.php/TinyMCE:Index',
          'description' => 'A WYSIWYG editor control for web browsers that enables the user to edit HTML contents.',
        ),
        15 => 
        array (
          'name' => 'TCPDF',
          'url' => 'http://www.tcpdf.org/',
          'description' => 'A PHP class for generating PDF documents.',
        ),
        16 => 
        array (
          'name' => 'reCAPTCHA',
          'url' => 'http://recaptcha.net/',
          'description' => 'A free CAPTCHA service that helps to digitize books, newspapers and old time radio shows.',
        ),
        17 => 
        array (
          'name' => 'CssMin',
          'url' => 'http://code.google.com/p/cssmin/',
          'description' => 'A css parser and minifier.',
        ),
        18 => 
        array (
          'name' => 'PHP-SAML',
          'url' => 'https://github.com/onelogin/php-saml',
          'description' => 'A simple SAML toolkit for PHP.',
        ),
        19 => 
        array (
          'name' => 'iScroll',
          'url' => 'http://cubiq.org/iscroll',
          'description' => 'The overflow:scroll for mobile webkit.  Native scrolling inside a fixed width/height element.',
        ),
        20 => 
        array (
          'name' => 'JavaScript InfoVis Toolkit',
          'url' => 'http://thejit.org/',
          'description' => 'The JavaScript InfoVis Toolkit provides tools for creating Interactive Data Visualizations for the Web.',
        ),
        21 => 
        array (
          'name' => 'FlashCanvas',
          'url' => 'http://flashcanvas.net/',
          'description' => 'FlashCanvas is a JavaScript library which adds the HTML5 Canvas support to Internet Explorer. It renders shapes and images via Flash drawing API. It supports almost all Canvas APIs and, in many cases, runs faster than other similar libraries which use VML or Silverlight.',
        ),
        22 => 
        array (
          'name' => 'Zend Framework',
          'url' => 'http://framework.zend.com/',
          'description' => 'An open source, object oriented web application framework for PHP5.',
        ),
        23 => 
        array (
          'name' => 'parseCSV',
          'url' => 'http://code.google.com/p/parsecsv-for-php/',
          'description' => 'CSV data parser for PHP.',
        ),
        24 => 
        array (
          'name' => 'php.js',
          'url' => 'http://phpjs.org/',
          'description' => 'Use PHP functions in JavaScript.',
        ),
        25 => 
        array (
          'name' => 'PHP SQL Parser',
          'url' => 'http://code.google.com/p/php-sql-parser/',
          'description' => '',
        ),
        26 => 
        array (
          'name' => 'HTML Purifier',
          'url' => 'http://htmlpurifier.org/',
          'description' => 'A standards-compliant HTML filtering library.',
        ),
        27 => 
        array (
          'name' => 'PHPExcel',
          'url' => 'http://www.codeplex.com/PHPExcel',
          'description' => 'A pure PHP library for reading and writing spreadsheet files.',
        ),
        28 => 
        array (
          'name' => 'jQuery',
          'url' => 'http://jquery.com/',
          'description' => 'jQuery is a fast and concise JavaScript Library that simplifies HTML document traversing, event handling, animating, and Ajax interactions for rapid web development.',
        ),
        29 => 
        array (
          'name' => 'jQuery-Placeholder',
          'url' => 'https://github.com/danielstocks/jQuery-Placeholder',
          'description' => 'A plugin that enables HTML5 placeholder support for legacy browsers.',
        ),
        30 => 
        array (
          'name' => 'jQuery UI',
          'url' => 'https://github.com/jquery/jquery-ui',
          'description' => 'The official jQuery user interface library.',
        ),
        31 => 
        array (
          'name' => 'lessphp',
          'url' => 'http://leafo.net/lessphp/',
          'description' => 'A compiler for LESS written in PHP.',
        ),
        32 => 
        array (
          'name' => 'Backbone.js',
          'url' => 'http://backbonejs.org/',
          'description' => 'A MVC framework for Javascript-heavy applications.',
        ),
        33 => 
        array (
          'name' => 'Handlebars',
          'url' => 'http://handlebarsjs.com/',
          'description' => 'A templating engine to build semantic templates effectively.',
        ),
        34 => 
        array (
          'name' => 'Jasmine',
          'url' => 'http://pivotal.github.com/jasmine/',
          'description' => 'A behavior-driven development framework for testing JavaScript code.',
        ),
        35 => 
        array (
          'name' => 'jquery.iframe-transport.js',
          'url' => 'http://cmlenz.github.com/jquery-iframe-transport/',
          'description' => 'A jQuery Ajax transport plugin that supports file uploads through a hidden iframe.',
        ),
        36 => 
        array (
          'name' => 'sinon.js',
          'url' => 'http://sinonjs.org/',
          'description' => 'Standalone test spies, stubs and mocks for JavaScript.',
        ),
        37 => 
        array (
          'name' => 'Stash',
          'url' => 'http://rezitech.github.com/stash/',
          'description' => 'A library for JavaScript that makes using offline storage easy.',
        ),
        38 => 
        array (
          'name' => 'Twitterbootstrap',
          'url' => 'http://twitter.github.com/bootstrap/',
          'description' => 'HTML, CSS, and JS toolkit from Twitter.',
        ),
        39 => 
        array (
          'name' => 'Async',
          'url' => 'https://github.com/caolan/async/',
          'description' => 'Async utilities for node and the browser.',
        ),
        40 => 
        array (
          'name' => 'jquery timeago',
          'url' => 'https://github.com/rmm5t/jquery-timeago',
          'description' => 'A jQuery plugin that makes it easy to support automatically updating fuzzy timestamps.',
        ),
        41 => 
        array (
          'name' => 'XHProf',
          'url' => 'https://github.com/facebook/xhprof',
          'description' => 'A function-level hierarchical profiler for PHP.',
        ),
      ),
    ),
    'templates' => 
    array (
      'about-source-code' => '{{!
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

}}
<h4>{{str "LBL_SOURCE_CODE" module}}</h4>
<dl class="list">
    <dt><a target="_blank" href="http://www.sugarcrm.com">Sugar</a> (version {{this.serverInfo.version}})</dt>
    <dd>Sales force automation application.</dd>
    {{#each this.meta.external_libs}}
        <dt>{{#if url}}<a target="_blank" href="{{url}}">{{name}}</a>{{else}}{{name}}{{/if}}</dt>
        <dd>{{description}}</dd>
    {{/each}}
</dl>
',
    ),
  ),
  'webpage' => 
  array (
    'templates' => 
    array (
      'webpage' => '{{!
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

}}
{{#each this.dashletConfig.view_panel}}
    {{field ../this model=../this.settings}}
{{/each}}
',
      'dashlet-config' => '{{!
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

}}
<div class="record">
    {{#each dashletConfig.config.fields}}
    <div class="row-fluid panel_body">
        <div class="record-cell">
            <div class="record-label">
            {{str label}}
            </div>
            {{field ../this model=../this.settings template=../this.action}}
        </div>
    </div>
    {{/each}}
</div>
',
    ),
    'controller' => 
    array (
      'base' => '/*********************************************************************************
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
({plugins:[\'Dashlet\'],_defaultOptions:{limit:10,},bindDataChange:function(){if(!this.meta.config){this.model.on("change",this.render,this);}},_render:function(){if(!this.meta.config){this.dashletConfig.view_panel[0].height=this.settings.get(\'limit\')*this.rowHeight;}
app.view.View.prototype._render.call(this);},initDashlet:function(view){this.viewName=view;var settings=_.extend({},this._defaultOptions,this.settings.attributes);this.settings.set(settings);},loadData:function(options){if(options&&options.complete){options.complete();}}})',
    ),
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'name' => 'LBL_DASHLET_WEBPAGE_NAME',
          'description' => 'LBL_DASHLET_WEBPAGE_DESC',
          'config' => 
          array (
            'url' => 'http://www.sugarcrm.com',
            'module' => 'Home',
            'limit' => 3,
          ),
          'preview' => 
          array (
            'title' => 'LBL_DASHLET_WEBPAGE_NAME',
            'url' => 'www.sugarcrm.com',
            'limit' => '3',
            'module' => 'Home',
          ),
        ),
      ),
      'config' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'type' => 'iframe',
            'name' => 'url',
            'label' => 'URL',
          ),
          1 => 
          array (
            'name' => 'limit',
            'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
            'type' => 'enum',
            'options' => 'dashlet_webpage_limit_options',
          ),
        ),
      ),
      'view_panel' => 
      array (
        0 => 
        array (
          'type' => 'iframe',
          'name' => 'url',
          'label' => 'URL',
          'width' => '100%',
        ),
      ),
    ),
  ),
  'dashboard-headerpane' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'actiondropdown',
          'primary' => true,
          'buttons' => 
          array (
            0 => 
            array (
              'name' => 'add_button',
              'type' => 'rowaction',
              'label' => 'LBL_CREATE_BUTTON_LABEL',
              'css_class' => 'btn btn-primary',
            ),
            1 => 
            array (
              'name' => 'edit_button',
              'type' => 'rowaction',
              'label' => 'LBL_EDIT_BUTTON',
            ),
          ),
          'showOn' => 'view',
        ),
        1 => 
        array (
          'name' => 'cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'edit',
        ),
        2 => 
        array (
          'name' => 'delete_button',
          'type' => 'button',
          'label' => 'LBL_DELETE_BUTTON_LABEL',
          'css_class' => 'btn-danger',
          'showOn' => 'edit',
        ),
        3 => 
        array (
          'name' => 'save_button',
          'type' => 'button',
          'label' => 'LBL_SAVE_BUTTON_LABEL',
          'css_class' => 'btn-primary',
          'showOn' => 'edit',
        ),
        4 => 
        array (
          'name' => 'create_cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'create',
        ),
        5 => 
        array (
          'name' => 'create_button',
          'type' => 'button',
          'label' => 'LBL_SAVE_BUTTON_LABEL',
          'css_class' => 'btn-primary',
          'showOn' => 'create',
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'header',
          'fields' => 
          array (
            0 => 
            array (
              'type' => 'dashboardtitle',
              'name' => 'name',
              'placeholder' => 'LBL_DASHBOARD_TITLE',
            ),
            1 => 
            array (
              'type' => 'layoutbutton',
              'name' => 'layout',
              'showOn' => 'edit',
            ),
          ),
        ),
      ),
    ),
    'templates' => 
    array (
      'dashboard-headerpane' => '{{!
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

}}
<div class="headerpane">
    <h1>
        {{#each meta.panels}}
            {{#each fields}}
                <span class="record-cell">
                    {{field ../../this model=../../this.model template=../../this.action}}
                </span>
            {{/each}}
        {{/each}}
        <div class="btn-toolbar pull-right dropdown">
            {{#each meta.buttons}}
                {{field ../this model=../this.model template="detail"}}
            {{/each}}
        </div>
    </h1>
</div>
',
    ),
  ),
  'about-headerpane' => 
  array (
    'meta' => 
    array (
      'template' => 'headerpane',
      'title' => 'TPL_ABOUT',
    ),
    'controller' => 
    array (
      'base' => '/*
     * By installing or using this file, you are confirming on behalf of the entity
     * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
     * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
     * http://www.sugarcrm.com/master-subscription-agreement
     *
     * If Company is not bound by the MSA, then by installing or using this file
     * you are agreeing unconditionally that Company will be bound by the MSA and
     * certifying that you have authority to bind Company accordingly.
     *
     * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
     */
({extendsFrom:\'HeaderpaneView\',_renderHtml:function(){var title=this.title||this.module;this.title=app.lang.get(title,this.module,app.metadata.getServerInfo());app.view.View.prototype._renderHtml.call(this);}})',
    ),
  ),
  '_hash' => '83750026aa133c8d0a12d8fca5be3e85',
);

