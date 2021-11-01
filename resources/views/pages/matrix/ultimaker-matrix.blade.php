@include('scripts.dataTables')
@push('after-styles')
<style>
  #matrix td {
    vertical-align: top;
    font-size: 13px;
    line-height: 15px;
  }

  #matrix ul,
  #matrix p {
    font-size: 13px;
    line-height: 16px;
  }

  #matrix tr td:first-child {
    font-size: 18px;
    font-weight: 700;
    text-align: left;
  }

  .nav-tabs .nav-link.active {
    border-bottom: 0;
  }

  .card-header-tabs {
    margin-bottom: 0;
    flex-wrap:nowrap;
  }

  .list-group.list-group-flush .list-group-item {
    background-color: transparent;
  }
</style>
@endpush

<section class="p-0">
  <div class="container-fluid">
    <div class="row">
      {{-- <div class="section-title center-block mx-auto">
        <div class="h2" style="font-weight:400;">Ultimaker</div>
        <div class="h5 text-center">Product Family</div>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div> --}}
      <div class="section-block w-100">
        <div class="card text-center rounded-0">
          <div class="card-header p-0">
            <ul class="nav nav-tabs card-header-tabs card-header-tabs--white no-gutters">
              <li class="nav-item w-100">
                <a class="nav-link active d-flex flex-column align-items-center" data-toggle="tab" href="#ultimaker-s5"
                  role="tab" aria-controls="ultimaker-s5" aria-selected="true"><img class="d-none d-md-block"
                    src="{{asset('storage/images/ultimaker/ultimaker-s5/ULTIMAKER_S5_PRO_BUNDLE_02.png')}}" />
                  <div class="h5 mt-3">Ultimaker S5 Pro Bundle</div>
                </a>
              </li>
              <li class="nav-item w-100">
                <a class="nav-link d-flex flex-column align-items-center" data-toggle="tab" href="#ultimaker-s3-tab"
                  role="tab" aria-controls="ultimaker-s3-tab" aria-selected="false"><img class="d-none d-md-block"
                    src="{{asset('storage/images/ultimaker/other/Ultimaker-2-Plus-scaled.png')}}" />
                  <div class="h5 mt-3">Ultimaker S3</div>
                </a>
              </li>
              {{-- <li class="nav-item w-100">
                <a class="nav-link d-flex flex-column align-items-center" data-toggle="tab" href="#ultimaker-2-tab" role="tab"
                  aria-controls="ultimaker-2-tab" aria-selected="false"><img class="d-none d-md-block"
                    src="{{asset('storage/images/ultimaker/other/Ultimaker-2-Plus-scaled.png')}}" />
                  <div class="h5 mt-3">Ultimaker 2</div>
                </a>
              </li> --}}
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="ultimaker-s5" role="tabpanel" aria-labelledby="ultimaker-s5">
              <div class="d-flex flex-column px-3 text-left">
                <img class="m-auto d-sm-block d-xs-block d-md-none mb-3" width="280px" height="auto"
                  src="{{asset('storage/images/ultimaker/other/Ultimaker-S5-scaled.png')}}" />
                <div class="mt-3">
                  <div class="h1">
                    Ultimaker S5 Pro Bundle<a class="ml-4 small" href="{{route('ultimaker-s5')}}">Learn More >></a>
                  </div>
                  <div class="h6">
                    Powerful, reliable, versatile 3D printing
                  </div>
                  <p class="lead h6">The Ultimaker S5 combines dual extrusion, advanced connectivity, and an open
                    filament system with a large build volume for an office-friendly 3D printer, offering unrivaled
                    quality and reliability at scale.</p>
                </div>
              </div>
              <div class="d-flex px-3 text-left overflow-auto ">
                <table
                  class="table table-inverse table-striped overflow-auto table-responsive overflow-auto table-responsive"
                  style="min-width:500px">
                  <thead>
                    <th></th>
                    <th></th>
                  </thead>
                  <tr>
                    <td>
                      <span class="lead">Features</span>
                    </td>
                    <td>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Large build volume</li>
                        <li class="list-group-item">Color touchscreen</li>
                        <li class="list-group-item">Filament flow sensors detect end of filament</li>
                        <li class="list-group-item">Abrasive-resistant feeder ready to print composite materials</li>
                        <li class="list-group-item">Closed front optimizes airflow</li>
                        <li class="list-group-item">Material-matching swappable print cores</li>
                        <li class="list-group-item">Reliable dual extrusion with water-soluble support</li>
                        <li class="list-group-item">Heated glass and aluminum build plates (aluminum plate available
                          fall 2018)</li>
                        <li class="list-group-item">Active bed leveling</li>
                        <li class="list-group-item">Optimized cooling</li>
                        <li class="list-group-item">Built-in material recognition system</li>
                        <li class="list-group-item">Wi-Fi, Ethernet and USB connectivity</li>
                        <li class="list-group-item">Manage printers with Cura Connect</li>
                        <li class="list-group-item">Optimized Ultimaker Cura material profiles</li>
                        <li class="list-group-item">Ultimaker Cura integration with industry-standard software,
                          including SolidWorks, Siemens
                          NX, and Autodesk</li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Air Manager Key Features</span>
                      <p>
                        <a href="https://www.cadmicro.com/resources/54/ultimaker-air-manager-data-sheet" class="text-primary">Download the detailed Air Manager Data Sheet</a><br />
                        To learn more about the 3D Printer emissions and indoor air quality, download this whitepaper.
                      </p>
                    </td>
                    <td>
                      <table class="table table-striped p-0 m-0">
                        <tr>
                          <td>EPA Filter</td>
                          <td>
                            <p>Removes up to 95% of UFPs</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Controlled extraction</td>
                          <td>
                            <p>Inside-out airflow optimized for filtering and print quality</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Enhanced Safety</td>
                          <td>
                            <p>Physical barrier prevents reaching inside the printer</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Optimized for your application</td>
                          <td>
                            <p>Detects material being used and adjusts airflow</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Easy Setup</td>
                          <td>
                            <p>Printer detects when the Air Manager is connected</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Smart Monitoring</td>
                          <td>
                            <p>Printer tracks filter usage and prompts replacement</p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Material Station Key Features</span>
                    </td>
                    <td>
                      <table class="table table-striped p-0 m-0">
                        <tr>
                          <td>Fast and Easy loading</td>
                          <td>
                            <p>Front-facing bay for up to six material reduces loading time to a few seconds</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Uninterrupted printing</td>
                          <td>
                            <p>Sensors detect when on material spool ends and automatically loads the next</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Humidity Control</td>
                          <td>
                            <p>Intelligent atmospheric management keeps relative humidity below 40%</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Easy Setup and monitoring</td>
                          <td>
                            <p>NFC Material auto-recognition and seamless integration with Ultimaker Software</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Composite materials compatible</td>
                          <td>
                            <p>Print parts with high strength and unique properties</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Limitless configurations</td>
                          <td>
                            <p>Keep your most-used materials ready to print when you need – Ultimaker and third-party
                              filaments</p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Printer Size</span>
                    </td>
                    <td>
                      <p class="copy-description"><span class="type">Ultimaker S5</span><br> 495 x 457 x 520 mm</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Build Volume</span>
                    </td>
                    <td>
                      <p class="copy-description"><span class="type">Ultimaker S5</span><br>
                        330 x 240 x 300 mm<br> <span class="type">(left or right nozzle, or dual extrusion)</span></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Layer resolution</span>
                    </td>
                    <td>
                      <p>
                        0.25 mm nozzle: 150 to 60 micron<br>
                        0.4 mm nozzle: 200 to 20 micron<br>
                        0.8 mm nozzle: 600 to 20 micron
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Supported materials</span>
                    </td>
                    <td>
                      <p class="copy-description">
                        PLA, Tough PLA, Nylon, ABS, CPE, CPE+, PC, TPU 95A, PP, PVA, Breakaway
                      </p>
                      <p class="copy-description"><span class="type">In the box</span><br>
                        Ultimaker Tough PLA Black, 750 g<br>
                        Ultimaker PVA, 750 g
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Nozzle diameter</span>
                    </td>
                    <td>
                      <p>0.25 mm<br>0.4 mm<br>0.8 mm</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Nozzle temperature</span>
                    </td>
                    <td>
                      <p>180 °C to 280 °C</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Build plate</span>
                    </td>
                    <td>
                      <p class="copy-description"><span class="type">Ultimaker S5</span><br>20 to 140 °C heated glass
                        and aluminum build plates with active leveling</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Connectivity</span>
                    </td>
                    <td>
                      <p class="copy-description"><span class="type">Ultimaker S5</span><br>Wi-Fi, LAN, or USB port</p>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="ultimaker-s3-tab" role="tabpanel" aria-labelledby="ultimaker-s3-tab">
              <div class="row px-2">
                <div class="col-lg-12 px-1 mx-0">
                  <div class="d-flex flex-column text-left">
                    <img class="m-auto d-sm-block d-xs-block d-md-none mb-3" width="280px" height="auto"
                      src="{{asset('storage/images/ultimaker/other/Ultimaker-3-scaled.png')}}" />
                    <div class="mt-3 mb-1">
                      <div class="h1">Ultimaker S3</div>
                      <p class="lead h6">Engineered for efficiency, reliability and precision, the Ultimaker 3 and S3 features
                        dual extrusion with water-soluble support, advanced connectivity and an open filament system</p>
                    </div>
                  </div>
                  <div class="d-flex text-left overflow-auto">
                    <table class="table table-inverse table-striped overflow-auto table-responsive"
                      style="min-width:500px">
                      <thead>
                        <th></th>
                        <th></th>
                      </thead>
                      <tr>
                        <td>
                          <span class="lead">Features</span>
                        </td>
                        <td>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Network connectivity: Print via Wi-Fi, LAN, cloud,or with USB
                            </li>
                            <li class="list-group-item">Touch screen: Effortless operation via an award-winning user
                              interface</li>
                            <li class="list-group-item">Advanced active leveling: Reliable first-layer adhesion, enables
                              unattended use</li>
                            <li class="list-group-item">Front enclosure: Improved printing environment for better print
                              results</li>
                            <li class="list-group-item">Flow sensor: Stay informed when filament runs out to increase
                              print success</li>
                            <li class="list-group-item">Easy setup and monitoring: With NFC material recognition and
                              internal camera</li>
                            <li class="list-group-item">Composite materials compatible: Print parts with high strength
                              and unique properties</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="lead">Printer Size</span>
                        </td>
                        <td>
                          <p><span class="type">Ultimaker 3 Extended</span><br> 394 x 489 x 637 mm (inc. Bowden tubes
                            and spool holder)</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="lead">Build Volume</span>
                        </td>
                        <td>
                          <p>230 x 190 x 200 mm</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="lead">Layer resolution</span>
                        </td>
                        <td>
                          <p>
                            0.25 mm nozzle: 150 - 60 micron<br>
                            0.4 mm nozzle: 200 - 20 micron<br>
                            0.6 mm nozzle: 300 - 20 micron<br>
                            0.8 mm nozzle: 600 - 20 micron<br>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="lead">Supported materials</span>
                        </td>
                        <td>
                          <p class="copy-description">
                            Use Ultimaker materials, any third-party filament, or access material profiles from leading
                            brands. Choose from these materials or any other open source materials.
                          </p>
                          <p class="copy-description">PLA, Tough PLA, ABS, PC, CPE, Nylon, PP, Igus Iglidur | 180 – PF,
                            CPE+, DSM Arnitel ID 2060 HT, TPU 95A, DuPont Hytrel 3D4100FL, Owens Corning XSTRAND
                            GF30-PA6, DSM Novamind ID 1030 CF10<br />
                            Support Materials: Ultimaker PVA, Ultimaker Breakaway</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="lead">Nozzle diameter</span>
                        </td>
                        <td>
                          <p>0.4 mm (included)</p>
                          <p>0.25 mm (sold separately)<br>0.6 mm (sold separately)<br>0.8 mm (sold separately)</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="lead">Build plate</span>
                        </td>
                        <td>
                          <p class="copy-description">Heated glass build plate (20 – 140’c)</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="lead">Connectivity</span>
                        </td>
                        <td>
                          <p class="copy-description">WiFi, LAN or USB port/p>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="tab-pane fade" id="ultimaker-2-tab" role="tabpanel" aria-labelledby="ultimaker-2-tab">
              <div class="d-flex flex-column px-3 text-left">
                <img class="m-auto d-sm-block d-xs-block d-md-none mb-3" width="280px" height="auto"
                  src="{{asset('storage/images/ultimaker/other/Ultimaker-2-Plus-scaled.png')}}" />
                <div class="mt-3">
                  <div class="h1">
                    Ultimaker 2+<a class="ml-4 small" href="{{route('ultimaker-2')}}">Learn More >></a>
                  </div>
                  <div class="h6">
                    and Ultimaker 2 Extended+
                  </div>
                  <p class="lead h6">Thanks to its support of a wide range of materials, it’s suitable for a huge
                    variety of applications, from prototypes to customized tools.</p>
                </div>
              </div>
              <div class="d-flex px-3 text-left overflow-auto">
                <table class="table table-inverse table-striped overflow-auto table-responsive" style="min-width:500px">
                  <thead>
                    <th></th>
                    <th></th>
                  </thead>
                  <tr>
                    <td>
                      <span class="lead">Features</span>
                    </td>
                    <td>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Swappable nozzles</li>
                        <li class="list-group-item">Powerful 35W heater</li>
                        <li class="list-group-item">Geared feeder</li>
                        <li class="list-group-item">Heated build plate</li>
                        <li class="list-group-item">Up to 20 micron layer resolution</li>
                        <li class="list-group-item">Optimized Ultimaker Cura material profiles</li>
                        <li class="list-group-item">Ultimaker Cura integration with industry-standard software,
                          including SolidWorks, Siemens
                          NX, and Autodesk</li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Printer Size</span>
                    </td>
                    <td>
                      <p class="copy-description"><span class="type">Ultimaker 2+</span><br> 342 x 357 x 388 mm</p>
                      <p><span class="type">Ultimaker 2 Extended+</span><br> 342 x 357 x 488 mm</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Build Volume</span>
                    </td>
                    <td>
                      <p class="copy-description"><span class="type">Ultimaker 2+</span><br> 223 x 223 x 205 mm</p>
                      <p><span class="type">Ultimaker 2 Extended+</span><br> 223 x 223 x 305 mm</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Layer resolution</span>
                    </td>
                    <td>
                      <p>
                        0.25 mm nozzle: 150 to 60 micron<br>
                        0.4 mm nozzle: 200 to 20 micron<br>
                        0.6 mm nozzle: 400 to 20 micron<br>
                        0.8 mm nozzle: 600 to 20 micron
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Supported materials</span>
                    </td>
                    <td>
                      <p class="copy-description">
                        PLA, ABS, CPE, CPE+, PC, Nylon, TPU 95A, PP
                      </p>
                      <p class="copy-description"><span class="type">In the box</span><br>
                        Ultimaker PLA Silver, 750 g
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Nozzle diameter</span>
                    </td>
                    <td>
                      <p>0.25 mm<br>0.4 mm<br>0.6 mm<br>0.8 mm</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Nozzle temperature</span>
                    </td>
                    <td>
                      <p>180 °C to 260 °C</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Build plate</span>
                    </td>
                    <td>
                      <p class="copy-description"><span class="type">Ultimaker 2+</span><br>50 to 100 °C heated glass
                        build plate</p>
                      <p><span class="type">Ultimaker 2 Extended+</span><br>50 to 100 °C heated glass build plate</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="lead">Connectivity</span>
                    </td>
                    <td>
                      <p class="copy-description"><span class="type">Ultimaker 2+</span><br>Control panel with SD card
                      </p>
                      <p><span class="type">Ultimaker 2 Extended+</span><br>Control panel with SD card</p>
                    </td>
                  </tr>
                </table>
              </div>
            </div> --}}

          </div>
          <div class="py-4">
              <a href="https://www.cadmicro.com/resources/56/ultimaker-3d-printer-comparison"
                class="btn btn-primary btn-rounded">Download the printer comparison Sheet</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>