<div class="widget" id="contact-widget">
  <div class="floating-widget">
    <div class="fl-w-toggler" data-toggle="modal" data-target="#contactModal">
      <img src="../../images/icons/technical-support.svg" class="widget-icon" />
      <div class="widget-title">
        CONTACT
      </div>
    </div>
  </div>

  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="container-fluid">
      <div class="modal-dialog" role="document">
        <form class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="contactModalLabel">Contact Request Form</h4>
          </div>
          <div class="modal-body mCustomScrollbar" data-mcs-theme="dark">
            <div class="form-group row">
              <label for="example-text-input" class="col-xs-2 col-form-label">Text</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-xs-2 col-form-label">Search</label>
              <div class="col-xs-10">
                <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-email-input" class="col-xs-2 col-form-label">Email</label>
              <div class="col-xs-10">
                <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-url-input" class="col-xs-2 col-form-label">URL</label>
              <div class="col-xs-10">
                <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
              <div class="col-xs-10">
                <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
              <div class="col-xs-10">
                <input class="form-control" type="password" value="hunter2" id="example-password-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-number-input" class="col-xs-2 col-form-label">Number</label>
              <div class="col-xs-10">
                <input class="form-control" type="number" value="42" id="example-number-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-datetime-local-input" class="col-xs-2 col-form-label">Date and time</label>
              <div class="col-xs-10">
                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-date-input" class="col-xs-2 col-form-label">Date</label>
              <div class="col-xs-10">
                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-month-input" class="col-xs-2 col-form-label">Month</label>
              <div class="col-xs-10">
                <input class="form-control" type="month" value="2011-08" id="example-month-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-week-input" class="col-xs-2 col-form-label">Week</label>
              <div class="col-xs-10">
                <input class="form-control" type="week" value="2011-W33" id="example-week-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-time-input" class="col-xs-2 col-form-label">Time</label>
              <div class="col-xs-10">
                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-color-input" class="col-xs-2 col-form-label">Color</label>
              <div class="col-xs-10">
                <input class="form-control" type="color" value="#563d7c" id="example-color-input">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- <script>
  $(function() {
    $('.floating-widget .fl-w-toggler').click(function() {
      $(this).parents('.widget').addClass("toggled");
      $($(this).data('target')).on('hide.bs.modal', function(e) {
        $(this).parents('.widget').removeClass("toggled");
      }).on('show.bs.modal', function() {
        $('.modal .modal-body').css('overflow-y', 'auto');
        $('.modal .modal-body').css('max-height', $(window).height() * 0.7 - 50);
      });
    });

    $(window).resize(function() {
      $('.modal .modal-body').css('overflow-y', 'auto');
      $('.modal .modal-body').css('max-height', $(window).height() * 0.7 - 50);
    })

    $('.mCustomScrollbar').mCustomScrollbar({
      axis: "y" // horizontal scrollbar
    });
  });
</script> -->
