<x-main>

  <ul>
    @foreach($users as $user)
      <li>
        {{ $user['name'] }} - <span class="active">{{ $user['email'] }}</span>
      </li>
    @endforeach
  </ul>

</x-main>
