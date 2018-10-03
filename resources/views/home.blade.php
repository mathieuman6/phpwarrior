@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            @include('layouts.friends')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dernières Conversations</div>

                <div class="card-body">
                    @if($conversations != null)
                        @foreach($conversations as $conversation)
                            <div>
                                Conversation
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
