@include('partials.header', ['title' => 'Home Page'])

	<main>
		<header class="w-full h-96 mx-auto mb-auto bg-sky-300">
			{{-- <img src="" alt=""> --}}
			<div class="h-full w-full flex flex-col justify-center items-center">
				<h1 class="text-center text-4xl text-sky-950 font-black">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h1>
				<h6 class="mt-10 text-center text-sky-950">Illum dolorem harum minus provident magni tenetur nobis mollitia expedita</h6>
				<button class="w-36 h-10 mt-4 bg-sky-600 font-bold rounded-xl">BUTTON</button>
			</div>
			
		</header>
	</main>

@include('partials.footer')