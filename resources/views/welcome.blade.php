@extends('layouts.app')

        <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>

        <!-- Styles / Scripts -->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- Styles -->
       
   @section('content')
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

            
                <div class="row">
                    <h5>Summary</h5><br>
                    <div class="col-md-4 grid-margin stretch-card">
                        
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <div class="media">
                                    <i class="ti-agenda icon-md text-info d-flex align-self-start me-3"></i>
                                    <div class="media-body">
                                        <!--shwowcards-->
                        
                          {{-- Card 2 --}}
                          <button type="button" class="btn btn-primary">
                            Registered Customers <span class="badge bg-secondary">
                                {{DB::table ('customers')->count()}}
                            </span>
                          </button>     <br>
                          <a href="/customers" @class(['p-4', 'font-bold' => true])>Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- card 2 --}}
                    <div class="col-md-4 grid-margin stretch-card">
                        
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <div class="media">
                                    <i class="ti-agenda icon-md text-info d-flex align-self-start me-3"></i>
                                    <div class="media-body">
                                        <!--shwowcards-->
                        
                          {{-- Card 2 --}}
                          <button type="button" class="btn btn-primary">
                            Registered Drivers<span class="badge bg-secondary">
                                {{DB::table ('drivers')->count()}}
                            </span>
                          </button><br>
                          <a href="{{drivers}}" @class(['p-4', 'font-bold' => true])>Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Another --}}
                    
                    <div class="col-md-4 grid-margin stretch-card">
                        
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <div class="media">
                                    <i class="ti-agenda icon-md text-info d-flex align-self-start me-3"></i>
                                    <div class="media-body">
                                        <!--shwowcards-->
                                        <button type="button" class="btn btn-primary">
                                            Successful Rides <span class="badge bg-secondary">
                                                {{DB::table ('rides')->count()}}
                                            </span>
                                          </button><br>
                                          <a href="/rides" @class(['p-4', 'font-bold' => true])>Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
        </div>
@endsection
               
