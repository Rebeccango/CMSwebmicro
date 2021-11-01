@extends('layouts.layout')
@section('title')
Demo Equipment for Sale
@stop
@section('meta')
<link rel="canonical" href="{{route('demo-equipment-sale')}}" />
@stop
@section('description')While quantities last, CAD Micro is offering our demo equipment for sale at a greatly reduced price. This equipment has
been handled with care by our team of certified additive technicians and has only been very gently used for
demonstration purposes. @stop
@section('body')
<section>
	<div class="container-fluid">
		<div class="section-block ">
			<h1 class="display-4">DEMO EQUIPMENT FOR SALE</h1>
			<br />
			<h2>SAVE ON YOUR NEXT 3D PRINTER PURCHASE!</h2>
			<p class="lead">While quantities last, CAD Micro is offering our demo equipment for sale at a reduced
				price. This equipment has
				been handled with care by our team of certified additive technicians and has only been very gently used for
				demonstration purposes.</p>
			<div class="mt-5 d-flex row flex-row align-items-center justify-content-between rounded section-secondary p-4">
				<h3 class="m-0 col-12 col-md-6" style="font-size:24px;">Check out the equipment in our Virtual
					Showroom</h3>
				<div class="col-12 col-md-6 d-flex justify-content-start justify-content-md-end ">
					<div>
					<a class="btn btn-primary rounded btn-lg mt-3 mt-md-0 w-100 w-md-auto d-flex align-items-center justify-content-between"
						href="http://showroom.cadmicro.com" target="_blank">Virtual Showroom <i
							class="ml-3 fas fa-arrow-right"></i></a>
							</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr />
