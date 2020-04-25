<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- TODO: createとeditで表示するテキストを変更させる -->
                <div class="card-header">{{ __('Create Group') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('groups.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="group__name" class="col-md-4 col-form-label text-md-right">{{ __('Group Name') }}</label>
                            <div class="col-md-6">
                                <input id="group__name" type="text" class="form-control @error('group__name') is-invalid @enderror" name="group__name" required autofocus>
                                @error('group__name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user__index" class="col-md-4 col-form-label text-md-right">{{ __('User Search') }}</label>
                            <div class="col-md-6">
                                <input id="user__index" type="text" class="form-control @error('user__index') is-invalid @enderror" required autofocus>
                            </div>
                        </div>

                        <!-- TODO: hidden_fieldでユーザー情報を追加 -->
                        <!-- TODO: 複数のユーザーを追加出来るようにname属性に"[]"を付ける -->

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
