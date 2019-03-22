<div class="row">
    <div class="col-sm-3">
        <?php $this->view('Feeds'); ?>
    </div>
    <div class="col-sm-9">
        <p id="respAddNG"></p>
        <div class="form-group">
            <label for="ngTopic" style="font-size: 200%">Topic Of News Group:</label>
            <textarea class="form-control" rows="10" id="content" ></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" name="date" id="NGDate">
        </div>
        <div class="form-group">
                        <button type="submit" class="btn btn-success" id="addNG">ADD</button>
        </div>
    </div>
</div>
