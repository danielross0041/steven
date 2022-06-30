@extends('website.layouts.auth')
@section('title')
<title>{{__('content.profile')}} |  {{__('content.steven')}}</title>
@endsection
@section('content')
 <div class="container">
     <div class="row align-items-center">
         
  <center>    
<div class="col-lg-6 col-md-6" style="padding: 20px;">
                        <div class="contact-form">
                            
                            <form id="contactForm" method="post" enctype="multipart/form-data" action="{{ route('profile_update') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" required="" data-error="{{__('content.nameInputError')}}" placeholder="{{__('content.namePlaceholder')}}" value="{{ $user->name }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="age" id="age" required="" data-error="{{__('content.ageInputError')}}" placeholder="{{__('content.agePlaceholder')}}" value="{{ $user->age }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="language" id="language" required="" data-error="{{__('content.languageInputError')}}" placeholder="{{__('content.languagePlaceholder')}}" value="{{ $user->language }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="nick" id="nick" required="" data-error="{{__('content.nickInputError')}}" placeholder="{{__('content.nickPlaceholder')}}" value="{{ $user->nick }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    

                                    <!-- <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" required="" data-error="Please create your password" placeholder="Create your password">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="contact_no" id="contact_no" required="" data-error="{{__('content.contactInfoInputError')}}" placeholder="{{__('content.contactInfoPlaceholder')}}" value="{{ $user->contact_no }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="address" id="address" required="" data-error="{{__('content.addressInputError')}}" placeholder="{{__('content.addressPlaceholder')}}" value="{{ $user->address }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="gender"  id="gender">
                                                <option value="MALE" {{ $user->gender == "MALE" ? "selected":""}}>Male</option>
                                                <option value="FEMALE" {{ $user->gender == "FEMALE" ? "selected":""}}>Female</option>
                                                <option value="OTHER" {{ $user->gender == "OTHER" ? "selected":""}}>Other</option>
                                             </select>   
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image" id="image" >
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    


                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn" style="pointer-events: all; cursor: pointer;">{{__('content.update')}}</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </center>
                    </div>
 </div>
@endsection