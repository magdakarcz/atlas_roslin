{extends file="main.tpl"}

{block name=top}

<div class="col-md-7">
<form id="search-form" style="text-align: center; margin-top: 5px; " onsubmit="ajaxPostForm('search-form','{$conf->action_root}roslinaListPart','table'); return ;">
		<input type="text" placeholder="Nazwa naukowa" class="form-control" name="sf_nazwa_naukowa" value="{$searchForm->nazwa_naukowa}" /><br />
		<button type="submit" class="btn btn-primary btn-md">Szukaj</button>

</form>
</div>

{/block}

{block name=bottom}
<div style="text-align: right;" class="bottom-margin">
<a class="btn btn-primary btn-md" href="{$conf->action_root}roslinaNew">Dodaj nową roślinę</a>
</div>	

<div id="table">
{include file="roslinaListTable.tpl"}
</div>
</div>
{/block}
