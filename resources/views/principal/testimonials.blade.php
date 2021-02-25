<section class="container mb-7">
	@title(['label' => 'Onde já cultivamos'])
	<div class="row">
		<div class="col-12">
		  <div class="swiper-container pt-3 pb-5">
		    <div class="swiper-wrapper">
	            @include('principal.components.company', ['name' => 'LAVRA', 'filename' => 'lavra'])
	            @include('principal.components.company', ['name' => 'Polimotores', 'filename' => 'polimotores'])
	            @include('principal.components.company', ['name' => 'Araujo & Villasanti', 'filename' => 'araujoevillasanti'])
	            @include('principal.components.company', ['name' => 'ICMBIO', 'filename' => 'icmbio'])
	            @include('principal.components.company', ['name' => 'ENSP', 'filename' => 'ensp'])
	            @include('principal.components.company', ['name' => 'Acesso Fácil Brasil', 'filename' => 'acessofacil'])
	            @include('principal.components.company', ['name' => 'Metropolis', 'filename' => 'metropolis'])
		    </div>
		    <div class="swiper-pagination"></div>
		  </div>
		</div>
	</div>
</section>