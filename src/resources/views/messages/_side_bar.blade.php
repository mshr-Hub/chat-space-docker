<div class="side-bar">
    <div class="side-bar__header">
        <div class="user-info">
            <div class="user-info__name">
                {{ $user->name }}
            </div>
            <ul class="user-info__menu">
                <li class="new-group">
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
        @foreach ($user->groups as $group)
        <div class="group">
            <a href="{{ route('groups.messages.index', $group->id) }}">
                <div class="group__name">{{ $group->name }}</div>
            </a>
            <!-- TODO: グループの最後のメッセージを表示 -->
            <div class="group__message">メッセージ</div>
        </div>
        @endforeach
    </div>
</div>
