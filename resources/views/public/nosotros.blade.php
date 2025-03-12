@extends('layouts.public')

@section('titulo', 'Nosotros')

@section('contenido')
<!-- Hero Section -->
<div class="relative bg-gray-900 h-[500px] overflow-hidden">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0B2447] to-[#19376D] opacity-45 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative right-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] translate-x-1/2 rotate-[180deg] bg-gradient-to-tr from-[#19376D] to-[#0B2447] opacity-30 sm:right-[calc(50%-15rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="absolute inset-0">
        <div class="grid grid-cols-3 h-full">
            <img src="{{ asset('images/robot1.jpg') }}" alt="Robot 1" class="w-full h-full object-cover">
            <img src="{{ asset('images/robot2.jpg') }}" alt="Robot 2" class="w-full h-full object-cover">
            <img src="{{ asset('images/codigo1.jpg') }}" alt="Código" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900/90"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-6 sm:py-32 lg:px-8">
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl text-center">Innovación en Robótica Móvil</h1>
        <p class="mt-6 text-xl text-gray-300 text-center max-w-3xl mx-auto">Transformando el futuro a través de la tecnología y la innovación en robótica</p>
    </div>
</div>

<!-- Mission and Values Section -->
<div class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Mission -->
            <div>
               <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mb-6">Nuestra Misión</h2>
                <div class="flex gap-x-4">
                    <div class="flex-none rounded-full bg-indigo-600/20 p-1 mt-2">
                        <div class="h-2 w-2 rounded-full bg-indigo-600"></div>
                    </div>
                    <p class="text-lg text-gray-600">Nuestra misión es liderar la innovación en robótica móvil, desarrollando soluciones tecnológicas que transforman industrias y mejoran la vida de las personas. Nos dedicamos a la investigación, desarrollo y aplicación de tecnologías robóticas avanzadas que resuelven desafíos complejos en diversos sectores.</p>
                </div>
            </div>
            
            <!-- Values -->
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mb-6">Nuestros Valores</h2>
                <ul class="space-y-6">
                    <li class="flex gap-x-4">
                        <div class="flex-none rounded-full bg-indigo-600/20 p-1">
                            <div class="h-2 w-2 rounded-full bg-indigo-600"></div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Innovación Constante</h3>
                            <p class="mt-2 text-gray-600">Buscamos continuamente nuevas formas de mejorar y avanzar en el campo de la robótica.</p>
                        </div>
                    </li>
                    <li class="flex gap-x-4">
                        <div class="flex-none rounded-full bg-indigo-600/20 p-1">
                            <div class="h-2 w-2 rounded-full bg-indigo-600"></div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Excelencia Técnica</h3>
                            <p class="mt-2 text-gray-600">Mantenemos los más altos estándares de calidad en nuestro trabajo técnico y desarrollo.</p>
                        </div>
                    </li>
                    <li class="flex gap-x-4">
                        <div class="flex-none rounded-full bg-indigo-600/20 p-1">
                            <div class="h-2 w-2 rounded-full bg-indigo-600"></div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Colaboración</h3>
                            <p class="mt-2 text-gray-600">Creemos en el poder del trabajo en equipo y las alianzas estratégicas.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->
<div class="bg-gray-50 py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Nuestros Aliados</h2>
        <p class="mx-auto mt-6 max-w-2xl text-center text-lg text-gray-600">Colaboramos con instituciones y empresas líderes en el sector tecnológico y educativo.</p>
        <div class="mx-auto mt-16 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-12 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 sm:gap-y-14 lg:max-w-4xl lg:grid-cols-5">
            <!-- Partner Logos -->
            <div class="col-span-2 max-h-19 w-full object-contain lg:col-span-1 p-2 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="{{ asset('images/tecnm.png') }}" alt="CONACYT" class="h-16 w-full object-contain">
            </div>
            <div class="col-span-2 max-h-19 w-full object-contain lg:col-span-1 p-2 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('images/CONACYT.png') }}" alt="CONACYT" class="h-16 w-full object-contain">
            </div>
            <div class="col-span-2 max-h-19 w-full object-contain lg:col-span-1 p-2 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('images/ieee.jpg') }}" alt="IEEE" class="h-16 w-full object-contain">
            </div>
            <div class="col-span-2 max-h-19 w-full object-contain lg:col-span-1 p-2 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('images/ros.png') }}" alt="ROS (Robot Operating System)" class="h-16 w-full object-contain">
            </div>
            <div class="col-span-2 max-h-19 w-full object-contain lg:col-span-1 p-2 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('images/buap.png') }}" alt="BUAP" class="h-14 w-full object-contain">
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0 ">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Nuestro Equipo</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Un grupo de profesionales apasionados por la innovación tecnológica.</p>
        </div>
        <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 ">
            <li>
                <img class="aspect-[1] w-full rounded-2xl object-cover hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" src="{{ asset('images/carmen_santiago.jpg') }}" alt="M. C. Maria del Carmen Santiago Díaz">
                <h3 class="mt-6 text-lg font-semibold leading-8 text-gray-900">M. C. Maria del Carmen Santiago Díaz</h3>
                <p class="text-base leading-7 text-gray-600">Profesora</p>
            </li>
            <li>
                <img class="aspect-[1] w-full rounded-2xl object-cover hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" src="{{ asset('images/gustavo_rubin.jpg') }}" alt="Dr. Gustavo Trinidad Rubín Linares">
                <h3 class="mt-6 text-lg font-semibold leading-8 text-gray-900">Dr. Gustavo Trinidad Rubín Linares</h3>
                <p class="text-base leading-7 text-gray-600">Profesor</p>
            </li>
            <li>
                <img class="aspect-[1] w-full rounded-2xl object-cover hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" src="{{ asset('images/claudia_zenteno.jpg') }}" alt="M. C. Ana Claudia Zenteno Vazquez">
                <h3 class="mt-6 text-lg font-semibold leading-8 text-gray-900">M. C. Ana Claudia Zenteno Vazquez</h3>
                <p class="text-base leading-7 text-gray-600">Profesora</p>
            </li>
        </ul>
    </div>
</div>
@endsection