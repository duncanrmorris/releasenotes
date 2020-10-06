@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'release-notes'
])

@section('content')
    <div class="content">
    @include('layouts.alerts')

        <div class="row">

            <div class="col-md-12 text-white">
                @markdown($file->body)

               
            </div>
        </div>

    </div>

        
@endsection

@push('scripts')
   
@endpush