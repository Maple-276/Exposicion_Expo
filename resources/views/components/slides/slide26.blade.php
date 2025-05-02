<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">🔗 Props Avanzadas de Navegación y Enlaces</h2>
    
    <!-- SearchOrHash -->
    <div class="mb-8 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 shadow-md">
        <div class="flex items-start">
            <span class="text-blue-500 text-xl mr-2">🔍</span>
            <div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">1. SearchOrHash</h3>
                
                <div class="mb-3">
                    <p class="font-medium text-gray-700 mb-1">📌 ¿Qué es?</p>
                    <p class="text-gray-700">Un tipo literal que define si el enlace debe llevar una búsqueda (?query) o un hash (#fragment).</p>
                </div>
                
                <div class="mb-3">
                    <p class="font-medium text-gray-700 mb-1">⚙️ ¿Cómo funciona?</p>
                    <p class="text-gray-700 mb-1">Solo acepta valores:</p>
                    <ul class="pl-5">
                        <li class="list-disc mb-1"><span class="font-mono bg-blue-100 px-1 py-0.5 rounded text-sm">?algo</span> (ej: <span class="font-mono">?user=123</span>)</li>
                        <li class="list-disc"><span class="font-mono bg-blue-100 px-1 py-0.5 rounded text-sm">#algo</span> (ej: <span class="font-mono">#seccion1</span>)</li>
                    </ul>
                </div>
                
                <div class="mb-3">
                    <p class="font-medium text-gray-700 mb-1">🎯 ¿Qué hace?</p>
                    <p class="text-gray-700">Determina cómo se estructura la URL al navegar.</p>
                </div>
                
                <div>
                    <p class="font-medium text-gray-700 mb-1">🧪 Ejemplo:</p>
                    <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
                        @verbatim
                        <div class="text-left whitespace-pre p-1">
&lt;<span class="text-green-400">Link</span> <span class="text-indigo-400">href</span>=<span class="text-orange-300">"?view=grid"</span>&gt;Vista en cuadrícula&lt;/<span class="text-green-400">Link</span>&gt;
&lt;<span class="text-green-400">Link</span> <span class="text-indigo-400">href</span>=<span class="text-orange-300">"#contacto"</span>&gt;Ir a contacto&lt;/<span class="text-green-400">Link</span>&gt;</div>
                        @endverbatim
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- SingularOptions -->
    <div class="mb-8 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl p-5 shadow-md">
        <div class="flex items-start">
            <span class="text-teal-500 text-xl mr-2">📌</span>
            <div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">2. SingularOptions</h3>
                
                <div class="mb-3">
                    <p class="font-medium text-gray-700 mb-1">📌 ¿Qué es?</p>
                    <p class="text-gray-700">Un valor booleano o una función que genera una clave única para la ruta.</p>
                </div>
                
                <div class="mb-3">
                    <p class="font-medium text-gray-700 mb-1">⚙️ ¿Cómo funciona?</p>
                    <ul class="pl-5">
                        <li class="list-disc mb-1">Si es <span class="font-mono bg-teal-100 px-1 py-0.5 rounded text-sm">true</span>, trata la ruta como única.</li>
                        <li class="list-disc">Si es una función, recibe <span class="font-mono">name</span> y <span class="font-mono">params</span>, y debe devolver un ID único.</li>
                    </ul>
                </div>
                
                <div class="mb-3">
                    <p class="font-medium text-gray-700 mb-1">🎯 ¿Qué hace?</p>
                    <p class="text-gray-700">Evita múltiples instancias de la misma ruta con parámetros distintos.</p>
                </div>
                
                <div>
                    <p class="font-medium text-gray-700 mb-1">🧪 Ejemplo:</p>
                    <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
                        @verbatim
                        <div class="text-left whitespace-pre p-1">
<span class="text-indigo-400">singular</span>: ({ <span class="text-green-400">name</span>, <span class="text-green-400">params</span> }) => <span class="text-orange-300">`${name}-${params.id}`</span></div>
                        @endverbatim
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- WebAnchorProps -->
    <div class="mb-8 bg-gradient-to-r from-purple-50 to-violet-50 rounded-xl p-5 shadow-md">
        <div class="flex items-start">
            <span class="text-violet-500 text-xl mr-2">🌐</span>
            <div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">3. WebAnchorProps</h3>
                
                <div class="mb-3">
                    <p class="font-medium text-gray-700 mb-1">📌 ¿Qué es?</p>
                    <p class="text-gray-700">Props para controlar cómo se comportan los enlaces en la web (&lt;a&gt;).</p>
                </div>
                
                <div class="mb-3">
                    <p class="font-medium text-gray-700 mb-1">⚙️ ¿Cómo funciona?</p>
                    <p class="text-gray-700">Se agregan a un componente de enlace (&lt;Link /&gt;) y afectan la descarga, el comportamiento en buscadores y la apertura del enlace.</p>
                </div>
                
                <div class="mb-4">
                    <p class="font-medium text-gray-700 mb-1">🎯 ¿Qué hacen?</p>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-sm">
                            <thead class="bg-purple-100 text-purple-800">
                                <tr>
                                    <th class="py-2 px-4 text-left font-medium">Propiedad</th>
                                    <th class="py-2 px-4 text-left font-medium">Función</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-purple-100">
                                <tr>
                                    <td class="py-2 px-4 font-mono text-sm">download</td>
                                    <td class="py-2 px-4">Fuerza la descarga del archivo.</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 font-mono text-sm">rel</td>
                                    <td class="py-2 px-4">Define la relación con la página actual (nofollow, noopener, etc).</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 font-mono text-sm">target</td>
                                    <td class="py-2 px-4">Decide dónde se abre el enlace (_blank, _self, etc.).</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div>
                    <p class="font-medium text-gray-700 mb-1">🧪 Ejemplo:</p>
                    <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
                        @verbatim
                        <div class="text-left whitespace-pre p-1">
&lt;<span class="text-green-400">Link</span> <span class="text-indigo-400">href</span>=<span class="text-orange-300">"/archivo.pdf"</span> <span class="text-indigo-400">download</span>=<span class="text-orange-300">"miarchivo.pdf"</span>&gt;Descargar PDF&lt;/<span class="text-green-400">Link</span>&gt;
&lt;<span class="text-green-400">Link</span> <span class="text-indigo-400">href</span>=<span class="text-orange-300">"https://expo.dev"</span> <span class="text-indigo-400">rel</span>=<span class="text-orange-300">"nofollow"</span> <span class="text-indigo-400">target</span>=<span class="text-orange-300">"_blank"</span>&gt;Ir a Expo&lt;/<span class="text-green-400">Link</span>&gt;</div>
                        @endverbatim
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Nota final -->
    <div class="bg-gradient-to-r from-amber-50 to-yellow-50 rounded-xl p-5 shadow-md">
        <div class="flex items-start">
            <span class="text-amber-500 text-xl mr-2">🎓</span>
            <div>
                <h3 class="text-lg font-bold mb-2 text-amber-800">Nota:</h3>
                <p class="text-gray-700">
                    Estos props ayudan a controlar el comportamiento de rutas y enlaces. Úsalos bien para mejorar la experiencia del usuario y cumplir con buenas prácticas de seguridad y SEO.
                </p>
            </div>
        </div>
    </div>
</div> 