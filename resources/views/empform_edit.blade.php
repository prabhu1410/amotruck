   <!-- Start Add Modal -->
   <form action="{{ url('employee') }}" method="POST">

@csrf

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header bg-gradient-primary">
    <h5 class="modal-title" id="exampleModalLabel">Create Team Member</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>




<div class="modal-body">


                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">first name</label>
                                <input class="input--style-4" type="text" name="fname">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">last name</label>
                                <input class="input--style-4" type="text" name="lname">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Email</label>
                                <input class="input--style-4" type="email" name="email">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Phone Number</label>
                                <input class="input--style-4" type="number" name="phone">
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        
                            <div class="input-group">
                                <label class="label">Address</label>
                                <div class="input-group">
                                    <input class="input--style-4" type="text" name="address">
                                    
                                </div>
                            </div>
                    
                        
                    </div>

                    
                        
                    <div class="row row-space">
                        <label class="label">Role </label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="role">
                                <option disabled="disabled" selected="selected">Choose option</option>
                                <option>Staff</option>
                                <option>Manager</option>
                                <option>Booking Manager</option>
                                <option>Inventory Manager</option>
                                <option>Owner</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>

                

                    <div class="row row-space mt-4 mb-4">
                    <div class="col-2">
                    <label class="label">Type </label>
                        <div class="rs-select2 js-select-simple select--no-search ">
                            <select name="type">
                                <option disabled="disabled" selected="selected">Choose option</option>
                                <option>Full Time</option>
                                <option>Part Time</option>
                                <option>Subcontractor</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                        </div>
                        
                        

                        <div class="col-2">
                        <label class="label">Status </label>
                        <div class="rs-select2 js-select-simple select--no-search ">
                            <select name="status">
                                <option disabled="disabled" selected="selected">Choose option</option>
                                <option>Active</option>
                                <option>On Leave</option>
                                <option>Unavailable</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                        </div>
                    </div>

                






</div>
<div class="modal-footer bg-gray-400">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-gradient-primary">Save changes</button>
</div>

</form>

</div>
</div>
</div>




<!-- End Modal -->
