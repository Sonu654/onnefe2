<div class="row">
    <div class="col-sm-3">
       <?php $this->view('Feeds'); ?>
    </div>
    <div class="col-sm-9" style="">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-6 text-center"><h3>Add News</h3></div>
                    <div class="col-sm-4"></div>
                </div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div id="errors" class="col-sm-8" style="color: red">
                     
                 </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="row">
                    <div class="col-sm-2 text-right"> 
                        <label for="news_name">Heading </label>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="text" name="heading" id="heading" class="form-control">
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 text-right"> 
                        <label for="news_content">Content</label>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <textarea type="text" name="cat" id="Content" rows="10" class="form-control"></textarea>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 text-right">
                        <label for="category">NatInt</label>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select class="form-control" id="nationaL">
                                <option></option>
                                <script>
                                          function get_NatIntOptn(NtIn) {
                                    for (i = 0; i < NtIn.length; i++) {
                                        document.write("<option value="+NtIn[i].natInt_id+">"
                                                + NtIn[i].natInt_Name + "</option>");
                                        }
                                    }
                                    NatiIntr =<?php echo $data['NatInt']; ?>;
                                    get_NatIntOptn(NatiIntr);
                            
                                 </script>
                                 
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2 text-right">
                        <label for="category">Category</label>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select class="form-control" id="categorY">
                                <option></option>
                                <script>
                                          function get_catOptn(categories) {
                                    for (i = 0; i < categories.length; i++) {
                                        document.write("<option value="+categories[i].category_id
                                                +">" + categories[i].category_name + "</option>");
                                        }
                                    }
                                    categories =<?php echo $data['category']; ?>;
                                    get_catOptn(categories);
                            
                                 </script>
                                
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-2 text-right">
                        <label for="ack">Acknowledgment</label>
                    </div>
                    <div class="col-sm-3 form-group">
                        <select class="form-control" id="acK" onchange="show();">
                            <option></option>
                            <script>
                                          function get_ackOptn(acks) {
                                    for (i = 0; i < acks.length; i++) {
                                        document.write("<option value="+acks[i].ack_id
                                                +">" + acks[i].ack_location + "</option>");
                                        }
                                    }
                                    acks =<?php echo $data['Ack']; ?>;
                                    get_ackOptn(acks);
                            
                                 </script>
                                 <option value="other">other</option> 
                        </select>
                    </div>
                    <script>  function show() {
                            if (document.getElementById('acK').value == 'other')
                                document.getElementById('newAck').style.display = 'block';
                            else
                                document.getElementById('newAck').style.display = 'none';

                        }
                    </script>
                    <div id="newAck" style="display: none">
                        <div class="col-sm-2 text-right">
                            <label for="newAck">From</label>
                        </div>
                        <div class="col-sm-3 form-group">
                            <input class="form-control" type="text" id="newAckLoc">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-sm-5"></div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary" data-toggle="tooltip" data-trigger="hover" data-title="hello" data-placement="right" id="addANews">Submit</button>
                    </div>
                    <div class="col-sm-5"></div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!--<div id="error">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="addCat">Add Category</button>
                </div>
-->