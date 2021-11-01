<div id="popup" class="modal fade popup-markforged justify-content-center align-items-center" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Interested in 3D Printing?</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body d-flex" style="padding-bottom: 50px;">
        <div data-form-block-id="3f2617e1-65ad-e911-a987-000d3a3702ca"></div>
        <div id="d0dRJlc7HEFk4D7CpcTsyH39-d0kO2qQ-Qs57GbM0qhY"></div>
      </div>
      <div class="modal-footer">
        <a href="#" class="never-show text-sm text-center"><i class="fa fa-window-close" aria-hidden="true"></i> Never show this again</a>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  var popup_date = new Date();
  var popup_showTimes = 1;
  var popup_shown = 0;
  var popup_settimer = false;
  if(!Cookies.get('mf-v-tm')){
    popup_date = new Date();
    Cookies.set('mf-v-tm', popup_date, { path: '/', expires: 1 });
    popup_settimer = true;
  }else{
    popup_date = Cookies.get('mf-v-tm');
  }

  if(Cookies.get('shown')){
   popup_shown = Cookies.get('shown');
  }else{
   Cookies.set('shown', popup_shown, { path: '/', expires: 1 });
  }
  if((popup_shown < popup_showTimes) && !Cookies.get('never-show-popup')){
    var diff = new Date(new Date()) - new Date(popup_date);
    var seconds = Math.floor(diff/1000);
    var minutes = Math.floor(seconds/60);
    seconds = seconds % 60;
    var hours = Math.floor(minutes/60);
    minutes = minutes % 60;

    if(minutes < 1){
      minutes = 1;
    }
    if(minutes > 3){
      minutes = 3;
    }
    if(popup_settimer){
      minutes = 3;
    }
    setTimeout(function(){
      $('#popup').modal('show');
      popup_shown = parseInt(popup_shown) + 1;
      Cookies.set('shown', popup_shown, { path: '/', expires: 1 });
      Cookies.set('mf-v-tm', new Date(), { path: '/', expires: 1 });
    }, minutes*60000);
  }

  $('.never-show').click(function(){
    Cookies.set('never-show-popup', true, { path: '/', expires: 31 });
    $('#popup').modal('hide');
  });
});
</script>
