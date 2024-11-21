@extends('layouts.app')

{{-- Content section --}}
<link href="{{asset('css/styles.css')}}" rel="stylesheet"/>

                    <!-- Styles / Scripts -->
                    <script src="{{asset('js/scripts.js')}}"></script>

@section('content')
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
<div class="table-responsive">
    <h6>Ride Requests as today </h6>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>SN.</th>
            <th>Customer Name</th>
            <th>Driver Name</th>
            <th>County</th>
            <th>Request Date</th>
        </tr>
        </thead>
        <tbody>
            @foreach($rides as  $ride)
            
            <tr>
                <td class="py-1"> 
                    {{$ride->id}}
                </td>
                <td>
                    {{$ride->id_number}}
                </td>
                <td>
                    {{$ride->name}}
                </td>
                <td>
                    
                        {{$ride->location}}
                    
                </td>
                <td>
                    
                    {{$ride->created_at}}
                
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection