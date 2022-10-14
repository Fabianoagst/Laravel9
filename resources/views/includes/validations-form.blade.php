@if ($errors->any())
    @foreach($errors->all() as $error)
        <li class='error'>
            {{$error}}
        </li>
    @endforeach
@endif