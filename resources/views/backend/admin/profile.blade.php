@extends('backend.master')

@section('content')
<div class="main-wrapper">
    <div class="page-wrapper">
        <div class="container-fluid mt-5">

            <div class="row justify-content-center">
                <div class="col-md-8">

                    {{-- Profile Card --}}
                    <div class="card shadow-lg mb-4 border-0 rounded-lg">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">অ্যাডমিন প্রোফাইল</h4>
                            <a href="{{ url('/admin/dashboard') }}" class="btn btn-light btn-sm">
                                <i class="fa fa-arrow-left"></i> ড্যাশবোর্ডে ফেরত যান
                            </a>
                        </div>

                        <div class="card-body text-center">
                            {{-- Admin Image --}}
                            <img src="{{ asset('backend/images/admin/' . (auth()->user()->image ?? 'default.png')) }}" 
                                 alt="Admin Image"
                                 class="rounded-circle mb-3 shadow"
                                 style="height: 120px; width: 120px; object-fit: cover;">

                            <h5>{{ auth()->user()->name }}</h5>
                            <p class="text-muted">{{ auth()->user()->email }}</p>

                            {{-- Update Profile Form --}}
                            <form action="{{ url('/admin/profile/update') }}" method="POST" enctype="multipart/form-data" class="mt-4 text-start">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">নাম</label>
                                    <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">ইমেইল</label>
                                    <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">প্রোফাইল ছবি</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success px-4">
                                        <i class="fa fa-save"></i> প্রোফাইল আপডেট করুন
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Password Change Card --}}
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-header bg-warning text-dark">
                            <h5 class="mb-0">🔑 পাসওয়ার্ড পরিবর্তন করুন</h5>
                        </div>
                        <div class="card-body text-start">
                            <form action="{{ url('/admin/profile/password/update') }}" method="POST">
                                @csrf
                                
                                <div class="mb-3">
                                    <label class="form-label">বর্তমান পাসওয়ার্ড</label>
                                    <input type="password" name="current_password" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">নতুন পাসওয়ার্ড</label>
                                    <input type="password" name="new_password" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">নতুন পাসওয়ার্ড পুনরায় লিখুন</label>
                                    <input type="password" name="new_password_confirmation" class="form-control" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-warning px-4">
                                        <i class="fa fa-key"></i> পাসওয়ার্ড পরিবর্তন করুন
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
    .btn-success, .btn-warning {
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .btn-success:hover {
        background-color: #198754;
    }
    .btn-warning:hover {
        background-color: #e0a800;
        color: #fff;
    }
</style>
@endsection
