@extends('backend.master')

@section('content')

    <div class="main-wrapper">
                <div class="page-wrapper">
          <div>
        <div class="mt-5">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <span class="dash-widget-bg1"><i class="fa fa-receipt" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{$invoice}}</h3>
                                <span class="widget-title1">Invoice<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{$technician}}</h3>
                                <span class="widget-title2">Techinician<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-receipt" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>{{$todayInvoice}}</h3>
                                <span class="widget-title4">Today Invoice<i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
               
               
            </div>
            
        </div>
    </div>
           
  

    <div class="sidebar-overlay" data-reff=""></div>
   


@endsection