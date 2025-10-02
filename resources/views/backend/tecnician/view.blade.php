@extends('backend.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4 p-4">

        <!-- Page Header -->
        <div class="row mb-4 d-flex justify-content-between align-items-center">
            <div class="col-md-8">
                <h4 class="page-title">টেকনিশিয়ানের বিস্তারিত তথ্য</h4>
            </div>
            
        </div>

        <div class="row">
            <!-- Image -->
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <img src="{{ asset('backend/images/tecnician/'.$tecnician->image) }}" 
                     class="img-fluid rounded-4 shadow-sm"
                     style="max-height: 350px; object-fit: cover;"
                     alt="{{ $tecnician->name }}">
            </div>

            <!-- Details -->
            <div class="col-md-8">
                <h3 class="mb-2">{{ $tecnician->name }}</h3>
                <h5 class="text-muted mb-4">{{ $tecnician->designation ?? 'N/A' }}</h5>

                <table class="table table-bordered">
                    <tbody>
                        <tr><th>ফোন</th><td>{{ $tecnician->phone ?? 'N/A' }}</td></tr>
                        <tr><th>জন্ম তারিখ</th><td>{{ $tecnician->dob ?? 'N/A' }}</td></tr>
                        <tr><th>জাতীয় পরিচয়পত্র</th><td>{{ $tecnician->nid ?? 'N/A' }}</td></tr>
                        <tr><th>পাসপোর্ট নাম্বার</th><td>{{ $tecnician->passport_no ?? 'N/A' }}</td></tr>
                        <tr><th>বর্তমান ঠিকানা</th><td>{{ $tecnician->present_address ?? 'N/A' }}</td></tr>
                        <tr><th>স্থায়ী ঠিকানা</th><td>{{ $tecnician->permanent_address ?? 'N/A' }}</td></tr>
                        <tr><th>কাজে যোগদানের তারিখ</th><td>{{ $tecnician->join_date ?? 'N/A' }}</td></tr>
                        <tr><th>কাজের ধরণ</th><td>{{ $tecnician->Type_of_work ?? 'N/A' }}</td></tr>
                    </tbody>
                </table>
<div class="col-md-4 text-center">
                <a href="{{ url('admin/tecnician/list') }}" class="btn btn-secondary rounded-pill">
                    <i class="fa fa-arrow-left"></i> ফিরে যান
                </a>
            </div>
            </div>
        </div>

    </div>
</div>

<style>
    .card.shadow-lg {
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        padding: 25px;
    }
    table.table-bordered th, table.table-bordered td {
        vertical-align: middle;
        padding: 12px 15px;
    }
    table.table-bordered th {
        width: 35%;
        background-color: #f8f9fa;
        font-weight: 500;
    }
    .btn-rounded, .rounded-pill {
        border-radius: 50px;
    }
</style>
@endsection
