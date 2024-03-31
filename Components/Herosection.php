<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1><span style="color: #FFD700;">ROYAL TRANFERS</span></h1>
        <h5><span>UK AIRPORT TRANSFERS</span></h5>
        <h2>Get multiple options to choose your car type</h2>
        <div class="d-flex mt-10">
            <div class="container bg-black-50 item-center p-3">
                <h1>Book Your Ride</h1>
                <div class="row ">
                    <!-- Pick-Up Location Select Menu -->
                    <div class="col">
                        <select class="form-select form-control" id="pickupLocation" >
                            <option selected>Pick-Up Location</option>
                            <option value="1">Location 1</option>
                            <option value="2">Location 2</option>
                            <option value="3">Location 3</option>
                        </select>
                    </div>

                    <!-- Dropoff Location Select Menu -->
                    <div class="col">
                        <select class="form-select form-control" id="dropoffLocation">
                            <option selected>Dropoff Location</option>
                            <option value="1">Location 1</option>
                            <option value="2">Location 2</option>
                            <option value="3">Location 3</option>
                        </select>
                    </div>

                    <!-- Datepicker 1 -->
                    <div class="col">
                        <input id="datepicker" width="276" class="form-control" placeholder="Start Date"/>
                    </div>

                    <!-- Datepicker 2 -->
                    <div class="col">
                        <input id="datepicker1" width="276" class="form-control" placeholder="End Date" />
                    </div>

                    <!-- Book Now Button -->
                    <div class="col">
                        <button class="btn btn-primary form-control">Book Now</button>
                    </div>
                </div>

                <!-- Initialize Datepickers with Bootstrap style (Assuming Gijgo Datepicker is used) -->
                <script>
                    $('#datepicker').datepicker({
                        uiLibrary: 'bootstrap5'
                    });
                    $('#datepicker1').datepicker({
                        uiLibrary: 'bootstrap5'
                    });
                </script>


            </div>
        </div>
</section>
<!-- End Hero -->


