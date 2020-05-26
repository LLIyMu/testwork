

    <div class="alert alert-danger" style="display: none">
        <ul>
            @foreach($errors->all() as $error)
            <li style="list-style: none">{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    <div class="alert alert-success" style="display: none">

    </div>

