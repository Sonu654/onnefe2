<div class="row">
    <div class="col-sm-3">
        <div class="row">
            <?php if ($data['status'] == 'superAdmin') { ?>
                <div class="col-sm-6">
                    <div class="row">
                        <a href="<?php echo baseurl; ?>/superAdmin/userControl"><button type="button" class="btn btn-default btnfrgt" id="user">User/Admin Control</button></a>
                    </div>

                    <br/>
                    <br/>

                </div>
            <?php } ?>
        </div>
        <div class="row">
            <?php $this->view('Feeds'); ?>
        </div>

    </div>
    <div class="col-sm-9">
        <div class="row">
            <div id="CategorigedNews"style=" height:500;border: 0px black solid; overflow: scroll;overflow-x: hidden">

                <script>
                    News =<?php echo $data['news']; ?>;
                    for (i = 0; i < News.length; i++) {
                        document.write("<div class='row' style='border-bottom: 2px dashed gray'>\n\
                 <h3 style='color: blue'>" + News[i].news_heading + "</h3><br/><h5>" + News[i].news_content + "</h5>\n\
                                    </div>");

                    }
                </script>
            </div>
        </div>
        <div class="response"></div>
    </div>
</div>
