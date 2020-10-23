
<!-- footer start form here -->
  <section class=" footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">{{($sources->title)}}</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-2">
                <a class="btn btn-warning btn-lg p-4" title="google" href="{{$sources->google}}" terget="_black"><i class="fa fa-google"></i></a>
            </div>
            <div class="col-md-2 text-center">
                <a  class="btn btn-warning btn-lg p-4" title="youtube" href="{{$sources->youtube}}" terget="_black"><i class="fa fa-youtube"></i></a>
            </div>
            <div class="col-md-2 text-center">
                <a  class="btn btn-warning btn-lg p-4" title="php" href="{{$sources->php}}" terget="_black"><i class="fab fa-php"></i></a>
            </div>
            <div class="col-md-2 text-center">
                <a  class="btn btn-warning btn-lg p-4" title="laravel" href="{{$sources->laravel}}" terget="_black"><i class="fab fa-laravel"></i></i></a>
            </div>
            <div class="col-md-2 text-center">
                <a  class="btn btn-warning btn-lg p-4" title="react" href="{{$sources->react}}" terget="_black"><i class="fab fa-react"></i></i></a>
            </div>
            <div class="col-md-2 text-right">
                <a  class="btn btn-warning btn-lg p-4" title="stackoverflow" href="{{$sources->stackoverflow}}" terget="_black"><i class="fab fa-stack-overflow"></i></i></a>
            </div>
        </div>

      <div class="row text-light mt-5">
        <div class="col-md-8">
          <h3>Contact ME</h3>
           <p>Address: {{$contacts->address}} <br> Mobile:{{$contacts->phone}} <br> E-mail: {{$contacts->email}}</p>
        </div>
        {{-- col-md-8 end --}}
        <div class="col-md-4">
          <h3 class="text-right" style="margin-right:26px">Follow ME</h3>
          <div class="social text-right">
          <ul>
            <li><a href="{{$contacts->facebook}}" terget="_black"><i class="fa fa-facebook"></i></a></li>
            <li><a href="{{$contacts->twitter}}" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="{{$contacts->linkedin}}"target="_black" ><i class="fa fa-linkedin"></i></a></li>
            <li><a href="{{$contacts->youtube}}" target="_black" ><i class="fa fa-youtube-square"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
          </ul>
        </div>
        {{-- social end --}}
        </div>
        {{-- col-md-4 --}}
      </div>
      <div class="col-md-12">
        <div class="text-center mt-5 text-light">
            <p class="h3"> Copyright &copy <script>document.write(new Date().getFullYear())</script> developed by CodingDuck </p>
        </div>
      </div>
      </div>
      {{-- container end --}}
  </section>
  <!-- footer section end here -->




  <script src="{{asset('public')}}/frontend/js/jquery-3.4.1.slim.min.js"></script>
  <script src="{{asset('public')}}/frontend/js/scripts.js"></script>
  <script src="{{asset('public')}}/frontend/js/popper.min.js"></script>
  <script src="{{asset('public')}}/frontend/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow15.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>
  <noscript>Not seeing a <a href="https://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>



</body>
</html>
