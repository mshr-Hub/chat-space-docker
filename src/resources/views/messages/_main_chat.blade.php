<div class="main-chat">
    <div class="main-chat__header">
        <div class="summary">
            <h1 class="summary__group">{{ $group->name }}</h1>
            <ul class="summary__member">
                Member:
                @foreach ($group->users as $user)
                    <li class="summary__member__name">{{ $user->name }}</li>
                @endforeach
            </ul>
        </div>
        <a class="rbtn" href="#">
            <div class="rbtn__edit">
                Edit
            </div>
        </a>
    </div>
    <div class="main-chat__body">
        <div class="message-list">
            @foreach ($group->messages as $message)
                <div class="message">
                    <div class="message__header">
                        <p class="message__header__user-name">{{ $message->user->name }}</p>
                        <p class="message__header__sending-time">{{ $message->created_at->format("Y/m/d H:i") }}</p>
                    </div>
                    <div class="message__body">
                        @if ($message->text)
                            <p class="message__text">{{ $message->text }}</p>
                        @endif
                        @if ($message->image)
                            <img class="message__image" src="{{ asset('storage/messages/' . $message->image) }}" alt="" width="300px">
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="main-chat__form">
        <form method="POST" class="message-form" action="{{ route('groups.messages.store', $group->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="input-box">
                <input class="message-form__text" name="text" type="text" placeholder="type a message">
                <label for="image-select">
                    <i class="fa fa-image"></i>
                    <input id="image-select" class="message-form__image" name="image" type="file">
                </label>
            </div>
            <button class="message-form__submit" type="submit">Send</button>
        </form>
    </div>
</div>
