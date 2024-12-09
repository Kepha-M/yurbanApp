@extends('layouts.app')

{{-- Content section --}}
<link href="{{asset('css/styles.css')}}" rel="stylesheet"/>

                    <!-- Styles / Scripts -->
                    <script src="{{asset('js/scripts.js')}}"></script>

@section('content')
<div class="bg-gray-50 text-black/100 dark:bg-black dark:text-white/0">
<div class="table-responsive">
    <h6>All registered 2024 Drivers</h6><br>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>SN.</th>
            <th>Driver ID Number</th>
            <th>Driver Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>County</th>
        </tr>
        </thead>
      </table>
</div>
</div>
@endsection
