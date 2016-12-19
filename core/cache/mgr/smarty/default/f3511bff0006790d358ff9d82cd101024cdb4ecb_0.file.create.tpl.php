<?php /* Smarty version 3.1.27, created on 2016-12-19 15:01:44
         compiled from "W:\domains\modx\manager\templates\default\element\plugin\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:155715857cc280abe39_33322315%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3511bff0006790d358ff9d82cd101024cdb4ecb' => 
    array (
      0 => 'W:\\domains\\modx\\manager\\templates\\default\\element\\plugin\\create.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155715857cc280abe39_33322315',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5857cc280ad7f6_32937874',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5857cc280ad7f6_32937874')) {
function content_5857cc280ad7f6_32937874 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '155715857cc280abe39_33322315';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>