<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use App\Models\Jobs;
use App\Models\Candidates;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createJobs()
    {
        return view('jobs.createJobs');
    }

    public function storeJobs(Request $request)
    {
        if (!empty($request->id)) {
            $jobs = Jobs::find($request->id);
            if (!empty($request->file('company_logo'))) {
                $companyImage                                   = $request->file('company_logo');
                $Imagename                                      = time() . '-CompanyImage' . '.' . $companyImage->getClientOriginalExtension();
                $result                                         = public_path('companylogos');
                $companyImage->move($result, $Imagename);
                $jobs->company_logo                             = $Imagename;
            }

            $jobs->company_name                                 = $request->company_name;
            $jobs->company_email                                =  $request->company_email;
            $jobs->company_contact                              =  $request->company_contact;
            $jobs->company_url                                  =  $request->company_url;
            $jobs->job_type                                     =  $request->job_type;
            $jobs->job_title                                    =  $request->job_title;
            $jobs->address                                      =  $request->address;
            $jobs->city                                         =  $request->city;
            $jobs->state                                        =  $request->state;
            $jobs->zip_code                                     =  $request->pincode;
            $jobs->min_salary                                   =  $request->min_salary;
            $jobs->max_salary                                   =  $request->max_salary;
            $jobs->job_details                                  =  $request->description;
            $jobs->vacancy                                      =  $request->vacancy;
            $jobs->candidate_qualificaion                       =  $request->candidate_qualification;
            $jobs->last_date_of_apply                           =  $request->last_date_of_apply;
            $jobs->save();
            toast('Job is updated ', 'success');
        } else {

            $jobs = new Jobs();
            if (!empty($request->file('company_logo'))) {
                $companyImage                                   = $request->file('company_logo');
                $Imagename                                      = time() . '-CompanyImage' . '.' . $companyImage->getClientOriginalExtension();
                $result                                         = public_path('companylogos');
                $companyImage->move($result, $Imagename);
                $jobs->company_logo                             = $Imagename;
            }

            $jobs->company_name                                 = $request->company_name;
            $jobs->company_email                                =  $request->company_email;
            $jobs->company_contact                              =  $request->company_contact;
            $jobs->company_url                                  =  $request->company_url;
            $jobs->job_type                                     =  $request->job_type;
            $jobs->job_title                                    =  $request->job_title;
            $jobs->address                                      =  $request->address;
            $jobs->city                                         =  $request->city;
            $jobs->state                                        =  $request->state;
            $jobs->zip_code                                     =  $request->pincode;
            $jobs->min_salary                                   =  $request->min_salary;
            $jobs->max_salary                                   =  $request->max_salary;
            $jobs->job_details                                  =  $request->description;
            $jobs->vacancy                                      =  $request->vacancy;
            $jobs->candidate_qualificaion                       =  $request->candidate_qualification;
            $jobs->last_date_of_apply                           =  $request->last_date_of_apply;
            $jobs->post_by                                      =  Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $jobs->save();
            toast('Job is added ', 'success');
        }
        return redirect()->route('jobs');
    }

    public function deleteJobs(request $request)
    {
        $delete                                                 = Jobs::find($request->id);
        $delete->delete();
        return 1;
    }

    public function editJobs($id)
    {
        $jobs                                                   = Jobs::find($id);
        return view('jobs.createJobs')->with('jobs', $jobs);
    }

    public function storeApplicant(Request $request)
    {

        $apply                                      = new Candidates();
        $apply->jobs_id                             = $request->company_id;
        $apply->candidate_name                      = $request->candidate_name;
        $apply->candidate_email                     = $request->candidate_email;
        $apply->candidate_contact                   = $request->candidate_contact;
        $apply->current_location                    = $request->current_location;
        $apply->working_as                          = $request->work_as;
        $apply->last_company                        = $request->last_company;
        $apply->total_work_experience               = $request->total_work_experience;
        $apply->last_ctc                            = $request->last_ctc;
        $apply->skills                              = $request->skills;
        $apply->expected_salary                     = $request->expected_salary;
        $apply->notice_period                       = $request->notice_period;
        if (!empty($request->file('resume'))) {
            $resumeFile                             = $request->file('resume');
            $Imagename                              = $request->candidate_name . '-' . time() . '-resume' . '.' . $resumeFile->getClientOriginalExtension();
            $result                                 = public_path('resumes');
            $resumeFile->move($result, $Imagename);
            $apply->resume                          = $Imagename;
        }

        $apply->save();

        toast('Applied Succesfully', 'success');
        return redirect()->route('jobs');
    }

    public function viewApplicant($id)
    {
        $applicants = Candidates::where('jobs_id', $id)->orderby('id', 'desc')->where('status', 'accept')->get();
        return view('jobs.applicants')->with('applicants', $applicants);
    }

    public function rejectApplicant(Request $request)
    {
        $reject = Candidates::find($request->id);
        $reject->status = 'reject';
        $reject->save();
        return 1;
    }

    public function viewApplicantDetails(Request $request)
    {
        $candidates = Candidates::find($request->id);
        return $candidates;
    }
}