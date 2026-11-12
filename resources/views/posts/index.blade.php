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
    <div class=post-card>
      <div class=post-body>
      @foreach ($posts as $post)
      <tr>
        <<td>{{ $post->post }}</td>
        <<td>{{ $post->updated_at }}</td>
      </tr>
      @endforeach
      </div>
    </div>

</x-login-layout>