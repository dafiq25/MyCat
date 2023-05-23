@extends('layouts.mainadmin')
@section('container')

                <!------ Include the above in your HEAD tag ---------->
                
                <div class="container emp-profile">
                    <form method="post">
                        <div class="row">
                            <div class="awa3">
                                    <div class="profile-awa" style="height: 220px">
                                        <div class="text-center">
                                            <img src="assets/pradmin.jpg" width="200px" height="200px" class="rounded-circle">
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
                                    <div class="awa4">
                                        <div class="col-md-2">
                                            <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                                        </div>
                                    </div>
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
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>User Id</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>oawayakan</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Name</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Zahwa Finti Azizah</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>zahwafa@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Phone</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>085103707934</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Profession</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Administrator</p>
                                                                <br>
                                                            </div>
                                                        </div>
                                            </div>
                                          
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </form>           
                        </div>
@endsection