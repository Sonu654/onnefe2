
<div class="row">
    <div class="col-sm-3">
      <?php $this->view('Feeds'); ?>
    </div>
    <div class="col-sm-9">
        <div class="row">
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text-center text-capitalize">
                        <lable for="newsGroup"><h1> News Group</h1></lable>
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <lable for="start"><h4>Start  : <?php echo $data['activeNG']['i_time']; ?></h4></lable>
                            </div>
                            <div class="col-sm-6 text-right">
                                <lable for="end"><h4>To : <?php echo $data['activeNG']['l_time']; ?></h4></lable>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="row" style="border: 1px dashed blue;padding: 5px 15px; border-radius: 15px; min-height: 200px;">
                    <h2>
                        <?php echo $data['activeNG']['ng_title']; ?>
                    </h2>

                </div>
                <div class="row">
                    <label for="cmnt" style="font-family: initial;font-size: 23px;color: black">Comments  </label>
                </div>
                <div class="form-group">
                    <label for="name" id="cUser"><?php echo $data['uName']; ?></label>
                    <textarea class="form-control" id="userCmt" rows="2"></textarea>
                    <button class="btn btn-primary disabled" style="margin-top: 5px;" id="cmttodb">Comment</button>
                </div>
                <div id="c_cmtDiv">
                    <div class="row" style="border-bottom: 1px dashed blue;">
                        <div class="col-sm-8">
                            <label for="userName" id='Fcmtuser' style="font-family: serif;font-size: 20px;color: darkblue"><?php echo $data['cmt'][0]['user_first_name'] . ' ' . $data['cmt'][0]['user_mid_name'] . ' ' . $data['cmt'][0]['user_last_name']; ?></label>
                        </div> 
                        <div class="col-sm-4 text-right" id='FcmtTime'><?php echo $data['cmt'][0]['c_time']; ?></div>
                    </div>                           
                    <div class="row"  style="color: #3300cc; padding-left: 30px; padding-top: 10px" >
                        <p id="Fcmttxt"> <?php echo $data['cmt'][0]['c_content']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <p style="font-size:10px; cursor: pointer" id="nxtprecmtbtn">Show Previous Comments</p>
                    <div id="precmtdiv" style="display: none; border-bottom: 1px dashed blue;">
                        <div id="prev">
                            <?php
                            $cmt = $data['cmt'];
                            for ($i = 1; $i < count($cmt); $i++) {
                                ?>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label for="userName" style="font-family: serif;"><?php echo $cmt[$i]['user_first_name'] . ' ' . $cmt[$i]['user_mid_name'] . ' ' . $cmt[$i]['user_last_name']; ?></label>
                                    </div> 
                                    <div class="col-sm-4 text-right"><?php echo $cmt[$i]['c_time']; ?></div>
                                </div>                           
                                <div class="row" style="color: #3300cc; padding-left: 30px; padding-top: 10px" >
                                    <p> <?php echo $cmt[$i]['c_content']; ?></p>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1" style="">
                <div class="btn-group-vertical" style="">
                    <button type="button" class="btn btn-success disabled">Recent</button> 

                    <?php
                    $i = 0;
                    $recent = $data['recent'];
                    for ($i = 0; $i < count($recent); $i++)
                        foreach ($recent[$i] as $key => $value) {
                            $value = split(' ', $value);
                            ?>
                            <button type="button" class="btn btn-success" id="btnModelRecentNG" data-toggle='modal' data-target='#recentNG'><?php echo $value[0]; ?></button> 
                        <?php }
                    ?>
                </div>
            </div>
        </div>

    </div>

</div>


<!-- Modal -->
<div id="recentNG" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">RECENT</h4>
            </div>
            <div class="modal-body">
                <label for="heading">Title</label>
                <h3 id="RecentNGTitle"></h3>
                <div id="cmtSection"></div>
            </div>
            <div class="modal-footer">
               
            </div>
        </div>

    </div>
</div>
