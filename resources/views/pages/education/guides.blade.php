@extends('layouts.layout')
@section('title')
Education Guides | Inspiring Innovation in Future Generations
@stop
@section('meta')
<link rel="canonical" href="{{route('education.guides')}}" />
@stop
@section('description')>CAD MicroSolutions believes that aligning Industry and Academia through meaningful partnerships
will transform the learning experience and enable innovation in both instructors and students alike. We offer solutions
to Educational institutes across Canada that reinvent learning through the use of innovative technologies and
forward-looking curriculum. @stop
@section('keywords') education, learn, training, guides, solutions, innovation, institutes, hardware, software,
services, support @stop
@section('body')
<section>
	<div class="section-title flex-column d-flex  align-items-center justify-content-center mb-auto">
		<h1>Thank you for your interest!</h1>
		<div class="section-title-divider"></div>
		<h2 class="h3">Help Inspire Innovation in Future Generations</h2>
		<p class="m-auto text-center pt-3 text-large" style="max-width: 600px">Please feel free to download any of the following educational guides below.</p>
	</div>
</section>
<section class="section--grey">
	<div class="d-flex flex-row row align-items-center justify-content-start">
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('storage/uploads/education/Clemson-University-Case-Study-HP.pdf')}}" target="_blank"
				class="pdf-item" style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('storage/uploads/education/Clemson-University-Case-Study-HP.jpg')}}" class="w-100"
							alt="Clemson University students turn imagination into innovation with HP Multi Jet Fusion technology">
					</div>
					<figcaption>Clemson University students turn imagination into innovation with HP Multi Jet Fusion technology</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('storage/uploads/education/eBook-Education-and-Research.pdf')}}" target="_blank" class="pdf-item"
				style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('storage/uploads/education/eBook-Education-and-Research.jpg')}}" class="w-100" alt="Large-Format 3D Printers for Education & Research">
					</div>
					<figcaption>Large-Format 3D Printers for Education & Research</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('storage/uploads/education/Formlab-Lesson-Plan-Bundle-For-Secondary-Schools.pdf')}}" target="_blank"
				class="pdf-item" style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('storage/uploads/education/Formlab-Lesson-Plan-Bundle-For-Secondary-Schools.jpg')}}"
							class="w-100" alt="3D Printing Lesson Plan Bundle for Secondary STEAM Education">
					</div>
					<figcaption>3D Printing Lesson Plan Bundle for Secondary STEAM Education</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('storage/uploads/education/Formlabs-Lesson-Plan-Bundle-For-Universities.pdf')}}" target="_blank"
				class="pdf-item" style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('storage/uploads/education/Formlabs-Lesson-Plan-Bundle-For-Universities.jpg')}}" class="w-100"
							alt="3D Printing Lesson Plan Bundle for University STEAM Education">
					</div>
					<figcaption>3D Printing Lesson Plan Bundle for University STEAM Education</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('storage/uploads/education/Guide-To-SLA-3D-Printing-for-Education-and-Research.pdf')}}"
				target="_blank" class="pdf-item" style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('storage/uploads/education/Guide-To-SLA-3D-Printing-for-Education-and-Research.jpg')}}"
							class="w-100" alt="Guide to SLA 3D Printing for Education and Research">
					</div>
					<figcaption>Guide to SLA 3D Printing for Education and Research</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('storage/uploads/education/HP-Higher-Education-eBook.pdf')}}" target="_blank" class="pdf-item"
				style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('storage/uploads/education/HP-Higher-Education-eBook.jpg')}}" class="w-100"
							alt="HP: Revolution in Prototyping, Design, and Manufacturing">
					</div>
					<figcaption>HP: Revolution in Prototyping, Design, and Manufacturing</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('storage/uploads/education/Library-Stories-3D-Printing-Across-Disciplines-Ultimaker.pdf')}}"
				target="_blank" class="pdf-item" style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('storage/uploads/education/Library-Stories-3D-Printing-Across-Disciplines-Ultimaker.jpg')}}"
							class="w-100" alt="Ultimaker: Library stories: 3D printing across disciplines">
					</div>
					<figcaption>Ultimaker: Library stories: 3D printing across disciplines</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('storage/uploads/education/St-Matthews-Episcopal-Day-Maker-Lab-Ultimaker-Case-Study.pdf')}}"
				target="_blank" class="pdf-item" style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('storage/uploads/education/St-Matthews-Episcopal-Day-Maker-Lab-Ultimaker-Case-Study.jpg')}}"
							class="w-100" alt="Ultimaker: Inspiring through innovation">
					</div>
					<figcaption>Ultimaker: Inspiring through innovation</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('storage/uploads/education/Ultimaker-In-Education-White-Paper.pdf')}}"
				target="_blank" class="pdf-item" style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('storage/uploads/education/Ultimaker-In-Education-White-Paper.jpg')}}"
							class="w-100" alt="Ultimaker in Education: Share, Inspire, Collaborate, Learn">
					</div>
					<figcaption>Ultimaker in Education: Share, Inspire, Collaborate, Learn</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('storage/uploads/education/How-to-Build-an-Additive-Manufacturing-Center-at-Your-University.pdf')}}"
				target="_blank"
				class="pdf-item" style="max-width:300px">
				<figure>
					<div class="figimg">
						<img
							src="{{asset('storage/uploads/education/How-to-Build-an-Additive-Manufacturing-Center-at-Your-University.jpg')}}"
							class="w-100"
							alt="Markforged: How to Build an Additive Manufacturing Center at Your University">
					</div>
					<figcaption>Markforged: How to Build an Additive Manufacturing Center at Your University</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('/storage/resources/April2020/AQSYJqt5er2KeC5rQGwx.pdf')}}"
				target="_blank" class="pdf-item" style="max-width:300px">
				<figure>
					<div class="figimg">
						<img
							src="{{asset('/storage/resources/April2020/1t2QhEALvRewyQcH9MW6.JPG')}}"
							class="w-100" alt="HP: Learning in 3 Dimensions: Report on the EDUCAUSE/HP Campus of the Future Project">
					</div>
					<figcaption>HP: Learning in 3 Dimensions: Report on the EDUCAUSE/HP Campus of the Future Project</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('/storage/resources/April2020/tVN8OBiUeR8aGe9QLqvQ.pdf')}}"
				target="_blank" class="pdf-item" style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('/storage/resources/April2020/SzeEbTdRiXPUpmxtBq8x.JPG')}}" class="w-100"
							alt="HP: The Ultimate Guide to Educational Technology Benefits">
					</div>
					<figcaption>HP: The Ultimate Guide to Educational Technology Benefits</figcaption>
				</figure>
			</a>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="https://youtu.be/8gaouH_gg50" target="_blank" class="pdf-item"
				style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('/storage/resources/February2020/SBRgljMOrwnXIH5I9Ohq.png')}}" class="w-100"
							alt="WEBINAR: 3D Printing in Higher Education – Paving the Way for Future Innovation">
					</div>
					<figcaption>WEBINAR: 3D Printing in Higher Education – Paving the Way for Future Innovation</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('/storage/resources/January2020/CkONW4kNpVb0DTsP0aS2.pdf')}}" target="_blank" class="pdf-item" style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('/storage/resources/January2020/CkONW4kNpVb0DTsP0aS2.png')}}" class="w-100"
							alt="E-Book: Additive Manufacturing in Higher Education">
					</div>
					<figcaption>E-Book: Additive Manufacturing in Higher Education</figcaption>
				</figure>
			</a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 d-flex align-items-center justify-content-center py-3">
			<a href="{{asset('/storage/resources/January2020/zXifObIRPTX0bQaZbG2R.pdf')}}" target="_blank" class="pdf-item"
				style="max-width:300px">
				<figure>
					<div class="figimg">
						<img src="{{asset('/storage/resources/January2020/zXifObIRPTX0bQaZbG2R.png')}}" class="w-100"
							alt="HP: The Ultimate Guide to Educational Technology Benefits">
					</div>
					<figcaption>Curriculum Guide: Educate the Future Workforce to Embrace Additive Technologies</figcaption>
				</figure>
			</a>
		</div>
	</div>
</section>
@stop