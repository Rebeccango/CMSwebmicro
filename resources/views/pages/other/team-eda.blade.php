@extends('layouts.layout')
@section('title')
TeamEDA
@stop
@section('meta')
<link rel="canonical" href="{{route('team-eda')}}" />
@stop
@section('description')Engineering License Usage Management | Monitoring & Optimization CAD, CAX, EDA, PLM | Software
Asset Optimization |
License consolidation | Engineering software audits | Cost reduction | Solidworks, AutoCAD, Ansys, Catia, Creo |
Engineering Software Monitoring @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
	style="min-height:450px; background:black">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>TeamEDA</h1>
					<div class="section-title-divider"></div>
				</div>
				<div>
					<p class="parallax-section__description">Software license management for engineering applications.</p>
				</div>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container d-flex align-items-center flex-column">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 py-4">
				<h2 class="text-uppercase">Key Features:</h2>
				<ul class="pl-3 lead">
					<li>Monitor the leading Engineering tools for CAD, CAM, CAE, EDA, PLM, and other Design, Simulation, Modeling
						and Analysis
						tools</li>
					<li>Monitor concurrent license consumption for better forecasting</li>
					<li>Consolidate engineering software assets, licenses, and vendor information</li>
					<li>User-friendly and easy to access reports for management</li>
					<li>Comprehensive dashboard and single-pane view</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 py-4">
				<h2 class="text-uppercase">Key Benefits:</h2>
				<ul class="pl-3 lead">
					<li>Get better value from your engineering software while saving 15-25%</li>
					<li>Track and reduce software spend by optimizing license usage</li>
					<li>Avoid employee productivity losses by monitoring license denials</li>
					<li>Consolidate ALL of your software asset information to determine actual licensing needs</li>
					<li>Managing engineering software applications, users and overall inventories more efficiently</li>
					<li>Allow managers and administrators to monitor real-time and historical usage</li>
				</ul>
			</div>
		</div>
		<a class="btn btn-primary rounded-pill btn-lg" href="#" data-toggle="modal" data-target="#trial">GET A FREE 30 DAY
			TRIAL</a>
	</div>
</section>
<section class="section-secondary">
	<div class="container d-flex align-items-center flex-column">
		<h2 class="mx-auto text-center pb-4" style="max-width:600px;">Is your team getting license denials on CAD, CAE, EDA
			software?</h2>
		<p class="lead">TeamEDA’s <strong>License Asset Manager</strong> with <strong>Usage Monitoring (LAMUM)</strong>
			ensures that your engineering software
			licenses are managed effectively and optimized efficiently for availability to drive productivity and innovation.
		</p>
		<p class="lead">TeamEDA is proven to compare customers’ contractual entitlements against their utilization in order
			to assess gaps and surpluses in licensing, as well as offering best practices to optimize their position in order
			to avoid
			unnecessary costs.</p>
		<a class="btn btn-primary rounded-pill btn-lg" href="#" data-toggle="modal" data-target="#demor">GET A DEMO</a>
	</div>
