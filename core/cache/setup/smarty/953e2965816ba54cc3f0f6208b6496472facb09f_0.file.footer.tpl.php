<?php /* Smarty version 3.1.27, created on 2016-12-19 14:41:24
         compiled from "W:\domains\modx\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:259815857c764688534_06634350%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '953e2965816ba54cc3f0f6208b6496472facb09f' => 
    array (
      0 => 'W:\\domains\\modx\\setup\\templates\\footer.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259815857c764688534_06634350',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5857c764696909_78373025',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5857c764696909_78373025')) {
function content_5857c764696909_78373025 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'W:/domains/modx/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '259815857c764688534_06634350';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>