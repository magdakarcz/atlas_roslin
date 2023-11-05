<?php
/* Smarty version 4.3.1, created on 2023-07-03 00:08:37
  from 'C:\xampp\htdocs\atlas_roslin\app\views\roslinaListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a1f565799e84_33208181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f55ecf8474be5964b09d46c2b692443e0868d52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atlas_roslin\\app\\views\\roslinaListFullPage.tpl',
      1 => 1687734484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:roslinaListTable.tpl' => 1,
  ),
),false)) {
function content_64a1f565799e84_33208181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194658205064a1f56578d9d3_25011826', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213286747964a1f565791905_20382724', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_194658205064a1f56578d9d3_25011826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_194658205064a1f56578d9d3_25011826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="col-md-7">
<form id="search-form" style="text-align: center; margin-top: 5px; " onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roslinaListPart','table'); return ;">
		<input type="text" placeholder="Nazwa naukowa" class="form-control" name="sf_nazwa_naukowa" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->nazwa_naukowa;?>
" /><br />
		<button type="submit" class="btn btn-primary btn-md">Szukaj</button>

</form>
</div>

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_213286747964a1f565791905_20382724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_213286747964a1f565791905_20382724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="text-align: right;" class="bottom-margin">
<a class="btn btn-primary btn-md" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roslinaNew">Dodaj nową roślinę</a>
</div>	

<div id="table">
<?php $_smarty_tpl->_subTemplateRender("file:roslinaListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
</div>
<?php
}
}
/* {/block 'bottom'} */
}
