$(function () {

    sendMessage();

    var message_list = $('.message-list');
    var message_form = $('.message-form');
    var send_btn = $('.message-form__submit');

    function buildMessage(message) {
        var message_text = message.text ? `<p class="message__text">${ message.text }</p>` : ``;
        var message_image = message.image ? `<img class="message__image" src="/storage/messages/${ message.image })" alt="" width="300px">` : ``;
        var html = `<div class="message">
                        <div class="message__header">
                            <p class="message__header__user-name">${ message.user.name }</p>
                            <p class="message__header__sending-time">${ message.created_at }</p>
                        </div>
                        <div class="message__body">
                            ${ message_text }
                            ${ message_image }
                        </div>
                    </div>`;
        return html
    }

    function scrollBottom() {
        var target = $('.message').last();
        var position = target.offset().top + message_list.scrollTop();
        message_list.animate(
            { scrollTop : position }, 300, 'swing'
        );
    }

    function sendMessage() {
        send_btn.on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type : 'POST',
                url : message_form.attr('action'),
                data : new FormData(message_form),
                cache : false,
                dataType : 'json',
            })
            .done(function(message) {
                var build_message = buildMessage(message);
                message_list.append(build_message);
                scrollBottom();
            })
            .fail(function() {
                alert('メッセージを入力して下さい');
            })
            .always(function() {
                send_btn.prop('disabled');
            })
            message_form.reset();
            ;
        })
        ;
    }
});
