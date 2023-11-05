<?php
/* Smarty version 4.3.1, created on 2023-07-03 00:20:46
  from 'C:\xampp\htdocs\atlas_roslin\app\views\rolaView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a1f83e6030c2_52187501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a785949bd374427ee40c4435d0df17841b23da0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atlas_roslin\\app\\views\\rolaView.tpl',
      1 => 1688336255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a1f83e6030c2_52187501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21494412364a1f83e5fbe09_76979750', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_21494412364a1f83e5fbe09_76979750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_21494412364a1f83e5fbe09_76979750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div id="fh5co-main">
	<div class="fh5co-narrow-content ">

					
					<thead>
	<tr>
		<th>ID</th>
		<th>login</th>
		<th>Opcje</th>
	</tr>
	<table id="role" >
</thead>
<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uzytkownik']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
					
					<tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value["id_uzytkownik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["login"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rolaEdit/<?php echo $_smarty_tpl->tpl_vars['u']->value['id_uzytkownik'];?>
">Nadaj moderadora</a>&nbsp;</td></tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					
						
						</tbody>
</table>
						</td>

	</div>
</div>

<?php
}
}
/* {/block 'top'} */
}
