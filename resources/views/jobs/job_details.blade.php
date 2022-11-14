@extends('layouts.frontend.app')

@section('title')
<title>Jobs Details</title>
@endsection
@section('css')
<style>
    #companyname {
        font-size: 35px;
    }

    #work_as {
        background-color: #ececec;
        color: black;
    }

    .experinceworker {
        display: none;
    }
</style>
@endsection

@section('content')

<section class="banner_sec55 innerbanner456">
    <div class="container">
        <ul class="breadcrumb55">
            <li>
                <a href="{{route('welcome')}}">Home</a>
            </li>
            <li>
                <a href="{{route('jobs')}}">Jobs</a>
            </li>
            <li>
                <span>details</span>
            </li>
        </ul>
    </div>
</section>

<section class="jobs_section15 paddy">
    <div class="container">
        <div class="row">

            <div class="col-6">
                <figure>
                    <img src="{{asset('companylogos')}}/{{$jobdetails->company_logo}}" alt="company-logo">
                </figure>
            </div>

            <div class="col-6 ">

                <h1><i class="fa fa-building text-danger" aria-hidden="true"></i> &nbsp; <span
                        id="companyname">{{$jobdetails->company_name}}</span>
                </h1>
                <p><i class="fa fa-envelope text-danger" aria-hidden="true"></i> &nbsp; {{$jobdetails->company_email}}
                </p>
                <p><i class="fa fa-phone text-danger" aria-hidden="true"></i> &nbsp; {{$jobdetails->company_contact}}
                </p>
                <p><i class="fa fa-globe text-danger" aria-hidden="true"></i> &nbsp; <span>You can visit our site :
                    </span>{{$jobdetails->company_url}}</p>
                <hr>
                <div class="jobinfo54">
                    <span>{{$jobdetails->job_type}}</span>
                    <h2>{{$jobdetails->job_title}}</h2>
                    <p><img src="{{asset('assets/images/job/loc45.png')}}" alt="location"> &nbsp; Address :
                        {{$jobdetails->city}}, {{$jobdetails->state}}, {{$jobdetails->address}} :
                        {{$jobdetails->zip_code}}
                    </p>
                    <p>
                        <img src="{{asset('assets/images/job/dollr545.png')}}" alt="dollar"> &nbsp; Salary :
                        ${{$jobdetails->min_salary}} - ${{$jobdetails->max_salary}}
                    </p>
                    <p>
                        <i class="fa fa-briefcase text-danger" aria-hidden="true"></i> &nbsp; Vacancy :
                        {{$jobdetails->vacancy}}
                    </p>
                    <p>
                        <i class="fa fa-graduation-cap text-danger" aria-hidden="true"></i> &nbsp; Required
                        Qualification :
                        {{$jobdetails->candidate_qualificaion}}
                    </p>
                    <p>
                        <i class="fa fa-calendar text-danger" aria-hidden="true"></i> &nbsp; Last day of applying :
                        {{date('d M,
                        Y',strtotime($jobdetails->last_date_of_apply))}}
                    </p>
                </div>
            </div>
            <div class="col-12">
                {!! $jobdetails->job_details !!}
            </div>
            <div class="col-6 mt-5">
                <p>
                    Posted By : {{$jobdetails->post_by}}
                </p>
                <p>
                    Posted on : {{$jobdetails->created_at->diffForHumans();}}
                </p>
            </div>
            <div class="col-6 mt-5">
                @guest
                <a href="javaScript:void(0);" class="btndflt58" tabindex="0" data-toggle="modal"
                    data-target="#joinmodal">Apply Now</a>
                @else
                <a href="javaScript:void(0);" class="btndflt58" tabindex="0" data-toggle="modal"
                    data-target="#applyjobmodal">Apply Now</a>
                @endguest
                <a href="{{route('jobs')}}" class="btndflt58" tabindex="0">Back to job
                    search</a>
            </div>
        </div>

    </div>
</section>

<div class="modal fade" id="applyjobmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered popcontainer" role="document">
        <div class="modal-content popups45">
            <div class="modal-header">
                <div class="logo">
                    <img src="{{asset('companylogos')}}/{{$jobdetails->company_logo}}" alt="company-logo" width="150px">
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('storeApplicant')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="company_id" id="company_id" value="{{$jobdetails->id}}">
                    <div class="popbody458">
                        <div class="fieldrow">
                            <div class="inputfield55">
                                <label> Upload Resume</label>
                                <input type="file" name="resume" required accept=".pdf">
                                <!-- <span class="error55"></span> -->
                            </div>
                            <div class="inputfield55">
                                <label> Candidate Name</label>
                                <input type="text" name="candidate_name" required>
                                <!-- <span class="error55"></span> -->
                            </div>
                            <div class="inputfield55">
                                <label> Candidate Email</label>
                                <input type="email" name="candidate_email" required>
                                <!-- <span class="error55"></span> -->
                            </div>
                            <div class="inputfield55">
                                <label> Candidate Contact</label>
                                <input type="number" name="candidate_contact" required>
                                <!-- <span class="error55"></span> -->
                            </div>
                            <div class="inputfield55">
                                <label> Current Location</label>
                                <input type="text" name="current_location" required>
                                <!-- <span class="error55"></span> -->
                            </div>
                            <div class="inputfield55">
                                <label> Working As </label>
                                <select name="work_as" id="work_as" class="form-control">
                                    <option value="fresher">Fresher</option>
                                    <option value="experience">Experienced</option>
                                </select>
                                <!-- <span class="error55"></span> -->
                            </div>
                            <div class="inputfield55 experinceworker">
                                <label> Last Company</label>
                                <input type="text" name="last_company">
                                <!-- <span class="error55"></span> -->
                            </div>
                            <div class="inputfield55 experinceworker">
                                <label> Total Work Experience </label>
                                <input type="text" name="total_work_experience">
                                <!-- <span class="error55"></span> -->
                            </div>
                            <div class="inputfield55 experinceworker">
                                <label> Current CTC </label>
                                <input type="text" name="last_ctc">
                                <!-- <span class="error55"></span> -->
                            </div>
                            <div class="inputfield55 experinceworker">
                                <label>Notice Period </label>
                                <input type="text" name="notice_period">
                                <!-- <span class="error55"></span> -->
                            </div>
                            <div class="inputfield55">
                                <label> Skills </label>
                                <input type="text" name="skills" required>
                                <!-- <span class="error55"></span> -->
                            </div>
                            <div class="inputfield55">
                                <label> Expected Salary </label>
                                <input type="text" name="expected_salary" required>
                                <!-- <span class="error55"></span> -->
                            </div>
                        </div>
                        <div class="btnbox55">
                            <button type="submit" class="btndflt58" tabindex="0">Submit</a>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection

@section('js')
<script>
    $('#work_as').on('change',function(){
        var value = $(this).val();
        if(value =='experience'){
            $('.experinceworker').css('display','block');
        }else{
            $('.experinceworker').css('display','none');

        }
    });
</script>
@endsection