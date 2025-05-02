<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">📱 ScreenProps en Navegación de Pantallas</h2>
    
    <div class="mb-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 shadow-sm">
        <div class="flex items-start">
            <span class="text-green-500 text-xl mr-2 mt-0.5">✅</span>
            <div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">¿Qué son?</h3>
                <p class="text-lg text-gray-800">
                    Son propiedades (props) que se pueden asignar a una pantalla en una aplicación para personalizar su comportamiento, apariencia y cómo interactúa con la navegación.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Cómo funcionan -->
    <div class="mb-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl p-5 shadow-sm">
        <div class="flex items-start">
            <span class="text-teal-600 text-xl mr-2 mt-0.5">⚙️</span>
            <div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">¿Cómo funcionan?</h3>
                <p class="text-gray-800">
                    Se definen al registrar una pantalla en el sistema de rutas. Algunas props son valores directos, otras son funciones que reciben navigation y route como argumentos.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Propiedades -->
    <div class="mb-6">
        <div class="flex items-start mb-3">
            <span class="text-blue-500 text-xl mr-2">🔍</span>
            <h3 class="text-xl font-bold text-gray-800">¿Qué hacen?</h3>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-left font-medium">Propiedad</th>
                        <th class="py-3 px-4 text-left font-medium">¿Para qué sirve?</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">dangerouslySingular</td>
                        <td class="py-3 px-4">Indica que esta pantalla es única. Úsala solo si sabes lo que haces.</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">getId</td>
                        <td class="py-3 px-4">Permite generar un ID personalizado desde los parámetros de la ruta.</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">initialParams</td>
                        <td class="py-3 px-4">Define los parámetros iniciales al mostrar la pantalla.</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">listeners</td>
                        <td class="py-3 px-4">Escucha eventos como focus, blur o transition.</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">name</td>
                        <td class="py-3 px-4">Es el nombre identificador de la pantalla (obligatorio en layouts).</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">options</td>
                        <td class="py-3 px-4">Personaliza la pantalla: título, estilos, visibilidad de header, etc.</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">redirect</td>
                        <td class="py-3 px-4">Si es true, redirige automáticamente a otra pantalla hermana.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Ejemplo práctico -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Código de ejemplo -->
        <div class="bg-slate-50 rounded-xl p-5 shadow-md">
            <h3 class="text-lg font-bold mb-3 text-slate-800 flex items-center">
                <span class="text-amber-500 mr-2">🧪</span> Ejemplo práctico
            </h3>
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
                @verbatim
                <div class="text-left whitespace-pre p-1">
&lt;<span class="text-green-400">Screen</span>
  <span class="text-indigo-400">name</span>=<span class="text-orange-300">"Perfil"</span>
  <span class="text-indigo-400">initialParams</span>={{ <span class="text-yellow-400">userId</span>: <span class="text-blue-400">42</span> }}
  <span class="text-indigo-400">options</span>={{ <span class="text-yellow-400">title</span>: <span class="text-orange-300">'Perfil del Usuario'</span> }}
  <span class="text-indigo-400">getId</span>={({ <span class="text-green-400">params</span> }) => <span class="text-orange-300">`perfil-${params.userId}`</span>}
/&gt;</div>
                @endverbatim
            </div>
        </div>
        
        <!-- Explicación del ejemplo -->
        <div class="bg-gradient-to-br from-violet-50 to-purple-50 rounded-xl p-5 shadow-md">
            <h3 class="text-lg font-bold mb-3 text-purple-800 flex items-center">
                <span class="text-purple-500 mr-2">🧠</span> ¿Qué hace este ejemplo?
            </h3>
            <ul class="space-y-3">
                <li class="flex items-start">
                    <span class="text-purple-400 mr-2">•</span>
                    <p>Crea una pantalla llamada "Perfil".</p>
                </li>
                <li class="flex items-start">
                    <span class="text-purple-400 mr-2">•</span>
                    <p>Le pasa como parámetro inicial <span class="font-mono bg-purple-100 px-1 py-0.5 rounded text-sm">userId: 42</span>.</p>
                </li>
                <li class="flex items-start">
                    <span class="text-purple-400 mr-2">•</span>
                    <p>Muestra como título "Perfil del Usuario".</p>
                </li>
                <li class="flex items-start">
                    <span class="text-purple-400 mr-2">•</span>
                    <p>Le asigna un ID personalizado como <span class="font-mono bg-purple-100 px-1 py-0.5 rounded text-sm">perfil-42</span>.</p>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- Nota de uso -->
    <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-r-lg">
        <div class="flex">
            <span class="text-blue-600 text-xl mr-2">💡</span>
            <p class="text-blue-800">
                Las ScreenProps te permiten personalizar completamente el comportamiento de cada pantalla en tu aplicación, mejorando la experiencia de usuario y facilitando el desarrollo.
            </p>
        </div>
    </div>
</div> 