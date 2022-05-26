@extends('layouts.master')
@section('content')
    <!-- Main Content -->
    <main>
        <!-- Inner Hero Section -->
        <section class="inner-hero-section no-image no-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase text-primary">Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Inner Hero Section -->

        <!-- Locations Section -->
        <section class="section bg-muted inquiry-form-section">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                    </div>
                     <div class="col-md-12 text-center">
                        <h5>Fill your contact details as below and submit form, Our Team will revert on your<br />
                            inquiry
                            at the
                            earliest.</h5>
                    </div> --}}
                    <div class="col-md-12 col-lg-10 offset-lg-1">
                        <div class="inquiry-form">
                           {{-- {% if app.session.get('success') == 1 %}
                                <p class="success-msg">Contact Details successfully saved.</p>
                            {% endif %}
                            {{app.session.set('success', 0)}}  --}}
                            <form id="contact-us" method="post" class="row" action="{{route('contact_page_form')}}">
                            @csrf
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name*">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email_address" class="form-control" id="email" placeholder="Email Address*">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="company" class="form-control" placeholder="Company">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" id="city" placeholder="City*">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="country" class="form-control" id="country" placeholder="Country*">
                                </div>
                            </div>
                               {{-- <div class="form-group">
                                    <div class="input-number">
                                        <select class="form-control" name="phone_number" id="exampleFormControlSelect1">
                                            <option>+91</option>
                                            <option>+48</option>
                                            <option>+0</option>
                                            <option>+98</option>
                                            <option>+65</option>
                                        </select>
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div> --}}
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Or Upload BOM</label>
                                    <input type="file" name="attachment" class="form-control-file" id="atachment">
                                </div>
                                <div class="form-group">
                                    <textarea type="text" name="comments" class="form-control" id="msg"
                                        placeholder="Your message"></textarea>
                                </div>
                                <div class="row captchadiv">
                                    <div class="col-xs-12 col-md-12 col-lg-8 captchaimg">
                                    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI">
                                    </div></div>
                                    <div class="col-xs-12 col-md-12 col-lg-4 captchabtn">
									<button type="submit" class="btn btn-primary">Send Message</button>
											</div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Locations Section -->

        <!-- Locations Section -->
        <section class="section featured-manufactures location-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center mb-4">
                            <h2>
                                Our Locations
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-wrap">
                            <h3>Corporate Office (Bangalore)</h3>
                            <p>Jain Heights-Solus, 3rd Floor, Unit E&G, 1st Cross, J C Road, (Opp. Jain College),
                                Bangalore - 560027</p>
                            <div class="telephone">
                                <a href="tel:+918022290038">Tel : +91-80-2229-0038</a> / <a
                                    href="tel:+918043003868">+91-80-43003868</a>
                            </div>
                            <a href="tel:+918022290037">Fax: +91-80-2229-0037</a>
							<div class="telephone">
                                <a href="mailto:info@unified.co.in">Email : info@unified.co.in</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-wrap">
                            <h3>Singapore</h3>
                            <p>60, Kaki Bukit Place, #08-14, Eunos Techpark, Lobby A, Singapore – 415979</p>
                            <div class="telephone">
                                <a href="tel:+918022290038">Tel : +65 67428930</a>
                            </div>
                            <a href="tel:+918022290037">Fax:  +65 67492665</a>
							<div class="telephone">
                                <a href="mailto:info@unified.co.in">Email : info@unified.co.in</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-wrap">
                            <h3>Hyderabad</h3>
                            <p>#7002,7th floor,T19 Towers,M.G Road,RaniGunj.Secunderabad-500003</p>
							<div class="telephone">
                                <a href="mailto:info@unified.co.in">Email : info@unified.co.in</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-wrap">
                            <h3>Ahmedabad</h3>
                            <p>Titanium One, 6th Floor Near Pakhwan Dining hall, SG Highway, Ahmedabad-380 054</p>
							<div class="telephone">
                                <a href="tel:079-29708931">Tel : 079-29708931</a>
                            </div>
							<div class="telephone">
                                <a href="mailto:info@unified.co.in">Email : info@unified.co.in</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-wrap">
                            <h3>Delhi</h3>
                            <p>#3C2, Big Jos Tower, A-8, Netaji Subhas Place, Pitampura, Delhi - 110034</p>
							<div class="telephone">
                                <a href="tel:011- 42470673">Tel : 011- 42470673</a>
                            </div>
							<div class="telephone">
                                <a href="mailto:info@unified.co.in">Email : info@unified.co.in</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-wrap">
                            <h3>Pune</h3>
                            <p>Office No. 203, 2nd Floor, Kapil Classic, Above Bank of Maharashtra, Baner Main Road, Baner, Pune -411045</p>
							<div class="telephone">
                                <a href="mailto:info@unified.co.in">Email : info@unified.co.in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Locations Section -->


    </main>
    <!-- End Content -->

@endsection
@section('script')
  {{--  <script>
        var success = "{{ app.request.query.get('success') }}";
        if(success != '' && success == 0) {
            alert('Recaptcha is required')
        }
        $(document).ready(function() {
            var validator = $("#contact-us").validate({
                rules: {
                    name: "required",
                    country: "required",
                    city: "required",
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
                    country: "Please enter country",
                    city: "Please enter city",
                    company: "Please enter company",
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
--}}
@endsection