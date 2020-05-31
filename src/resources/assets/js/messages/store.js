$(function() {
    // メッセージの非同期送信
    // ajaxStoreMessage();

    function buildMessage(message) {
        var message_text = message.text ? `<p class="message__text">${ message.text }</p>` : ``;
        var message_image = message.image ? `<img class="message__image" src="/storage/messages/${ message.image }" alt="" width="300px">` : ``;
        return `<div class="message">
                    <div class="message__header">
                        <p class="message__header__user-name">${ message.user_name }</p>
                        <p class="message__header__sending-time">${ message.created_at }</p>
                    </div>
                    <div class="message__body">
                        ${ message_text }
                        ${ message_image }
                    </div>
                </div>`;
    }

    function scrollMessagesIndexBottom() {
        var message_list = $('.message-list');
        var position = $('.message').last().offset().top + message_list.scrollTop();
        message_list.animate({
            scrollTop: position
        }, 300, 'swing');
    }

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
            })
            .done(function(data) {
                console.log(data.text);
                resetMessageForm();
                var message = buildMessage(data);
                appendMessage(message);
                scrollMessagesIndexBottom();
            })
            .fail(function(data) {
                console.log(data.text);
                resetMessageForm();
                alert('メッセージを入力してください。');
            })
            .always(function() {
                $('.message-form__submit').prop('disabled', false);
            })
        });
    }
});
