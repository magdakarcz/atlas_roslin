{extends file="main.tpl"}

{block name=top}
<img src="{$conf->img}loginbg.jpg" width="1550" height="352" alt="">
<div id="fh5co-main">
	<div class="fh5co-narrow-content ">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					<form action="{$conf->action_root}login" method="post">

							<legend>Zaloguj się</legend>
								<div class="form-group">
									<input id="id_login" type="text" class="form-control" placeholder="Login" name="login"/>
								</div>
								<div class="form-group">
									<input id="id_pass" type="password" class="form-control" placeholder="Hasło" name="password" />
								</div>
								<div class="form-group">
									<input type="submit" value="zaloguj" class="btn btn-primary btn-md"/>
									 <br><small>Nie posiadasz konta?</small>&nbsp&nbsp&nbsp&nbsp<a href="{$conf->action_root}register" >Utwórz konto</a>
								</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{/block}
