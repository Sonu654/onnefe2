<div class="row">
    <div class="col-sm-3">
        <?php $this->view('Feeds'); ?>
    </div>
    <div class="col-sm-9" style="">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6"><h4>Add New Category</h4></div>
                    <div class="col-sm-3"></div>
                </div>
                <div class="col-sm-4 text-right"> 
                    <label for="category_name">Category Name: </label>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" id="dropMenuAddIns">Select
                                <span class="caret" style="float:right; margin-top:8px;"></span></button>
                            <ul class="dropdown-menu menu-item" id="catList">
                                <?php
                                $cat = json_decode($data['category'], true);
                                for ($i = 0; $i < count($cat); $i++) {
                                    ?><li>  
                                        <div class="checkbox"  id="newsCatVal">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="optCat" name="inst[]" class="checkbox <?php echo $cat[$i]['status'] == 1 ? 'disabled' : ''; ?>" value="<?php echo $cat[$i]['category_id']; ?>" <?php echo $cat[$i]['status'] == 1 ? "checked='checked' readonly='readonly'" : ''; ?>><?php echo $cat[$i]['category_name']; ?>
                                            </label>
                                        </div> 
                                    </li> <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div id = "error_" style = "color: green">
                    </div>
                    <div class = "form-group">
                        <button class = "btn btn-primary" id = "addInst">Add Category</button>
                    </div>

                </div>
                <div class = "col-sm-4"></div>

            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</div>
