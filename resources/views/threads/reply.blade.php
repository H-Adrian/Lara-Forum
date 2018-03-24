<div class="panel panel-default">
    <div class="panel-heading">

        <a href="#"> {{ $reply->owner->name }} </a>
        {{ $reply->created_at }} said
    </div>

    <div class="panel-body">
        {{ $reply->body }}
    </div>
</div>