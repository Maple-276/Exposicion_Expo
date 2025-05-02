<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">🔄 ¿Qué es ResultState?</h2>
    
    <div class="mb-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 shadow-sm">
        <p class="text-lg text-gray-800 mb-3">
            ResultState es un tipo que representa el estado parcial de la navegación en una app que usa React Navigation (como Expo Router).
        </p>
        <p class="text-lg text-gray-800">
            Es útil cuando queremos describir en qué parte del árbol de rutas estamos, incluso si esa estructura es anidada (por ejemplo, tabs dentro de stacks).
        </p>
    </div>
    
    <!-- Composición -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Tipo base -->
        <div class="bg-gradient-to-br from-violet-50 to-indigo-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">📦</span>
                <h3 class="text-lg font-bold text-indigo-800">¿De qué está compuesto?</h3>
            </div>
            
            <p class="text-gray-700 mb-3">
                ResultState extiende a:
            </p>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto mb-4">
                <div class="text-left whitespace-pre p-1">
<span class="text-indigo-400">PartialState</span>&lt;<span class="text-blue-400">NavigationState</span>&gt;</div>
            </div>
            
            <p class="text-gray-700 mb-3">
                Y le agrega una propiedad opcional:
            </p>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
                <div class="text-left whitespace-pre p-1">
<span class="text-green-400">state</span>?: <span class="text-indigo-400">ResultState</span></div>
            </div>
        </div>
        
        <!-- Significado -->
        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">🔁</span>
                <h3 class="text-lg font-bold text-blue-800">¿Qué significa?</h3>
            </div>
            
            <div class="mb-4">
                <p class="font-medium text-blue-700 mb-1">PartialState&lt;NavigationState&gt;:</p>
                <p class="text-gray-700">
                    Representa un estado de navegación incompleto (como una snapshot de navegación parcial).
                </p>
            </div>
            
            <div>
                <p class="font-medium text-blue-700 mb-1">state?: ResultState:</p>
                <p class="text-gray-700">
                    Permite anidar otro estado de navegación, como si fuera una subpantalla o subtarea activa.
                </p>
            </div>
            
            <div class="mt-5 bg-blue-50 border-l-4 border-blue-300 p-3 rounded-r-lg">
                <div class="flex items-start">
                    <span class="text-blue-600 font-bold mr-2">🔍</span>
                    <div>
                        <p class="font-medium text-blue-800 mb-1">¿Para qué sirve?</p>
                        <ul class="text-gray-700 text-sm pl-1 space-y-1">
                            <li>• Representar rutas anidadas (como tabs dentro de stacks)</li>
                            <li>• Controlar navegación parcialmente</li>
                            <li>• Reconstruir el historial de navegación</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Ejemplo ilustrativo -->
    <div class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-xl p-5 shadow-md mb-6">
        <div class="flex items-center mb-4">
            <span class="text-3xl mr-3">📐</span>
            <h3 class="text-xl font-bold text-emerald-800">Ejemplo ilustrativo</h3>
        </div>
        
        <p class="text-gray-700 mb-3">
            Si tu app tiene rutas anidadas como:
        </p>
        
        <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto mb-4">
            <div class="text-left whitespace-pre p-1">
/home → /profile → /settings</div>
        </div>
        
        <p class="text-gray-700 mb-3">
            El estado se representa de forma recursiva:
        </p>
        
        <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
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
              <span class="text-green-400">index</span>: <span class="text-yellow-400">0</span>,
              <span class="text-green-400">routes</span>: [
                { <span class="text-green-400">name</span>: <span class="text-orange-300">"settings"</span> }
              ]
            }
          }
        ]
      }
    }
  ]
}</div>
        </div>
    </div>
    
    <!-- Representación visual -->
    <div class="bg-gradient-to-br from-amber-50 to-yellow-50 rounded-xl p-5 shadow-md">
        <div class="flex items-center mb-4">
            <span class="text-3xl mr-3">🎨</span>
            <h3 class="text-xl font-bold text-amber-800">Representación visual</h3>
        </div>
        
        <div class="bg-white p-4 rounded-lg shadow-inner">
            <div class="flex justify-center">
                <div class="relative">
                    <!-- Stack principal -->
                    <div class="w-72 h-64 bg-indigo-100 rounded-xl border-2 border-indigo-300 p-3 relative">
                        <div class="text-indigo-700 font-medium text-sm mb-2">Stack Raíz</div>
                        
                        <!-- Tab Container -->
                        <div class="w-full h-48 bg-blue-100 rounded-lg border-2 border-blue-300 p-3 relative">
                            <div class="text-blue-700 font-medium text-sm mb-2">Tab Navigation</div>
                            
                            <!-- Screen dentro de Tab -->
                            <div class="w-full h-28 bg-green-100 rounded-lg border-2 border-green-300 p-3 relative">
                                <div class="text-green-700 font-medium text-sm mb-1">Stack interno</div>
                                
                                <!-- Pantalla actual -->
                                <div class="w-full h-14 bg-yellow-100 rounded-lg border-2 border-yellow-300 p-2 relative flex items-center justify-center">
                                    <div class="text-yellow-700 font-medium text-sm">Pantalla "settings"</div>
                                </div>
                            </div>
                            
                            <!-- Pestañas -->
                            <div class="absolute bottom-1 left-0 right-0 flex justify-center space-x-2">
                                <div class="px-2 py-1 rounded-lg bg-white shadow-sm text-xs text-blue-600">Home</div>
                                <div class="px-2 py-1 rounded-lg bg-blue-200 shadow-sm text-xs text-blue-800">Profile</div>
                                <div class="px-2 py-1 rounded-lg bg-white shadow-sm text-xs text-blue-600">Más</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Anotaciones -->
                    <div class="absolute -right-32 top-6 text-xs text-indigo-600 font-mono">
                        routes[0]<br>name: "home"
                    </div>
                    <div class="absolute -right-32 top-28 text-xs text-blue-600 font-mono">
                        routes[0].state.routes[0]<br>name: "profile"
                    </div>
                    <div class="absolute -right-32 bottom-14 text-xs text-green-600 font-mono">
                        ...routes[0]<br>name: "settings"
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 