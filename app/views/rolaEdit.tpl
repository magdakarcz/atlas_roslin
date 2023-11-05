{extends file="main.tpl"}

{block name=top}
<img src="{$conf->img}loginbg.jpg" width="1550" height="352" alt="">
<div id="fh5co-main">
	<div class="fh5co-narrow-content ">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					<form action="{$conf->action_root}rolaSave" method="post">

							<legend>Zmień moderatora</legend>
							<div class="form-group">
									<label for="id">id uzytkownika</label>
									<input id="id" type="text" placeholder=" " class="form-control" name="pozwolenie_id" required value="{$form->pozwolenie_id}">
								</div>
								<div class="form-group">
								wybierz:
									<select id="rola_id" class="form-control" name="rola_id" value="{$form->rola_id}">
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
{/block}
