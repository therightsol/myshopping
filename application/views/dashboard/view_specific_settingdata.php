<div id="page-wrapper">

    <form method="post" action="<?php echo $root; ?>dashboard/update_specificProduct" class="form-horizontal">
        <fieldset>

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">KEY</label>
                <div class="col-md-6">
                    <input id="p_id" name="p_id" type="text" value=<?php echo $key; ?> class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Value</label>
                <div class="col-md-6">
                    <input id="valye" name="value" type="text" value=<?php echo $value; ?> class="form-control input-md">

                </div>
            </div>
        </fieldset>
    </form>
</div>
