@extends('layouts.public')

@section('titulo', 'Proyectos')
    
@section ('contenido')

  <!-- Robotics/Electronics Section -->
<div class="bg-gray-50 py-24 sm:py-32 relative overflow-hidden" data-aos="fade-up" data-aos-duration="1000">
  <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0B2447] to-[#19376D] opacity-45 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem] animate-pulse" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute inset-x-0 bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
    <div class="relative right-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] translate-x-1/2 rotate-[180deg] bg-gradient-to-tr from-[#19376D] to-[#0B2447] opacity-30 sm:right-[calc(50%-15rem)] sm:w-[72.1875rem] animate-pulse" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute left-[calc(50%+11rem)] top-1/2 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
    <div class="aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[145deg] bg-gradient-to-tr from-[#0B2447] to-[#19376D] opacity-30 sm:w-[72.1875rem] animate-pulse" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute right-[calc(50%-11rem)] top-1/4 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
    <div class="aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[215deg] bg-gradient-to-tr from-[#19376D] to-[#0B2447] opacity-25 sm:w-[72.1875rem] animate-pulse" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-center text-base/7 font-semibold text-indigo-600">Desarrollo en Robótica/Electrónica</h2>
    <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl">Innovación en Robótica Móvil</p>
    <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
      <!-- DON CUCO Project -->
      <div class="relative lg:row-span-2 hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" data-aos="fade-right" data-aos-delay="100">
        <div class="absolute inset-px rounded-lg bg-white "></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
          <div class="px-8 pt-8 sm:px-10 sm:pt-10">
            <div class="flex justify-between items-center">
              <p class="text-lg font-medium tracking-tight text-gray-950">DON CUCO</p>
              <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-gray-700 ring-1 ring-inset ring-blue-600/20">Concluido</span>
            </div>
            <time datetime="2024-03" class="text-sm text-gray-500">Marzo 2024</time>
            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Robot articulado con capacidades avanzadas de manipulación y control preciso de movimientos para tareas específicas.</p>
            <ul class="mt-4 space-y-2 text-sm text-gray-600">
              <li class="flex items-center"><div class="mr-2 h-1.5 w-1.5 rounded-full bg-indigo-600"></div>Sistema de articulaciones múltiples</li>
              <li class="flex items-center"><div class="mr-2 h-1.5 w-1.5 rounded-full bg-indigo-600"></div>Control de precisión en tiempo real</li>
              <li class="flex items-center"><div class="mr-2 h-1.5 w-1.5 rounded-full bg-indigo-600"></div>Interfaz de programación intuitiva</li>
            </ul>
          </div>
          <div class="relative min-h-[30rem] w-full grow max-lg:mx-auto max-lg:max-w-sm">
            <div class="absolute inset-x-10 top-10 bottom-10 overflow-hidden rounded-2xl bg-gray-100">
              <img class="w-full h-full object-cover" src="/images/doncuco.jpg" alt="DON CUCO Robot">
            </div>
          </div>
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 hover:ring-2 hover:ring-indigo-600 transition-all duration-300"></div>
      </div>
      <!-- DRON Project -->
      <div class="relative max-lg:row-start-1 hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
        <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
          <div class="px-8 pt-8 sm:px-10 sm:pt-10">
            <div class="flex justify-between items-center">
              <p class="text-lg font-medium tracking-tight text-gray-950">DRON</p>
              <span class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Activo en pausa</span>
            </div>
            <time datetime="2024-02" class="text-sm text-gray-500">Enero 2025</time>
            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Dron autónomo con capacidades avanzadas de vuelo y sistema de control inteligente.</p>
            <ul class="mt-4 space-y-2 text-sm text-gray-600">
              <li class="flex items-center"><div class="mr-2 h-1.5 w-1.5 rounded-full bg-indigo-600"></div>Control de estabilidad automático</li>
              <li class="flex items-center"><div class="mr-2 h-1.5 w-1.5 rounded-full bg-indigo-600"></div>Cámara HD para captura de imágenes</li>
            </ul>
          </div>
          <div class="flex flex-1 items-center justify-center px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
            <img class="w-full max-lg:max-w-xs object-cover rounded-2xl aspect-[4/3]" src="/images/dron.jpg" alt="DRON Project">
          </div>
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-t-[2rem] "></div>
      </div>
      <!-- CANSAT Project -->
      <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2 hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
        <div class="absolute inset-px rounded-lg bg-white"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-r-[calc(2rem+1px)]">
          <div class="px-8 pt-8 sm:px-10 sm:pt-10">
            <div class="flex justify-between items-center">
              <p class="text-lg font-medium tracking-tight text-gray-950">CANSAT</p>
              <span class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Activo en pausa</span>
            </div>
            <time datetime="2024-02" class="text-sm text-gray-500">Enero 2025</time>
            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Satélite experimental que establece comunicación con ROBERT mediante antenas LoRa.</p>
            <ul class="mt-4 space-y-2 text-sm text-gray-600">
              <li class="flex items-center"><div class="mr-2 h-1.5 w-1.5 rounded-full bg-indigo-600"></div>Transmisión de datos en tiempo real</li>
              <li class="flex items-center"><div class="mr-2 h-1.5 w-1.5 rounded-full bg-indigo-600"></div>Sensores ambientales integrados</li>
            </ul>
          </div>
          <div class="flex flex-1 items-center justify-center px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
            <img class="w-full max-lg:max-w-xs object-cover rounded-2xl aspect-[4/3]" src="/images/cansat.avif" alt="CANSAT Project">
          </div>
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 hover:ring-2 hover:ring-indigo-600 transition-all duration-300"></div>
      </div>
      <!-- ROBERT Project -->
      <div class="relative max-lg:row-start-4 lg:col-start-3 lg:row-start-1 lg:row-span-2 hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" data-aos="fade-left" data-aos-delay="400">
        <div class="absolute inset-px rounded-lg bg-white "></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-r-[calc(2rem+1px)]">
          <div class="px-8 pt-8 sm:px-10 sm:pt-10">
            <div class="flex justify-between items-center">
              <p class="text-lg font-medium tracking-tight text-gray-950">ROBERT</p>
              <span class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Activo en pausa</span>
            </div>
            <time datetime="2024-01" class="text-sm text-gray-500">Enero 2025</time>
            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Vehículo todo terreno con sistema de evasión de obstáculos, equipado con cuatro motores para máxima maniobrabilidad en terrenos irregulares.</p>
            <ul class="mt-4 space-y-2 text-sm text-gray-600">
              <li class="flex items-center"><div class="mr-2 h-1.5 w-1.5 rounded-full bg-indigo-600"></div>Sistema de tracción 4x4</li>
              <li class="flex items-center"><div class="mr-2 h-1.5 w-1.5 rounded-full bg-indigo-600"></div>Sensores ultrasónicos para detección de obstáculos</li>
              <li class="flex items-center"><div class="mr-2 h-1.5 w-1.5 rounded-full bg-indigo-600"></div>Comunicación LoRa con CANSAT</li>
            </ul>
          </div>
          <div class="relative min-h-[30rem] w-full grow max-lg:mx-auto max-lg:max-w-sm">
            <div class="absolute inset-x-10 top-10 bottom-10 overflow-hidden rounded-2xl bg-gray-100">
              <img class="w-full h-full object-cover" src="/images/robot1.jpg" alt="ROBERT Robot">
            </div>
          </div>
          
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 hover:ring-2 hover:ring-indigo-600 transition-all duration-300"></div>
      </div>
    </div>
  </div>
</div>

<!-- Web Development Section -->
<div class="bg-white py-24 sm:py-32 relative overflow-hidden">
  <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
    <div class="relative left-[calc(50%+11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0B2447] to-[#19376D] opacity-30 sm:left-[calc(50%+15rem)] sm:w-[72.1875rem] animate-pulse" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute right-[calc(50%-11rem)] bottom-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
    <div class="aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[215deg] bg-gradient-to-tr from-[#19376D] to-[#0B2447] opacity-30 sm:w-[72.1875rem] animate-pulse" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute left-[calc(50%-11rem)] top-1/3 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
    <div class="aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[145deg] bg-gradient-to-tr from-[#0B2447] to-[#19376D] opacity-25 sm:w-[72.1875rem] animate-pulse" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-center text-base/7 font-semibold text-indigo-600">Desarrollo Web</h2>
    <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl">Soluciones Web Innovadoras</p>
    <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3">
      <!-- CONACIC Project -->
      <div class="relative hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="absolute inset-px rounded-lg bg-white lg:rounded-r-[2rem]"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-r-[calc(2rem+1px)]">
          <div class="px-8 pt-8 sm:px-10 sm:pt-10">
            <div class="flex justify-between items-center">
              <p class="text-lg font-medium tracking-tight text-gray-950">CONACIC</p>
              <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Activo en progreso</span>
            </div>
            <time datetime="2024-01" class="text-sm text-gray-500">Enero 2025</time>
            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Portal web para el Congreso Nacional de Ciencias de la Computación, facilitando la gestión y difusión del evento académico.</p>
          </div>
          <div class="flex flex-1 items-center justify-center p-8">
            <img class="w-full aspect-[4/3] rounded-lg object-cover" src="/images/CONACIC.jpg" alt="CONACIC Project">
          </div>
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 hover:ring-2 hover:ring-indigo-600 transition-all duration-300"></div>
      </div>

      <!-- Aeroespacial Project -->
      <div class="relative hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="absolute inset-px rounded-lg bg-white lg:rounded-r-[2rem]"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-r-[calc(2rem+1px)]">
          <div class="px-8 pt-8 sm:px-10 sm:pt-10">
            <div class="flex justify-between items-center">
              <p class="text-lg font-medium tracking-tight text-gray-950">Aeroespacial</p>
              <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Activo en progreso</span>
            </div>
            <time datetime="2024-02" class="text-sm text-gray-500">Febrero 2025</time>
            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Portal informativo dedicado al ámbito aeroespacial, cubriendo las últimas innovaciones y avances del sector.</p>
          </div>
          <div class="flex flex-1 items-center justify-center p-8">
            <img class="w-full aspect-[4/3] rounded-lg object-cover" src="/images/aeroespacial.png" alt="Aeroespacial Project">
          </div>
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 hover:ring-2 hover:ring-indigo-600 transition-all duration-300"></div>
      </div>

      <!-- Robótica Móvil Project -->
      <div class="relative hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="absolute inset-px rounded-lg bg-white lg:rounded-r-[2rem]"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-r-[calc(2rem+1px)]">
          <div class="px-8 pt-8 sm:px-10 sm:pt-10">
            <div class="flex justify-between items-center">
              <p class="text-lg font-medium tracking-tight text-gray-950">Robótica Móvil</p>
              <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Activo en progreso</span>
            </div>
            <time datetime="2024-03" class="text-sm text-gray-500">Febrero 2025</time>
            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Portal web del Laboratorio de Robótica Móvil de la Facultad de Ciencias de la Computación.</p>
          </div>
          <div class="flex flex-1 items-center justify-center p-8">
            <img class="w-full aspect-[4/3] rounded-lg object-cover" src="/images/robotica movil.jpeg" alt="Robótica Móvil Project">
          </div>
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 hover:ring-2 hover:ring-indigo-600 transition-all duration-300"></div>
      </div>
      <!-- Ciberseguridad Project -->
      <div class="relative hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="absolute inset-px rounded-lg bg-white lg:rounded-r-[2rem]"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-r-[calc(2rem+1px)]">
          <div class="px-8 pt-8 sm:px-10 sm:pt-10">
            <div class="flex justify-between items-center">
              <p class="text-lg font-medium tracking-tight text-gray-950">CIBERSEGURIDAD</p>
              <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Activo en progreso</span>
            </div>
            <time datetime="2024-03" class="text-sm text-gray-500">Febrero 2025</time>
            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Portal informativo y de servicios especializado en protección de dispositivos y seguridad informática.</p>
          </div>
          <div class="flex flex-1 items-center justify-center p-8">
            <img class="w-full aspect-[4/3] rounded-lg object-cover" src="/images/ciberseguridad.jpg" alt="Ciberseguridad Project">
          </div>
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 hover:ring-2 hover:ring-indigo-600 transition-all duration-300"></div>
      </div>

      <!-- Cuerpo Académico Project -->
      <div class="relative hover:transform hover:scale-105 hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="absolute inset-px rounded-lg bg-white lg:rounded-r-[2rem]"></div>
        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-r-[calc(2rem+1px)]">
          <div class="px-8 pt-8 sm:px-10 sm:pt-10">
            <div class="flex justify-between items-center">
              <p class="text-lg font-medium tracking-tight text-gray-950">CUERPO ACADÉMICO</p>
              <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Activo en progreso</span>
            </div>
            <time datetime="2024-03" class="text-sm text-gray-500">Febrero 2025</time>
            <p class="mt-2 max-w-lg text-sm/6 text-gray-600">Portal del Cuerpo Académico de la Facultad de Ciencias de la Computación, destacando investigación y logros académicos.</p>
          </div>
          <div class="flex flex-1 items-center justify-center p-8">
            <img class="w-full aspect-[4/3] rounded-lg object-cover" src="/images/cuerpoacademico.jpg" alt="Cuerpo Académico Project">
          </div>
        </div>
        <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 hover:ring-2 hover:ring-indigo-600 transition-all duration-300"></div>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
</div>



@endsection