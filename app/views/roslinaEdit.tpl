{extends file="main.tpl"}

{block name=top}
<img src="{$conf->img}editbg.jpg" width="1550" height="352" alt="">
<div id="fh5co-main">
	<div class="fh5co-narrow-content ">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<form action="{$conf->action_root}roslinaSave" method="post" enctype="multipart/form-data">
							
								<legend>Uzupełnij informacje o roślinie</legend>
								<div class="form-group">
									<label for="id">ID rosliny</label>
									<input id="id" type="text" placeholder=" " class="form-control" name="id" required value="{$form->id}">
								</div>
								<div class="form-group">
									<label for="nazwa_naukowa">Nazwa naukowa</label>
									<input id="nazwa_naukowa" type="text" placeholder=" " class="form-control"  name="nazwa_naukowa" required value="{$form->nazwa_naukowa}">
								</div>
								<div class="form-group">
									<label for="nazwa_potoczna">Nazwa Potoczna</label>
									<input id="nazwa_potoczna" type="text" placeholder=" " class="form-control" name="nazwa_potoczna" value="{$form->nazwa_potoczna}">
								</div>
								<div class="form-group">
									<label for="toksycznosc">Toksyczność</label>
									<select name="toksycznosc" id="toksycznosc" class="form-control" value="{$form->toksycznosc}">
										<option value="0">Nie</option>
										<option value="1">Tak</option>
									</select>
								</div>
								<div class="form-group">
									<label for="min_temperatura">Minimalna temperatura</label>
									<input id="min_temperatura" type="number" placeholder="°C" class="form-control" name="min_temperatura" min="4" max="40" value="{$form->min_temperatura}">
								</div>
								<div class="form-group">
									<label for="max_temperatura">Maksymalna temperatura</label>
									<input id="max_temperatura" type="number" placeholder="°C" class="form-control" name="max_temperatura" min="4" max="40" value="{$form->max_temperatura}">
								</div>
								<div class="form-group">
									<label for="swiatlo_id">Światło</label>
									<select name="swiatlo_id" id="swiatlo_id" class="form-control" value="{$form->swiatlo_id}">
										<option value="1">Mało</option>
										<option value="2">Mało-przeciętnie</option>
										<option value="3">Przeciętnie</option>
										<option value="4">Przeciętnie-dużo</option>
										<option value="5">Dużo</option>
									</select>
								</div>
								<div class="form-group">
									<label for="nawodnienie_id">Nawodnienie</label>
									<select name="nawodnienie_id" id="nawodnienie_id" class="form-control" value="{$form->nawodnienie_id}">
										<option value="1">Małe</option>
										<option value="2">Małe-średnie</option>
										<option value="3">Średnie</option>
										<option value="4">Średnie-duże</option>
										<option value="5">Duże</option>
									</select>
								</div>
								<div class="form-group">
									<label for="rodzaj_id">Rodzaj</label>
									<select name="rodzaj_id" id="rodzaj_id" class="form-control" value="{$form->rodzaj_id}">
										<option value="1">Monstera</option>
										<option value="2">Zielistka</option>
										<option value="3">Trójskrzyn</option>
										<option value="4">Difenbachia</option>
										<option value="5">Dracena</option>
										<option value="6">Epipremnum</option>
										<option value="7">Figowiec</option>
										<option value="8">Hoja</option>
										<option value="9">Peperomia</option>
										<option value="10">Pilea</option>
										<option value="11">Sansewieria</option>
										<option value="12">Zamiokulkas</option>
									</select>
								</div>
		<div class="pure-control-group">
            <label for="zdjecie">Zdjecie</label>
            <input id="zdjecie" type="file" placeholder="zdjecie" name="zdjecie" accept="image/*">
        </div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-md" value="Zapisz"/>
									<a class="btn btn-primary btn-md" href="{$conf->action_root}roslinaList">Powrót</a>
								</div>
								
							
							<input type="hidden" name="id_roslina" value="{$form->id}">
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{/block}
