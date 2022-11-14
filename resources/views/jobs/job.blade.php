@extends('layouts.frontend.app')

@section('title')
<title>Jobs</title>
@endsection
@section('css')
<style>
    .clean01 {
        cursor: pointer;
    }

    .eventAddBtn {
        height: 60px;
        width: 60px;
        border-radius: 50px;
        position: absolute;
        margin: 10px;
        background-color: #10104bc9;
        color: white;
        box-shadow: 0px 1px 30px blue
    }
</style>
@endsection

@section('content')

<section class="banner_sec55 innerbanner456">
    <div class="container">
        <h1>jobs on advertising and media management</h1>
        <ul class="breadcrumb55">
            <li>
                <a href="{{route('welcome')}}">Home</a>
            </li>
            <li>
                <span>Jobs</span>
            </li>
            <li>
                <span>Advertising and marketing</span>
            </li>
        </ul>
    </div>
</section>

<section class="jobs_section15 paddy">
    <div class="container">
        <div class="toptielcol14">
            <h2 class="title44">Lorem ipsum dolor sit amet</h2>
            <h3 class="maintitle44">Featured Jobs</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales ex a tortor pharetra accumsan.
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vel
                arcu tortor. Integer vulputate ullamcorper erat
                ut semper. Phasellus vitae ex vel enim porta porttitor ac ut leo. Ut venenatis urna purus, at eleifend
                ante interdum et.
            </p>
        </div>
        @guest
        @else
        @if(Auth::user()->role=='0')
        <a href="{{route('createJobs')}}">
            <button class="eventAddBtn"> + </button>
        </a>
        @endif
        @endguest
        <div class="jossearh_sec455">
            <div class="jbsrch45">
                <button class="search">Search <i class="fa fa-search"></i></button>
                <input type="text" name="" id="searchbox" placeholder="">
                <span class="clean01" onclick="window.location.reload()"> <i class="fa fa-trash-o"></i> Clean All</span>
            </div>
        </div>
        <div class="jobholder45" id="searchresult">
            @foreach ($jobs as $key=>$val)
            <div class="jobrow78" id="jobs{{$val->id}}">

                <div class="jobleft458">

                    <figure><img src="{{asset('companylogos')}}/{{$val->company_logo}}" alt="company-logo"
                            width="130px"></figure>
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


        </div>

    </div>
</section>

@endsection

@section('js')
<!------------------------------------------- Delete section ----------------------------------->

<script>
    $(document).on('click', '.delete_job', function(e) {
      e.preventDefault();
      var id = $(this).data('id');
        swal({
            title: 'Are you sure?',
            text: "You won't delete this job!",
            icon: 'warning',
            buttons: true,
            buttonsStyling: false,
            reverseButtons: true
        }).then((confirm) => {
            if (confirm) {
                $.ajax({
                    type: "GET",
                    url: "{{route('deleteJobs')}}",
                    data: { id: id },
                    success: function(data) {
                        $('#jobs'+id).hide();
                    }
                });
            }
        });
    });
</script>

<!------------------------------------------- Search section ----------------------------------->
<script>
    $('.search').on('click',function(){
        var keyword = $('#searchbox').val();
        
        $.ajax({
        url:"{{route('searchJobs')}}",
        type:'GET',
        data:{
                keyword:keyword,
        },
        success:function(data){
            if(data !=''){
                $('#searchresult').html(data);
            }else{
                $('#searchresult').html('<div class="text-center "><p class="text-danger"> No data found.</p></div>');
            }
        }
        });
    });

  
</script>
@endsection