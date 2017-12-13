<div class="col-lg-12>"
     <div class="col-lg-12">
        <div class="card">
            <div class="card-close">
                <div class="dropdown">
                    <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                </div>
            </div>
            <div class="card-header d-flex align-items-center">
                <h3 class="h4">Patients</h3>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <form>
                    <div class="form-group">
                        <label class="form-control-label">Name</label>
                        <input id="pname" type="text" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">       
                        <label class="form-control-label">Date of Birth</label>
                        <input id="pdob" type="date" placeholder="Date of birth" class="form-control">
                    </div>
                    <div class="form-group">       
                        <label class="form-control-label">Gender</label>
                        <select id="GENDER"  name="" class="form-control">
                            <option>Select Gender</option>
                        </select>
                    </div>
                    <div class="form-group">       
                        <label class="form-control-label">Type Of Service</label>
                        <select id="SERVICES"  name="services" class="form-control">
                            <option>Select Service</option>
                        </select
                    </div>

                    <div class="form-group">       
                        <label class="form-control-label">General Observation</label>
                        <textarea id="go"  placeholder="General Observation" class="form-control">
                        
                        </textarea>
                    </div>
                    <div class="form-group">       
                        <input type="button"  id="SAVE_PATIENT" value="Add" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="card">
            <div class="card-close">
                <div class="dropdown">
                    <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                    <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                </div>
            </div>
            <div class="card-header d-flex align-items-center">
                <h3 class="h4">Patients List</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover " style="width: 600px !important;" id="PATIENTSTABLE">
                    <thead>
                        <th>Name</th>
                        <th>Date Of Birth</th>
                        <th>Gender</th>
                        <th>Type Of Service</th>
                        <th>General Observation</th>
                    </thead>
                    <?php foreach ($patients as $p){?>
                    <tr>
                        <td><?php echo $p->name;?></td>
                        <td><?php echo $p->gender;?></td>
                        <td><?php echo $p->date_of_birth;?></td>
                        <td><?php echo $p->service;?></td>
                        <td><?php echo $p->general_observation;?></td>
                    </tr>
                    <?php }?>
                    <tbody>
                       
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
