@extends('backend.master')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center mb-4">
                <h4 class="mb-0">নতুন ইনভয়েস তৈরি করুন</h4>
                <a href="{{ url('/admin/invoice') }}" class="btn btn-light btn-sm">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>

            <div class="card-body">
                <form action="{{ url('/admin/create-invoice/store') }}" method="POST">
                    @csrf

                    {{-- Row 1 --}}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>সিরিয়াল নাম্বার</label>
                            <input type="text" class="form-control" name="serial_number" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>মাস</label>
                            <input type="text" class="form-control" name="month" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>অভিযোগের নাম্বার</label>
                            <input type="text" class="form-control" name="complaint_number" placeholder="">
                        </div>
                    </div>

                    {{-- Row 2 --}}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>SB নাম্বার</label>
                            <input type="text" class="form-control" name="sb_no" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>মোবাইল নম্বর</label>
                            <input type="text" class="form-control" name="contact_number" placeholder="">
                             @error('contact_number')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>ঠিকানা</label>
                            <input type="text" class="form-control" name="district" placeholder="">
                             @error('district')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                        </div>
                    </div>

                    {{-- Row 3 --}}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>রেফারেন্স নাম</label>
                            <input type="text" class="form-control" name="rm_name" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>কাজের ধরণ</label>
                            <input type="text" class="form-control" name="parts_description" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>টেকনিশিয়ানের নাম</label>
                            <input type="text" class="form-control" name="job_done_by" placeholder="">
                        </div>
                    </div>

                    {{-- Row 4 --}}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>মালামাল কেনা বাবদ</label>
                            <input type="text" class="form-control" name="purchase_cost" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>সাইট থেকে আসা টাকা</label>
                            <input type="text" class="form-control" name="site_income" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>সাইট খরচ</label>
                            <input type="text" class="form-control" name="site_expense" placeholder="">
                        </div>
                    </div>

                    {{-- Row 5 --}}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>পণ্যের ব্র্যান্ড</label>
                            <input type="text" class="form-control" name="product_brand" placeholder="">
                             @error('product_brand')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>পণ্যের মডেল</label>
                            <input type="text" class="form-control" name="product_model" placeholder="">
                             @error('product_model')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>পণ্যের পরিমাণ</label>
                            <input type="number" class="form-control" name="product_quantity" placeholder="">
                             @error('product_quantity')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                        </div>
                    </div>

                    {{-- Row 6 --}}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>অভিযোগের ধরন</label>
                            <input type="text" class="form-control" name="complaint_type" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>পণ্যের ধরণ</label>
                            <input type="text" class="form-control" name="product_category" placeholder="">
                             @error('product_category')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>টেকনিশিয়ানের ফলাফল</label>
                            <input type="text" class="form-control" name="technician_findings" placeholder="">
                        </div>
                    </div>

                    {{-- Row 7 --}}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>ইনভয়েস নাম্বার</label>
                            <input type="text" class="form-control" name="invoice_number" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>ইনভয়েসের তারিখ</label>
                            <input type="date" class="form-control" name="invoice_date" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>কাজের অভিযোগের তারিখ</label>
                            <input type="date" class="form-control" name="job_complain_date" placeholder="">
                        </div>
                    </div>

                    {{-- Row 8 --}}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>পণ্যের সিরিয়াল নং ১</label>
                            <input type="text" class="form-control" name="product_slno1" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>(SEV)(HEV)(SOV)(HO)</label>
                            <input type="text" class="form-control" name="product_slno2" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>SCBCC নাম্বার</label>
                            <input type="text" class="form-control" name="scbcc_no" placeholder="">
                        </div>
                    </div>

                    {{-- Row 9 --}}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>গ্রাহকের নাম</label>
                            <input type="text" class="form-control" name="customer_name" placeholder="">
                             @error('customer_name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>রেফারেন্স খরচ</label>
                            <input type="text" class="form-control" name="reference_cost" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>পণ্য গ্রহণের তারিখ</label>
                            <input type="date" class="form-control" name="product_received_date" placeholder="">
                             @error('product_received_date')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                        </div>
                    </div>

                    {{-- Row 10 --}}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>K K K</label>
                            <input type="number" class="form-control" name="kkk" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>P P P</label>
                            <input type="text" class="form-control" name="ppp" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>অন্যান্য খরচ</label>
                            <input type="text" class="form-control" name="other_expense" placeholder="">
                        </div>
                    </div>

                    {{-- Row 11 --}}
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>কাজের অবস্থা</label>
                            <input type="text" class="form-control" name="work_status" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label></label>
                            <input type="text" class="form-control" name="option_1" placeholder="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label></label>
                            <input type="text" class="form-control" name="option_2" placeholder="">
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> ইনভয়েস তৈরি করুন
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control {
        border-radius: 6px;
        border: 1px solid #CED4DA;
        background-color: transparent;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    .form-control:focus {
        border-color: #0D6EFD;
        box-shadow: 0 2px 8px rgba(13,110,253,0.3);
        outline: none;
    }
    .card.shadow {
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        padding: 20px;
    }
</style>
@endsection
