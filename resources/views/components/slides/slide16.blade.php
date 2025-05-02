<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">¿Qué es Href&lt;T&gt;?</h2>
    
    <div class="mb-5 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 shadow-sm">
        <p class="text-xl text-gray-800">
            Es el tipo que representa una ruta válida dentro de tu app usando Expo Router.
        </p>
        <div class="flex items-center mt-3">
            <span class="text-3xl mr-3">🛠️</span>
            <p class="text-gray-700">
                Lo usan cosas como <span class="font-mono bg-indigo-100 px-2 py-1 rounded">&lt;Link /&gt;</span> o 
                <span class="font-mono bg-indigo-100 px-2 py-1 rounded">router.push()</span> para ir de una pantalla a otra.
            </p>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Opción 1: String -->
        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">✅</span>
                <h3 class="text-lg font-bold text-green-800">Opción 1: Como texto (string)</h3>
            </div>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto mb-4">
                <div class="text-left whitespace-pre">
<span class="text-blue-400">&lt;Link</span> <span class="text-green-400">href</span>=<span class="text-yellow-400">"/home"</span> <span class="text-blue-400">/&gt;</span>
<span class="text-blue-400">&lt;Link</span> <span class="text-green-400">href</span>=<span class="text-yellow-400">"../settings"</span> <span class="text-blue-400">/&gt;</span>
                </div>
            </div>
            
            <div class="flex items-center">
                <span class="text-xl mr-2">📌</span>
                <p class="text-gray-700">Simple y directo. Rutas absolutas o relativas.</p>
            </div>
        </div>
        
        <!-- Opción 2: Objeto -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">✅</span>
                <h3 class="text-lg font-bold text-blue-800">Opción 2: Como objeto</h3>
            </div>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto mb-4">
                <div class="text-left">
                    <div class="mb-2 text-gray-300">// Versión simple:</div>
                    <div class="mb-3">
                        <span class="text-blue-400">&lt;Link</span> 
                        <span class="text-green-400">href</span>=<span class="text-blue-300">{</span>
                        <span class="text-yellow-400">{ pathname: "/perfil/123" }</span>
                        <span class="text-blue-300">}</span> 
                        <span class="text-blue-400">/&gt;</span>
                    </div>
                    
                    <div class="mb-2 text-gray-300">// Con parámetros dinámicos:</div>
                    <div>
                        <span class="text-blue-400">&lt;Link</span> 
                        <span class="text-green-400">href</span>=<span class="text-blue-300">{</span>
                        <span class="text-yellow-400">{ 
  pathname: "/usuario/[id]",
  params: { id: userId }
}</span>
                        <span class="text-blue-300">}</span> 
                        <span class="text-blue-400">/&gt;</span>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center">
                <span class="text-xl mr-2">🧩</span>
                <p class="text-gray-700">Ideal para rutas dinámicas con parámetros ([id]).</p>
            </div>
        </div>
    </div>
    
    <!-- Explicación de <T> -->
    <div class="bg-gradient-to-r from-amber-50 to-yellow-50 rounded-xl p-5 shadow-md mb-6">
        <div class="flex items-center mb-3">
            <span class="text-3xl mr-3">💡</span>
            <h3 class="text-xl font-bold text-amber-800">¿Y el &lt;T&gt;?</h3>
        </div>
        <p class="text-gray-800 mb-2">
            Es un tipo opcional que te da autocompletado y validación de rutas.
        </p>
        <p class="text-gray-700 font-medium">
            Si no lo usás, igual funciona.
        </p>
    </div>
    
    <!-- Tabla resumen -->
    <div class="bg-gradient-to-r from-purple-50 to-indigo-50 rounded-xl p-5 shadow-md">
        <div class="flex items-center mb-4">
            <span class="text-3xl mr-3">🧾</span>
            <h3 class="text-xl font-bold text-purple-800">En resumen:</h3>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow-sm">
                <thead>
                    <tr class="bg-indigo-100">
                        <th class="py-3 px-4 text-left font-bold text-indigo-800">Forma</th>
                        <th class="py-3 px-4 text-left font-bold text-indigo-800">Ejemplo</th>
                        <th class="py-3 px-4 text-left font-bold text-indigo-800">¿Cuándo usarla?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4 font-medium">Texto</td>
                        <td class="py-3 px-4 font-mono text-sm bg-gray-50">"<span class="text-blue-600">/home</span>"</td>
                        <td class="py-3 px-4">Rutas simples</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-medium">Objeto</td>
                        <td class="py-3 px-4 font-mono text-sm bg-gray-50">{ <span class="text-purple-600">pathname</span>: "<span class="text-blue-600">/user/[id]</span>", <span class="text-purple-600">params</span>: {} }</td>
                        <td class="py-3 px-4">Rutas con parámetros dinámicos</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> 