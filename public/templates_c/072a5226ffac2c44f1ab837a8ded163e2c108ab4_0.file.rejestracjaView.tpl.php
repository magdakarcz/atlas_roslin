<?php
/* Smarty version 4.3.1, created on 2023-07-03 02:32:35
  from 'C:\xampp\htdocs\atlas_roslin\app\views\rejestracjaView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a21723876dc0_10393061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '072a5226ffac2c44f1ab837a8ded163e2c108ab4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atlas_roslin\\app\\views\\rejestracjaView.tpl',
      1 => 1688317465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a21723876dc0_10393061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85243227664a217238744a6_16925689', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_85243227664a217238744a6_16925689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_85243227664a217238744a6_16925689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->img;?>
rejestracjabg.jpg" width="1550" height="320" alt="">
<div id="fh5co-main">
	<div class="fh5co-narrow-content ">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post">

							<legend>Zarejestruj się</legend>
								<div class="form-group">
									<input id="id_login" type="text" class="form-control" placeholder="Login" name="login"/>
								</div>
								<div class="form-group">
									<input id="id_pass" type="password" class="form-control" placeholder="Hasło" name="password" />
								</div>
								<div class="form-group">
									<input id="id_pass" type="password" class="form-control" placeholder="Powtórz hasło" name="password_repeat" />
								</div>
								<div class="form-group">
									<input type="submit" value="Zarejestruj" class="btn btn-primary btn-md"/>
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
