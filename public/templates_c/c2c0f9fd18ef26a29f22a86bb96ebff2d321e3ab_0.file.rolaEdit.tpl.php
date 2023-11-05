<?php
/* Smarty version 4.3.1, created on 2023-07-03 01:43:00
  from 'C:\xampp\htdocs\atlas_roslin\app\views\rolaEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a20b845451e1_91410948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c0f9fd18ef26a29f22a86bb96ebff2d321e3ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atlas_roslin\\app\\views\\rolaEdit.tpl',
      1 => 1688341365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a20b845451e1_91410948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25030965564a20b84541a14_51476666', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_25030965564a20b84541a14_51476666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_25030965564a20b84541a14_51476666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->img;?>
loginbg.jpg" width="1550" height="352" alt="">
<div id="fh5co-main">
	<div class="fh5co-narrow-content ">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rolaSave" method="post">

							<legend>Zmień moderatora</legend>
							<div class="form-group">
									<label for="id">id uzytkownika</label>
									<input id="id" type="text" placeholder=" " class="form-control" name="pozwolenie_id" required value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pozwolenie_id;?>
">
								</div>
								<div class="form-group">
								wybierz:
									<select id="rola_id" class="form-control" name="rola_id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rola_id;?>
">
										<option value="1">admin</option>
										<option value="2">gosc</option>
										<option value="3">moderator</option>
									</select>
									
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-md" value="Zapisz"/>
									</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
}
/* {/block 'top'} */
}
