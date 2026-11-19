        <div id="head">
            <h1><a><img src="images/atlas.png"></a></h1>
            <div id="header-right">

                <!-- 1. 全体を .dropdown で囲む -->
                <div class="dropdown" id="user-menu">

                <!-- 2. クリックして開閉するボタンを追加 -->
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton">
                    {{ auth()->user()->username}}さん <span class="caret"></span>
                </button>

                <!-- 3. ご提示のメニュー部分 -->
                <ul class="dropdown-menu">
                    <li><a href="http://127.0.0.1:8000/top">HOME</a></li>
                    <li><a href="http://127.0.0.1:8000/profile">プロフィール編集</a></li>
                    <li><a href="http://127.0.0.1:8000/login">ログアウト</a></li>
                </ul>

                </div>

                <!-- 4. クリックで開閉させるJavaScript（bodyの閉じタグ直前などに配置） -->
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const dropdown = document.getElementById('user-menu');
                    const button = document.getElementById('dropdownMenuButton');

                    // ボタンをクリックしたら .open クラスを付け外しする
                    button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    dropdown.classList.toggle('open');
                    });

                    // メニューの外側をクリックしたら閉じる
                    document.addEventListener('click', function() {
                    dropdown.classList.remove('open');
                    });
                });
                </script>

            </div>
        </div>
