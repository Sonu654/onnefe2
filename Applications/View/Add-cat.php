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
                    <input type="text" name="cat" id="newCat" class="form-control">
                </div>
                <div id="error" style="color: green">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="addCat">Add Category</button>
                </div>

            </div>
                <div class="col-sm-4"></div>

        </div>
            <div class="col-sm-4">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Category id</th>
                                <th>Category Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <script>
                            function get_Category(Category) {
                                for (i = 0; i < Category.length; i++) {
                                    if(Category[i].isActive==true)
                                        val="Block";
                                    else
                                        val="Active";
                                    document.write("<tr><td id='catId'>" + Category[i].category_id + "</td><td id='catName'>" + Category[i].category_name + "</td><td><button class='btn btn-primary' id='btnUpCat' data-toggle='modal' data-target='#editCat'>Edit</button></td></tr>");
                                }
                            }
                            Category =<?php echo $data['category']; ?>;
                            get_Category(Category);

                        </script>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="editCat" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Category</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
              <label for="heading">Title</label>
              <input type="text" readonly="readonly" class="form-control" id="txtUpCatId" name="newsid"><br/>
              <input type="text" name="category" id="txtUpCat" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
          <button class="btn btn-default" id="update_category">Update</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>