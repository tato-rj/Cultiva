<section class="bg-light w-100 py-6 mb-7">
	<div class="container">
		@title(['label' => 'Nossos serviços'])
		<div class="row">
            @include('principal.components.service', ['icon' => 'gestao', 'label' => 'Estruturação de Modelos de Gestão'])
            @include('principal.components.service', ['icon' => 'cultura', 'label' => 'Desenho de Cultura Organizacional'])
            @include('principal.components.service', ['icon' => 'elaboracao', 'label' => 'Elaboração e Facilitação de Projetos'])
            @include('principal.components.service', ['icon' => 'planejamento', 'label' => 'Planejamento Estratégico Participativo'])
            @include('principal.components.service', ['icon' => 'lideranca', 'label' => 'Formação de Lideranças'])
            @include('principal.components.service', ['icon' => 'colaboracao', 'label' => 'Treinamento em Criação colaborativa de projetos'])
            {{-- @include('principal.components.service', ['icon' => 'consultoria', 'label' => 'Consultoria organizacional']) --}}
		</div>
	</div>
</section>