</section>
<section>
	<div class="container">
		<div class="card-deck">
			<div class="card border-0 text-center">
				<svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="-6 0 512 512.00015"
					width="100px">
					<path fill="#007bff"
						d="m482.628906.0195312c-357.589844 0-333.796875-.0898437-338.890625.1210938-38.925781 1.660156-75.199219 18.085937-102.113281 46.253906-70.679688 73.933594-47.984375 194.375 42.636719 238.710938h-33.335938c-18.773437 0-34.046875 15.273437-34.046875 34.046875 0 18.777344 15.273438 34.050781 34.046875 34.050781h8.980469c-3.613281 5.414063-5.730469 11.910156-5.730469 18.894531s2.117188 13.480469 5.730469 18.894532h-8.980469c-18.773437 0-34.046875 15.273437-34.046875 34.046874 0 18.777344 15.273438 34.046876 34.046875 34.046876h2.753907c-15.015626 22.527343 1.191406 52.914062 28.339843 52.914062h400.609375c9.765625 0 17.710938-7.945312 17.710938-17.710938v-476.558593c0-9.765625-7.945313-17.7109378-17.710938-17.7109378zm-431.703125 337.9999998c-10.394531 0-18.863281-8.460937-18.863281-18.867187 0-10.402344 8.46875-18.863282 18.863281-18.863282h203.25c10.40625 0 18.867188 8.460938 18.867188 18.863282 0 10.40625-8.460938 18.867187-18.867188 18.867187zm142.707031 52.945313h-105.410156c-10.402344 0-18.863281-8.472656-18.863281-18.867188 0-10.40625 8.460937-18.867187 18.863281-18.867187h105.410156c-3.601562 5.40625-5.707031 11.902343-5.707031 18.867187s2.105469 13.460938 5.707031 18.867188zm194.304688 15.210937c10.402344 0 18.863281 8.460938 18.863281 18.863281 0 10.394532-8.460937 18.867188-18.863281 18.867188-7.617188 0-196 0-203.25 0-10.40625 0-18.867188-8.472656-18.867188-18.867188 0-10.402343 8.460938-18.863281 18.867188-18.863281zm-337.011719 37.730469c-10.394531 0-18.863281-8.472656-18.863281-18.867188 0-10.402343 8.46875-18.863281 18.863281-18.863281h105.421875c-7.613281 11.417969-7.617187 26.304688 0 37.730469-12.382812 0-93.203125 0-105.421875 0zm136.515625 52.914062h-105.421875c-10.40625 0-18.867187-8.460937-18.867187-18.867187s8.460937-18.867187 18.867187-18.867187h105.421875c-3.605468 5.40625-5.710937 11.894531-5.710937 18.867187s2.105469 13.460937 5.710937 18.867187zm231.578125 0c-9.324219 0-196.21875 0-203.242187 0-10.402344 0-18.863282-8.460937-18.863282-18.867187s8.460938-18.867187 18.863282-18.867187h203.242187c10.402344 0 18.863281 8.460937 18.863281 18.867187s-8.460937 18.867187-18.863281 18.867187zm66.140625-2.53125c0 1.394532-1.132812 2.53125-2.53125 2.53125h-35.285156c15.046875-22.515624-1.179688-52.914062-28.324219-52.914062h-2.753906c7.621094-11.398438 7.640625-26.296875-.011719-37.761719h8.96875c18.773438 0 34.046875-15.273437 34.046875-34.046875 0-18.773437-15.273437-34.046875-34.046875-34.046875h-44.257812c-4.191406 0-7.59375 3.398438-7.59375 7.589844s3.402344 7.589844 7.59375 7.589844h44.257812c10.40625 0 18.867188 8.460937 18.867188 18.867187 0 10.394532-8.460938 18.867188-18.867188 18.867188-7.699218 0-195.976562 0-203.25 0-10.394531 0-18.867187-8.472656-18.867187-18.867188 0-10.40625 8.472656-18.867187 18.867187-18.867187h128.628906c4.1875 0 7.589844-3.398438 7.589844-7.589844s-3.402344-7.589844-7.589844-7.589844h-68.105468c3.613281-5.414062 5.730468-11.914062 5.730468-18.898437 0-18.773438-15.273437-34.046875-34.050781-34.046875h-38.316406c24.550781-11.960938 45.765625-30.550781 60.878906-54.195313 2.257813-3.535156 1.222657-8.230468-2.308593-10.488281-3.53125-2.253906-8.21875-1.222656-10.484376 2.308594-24.917968 38.976562-69.296874 64.070312-118.984374 62.285156-72.28125-2.671875-129.769532-61.757813-129.769532-134.972656 0-75.25 62.738282-140.363281 144.953125-134.507813 91.367188 6.578125 147.160157 99.269532 116.59375 181.519532-1.457031 3.925781.546875 8.300781 4.484375 9.757812 3.925782 1.457031 8.296875-.546875 9.753906-4.476562 26.730469-72.09375-5.46875-153.121094-74.882812-187.136719h266.535156c1.398438 0 2.53125 1.132812 2.53125 2.53125zm0 0" />
					<path
						d="m147.636719 197.308594c-12.082031 0-17.523438-5.34375-21.496094-9.246094-2.203125-2.160156-3.941406-3.867188-6.191406-3.867188-4.042969 0-7.507813 4.929688-7.507813 8.964844 0 7.167969 11.804688 17.664063 30.121094 19.523438v15.742187c0 4.191407 3.398438 7.589844 7.59375 7.589844 4.191406 0 7.589844-3.398437 7.589844-7.589844v-16.285156c17.398437-3.214844 27.507812-15.667969 27.507812-34.683594 0-44.8125-53.261718-31.628906-53.261718-57.148437 0-12.660156 11.148437-15.316406 20.5-15.316406 8.933593 0 13.796874 2.507812 17.347656 4.335937 1.96875 1.015625 3.523437 1.816406 5.15625 1.816406 4.820312 0 7.34375-5.839843 7.34375-8.964843 0-7.628907-13.476563-11.148438-24.59375-11.996094v-18.324219c0-4.191406-3.398438-7.589844-7.589844-7.589844-4.195312 0-7.59375 3.398438-7.59375 7.589844v18.976563c0 .011718.003906.027343.003906.039062-11.625 2.109375-27.210937 8.996094-27.210937 30.730469 0 40.386719 53.265625 26.203125 53.265625 57.148437 0 11.964844-7.453125 18.554688-20.984375 18.554688zm0 0"
						fill="#007bff" />
					<path
						d="m60.675781 86.53125c-2.433593 3.417969-1.636719 8.15625 1.777344 10.589844 3.414063 2.429687 8.15625 1.636718 10.585937-1.78125 38.613282-54.199219 118.625-52.28125 155.332032 1.5625 46.269531 67.871094-10.882813 158.621094-91.78125 146.871094-57.488282-8.351563-94.910156-66.738282-76.183594-123.472657 1.3125-3.980469-.847656-8.273437-4.828125-9.585937-3.976563-1.316406-8.273437.847656-9.585937 4.828125-10.414063 31.546875-6.464844 67.179687 13.480468 96.433593 36.507813 53.550782 112 64.488282 162.199219 21.441407 42.410156-36.363281 50.769531-98.820313 19.242187-145.070313-42.667968-62.582031-135.515624-64.59375-180.238281-1.816406zm0 0"
						fill="#007bff" />
					<path
						d="m461.242188 57.121094h-151.308594c-4.191406 0-7.589844 3.398437-7.589844 7.589844 0 4.191406 3.398438 7.589843 7.589844 7.589843h151.308594c4.195312 0 7.59375-3.398437 7.59375-7.589843 0-4.191407-3.398438-7.589844-7.59375-7.589844zm0 0"
						fill="#007bff" />
					<path
						d="m461.242188 113.800781h-133.597657c-4.191406 0-7.589843 3.398438-7.589843 7.589844s3.398437 7.589844 7.589843 7.589844h133.597657c4.195312 0 7.59375-3.398438 7.59375-7.589844s-3.398438-7.589844-7.59375-7.589844zm0 0"
						fill="#007bff" />
					<path fill="#007bff"
						d="m452.519531 166.535156c-1.539062-4.425781-6.691406-6.414062-10.804687-4.171875l-45.09375 24.597657c-3.679688 2.007812-5.035156 6.621093-3.027344 10.300781 2.007812 3.679687 6.617188 5.035156 10.296875 3.027343l27.300781-14.890624-35.96875 85.941406-47.328125-33.246094c-2.699219-1.890625-6.308593-1.832031-8.9375.152344l-38.574219 29.121094c-3.347656 2.527343-4.011718 7.285156-1.484374 10.632812 2.527343 3.34375 7.285156 4.011719 10.628906 1.484375l34.160156-25.789063 50.527344 35.492188c3.960937 2.785156 9.492187 1.191406 11.363281-3.28125l39.53125-94.449219 8.960937 25.765625c1.378907 3.964844 5.703126 6.054688 9.664063 4.679688 3.960937-1.378906 6.054687-5.703125 4.675781-9.664063zm0 0" />
				</svg>
				<div class="card-body">
					<h5 class="card-title">Save Money</h5>
					<p class="card-text">Up to 20% of engineering software costs</p>
				</div>
			</div>
			<div class="card border-0 text-center">
				<svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 0 512 512.00078"
					width="100px">
					<path fill="#007bff"
						d="m278.570312 306.84375c4.734376-3.484375 9.25-7.277344 13.503907-11.34375l41.1875 23.78125c8.074219 4.664062 18.4375 1.886719 23.101562-6.191406l21.660157-37.515625c4.664062-8.074219 1.886718-18.4375-6.1875-23.101563l-41.164063-23.765625c1.382813-5.703125 2.402344-11.515625 3.042969-17.378906l46.832031-8.257813c9.179687-1.621093 15.335937-10.40625 13.714844-19.589843l-7.523438-42.664063c-1.625-9.222656-10.402343-15.34375-19.589843-13.71875l-46.808594 8.253906c-2.613282-5.265624-5.566406-10.375-8.835938-15.273437l30.5625-36.425781c6.007813-7.160156 5.074219-17.816406-2.082031-23.824219l-33.1875-27.847656c-7.191406-6.035157-17.839844-5.046875-23.824219 2.085937l-30.550781 36.410156c-5.390625-2.367187-10.941406-4.386718-16.589844-6.039062v-47.527344c0-9.324218-7.585937-16.910156-16.910156-16.910156h-43.320313c-9.324218 0-16.910156 7.585938-16.910156 16.910156v47.53125c-5.648437 1.652344-11.199218 3.667969-16.589844 6.035156l-30.550781-36.410156c-2.90625-3.457031-6.980469-5.582031-11.480469-5.972656-4.496093-.398438-8.882812.988281-12.34375 3.890625l-33.1875 27.847656c-7.140624 5.992188-8.078124 16.679688-2.082031 23.824219l30.5625 36.425781c-3.269531 4.898438-6.226562 10.007813-8.835937 15.273438l-46.8125-8.253907c-9.101563-1.617187-17.949219 4.425782-19.589844 13.714844l-7.523438 42.664063c-1.617187 9.183593 4.535157 17.972656 13.71875 19.589843l46.832032 8.257813c.640625 5.863281 1.660156 11.675781 3.042968 17.382813l-41.164062 23.761718c-8.074219 4.664063-10.851562 15.027344-6.191406 23.101563l21.660156 37.515625c4.664062 8.078125 15.027344 10.851562 23.101562 6.191406l41.1875-23.78125c4.253907 4.066406 8.773438 7.859375 13.503907 11.34375l-16.261719 44.683594c-3.195312 8.78125 1.324219 18.476562 10.105469 21.671875l40.710937 14.820312c8.800782 3.203125 18.484375-1.34375 21.671875-10.109375l16.265625-44.6875c5.898438.378906 11.742188.378906 17.636719 0l16.265625 44.6875c3.191406 8.765625 12.871094 13.308594 21.675781 10.109375l40.707031-14.820312c8.78125-3.191407 13.304688-12.886719 10.105469-21.671875zm1.003907 52.199219-40.710938 14.816406c-.964843.351563-2.015625-.148437-2.363281-1.101563l-18.234375-50.105468c-1.179687-3.234375-4.414063-5.28125-7.878906-4.914063-8.734375.933594-17.511719.933594-26.253907 0-3.445312-.359375-6.691406 1.660157-7.878906 4.914063l-18.234375 50.105468c-.351562.96875-1.414062 1.449219-2.363281 1.101563l-40.710938-14.816406c-.957031-.347657-1.449218-1.402344-1.101562-2.363281l18.234375-50.097657c1.1875-3.257812 0-6.898437-2.878906-8.832031-7.257813-4.875-14.015625-10.554688-20.089844-16.878906-2.402344-2.496094-6.199219-3.035156-9.199219-1.304688l-46.1875 26.664063c-.878906.507812-2.007812.207031-2.519531-.671875l-21.660156-37.519532c-.507813-.878906-.203125-2.011718.675781-2.519531l46.15625-26.648437c3.003906-1.730469 4.433594-5.289063 3.472656-8.617188-2.425781-8.371094-3.945312-17.066406-4.527344-25.839844-.226562-3.460937-2.792968-6.320312-6.207031-6.921874l-52.519531-9.261719c-1.003906-.175781-1.675781-1.136719-1.496094-2.136719l7.523438-42.664062c.175781-1.019532 1.144531-1.671876 2.132812-1.496094l52.492188 9.257812c3.410156.597656 6.792968-1.203125 8.195312-4.371094 3.539063-7.992187 7.957032-15.632812 13.140625-22.710937 2.046875-2.800781 1.921875-6.636719-.308593-9.292969l-34.277344-40.851562c-.652344-.777344-.550782-1.941406.226562-2.597656l33.1875-27.84375c.484375-.40625 1-.457032 1.34375-.425782.347656.03125.847656.167969 1.253906.652344l34.261719 40.832031c2.230469 2.65625 5.984375 3.445313 9.097657 1.917969 7.859374-3.871094 16.15625-6.886719 24.652343-8.972656 3.371094-.828125 5.738281-3.847656 5.738281-7.316406v-53.300782c0-1.015625.828126-1.84375 1.84375-1.84375h43.320313c1.015625 0 1.84375.828125 1.84375 1.84375v53.304688c0 3.46875 2.367187 6.488281 5.738281 7.316406 8.496094 2.085938 16.792969 5.101562 24.652344 8.972656 3.109375 1.527344 6.863281.738282 9.097656-1.917968l34.261719-40.832032c.652344-.777344 1.820313-.882812 2.597656-.230468l33.183594 27.847656c.78125.65625.886719 1.816406.230469 2.597656l-34.277344 40.851562c-2.230469 2.65625-2.359375 6.492188-.308594 9.292969 5.179688 7.078125 9.601563 14.71875 13.136719 22.710938 1.402344 3.167969 4.78125 4.96875 8.199219 4.367187l52.488281-9.253906c.996094-.175781 1.957031.480469 2.136719 1.496094l7.523437 42.660156c.175781 1.003906-.496093 1.964844-1.496093 2.140625l-52.519532 9.261719c-3.417968.601562-5.980468 3.457031-6.207031 6.917968-.582031 8.777344-2.105469 17.472657-4.527344 25.84375-.964843 3.328126.46875 6.882813 3.46875 8.617188l46.15625 26.648438c.878907.507812 1.183594 1.636718.675781 2.519531l-21.660156 37.515625c-.511718.878906-1.640625 1.183594-2.519531.675781l-46.183594-26.664063c-3.003906-1.734374-6.796875-1.195312-9.199219 1.304688-6.074218 6.320312-12.835937 12-20.09375 16.875-2.875 1.933594-4.0625 5.578125-2.878906 8.832031l18.234375 50.101563c.351563.960937-.144531 2.011718-1.101562 2.359375zm0 0" />
					<path fill="#007bff"
						d="m307.667969 194.519531c0-60.875-49.527344-110.40625-110.40625-110.40625-53.628907 0-99.347657 38.269531-108.703125 90.992188-.726563 4.097656 2.003906 8.007812 6.101562 8.734375 4.09375.71875 8.003906-2.003906 8.734375-6.101563 8.074219-45.519531 47.554688-78.558593 93.867188-78.558593 52.570312 0 95.335937 42.769531 95.335937 95.339843 0 52.570313-42.765625 95.339844-95.335937 95.339844-48.457031 0-89.171875-36.238281-94.707031-84.296875-.476563-4.132812-4.21875-7.097656-8.347657-6.621094-4.132812.476563-7.097656 4.214844-6.621093 8.347656 6.414062 55.660157 53.566406 97.636719 109.675781 97.636719 60.878906 0 110.40625-49.527343 110.40625-110.40625zm0 0" />
					<path fill="#007bff"
						d="m193.699219 122.230469c-4.160157 0-7.53125 3.375-7.53125 7.535156v73.726563c0 5.941406 6.578125 9.542968 11.585937 6.347656l42.566406-27.171875c3.507813-2.238281 4.535157-6.894531 2.296876-10.402344-2.238282-3.507813-6.894532-4.535156-10.402344-2.296875l-30.980469 19.777344v-59.980469c0-4.160156-3.375-7.535156-7.535156-7.535156zm0 0" />
					<path fill="#007bff"
						d="m503.566406 417.460938-20.105468-7.316407c.03125-1.261719.035156-2.484375 0-3.835937l20.105468-7.316406c6.382813-2.324219 9.671875-9.367188 7.347656-15.753907l-7.515624-20.648437c-2.324219-6.382813-9.367188-9.671875-15.753907-7.34375l-20.105469 7.316406c-.796874-1-1.621093-1.980469-2.46875-2.9375l10.699219-18.53125c3.390625-5.867188 1.371094-13.398438-4.496093-16.785156l-19.03125-10.988282c-2.839844-1.644531-6.15625-2.078124-9.324219-1.230468-3.171875.851562-5.824219 2.886718-7.464844 5.726562l-10.691406 18.523438c-1.253907-.253906-2.515625-.476563-3.785157-.660156l-3.710937-21.070313c-1.179687-6.671875-7.554687-11.144531-14.238281-9.96875l-21.640625 3.816406c-6.675781 1.175781-11.144531 7.5625-9.96875 14.234375l3.714843 21.066406c-1.125.613282-2.234374 1.253907-3.324218 1.921876l-16.386719-13.75c-5.195313-4.355469-12.941406-3.699219-17.3125 1.515624l-14.125 16.832032c-4.371094 5.203125-3.691406 12.949218 1.511719 17.316406l16.382812 13.746094c-.472656 1.191406-.910156 2.394531-1.316406 3.609375h-21.382812c-6.777344 0-12.289063 5.511719-12.289063 12.289062v21.976563c0 6.777344 5.511719 12.289062 12.289063 12.289062h21.382812c.40625 1.214844.84375 2.417969 1.316406 3.609375l-16.382812 13.746094c-5.1875 4.359375-5.867188 12.125-1.511719 17.3125l14.125 16.832031c4.355469 5.195313 12.101563 5.894532 17.316406 1.519532l16.382813-13.75c1.09375.667968 2.199218 1.308593 3.324218 1.921874l-3.714843 21.0625c-1.175781 6.675782 3.296875 13.0625 9.96875 14.238282l21.640625 3.816406c6.671875 1.179688 13.054687-3.265625 14.238281-9.96875l3.714844-21.070312c1.265625-.1875 2.527343-.40625 3.78125-.660157l10.695312 18.519531c3.402344 5.894532 10.917969 7.890626 16.789063 4.5l19.03125-10.988281c5.867187-3.386719 7.886718-10.917969 4.496094-16.789062l-10.699219-18.53125c.847656-.957031 1.671875-1.933594 2.464843-2.933594l20.109376 7.316406c6.363281 2.316407 13.433593-.976562 15.75-7.34375l7.519531-20.652343c2.3125-6.367188-.980469-13.433594-7.351563-15.75zm-13.375 28.640624-22.804687-8.300781c-3.253907-1.183593-6.898438.003907-8.832031 2.878907-2.324219 3.457031-5.03125 6.683593-8.050782 9.582031-2.5 2.402343-3.039062 6.199219-1.304687 9.199219l12.136719 21.023437-14.21875 8.210937-12.132813-21.007812c-1.730469-3-5.289063-4.433594-8.617187-3.46875-3.988282 1.152344-8.132813 1.878906-12.320313 2.15625-3.460937.230469-6.320313 2.792969-6.921875 6.210938l-4.214844 23.90625-16.171875-2.851563 4.210938-23.890625c.601562-3.414062-1.199219-6.796875-4.371094-8.199219-3.808594-1.6875-7.453125-3.792969-10.828125-6.265625-2.796875-2.046875-6.632812-1.917968-9.292969.308594l-18.589843 15.601562-10.558594-12.578124 18.585937-15.59375c2.65625-2.230469 3.449219-5.984376 1.917969-9.097657-1.84375-3.746093-3.285156-7.703125-4.277344-11.753906-.828125-3.367187-3.847656-5.734375-7.316406-5.734375h-24.261719v-16.421875h24.261719c3.46875 0 6.488281-2.367187 7.316406-5.738281.992188-4.050782 2.433594-8.007813 4.277344-11.75 1.53125-3.113282.738281-6.867188-1.917969-9.097656l-18.585937-15.59375 10.558594-12.578126 18.589843 15.601563c2.660157 2.226563 6.496094 2.355469 9.292969.308594 3.378906-2.472657 7.023438-4.582031 10.832031-6.265625 3.167969-1.402344 4.96875-4.785156 4.367188-8.199219l-4.210938-23.890625 16.171875-2.851562 4.214844 23.910156c.605469 3.414062 3.460938 5.976562 6.921875 6.207031 4.183594.277344 8.328125 1 12.324219 2.15625 3.324218.964844 6.882812-.46875 8.617187-3.46875l12.128907-21.007813 14.21875 8.210938-12.136719 21.019531c-1.734375 3.003907-1.195313 6.800781 1.304687 9.199219 3.015625 2.898438 5.726563 6.125 8.054688 9.585938 1.929687 2.875 5.570312 4.0625 8.828125 2.878906l22.804687-8.300782 5.617188 15.429688-22.808594 8.304688c-3.253906 1.183593-5.28125 4.433593-4.914062 7.878906.445312 4.183594.445312 8.339844 0 12.523437-.367188 3.445313 1.660156 6.695313 4.914062 7.882813l22.808594 8.300781zm0 0" />
					<path fill="#007bff"
						d="m456.089844 407.800781c-4.097656-.617187-7.957032 2.195313-8.585938 6.308594-1.25 8.171875-5.015625 15.59375-10.882812 21.464844-24.117188 24.121093-66.023438 7.253906-66.023438-27.347657 0-39.328124 53.210938-54.117187 72.640625-18.527343 1.992188 3.648437 6.566407 4.996093 10.222657 3 3.652343-1.992188 4.996093-6.570313 3-10.222657-2.449219-4.484374-5.539063-8.609374-9.1875-12.253906-10.152344-10.152344-23.648438-15.742187-38-15.742187-48.042969 0-71.554688 58.199219-38 91.746093 10.152343 10.152344 23.648437 15.742188 38 15.742188 27.097656 0 49.191406-19.894531 53.121093-45.582031.628907-4.113281-2.195312-7.957031-6.304687-8.585938zm0 0" />
					<path fill="#007bff"
						d="m388.25 387.203125c-18.730469 18.730469-5.28125 50.753906 21.023438 50.753906 26.289062 0 39.765624-32.011719 21.027343-50.753906-11.621093-11.617187-30.425781-11.621094-42.050781 0zm21.023438 35.6875c-12.984376 0-19.601563-15.804687-10.371094-25.035156 5.734375-5.730469 15.007812-5.734375 20.742187 0 9.234375 9.234375 2.605469 25.035156-10.371093 25.035156zm0 0" />
				</svg>
				<div class="card-body">
					<h5 class="card-title">Be more efficient</h5>
					<p class="card-text">Monitor usage history and clutter</p>
				</div>
			</div>
			<div class="card border-0 text-center">
				<svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -2 512.00001 512"
					width="100px">
					<path fill="#007bff"
						d="m476.980469 355.269531-173.371094 43.640625c-1.488281-5.101562-4.234375-9.921875-8.242187-13.929687l-55.234376-55.234375c-6.851562-6.847656-15.957031-10.617188-25.644531-10.617188h-110.175781c-2.078125-18.992187-18.210938-33.824218-37.757812-33.824218h-28.570313c-20.945313 0-37.984375 17.035156-37.984375 37.984374v76.445313c0 4.152344 3.371094 7.519531 7.519531 7.519531 4.152344 0 7.523438-3.367187 7.523438-7.519531v-76.445313c0-12.65625 10.296875-22.941406 22.941406-22.941406h28.570313c11.222656 0 20.597656 8.109375 22.5625 18.78125.558593 3.003906.382812-5.992187.382812 137.59375 0 12.65625-10.296875 22.945313-22.945312 22.945313h-28.570313c-12.644531 0-22.941406-10.289063-22.941406-22.945313v-26.90625c0-4.148437-3.371094-7.519531-7.523438-7.519531-4.148437 0-7.519531 3.371094-7.519531 7.519531v26.90625c0 20.949219 17.039062 37.988282 37.984375 37.988282h28.570313c20.949218 0 37.988281-17.039063 37.988281-37.988282v-13.3125c55.390625 9.566406 43.472656 6.082032 126.027343 46.472656 13.414063 6.566407 26.351563 19.03125 53.722657 19.03125 14.59375 0 28.816406-4.105468 41.167969-11.878906l143.054687-72.535156c3.707031-1.878906 5.1875-6.40625 3.308594-10.109375-1.878907-3.703125-6.40625-5.183594-10.109375-3.308594-.515625.261719-143.527344 72.75-144.011719 73.058594-10.007813 6.367187-21.558594 9.730469-33.410156 9.730469-22.816407 0-32.726563-10.457032-47.113281-17.5-83.941407-41.066406-72.011719-37.753906-132.636719-48.222656v-93.980469h109.949219c5.675781 0 11 2.207031 15.011718 6.21875l55.222656 55.222656c10.878907 10.878906 3.5625 29.132813-11.5 29.132813-4.496093 0-8.726562-1.753907-11.914062-4.933594l-49.75-49.769532c-2.9375-2.9375-7.703125-2.9375-10.640625 0s-2.9375 7.703126 0 10.640626l49.757813 49.769531c17.9375 17.878906 48.816406 8.753906 53.648437-16.207031 185.863281-46.789063 175.601563-44.359376 177.46875-44.359376 15.207031 0 20.355469 20.695313 6.753906 27.59375-3.707031 1.878907-5.1875 6.40625-3.308593 10.109376 1.875 3.707031 6.402343 5.1875 10.109374 3.308593 11.078126-5.617187 16.132813-16.449219 16.132813-26.320312 0-20.402344-19.964844-32.964844-34.503906-29.304688zm0 0" />
					<path fill="#007bff"
						d="m26.730469 439.195312c0 14.082032 11.457031 25.539063 25.539062 25.539063s25.539063-11.457031 25.539063-25.539063c0-10.21875-6.066406-19.433593-15.453125-23.46875-3.816407-1.640624-8.238281.121094-9.878907 3.9375-1.644531 3.816407.121094 8.238282 3.933594 9.882813 10.417969 4.480469 7.238282 20.144531-4.140625 20.144531-7.082031 0-12.152343-6.910156-10.007812-13.675781 3.242187-10.214844-15.53125-17.011719-15.53125 3.179687zm0 0" />
					<path fill="#007bff"
						d="m501.917969 184.898438-36.265625-13.199219c.242187-4.324219.242187-8.59375 0-12.9375l36.261718-13.199219c7.957032-2.890625 12.050782-11.671875 9.15625-19.628906l-12.316406-33.839844c-2.886718-7.933594-11.695312-12.042969-19.628906-9.15625l-36.261719 13.199219c-2.582031-3.449219-5.363281-6.757813-8.320312-9.90625l19.296875-33.421875c4.222656-7.3125 1.707031-16.699219-5.605469-20.921875l-31.1875-18.003907c-3.542969-2.046874-7.667969-2.59375-11.621094-1.53125-3.949219 1.058594-7.253906 3.59375-9.296875 7.136719l-19.289062 33.402344c-4.191406-.980469-8.453125-1.726563-12.75-2.230469l-6.699219-38.003906c-1.46875-8.316406-9.425781-13.886719-17.742187-12.421875l-35.464844 6.25c-8.316406 1.46875-13.890625 9.425781-12.421875 17.742187l6.699219 37.988282c-3.847657 1.949218-7.59375 4.113281-11.207032 6.484375l-29.558594-24.804688c-6.496093-5.453125-16.144531-4.585937-21.574218 1.890625l-23.148438 27.585938c-5.441406 6.480468-4.597656 16.132812 1.886719 21.574218l29.546875 24.792969c-1.703125 3.96875-3.183594 8.039063-4.429688 12.171875h-38.570312c-8.445312 0-15.3125 6.871094-15.3125 15.316406v36.007813c0 8.445313 6.867188 15.316406 15.3125 15.316406h38.570312c1.246094 4.136719 2.726563 8.203125 4.429688 12.171875l-29.546875 24.789063c-6.46875 5.429687-7.316406 15.109375-1.886719 21.582031l23.148438 27.585938c5.425781 6.464843 15.105468 7.3125 21.574218 1.886718l29.558594-24.804687c3.613282 2.371093 7.359375 4.535156 11.207032 6.484375l-6.699219 37.988281c-1.46875 8.335937 4.085937 16.269531 12.421875 17.742187l35.464844 6.25c8.273437 1.46875 16.269531-4.070312 17.742187-12.421874l6.699219-38.003907c4.296875-.503906 8.558594-1.25 12.753906-2.230469l19.285156 33.402344c4.222656 7.316406 13.605469 9.832032 20.921875 5.609375l31.1875-18.007812c7.3125-4.222657 9.824219-13.605469 5.601563-20.917969l-19.296875-33.425781c2.957031-3.144531 5.738281-6.457031 8.320312-9.90625l36.261719 13.199219c7.941406 2.886718 16.726562-1.183594 19.628906-9.15625l12.316406-33.835938c2.894532-7.957031-1.195312-16.738281-9.152343-19.632812zm-4.980469 14.484374-12.316406 33.839844c-.015625.035156-.039063.105469-.144532.152344-.101562.050781-.171874.023438-.207031.011719l-41.644531-15.160157c-3.25-1.179687-6.886719.003907-8.816406 2.875-4.003906 5.960938-8.664063 11.511719-13.855469 16.496094-2.496094 2.398438-3.035156 6.1875-1.304687 9.183594l22.164062 38.390625c.078125.132813.03125.300781-.097656.375l-31.1875 18.003906c-.128906.078125-.296875.03125-.375-.097656l-22.152344-38.367187c-1.726562-2.996094-5.277344-4.425782-8.601562-3.464844-6.875 1.988281-14.011719 3.238281-21.214844 3.714844-3.453125.226562-6.308594 2.785156-6.910156 6.199218l-7.695313 43.65625c-.027344.148438-.167969.246094-.320313.222656-.414062-.074218-35.757812-6.152343-35.683593-6.570312l7.695312-43.632812c.597657-3.40625-1.203125-6.785157-4.363281-8.183594-6.5625-2.90625-12.835938-6.535156-18.644531-10.785156-2.800781-2.050782-6.628907-1.917969-9.277344.304687l-33.957031 28.492187c-.113282.097657-.285156.082032-.382813-.03125l-23.148437-27.585937c-.097656-.117187-.082032-.289063.03125-.386719l33.941406-28.480468c2.65625-2.226563 3.445312-5.976563 1.914062-9.082032-3.171874-6.449218-5.652343-13.257812-7.363281-20.238281-.824219-3.363281-3.839843-5.726563-7.304687-5.726563h-44.308594c-.152344 0-.273438-.121093-.273438-.273437v-36.011719c0-.148437.121094-.273437.273438-.273437h44.308594c3.464844 0 6.476562-2.363281 7.304687-5.726563 1.710938-6.976562 4.191407-13.785156 7.363281-20.234375 1.53125-3.109375.742188-6.859375-1.914062-9.085937l-33.941406-28.480469c-.027344-.019531-.085938-.070313-.097656-.183594-.007813-.113281.039062-.171875.066406-.199219l23.144531-27.585937c.027344-.027344.074219-.085937.1875-.097656.113281-.007813.171875.039062.199219.0625l33.957031 28.492187c2.652344 2.230469 6.484375 2.355469 9.277344.308594 5.808593-4.253906 12.082031-7.882812 18.644531-10.785156 3.160156-1.398438 4.960938-4.777344 4.363281-8.183594l-7.695312-43.632812c-.027344-.148438.074219-.292969.222656-.316407l35.464844-6.253906c.035156-.003906.109375-.019531.203125.046875.09375.0625.105468.140625.113281.175781l7.695313 43.65625c.601562 3.410157 3.457031 5.972657 6.910156 6.199219 7.207031.476562 14.34375 1.726562 21.214844 3.714844 3.324218.960937 6.875-.46875 8.605468-3.460938l22.148438-38.371094c.019531-.03125.058594-.097656.167968-.125.109376-.03125.175782.007813.207032.027344l31.1875 18.003906c.128906.074219.175781.242188.101562.375l-22.167968 38.390626c-1.730469 2.996093-1.191407 6.785156 1.304687 9.183593 5.191406 4.988281 9.855469 10.539063 13.855469 16.496094 1.929687 2.871094 5.566406 4.050781 8.816406 2.871094l41.644531-15.15625c.140625-.046875.296875.023437.351563.164062l12.316406 33.839844c.011719.035156.039062.105469-.011719.207031-.046875.105469-.117187.128906-.152343.144532l-41.652344 15.15625c-3.246094 1.183593-5.269532 4.429687-4.902344 7.867187.738281 6.917969.796875 14.085937 0 21.554687-.367188 3.4375 1.65625 6.683594 4.902344 7.867188l41.652344 15.15625c.035156.015625.105468.039062.152343.144531.050781.101563.023438.171875.011719.207031zm0 0" />
					<path fill="#007bff"
						d="m409.140625 116.285156-84.558594 84.558594-35.636719-35.636719c-2.9375-2.933593-7.699218-2.933593-10.636718 0-2.9375 2.9375-2.9375 7.699219 0 10.636719l36.476562 36.476562c5.414063 5.414063 14.179688 5.414063 19.59375 0l85.398438-85.398437c2.9375-2.9375 2.9375-7.699219 0-10.636719s-7.699219-2.9375-10.636719 0zm0 0" />
				</svg>
				<div class="card-body">
					<h5 class="card-title">Easy to install</h5>
					<p class="card-text">in less than an hour</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-secondary">
	<div class="container d-flex flex-column justify-content-center align-items-center">
		<div class="row d-flex w-100 justify-content-center align-items-center">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 py-4 align-self-center">
				<h2 class="text-uppercase text-center mx-auto pb-4">Key Industries:</h2>
				<ul class="lead list-group shadow-sm">
					<li class="list-group-item">Electronics/Semiconductor</li>
					<li class="list-group-item">Automotive</li>
					<li class="list-group-item">Aerospace & Defense</li>
					<li class="list-group-item">Laboratory Management</li>
					<li class="list-group-item">Industrial Manufacturing</li>
					<li class="list-group-item">Robotics</li>
					<li class="list-group-item">Civil Engineering / AEC</li>
					<li class="list-group-item">Marine & Shipbuilding</li>
					<li class="list-group-item">Oil & Gas</li>
					<li class="list-group-item">Medical Devices</li>
					<li class="list-group-item">Pharmaceutical</li>
					<li class="list-group-item">Consumer and Retail</li>
					<li class="list-group-item">Academic Institutions</li>
				</ul>
			</div>
		</div>
		<a class="btn btn-primary rounded-pill btn-lg mx-auto"
			href="https://www.cadmicro.com/storage/resources/February2021/ERmr91Ho3xGUonCkgrPl.pdf" target="_blank">DOWNLOAD
			THE BROCHURE</a>
	</div>
</section>
@stop

@push('foot')
<div class="modal fade" id="trial" tabindex="-1" role="dialog" aria-labelledby="trial" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">GET A FREE 30 DAY TRIAL</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div data-form-block-id="ae40686a-2772-eb11-a812-002248046855"></div>
				<div id="dQkzV0-NgniX-XBFwpPDvC9l-I_IUovEohjeuJ5wPMJc"></div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="demor" tabindex="-1" role="dialog" aria-labelledby="demor" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">GET A DEMO</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div data-form-block-id="f3e6c0bf-2772-eb11-a812-002248046855"></div>
				<div id="dwgwYiA6VRXAG96ttbb5fa1Yv5E1DD-o7_XBE1AADuS4"></div>
			</div>
		</div>
	</div>
</div>
@endpush