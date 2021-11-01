@extends('layouts.layout')
@section('title')
Compare DriveWorksXpress, DriveWorks Solo and DriveWorks Pro – Design Automation Software for SOLIDWORKS
@stop
@section('meta')
<link rel="canonical" href="{{route('driveWorks.compare')}}" />
@stop
@section('description')Compare DriveWorksXpress, DriveWorks Solo and DriveWorks Pro SOLIDWORKS automation and online CPQ product configurator
software.@stop

@push('after-styles')
<style>
	.learn-more-collapsable .card {
		cursor: pointer;
		border-radius: 5px;
		border-width: 2px;
	}

	.learn-more-collapsable .card:hover {
		background: #f2f2f2;
	}

	/* .learn-more-collapsable .card:not(.collapsed) {
		background: #f2f2f2;
		border-color: #007BFF;
		border-width: 2px;
	} */

	.circle {
		background: #007BFF;
		border-radius: 50%;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
		color: white;
		font-size: 24px;
		display: inline-block;
		font-weight: 500;
		line-height: 50px;
		margin-right: 5px;
		text-align: center;
		width: 50px;
	}

	.check-circle {
	background: #007BFF;
	border-radius: 50%;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	color: white;
	font-size: 18px;
	display: inline-block;
	font-weight: 500;
	line-height: 25px;
	margin-right: 5px;
	text-align: center;
	width: 25px;
	}

	a.check-circle {
		text-decoration: none;
	}

	a.check-circle:hover {
		text-decoration: none;
		color:white;
		background: #7bbbff;
	}

	@media only screen and (min-width: 1180px) {
		.compare__sections {
			max-width: 1180px;
		}

		.compare__sections table {
			margin-bottom: 0;
			width: 100%;
		}

		.compare__sections table tr:nth-child(odd) {
			background-color: #fff;
		}

		.compare__sections table colgroup col:nth-child(1) {
			width: 55%;
		}

		.compare__sections table tr:nth-child(odd) {
			background-color: #fff;
		}

		.compare__sections table tr:nth-child(even) {
			background-color: #f5f5f5;
		}

		.compare__sections__table__heading tr td:nth-child(1) {
			font-weight: 600;
			font-size: 1em !important;
		}

		.compare__sections table td:nth-child(1) {
			font-size: .8em !important;
		}

		.compare__sections table td {
			padding: 1em !important;
		}

		.compare__sections__table__heading td {
			background-color: #2e4b5d;
			color: #fff;
		}
	}

	@media only screen and (min-width: 768px) {
		.compare__sections table colgroup col:nth-child(1) {
			width: 55%;
		}

		.compare__sections table td {
			font-size: 1rem;
			padding: .5em;
		}
	}

	.compare__sections table td {
		font-size: .8em;
		padding: .3em;
		word-wrap: break-word;
	}

	.compare__sections__table__heading td {
		background-color: #2e4b5d;
		color: #fff;
	}

	.compare__sections {
		color: #2e4b5d;
		margin: 2em 0;
	}

	.compare__sections table {
		margin-bottom: 0;
		table-layout: fixed;
		width: 100%;
	}

	.compare__sections table tr:nth-child(odd) {
		background-color: #fff;
	}

	.compare__sections table tr:nth-child(even) {
		background-color: #f5f5f5;
	}

	.compare__sections table colgroup col:nth-child(1) {
		width: 30%;
	}

	.compare__sections table tr:nth-child(odd) {
		background-color: #fff;
	}

	.compare__sections table td:nth-child(2) {
		text-align: center;
	}

	.compare__sections table td:nth-child(3) {
		text-align: center;
	}

	.compare__sections table td:nth-child(4) {
		text-align: center;
	}
