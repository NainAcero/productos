
{include file="sections/header.tpl"}
<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{$_L['Manage_Accounts']}</h5>

            </div>
            <div class="ibox-content">

                <table class="table table-striped table-bordered">
                    <th>{$_L['Account']}</th>
                    <th>{$_L['Description']}</th>
                    <th>{$_L['Manage']}</th>
                    {foreach $d as $ds}
                        <tr>
                            <td>{$ds['account']}</td>
                            <td>{$ds['description']}</td>
                            <td>
                                <a href="{$_url}accounts/edit/{$ds['id']}" class="btn"><i class="fa fa-pencil"></i></a>

                                {if $ds['ib_url'] neq ''}
                                    <a href="{$ds['ib_url']}" target="_blank" class="btn"><i class="fa fa-globe"></i></a>
                                {/if}

                                <a href="{$_url}accounts/delete/{$ds['id']}" id="did{$ds['id']}" class="cdelete btn"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    {/foreach}


                </table>

            </div>
        </div>



    </div>



</div>


<input type="hidden" id="_lan_are_you_sure" value="{$_L['are_you_sure']}">

{include file="sections/footer.tpl"}
