<div class="email-leftbar card">
    <a href="{{route('trial.create')}}" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">Compose</a>
    <div class="mail-list m-t-20">
        <a href="{{route('trial.index')}}" class="active">Inbox <span class="ml-1">({{$total}})</span></a>
        <a href="#">Starred</a>
        <a href="#">Important</a>
        <a href="#">Draft</a>
        <a href="#">Sent Mail</a>
        <a href="#">Trash</a>
    </div>
</div>
