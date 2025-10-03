@extends('backend.master')

@section('content')
<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="container-fluid mt-5">

            <div class="row">
                <div class="col-lg-8 offset-lg-2">

                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">নতুন টেকনিশিয়ান তৈরি করুন</h4>
                            <a href="{{ url('/admin/tecnician/list') }}" class="btn btn-light btn-sm">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>

                        <div class="card-body">
                            <form action="{{ url('/admin/tecnician/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- নাম -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">নাম</label>
                                        <input type="text" class="form-control" name="name">
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <!-- ফোন নাম্বার -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">ফোন নাম্বার</label>
                                        <input type="text" class="form-control" name="phone">
                                          @error('phone')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <!-- জন্ম তারিখ -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">জন্ম তারিখ</label>
                                        <input type="date" class="form-control" name="dob">
                                         @error('dob')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <!-- এনআইডি -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">এনআইডি নাম্বার</label>
                                        <input type="text" class="form-control" name="nid">
                                         @error('nid')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <!-- পাসপোর্ট (অপশনাল) -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">পাসপোর্ট নাম্বার (অপশনাল)</label>
                                        <input type="text" class="form-control" name="passport_no">
                                    </div>
                                    <!-- বর্তমান ঠিকানা -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">বর্তমান ঠিকানা</label>
                                        <input type="text" class="form-control" name="present_address">
                                         @error('present_address')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <!-- স্থায়ী ঠিকানা -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">স্থায়ী ঠিকানা</label>
                                        <input type="text" class="form-control" name="permanent_address">
                                         @error('permanent_address')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <!-- জয়েন তারিখ -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">জয়েন তারিখ</label>
                                        <input type="date" class="form-control" name="join_date">
                                         @error('join_date')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <!-- কাজের ধরন -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">কাজের ধরন</label>
                                        <input type="text" class="form-control" name="Type_of_work">
                                         @error('Type_of_work')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <!-- পাসপোর্ট সাইজ ছবি -->
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">পাসপোর্ট সাইজ ছবি</label>
                                        <input type="file" class="form-control" name="image">
                                         @error('image')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-success px-5">
                                        <i class="fa fa-save"></i> টেকনিশিয়ান তৈরি করুন
                                    </button>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .card.shadow-lg {
        border-radius: 8px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }
    .form-control {
        border-radius: 6px;
        border: 1px solid #CED4DA;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        background-color: transparent;
    }
    .form-control:focus {
        border-color: #0D6EFD;
        box-shadow: 0 2px 8px rgba(13,110,253,0.3);
        outline: none;
    }
    .card-header.bg-primary {
        font-size: 1.1rem;
        border-bottom: none;
    }
</style>
@endsection
