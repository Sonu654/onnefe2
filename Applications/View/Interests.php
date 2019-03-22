<div class="row">
    <div class="col-sm-3">
       <?php $this->view('Feeds'); ?>
    </div>
    <div class="col-sm-9">
        <div class="row"><?php //print_r($data); ?>
            <div class="col-sm-2"></div>
            <div class="col-sm-6"><div class="table-responsive"> 
                    <table id="res_cat" class="table">
                    <tr>
                        <th> Categories </th>
                        <th> Status </th>
                    </tr>
                    <script>
                        interest =<?php echo $data['interest'];
        ?>;
                        for (x in interest) {
                            val=(interest[x].isActive=='1')?'Block':'Active';
                            document.write('<tr> <td>' + interest[x].category_name + '</td>'+
                                   '<td><input type="hidden" name="interest_id" id="intID" value='+interest[x].category_id+'>\n\
                                    <button class="btn btn-primary" id="btnABInt">'+ val +'</button></td></tr>');
                        }
                    </script>

                </table>
            </div>
</div>
            <div class="col-sm-4"></div>
                    </div>
    </div>
</div>
