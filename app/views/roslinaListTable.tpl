<div id="fh5co-main">
	{if core\RoleUtils::inRole("3")}
		<div class="fh5co-narrow-content ">
			<thead>
				<table id="perm" >
			</thead>
			<tbody><legend>Panel edycji</legend>
				{foreach $roslina as $p}
					{strip}
						<tr>
							<td><small>{$p["id_roslina"]}</small></td>
							<td><small>{$p["nazwa_naukowa"]}</small></td>
							
							<td><a class="btn:hover btn-success btn-sm" href="{$conf->action_url}roslinaEdit/{$p['id_roslina']}">Edytuj</a></td>
							&nbsp;
							
							
							<td><a class="btn:hover btn-success btn-sm"
							onclick="confirmLink('{$conf->action_url}roslinaDelete/{$p['id_roslina']}','Czy na pewno usunąć rekord ?')">Usuń</a></td>
							
						</tr>
					{/strip}
				{/foreach}
			</tbody>
				</table>
		</div>
	{/if}

	<div class="fh5co-gallery">
	{foreach $roslina as $p}
			

			<a href="{$conf->img}{$p["zdjecie"]}" class="image-popup gallery-item" title="
			
			<big><b>{$p["nazwa_naukowa"]}</b></big> ({$p["nazwa_potoczna"]})
			<br><br>
			<b>Toksyczność: </b>{if $p["toksycznosc"] == 0}
			Nie
			{else}
			Tak
			{/if}
			<br>
			<b>Temperatura: </b>{$p["min_temperatura"]}°C - {$p["max_temperatura"]}°C
			<br>
			<b>Światło: </b>{if $p["swiatlo_id"]==1}
			Mało
			{elseif $p["swiatlo_id"]==2} 
			Mało-przeciętnie
			{elseif $p["swiatlo_id"]==3}
			Przeciętnie
			{elseif $p["swiatlo_id"]==4}
			Przeciętnie-dużo
			{elseif $p["swiatlo_id"]==5}
			Dużo
			{/if}
			<br>
			<b>Nawodnienie: </b>{if $p["nawodnienie_id"]==1}
			Małe
			{elseif $p["nawodnienie_id"]==2} 
			Małe-średnie
			{elseif $p["nawodnienie_id"]==3}
			Średnie
			{elseif $p["nawodnienie_id"]==4}
			Średnie-duże
			{elseif $p["nawodnienie_id"]==5}
			Duże
			{/if}
			<br>
			<b>Rodzaj: </b>{if $p["rodzaj_id"]==1}
			Monstera
			{elseif $p["rodzaj_id"]==2} 
			Zielistka
			{elseif $p["rodzaj_id"]==3}
			Trójskrzyn
			{elseif $p["rodzaj_id"]==4}
			Difenbachia
			{elseif $p["rodzaj_id"]==5}
			Dracena
			{elseif $p["rodzaj_id"]==6}
			Epipremnum
			{elseif $p["rodzaj_id"]==7}
			Figowiec
			{elseif $p["rodzaj_id"]==8}
			Hoja
			{elseif $p["rodzaj_id"]==9}
			Peperomia
			{elseif $p["rodzaj_id"]==10}
			Pilea
			{elseif $p["rodzaj_id"]==11}
			Sansewieria
			{elseif $p["rodzaj_id"]==12}
			Zamiokulkas
			{/if}
			<br>
			<b>Rodzina: </b>{if $p["rodzaj_id"]==1}
			Obrazkowate
			{elseif $p["rodzaj_id"]==2} 
			Szparagowate
			{elseif $p["rodzaj_id"]==3}
			Wilczomleczowate
			{elseif $p["rodzaj_id"]==4}
			Obrazkowate
			{elseif $p["rodzaj_id"]==5}
			Szparagowate
			{elseif $p["rodzaj_id"]==6}
			Obrazkowate
			{elseif $p["rodzaj_id"]==7}
			Morwowate
			{elseif $p["rodzaj_id"]==8}
			Toinowate
			{elseif $p["rodzaj_id"]==9}
			Pieprzowate
			{elseif $p["rodzaj_id"]==10}
			Pokrzywowate
			{elseif $p["rodzaj_id"]==11}
			Szparagowate
			{elseif $p["rodzaj_id"]==12}
			Obrazkowate
			{/if}
			
			
			"><span class="overlay">  
			<h2> {$p["nazwa_naukowa"]}</h2><br><h2>({$p["nazwa_potoczna"]})</h2></span>
			

			<img src="{$conf->img}{$p["zdjecie"]}" alt="" class="img-responsive"></a>

			
	{/foreach}
	
	</div>
</div>