</style>
@endpush
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
	style="min-height:450px; background-image:url(https://www.cadmicro.com/storage/pages/driveworks/DW-Slider-Compare-S1.jpg)">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>Compare Software</h1>
					<div class="section-title-divider "></div>
				</div>
				<p class="lead" style="font-weight:400">Compare DriveWorksXpress, DriveWorks Solo &amp; DriveWorks Pro</p>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="section-title parallax-section__title center-block mx-auto">
			<h2>Compare DriveWorks Products</h2>
			<div class="section-title-divider mb-5"></div>
			<div class="h5 text-center">Learn about the differences between DriveWorksXpress, DriveWorks Solo and DriveWorks
				Pro</div>
		</div>
		<div class="compare__sections">
			<table class="compare__sections__table__heading">
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Supported Operating Systems and Browsers</td>
						<td>DriveWorksXpress</td>
						<td>DriveWorks Solo</td>
						<td>DriveWorks Pro</td>
					</tr>
				</tbody>
			</table>
			<table>
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Windows 8.1, Windows 10 (DriveWorks Desktop Applications)</td>
						<td><a href="https://www.solidworks.com/sw/support/SystemRequirements.html" class="check-circle">✓</a></td>
						<td><a href="https://help.driveworkssolo.com/Topic/Prerequisites" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/AdminPrerequisites" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>All of the above plus Windows Server (2016, 2019) (DriveWorks Live Web application)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/LivePrerequisites" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Google Chrome 8+, Mozilla Firefox 4+, Microsoft Edge, Safari 5.1+ (Configuring products in a Browser
							through
							DriveWorks Live)</td>
						<td></td>
						<td></td>
						<td><a href="https://driveworks3d.com/browsers" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Cloud Hosting: Microsoft Azure, AWS</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/HowToMicrosoftAzure" class="check-circle">✓</a></td>
					</tr>
				</tbody>
			</table>
			<table class="compare__sections__table__heading">
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>CAD - Controlling SOLIDWORKS 3D Models and 2D Drawings</td>
						<td>DriveWorksXpress</td>
						<td>DriveWorks Solo</td>
						<td>DriveWorks Pro</td>
					</tr>
				</tbody>
			</table>
			<table>
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Drive Dimensions, Features and Custom Properties</td>
						<td><a
								href="https://help.solidworks.com/2017/english/SolidWorks/driveworksxpress/c_setting_up_models_driveworksxpress.htm?id=79d27d6c54c34fe98a290dd81db8d18f#Pg0" class="check-circle">✓</a>
						</td>
						<td><a href="https://help.driveworkssolo.com/Topic/TaskPaneFeatsAndDimsPane" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/TaskPaneFeatsAndDimsPane" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Drive Color, Material and Textures</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/TaskPaneCustomPropertiesPane" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/TaskPaneCustomPropertiesPane" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Drive Advanced Feature Properties (Hole Wizards, Sheet Metal, Weldments)</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ModelRulesAdvancedFeatureRulesOverview" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ModelRulesAdvancedFeatureRulesOverview" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Drive Instances</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ModelInstanceRule" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ModelRules" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Replace Components (with existing files or dynamically driven files)</td>
						<td></td>
						<td><a
								href="https://help.driveworkssolo.com/Topic/HowToReplaceAComponentWithAStaticOrDrivenReplacementModel" class="check-circle">✓</a>
						</td>
						<td><a
								href="https://docs.driveworkspro.com/Topic/HowToReplaceAComponentWithAStaticOrDrivenReplacementModel" class="check-circle">✓</a>
						</td>
					</tr>
					<tr>
						<td>Create additional model file formats (STEP, STL, PDF, DXF, JPEG, etc.)</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/TaskPaneFileFormatsPane" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/TaskPaneFileFormatsPane" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Full control over new model file names and locations</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ModelRelativePathRule" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ModelRules" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Control multiple model sets from a single project</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorModelRules" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorModelRules" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Run SOLIDWORKS Model Macros</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/HowToCreateAMacroToRunOnASolidWorksFile" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Generative design – create new features on the fly (configurations, insert components, mates, etc.)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorGenerationTasks" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Create a drawing for each part and assembly</td>
						<td><a
								href="https://help.solidworks.com/2017/english/SolidWorks/driveworksxpress/t_adding_drawing_driveworksxpress.htm" class="check-circle">✓</a>
						</td>
						<td><a href="https://help.driveworkssolo.com/Topic/TaskPaneDrawingsPane" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/TaskPaneDrawingsPane" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Create multiple drawings for each part and assembly</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/TaskPaneDrawingsPane" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/TaskPaneDrawingsPane" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Full control over new drawing file names and locations</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/DrawingFileNameRule" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DrawingRulesGeneral" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Create additional drawing file formats (PDF, DXF, DWG, JPEG, etc.)</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/TaskPaneDrawingFileFormatsPane" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DrawingFileFormatsPane" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Control Drawing Sheets (Re-scale, Rename, Delete)</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/DrawingSheetNumeratorAndDenominatorRules" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DrawingRulesGeneral" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Control Drawing Views (Re-scale, Re-position, Delete)</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/DrawingViewLeftAndTopRule" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DrawingRulesGeneral" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Control Annotations (Dimension Text, Notes, Symbols, etc.)</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/DrawingRulesAnnotationSurfaceFinishSymbol" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DrawingRulesAnnotationWeldSymbol" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Control Dimension positions</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/TaskPaneAnnotationPositionsPane" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/TaskPaneAnnotationPositionsPane" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Control Custom Properties, Break Lines and Layers</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/DrawingBreaklineRule" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DrawingRulesGeneral" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Run SOLIDWORKS Drawing Macros</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/HowToCreateAMacroToRunOnASolidWorksFile" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Run additional tasks on the fly (Auto Balloon, Arrange Dimensions, Rescale and Position Views, etc.)
						</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorGenerationTasks" class="check-circle">✓</a></td>
					</tr>
				</tbody>
			</table>
			<table class="compare__sections__table__heading">
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Document Creation</td>
						<td>DriveWorksXpress</td>
						<td>DriveWorks Solo</td>
						<td>DriveWorks Pro</td>
					</tr>
				</tbody>
			</table>
			<table>
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Create documents (such as Sales Quotes, Purchase Orders, Bills of Materials, etc.)</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorDocuments" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorDocuments" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Built in document templates</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/BOMTemplateDocument" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/QuotationTemplateDocument" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Fully customizable document creation (from Word, Excel, XML, etc.)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/Word_Document" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Send HTML emails with attachments</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/EmailDocumentTemplate" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Create Additional File Formats (PDF, HTML, TXT, XML, etc.)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/Excel_Workbook_Document" class="check-circle">✓</a></td>
					</tr>
				</tbody>
			</table>
			<table class="compare__sections__table__heading">
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Output Generation</td>
						<td>DriveWorksXpress</td>
						<td>DriveWorks Solo</td>
						<td>DriveWorks Pro</td>
					</tr>
				</tbody>
			</table>
			<table>
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Immediate generation of SOLIDWORKS models and drawings</td>
						<td><a
								href="https://help.solidworks.com/2017/english/SolidWorks/driveworksxpress/c_viewing_results_driveworksxpress.htm#mfo1450463092168" class="check-circle">✓</a>
						</td>
						<td><a href="https://help.driveworkssolo.com/Topic/TaskPaneRun" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/TaskPaneGeneratingQueuedModels" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Real Time Preview (On Demand) – updates model while specifying</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/TaskPaneRun" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/TaskPaneGeneratingQueuedModels" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Manual release of generation queue – allows multiple specifications to have their models generated from
							a
							queue</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/TaskPaneGeneratingQueuedModels" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Automatic generation – unattended generation of outputs</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/Autopilot" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Load balancing – distributes output generation over multiple machines</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/SolidWorksSettings(forAutopilot)2Autopilot" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Priority processing – Change the order that outputs are created based on rules</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/UsingAutopilot" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Output Tagging – Generate outputs on targeted machines or in specific locations</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/UsingAutopilot" class="check-circle">✓</a></td>
					</tr>
				</tbody>
			</table>
			<p>&nbsp;</p>
			<table class="compare__sections__table__heading">
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>User Interface Design</td>
						<td>DriveWorksXpress</td>
						<td>DriveWorks Solo</td>
						<td>DriveWorks Pro</td>
					</tr>
				</tbody>
			</table>
			<table>
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Automatic Form designer</td>
						 <td><span  class="check-circle">✓</span></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Expert Form Designer (Resolution and Control Guides, Control Grouping, Control Property Grid, etc.)</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorFormNavigation" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorFormNavigation" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Multiple form creation with dynamic navigation</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorFormDesign" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorFormDesign" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Basic Form Controls (Text Box, Numeric Text Box, Drop Down, Spin Button, Check Box)</td>
						 <td><span  class="check-circle">✓</span></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ControlCheckBox" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ControlComboBox" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Enhanced Form Controls (Hyperlink, Label, List Box, Option Group, Picture Box, Slider)</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ControlHyperlink" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ControlOptionGroup" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Advanced Form Controls (3D Preview, Child Specification List, Data Table, Date Picker, Frame Control,
							Macro
							Button, Upload Control, etc.)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ControlDataTable" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Dynamic options for list controls</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/Items" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/Items" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Dynamic control of Enable and Visible properties of form controls</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/Enabled" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/Visible" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Dynamic control over fonts and colors</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/BackgroundColor" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/FontProperty" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Static validation and validation messages</td>
						 <td><span  class="check-circle">✓</span></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ErrorResult" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ErrorResult" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Dynamic validation and validation messages</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ErrorResult" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ErrorResult" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Copy and paste form controls</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorFormDesign" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorFormDesign" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Re-skin controls</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/Picture" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/Picture" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Support for responsive forms (allows re-positioning of controls when used on screens of different sizes)
						</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/InfoSpecialVariables" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/InfoSpecialVariables" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Project hierarchy (run a specification inside a specification to any level (For example a contract with
							multiple configurable line items)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ControlChildSpecificationList" class="check-circle">✓</a></td>
					</tr>
				</tbody>
			</table>
			<p>&nbsp;</p>
			<table class="compare__sections__table__heading">
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Working with Data and Rules</td>
						<td>DriveWorksXpress</td>
						<td>DriveWorks Solo</td>
						<td>DriveWorks Pro</td>
					</tr>
				</tbody>
			</table>
			<table>
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Use tabular data to calculate rules</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorTables" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorTables" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Copy and paste Excel data</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorTables" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorTables" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Create internal data tables</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorTables" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorTables" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Use dynamic data from ODBC Data sources in rules (SAP, Oracle, MySQL, SQLServer, etc.)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorTables" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Export data to ODBC data sources (for example SAP, Oracle, MySQL, SQLServer)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ODBC_Data_Export_Document" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Pull and Push data dynamically to and from SQL Server Databases using SQL or Windows authentication</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/SQL_Server_Data_Export_Document" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Create Group Level Tabular data for use across an entire implementation</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/GroupTables" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Create Calculation tables where each cell can be calculated from other cells</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorCalculationTables" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Create Rollup data tables – where information such a price or BOM Quantities is rolled up through the
							project hierarchy</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/RollUpDataTable" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Web Service integration – communicate with any web service OR use DriveWorks as a web service</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/SendHTTPRequest" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Over 250 engineering, mathematic and scientific functions</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/CommonFunctions" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/CommonFunctions" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Over 50 vector (3D), database and PDM functions</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/CommonFunctions" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Rules builder with function wizard and rule insight (rule breakdown and drill down, function assistance,
							syntax highlighting and function helper text)</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorRulesBuilder" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorRulesBuilder" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Reusable rules (Variables)</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorVariables" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorVariables" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Pervasive search/filtering capabilities</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectDesigner" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectDesigner" class="check-circle">✓</a></td>
					</tr>
				</tbody>
			</table>
			<p>&nbsp;</p>
			<table class="compare__sections__table__heading">
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Maintainability, Reporting and Diagnostics</td>
						<td>DriveWorksXpress</td>
						<td>DriveWorks Solo</td>
						<td>DriveWorks Pro</td>
					</tr>
				</tbody>
			</table>
			<table>
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Rules commentary</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorRulesBuilder" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorRulesBuilder" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Rules revisioning</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorRulesBuilder" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorRulesBuilder" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Reporting on model generation success or failure</td>
						<td><a
								href="https://help.solidworks.com/2017/english/SolidWorks/driveworksxpress/c_viewing_status_driveworksxpress.htm" class="check-circle">✓</a>
						</td>
						<td><a href="https://help.driveworkssolo.com/Topic/HowToDiagnoseProjectIssuesUsingGenerationReport" class="check-circle">✓</a>
						</td>
						<td><a
								href="https://docs.driveworkspro.com/Topic/HowToDiagnoseProjectIssuesUsingDriveWorksGenerationReport" class="check-circle">✓</a>
						</td>
					</tr>
					<tr>
						<td>Reporting on specification process success or failure</td>
						<td></td>
						<td></td>
						<td><a
								href="https://docs.driveworkspro.com/Topic/HowToDiagnoseProjectIssuesUsingDriveWorksSpecificationReport" class="check-circle">✓</a>
						</td>
					</tr>
					<tr>
						<td>Real time testing during form design</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorFormDesign" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorFormDesign" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Rules analysis and breakdown</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectEditorRulesBuilder" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorRulesBuilder" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>What-if scenarios (Specification Test Mode)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorSpecExplorerTestMode" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Interactive step through of model generation</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorSpecExplorerTestModeModelInsight" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Rule Profiling (rule specific error debugging, performance solving and insight features)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorRuleProfiler" class="check-circle">✓</a></td>
					</tr>
				</tbody>
			</table>
			<p>&nbsp;</p>
			<table class="compare__sections__table__heading">
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Scalability</td>
						<td>DriveWorksXpress</td>
						<td>DriveWorks Solo</td>
						<td>DriveWorks Pro</td>
					</tr>
				</tbody>
			</table>
			<table>
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Import DriveWorksXpress Projects</td>
						<td></td>
						<td><a href="https://help.driveworkssolo.com/Topic/ProjectWizardImportDriveWorksXpressProject" class="check-circle">✓</a></td>
						<td><a href="https://docs.driveworkspro.com/Topic/NewProjectWizard" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Import DriveWorks Solo Projects</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/NewProjectWizard" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Underlying database – Microsoft SQL Server</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/AdminPrerequisites" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Security – Users and Teams</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorSecuritySettings" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Security – Active Directory compatibility</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/LoginLive" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Granular permissions</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorSecuritySettings" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Zero-Conversion web access</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/Live" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Unattended model generation</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/Autopilot" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Standalone user seats</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/User" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Fully customizable work flow – (who, what and when)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ProjectEditorSpecificationFlow" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Built in Apps providing ready to run functionality:<p></p>
							<ul>
								<li>Dashboard – Link to Projects, access KPI’s</li>
								<li>CPQ – Full Configure, Price, Quote solution</li>
							</ul>
						</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DriveApps" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Automatic processing of external data</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/AutopilotConnectors" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Fully documented API with Software Development Kit</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DriveWorksProSDK" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Plugins</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DriveWorksLabs" class="check-circle">✓</a></td>
					</tr>
				</tbody>
			</table>
			<p>&nbsp;</p>
			<table class="compare__sections__table__heading">
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Integration</td>
						<td>DriveWorksXpress</td>
						<td>DriveWorks Solo</td>
						<td>DriveWorks Pro</td>
					</tr>
				</tbody>
			</table>
			<table>
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>SOLIDWORKS PDM Professional (Automatic check-in of models, drawings and documents)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/SolidWorksEnterprisePDMPluginSettings" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Salesforce</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/Salesforce" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>3rd party system Integration through file import and export</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ImportSpecifications" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>3rd party system Integration through SQL\ ODBC connections</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/QueryDataValues" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>3rd party system Integration through web services</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/SendHTTPRequest" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>3rd party system Integration through fully documented Application programming Interface</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DriveWorksProSDK" class="check-circle">✓</a></td>
					</tr>
				</tbody>
			</table>
			<p>&nbsp;</p>
			<table class="compare__sections__table__heading">
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Online Configurator and DriveWorks 3D</td>
						<td>DriveWorksXpress</td>
						<td>DriveWorks Solo</td>
						<td>DriveWorks Pro</td>
					</tr>
				</tbody>
			</table>
			<table>
				<colgroup>
					<col>
					<col>
					<col>
					<col>
				</colgroup>
				<tbody>
					<tr>
						<td>Direct web access through the application</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/Live" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Run as a service through Internet Information Services (IIS)</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ConfiguringDriveWorksLiveForIIS" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Application Mode – replicate desktop running directly on the web</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/ApplicationThemeLive" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Web Theme with basic re-skinning</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/WebThemeLive" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Choice of fully responsive skins</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/SkinsLive" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Integration Theme with Web API enabling full integration with existing websites</td>
						<td></td>
						<td></td>
						<td><a href="http://docs.driveworkspro.com/Topic/IntegrationThemeLive" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Session Management – control license usage over the Internet</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/SessionManagement" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Image gallery – display image files as they are created</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/SpecificationDetailsLive" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Configurable 3D in a browser</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DriveWorks3DFile" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Virtual Reality support</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DriveWorks3DOrientation" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Real-time 3D text support</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/DriveWorks3D3DText" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Virtual Reality support</td>
						<td></td>
						<td></td>
						<td><a href="http://docs.driveworkspro.com/Topic/DriveWorks3DOrientation" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Real-time 3D text support</td>
						<td></td>
						<td></td>
						<td><a href="http://docs.driveworkspro.com/Topic/DriveWorks3D3DText" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Server side rendering of web optimized DriveWorks 3D files</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/Control3DPreviewBox" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Image fall back mode when no WebGL on client machine</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/EnableImageMode" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Model click interaction</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/OnModelClickedMacro" class="check-circle">✓</a></td>
					</tr>
					<tr>
						<td>Transparent image support</td>
						<td></td>
						<td></td>
						<td><a href="https://docs.driveworkspro.com/Topic/HowToCreateAppealingDriveWorks3DFiles" class="check-circle">✓</a></td>
					</tr>
				</tbody>
			</table>
			<p>&nbsp;</p>
			<ul>
				<li>DriveWorks Pro is made up of a number of Software Modules – Please check the <a
						href="http://www.driveworks.co.uk/products/driveworkspro/">DriveWorks Pro Data Sheet</a> for specific
					functionality of each to meet your needs.</li>
				<li>Preview Generation (On Demand) is available for DriveWorks Solo and Pro modules that run as an add-in to
					SOLIDWORKS and is not available in DriveWorks Pro Live.</li>
				<li>The modules DriveWorks Pro user and DriveWorks Pro Live provide access for Users to enter data.</li>
				<li>DriveWorks Pro Live provides seamless conversion of DriveWorks projects for web access.</li>
				<li>DriveWorks Pro Autopilot is required for some features.</li>
				<li>Multiple licenses of DriveWorks Pro Autopilot are required for some features.</li>
				<li>DriveWorks Pro User is required for some features.</li>
			</ul>
		</div>

	</div>
