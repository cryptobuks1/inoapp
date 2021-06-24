@extends('user')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/front/css/print.css')}}">
@stop
@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area breadcrumb-bg white-bg extra">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                        <h1 class="title">{{$page_title}}</h1>
                    </div><!-- //.breadcrumb inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->


    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-9 col-lg-8 col-xl-7">
                    <div class="section-title d-flex justify-content-between align-items-end mb-4 mb-md-5">
                        <div><img src="{{asset('assets/images/logo/logo.png')}}" alt="logo"></div>
                        <div>
                            <p>Date: {{date('d/m/Y')}} </p>
                        </div>
                    </div>
                    <div class="left-content-wrapper">
                        <div class="card">
                            <div class="card-body text-center p-0">
                                <address class="m-0"><h3 class="green m-0 py-3">Your Transaction is confirmed</h3></address>


                                <table class="table table-default table-responsive">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <strong>
                                                Your {{$basic->sitename}} Transaction No is : <span
                                                    class="red">{{$invoice->trx}}</span>
                                            </strong>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <strong>
                                                You have just sent amount
                                                <span
                                                    class="padding-left-10 red">{{$invoice->toCurrency->code}} {{number_format($invoice->to_currency_amo,2)}}</span>
                                            </strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table class="table table-default table-responsive">
                                    <tbody>
                                    <tr>
                                        <td><h3 class="green m-0 py-2">Sender Information</h3></td>
                                    </tr>
                                    <tr>
                                        <td>Name: <strong> {{$invoice->sender_name}}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Contact No.: <strong>{{$invoice->sender_phone}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Address: <strong>{{$invoice->sender_address}}</strong> </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table class="table table-default table-responsive m-0">
                                    <tbody>
                                    <tr>
                                        <td><h3 class="green m-0 py-2">Recipient Information</h3></td>
                                    </tr>
                                    <tr>
                                        <td>Name: <strong> {{$invoice->name}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Contact No.: <strong>{{$invoice->phone}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Address: <strong>{{$invoice->address}}</strong> </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-0">
                                            <h5>Thank you for using {{$basic->sitename}}</h5>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between mt-5">
                        <div class="btn-wrapper">
                            <a href="{{route('home')}}" class="cmn-btn cl-white m-2"> <i class="fa fa-home"></i> Home</a>
                        </div>
                        <div class="btn-wrapper">
                            <a href="javascript:void(0)" onclick="window.print()" class="cmn-btn cl-white m-2"> <i class="fa fa-print"></i> Print</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>




@endsection

@section('script')

@push('style')
<style type = "text/css">
@media print {
    .m-0 {
        margin: 0 !important;
    }
    .p-0 {
        padding: 0 !important;
    }
    .red {
        color: red;
    }
    .green {
        color: green;
    }
}
</style>
@endpush