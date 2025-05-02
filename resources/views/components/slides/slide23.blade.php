<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">🗺️ Route — Rutas internas válidas</h2>
    
    <div class="mb-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 shadow-sm">
        <p class="text-lg text-gray-800">
            Route es un tipo que representa rutas internas válidas dentro de tu aplicación —es decir, rutas que no son ni relativas (./algo, ../algo) ni externas (https://...).
        </p>
    </div>
    
    <!-- Definición del tipo -->
    <div class="mb-6">
        <h3 class="text-xl font-bold mb-3 text-gray-800">🧱 Tipo</h3>
        <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
            @verbatim
            <div class="text-left whitespace-pre p-1">
<span class="text-blue-400">type</span> <span class="text-green-400">Route</span> = <span class="text-yellow-400">Exclude</span>&lt;
  <span class="text-yellow-400">Extract</span>&lt;<span class="text-orange-300">pathname</span>&gt;,
  <span class="text-indigo-400">RelativePathString</span> | <span class="text-indigo-400">ExternalPathString</span>
&gt;</div>
            @endverbatim
        </div>
    </div>
    
    <!-- Explicación del significado -->
    <div class="mb-6 bg-gradient-to-br from-amber-50 to-yellow-50 rounded-xl p-5 shadow-md">
        <h3 class="text-xl font-bold mb-3 text-gray-800">🔍 ¿Qué significa eso?</h3>
        <p class="mb-3">Desglosemos la lógica paso a paso:</p>
        
        <div class="mb-4">
            <div class="font-bold text-amber-700 mb-1">Extract&lt;pathname&gt;</div>
            <p class="pl-4 border-l-2 border-amber-300">
                🔎 Filtra los valores posibles de pathname (que pueden ser muchas rutas) y se queda solo con los que encajan con pathname.
            </p>
        </div>
        
        <div class="mb-4">
            <div class="font-bold text-amber-700 mb-1">Exclude&lt;..., RelativePathString | ExternalPathString&gt;</div>
            <p class="pl-4 border-l-2 border-amber-300 mb-2">
                ❌ Luego, excluye de esos valores los que sean:
            </p>
            <ul class="pl-8 space-y-1">
                <li class="list-disc">Rutas relativas como <span class="font-mono bg-amber-100 px-1 rounded">./perfil</span> o <span class="font-mono bg-amber-100 px-1 rounded">../config</span></li>
                <li class="list-disc">Rutas externas como <span class="font-mono bg-amber-100 px-1 rounded">https://tusitio.com</span></li>
            </ul>
        </div>
    </div>
    
    <!-- Ejemplos de inclusión y exclusión -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-5 shadow-md">
            <h3 class="text-lg font-bold text-emerald-800 mb-3 flex items-center">
                <span class="text-2xl mr-2">✅</span> Incluye
            </h3>
            <ul class="space-y-2 font-mono text-sm">
                <li class="bg-white p-2 rounded shadow-sm">"/"</li>
                <li class="bg-white p-2 rounded shadow-sm">"/login"</li>
                <li class="bg-white p-2 rounded shadow-sm">"/perfil/[id]"</li>
            </ul>
        </div>
        
        <div class="bg-gradient-to-br from-red-50 to-rose-50 rounded-xl p-5 shadow-md">
            <h3 class="text-lg font-bold text-rose-800 mb-3 flex items-center">
                <span class="text-2xl mr-2">🚫</span> Excluye
            </h3>
            <ul class="space-y-2 font-mono text-sm">
                <li class="bg-white p-2 rounded shadow-sm">"./settings" (relativa)</li>
                <li class="bg-white p-2 rounded shadow-sm">"../perfil" (relativa)</li>
                <li class="bg-white p-2 rounded shadow-sm">"https://midominio.com" (externa)</li>
            </ul>
        </div>
    </div>
    
    <!-- Nota final -->
    <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-r-lg">
        <p class="text-blue-800">
            Ideal para navegar usando rutas que siempre comienzan desde la raíz de tu app.
        </p>
    </div>
</div> 