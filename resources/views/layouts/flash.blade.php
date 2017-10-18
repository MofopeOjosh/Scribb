@if (Session::has('message'))
    <div class="flashalerts">
        <div data-rep-role="alert" class="alert-box {{ Session::get('type') }}">
             <p class="alert-content">{{ Session::get('message')}}</p>
             <a href="#display" onclick="hide();" class="close">&times;</a>
        </div>
    </div>
@endif
<script>
        $('.flashalerts').delay(4000).hide(0);
        function hide(){
            $('.flashalerts').hide(0);
        }
</script>