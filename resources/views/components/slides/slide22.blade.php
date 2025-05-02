<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">🧠 ¿Qué es ResultState?</h2>
    
    <div class="mb-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 shadow-sm">
        <p class="text-lg text-gray-800">
            ResultState representa un estado de navegación parcial dentro del árbol de navegación de una app.
        </p>
        <p class="text-lg text-gray-800 mt-2">
            👉 Es útil cuando la navegación es anidada y querés guardar o reconstruir en qué pantalla está el usuario.
        </p>
    </div>
    
    <!-- Definición del tipo -->
    <div class="mb-6">
        <h3 class="text-xl font-bold mb-3 text-gray-800">🔧 Tipo</h3>
        <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
            @verbatim
            <div class="text-left whitespace-pre p-1">
<span class="text-blue-400">type</span> <span class="text-green-400">ResultState</span> = <span class="text-yellow-400">PartialState</span>&lt;<span class="text-orange-300">NavigationState</span>&gt; & {
  <span class="text-indigo-400">state</span>?: <span class="text-green-400">ResultState</span>
}</div>
            @endverbatim
        </div>
    </div>
    
    <!-- Propiedades -->
    <div class="mb-6">
        <h3 class="text-xl font-bold mb-3 text-gray-800">🧱 Propiedades</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-left font-medium">Propiedad</th>
                        <th class="py-3 px-4 text-left font-medium">Tipo</th>
                        <th class="py-3 px-4 text-left font-medium">Descripción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">state</td>
                        <td class="py-3 px-4 font-mono text-sm">ResultState (opcional)</td>
                        <td class="py-3 px-4">Subestado de navegación anidado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Ejemplo -->
    <div class="mb-6">
        <h3 class="text-xl font-bold mb-3 text-gray-800">🧪 Ejemplo</h3>
        <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
            @verbatim
            <div class="text-left whitespace-pre p-1">
{
  <span class="text-green-400">index</span>: <span class="text-yellow-400">0</span>,
  <span class="text-green-400">routes</span>: [
    {
      <span class="text-green-400">name</span>: <span class="text-orange-300">"home"</span>,
      <span class="text-green-400">state</span>: {
        <span class="text-green-400">index</span>: <span class="text-yellow-400">0</span>,
        <span class="text-green-400">routes</span>: [
          {
            <span class="text-green-400">name</span>: <span class="text-orange-300">"profile"</span>,
            <span class="text-green-400">state</span>: {
              <span class="text-green-400">routes</span>: [{ <span class="text-green-400">name</span>: <span class="text-orange-300">"settings"</span> }]
            }
          }
        ]
      }
    }
  ]
}</div>
            @endverbatim
        </div>
    </div>
    
    <!-- Para qué sirve -->
    <div>
        <h3 class="text-xl font-bold mb-3 text-gray-800">💡 ¿Para qué sirve?</h3>
        <ul class="space-y-2 pl-2">
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✅</span>
                <span>Representar pantallas activas en navegación profunda</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✅</span>
                <span>Guardar o simular el estado de navegación</span>
            </li>
            <li class="flex items-start">
                <span class="text-green-500 mr-2">✅</span>
                <span>Trabajar con navegaciones anidadas o condicionales</span>
            </li>
        </ul>
    </div>
</div> 