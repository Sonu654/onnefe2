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
                                <th>News id</th>
                                <th>Heading</th>
                                <th>isActive</th>
                            </tr>
                        </thead>
                        <tbody>
                        <script>
                            function get_News(News) {
                                for (i = 0; i < News.length; i++) {
                                    document.write("<tr><td id='updateid'>" + News[i].news_id + "</td><td>" + News[i].news_heading + "</td><td><button class='btn btn-primary' data-toggle='modal' data-target='#updatedNews' id='btnUpdate'>Update</button></td></tr>");
                                }
                            }
                            News =<?php echo $data['News']; ?>;
                            get_News(News);

                        </script>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-1"></div>

        </div> 
    </div>
</div>

<!-- Modal -->
<div id="updatedNews" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update News</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
              <label for="heading">Heading</label>
              <input type="hidden" id="txtupdateid" name="newsid">
              <input type="text" name="newsHeading" id="txtUpheading" class="form-control">
          </div>
          <div class="form-group">
              <label for="content">Content</label>
              <textarea class="form-control" id="txtUpContent" rows="15"></textarea>
          </div>
      </div>
      <div class="modal-footer">
          <button class="btn btn-default" id="update_news_content">Update</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>