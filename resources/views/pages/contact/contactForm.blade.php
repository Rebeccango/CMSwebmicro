@extends('layouts.layout')
@section('title')
Custom Contact Form
@stop
@section('body')
@if(isset($_GET['SUCCESS']))
<img height="1" width="1" style="border-style:none;" alt=""
  src="//www.googleadservices.com/pagead/conversion/1069215812/?label=yjIgCNPYkXEQxODr_QM&amp;guid=ON&amp;script=0" />
@endif
<form data-toggle="validator" name="contactCaptureForm" id="contactCaptureForm"
  action="https://analytics.clickdimensions.com/forms/h/a0iNDYk3ROUvQrAeQBHg" role="form" method="post">
  <div class="modal-body">
    <div class="mCustomScrollbar" data-mcs-theme="dark" style="max-height:500px">
      @if(isset($_GET['SUCCESS']))
      <script>
        Cookies.remove("contactCaptureForm");
      </script>
      <div class="alert alert-success">
        Thank you for submitting a contact request. An agent will respond to you shortly!
      </div>
      @elseif(isset($_GET['ERROR']))
      <div class="alert alert-danger">
        @if(isset($_GET['errorMessage']))
        {{$_GET['errorMessage']}}
        @else
        There was a problem submitting your contact request, please try again later.
        @endif
      </div>
      @endif
      @if(!isset($_GET['SUCCESS']))
      <input type="hidden" id="url" name="url"
        value="{{isset($_GET['url']) ? $_GET['url'] : $_COOKIE["contactCaptureForm"] }}">
      <input type="hidden" id="type" name="type" value="{{$_GET['type']}}">
      <input type="hidden" id="description" name="description"
        value="{{isset($_COOKIE['trainingOpt']) ? $_COOKIE['trainingOpt'] : ''}}">
      @if(isset($_GET['segment']) && !isset($_GET['leadsource']))
      @php $segment = $_GET['segment']; @endphp
      @if($segment == "solidworks")
      <input type="hidden" id="leadsource" name="leadsource" value="8">
      @elseif ($segment == "markforged")
      <input type="hidden" id="leadsource" name="leadsource" value="11">
      @elseif ($segment == "training")
      <input type="hidden" id="leadsource" name="leadsource" value="12">
      @elseif ($segment == "partner")
      <input type="hidden" id="leadsource" name="leadsource" value="17">
      @else
      <input type="hidden" id="leadsource" name="leadsource" value="10">
      @endif
      @else
      <input type="hidden" id="leadsource" name="leadsource" value="10">
      @endif
      <div class="row">
        <div class="form-group required col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label for="firstname">First Name</label>
          <input type="text" required class="form-control" id="firstname" name="firstname" aria-describedby="firstname"
            placeholder="First name" data-error="Your first name is required!">
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group required  col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label for="lastname">Last Name</label>
          <input type="text" required class="form-control" id="lastname" name="lastname" aria-describedby="lastname"
            placeholder="Last name" data-error="Your last name is required!">
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group required  col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <label for="email" class="control-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email"
            data-error="The email is invalid!" required>
          <div class="help-block with-errors"></div>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        <div class="form-group  col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <label for="company" class="control-label">Company (If Applicable)</label>
          <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
          <div class="help-block with-errors"></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        <div class="form-group required col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <label for="postal" class="control-label">Postal Code</label>
          <input type="text" class="form-control" id="postal" name="postal" placeholder="Postal Code"
            data-error="Postal code is required!" required>
          <div class="help-block with-errors"></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        <div class="form-group required col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <label for="phone" class="control-label">Phone Number</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number"
            data-error="Your phone number is required so that we can reach you!" required>
          <div class="help-block with-errors"></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        <div class="form-group required col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <label for="product">Product of Interest</label>
          <select class="form-control" required data-error="You must select your product of interest!" id="product"
            placeholder="Select your product of interest" name="product">
            <option value="">Select your product of interest</option>
            <option value="SolidWorks 3D CAD">SolidWorks 3D CAD</option>
            <option value="SolidWorks Premium">SolidWorks Premium</option>
            <option value="SolidWorks Professional">SolidWorks Professional</option>
            <option value="SolidWorks Composer">SolidWorks Composer</option>
            <option value="SolidWorks Data Management">SolidWorks Data Management</option>
            <option value="SolidWorks Electrical">SolidWorks Electrical</option>
            <option value="SolidWorks Industrial Designer">SolidWorks Industrial Designer</option>
            <option value="SolidWorks PCB">SolidWorks PCB</option>
            <option value="SolidWorks Plastics">SolidWorks Plastics</option>
            <option value="SolidWorks Simulation">SolidWorks Simulation</option>
            <option value="SolidWorks Sustainability">SolidWorks Sustainability</option>
            <option value="HDR Light Studio">HDR Light Studio</option>
            <option value="Simerics">Simerics</option>
            <option value="Markforged">Markforged</option>
            <option value="Onyx One Printer">Onyx One Printer</option>
            <option value="Onyx Pro Printer">Onyx Pro Printer</option>
            <option value="Mark Two Printer">Mark Two Printer</option>
            <option value="Mark X3">Mark X3 Printer</option>
            <option value="Mark X5">Mark X5 Printer</option>
            <option value="Mark X7">Mark X7 Printer</option>
            <option value="HP - Jet Fusion 3D 4200">HP - Jet Fusion 3D 4200</option>
            <option value="Materialise Magics for HP">Materialise Magics for HP</option>
            <option value="Nano Dimension - DragonFly 2020">Nano Dimension - DragonFly 2020</option>
            <option value="Virtalis - Virtual Reality">Virtalis - Virtual Reality</option>
            <option value="IoT">Internet of Things (IoT)</option>
            <option value="Subscription Services">Subscription Services</option>
            <option value="Support">Support</option>
            <option value="Training">Training</option>
            <option value="3dconnexion">3DConnexion SpaceMouse / CADMouse</option>
            <option value="bimdex">BIMDeX</option>
            <option value="bimdex">BigRep 3D Printers</option>
            <option value="meta viewer">Meta Viewer - AR</option>
          </select>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <label for="comments" class="control-label">Comments</label>
          <textarea class="form-control" id="comments" name="comments"
            placeholder="Let us know what you are looking for!"></textarea>
        </div>
      </div>
      @endif
    </div>
  </div>
  </div>
  @if(!isset($_GET['SUCCESS']))
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  @endif
</form>
@stop

