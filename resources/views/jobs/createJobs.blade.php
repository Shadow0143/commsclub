@extends('layouts.frontend.app')

@section('title')
<title>Create Jobs</title>
@endsection
@section('css')

@endsection

@section('content')
<section class="banner_sec55 innerbanner456">
    <div class="container">
        <h1>Add Jobs</h1>
        <ul class="breadcrumb55">
            <li>
                <a href="{{route('jobs')}}">Jobs</a>
            </li>
            <li>
                <span>Job's Registration</span>
            </li>
        </ul>
    </div>
</section>

<section class="eve_reg_sect456 paddy">
    <div class="container">
        <h2>job's Registration</h2>
        <p>Please Add your job by filling the form below, specify the expected salary and last apply date.</p>
        <form action="{{route('storeJobs')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="job_id" @if(!empty($jobs)) value="{{$jobs->id}}" @endif>

            <div class="eventformhld">
                <div class="evreg66">
                    <h3>Company Details</h3>
                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Company Name <span class="text-danger">*</span></label>
                                <input type="text" name="company_name" required @if(!empty($jobs))
                                    value="{{$jobs->company_name}}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>company Email </label>
                                <input type="email" name="company_email" @if(!empty($jobs))
                                    value="{{$jobs->company_email}}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                    </div>

                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Company Logo <span class="text-danger">*</span></label>
                                <input type="file" name="company_logo" @if(empty($jobs)) required @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Company URL </label>
                                <input type="url" name="company_url" @if(!empty($jobs)) value="{{$jobs->company_url}}"
                                    @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                    </div>
                    <div class="fieldrow row">

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Company Contact </label>
                                <i class="fa fa-phone date456" aria-hidden="true"></i>
                                <input name="company_contact" type="number" @if(!empty($jobs))
                                    value="{{$jobs->company_contact}}" @endif>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="evreg66">
                    <h3>Address</h3>
                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Street Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" required @if(!empty($jobs)) value="{{$jobs->address}}"
                                    @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>City <span class="text-danger">*</span></label>
                                <input type="text" name="city" reqired @if(!empty($jobs)) value="{{$jobs->city}}"
                                    @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>

                    </div>
                    <div class="fieldrow row">

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>State / Province <span class="text-danger">*</span></label>
                                <input type="text" name="state" required @if(!empty($jobs)) value="{{$jobs->state}}"
                                    @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Postal / Zip Code <span class="text-danger">*</span></label>
                                <input type="text" name="pincode" required @if(!empty($jobs))
                                    value="{{$jobs->zip_code}}" @endif maxlength="6">
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="evreg66">
                    <h3>Job Details</h3>
                    <div class="fieldrow row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Job Title <span class="text-danger">*</span></label>
                                <input type="text" name="job_title" required @if(!empty($jobs))
                                    value="{!!$jobs->job_title !!}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Job type <span class="text-danger">*</span></label>
                                <input type="text" name="job_type" required @if(!empty($jobs))
                                    value="{!!$jobs->job_type !!}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Min Salary <span class="text-danger">*</span></label>
                                <input type="number" name="min_salary" required @if(!empty($jobs))
                                    value="{!!$jobs->min_salary !!}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Max Salary <span class="text-danger">*</span></label>
                                <input type="number" name="max_salary" required @if(!empty($jobs))
                                    value="{!!$jobs->max_salary !!}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Vacancy </label>
                                <input type="number" name="vacancy" @if(!empty($jobs)) value="{!!$jobs->vacancy !!}"
                                    @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Required Candidate Qualification</label>
                                <input type="text" name="candidate_qualification" @if(!empty($jobs))
                                    value="{!!$jobs->candidate_qualificaion !!}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="inputfield55">
                                <label>Last Date of Applying</label>
                                <i class="fa fa-calendar date456"></i>
                                <input data-date-format="yyyy-mm-dd" class="datepicker" name="last_date_of_apply"
                                    @if(!empty($jobs)) value="{{$jobs->last_date_of_apply}}" @endif>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>

                    </div>
                    <div class="fieldrow row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="inputfield55">
                                <label>Jobs Description</label>
                                <textarea name="description" id="description">  @if(!empty($jobs)) {!! $jobs->job_details!!}
                                    @endif </textarea>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btnbox55">
                    <button type="submit" class="btndflt58" tabindex="0">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
</section>


@endsection

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
<script type="text/javascript">
    ClassicEditor.create( document.querySelector( '#description' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );

    $('.datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('.datepicker').datepicker("setDate", new Date());
</script>



@endsection