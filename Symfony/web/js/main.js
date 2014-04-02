/**
 * Created by d.myroshnychenko on 28.03.14.
 */
(function( $ ){
    $.fn.gridplugin = function() {
        var host = 'http://sf.local/Symfony/web/app_dev.php';
        $('.delete').each(function() {
            this.onclick = function(){
                var answer = confirm('Are you want delete this record?');
                if(answer){
                    var id = this.id.substr(6);
                    $.ajax({
                        type: 'DELETE',
                        url: host+'/delete/'+id ,
                        cache: false,
                        success: function(html){
                            $('#delete'+id).closest('tr').remove();
                        }
                    });
                }
            }
        });

        $('.edit').each(function() {
            this.onclick = function(){
                var answer = confirm('Are you want edit this record?');
                if(answer){
                    var id = this.id.substr(4);
                    var i = 0;
                    var data = $('#edit'+id).parent().next().nextAll();
                    $('#form_name').val(data[0].innerHTML);
                    $('#form_price').val(data[1].innerHTML);
                    $('#form_description').val(data[2].innerHTML);
                    $('#add_product_form').attr('class', 'edit'+id);
                    $('#add_block').show();
                }
            }
        });

        return;
    };
})( jQuery );

$(document).ready(function(){
    $().gridplugin();

    $('#add_product_btn').click(function(){
        $('#add_product_form').attr('class', 'add');
        $('#form_name').val('');
        $('#form_price').val('');
        $('#form_description').val('');
        $('#add_block').show();
    });

    $('#add_product_form').submit(function(){
        var host = 'http://sf.local/Symfony/web/app_dev.php';
        var msg = $('#add_product_form').serialize();
        if($('#add_product_form').attr('class') == 'add'){
            $.ajax({
                type: 'POST',
                url: host+'/add',
                data: msg,
                cache: false,
                success: function(html){
                    $('#main-table tbody').append(html);
                    $('#add_block').hide();
                    $('').gridplugin();
                }
            });
        } else {
            var edit_id = $('#add_product_form').attr('class');
            $.ajax({
                type: 'POST',
                url: host+'/edit/'+edit_id.substr(4),
                data: msg,
                cache: false,
                success: function(html){
                    $('#'+edit_id.replace('/', '')).closest('tr').replaceWith(html);
                    $('#add_block').hide();
                    $('').gridplugin();
                }
            });
        }
    });
});
