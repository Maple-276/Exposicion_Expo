<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">🔀 ¿Qué es RedirectConfig?</h2>
    
    <div class="mb-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 shadow-sm">
        <p class="text-lg text-gray-800 mb-3">
            Es un tipo que define cómo redirigir rutas en una app que usa Expo Router.
        </p>
        <p class="text-lg text-gray-800 mb-3">
            Sirve para decir: <span class="italic">"Cuando alguien entre a cierta ruta (source), redirigilo a otra (destination)."</span>
        </p>
        <p class="text-lg text-gray-800">
            Podés configurarlo para que la redirección sea temporal o permanente, e incluso indicar si es hacia un destino externo.
        </p>
    </div>
    
    <!-- Propiedades -->
    <div class="mb-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-5 shadow-md">
        <div class="flex items-center mb-4">
            <span class="text-3xl mr-3">📦</span>
            <h3 class="text-xl font-bold text-blue-800">Propiedades de RedirectConfig</h3>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow-sm">
                <thead>
                    <tr class="bg-blue-100">
                        <th class="py-3 px-4 text-left font-bold text-blue-800">Propiedad</th>
                        <th class="py-3 px-4 text-left font-bold text-blue-800">Tipo</th>
                        <th class="py-3 px-4 text-left font-bold text-blue-800">¿Es opcional?</th>
                        <th class="py-3 px-4 text-left font-bold text-blue-800">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4 font-mono text-sm font-medium">source</td>
                        <td class="py-3 px-4 font-mono text-sm">string</td>
                        <td class="py-3 px-4">
                            <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded">❌ Obligatoria</span>
                        </td>
                        <td class="py-3 px-4">Ruta que se va a redirigir</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4 font-mono text-sm font-medium">destination</td>
                        <td class="py-3 px-4 font-mono text-sm">string</td>
                        <td class="py-3 px-4">
                            <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded">❌ Obligatoria</span>
                        </td>
                        <td class="py-3 px-4">Ruta destino</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4 font-mono text-sm font-medium">external</td>
                        <td class="py-3 px-4 font-mono text-sm">boolean</td>
                        <td class="py-3 px-4">
                            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">✅ Opcional</span>
                        </td>
                        <td class="py-3 px-4">Si es un enlace fuera de la app (ej. web)</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4 font-mono text-sm font-medium">permanent</td>
                        <td class="py-3 px-4 font-mono text-sm">boolean</td>
                        <td class="py-3 px-4">
                            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">✅ Opcional</span>
                        </td>
                        <td class="py-3 px-4">Si la redirección es permanente (301)</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm font-medium">methods</td>
                        <td class="py-3 px-4 font-mono text-sm">string[]</td>
                        <td class="py-3 px-4">
                            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">✅ Opcional</span>
                        </td>
                        <td class="py-3 px-4">Métodos HTTP que activan la redirección (ej. ["GET"])</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Ejemplos -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Ejemplo básico -->
        <div class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">✅</span>
                <h3 class="text-lg font-bold text-green-800">Ejemplo simple</h3>
            </div>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto mb-4">
                <div class="text-left whitespace-pre p-1">
<span class="text-yellow-500">const</span> <span class="text-indigo-300">redirect</span>: <span class="text-blue-400">RedirectConfig</span> = {
  <span class="text-green-400">source</span>: <span class="text-orange-300">"/old-home"</span>,
  <span class="text-green-400">destination</span>: <span class="text-orange-300">"/new-home"</span>,
  <span class="text-green-400">permanent</span>: <span class="text-indigo-300">true</span>
};</div>
            </div>
            
            <p class="text-gray-700">
                Esto redirige a los usuarios que visitan <span class="font-mono bg-slate-100 px-1 rounded">/old-home</span> hacia <span class="font-mono bg-slate-100 px-1 rounded">/new-home</span> de forma permanente.
            </p>
        </div>
        
        <!-- Ejemplo avanzado -->
        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">🔍</span>
                <h3 class="text-lg font-bold text-indigo-800">Ejemplo avanzado</h3>
            </div>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto mb-4">
                <div class="text-left whitespace-pre p-1">
<span class="text-yellow-500">const</span> <span class="text-indigo-300">redirects</span>: <span class="text-blue-400">RedirectConfig</span>[] = [
  {
    <span class="text-green-400">source</span>: <span class="text-orange-300">"/old-docs/:path*"</span>,
    <span class="text-green-400">destination</span>: <span class="text-orange-300">"/documentacion/:path*"</span>,
    <span class="text-green-400">permanent</span>: <span class="text-indigo-300">true</span>
  },
  {
    <span class="text-green-400">source</span>: <span class="text-orange-300">"/soporte"</span>,
    <span class="text-green-400">destination</span>: <span class="text-orange-300">"https://soporte.miapp.com"</span>,
    <span class="text-green-400">external</span>: <span class="text-indigo-300">true</span>,
    <span class="text-green-400">methods</span>: [<span class="text-orange-300">"GET"</span>]
  }
];</div>
            </div>
            
            <div class="mt-2 space-y-1">
                <div class="flex items-start">
                    <span class="text-purple-600 font-bold mr-2">📋</span>
                    <p class="text-gray-700 text-sm">El primer ejemplo redirige rutas antiguas a un nuevo formato, conservando los parámetros.</p>
                </div>
                <div class="flex items-start">
                    <span class="text-blue-600 font-bold mr-2">🌐</span>
                    <p class="text-gray-700 text-sm">El segundo ejemplo redirige a un sitio web externo, solo para solicitudes GET.</p>
                </div>
            </div>
        </div>
    </div>
</div> 