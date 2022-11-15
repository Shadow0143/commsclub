@extends('layouts.frontend.app')

@section('title')
<title>Applicants</title>
@endsection
@section('css')
<style>
    #candidate_name {
        font-weight: 900;
        font-size: 60px;
        text-transform: uppercase;
    }

    .bgchange {
        background-color: #8080804d;
        border-radius: 10px;
        padding: 20px;
        margin: 50px;
    }

    #candidate_type {
        text-transform: capitalize;

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

        </ul>
    </div>
</section>

<section class=" ">
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sl No.</th>
                    <th>Applicant Name</th>
                    <th>Applicant Email</th>
                    <th>Applicant Contact</th>
                    <th>Applicant Type</th>
                    <th>Resume</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @forelse($applicants as $key => $val)
                <tr id="candidate{{$val->id}}">
                    <td>{{$key+1}}</td>
                    <td>{{ucfirst($val->candidate_name)}}</td>
                    <td>{{$val->candidate_email}}</td>
                    <td>{{$val->candidate_contact}}</td>
                    <td>{{ucfirst($val->working_as)}}</td>
                    <td class="text-center">
                        <a href="{{asset('resumes')}}/{{$val->resume}}" target="_blank" title="View Resume">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        </a>
                    </td>
                    <td>
                        <a href="javaScript:void(0);" title="View Details" data-id="{{$val->id}}"
                            class="view_details"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="javaScript:void(0);" title="Reject" class="reject" data-id="{{$val->id}}"><i
                                class="fa fa-ban" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-danger text-center" colspan="7">No data found.</td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</section>


<div class="modal fade" id="applicantViewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered popcontainer" role="document">
        <div class="modal-content popups45">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <p> <span id="candidate_name"></span> <br>( <span id="candidate_type"></span> )</p>

                        <p> <i class="fa fa-envelope text-danger" aria-hidden="true"></i> &nbsp; <span
                                id="candidate_email"></span>
                        </p>
                        <p> <i class="fa fa-phone text-danger" aria-hidden="true"></i> &nbsp; <span
                                id="candidate_contact"></span></p>
                        <p> <img src="{{asset('assets/images/job/loc45.png')}}" alt="location"> &nbsp; <span
                                id="candidate_location"></span></p>
                    </div>
                    <div class="col-6">
                        <embed src="" id="pdf" width="250px">
                    </div>
                    <div class="col-10  bgchange" id="moredetails">
                        <p>Last Company : <span id="last_company"></span></p>
                        <p>Total Work Experience : <span id="work_experience"></span></p>
                        <p>Last CTC : <span id="last_ctc"></span></p>
                        <p>Notice Period : <span id="notice_period"></span></p>
                    </div>
                    <div class="col-10 bgchange">
                        <p>Skills : <span id="skills"></span></p>
                        <p>Expected Salary : <span id="expected_salary"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('js')
<!------------------------------------------- Delete section ----------------------------------->

<script>
    $(document).on('click', '.reject', function(e) {
      e.preventDefault();
      var id = $(this).data('id');
        swal({
            title: 'Are you sure?',
            text: "You won't reject this candidate!",
            icon: 'warning',
            buttons: true,
            buttonsStyling: false,
            reverseButtons: true
        }).then((confirm) => {
            if (confirm) {
                $.ajax({
                    type: "GET",
                    url: "{{route('rejectApplicant')}}",
                    data: { id: id },
                    success: function(data) {
                        $('#candidate'+id).hide();
                    }
                });
            }
        });
    });
</script>

<!------------------------------------------- view details section ----------------------------------->
<script>
    $('.view_details').on('click',function(){
        var id = $(this).data('id');
        var url = window.location.protocol+'//'+window.location.hostname+':'+window.location.port+'/resumes/';
        $.ajax({
        url:"{{route('viewApplicantDetails')}}",
        type:'GET',
        data:{
                id:id,
        },
        success:function(data){
            $('#candidate_type').html(data.working_as);
            $('#candidate_name').html(data.candidate_name);
            $('#candidate_email').html(data.candidate_email);
            $('#candidate_contact').html(data.candidate_contact);
            $('#candidate_location').html(data.current_location);
            $('#pdf').attr('src',url+data.resume);
            if(data.working_as =='fresher'){
                $('#moredetails').hide();
            }else{
                $('#moredetails').show();

            }
            $('#last_company').html(data.last_company);
            $('#work_experience').html(data.total_work_experience);
            $('#last_ctc').html(data.last_ctc);
            $('#notice_period').html(data.notice_period);
            $('#skills').html(data.skills);
            $('#expected_salary').html(data.expected_salary);

            $('#applicantViewDetails').modal('show');
        }
        });
    });

  
</script>
@endsection