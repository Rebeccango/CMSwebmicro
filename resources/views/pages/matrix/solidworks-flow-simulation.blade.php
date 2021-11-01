@include('scripts.dataTables')
<div class="p-3">
  <h2 class="text-left">SOLIDWORKS FLOW SIMULATION</h2>
  <div class="h5 text-left">Feature Matrix</div>
</div>
<table class="table table-striped product-matrix display no-wrap mt-3" width="100%" id="solidworks-flowsim-matrix">
  <thead>
    <tr>
      <th></th>
      <th class="w-100"></th>
      <th>SOLIDWORKS Flow Simulation</th>
      <th>HVAC Module</th>
      <th>Electronics Cooling Module</th>
      <th style="display:none"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td>Ease of Use</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>SOLIDWORKS Simulation is fully embedded in SOLIDWORKS 3D CAD for ease of use and data integrity. Using the
          same user
          interface (UI) paradigms as SOLIDWORKS with toolbars, menus, and context-sensitive right-click menus, ensures
          rapid
          familiarization. Built-in tutorials and searchable online help aid learning and troubleshooting.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Design Data Reuse</td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td></td>
      <td>
        <p>SOLIDWORKS Simulation supports SOLIDWORKS materials and configurations for easy analysis of multiple loads
          and product
          configurations.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Multi-Parameter Optimization</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Conduct an optimization study for more than one input variable using Design of Experiments and Optimization
          parametric
          study. Run a calculation of design points and find optimum solutions.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>SOLIDWORKS Flow Simulation Capabilities </td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td></td>
      <td>
        <ul>
          <li>Compressible gas/liquid and incompressible fluid flows</li>
          <li>Subsonic, transonic, and supersonic gas flows</li>
          <li>Ability to take into account heat transfer by conduction in fluid, solid and porous media. Could be with
            or
            without
            conjugate heat transfer (Fluid-Solid) and with/without heat resistance (Solid-Solid).</li>
        </ul>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Material Database</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>SOLIDWORKS Flow Simulation: A customizable engineering database enables users to model and include specific
          solid,
          fluid, and fan behaviors.</p>
        <p>SOLIDWORKS Flow Simulation and HVAC Module: The HVAC engineering database extension adds specific HVAC
          components.</p>
        <p>SOLIDWORKS Flow Simulation and Electric Cooling Module: The Electronic Cooling extended engineering database
          includes
          specific electronic components and their thermal characteristics.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Internal</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Calculate the impact of fluid flow through your product.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>External</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Calculate the impact of fluid flow around your product</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>2D – 3D</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>By default, all calculations are on a full 3D domain. Where applicable, simulations can also be carried out
          in a 2D
          plane to reduce run time without effecting accuracy.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Heat Conduction in Solids</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>The calculation of temperature change in the product’s solid geometry is an option selection. Conjugate heat
          transfer
          through convection, conduction, and radiation can be created. Calculations can include thermal contact
          resistance.</p>
        <p>SOLIDWORKS Flow Simulation: Calculate pure heat conduction in solids to identify problems where no fluid
          exists for fast
          solutions.</p>
        <p>SOLIDWORKS Flow Simulation and HVAC Module: Include materials that are semitransparent to radiation, for
          accurate
          solutions where the product’s thermal load is influenced by transparent materials.</p>
        <p>SOLIDWORKS Flow Simulation and Electrical Cooling Module: Simulate specific electronics device effects</p>
        <ul class="text-left">
          <li>Thermoelectric coolers</li>
          <li>BoHeat pipes</li>
          <li>NJoule heating</li>
          <li>PCB lay-ups</li>
        </ul>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Gravity</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Include fluid buoyancy important for natural convection, free surface, and mixing problems.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Rotation</td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td></td>
      <td>
        <p>Ability to simulate moving/rotating surfaces or part to calculate the effect of rotating/moving devices.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Free Surface</td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td></td>
      <td>
        <p>Lets you simulate flows with a freely moving interface between two immiscible fluids, such as gas-liquid,
          liquid-liquid,
          gas-non-Newtonian liquid.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Symmetric</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <ul class="text-left">
          <li>Simulation solution times can be reduced by taking advantage of symmetry.</li>
          <li>Cartesian symmetry can be applied to x, y, or z planes.</li>
          <li>NJoule heating</li>
          <li>Sector period icy allows users to calculate a sector of a cylindrical flow.</li>
        </ul>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Gases</td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td></td>
      <td>
        <p>Calculation of both ideal and real flows for subsonic, transonic, and supersonic conditions.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Liquids</td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td></td>
      <td>
        <ul class="text-left">
          <li>Liquid flows can be described as incompressible, compressible, or as non-Newtonian (as oil, blood, sauce,
            etc.).</li>
          <li>For water flows, the location of cavitation can also be determined.</li>
        </ul>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Steam</td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td></td>
      <td>
        <p>For flows that include steam water vapor condensation and relative humidity is calculated.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Boundary Layer Description</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Laminar, turbulent, and transitional boundary layers are calculated using a modified Law of the Wall
          approach.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Mixing Flows</td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td></td>
      <td>
        <p>Immiscible Mixtures: perform flow of any pair of fluids belonging to gases, liquids, or non-Newtonian
          liquids.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Non Newtonian Fluids</td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td></td>
      <td>
        <p>Determine the flow behavior of Non-Newtonian liquids, such as oil, blood, sauce, etc.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Flow Conditions</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Problems can be defined by velocity, pressure, mass, or volume flow conditions.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Thermal Conditions</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Thermal characteristics for fluids and solids can be set locally and global for accurate setup.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Wall Conditions</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Local and global wall thermal and roughness conditions can be set for accurate setup.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Porous Components</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Ability to treat some model components as porous media with the fluid flow through them, or simulating them
          as fluid
          cavities with a distributed resistance to fluid flow.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Visualization</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Visualize the stress and displacement of your assembly with customizable 3D plots. Animate the response of
          your assembly
          under loads to visualize deformations, vibration modes, contact behavior, optimization alternatives, and flow
          trajectories.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Results Customization</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Provides the standard results components for a structural analysis, such as von Mises stresses,
          displacements,
          temperature, etc. The intuitive equation-driven result plot enables you to customize the post-processing of
          structural
          analysis results for better understanding and interpretation of product behavior.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Communication & Reporting</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Create and publish customized reports for communicating simulation results and collaborating with eDrawings®.
        </p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Two-phase (Fluid + Particles) Flows</td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <p>Ability to calculate (with the post-processor) in the obtained fields of results, motions of the specified
          particles
          (Particle Studies) or flows of the specified extraneous fluids (Tracer Study) in the fluid flow, which does
          not affect
          this fluid flow.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Noise Prediction (Steady State and Transient)</td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td></td>
      <td>
        <p>Noise prediction using a fast Fourier Transformation (FFT) algorithm that converts a time signal to the
          complex
          frequency domain for transient analysis.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>HVAC Conditions</td>
      <td></td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td>
        <p>Include materials semi-permeable to radiation for accurate thermal analysis.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Tracer Study</td>
      <td></td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td>
        <p>HVAC applications vary widely. Considerations for meeting requirements for thermal performance and quality
          include
          airflow optimization, temperature, air quality, and containment control.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Comfort Parameters</td>
      <td></td>
      <td><i class="far fa-check-square"></i></td>
      <td></td>
      <td>
        <p>Understand and evaluate thermal comfort levels for multiple environments using thermal comfort factor
          analysis.</p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>Electronic Conditions</td>
      <td></td>
      <td></td>
      <td><i class="far fa-check-square"></i></td>
      <td>
        <ul class="text-left">
          <li>Heat Pipes</li>
          <li>Thermal Joints</li>
          <li>Two-resistor Components</li>
          <li>Printed Circuit Boards</li>
          <li>Thermoelectric Coolers</li>
        </ul>
      </td>
    </tr>
  </tbody>
</table>

@push('after-scripts')
<script>
  $(function () {
        $(document).ready(function () {
            $('#solidworks-flowsim-matrix').DataTable({
                responsive: {
                    details: {
                        type: 'column'
                    }
                },
                ordering: false,
                bPaginate: false,
                bFilter: false,
                bInfo: false,
                columnDefs: [{
                        responsivePriority: 1,
                        targets: 1
                    },
                    {
                        targets: 0,
                        className: 'control',
                        orderable: false
                    },
                    {
                        targets: -1,
                        className: 'none'
                    },
                ]
            });

            $('#solidworks-flowsim-matrix tbody tr td:not(.control)').click(function () {
                $(this).parent('tr').find('td.control').click();
            })
        });
    })
</script>
@endpush