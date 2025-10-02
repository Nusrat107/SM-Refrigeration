@extends('backend.master')

@section('content')
<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="content" id="invoice-content">

            <div class="row">
                <div class="col-lg-12 mt-3">
                    <h4 class="page-title mb-4">ইনভয়েস এডিট করুন</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ url('/admin/invoice-update/' . $invoice->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card shadow-lg p-4 rounded">

                            <h5 class="mb-3">Invoice Details</h5>

                            <!-- Row 1 -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>সিরিয়াল নাম্বার</label>
                                    <input type="text" class="form-control" name="serial_number" value="{{ $invoice->serial_number }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>মাস</label>
                                    <input type="text" class="form-control" name="month" value="{{ $invoice->month }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>অভিযোগের নাম্বার</label>
                                    <input type="text" class="form-control" name="complaint_number" value="{{ $invoice->complaint_number }}">
                                </div>
                            </div>

                            <!-- Row 2 -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>SB নাম্বার</label>
                                    <input type="text" class="form-control" name="sb_no" value="{{ $invoice->sb_no }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>মোবাইল নম্বর</label>
                                    <input type="text" class="form-control" name="contact_number" value="{{ $invoice->contact_number }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>ঠিকানা</label>
                                    <input type="text" class="form-control" name="district" value="{{ $invoice->district }}" required>
                                </div>
                            </div>

                            <!-- Row 3 -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>রেফারেন্স নাম</label>
                                    <input type="text" class="form-control" name="rm_name" value="{{ $invoice->rm_name }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>কাজের ধরণ</label>
                                    <input type="text" class="form-control" name="parts_description" value="{{ $invoice->parts_description }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>টেকনিশিয়ানের নাম</label>
                                    <input type="text" class="form-control" name="job_done_by" value="{{ $invoice->job_done_by }}">
                                </div>
                            </div>

                            <!-- Row 4 -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>মালামাল কেনা বাবদ</label>
                                    <input type="text" class="form-control" name="purchase_cost" value="{{ $invoice->purchase_cost }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>সাইট থেকে আসা টাকা</label>
                                    <input type="text" class="form-control" name="site_income" value="{{ $invoice->site_income }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>সাইট খরচ</label>
                                    <input type="text" class="form-control" name="site_expense" value="{{ $invoice->site_expense }}">
                                </div>
                            </div>

                            <!-- Row 5 -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>পণ্যের ব্র্যান্ড</label>
                                    <input type="text" class="form-control" name="product_brand" value="{{ $invoice->product_brand }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>পণ্যের মডেল</label>
                                    <input type="text" class="form-control" name="product_model" value="{{ $invoice->product_model }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>পণ্যের পরিমাণ</label>
                                    <input type="number" class="form-control" name="product_quantity" value="{{ $invoice->product_quantity }}" required>
                                </div>
                            </div>

                            <!-- Row 6 -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>অভিযোগের ধরন</label>
                                    <input type="text" class="form-control" name="complaint_type" value="{{ $invoice->complaint_type }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>পণ্যের ধরণ</label>
                                    <input type="text" class="form-control" name="product_category" value="{{ $invoice->product_category }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>টেকনিশিয়ানের ফলাফল</label>
                                    <input type="text" class="form-control" name="technician_findings" value="{{ $invoice->technician_findings }}">
                                </div>
                            </div>

                            <!-- Row 7 -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>ইনভয়েস নাম্বার</label>
                                    <input type="text" class="form-control" name="invoice_number" value="{{ $invoice->invoice_number }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>ইনভয়েসের তারিখ</label>
                                    <input type="date" class="form-control" name="invoice_date" value="{{ $invoice->invoice_date }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>কাজের অভিযোগের তারিখ</label>
                                    <input type="date" class="form-control" name="job_complain_date" value="{{ $invoice->job_complain_date }}">
                                </div>
                            </div>

                            <!-- Row 8 -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>পণ্যের সিরিয়াল নং ১</label>
                                    <input type="text" class="form-control" name="product_slno1" value="{{ $invoice->product_slno1 }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>(SEV)(HEV)(SOV)(HO)</label>
                                    <input type="text" class="form-control" name="product_slno2" value="{{ $invoice->product_slno2 }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>SCBCC নাম্বার</label>
                                    <input type="text" class="form-control" name="scbcc_no" value="{{ $invoice->scbcc_no }}">
                                </div>
                            </div>

                            <!-- Row 9 -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>গ্রাহকের নাম</label>
                                    <input type="text" class="form-control" name="customer_name" value="{{ $invoice->customer_name }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>রেফারেন্স খরচ</label>
                                    <input type="text" class="form-control" name="reference_cost" value="{{ $invoice->reference_cost }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>পণ্য গ্রহণের তারিখ</label>
                                    <input type="date" class="form-control" name="product_received_date" value="{{ $invoice->product_received_date }}" required>
                                </div>
                            </div>

                            <!-- Row 10 -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>K K K</label>
                                    <input type="number" class="form-control" name="kkk" value="{{ $invoice->kkk }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>P P P</label>
                                    <input type="text" class="form-control" name="ppp" value="{{ $invoice->ppp }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>অন্যান্য খরচ</label>
                                    <input type="text" class="form-control" name="other_expense" value="{{ $invoice->other_expense }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>কাজের অবস্থা</label>
                                    <input type="text" class="form-control" name="work_status" value="{{ $invoice->work_status }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label></label>
                                    <input type="text" class="form-control" name="option_1" value="{{ $invoice->option_1 }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label></label>
                                    <input type="text" class="form-control" name="option_2" value="{{ $invoice->option_2 }}">
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="fa fa-save"></i> আপডেট করুন
                                </button>
                                <a href="{{ url('/admin/invoice') }}" class="btn btn-secondary px-4">
                                    <i class="fa fa-arrow-left"></i> ফিরে যান
                                </a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .form-control {
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        border: 1px solid #CED4DA;
        border-radius: 6px;
        background-color: transparent;
        transition: all 0.3s ease;
    }
    .form-control:focus {
        border-color: #0D6EFD;
        box-shadow: 0 2px 8px rgba(13, 110, 253, 0.3);
        outline: none;
        background-color: transparent;
    }
    .card.shadow-lg {
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }
</style>
@endsection
