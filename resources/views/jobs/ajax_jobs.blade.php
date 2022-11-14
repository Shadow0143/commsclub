@foreach ($jobs as $key=>$val)
<div class="jobrow78" id="jobs{{$val->id}}">

    <div class="jobleft458">

        <figure><img src="{{asset('companylogos')}}/{{$val->company_logo}}" alt="company-logo" width="130px"></figure>
        <div class="jobinfo54">
            <span>{{$val->job_type}}</span>
            <h2>{{$val->job_title}}</h2>
            <small>Posted on {{date('d M , Y',strtotime($val->created_at))}} by {{$val->post_by}}</small>
            <ul class="jdt5">
                <li><img src="{{asset('assets/images/job/loc45.png')}}" alt="location">{{$val->address}} ,
                    {{$val->city}} {{$val->state}} : {{$val->zip_code}}
                </li><br>
                <li><img src="{{asset('assets/images/job/dollr545.png')}}" alt="dollar">
                    ${{$val->min_salary}} - ${{$val->max_salary}} </li>
            </ul>
        </div>
    </div>
    <div class="btnbox55">
        <a href="{{route('jobDetails',['id'=>$val->id])}}" class="btndflt58" tabindex="0">View Details</a>
        @guest
        @else
        @if(Auth::user()->role=='0')
        <a href="{{route('editJobs',['id'=>$val->id])}}" title="Edit"><i class='fa fa-edit'></i></a>
        &nbsp;
        <a href="javaScript:void(0);" title="Delete" class="delete_job" data-id="{{$val->id}}"><i
                class='fa fa-trash'></i></a> &nbsp;
        @endif
        @endguest
    </div>
</div>
@endforeach