<div class="row">
    <div class="col-sm-3">
       <?php $this->view('Feeds'); ?>
    </div>
    <div class="col-sm-9" style="">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Category id</th>
                                <th>Category Name</th>
                                <th>isActive</th>
                            </tr>
                        </thead>
                        <tbody>
                        <script>
                            function get_Category(Category) {
                                for (i = 0; i < Category.length; i++) {
                                    if (Category[i].isActive == true)
                                        val = "Block";
                                    else
                                        val = "Active";
                                    document.write('<tr><td>' + Category[i].category_id + "</td><td>" + Category[i].category_name +
                                            '<td><input type="hidden" name="cat_id" id="catID" value=' + Category[i].category_id + '>\n\
                                <button class="btn btn-primary" id="btnCatBA">' + val + '</button></td></tr>');
                                }
                            }
                            Category =<?php echo $data['Category']; ?>;
                            get_Category(Category);

                        </script>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-1"></div>

        </div> 
    </div>
</div>