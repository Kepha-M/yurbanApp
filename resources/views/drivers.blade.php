@extends('layouts.app')

{{-- Content section --}}
<link href="{{asset('css/styles.css')}}" rel="stylesheet"/>

                    <!-- Styles / Scripts -->
                    <script src="{{asset('js/scripts.js')}}"></script>

@section('content')
<div class="bg-gray-50 text-black/100 dark:bg-black dark:text-white/0">
<div class="table-responsive">
    <h6>All registered 2024 Drivers</h6><br>

    
        <div class="row align-content-center">
            <form method="POST" action="">
                <label class="form-label h-20">County:</label>
                <select > 
                <option> </option>
                <option value="Naiobi">Nairobi</option>
                <option value="Thika">Thika</option>
                <option value="nakuru">Nakuru</option>
                <option value="mombasa">Mombasa</option>
                <option value="eldoret">Eldoret</option>
                <option value="narok">Narok</option>
                </select>
                <label class="form-label h-20">Sub-county:</label>
                <select > 
                <option> </option>
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
            <th>Driver ID Number</th>
            <th>Driver Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </tr>
        </thead>
        <tbody>
            @foreach($drivers as  $driver)
            
            <tr>
                <td class="py-1"> 
                    {{$driver->id}}
                </td>
                <td>
                    {{$driver->id_number}}
                </td>
                <td>
                    {{$driver->name}}
                </td>
                <td>
                    
                        {{$driver->email}}
                    
                </td>
                <td>
                    
                    {{$driver->phone_number}}
                
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection