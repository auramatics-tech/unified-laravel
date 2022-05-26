@extends('layouts.master')
@section('content')

    <main>
        <section class="section join-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-left">
                            <h2>
                                Why join us
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="join-wrapper">
                            <div class="join-wrap">
                                <div class="img-wrap">
                                    <img src="{{asset('assets/frontend/assets/images/join1.png')}}" alt="Extensive Learning Curve">
                                </div>
                                <h3>Extensive Learning Curve</h3>
                            </div>
                            <div class="join-wrap">
                                <div class="img-wrap">
                                    <img src="{{asset('assets/frontend/assets/images/join2.png')}}" alt="Work-life Balance">
                                </div>
                                <h3>Work-life Balance</h3>
                            </div>
                            <div class="join-wrap">
                                <div class="img-wrap">
                                    <img src="{{asset('assets/frontend/assets/images/join3.png')}}" alt="Beneficial Career">
                                </div>
                                <h3>Beneficial Career</h3>
                            </div>
                            <div class="join-wrap">
                                <div class="img-wrap">
                                    <img src="{{asset('assets/frontend/assets/images/join4.png')}}" alt="On-ground Experience">
                                </div>
                                <h3>On-ground Experience</h3>
                            </div>
                            <div class="join-wrap">
                                <div class="img-wrap">
                                    <img src="{{asset('assets/frontend/assets/images/join5.png')}}" alt="Favorable Work Culture">
                                </div>
                                <h3>Favorable Work Culture</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-muted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center mb-4">
                            <h2>
                                Job opportunities
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive-md oppertunities-table">
                            <table class="table table-bordered">
                                <thead class="thead-primary">
                                    <tr>
                                        <th scope="col">Posting Title</th>
                                        <th scope="col">City</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($jobs))
                                    @foreach($jobs as $job)
                                    <tr>
                                        <td data-label="Posting Title">{{ $job->title }}</td>
                                        <td data-label="City">{{ $job->city }}</td>
                                        <td><a class="btn btn-primary open-info-model" href="javascript:void(0)" data-id="{{job.id}}" data-toggle="modal"
                                               >Apply Now</a></td>
                                    </tr>
                                    @endforeach
                                    @else 
                                        <tr>
                                            <td colspan="3">
                                                Sorry, No jobs available!
                                            </td>
                                        </tr>
                                    
                                        @endif
                                </tbody>
                            </table>
                        </div>


                        @if(count($newsList))
                        <section class="section bg-muted">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-header text-center">
                                            <h2>
                                                News & Update
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="news-slider-container swiper-container pb-80">
                                            <div class="swiper-wrapper">
                                                @foreach($newsList as $news)
                                                <div class="swiper-slide">
                                                    <div class="news-wrap">
                                                        <div class="image-wrap">
                                                            <img src="{{asset('uploads/news/'.$news->image)}}" alt="{{ $news->title }}">
                                                        </div>
                                                        <h3>{{ $news->name }}</h3>
                                                        <ul>
                                                            <li>
                                                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/update.svg')}}" alt="Company Updates">
                                                                Company Updates
                                                            </li>
                                                            <li>
                                                                <img class="svgImg" src="{{asset('assets/frontend/assets/images/calender.svg')}}" alt="Date">
                                                                {{ date('j M Y',strtotime($news->created_at)) }}
                                                            </li>
                                                        </ul>
                                                        <p>{{ $news->description}}</p>
                                                        <a href="">Learn more <img class="svgImg" src="{{asset('assets/frontend/assets/images/left-aerrow.svg')}}" alt="Left"></a>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            
                                            <div class="swiper-pagination"></div>
                                        </div>
                                        <div class="swiper-btns">
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @endif
                        <div class="modal fade" id="jobInfo"  aria-labelledby="jobInfoLabel"
                           >
                        </div>
                        <div class="modal fade" id="applyjob" tabindex="-1" aria-labelledby="applyjobLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title font-bold text-primary" id="applyjobLabel">
                                            <i id="back-btn" class="fas fa-chevron-left mr-2"></i> <span class="job-title">Applying for:
                                            Product
                                            Manager -
                                            Passive</span>
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body px-4 px-lg-5 py-4">
                                        <form action="" method="POST" id="apply-job-form" enctype="multipart/form-data">
                                            <input type="hidden" id="job_id" name="job_id" value="" />
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                    <div class="form-head bg-muted p-3">
                                                        <h5>Basic Information</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Full Name <span class="astrick">*</span></label>
                                                        <input type="text" name="name" class="form-control" id="fname"
                                                            placeholder="Full Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Last Name <span class="astrick">*</span></label>
                                                        <input type="text" class="form-control" id="lname" name="lastname"
                                                            placeholder="Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Email <span class="astrick">*</span></label>
                                                        <input type="text" class="form-control" id="email" name="email"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Phone Number <span
                                                                class="astrick">*</span></label>
                                                        <input type="text" class="form-control" id="phone" name="phonenumber"
                                                            placeholder="Phone Number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-4">
                                                <div class="col-md-12">
                                                    <div class="form-head bg-muted p-3">
                                                        <h5>Professional Information</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Number of years of experiance</label>
                                                        <input type="text" class="form-control" name="experience">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Skill Set</label>
                                                        <textarea class="form-control" rows="4" name="skills"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-4">
                                                <div class="col-md-12">
                                                    <div class="form-head bg-muted p-3">
                                                        <h5>Attachment</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group d-sm-flex align-items-center">
                                                        <input type="file" name="file" class="form-control h-auto">
                                                        {# <button id="" type="button"
                                                            class="btn btn-primary mt-3 mt-sm-0">Upload</button> #}
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="" type="button" class="btn btn-primary apply-job-submit-btn">Submit</button>
                                        <button type="button" class="btn btn-secondary btn-secondary-close" id="reset-btn"
                                            >Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        $(document).ready(function() {
            var validator = '';
            //To Open the job-info modal
            $('.open-info-model').on('click', function() {
                var id = $(this).attr('data-id');
                if(id != '' && id != null) {
                    $.ajax({
                        url: "{{url('/')}}/get/jobs/info/"+id,
                        type: 'GET',
                        success: function (response) {
                            if(response.status == 200) {
                                $('#jobInfo').empty();
                                $('#jobInfo').html(response.html);
                                $('.job-title').text($('#jobInfoLabel').text());
                                $('#jobInfo').modal('show');
                                $('#job_id').val(id);
                            } else {
                                loaction.reload();
                            }
                        },
                        error: function () {
                             loaction.reload();
                        }
                    });
                }   
            })
            //To Toggle job-info modal
            $(document).on('click', '#apply-btn', function() {
                $('#jobInfo').modal('toggle'); 
            })
            $(document).on('click', '#back-btn', function() {
                $('#applyjob').modal('toggle');
                $('#jobInfo').modal('toggle'); 
            })
            $('.apply-job-submit-btn').on('click', function() {
                $("#apply-job-form").submit();
            });
            //To Reset the form
            $('#reset-btn').on('click', function() {
                validator.resetForm();
                $('#apply-job-form').trigger("reset");
            })
            var validator = $("#apply-job-form").validate({
                rules: {
                    name: "required",
                    lastname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    phonenumber: {
                        required: true,
                        digits: true
                    }
                },
                messages: {
                    name: "Please enter name",
                    lastname: "Please enter lastname",
                    email: {
                        "required": "Please enter valid email-address",
                        "email": "Please enter valid email-address"
                    },
                    phonenumber: {
                        "required": "Please add phone number",
                        "digits": "Please enter valid phone-number"
                    }
                }
            });
        })
    </script>

@endsection