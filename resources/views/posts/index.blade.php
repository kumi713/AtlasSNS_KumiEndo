<x-login-layout>


  <h2>新規投稿</h2>
    <div id="post-form-container">
      <!-- ① POST送信の開始タグ（送信先のルートを指定） -->
    {{ Form::open(['route' => 'posts.store', 'method' => 'POST', 'class' => 'post-form']) }}
    @csrf
      <div class="post-form">
        <!-- ユーザーアイコン -->
        <div class="form-input-area">
          <!-- 投稿用のテキストエリア -->
            {{ Form::textarea('post', null, [
                'class' => 'form-control-textarea', 
                'placeholder' => '投稿内容を入力してください。',
                'rows' => '3'
            ]) }}
    {{Form::close()}}
        </div>
        {{Form::hidden('user_id',auth()->user()->id)}}
            {{ Form::submit('投稿する', ['class' => 'submit-btn']) }}
      </div>
    </div>
    @foreach ($posts as $post)
    <div class="post-card">
      <div class="post-main">
        <div class="post-header">
          <td>{{ $post->user_id }}</td>
          <td>{{ $post->updated_at }}</td>
        </div>
        <div class="post-body">
          <td>{{ $post->post }}</td>
        </div>
        <div class="post-actions">
          <td><a class="btn edit-btn">更新</a></td>
          <td><a class="btn delete-btn">削除</a></td>
        </div>
      </div>
    </div>
    @endforeach

</x-login-layout>