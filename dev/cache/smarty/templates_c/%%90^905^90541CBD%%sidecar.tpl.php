<?php /* Smarty version 2.6.11, created on 2013-12-05 18:02:14
         compiled from include/MVC/View/tpls/sidecar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getscript', 'include/MVC/View/tpls/sidecar.tpl', 31, false),)), $this); ?>

<!DOCTYPE HTML>
<html class="no-js">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=8, IE=9, IE=10" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <title>SugarCRM</title>
        <link rel="icon" href="themes/default/images/sugar_icon.ico">
        <!-- CSS -->
        <?php $_from = $this->_tpl_vars['css_url']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['url']):
?>
            <link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']; ?>
"/>
        <?php endforeach; endif; unset($_from); ?>
        <!--[if lt IE 10]>
        <link rel="stylesheet" type="text/css" href="themes/default/css/ie.css">
        <![endif]-->
        <?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/modernizr.js"), $this);?>

    </head>
    <body>
        <div id="sugarcrm">
            <div id="sidecar">
                <div id="alerts" class="alert-top">
                    <div class="alert alert-process">
                        <strong><?php echo $this->_tpl_vars['LBL_LOADING']; ?>
</strong>
                        <div class="loading">
                            <span class="l1"></span><span class="l2"></span><span class="l3"></span>
                        </div>
                    </div>
                </div>
                <div id="header"></div>
                <div id="content"></div>
                <div id="drawers"></div>
                <div id="footer"></div>
                <div id="tourguide"></div>
            </div>
        </div>
        <!-- App Scripts -->
        <?php if (! empty ( $this->_tpl_vars['developerMode'] )): ?>
            <?php echo smarty_function_sugar_getscript(array('file' => "sidecar/minified/sidecar.js"), $this);?>

        <?php else: ?>
            <?php echo smarty_function_sugar_getscript(array('file' => "sidecar/minified/sidecar.min.js"), $this);?>

        <?php endif; ?>
        <script src='<?php echo $this->_tpl_vars['sugarSidecarPath']; ?>
'></script>
        <script src='<?php echo $this->_tpl_vars['SLFunctionsPath']; ?>
'></script>
        <!-- <script src='sidecar/minified/sugar.min.js'></script> -->
        <script src='<?php echo $this->_tpl_vars['configFile']; ?>
?hash=<?php echo $this->_tpl_vars['configHash']; ?>
'></script>
        <?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/jquery/jquery.dataTables.min.js"), $this);?>


        <?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/sugar7.js"), $this);?>

        <?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/sugar7/bwc.js"), $this);?>

        <?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/sugar7/utils.js"), $this);?>

        <?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/sugar7/field.js"), $this);?>

        <?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/sugar7/hacks.js"), $this);?>

        <?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/sugar7/alert.js"), $this);?>

        <?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/sugar7/hbs-helpers.js"), $this);?>

        <?php echo '
        <script language="javascript">
            if (parent.window != window && typeof(parent.SUGAR.App.router) != "undefined") {
                parent.SUGAR.App.router.navigate("#Home", {trigger:true});
            } else {
                var App;
                ';  if ($this->_tpl_vars['authorization']): ?>
                SUGAR.App.cache.set("<?php echo $this->_tpl_vars['appPrefix']; ?>
AuthAccessToken", "<?php echo $this->_tpl_vars['authorization']['access_token']; ?>
")
                <?php if ($this->_tpl_vars['authorization']['refresh_token']): ?>
                SUGAR.App.cache.set("<?php echo $this->_tpl_vars['appPrefix']; ?>
AuthRefreshToken", "<?php echo $this->_tpl_vars['authorization']['refresh_token']; ?>
")
                <?php endif; ?>
                history.replaceState(null, 'SugarCRM', window.SUGAR.App.config.siteUrl+"/"+window.location.hash)
                <?php endif;  echo '
                App = SUGAR.App.init({
                    el: "#sidecar",
                    callback: function(app){
                        $(\'#alerts\').empty();
                        app.start();
                    }
                });
                App.api.debug = App.config.debugSugarApi;
            }
        </script>
        '; ?>


        <?php if (! empty ( $this->_tpl_vars['voodooFile'] )): ?>
            <script src="<?php echo $this->_tpl_vars['voodooFile']; ?>
"></script>
        <?php endif; ?>
    </body>
</html>