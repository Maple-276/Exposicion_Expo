<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">📍 ¿Qué es RelativePathString?</h2>
    
    <div class="mb-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 shadow-sm">
        <p class="text-lg text-gray-800 mb-3">
            Es un tipo literal que representa una ruta relativa dentro de tu app —es decir, una ruta que depende de la ubicación actual del componente o archivo donde se usa.
        </p>
        
        <div class="flex items-center mt-4">
            <span class="text-3xl mr-3">📁</span>
            <div>
                <p class="text-lg font-medium text-indigo-700 mb-1">¿Por qué "relativa"?</p>
                <p class="text-gray-800">
                    Porque no empieza desde la raíz (/), sino desde donde estás parado.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Formatos aceptados -->
    <div class="mb-6 bg-gradient-to-br from-teal-50 to-green-50 rounded-xl p-5 shadow-md">
        <div class="flex items-center mb-4">
            <span class="text-3xl mr-3">✅</span>
            <h3 class="text-xl font-bold text-teal-800">Formas aceptadas</h3>
        </div>
        
        <p class="text-gray-800 mb-3">
            El tipo RelativePathString acepta solo tres formatos:
        </p>
        
        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow-sm">
                <thead>
                    <tr class="bg-teal-100">
                        <th class="py-3 px-4 text-left font-bold text-teal-800">Formato</th>
                        <th class="py-3 px-4 text-left font-bold text-teal-800">Ejemplo</th>
                        <th class="py-3 px-4 text-left font-bold text-teal-800">¿Qué significa?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4 font-mono text-sm font-medium">./{string}</td>
                        <td class="py-3 px-4 font-mono text-sm text-indigo-600">./perfil</td>
                        <td class="py-3 px-4">Ruta al mismo nivel (carpeta actual)</td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-4 font-mono text-sm font-medium">../{string}</td>
                        <td class="py-3 px-4 font-mono text-sm text-indigo-600">../config</td>
                        <td class="py-3 px-4">Ruta un nivel hacia arriba</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 font-mono text-sm font-medium">'..'</td>
                        <td class="py-3 px-4 font-mono text-sm text-indigo-600">'..'</td>
                        <td class="py-3 px-4">Justo un nivel hacia arriba (sin especificar ruta)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Ejemplo y visualización -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Ejemplo de código -->
        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">🎯</span>
                <h3 class="text-lg font-bold text-indigo-800">Ejemplo real en Expo Router</h3>
            </div>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto mb-4">
                <div class="text-left whitespace-pre p-1">
<span class="text-blue-400">&lt;Link</span> <span class="text-green-400">href</span>=<span class="text-orange-300">"./settings"</span> <span class="text-blue-400">/&gt;</span>     <span class="text-slate-500">// Va a settings desde donde estás</span>
<span class="text-blue-400">&lt;Link</span> <span class="text-green-400">href</span>=<span class="text-orange-300">"../home"</span> <span class="text-blue-400">/&gt;</span>        <span class="text-slate-500">// Sube un nivel y va a home</span>
<span class="text-blue-400">&lt;Link</span> <span class="text-green-400">href</span>=<span class="text-orange-300">".."</span> <span class="text-blue-400">/&gt;</span>             <span class="text-slate-500">// Solo sube un nivel</span></div>
            </div>
            
            <div class="mt-4">
                <p class="text-gray-700">Útil cuando no querés escribir rutas absolutas y necesitás moverte relativamente dentro de tu estructura de carpetas.</p>
            </div>
        </div>
        
        <!-- Visualización gráfica -->
        <div class="bg-gradient-to-br from-blue-50 to-sky-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">🗂️</span>
                <h3 class="text-lg font-bold text-blue-800">Visualización en el proyecto</h3>
            </div>
            
            <div class="bg-white rounded-md p-4 shadow-inner">
                <div class="font-mono text-sm">
                    <div class="mb-2"><span class="text-blue-600">📂 app/</span></div>
                    <div class="ml-5 mb-2"><span class="text-yellow-600">📂 profile/</span> <span class="text-gray-500">← Estás aquí</span></div>
                    <div class="ml-10 mb-2"><span class="text-green-600">📄 index.tsx</span></div>
                    <div class="ml-10 mb-2"><span class="text-green-600">📄 settings.tsx</span> <span class="text-gray-500">← "./settings"</span></div>
                    <div class="ml-5 mb-2"><span class="text-yellow-600">📂 home/</span> <span class="text-gray-500">← "../home"</span></div>
                    <div class="ml-10"><span class="text-green-600">📄 index.tsx</span></div>
                </div>
            </div>
            
            <div class="bg-gray-100 rounded-md p-3 mt-4">
                <div class="flex items-start">
                    <span class="text-blue-600 font-bold text-lg mr-2">💡</span>
                    <p class="text-sm text-gray-700">
                        <span class="font-medium">Consideración importante:</span> Las rutas relativas dependen de la estructura de carpetas de tu app, no de la URL que se muestra en la barra de navegación.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> 