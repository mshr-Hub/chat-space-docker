<div class="main-chat">
    <div class="main-chat__header">
        <div class="summary">
            <!-- TODO: 登録グループ名を反映させる -->
            <h1 class="summary__group">グループ名</h1>
            <ul class="summary__member">
                Member:
                <!-- TODO: グループに所属するメンバーをループ処理で表示させる -->
                <li class="summary__member__name">メンバー1</li>
                <li class="summary__member__name">メンバー2</li>
                <li class="summary__member__name">メンバー3</li>
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
            <!-- TODO: グループのメッセージ情報をループ処理で表示 -->
            <div class="message">
                <div class="message__header">
                    <!-- TODO: メッセージのユーザー名を表示 -->
                    <p class="message__header__user-name">masa</p>
                    <!-- TODO: メッセージのCTIMEを表示 -->
                    <p class="message__header__sending-time">2020/4/1(Wed) 12:00:00</p>
                </div>
                <div class="message__body">
                    <!-- TODO: メッセージの内容（テキスト、または画像） -->
                    <p>こんにちは！</p>
                </div>
            </div>
            <div class="message">
                <div class="message__header">
                    <p class="message__header__user-name">masa</p>
                    <p class="message__header__sending-time">2020/4/1(Wed) 13:00:00</p>
                </div>
                <div class="message__body">
                    <p>働いてえらい！</p>
                </div>
            </div>
            <div class="message">
                <div class="message__header">
                    <p class="message__header__user-name">masa</p>
                    <p class="message__header__sending-time">2020/4/1(Wed) 13:00:00</p>
                </div>
                <div class="message__body">
                    <p>働いてえらい！</p>
                </div>
            </div>
            <div class="message">
                <div class="message__header">
                    <p class="message__header__user-name">masa</p>
                    <p class="message__header__sending-time">2020/4/1(Wed) 13:00:00</p>
                </div>
                <div class="message__body">
                    <p>働いてえらい！</p>
                </div>
            </div>
            <div class="message">
                <div class="message__header">
                    <p class="message__header__user-name">masa</p>
                    <p class="message__header__sending-time">2020/4/1(Wed) 13:00:00</p>
                </div>
                <div class="message__body">
                    <p>働いてえらい！</p>
                </div>
            </div>
            <div class="message">
                <div class="message__header">
                    <p class="message__header__user-name">masa</p>
                    <p class="message__header__sending-time">2020/4/1(Wed) 13:00:00</p>
                </div>
                <div class="message__body">
                    <p>働いてえらい！</p>
                </div>
            </div>
            <div class="message">
                <div class="message__header">
                    <p class="message__header__user-name">masa</p>
                    <p class="message__header__sending-time">2020/4/1(Wed) 13:00:00</p>
                </div>
                <div class="message__body">
                    <p>働いてえらい！</p>
                </div>
            </div>
            <div class="message">
                <div class="message__header">
                    <p class="message__header__user-name">masa</p>
                    <p class="message__header__sending-time">2020/4/1(Wed) 13:00:00</p>
                </div>
                <div class="message__body">
                    <p>働いてえらい！</p>
                </div>
            </div>
            <div class="message">
                <div class="message__header">
                    <p class="message__header__user-name">masa</p>
                    <p class="message__header__sending-time">2020/4/1(Wed) 13:00:00</p>
                </div>
                <div class="message__body">
                    <p>働いてえらい！</p>
                </div>
            </div>
            <div class="message">
                <div class="message__header">
                    <p class="message__header__user-name">masa</p>
                    <p class="message__header__sending-time">2020/4/1(Wed) 14:00:00</p>
                </div>
                <div class="message__body">
                    <p>
                        今日も<br>
                        働いて<br>
                        えらい！
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="main-chat__form">
        <form class="message-form" action="#">
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
