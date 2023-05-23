@extends('layouts.mainuser')
@section('container')

                <!------ Include the above in your HEAD tag ---------->

                <div class="container emp-profile">
                    <form method="post">
                        <div class="row">
                            <div class="awa3">
                                    <div class="profile-awa" style="height: 220px">
                                        <div class="text-center">
                                            <img src="assets/profile.jpg" width="200px" height="200px" class="rounded-circle">
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile-head">
                                    </ul>
                                </div>
                            </div>
                                    <div class="col-md-6">
                                        <div class="profile-head">
                                        </div>
                                    </div>
                                    <!-- <div class="awa4"> -->
                                        <!-- <div class="col-md-2">
                                            <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                                        </div> -->
                                    <!-- </div> -->
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-work">

                                        </div>
                                    </div>
                                </div>
                                    <div class="awa2">
                                    <div class="col-md-8">
                                        <div class="tab-content profile-tab" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <!-- <div class="row">
                                                            <div class="col-md-6">
                                                                <label>User Id</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>amecii</p>
                                                            </div>
                                                        </div> -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Name</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>: {{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>: {{Auth::user()->email}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Phone</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>: {{Auth::user()->notelp}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Alamat</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>: {{Auth::user()->alamat}}</p>
                                                            </div>
                                                        </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Experience</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Expert</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Hourly Rate</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>10$/hr</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Total Projects</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>230</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>English Level</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Expert</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Availability</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>6 months</p>
                                                            </div>
                                                        </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Your Bio</label><br/>
                                                        <p>Your detail description</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>

                <!-- Footer-->

    @endsection
