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
  'ERR_CRON_SYNTAX' => '非法Cron语法',
  'ERR_DELETE_RECORD' => '必须指定记录编号才能删除计划任务。',
  'LBL_ADV_OPTIONS' => '高级选项',
  'LBL_ALL' => '每天',
  'LBL_ALWAYS' => '始终',
  'LBL_AND' => '和',
  'LBL_AT' => '在',
  'LBL_AT_THE' => '在',
  'LBL_BASIC_OPTIONS' => '基本设置',
  'LBL_CATCH_UP' => '错过时执行',
  'LBL_CATCH_UP_WARNING' => '如果这个任务执行需要一些时间就取消选择。',
  'LBL_CLEANJOBQUEUE' => '清理任务队列',
  'LBL_CRONTAB_EXAMPLES' => '使用上述标准crontab符号。',
  'LBL_CRONTAB_SERVER_TIME_POST' => ')。 请相应地确定任务执行。',
  'LBL_CRONTAB_SERVER_TIME_PRE' => '计量规格基于服务器所在的时区运行 (',
  'LBL_CRON_INSTRUCTIONS_LINUX' => '设置Crontab',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => '设置Windows的任务计划',
  'LBL_CRON_LINUX_DESC' => '在您的crontab文件中增加这一行:',
  'LBL_CRON_WINDOWS_DESC' => '用以下的命令创建一个批处理文件:',
  'LBL_DATE_TIME_END' => '结束日期和时间',
  'LBL_DATE_TIME_START' => '开始日期和时间',
  'LBL_DAY_OF_MONTH' => '日期',
  'LBL_DAY_OF_WEEK' => '天',
  'LBL_EVERY' => '每',
  'LBL_EVERY_DAY' => '每天',
  'LBL_EXECUTE_TIME' => '执行时间',
  'LBL_FRI' => '星期五',
  'LBL_FROM' => '从',
  'LBL_HOUR' => '小时',
  'LBL_HOURS' => '小时',
  'LBL_HOUR_SING' => '小时',
  'LBL_IN' => '在',
  'LBL_INTERVAL' => '间隔',
  'LBL_JOB' => '任务',
  'LBL_JOBS_SUBPANEL_TITLE' => '任务日志',
  'LBL_JOB_URL' => '任务 URL',
  'LBL_LAST_RUN' => '最后执行时间',
  'LBL_LIST_EXECUTE_TIME' => '执行时间:',
  'LBL_LIST_JOB_INTERVAL' => '间隔:',
  'LBL_LIST_LIST_ORDER' => '计划任务:',
  'LBL_LIST_NAME' => '计划任务:',
  'LBL_LIST_RANGE' => '范围:',
  'LBL_LIST_REMOVE' => '移除:',
  'LBL_LIST_STATUS' => '状态:',
  'LBL_LIST_TITLE' => '计划任务列表:',
  'LBL_MINS' => '分钟',
  'LBL_MINUTES' => '分钟',
  'LBL_MIN_MARK' => '分钟标示',
  'LBL_MODULE_NAME' => 'Sugar计划任务',
  'LBL_MODULE_NAME_SINGULAR' => 'Sugar计划任务',
  'LBL_MODULE_TITLE' => '计划任务',
  'LBL_MON' => '星期一',
  'LBL_MONTH' => '月份',
  'LBL_MONTHS' => '月',
  'LBL_NAME' => '任务名称',
  'LBL_NEVER' => '从不',
  'LBL_NEW_FORM_TITLE' => '新增计划任务',
  'LBL_NO_PHP_CLI' => '如果您的主机没有这个PHP二进制程序，您可以使用wget或着curl来执行您的任务。<br>forwget:<b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget--quiet--non-verbosehttp://translate.sugarcrm.com/soon/latest/cron.php>/dev/null2>&1</b><br>forcurl:<b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl--silenthttp://translate.sugarcrm.com/soon/latest/cron.php>/dev/null2>&1',
  'LBL_OFTEN' => '频繁。',
  'LBL_ON_THE' => '于',
  'LBL_OOTB_BOUNCE' => '运行每晚处理退回的营销邮件',
  'LBL_OOTB_CAMPAIGN' => '运行每晚批量运行邮件营销',
  'LBL_OOTB_CLEANUP_QUEUE' => '清理任务队列',
  'LBL_OOTB_CREATE_NEXT_TIMEPERIOD' => '创建未来时间周期',
  'LBL_OOTB_IE' => '检查收件箱',
  'LBL_OOTB_PRUNE' => '每月1号精简数据库',
  'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => '从文件系统的文件删除',
  'LBL_OOTB_REPORTS' => '运行报表生成计划任务',
  'LBL_OOTB_SEND_EMAIL_REMINDERS' => '运行邮件提醒通知',
  'LBL_OOTB_SUGARFEEDS' => '修改sugarfeed表',
  'LBL_OOTB_TRACKER' => '清理跟踪器表',
  'LBL_OOTB_WORKFLOW' => '处理工作流程任务',
  'LBL_PERENNIAL' => '永久',
  'LBL_PERFORMFULLFTSINDEX' => '全文搜索索引系统',
  'LBL_POLLMONITOREDINBOXES' => '收取邮件',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => '收取退订邮件',
  'LBL_PROCESSQUEUE' => '执行队列',
  'LBL_PROCESSWORKFLOW' => 'w执行工作流程',
  'LBL_PRUNEDATABASE' => '清理数据库',
  'LBL_RANGE' => '到',
  'LBL_REFRESHJOBS' => '刷新任务',
  'LBL_REMOVEDOCUMENTSFROMFS' => '从文件系统的文件删除',
  'LBL_RUNMASSEMAILCAMPAIGN' => '批量发送市场活动邮',
  'LBL_SAT' => '星期六',
  'LBL_SCHEDULER' => '计划任务:',
  'LBL_SEARCH_FORM_TITLE' => '查找计划任务',
  'LBL_SENDEMAILREMINDERS' => '运行发送邮件提醒',
  'LBL_STATUS' => '状态',
  'LBL_SUGARJOBCREATENEXTTIMEPERIOD' => '创建未来时间周期',
  'LBL_SUN' => '星期日',
  'LBL_THU' => '星期四',
  'LBL_TIME_FROM' => '启用从',
  'LBL_TIME_TO' => '启用到',
  'LBL_TOGGLE_ADV' => '高级选项',
  'LBL_TOGGLE_BASIC' => '基本选项',
  'LBL_TRIMSUGARFEEDS' => '修改sugarfeed表',
  'LBL_TRIMTRACKER' => '清除访问记录',
  'LBL_TUE' => '星期二',
  'LBL_UPDATETRACKERSESSIONS' => '更新访问记录会话信息',
  'LBL_UPDATE_TRACKER_SESSIONS' => '更新tracker_sessions表',
  'LBL_WARN_CURL' => '警告:',
  'LBL_WARN_CURL_TITLE' => 'CURL警告:',
  'LBL_WARN_NO_CURL' => '本系统的PHP环境不支持cURL库(--with-curl=/path/to/curl_library)。请联系管理员解决这个问题。否则计划任务将不能正常运行。',
  'LBL_WED' => '星期三',
  'LNK_LIST_SCHEDULED' => '以安排的任务',
  'LNK_LIST_SCHEDULER' => '计划任务',
  'LNK_NEW_SCHEDULER' => '新增计划任务',
  'NTC_DELETE_CONFIRMATION' => '您确定要删除这条记录?',
  'NTC_LIST_ORDER' => '设置计划任务的下拉框选项',
  'NTC_STATUS' => '设置状态为“停用”，计划任务会从下拉列表中移除。',
  'SOCK_GREETING' => '这是SugarCRM计划任务服务界面. <br />[ 可守护进程的命令: 开始|重起|关闭|状态 ]<br />退出, 键入$#39;quit$#39;.  要关闭服务$#39;shutdown$#39;.',
);

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    0 => '',
    1 => 'Jan',
    2 => 'Feb',
    3 => 'Mar',
    4 => 'Apr',
    5 => 'May',
    6 => 'Jun',
    7 => 'Jul',
    8 => 'Aug',
    9 => 'Sep',
    10 => 'Oct',
    11 => 'Nov',
    12 => 'Dec',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December',
  ),
  'dom_cal_weekdays' => 
  array (
    0 => 'Sun',
    1 => 'Mon',
    2 => 'Tue',
    3 => 'Wed',
    4 => 'Thu',
    5 => 'Fri',
    6 => 'Sat',
  ),
  'dom_cal_weekdays_long' => 
  array (
    0 => 'Sunday',
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday',
    4 => 'Thursday',
    5 => 'Friday',
    6 => 'Saturday',
  ),
);

