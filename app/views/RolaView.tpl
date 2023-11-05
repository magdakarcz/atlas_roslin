{extends file="main.tpl"}

{block name=top}


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
					{foreach $uzytkownik as $u}
					
					{strip}
	<tr>
					
							<td>{$u["id_uzytkownik"]}</td>
							<td>{$u["login"]}</td>
							
			<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}rolaEdit/{$u['id_uzytkownik']}">Nadaj moderadora</a>
			&nbsp;
		{*	<a class="button-small pure-button button-warning"
			  onclick="confirmLink('{$conf->action_url}roslinaDelete/{$p['id_roslina']}','Czy na pewno usunąć rekord ?')">Usuń</a>
		 *}</td>
					</tr>
					{/strip}
					{/foreach}
					
						
						</tbody>
</table>
						</td>

	</div>
</div>

{/block}