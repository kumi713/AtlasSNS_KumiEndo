<x-login-layout>

    <h2>ユーザー一覧</h2>
    {{-- 検索フォーム --}}
    <form action="{{ route('users.search') }}" method="GET">
        <input type="text" name="keyword" value="{{ $keyword ?? '' }}" placeholder="ユーザー名">
        <button type="submit">検索</button>
    </form>
<div class="user-list">
    @foreach ($users as $user)
     <div class="user-item">
      <div class="user-info">
       <img src="" alt="icon" class="user-icon">
        <p>{{ $user->username}}</p>
        {{ Form::open(['route' => ['follow.users',$user->id], 'method' => 'POST', 'class' => 'follow-form']) }}
            <!-- フォローしたい相手のユーザーIDを送信 -->
            {{ Form::submit('フォロー', ['class' => 'follow-btn']) }}
      </div>
     </div>
    @endforeach
</div>
        {{Form::close()}}

</x-login-layout>
