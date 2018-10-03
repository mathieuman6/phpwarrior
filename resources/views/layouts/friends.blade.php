<div class="card">
    <div class="card-header">Ajouter un ami</div>
    <div class="card-body">
        <form class="form-inline">
            <div class="div-group text-center">
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudonyme" />
                <button class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header">Amis</div>
    <div class="card-body">
        @if($friends != null)
            @foreach($friends as $friend)
                <div>
                    {{ $friend->pseudo }}
                </div>
            @endforeach
        @endif
    </div>
</div>
