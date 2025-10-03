@extends('backend.master')

@section('content')

<div class="page-wrapper">
    <div class="content">

        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-3">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">টেকনিশিয়ান তালিকা</h4>
                        <a href="{{ url('/admin/tecnician/create') }}" class="btn btn-light btn-sm">
                            <i class="fa fa-plus"></i> টেকনিশিয়ান তৈরি করুন
                        </a>
                    </div>

                    <div class="card-body">

                        <!-- 🔍 Search Bar -->
                        <div class="mb-4">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                                <input type="text" id="searchInput" class="form-control" placeholder="নাম, ফোন নাম্বার, ঠিকানা, টেকনিশিয়ান আইডি দিয়ে সার্চ করুন">
                                <button class="btn btn-secondary" type="button" onclick="clearSearch()">মুছুন</button>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table id="tecnicianTable" class="table table-bordered table-striped text-center align-middle">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>টেকনিশিয়ান আইডি</th>
                                        <th>ছবি</th>
                                        <th>নাম</th>
                                        <th>ফোন নাম্বার</th>
                                        <th>ঠিকানা</th>
                                        <th>জাতীয় পরিচয়পত্র</th>
                                        <th>কাজের ধরণ</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tecnicians as $tecnician)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $tecnician->tecnician_id }}</td>
                                        <td>
                                            <img src="{{ asset('backend/images/tecnician/'.$tecnician->image) }}" alt="" class="img-fluid rounded-circle" style="height:50px; width:50px;">
                                        </td>
                                        <td>{{ $tecnician->name }}</td>
                                        <td>{{ $tecnician->phone }}</td>
                                        <td>{{ $tecnician->present_address }}</td>
                                        <td>{{ $tecnician->nid }}</td>
                                        <td>{{ $tecnician->Type_of_work }}</td>
                                        <td>
                                            <a href="{{ url('/admin/tecnician/view/'.$tecnician->id) }}" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('/admin/tecnician/edit/'.$tecnician->id)}}" class="btn btn-warning btn-sm mb-1"><i class="fa fa-edit"></i></a>
                                              @if (Auth::user()->role == "admin")
                                            <a href="{{ url('/admin/tecnician/delete/'.$tecnician->id) }}" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Are you sure you want to delete this Tecnician?')"><i class="fa fa-trash"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- 🔍 Search Function -->
<script>
    document.getElementById("searchInput").addEventListener("keyup", function () {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll("#tecnicianTable tbody tr");

        rows.forEach(row => {
            let text = row.innerText.toLowerCase();
            row.style.display = text.includes(filter) ? "" : "none";
        });
    });

    function clearSearch() {
        document.getElementById("searchInput").value = '';
        let rows = document.querySelectorAll("#tecnicianTable tbody tr");
        rows.forEach(row => row.style.display = "");
    }
</script>

<!-- 🔹 Clean & Stylish CSS -->
<style>
    .table th, .table td {
        vertical-align: middle;
    }
    .table img {
        box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    }
    .card.shadow-lg {
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }
    .input-group .form-control {
        border-radius: 6px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    .input-group .form-control:focus {
        border-color: #0D6EFD;
        box-shadow: 0 2px 8px rgba(13,110,253,0.2);
        outline: none;
    }
    .input-group .input-group-text {
        background-color: transparent;
        color: inherit;
    }
    /* Remove table head background color */
    .table thead th {
        background-color: transparent;
        color: inherit;
    }
    @media (max-width: 991px) {
        .container-fluid {
            padding-left: 10px;
            padding-right: 10px;
        }
    }
</style>

@endsection
