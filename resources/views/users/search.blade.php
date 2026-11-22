<x-login-layout>

    <h2>ユーザー一覧</h2>
    {{-- 検索フォーム --}}
    <form action="{{ route('users.search') }}" method="GET">
        <input type="text" name="keyword" value="{{ $keyword ?? '' }}" placeholder="ユーザー名">
        <button type="submit">検索</button>
    </form>

    @foreach ($users as $user)
        <p>{{ $user->username}}</p>
    @endforeach

</x-login-layout>
