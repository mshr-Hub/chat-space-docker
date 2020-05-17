<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- TODO: createとeditで表示するテキストを変更させる -->
                <div class="card-header">{{ __('Create Group') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('groups.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="group__name" class="col-md-4 col-form-label text-md-right">{{ __('Group Name') }}</label>
                            <div class="col-md-6">
                                <input id="group__name" type="text" class="form-control @error('group__name') is-invalid @enderror" name="groups[name]" placeholder="グループ名を入力して下さい" required autofocus>
                                @error('group__name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_search_field" class="col-md-4 col-form-label text-md-right">{{ __('User Search') }}</label>
                            <div class="col-md-6">
                                <input id="user_search_field" type="text" class="form-control user__index" name="users[name]" placeholder="追加したいユーザー名を入力して下さい">
                                <!-- ユーザー検索の結果 -->
                                <div id="user_search_result" class="mt-2 pl-1"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="group__user" class="col-md-4 col-form-label text-md-right">{{ __('Group User') }}</label>
                            <div class="col-md-6">
                                <!-- 追加されたユーザー -->
                                <div id="added_user" class="pl-1">
                                    <!-- ログインユーザーをデフォルトで追加 -->
                                    <label for="group__user__{{ $user->id }}" class="col-form-label group__user__name">
                                        <button type="button" class="btn btn-primary rounded-circle p-0 font-weight-bold user-remove">ー</button>
                                        <input id="group__user__{{ $user->id }}" type="hidden" class="form-control" value="{{ $user->id }}" name="group_user[user_id][]" required>
                                        {{ $user->name }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
