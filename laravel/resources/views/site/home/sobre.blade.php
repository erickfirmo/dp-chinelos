@extends('site.layouts.site')
@section('title', 'DP Chinelos | Sobre')
@section('description', 'Loja Oficial')
@section('content')

@include('site.partials._modal_1')
@include('site.partials._modal_2')

<!-- Contato -->
<div class="banner_bottom_agile_info">
	<div class="container">
	   <div class="agile-contact-grids">
				<div class="agile-contact-left">
					<div class="col-md-8 address-grid">
						<h4> Sobre <span>A Loja</span></h4>
							<div class="mail-agileits-w3layouts">
								<div class="contact-right">
									<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt molestie egestas. Aliquam semper eros quis viverra porttitor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer est enim, laoreet et ex non, maximus convallis dolor. Praesent rhoncus nisl a consequat auctor. Aliquam egestas nisi vitae fringilla imperdiet. Vivamus gravida vulputate mauris imperdiet aliquet. Nulla rutrum lacus risus, nec maximus leo tempus nec. Curabitur varius, nulla id lacinia dignissim, neque metus consequat libero, ac semper sapien felis ut erat. Nullam commodo sodales porttitor. Nulla dictum vestibulum diam in semper. Proin lacinia arcu sit amet urna facilisis, ac iaculis massa lobortis. Maecenas a eros elit. Suspendisse rutrum felis sed facilisis vehicula.

</span>
								</div>
								<div class="clearfix"> </div>
                     </div>
                     
							<ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
							                              <li class="share">Compartilhe : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
					</div>
					<div class="col-md-4">
						<img class="img-responsive" src="{{ asset('vendor/site/assets/images/chinelos-sobre.jpg') }}" alt="chinelos estampados">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
 <!--//contact-->


 <div class="contact-w3-agile1 map" data-aos="flip-right">	
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
</div>

@include('site.partials._info_icons')


@endsection