</section>

<section class="bg-primary text-white">
	<div class="container-fluid d-flex align-items-center justify-content-center flex-column">
		<div class="section-title center-block mx-auto mb-0">
			<h2>Get Your Free Trial</h2>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
			<button class="btn btn-white rounded-pill btn-dialog" id="contact" data-toggle="modal" data-target="#contactModal"
				data-type="contact" data-title="Contact an Agent">Contact Us</button>
		</div>
	</div>
</section>
<section class="pb-0">
	<div class="container">
		<div class="section-title center-block mx-auto mb-0 text-center mb-4">
			<h2>Design Automation & CPQ Configuration Solutions</h2>
			<div class="section-title-divider"></div>
			<p class="mx-auto lead">Flexible, Modular, Scalable.</p>
		</div>
		<div id="accordion">
			<div class="row mb-5">
				<div class="learn-more-collapsable col col-12 col-md-4 col-lg-4 d-flex flex-fill py-4">
					<div role="button" class="card w-full p-3 d-flex flex-fill">
						<img class="card-img-top"
							src="https://www.cadmicro.com/storage/pages/driveworks/DriveWorks-ProductCard-DriveWorksXpress.webp">
						<div class="card-body d-flex flex-column">
							<h3 class="card-title">DriveWorksXpress</h3>
							<p class="card-text flex-fill">Free entry level design automation included in every seat of SOLIDWORKS.
								Upscale to DriveWorks Solo
								or DriveWorks Pro anytime.</p>
							<a href="{{route('driveWorks')}}" class="btn btn-primary rounded-pill btn-dialog">Learn more</a>
						</div>
					</div>
				</div>
				<div class="learn-more-collapsable col col-12 col-md-4 col-lg-4 d-flex flex-fill py-4">
					<div role="button" class="card w-full p-3 d-flex flex-fill">
						<img class="card-img-top"
							src="https://www.cadmicro.com/storage/pages/driveworks/DriveWorks-ProductCard-DriveWorksSolo.webp">
						<div class="card-body d-flex flex-column">
							<h3 class="card-title">DriveWorks Solo</h3>
							<p class="card-text flex-fill">Powerful SOLIDWORKS® design automation. Download your 30 day free trial of
								DriveWorks Solo.</p>
							<a href="{{route('driveWorks')}}" class="btn btn-primary rounded-pill btn-dialog">Learn more</a>
						</div>
					</div>
				</div>
				<div class="learn-more-collapsable col col-12 col-md-4 col-lg-4 d-flex flex-fill py-4">
					<div role="button" class="card w-full p-3 d-flex flex-fill">
						<img class="card-img-top"
							src="https://www.cadmicro.com/storage/pages/driveworks/DriveWorks-ProductCard-DriveWorksPro-1.webp">
						<div class="card-body d-flex flex-column">
							<h3 class="card-title">DriveWorks Pro</h3>
							<p class="card-text flex-fill">
								Complete SOLIDWORKS® automation and online 3D CPQ configurator software. Try one of our configurator
								examples now.</p>
							<a href="{{route('driveWorks')}}" class="btn btn-primary rounded-pill btn-dialog">Learn more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-secondary">
	<div class="container-fluid d-flex align-items-center justify-content-center flex-column">
		<div class="section-title center-block mx-auto mb-0">
			<h2>Want to learn more?</h2>
			<div class="section-title-divider"></div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
			<button class="btn btn-white rounded-pill btn-dialog" id="contact" data-toggle="modal" data-target="#contactModal"
				data-type="contact" data-title="Contact an Agent">Contact Us</button>
		</div>
	</div>
</section>
@stop

@push('after-scripts')
@include('scripts.dataTables')
<script>
	$(function () {
			    $(document).ready(function () {
			      $('#draftsight-matrix').DataTable({
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
			      $('#draftsight-matrix tbody tr td:not(.control)').click(function () {
			        $(this).parent('tr').find('td.control').click();
			      })
			    });
			  })
</script>
@endpush