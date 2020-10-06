@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'release-notes'
])

@section('content')
    <div class="content">
    @include('layouts.alerts')

        <div class="row">

            <div class="col-md-12 text-white">
               <h1>Release Notes Version 1.3</h1>

               
            </div>
        </div>

    </div>

        
@endsection

@push('scripts')
   
@endpush