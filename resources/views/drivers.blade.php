@extends('layouts.app')

{{-- Content section --}}
<link href="{{asset('css/styles.css')}}" rel="stylesheet"/>

                    <!-- Styles / Scripts -->
                    <script src="{{asset('js/scripts.js')}}"></script>

@section('content')
<div class="bg-gray-50 text-black/100 dark:bg-black dark:text-white/0">
<div class="table-responsive">
    <h6>All registered 2024 Drivers</h6><br>
    <label>Total:-{{{DB::table ('drivers')->count()}}}</label>

    
        <div class="row align-content-center">
            <form method="POST" action="">
                <label class="form-label h-20">County:</label>
                <select > 
                    @foreach ($drivers as $location)
                    <option value="{{$location->location}}">{{$location->location}}</option>
                        
                    @endforeach
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
            <th>County</th>
        </tr>
        </thead>
        <tbody>
            @foreach($drivers as  $list)
            
            <tr>
                <td class="py-1"> 
                    {{$list->id}}
                </td>
                <td>
                    {{$list->id_number}}
                </td>
                <td>
                    {{$list->name}}
                </td>
                <td>
                    
                        {{$list->email}}
                    
                </td>
                <td>
                    
                    {{$list->phone_number}}
                
            </td>
            <td>{{$list->location}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection