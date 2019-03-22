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
                                    if(News[i].isActive==true)
                                        val="Block";
                                    else
                                        val="Active";
                                    document.write('<tr><td>' + News[i].news_id + '</td><td>' + News[i].news_heading + '</td>\n\
                                    <td><td><input type="hidden" name="newS_id" id="newsID" value='+News[i].news_id+'>\n\
                                    <button class="btn btn-primary" id="btnNewsBA">'+val+'</button></td></tr>');
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