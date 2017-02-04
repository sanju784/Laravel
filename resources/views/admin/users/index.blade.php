@foreach($users as $user)
  <li>{!!$user['name']!!} from {!!$user['add']!!}</li>
@endforeach