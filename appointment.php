<?php
require_once("include/header.php")
?>

<div class="col-md-12 my-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="#" method="POST" id="addPatient" enctype="multipart/form-data">
                    <input type="hidden" name="" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <h6
                                style="color:#2e3470;text-transform: uppercase;font-weight: 600;text-align: center;border-bottom: 1px solid #2e3470;display: inline-block;margin-bottom:30px;">
                                Make An Appointment</h6>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Patient Name <span class="text-danger"> *</span> </label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter Patient's name" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Phone No <span class="text-danger"> *</span> </label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter phone No" required>
                                    </div>
                                </div>

                      

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender">Please Select Gender<span class="text-danger">
                                                *</span></label>
                                        <select name="" class="form-control" id="" required>
                                            <option value="">Select Gender</option>
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                            <option value="">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender">Please Select Visit Type
                                               </label>
                                        <select name="" class="form-control" id="" required>
                                            <option value="">Visit Type</option>
                                            <option value="">New</option>
                                            <option value="">Check-up</option>
                                            <option value="">Consultation</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Date of Birth <span class="text-danger"> *</span></label>
                                        <input type="date" name="" class="form-control" id="" placeholder="Enter Age" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Date of Appointment<span class="text-danger"> *</span></label>
                                        <input type="date" name="" class="form-control" id="" placeholder="" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="text" name="" class="form-control" id="" placeholder="Enter Email " required>
                                    </div>
                                </div>

                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Address</label>
                                        <input type="text" name="" class="form-control" id="" placeholder="Enter Patient Address " required>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12 text-center mb-4">
                    <button type="submit" class="btn btn-primary " id="submit">Confirm Booking</button>
                    <!-- <button type="#" class="btn btn-danger " id="cancel">Cancel</button> -->
                </div>
            </div>
        </div>

        </form>
    </div>
</div>
</div>


<?php
require_once("include/footer.php")
?>