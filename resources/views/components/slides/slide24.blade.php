<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">🚀 router — Navegación imperativa en Expo Router</h2>
    
    <div class="mb-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 shadow-sm">
        <p class="text-lg text-gray-800">
            El objeto router en Expo Router te da acceso a una API imperativa de navegación.
        </p>
        <p class="text-lg text-gray-800 mt-2">
            Esto significa que podés controlar la navegación por código, sin usar botones &lt;Link&gt; o componentes &lt;Stack.Screen&gt;.
        </p>
    </div>
    
    <!-- Uso básico -->
    <div class="mb-6">
        <h3 class="text-xl font-bold mb-3 text-gray-800">🔧 Uso básico</h3>
        <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
            @verbatim
            <div class="text-left whitespace-pre p-1">
<span class="text-blue-400">import</span> { router } <span class="text-blue-400">from</span> <span class="text-orange-300">'expo-router'</span>;

&lt;<span class="text-green-400">Text</span> <span class="text-indigo-400">onPress</span>={() => router.<span class="text-yellow-400">push</span>(<span class="text-orange-300">'/home'</span>)}&gt;Ir al inicio&lt;/<span class="text-green-400">Text</span>&gt;</div>
            @endverbatim
        </div>
    </div>
    
    <!-- Métodos clave -->
    <div class="mb-6">
        <h3 class="text-xl font-bold mb-3 text-gray-800">🛠️ Métodos clave</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-left font-medium">Método</th>
                        <th class="py-3 px-4 text-left font-medium">Descripción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">push('/ruta')</td>
                        <td class="py-3 px-4">Navega y agrega al historial</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">replace('/ruta')</td>
                        <td class="py-3 px-4">Navega y reemplaza pantalla actual</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">back()</td>
                        <td class="py-3 px-4">Vuelve una pantalla atrás</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">dismiss(2)</td>
                        <td class="py-3 px-4">Cierra 2 pantallas del stack</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">navigate(href)</td>
                        <td class="py-3 px-4">Decide entre push o replace</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm">setParams({...})</td>
                        <td class="py-3 px-4">Actualiza parámetros de la ruta</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Métodos adicionales -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div class="bg-gradient-to-br from-violet-50 to-purple-50 rounded-xl p-5 shadow-md">
            <h3 class="text-lg font-bold text-purple-800 mb-3">⚙️ Métodos avanzados</h3>
            <ul class="space-y-2">
                <li class="flex items-start">
                    <span class="text-purple-500 mr-2">▸</span>
                    <div>
                        <span class="font-mono text-sm font-medium">dismissAll()</span>
                        <p class="text-sm text-gray-600">Vuelve a la pantalla inicial del stack</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-purple-500 mr-2">▸</span>
                    <div>
                        <span class="font-mono text-sm font-medium">dismissTo(href)</span>
                        <p class="text-sm text-gray-600">Cierra pantallas hasta llegar a una específica</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-purple-500 mr-2">▸</span>
                    <div>
                        <span class="font-mono text-sm font-medium">prefetch(href)</span>
                        <p class="text-sm text-gray-600">Pre-carga una pantalla para navegar más rápido</p>
                    </div>
                </li>
            </ul>
        </div>
        
        <div class="bg-gradient-to-br from-cyan-50 to-sky-50 rounded-xl p-5 shadow-md">
            <h3 class="text-lg font-bold text-sky-800 mb-3">🔍 Métodos de consulta</h3>
            <ul class="space-y-2">
                <li class="flex items-start">
                    <span class="text-sky-500 mr-2">▸</span>
                    <div>
                        <span class="font-mono text-sm font-medium">canGoBack()</span>
                        <p class="text-sm text-gray-600">Retorna true si puede volver atrás</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-sky-500 mr-2">▸</span>
                    <div>
                        <span class="font-mono text-sm font-medium">canDismiss()</span>
                        <p class="text-sm text-gray-600">Retorna true si puede cerrarse (en stacks)</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- Nota final -->
    <div class="bg-gradient-to-r from-amber-50 to-yellow-50 rounded-xl p-5 shadow-md">
        <div class="flex items-center">
            <span class="text-2xl mr-3">💡</span>
            <p class="text-amber-800 font-medium">
                Perfecto para manejar navegación compleja, programática y fluida dentro de tu app.
            </p>
        </div>
    </div>
</div> 