@include('scripts.dataTables')
<h2 class="text-left">SOLIDWORKS SIMULATION</h2>
<div class="h5 text-left">Feature Matrix</div>
<table class="table table-striped product-matrix display no-wrap mt-3" width="100%" id="matrix">
    <thead>
        <tr>
            <th></th>
            <th class="w-100"></th>
            <th>SOLIDWORKS Simulation Standard</th>
            <th>SOLIDWORKS Simulation Professional</th>
            <th>SOLIDWORKS Simulation Premium</th>
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
                <p>SOLIDWORKS Simulation is fully embedded in SOLIDWORKS 3D CAD for ease of use and data integrity.
                    Using the same user interface (UI) paradigms as SOLIDWORKS with toolbars, menus, and
                    context-sensitive right-click menus, ensures rapid familiarization. Built-in tutorials and
                    searchable online help aid learning and troubleshooting.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Design Data Reuse</td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>SOLIDWORKS Simulation supports SOLIDWORKS materials and configurations for easy analysis of multiple
                    loads and product configurations.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Static Studies</td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>Solve part and assembly structural analysis problems for stress, strain, displacements, and Factors
                    of Safety (FOS). Problems are limited to static loading, elastic linear materials, and small
                    contact displacements. For the solution to be valid, the resulting deformed shape after loading
                    must exhibit small displacements and rotations.</p>
                <p>Premium only: Static studies are extended to incorporate components built up by composites
                    materials. Component setup includes ply orientation and sandwich definition. Results include ply
                    failure index as well as stress and deflections.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Fatigue Studies</td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>Estimate components fatigue life under high-cycle varying loads where the peak stress is below the
                    material yield stress. Cumulative damage theory is used to predict locations and cycles to failure.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Motion Analysis</td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>Use a time-based, rigid body kinematic and dynamic motion tool to calculate the velocities,
                    accelerations, and movements of an assembly under operational loads.</p>
                <p>The motion analysis tool calculates component body and connection loads that can be imported into a
                    Static Study.</p>
                <p>Professional and Premium only: Use an event-based rigid body kinematic and dynamic motion tool to
                    calculate the velocities, accelerations, and movements of an assembly under operational loads where
                    actions and movements are triggered by the location or movement of components.</p>
                <p>The motion analysis tool calculates component body and connection loads that can be imported into a
                    Static Study.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Design Studies</td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>A design study is used to perform wide-ranging “what if” analyses. In a design study, both the
                    parameters of a design (model) and simulation setup (materials, loadings, and fixtures) can be
                    varied to assess the impact of change on the model.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>FEA Modelling</td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>A customizable material library is included with simulation data:</p>
                <ul class="text-left">
                    <li>Parallel computing (multi-core)</li>
                    <li>Batch Run</li>
                </ul>
                <p>Professional and Premium only:</p>
                <ul class="text-left">
                    <li>2D Simplification</li>
                    <li>Plane Stress</li>
                    <li>Plane Strain</li>
                    <li>Axisymmetric</li>
                    <li>Sub-modeling Simulation</li>
                    <li>Sub-Modelling: analyze the structural resistance of a sub model from a main assembly</li>
                </ul>
                <p>Premium only:</p>
                <ul class="text-left">
                    <li>Off-loading computing</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Loads and Restraints</td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <ul class="text-left">
                    <li>Fixtures to prescribe zero or non-zero displacements</li>
                    <li>Force, pressure, and remote structural loads</li>
                    <li>Temperature loading</li>
                    <li>Import Flow/Thermal Loads</li>
                    <li>Load Case Manager: evaluate the effects of various load combinations on your model. (Available on Profession and Premium packages only)</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Assembly Connectivity</td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <ul class="text-left"><li>Component contact</li>
                    <li>Bonded contact condition</li>
                    <li>Node-to-node, surface-to-surface contact condition</li>
                    <li>Shrink Fit condition</li>
                    <li>Virtual Wall condition</li>
                    <li>Self-contact</li>
                    <li>Connectors: bolt, spring, pin, elastic support, and bearing</li>
                    <li>Connectors Safety Check</li>
                </ul><p>Professional and Premium only:</p>

                <ul class="text-left"><li>Edge Weld</li>
                    <li>Thermal contact resistance condition</li>
                    <li>Insulated condition</li>
                    <li>Edge and spot weld connector</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Results</td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>Study results are dependent upon the type of study but are displayed as Contour, Iso-Surface, Surface, and Section plots.</p>
                <p>Quantity point and line distribution given by the probe tool.</p>
                <p>The Design Insight plot shows loaded material.</p>
                <p>FEA results can be compared to test data.</p>
                <p>Deformed shape results can be animated and the animation saved.</p>
                <p>Overlay Simulation results onto SOLIDWORKS graphics.</p>
                <p>SOLIDWORKS Simulation results can be communicated to non-SOLIDWORKS users via eDrawings®, a shareable 3D file format.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Help and Support</td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>In-product tutorials, online help, and knowledge base.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Communication</td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <ul class="text-left">
                    <li>Customizable simulation report</li>
                    <li>eDrawings of Simulation results</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Thermal Analysis</td>
            <td></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>Solve steady-state and transient part and assembly thermal problems for temperature, temperature gradient, and heat flux.</p>
                <p>With the Thermal Analysis completed, you can import temperature loads into a Static Study.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Frequency Studies</td>
            <td></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>Frequency Studies determine a product’s natural modes of vibration which is important for products that experience vibration in their working environment.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Buckling Studies</td>
            <td></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>A possible failure mode for long and slender components is by collapse at a load below material yield stress. The buckling study predicts the components buckling load factor.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Pressure Vessel Studies</td>
            <td></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>Linearized stress, a key for safe pressure design, is calculated in the Pressure Vessel Study.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Topology Studies</td>
            <td></td>
            <td><i class="far fa-check-square"></i></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>Enables you to discover new minimal material design alternatives under linear elastic static loading while still meeting component stress, stiffness and vibrational requirements.</p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Linear Dynamic Studies</td>
            <td></td>
            <td></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>Builds upon the Frequency Study to calculate the stresses due to forcing vibrations and calculating the effects of dynamic loads, impact or shock loading, for linear elastic materials. Study types are:</p>
                <ul class="text-left"><li>Modal Time History Analysis</li>
                    <li>Harmonic Analysis</li>
                    <li>Random Vibration Analysis</li>
                    <li>Response Spectrum Analysis</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Non-Linear Analysis	</td>
            <td></td>
            <td></td>
            <td><i class="far fa-check-square"></i></td>
            <td>
                <p>Non-Linear Analysis lets you analyze complex material behavior, such as post-yield metals, rubbers, and plastics, as well as to account for large deflections and sliding contact-in components.</p>
                <p>Non-Linear Static Study assumes static loads with loads can be sequenced so that the dynamic effects of the varying load do not affect the study. The complex material models in Non-Linear Static Studies can be used to calculate permanent deformation and residual stresses due to excessive loads, as well as predicting performance for components, such as springs and clip fasteners.</p>
                <p>Non-Linear Dynamic Study accounts for the effect of real-time varying loads that are included in calculations and results. In addition to solving non-linear static problems, Non-Linear Dynamic Studies can also solve impact problems.</p>
            </td>
        </tr>
    </tbody>
</table>

@push('after-scripts')
<script>
    $(function () {
        $(document).ready(function () {
            $('#matrix').DataTable({
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

            $('#matrix tbody tr td:not(.control)').click(function () {
                $(this).parent('tr').find('td.control').click();
            })
        });
    })
</script>
@endpush