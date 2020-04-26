<div class="side-bar">
    <div class="side-bar__header">
        <div class="user-info">
            <div class="user-info__name">
                {{ $user->name }}
            </div>
            <ul class="user-info__menu">
                <li class="new-group">
                    <!-- TODO: 新規グループ作成画面へのルーティングを設定 -->
                    <a href="{{ route('groups.create') }}">
                        <i class="fa fa-edit"></i>
                    </a>
                </li>
                <li class="edit-user">
                    <a href="{{ route('users.edit', $user->id) }}">
                        <i class="fa fa-cog"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="side-bar__body">
        <!-- TODO: ユーザーの所属するグループの一覧をループ処理で表示 -->
        <div class="group">
            <!-- TODO: メッセージ一覧画面へのルーティングを設定 -->
            <a href="#">
                <!-- TODO: グループ名を表示 -->
                <div class="group__name">グループ名</div>
            </a>
            <!-- TODO: グループの最後のメッセージを表示 -->
            <div class="group__message">メッセージ</div>
        </div>
        <div class="group">
            <a href="#">
                <div class="group__name">グループ名</div>
            </a>
            <div class="group__message">メッセージ</div>
        </div>
        <div class="group">
            <a href="#">
                <div class="group__name">グループ名</div>
            </a>
            <div class="group__message">メッセージ</div>
        </div>
        <div class="group">
            <a href="#">
                <div class="group__name">グループ名</div>
            </a>
            <div class="group__message">メッセージ</div>
        </div>
        <div class="group">
            <a href="#">
                <div class="group__name">グループ名</div>
            </a>
            <div class="group__message">メッセージ</div>
        </div>
        <div class="group">
            <a href="#">
                <div class="group__name">グループ名</div>
            </a>
            <div class="group__message">メッセージ</div>
        </div>
        <div class="group">
            <a href="#">
                <div class="group__name">グループ名</div>
            </a>
            <div class="group__message">メッセージ</div>
        </div>
        <div class="group">
            <a href="#">
                <div class="group__name">グループ名</div>
            </a>
            <div class="group__message">メッセージ</div>
        </div>
        <div class="group">
            <a href="#">
                <div class="group__name">グループ名</div>
            </a>
            <div class="group__message">メッセージ</div>
        </div>
        <div class="group">
            <a href="#">
                <div class="group__name">グループ名</div>
            </a>
            <div class="group__message">メッセージ</div>
        </div>
    </div>
</div>
