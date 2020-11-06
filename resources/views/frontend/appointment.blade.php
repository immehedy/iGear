<!-- Call Action Section -->
{{--<section class="small-section bg-dark">--}}
{{--    <div class="container relative">--}}
{{--        <div class="align-center">--}}

{{--            <h3 class="banner-heading font-alt">Want to discuss your new project?</h3>--}}
{{--            <div>--}}
{{--                <a href="" data-toggle="modal" data-target="#modalContactForm" class="btn btn-mod btn-w btn-medium btn-round">Take Appointment</a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}
<!-- End Call Action Section -->

<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->
<!-- Section -->
<section class="page-section bg-dark">
    <div class="container relative">

        <h2 class="section-title font-alt mb-70 mb-sm-40">
            Service Appointment
        </h2>

        <!-- Row -->
        <div class="row">

            <!-- Col -->

            <div class="col-sm-8 col-sm-offset-2">

                <!-- Nav Tabs -->
                <div class="align-center mb-40 mb-xs-30">
                    <ul class="nav nav-tabs tpl-minimal-tabs animate">
                        <li class="active">
                            <a href="#mini-one" data-toggle="tab">Information</a>
                        </li>
                        <li>
                            <a href="#mini-two" data-toggle="tab">Take Appointment</a>
                        </li>
                    </ul>
                </div>
                <!-- End Nav Tabs -->

                <!-- Tab panes -->
                <div class="tab-content tpl-minimal-tabs-cont align-center section-text">
                    <div class="tab-pane fade in active" id="mini-one">
                        <div class="align-center">
{{--                            <h3 class="banner-heading font-alt">Want to discuss your new project?</h3>--}}
                            <div>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mini-two">
                        <div class="align-center">
                         <!-- Contact Form -->
                         <div class="row">
                           <div class="col-md-8 col-md-offset-2">
                               <div class="clearfix">
                                 <form class=" form contact-form" id="contact_form" method="post" action="{{route('assignments.store')}}" enctype="multipart/form-data">
                                 @csrf
                                     <!-- Name -->
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Name" pattern=".{3,100}" required>
                                     </div>
                                     <!-- Email -->
                                     <div class="form-group">
                                         <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required>
                                     </div>
                                     <!-- Number -->
                                     <div class="form-group">
                                         <input type="text" name="phone" id="phone" class="input-md round form-control" placeholder="Phone Number"  required>
                                     </div>
                                     <!-- Address -->
                                     <div class="form-group">
                                         <input type="text" name="address" id="address" class="input-md round form-control" style="height: 75px;" placeholder="Address" required>
                                     </div>
                                     <!-- Device -->
                                     <div class="form-group">
                                         <select class="input-md round form-control" name="device" required>
                                                 <option value="device">Device Category</option>
                                                 <option value="iPhone">iPhone</option>
                                                 <option value="iPad">iPad</option>
                                                 <option value="Apple Watch">Apple Watch</option>
                                                 <option value="Air Pod">Air Pod</option>
                                         </select>
                                     </div>
                                     <!-- Service -->
                                     <div class="form-group">
                                         <select class="input-md round form-control" name="service"  required>
                                             <option value="service">Service Category</option>
                                             <option value="Display Issue">Display Issue</option>
                                             <option value="Firmware Issue">Firmware Issue</option>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <input type="date" name="date" id="date" class="input-md round form-control" placeholder="Desired Date" required>
                                     </div>
                                     <!-- Send Button -->
                                     <div class="align-right pt-10">
                                         <button type="submit" class="submit_btn btn btn-mod btn-medium btn-round" >Submit Message</button>
                                     </div>

                                 </form>
                                </div>
                            </div>
                            <!-- End Contact Form -->
                        </div>
                    </div>

                </div>

            </div>

            <!-- End Col -->

        </div>
        <!-- End Row -->

    </div>
    </div>
</section>
<!-- End Section -->
