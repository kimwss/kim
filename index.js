<script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function toggle(){
        $.getJSON("php/get.php",function (res) {
            if(res['flag']){
                $('li.toggle').hide();
                $('li.toggle1').show();
                $('#nicheng').html(res['nc'])
            }else {
                $('li.toggle').show();
                $('li.toggle1').hide();
            }
        });
    }
    toggle();
    $('#form_login').submit(function (e) {
        e.preventDefault();
        var data=$('#form_login').serialize();
        $.getJSON('php/login.php',data,function (res) {
            if(res==3){
                toggle();
                $('#loginer').modal('hide');
            }else if(res==2){
                $('#info').html('password error')
            }else {
                $('#info').html('error')
            }
        })
    });
    $('#logout').click(function () {
        confirm('logout');
        $.getJSON('php/logout.php',function (res) {
            if(res)toggle();
        })
    })
    </script>
