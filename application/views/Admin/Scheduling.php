<div class="container">
	<div class="row" style="margin-left:25%;margin-top:2%;">
		<div class="col-lg-3" style="width:70%">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" id="search">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
             </button>
             </span>
             </div><!-- /input-group -->
        </div>
	</div>
  
    <div class="row">
        <div class="col-sm-12">
        <!-- <?php if(isset($fullname)) echo $fullname?> --><br/>
            <legend style="margin-top:20px"><h3><a href="">Kristy Mae Almuete</a></h3></legend>
        </div>
        <!-- panel preview -->
        <div class="col-sm-5">
            <h4>Scheduling: </h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Day</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="status_day" name="status_day">
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="All">All</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Time</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="status" name="status">
                                <option value="6am - 2pm">6am - 2pm</option>
                                <option value="2pm - 10pm">2pm - 10pm</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="button" id="temporary_submit" class="btn btn-default preview-add-button">
                                <span class="glyphicon glyphicon-plus"></span> Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>            
        </div> <!-- / panel preview -->
        <div class="col-sm-7">
            <h4>Preview:</h4>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table preview-table" id="preview-data">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody></tbody> <!-- preview content goes here-->
                        </table>
                    </div>                            
                </div>
            </div>
            <div class="row text-right">
                <div class="col-xs-12">
                    <h4>Total Hours per week: <strong><span class="preview-total"></span></strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" id="submit_all" class="btn btn-primary btn-block">Submit all and finish</button>
                </div>                
            </div>
        </div>
</div>