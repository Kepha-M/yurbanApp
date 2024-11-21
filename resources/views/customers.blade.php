@extends('layouts.app')

{{-- Content section --}}
<link href="{{asset('css/styles.css')}}" rel="stylesheet"/> 

                    <!-- Styles / Scripts -->
                    <script src="{{asset('js/scripts.js')}}"></script>

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
<div class="table-responsive">
    <h6>All registered 2024 customers</h6>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>SN.</th>
            <th>Customer ID Number</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
        </thead>
        <tbody>
            @foreach($customers as  $customer)
            
            <tr>
                <td class="py-1"> 
                    {{$customer->id}}
                </td>
                <td>
                    {{$customer->id_number}}
                </td>
                <td>
                    {{$customer->name}}
                </td>
                <td>
                    
                        {{$customer->email}}
                    
                </td>
                <td>
                    
                    {{$customer->phone_number}}
                
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection