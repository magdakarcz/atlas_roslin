<?php
/* Smarty version 4.3.1, created on 2023-07-03 12:03:26
  from 'C:\xampp\htdocs\atlas_roslin\app\views\roslinaListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a29cee51b7d0_55819341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0800a0de08656ada036acf29ee2be447166ee53c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atlas_roslin\\app\\views\\roslinaListTable.tpl',
      1 => 1688378603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a29cee51b7d0_55819341 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="fh5co-main">
	<?php if (core\RoleUtils::inRole("3")) {?>
		<div class="fh5co-narrow-content ">
			<thead>
				<table id="perm" >
			</thead>
			<tbody><legend>Panel edycji</legend>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roslina']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
					<tr><td><small><?php echo $_smarty_tpl->tpl_vars['p']->value["id_roslina"];?>
</small></td><td><small><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwa_naukowa"];?>
</small></td><td><a class="btn:hover btn-success btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
roslinaEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_roslina'];?>
">Edytuj</a></td>&nbsp;<td><a class="btn:hover btn-success btn-sm" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
roslinaDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_roslina'];?>
','Czy na pewno usunąć rekord ?')">Usuń</a></td></tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
				</table>
		</div>
	<?php }?>

	<div class="fh5co-gallery">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roslina']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
			

			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->img;
echo $_smarty_tpl->tpl_vars['p']->value["zdjecie"];?>
" class="image-popup gallery-item" title="
			
			<big><b><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwa_naukowa"];?>
</b></big> (<?php echo $_smarty_tpl->tpl_vars['p']->value["nazwa_potoczna"];?>
)
			<br><br>
			<b>Toksyczność: </b><?php if ($_smarty_tpl->tpl_vars['p']->value["toksycznosc"] == 0) {?>
			Nie
			<?php } else { ?>
			Tak
			<?php }?>
			<br>
			<b>Temperatura: </b><?php echo $_smarty_tpl->tpl_vars['p']->value["min_temperatura"];?>
°C - <?php echo $_smarty_tpl->tpl_vars['p']->value["max_temperatura"];?>
°C
			<br>
			<b>Światło: </b><?php if ($_smarty_tpl->tpl_vars['p']->value["swiatlo_id"] == 1) {?>
			Mało
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["swiatlo_id"] == 2) {?> 
			Mało-przeciętnie
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["swiatlo_id"] == 3) {?>
			Przeciętnie
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["swiatlo_id"] == 4) {?>
			Przeciętnie-dużo
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["swiatlo_id"] == 5) {?>
			Dużo
			<?php }?>
			<br>
			<b>Nawodnienie: </b><?php if ($_smarty_tpl->tpl_vars['p']->value["nawodnienie_id"] == 1) {?>
			Małe
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["nawodnienie_id"] == 2) {?> 
			Małe-średnie
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["nawodnienie_id"] == 3) {?>
			Średnie
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["nawodnienie_id"] == 4) {?>
			Średnie-duże
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["nawodnienie_id"] == 5) {?>
			Duże
			<?php }?>
			<br>
			<b>Rodzaj: </b><?php if ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 1) {?>
			Monstera
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 2) {?> 
			Zielistka
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 3) {?>
			Trójskrzyn
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 4) {?>
			Difenbachia
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 5) {?>
			Dracena
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 6) {?>
			Epipremnum
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 7) {?>
			Figowiec
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 8) {?>
			Hoja
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 9) {?>
			Peperomia
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 10) {?>
			Pilea
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 11) {?>
			Sansewieria
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 12) {?>
			Zamiokulkas
			<?php }?>
			<br>
			<b>Rodzina: </b><?php if ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 1) {?>
			Obrazkowate
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 2) {?> 
			Szparagowate
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 3) {?>
			Wilczomleczowate
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 4) {?>
			Obrazkowate
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 5) {?>
			Szparagowate
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 6) {?>
			Obrazkowate
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 7) {?>
			Morwowate
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 8) {?>
			Toinowate
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 9) {?>
			Pieprzowate
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 10) {?>
			Pokrzywowate
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 11) {?>
			Szparagowate
			<?php } elseif ($_smarty_tpl->tpl_vars['p']->value["rodzaj_id"] == 12) {?>
			Obrazkowate
			<?php }?>
			
			
			"><span class="overlay">  
			<h2> <?php echo $_smarty_tpl->tpl_vars['p']->value["nazwa_naukowa"];?>
</h2><br><h2>(<?php echo $_smarty_tpl->tpl_vars['p']->value["nazwa_potoczna"];?>
)</h2></span>
			

			<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->img;
echo $_smarty_tpl->tpl_vars['p']->value["zdjecie"];?>
" alt="" class="img-responsive"></a>

			
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
	</div>
</div>

<?php }
}