<section>
	<div class="container-fluid">
		<h3 class="h1 mx-lg-0 mb-3 main-title mt-0">Equipment for sale</h3>
		<p class="lead">Take the opportunity to purchase the equipment you’ve been wanting at a reduced price – while
			quantities last!</p>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col" class="align-middle px-4">Name</th>
					<th scope="col" class="align-middle px-4 d-none d-md-table-cell">Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/formlabs-form3.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/formlabs-form3.png" width="180px" /></a>
					</th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">Formlabs Form 3</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">Scale prototyping and production as your business
						grows with the Form 3, an affordable, industrial-quality 3D printer
						that consistently delivers.</td>
				</tr>
				{{-- <tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/formlabs-form3l.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/formlabs-form3l.png"
								width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">Formlabs Form 3L</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">A Large Format 3D Printer Compact Enough for the
						Office and Robust Enough for the Factory Floor</td>
				</tr> --}}
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/nexa3d.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/nexa3d.png" width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">NEXA3D NXE 400</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell w-100">The World’s Fastest Industrial 3D Printer.
						Take 3D printing from dialup speed to broadband with the NXE400. With a 16L build volume, intelligent
						optimization, and Nexa3D’s own patented LSPc technology, the NXE400 3D printer is perfect for any
						application.</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/ultimaker-s3.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/ultimaker-s3.png" width="180px" /></a>
					</th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">Ultimaker 3</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">Predecessor to the Ultimaker S3, the Ultimaker 3 is a reliable dual extrusion 3D printer that enables designers,
					engineers and manufacturers to achieve complex geometries and remarkable design intricacy.</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/ultimaker-s5-bundle.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/ultimaker-s5-bundle.png"
								width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">Ultimaker S5 Pro Bundle</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">Best-in-Class desktop printer specs meet the
						ease-of-use that comes with a complete 3D printing solution trusted by
						hundreds of thousands of professionals worldwide. The Air Manager seamlessly integrates with the Ultimaker
						S5. Fully enclosing the build chamber to create an inside-out
						airflow, it filters up to 95% of all ultrafine particles (UFPs). Push the Ultimaker S5 to a new level of
						productivity and consistency with the Material Station. This one-of-a-kind
						upgrade boosts and simplifies the 3D printing workflow.</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/intamsys-funmat-ht.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/intamsys-funmat-ht.png"
								width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">Intamsys HT</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">The FUNMAT HT is fully capable of 3D printing
						high-performance functional materials like PEEK, ULTEM and PPSU, in
						addition to a broad range of engineering thermoplastics.</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/intamsys-410-pro.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/intamsys-410-pro.png"
								width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">Intamsys 410 Pro</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">Featuring a dual extruder and a large build chamber,
						the FUNMAT PRO 410 is an industrial quality additive manufacturing
						solution, able to print in PEEK, PEKK, PPSU, ULTEM, ABS, PC and many more functional materials.</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/bigrep-studio-gen2.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/bigrep-studio-gen2.png"
								width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">BigRep STUDIO Gen 2</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">BigRep STUDIO Gen 2 3D printer, made for abrasive
						and engineering-grade materials in a size suitable for any work environment.
						The G2’s rapid-heating print bed and temperature-controlled filament chamber enable the printer to produce
						incredible,
						high-quality parts in engineering-grade materials. It’s sleek, space-conscious size makes it suitable for
						all
						workspaces, from design labs to production floors.</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/bigrep-studio-gen2.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/bigrep-studio-gen2.png"
								width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">BigRep STUDIO Gen 1</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">BigRep STUDIO Gen 1 3D printer, made for abrasive
						and engineering-grade materials in a size suitable for any work environment.
						The G2’s rapid-heating print bed and temperature-controlled filament chamber enable the printer to produce
						incredible,
						high-quality parts in engineering-grade materials. It’s sleek, space-conscious size makes it suitable for
						all
						workspaces, from design labs to production floors.</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/markforged-onyx-pro.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/markforged-onyx-pro.png"
								width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">Markforged Onyx Pro</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">For load-bearing applications that require real
						strength, these parts make the grade. Now you can print parts faster and
						cheaper than machining metal.</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/markforged-mark-2.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/markforged-mark-2.png"
								width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">Markforged Mark II</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">The Mark Two delivers industrial grade build quality
						and part strength in a desktop form-factor. Print incredible strong
						continuous carbon fiber parts.</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/markforged-x7.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/markforged-x7.png" width="180px" /></a>
					</th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">Markforged X7</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">The X7 industrial 3D printer has the power of
						Continuous Carbon Fiber at your fingertips. The X7 has an industrial
						material or print mode capable of fabricating a functional part. Free 3D Printing Software. High Strength
						Materials.
						Trusted Around the Globe. Easy-to-Use.</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/markforged-metal-x-sinter-wash-1.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/markforged-metal-x-sinter-wash-1.png"
								width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">Markforged Metal X with Sinter 1 & Wash</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">Everything you need to go from design to fully
						functional metal parts in under 24 hours – the Metal X 3D print system is
						an end-to-end manufacturing solution. From the company that revolutionized 3D printing with composite carbon
						fiber,
						comes a breakthrough in metal 3D printing.</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/hp-jet-fusion-4200-system.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/hp-jet-fusion-4200-system.png"
								width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">HP Jet Fusion 4200 system</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">The HP Jet Fusion Printing Solution reinvents how
						you prototype and produce functional parts, delivering quality output,
						up to 10 times faster at half the cost!</td>
				</tr>
				<tr>
					<th scope="row" class="align-middle" style="width:1%"><a
							href="https://www.cadmicro.com/storage/pages/demo-equipment-sale/dyemansion-powershot-c.png"
							class="mp-popup-image mp-single"><img
								src="https://www.cadmicro.com/storage/pages/demo-equipment-sale/dyemansion-powershot-c.png"
								width="180px" /></a></th>
					<td class="font-weight-bold align-middle p-4" style="width:30%">DyeMansion PowerShot C</td>
					<td class="w-100 align-middle p-4 d-none d-md-table-cell">The DyeMansion Powershot C enables you to clean a
						full HP Jet Fusion 4200 or 5200 print job in only 10 minutes, allowing
						you to print and process more parts in a fraction of the time and significantly reduce the personnel costs
						associated
						with manual cleaning of your parts.</td>
				</tr>

			</tbody>
		</table>
	</div>
</section>

<section class="section-secondary">
	<div class="container-fluid d-flex align-items-center justify-content-center flex-column">
		<div class="section-title center-block mx-auto mb-0">
			<h2>I'm Interested</h2>
			<div class="section-title-divider"></div>
		</div>
		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 bg-white shadow p-4 d-flex align-content-center justify-content-center mt-5">
			<div data-form-block-id="64815581-8e86-eb11-a812-00224809df1b"></div>
			<div id="d88CWDI6F0d7LitszcFQahLhgJhTNwiQ105IuG2OfVbQ"></div>
		</div>
	</div>
</section>
@stop