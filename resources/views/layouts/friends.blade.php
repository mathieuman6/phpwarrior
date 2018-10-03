<div class="card">
    <div class="card-header">Ajouter un ami</div>
    <div class="card-body">
        <form class="form-inline" method="POST" action="{{ route('friend.add') }}">
            @csrf
            <div class="div-group text-center">
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudonyme" />
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>

<br>

@php($askFriend = false)
@if($friends != null)
    @foreach($friends as $friend)
        @if(!$friend->accepted)
            @php($askFriend = true)
        @endif
    @endforeach
@endif

@if($askFriend)
    <div class="card">
        <div class="card-header">Demandes d'amis</div>
        <div class="card-body">
            @if($friends != null)
                @foreach($friends as $friend)
                    @php($friendUser = $friend->getFriend($user))
                <div class="form form-inline">
                    <div class="form-group">
                        <input type="text" value="{{ $friendUser->pseudo }}" class="form-control" disabled>&nbsp;
                        <a class="btn btn-danger" href="{{ route('friend.refuse', [$friend->id]) }}">✖</a>&nbsp;
                        <a class="btn btn-success" href="{{ route('friend.accept', [$friend->id]) }}">✔</a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
    <br>
@endif

<div class="card">
    <div class="card-header">Amis</div>
    <div class="card-body">
        @php($hasFriend = false)
        @if($friends != null)
            @foreach($friends as $friend)
                @if($friend->accepted)
                    @php($hasFriend = true)
                    @php($friend = $friend->getFriend($user))
                    <div>
                        {{ $friend->pseudo }}
                    </div>
                @endif
            @endforeach
        @endif
        @if(!$hasFriend)
            <div class="text-center">
                <h5>Vous n'avez pour le<br> moment pas d'amis</h5>
            </div>
        @endif
    </div>
</div>
