<x-login-layout>


  <h2>機能を実装していきましょう。</h2>
<div class="post-form-container">
    <!-- 1. フォームの開始宣言（投稿を保存するストア処理へのルートを指定） -->
    {{ Form::open(['url' => '/posts', 'method' => 'POST', 'class' => 'post-form']) }}
        
        <!-- ユーザーアイコン（ログイン中のアバターなど） -->
        <div class="form-user-icon">
            <img src="{{ asset('images/user-icon-red.png') }}" alt="User Icon">
        </div>

        <!-- 2. 投稿内容の入力エリア（テキストエリア） -->
        <div class="form-input-area">
            {{ Form::textarea('new_post', null, [
                'class'       => 'form-control-textarea',
                'placeholder' => '投稿内容を入力してください。',
                'rows'        => 2,
                'maxlength'   => 150
            ]) }}
        </div>

        <!-- 3. 送信ボタン（紙飛行機アイコンのボタン） -->
        <div class="form-submit-area">
            <button type="submit" class="submit-btn">
                <!-- FontAwesomeなどのアイコンフォントや画像、SVGをここに入れます -->
                <i class="fas fa-paper-plane"></i> 
            </button>
        </div>

    {{ Form::close() }}
</div>

</div>



</x-login-layout>
