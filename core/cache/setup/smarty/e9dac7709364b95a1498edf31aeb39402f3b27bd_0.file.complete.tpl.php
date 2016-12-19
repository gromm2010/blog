<?php /* Smarty version 3.1.27, created on 2016-12-19 14:41:48
         compiled from "W:\domains\modx\setup\templates\complete.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:268195857c77ce04df9_97062932%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9dac7709364b95a1498edf31aeb39402f3b27bd' => 
    array (
      0 => 'W:\\domains\\modx\\setup\\templates\\complete.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268195857c77ce04df9_97062932',
  'variables' => 
  array (
    '_lang' => 0,
    'app_name' => 0,
    'errors' => 0,
    'error' => 0,
    'cleanup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5857c77ce47706_56929643',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5857c77ce47706_56929643')) {
function content_5857c77ce47706_56929643 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '268195857c77ce04df9_97062932';
?>
<form id="install" action="?action=complete" method="post">
<div>
	<h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['thank_installing'];
echo $_smarty_tpl->tpl_vars['app_name']->value;?>
.</h2>

    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
    <div class="note">
    <h3><?php echo $_smarty_tpl->tpl_vars['_lang']->value['cleanup_errors_title'];?>
</h3>
        <?php
$_from = $_smarty_tpl->tpl_vars['errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$foreach_error_Sav = $_smarty_tpl->tpl_vars['error'];
?>
            <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><hr />
        <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
    </div>
    <br />
    <?php }?>
	<p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['please_select_login'];?>
</p>
</div>
<br />

<div class="setup_navbar">
    <label><input type="submit" id="modx-next" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['login'];?>
" autofocus="autofocus" /></label>
    <br /><br />
    <span class="cleanup">
        <label><input type="checkbox" value="1" id="cleanup" name="cleanup"<?php if ($_smarty_tpl->tpl_vars['cleanup']->value) {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['_lang']->value['delete_setup_dir'];?>
</label>
    </span>
</div>
</form><?php }
}
?>