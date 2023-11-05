<?php
/* Smarty version 4.3.1, created on 2023-07-03 02:40:46
  from 'C:\xampp\htdocs\atlas_roslin\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a2190e7053c2_65095925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04f46dd46d56fb736f322f6287423b50728b04a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atlas_roslin\\app\\views\\LoginView.tpl',
      1 => 1688344845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a2190e7053c2_65095925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75392584064a2190e702611_19940026', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_75392584064a2190e702611_19940026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_75392584064a2190e702611_19940026',
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
login" method="post">

							<legend>Zaloguj się</legend>
								<div class="form-group">
									<input id="id_login" type="text" class="form-control" placeholder="Login" name="login"/>
								</div>
								<div class="form-group">
									<input id="id_pass" type="password" class="form-control" placeholder="Hasło" name="password" />
								</div>
								<div class="form-group">
									<input type="submit" value="zaloguj" class="btn btn-primary btn-md"/>
									 <br><small>Nie posiadasz konta?</small>&nbsp&nbsp&nbsp&nbsp<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" >Utwórz konto</a>
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