@push('after-scripts')
<script>
  jQuery.fn.deserialize = function (data) {
    var f = this,
        map = {},
        find = function (selector) { return f.is("form") ? f.find(selector) : f.filter(selector); };
    //Get map of values
    jQuery.each(data.split("&"), function () {
        var nv = this.split("="),
            n = decodeURIComponent(nv[0]),
            v = nv.length > 1 ? decodeURIComponent(nv[1]) : null;
        if (!(n in map)) {
            map[n] = [];
        }
        map[n].push(v);
    })
    //Set values for all form elements in the data
    jQuery.each(map, function (n, v) {
        find("[name='" + n + "']").val(v);
    })
    //Clear all form elements not in form data
    find("input:text,select,textarea").each(function () {
        if (!(jQuery(this).attr("name") in map)) {
            jQuery(this).val("");
        }
    })
    find("input:checkbox:checked,input:radio:checked").each(function () {
        if (!(jQuery(this).attr("name") in map)) {
            this.checked = false;
        }
    })
    return this;
};

$(function(){
  $('#contactCaptureForm').submit(function(e){
    e.preventDefault;
    Cookies.remove("contactCaptureForm");
    Cookies.set("contactCaptureForm", $('#contactCaptureForm').serialize());
    Cookies.remove("trainingOpt");
    if ($(this).validator('validate').has('.has-error').length ==0) {
      this.submit();
    }

  });
  if (!!Cookies.get('contactCaptureForm')) {
    $('#contactCaptureForm').deserialize(Cookies.get('contactCaptureForm'));
    $('#contactCaptureForm').trigger( "change" );
  }

  $('#product').select2({ width: '95%' });
})
</script>
@endpush