$(function() {
    // メッセージの非同期送信
    ajaxStoreMessage();

    function buildMessage(message) {
        var message_text = message.text ? `<p class="message__text">${ message.text }</p>` : ``;
        var message_image = message.image ? `<img class="message__image" src="/storage/messages/${ message.image }" alt="" width="300px">` : ``;
        var message_created = getFormatDate(message.created_at);
        return `<div class="message">
                    <div class="message__header">
                        <p class="message__header__user-name">${ message.user.name }</p>
                        <p class="message__header__sending-time">${ message_created }</p>
                    </div>
                    <div class="message__body">
                        ${ message_text }
                        ${ message_image }
                    </div>
                </div>`;
    }

    function getFormatDate(message_created) {
        var dt = new Date(message_created);
        var y = dt.getFullYear();
        var m = ("00" + (dt.getMonth()+1)).slice(-2);
        var d = ("00" + dt.getDate()).slice(-2);
        var h = dt.getHours();
        var i = dt.getMinutes();
        var result = y + "/" + m + "/" + d + " " + h + ":" + i;
        return result;
    }

    // function scrollMessageListBottom() {
    //     var target = $('.main-chat__body');
    //     var position = $('.message').last().offset().top + target.scrollTop();
    //     target.animate(
    //         {scrollTop: position}, 300, 'swing'
    //     );
    // }

    function appendMessage(message) {
        $('.message-list').append(message);
    }

    function resetMessageForm() {
        $('#message-form')[0].reset();
    }

    function ajaxSetUp() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }

    function ajaxStoreMessage() {
        $('#message-form').on('submit', function(e) {
            e.preventDefault();
            ajaxSetUp();
            $.ajax({
                url:         $(this).attr('action'),
                type:        'POST',
                data:        new FormData(this),
                dataType:    'json',
                processData: false,
                cache:       false,
                contentType: false
            })
            .done(function(data) {
                resetMessageForm();
                appendMessage(buildMessage(data));
                // scrollMessageListBottom();
            })
            .fail(function(data) {
                resetMessageForm();
                alert('メッセージを入力してください。');
            })
            .always(function() {
                $('.message-form__submit').prop('disabled', false);
            })
        });
    }
});
