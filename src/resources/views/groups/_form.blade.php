<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
