@extends('backend.master')

@section('content')
<div class="page-wrapper">
    <div class="content">

        <!-- পেজ হেডার -->
        <div class="row mb-3">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">ইনভয়েস তালিকা</h4>
            </div>
            <div class="col-sm-8 col-9 text-right">
                <a href="{{ url('/admin/create-invoice') }}" class="btn btn-light btn-sm">
                    <i class="fa fa-plus"></i> নতুন ইনভয়েস তৈরি করুন
                </a>
            </div>
        </div>

        <!-- সার্চ বার -->
        <div class="mb-4">
            <div class="input-group">
                <span class="input-group-text"><i class="fa fa-search"></i></span>
                <input type="text" id="searchInput" class="form-control" placeholder="সিরিয়াল, ইনভয়েস নাম্বার, গ্রাহক নাম বা জেলা দিয়ে সার্চ করুন">
                <button class="btn btn-secondary" type="button" onclick="clearSearch()">মুছুন</button>
            </div>
        </div>

        <!-- টেবিল -->
        <div class="table-responsive">
            <table id="invoiceTable" class="table table-bordered table-striped text-center align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>সিরিয়াল নাম্বার</th>
                        <th>ইনভয়েস নাম্বার</th>
                        <th>গ্রাহকের নাম</th>
                        <th>ফোন নাম্বার</th>
                        <th>ঠিকানা / জেলা</th>
                        <th>কর্ম</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($invoicelist as $key => $invoice)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $invoice->serial_number }}</td>
                        <td>
                            <a href="{{ url('/admin/invoice-view/' . $invoice->id) }}">
                                {{ $invoice->invoice_number }}
                            </a>
                        </td>
                        <td>{{ $invoice->customer_name }}</td>
                        <td>{{ $invoice->contact_number }}</td>
                        <td>{{ $invoice->district }}</td>
                        <td>
    <a href="{{ url('/admin/invoice-view/'.$invoice->id) }}" class="btn btn-info btn-sm mb-1"><i class="fa fa-eye"></i></a>
    <a href="{{ url('/admin/invoice-edit/'.$invoice->id) }}" class="btn btn-warning btn-sm mb-1"><i class="fa fa-edit"></i></a>
    <a href="{{ url('/admin/invoice-delete/'.$invoice->id) }}" class="btn btn-danger btn-sm mb-1" onclick="return confirm('আপনি কি এই ইনভয়েসটি মুছে ফেলতে চান?')"><i class="fa fa-trash"></i></a>
</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">কোনো ইনভয়েস পাওয়া যায়নি</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
integrity="sha512-papM2zP8iX4VfB7Sdc+Y6K2p1sYBDh/1A3qf1mOXzFf6xVcl5e/cYVZ+6KcQdUj2b1xTCl+jc6BkgHf0uXnYFQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Clean & Stylish CSS -->
<style>
    .table th, .table td {
        vertical-align: middle;
    }
    .table a {
        color: #0d6efd;
        text-decoration: none;
    }
    .table a:hover {
        text-decoration: underline;
    }
    .btn-rounded {
        border-radius: 20px;
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
</style>

<!-- Search Function -->
<script>
    document.getElementById("searchInput")?.addEventListener("keyup", function () {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll("#invoiceTable tbody tr");

        rows.forEach(row => {
            let text = row.innerText.toLowerCase();
            row.style.display = text.includes(filter) ? "" : "none";
        });
    });

    function clearSearch() {
        document.getElementById("searchInput").value = '';
        let rows = document.querySelectorAll("#invoiceTable tbody tr");
        rows.forEach(row => row.style.display = "");
    }
</script>

@endsection
