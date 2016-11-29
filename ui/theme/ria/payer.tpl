{include file="sections/header.tpl"}

<div class="row">
    <div class="widget-1 col-md-6 col-sm-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">{$_L['Add_Payer']}</h3>
            </div>
            <div class="panel-body">
                <form role="form" name="accadd" method="post" action="{$_url}settings/payer-post">
                    <div class="form-group">
                        <label for="name">{$_L['Name']}</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>




                    <button type="submit" class="btn btn-primary">{$_L['Submit']}</button>
                </form>
            </div>
        </div>
    </div> <!-- Widget-1 end-->
    <div class="widget-1 col-md-6 col-sm-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">{$_L['Manage_Payers']}</h3>
            </div>
            <div class="panel-body">
                <span id="resp">{$_L['drag_drop_edit']}</span>
                <ol class="rounded-list" id="sorder">


                    {foreach $d as $ds}
                        <li id='recordsArray_{$ds['id']}'><a href="{$_url}settings/payer-manage/{$ds['id']}">{$ds['name']}</a></li>
                    {/foreach}

                </ol>

            </div>
        </div>
    </div>
    <!-- Widget-2 end-->
</div> <!-- Row end-->


<!-- Row end-->


<!-- Row end-->

{include file="sections/footer.tpl"}
