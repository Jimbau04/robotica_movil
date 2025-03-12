@extends('layouts.public')

@section('titulo', 'Inicio')
    
@section ('contenido')
    <div class="relative isolate min-h-screen w-full px-4 sm:px-6 lg:px-8 flex items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="200" data-aos-mirror="true">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0B2447] to-[#19376D] opacity-45 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-7xl py-16 sm:py-24 lg:py-32 w-full">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center" data-aos="fade-down" data-aos-delay="200" data-aos-offset="200" data-aos-mirror="true">
                <div class="relative rounded-full px-3 py-1 text-sm/6 text-[#666666] ring-1 ring-[#576CBC]/20 hover:ring-[#576CBC]/40">
                    {{ date('Y') }} - Innovación en Robótica Móvil <a href="#blog" class="font-semibold text-[#576CBC]"><span class="absolute inset-0" aria-hidden="true"></span>Últimas Noticias <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center transition-all duration-300 hover:transform hover:scale-105" data-aos="fade-up" data-aos-delay="200" data-aos-offset="200" data-aos-mirror="true">
                <h1 class="text-4xl font-bold tracking-tight text-balance text-[#808080] sm:text-6xl md:text-7xl">LABORATORIO DE ROBÓTICA MÓVIL</h1>
                <p class="mx-auto mt-6 max-w-2xl text-base text-pretty text-[#666666] sm:text-lg md:text-xl">Explorando las fronteras de la innovación tecnológica en {{ date('Y') }}. Descubre las últimas tendencias en robótica móvil, inteligencia artificial y sistemas autónomos.</p>
                <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-x-6" data-aos="zoom-in" data-aos-delay="400" data-aos-offset="200" data-aos-mirror="true">
                    <a href="#blog" class="w-full sm:w-auto rounded-md bg-[#19376D] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#0B2447] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#19376D]">Ver Blog</a>
                    <a href="#about" class="w-full sm:w-auto text-sm font-semibold text-[#999999] hover:text-[#666666]">Conoce más <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section -->
    <div id="blog" class="relative isolate py-32 sm:py-20 bg-white" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="200" data-aos-mirror="true">
        <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
            <div class="relative left-[calc(50%+11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0B2447] to-[#19376D] opacity-30 sm:left-[calc(50%+15rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
            <div class="relative right-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] translate-x-1/2 rotate-[180deg] bg-gradient-to-tr from-[#19376D] to-[#0B2447] opacity-30 sm:right-[calc(50%-15rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center transition-all duration-300 hover:transform hover:scale-105 " data-aos="fade-up" data-aos-delay="100" data-aos-offset="200" data-aos-mirror="true">
                <h2 class="text-3xl font-bold tracking-tight text-[#808080] sm:text-4xl">Blog de Robótica</h2>
                <p class="mt-2 text-lg leading-8 text-[#666666]">Descubre las últimas novedades, artículos y avances en el mundo de la robótica móvil.</p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <!-- Artículo 1: Noticia -->
                <article class="flex flex-col items-start transition-transform duration-300 hover:scale-105" data-aos="fade-right" data-aos-delay="200" data-aos-offset="200" data-aos-mirror="true">
                    <div class="relative w-full">
                        <img src="/images/robot1.jpg" alt="Avances en IA" class="aspect-[16/9] w-full rounded-2xl bg-[#f8f9fa] object-cover">
                        <div class="absolute top-0 right-0 mt-4 mr-4">
                            <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Noticia</span>
                        </div>
                    </div>
                    <div class="max-w-xl">
                        <div class="mt-8 flex items-center gap-x-4 text-xs">
                            <time datetime="2024-03-16" class="text-[#666666]">{{ date('d/m/Y') }}</time>
                            <span class="relative z-10 rounded-full bg-[#e9ecef] px-3 py-1.5 font-medium text-[#666666]">Inteligencia Artificial</span>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-[#808080] group-hover:text-[#666666]">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Últimos Avances en IA para Robots Móviles
                                </a>
                            </h3>
                            <p class="mt-5 text-sm leading-6 text-[#666666]">Descubre cómo la inteligencia artificial está revolucionando el campo de la robótica móvil con nuevos algoritmos de aprendizaje.</p>
                        </div>
                    </div>
                </article>

                <!-- Artículo 2: Video -->
                <article class="flex flex-col items-start transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="300" data-aos-offset="200" data-aos-mirror="true">
                    <div class="relative w-full">
                        <img src="/images/robot2.jpg" alt="Tutorial de ROS" class="aspect-[16/9] w-full rounded-2xl bg-[#f8f9fa] object-cover">
                        <div class="absolute top-0 right-0 mt-4 mr-4">
                            <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-700/10">Video</span>
                        </div>
                    </div>
                    <div class="max-w-xl">
                        <div class="mt-8 flex items-center gap-x-4 text-xs">
                            <time datetime="2024-03-15" class="text-[#666666]">{{ date('d/m/Y', strtotime('-1 day')) }}</time>
                            <span class="relative z-10 rounded-full bg-[#e9ecef] px-3 py-1.5 font-medium text-[#666666]">Tutorial</span>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-[#808080] group-hover:text-[#666666]">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Tutorial: Introducción a ROS 2
                                </a>
                            </h3>
                            <p class="mt-5 text-sm leading-6 text-[#666666]">Aprende los conceptos básicos de ROS 2 y cómo implementarlo en tus proyectos de robótica.</p>
                        </div>
                    </div>
                </article>

                <!-- Artículo 3: Artículo Técnico -->
                <article class="flex flex-col items-start transition-transform duration-300 hover:scale-105" data-aos="fade-left" data-aos-delay="400" data-aos-offset="200" data-aos-mirror="true">
                    <div class="relative w-full">
                        <img src="/images/codigo1.jpg" alt="SLAM" class="aspect-[16/9] w-full rounded-2xl bg-[#f8f9fa] object-cover">
                        <div class="absolute top-0 right-0 mt-4 mr-4">
                            <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-700/10">Artículo</span>
                        </div>
                    </div>
                    <div class="max-w-xl">
                        <div class="mt-8 flex items-center gap-x-4 text-xs">
                            <time datetime="2024-03-14" class="text-[#666666]">{{ date('d/m/Y', strtotime('-2 day')) }}</time>
                            <span class="relative z-10 rounded-full bg-[#e9ecef] px-3 py-1.5 font-medium text-[#666666]">Investigación</span>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-[#808080] group-hover:text-[#666666]">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Avances en Algoritmos SLAM
                                </a>
                            </h3>
                            <p class="mt-5 text-sm leading-6 text-[#666666]">Análisis profundo de los últimos avances en algoritmos SLAM para la navegación autónoma de robots.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div id="about" class="relative isolate overflow-hidden bg-[#f8f9fa] py-24 sm:py-32" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="200" data-aos-mirror="true">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[45deg] bg-gradient-to-br from-[#0B2447] to-[#19376D] opacity-25 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
            <div class="relative right-[calc(50%+11rem)] aspect-[1155/678] w-[36.125rem] translate-x-1/2 rotate-[270deg] bg-gradient-to-bl from-[#19376D] to-[#0B2447] opacity-25 sm:right-[calc(50%+15rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-[#808080] sm:text-4xl">Sobre el Laboratorio</h2>
                <p class="mt-6 text-lg leading-8 text-[#666666]">
                    Nuestro laboratorio se dedica a la investigación y desarrollo de tecnologías innovadoras en el campo de la robótica móvil. 
                    Trabajamos en estrecha colaboración con la industria y la academia para crear soluciones robóticas que impacten positivamente en la sociedad.
                </p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:mt-10 lg:max-w-none lg:grid-cols-12">
                <div class="relative lg:order-last lg:col-span-5">
                    <img src="/images/codigo1.jpg" alt="Código de programación" class="aspect-[16/9] w-full rounded-2xl bg-[#f8f9fa] object-cover lg:aspect-auto lg:h-full">
                </div>
                <div class="max-w-xl text-base leading-7 text-[#666666] lg:col-span-7 transition-all duration-300 hover:transform hover:scale-105" data-aos="fade-right" data-aos-delay="400" data-aos-offset="200" data-aos-mirror="true">
                    <p>Nuestras áreas de investigación incluyen:</p>
                    <ul role="list" class="mt-8 max-w-xl space-y-8 text-[#666666]">
                        <li class="flex gap-x-3">
                            <span class="mt-1 h-5 w-5 flex-none text-[#19376D]">•</span>
                            <span><strong class="font-semibold text-[#808080]">Navegación Autónoma.</strong> Desarrollo de algoritmos para navegación segura en entornos dinámicos.</span>
                        </li>
                        <li class="flex gap-x-3">
                            <span class="mt-1 h-5 w-5 flex-none text-[#19376D]">•</span>
                            <span><strong class="font-semibold text-[#808080]">Inteligencia Artificial.</strong> Implementación de técnicas de aprendizaje automático en sistemas robóticos.</span>
                        </li>
                        <li class="flex gap-x-3">
                            <span class="mt-1 h-5 w-5 flex-none text-[#19376D]">•</span>
                            <span><strong class="font-semibold text-[#808080]">Sistemas de Control.</strong> Diseño de controladores avanzados para robots móviles.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection