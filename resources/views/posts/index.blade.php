<x-login-layout>


  <h2>新規投稿</h2>
    <div id="post-form-container">
      <!-- ① POST送信の開始タグ（送信先のルートを指定） -->
    {{ Form::open(['route' => 'posts.store', 'method' => 'POST', 'class' => 'post-form']) }}
      <div class="post-form">
        <!-- ユーザーアイコン -->
        <div class="form-input-area">
          <!-- 投稿用のテキストエリア -->
            {{ Form::textarea('content', null, [
                'class' => 'form-control-textarea', 
                'placeholder' => '投稿内容を入力してください。',
                'rows' => '3'
            ]) }}
        </div>
            {{ Form::submit('投稿する', ['class' => 'submit-btn']) }}
      </div>
    </div>

</x-login-layout>