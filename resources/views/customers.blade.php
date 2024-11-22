@extends('layouts.app')

{{-- Content section --}}
<link href="{{asset('css/styles.css')}}" rel="stylesheet"/> 

                    <!-- Styles / Scripts -->
                    <script src="{{asset('js/scripts.js')}}"></script>

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
<div class="table-responsive">
    <h6>All registered 2024 customers</h6>
    <div class="row align-content-center">
        <form method="POST" action="">
            <label class="form-label h-20">Date:</label> &nbsp;
            <select > 
            <option> start   date</option>
            </select>
            <select > 
            <option> End date</option>
            <option value="Naiobi">Nairobi</option>
            <option value="Thika">Thika</option>
            <option value="nakuru">Nakuru</option>
            <option value="mombasa">Mombasa</option>
            <option value="eldoret">Eldoret</option>
            <option value="narok">Narok</option>
            </select>
            <button class="btn btn-outline-info">Go...</button>
            
        </form>
    </div>
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