@foreach ($jobs as $key=>$val)
<div class="jobrow78">
    <div class="jobleft458">
        <figure><img src="{{asset('companylogos')}}/{{$val->company_logo}}" alt="company-logo" width="130px"></figure>
        <div class="jobinfo54">
            <span>{{$val->job_type}}</span>
            <h2>{{$val->job_title}}</h2>
            <small>Posted {{date('d M , Y',strtotime($val->created_at))}} by {{$val->post_by}}</small>
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
        <a href="#" class="btndflt58" tabindex="0">Browse Job</a>
    </div>
</div>
@endforeach