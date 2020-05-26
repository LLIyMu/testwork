$(function () {
    $('body').on('submit', '.myform', function (e) {
        e.preventDefault();
        var url = $('.myform').attr('action');
        var dat = $('this');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });
        var data = $(this).serialize();
        $.ajax({
           url: url,
           method: 'post',
           data: data,
           success: function (response) {
               var form = JSON.parse(response.data);
               $('.alert-danger').hide();
               $('.alert-success').html(response.success);
               $('.alert-success').show();
               $('#example1 tbody').append(
                   '<tr>\n' +
                   '<td>'+form['name']+'</td>\n' +
                   '<td>'+form['latitude']+'</td>\n' +
                   '<td>'+form['longitude']+'</td>\n' +
                   '<td>'+form['population']+'</td>\n' +
                   '</tr>'
               );
           },
            error: function (request, status, error) {
                json = $.parseJSON(request.responseText);
                $('.alert-danger').html('');
                for (var key in json.errors) {
                    $('.alert-danger').append('<p>'+json.errors[key]+'</p>');
                }
                $('.alert-success').hide();
                $('.alert-danger').show();
            }
        });
    })
});
