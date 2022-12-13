<!-- SELECTOR DE TEMAS -->
<div id="switcher">
    <div class="switcher box-color dark-white text-color" id="sw-theme">
        <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
            <i class="fa fa-gear"></i>
        </a>
        <div class="box-header">
            <h2>Theme Switcher</h2>
        </div>
        <div class="box-divider"></div>
        <div class="box-body">
            <p class="hidden-md-down">
                <label class="md-check m-y-xs" data-target="folded">
                    <input type="checkbox">
                    <i class="green"></i>
                    <span class="hidden-folded">Folded Aside</span>
                </label>
                <label class="md-check m-y-xs" data-target="boxed">
                    <input type="checkbox">
                    <i class="green"></i>
                    <span class="hidden-folded">Boxed Layout</span>
                </label>
            </p>
            <p>Themes:</p>
            <div data-target="bg" class="row no-gutter text-u-c text-center _600 clearfix">
                <label class="p-a col-sm-6 light pointer m-0">
                    <input type="radio" name="theme" value="" hidden>
                    Light
                </label>
                <label class="p-a col-sm-6 grey pointer m-0">
                    <input type="radio" name="theme" value="grey" hidden>
                    Grey
                </label>
                <label class="p-a col-sm-6 dark pointer m-0">
                    <input type="radio" name="theme" value="dark" hidden>
                    Dark
                </label>
                <label class="p-a col-sm-6 black pointer m-0">
                    <input type="radio" name="theme" value="black" hidden>
                    Black
                </label>
            </div>
        </div>
    </div>

</div>
<!-- / -->

<!-- ############ LAYOUT END-->

</div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="/libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
<script src="/libs/jquery/tether/dist/js/tether.min.js"></script>
<script src="/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
<script src="/libs/jquery/underscore/underscore-min.js"></script>
<script src="/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="/libs/jquery/PACE/pace.min.js"></script>

<script src="/html/scripts/config.lazyload.js"></script>

<script src="/html/scripts/palette.js"></script>
<script src="/html/scripts/ui-load.js"></script>
<script src="/html/scripts/ui-jp.js"></script>
<script src="/html/scripts/ui-include.js"></script>
<script src="/html/scripts/ui-device.js"></script>
<script src="/html/scripts/ui-form.js"></script>
<script src="/html/scripts/ui-nav.js"></script>
<script src="/html/scripts/ui-screenfull.js"></script>
<script src="/html/scripts/ui-scroll-to.js"></script>
<script src="/html/scripts/ui-toggle-class.js"></script>

<script src="/html/scripts/app.js"></script>

<!-- ajax -->
<script src="/libs/jquery/jquery-pjax/jquery.pjax.js"></script>
<script src="/html/scripts/ajax.js"></script>

<script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>
<script type="text/javascript">

</script>

<!-- endbuild -->
</body>

</html>