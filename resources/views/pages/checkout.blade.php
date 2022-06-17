@extends('layouts.checkout')
@section('title', 'Checkout')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item">
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who's Going ? </h1>
                        <p>
                            Trip to Ubud,Bali,Indonesia
                        </p>
                        <div class="attendee">
                            <table class="table table-responsive-sm-text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>Visa</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="{{url('frontend/image/Mask Group 21.png')}}" alt="">
                                        </td>
                                        <td class="align-middle">
                                            Zidan Anggoro
                                        </td>
                                        <td class="align-middle">
                                            CN
                                        </td>
                                        <td class="align-middle">
                                            N/A
                                        </td>
                                        <td class="align-middle">
                                            Active
                                        </td>
                                        <td class="align-middle">
                                            <a href="#"><img src="{{url('frontend/image/Path 7.png')}}" alt=""></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{url('frontend/image/Mask Group 22.png')}}" alt="">
                                        </td>
                                        <td class="align-middle">
                                            Sukamdi
                                        </td>
                                        <td class="align-middle">
                                            SG
                                        </td>
                                        <td class="align-middle">
                                            30 days
                                        </td>
                                        <td class="align-middle">
                                            Active
                                        </td>
                                        <td class="align-middle">
                                            <a href="#"><img src="{{url('frontend/image/Path 7.png')}}" alt=""></a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form class="form-inline">

                                <label for="inputUsername" class="sr-only">Name</label>
                                <input type="text" name="inputUsername" class="from-control mb-2 mr-sm-2"
                                    id="inputUsername" placeholder="Username">

                                <label for="inputVisa" class="sr-only">Visa</label>
                                <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                    <option value="Visa" selected>Visa</option>
                                    <option value="30 Days">30 Days</option>
                                    <option value="N/A">N/A</option>
                                </select>

                                <label for="doePassword" class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="from-control datepicker" id="doepassport"
                                        placeholder="DOE Passport">
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-4">
                                    Add Now
                                </button>
                            </form>
                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                You are only able to invite member that has registered in Mlaku Mlaku
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Trip Information</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">
                                    2 Person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Additional Visa</th>
                                <td width="50%" class="text-right">
                                    $ 190.00
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">
                                    $ 80.00/Person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Total Price</th>
                                <td width="50%" class="text-right">
                                    $ 280.00
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Total Pay (+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">$ 279,</span>
                                    <span class="text-orange">33</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2>Payment Intructions</h2>
                        <p class="paymet-intructions">
                            Please Complete the payment before you
                            continue the Trip
                        </p>
                        <br>
                        <div class="bank">
                            <div class="bank-item pb-4">
                                <img src="{{url('frontend/image/Group 17.png')}}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>Pt Mlaku ID</h3>
                                    <p>
                                        0829 0999 8390
                                        <br>
                                        Bank Central Asia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-item pb-4">
                                <img src="{{url('frontend/image/Group 17.png')}}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>Pt Mlaku ID</h3>
                                    <p>
                                        0853 3116 4966
                                        <br>
                                        Bank Titil
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{url('/checkout/success')}}" class="btn btn-block btn-join-now mt-0 py-3">
                            I have Paid
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{url('/detail')}}" class="text-muted">
                            Cancel Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontend/libaries/combined/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libaries/combined/js/gijgo.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            icons :{
                rightIcon : '<img src="{{url('frontend/image/Group 16@2x.png')}}" />'
            }
        });
    });
</script>
@endpush