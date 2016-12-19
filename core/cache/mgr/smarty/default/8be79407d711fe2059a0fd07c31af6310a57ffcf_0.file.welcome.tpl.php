<?php /* Smarty version 3.1.27, created on 2016-12-19 14:42:31
         compiled from "W:\domains\modx\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:182915857c7a7cc0872_83083355%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8be79407d711fe2059a0fd07c31af6310a57ffcf' => 
    array (
      0 => 'W:\\domains\\modx\\manager\\templates\\default\\welcome.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182915857c7a7cc0872_83083355',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5857c7a7ccb761_63912205',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5857c7a7ccb761_63912205')) {
function content_5857c7a7ccb761_63912205 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '182915857c7a7cc0872_83083355';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>