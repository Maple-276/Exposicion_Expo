<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">NativeIntent</h2>
    
    <div class="mb-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 shadow-sm">
        <p class="text-lg text-gray-800 mb-3">
            Se crea usando un archivo especial llamado <span class="font-mono bg-indigo-100 px-2 py-1 rounded">+native-intent.tsx</span> en el nivel superior del directorio app de tu proyecto. 
            Exporta las funciones <span class="font-mono bg-indigo-100 px-2 py-1 rounded">redirectSystemPath</span> o <span class="font-mono bg-indigo-100 px-2 py-1 rounded">legacy_subscribe</span>, 
            ambos métodos diseñados para manejar el procesamiento de URL/rutas.
        </p>
        <p class="text-gray-700">
            Útil para reescribir URLs para dirigirlas correctamente a una ruta cuando hay URLs únicas/referidas provenientes de proveedores externos o URLs obsoletas de versiones anteriores.
        </p>
        <div class="mt-3 flex items-start">
            <span class="text-blue-600 font-bold mr-2">ℹ️</span>
            <p class="text-sm text-gray-600">Para más información sobre cómo usar NativeIntent, consulta "Personalización de enlaces".</p>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- redirectSystemPath -->
        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">🔄</span>
                <h3 class="text-lg font-bold text-green-800">redirectSystemPath</h3>
            </div>
            
            <p class="text-gray-700 mb-3">
                Un método especial usado para procesar URLs en aplicaciones nativas. Cuando se invoca, recibe un objeto de opciones con las siguientes propiedades:
            </p>
            
            <div class="bg-white rounded-lg p-3 shadow-sm mb-4 border-l-4 border-green-500">
                <p class="text-gray-800 mb-2"><span class="font-medium">path:</span> representa la URL o ruta que está siendo procesada.</p>
                <p class="text-gray-800"><span class="font-medium">initial:</span> un booleano que indica si la ruta es la URL inicial de la app.</p>
            </div>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto mb-4">
                <div class="text-left whitespace-pre p-1">
<span class="text-slate-500">// +native-intent.tsx</span>
<span class="text-yellow-500">export function</span> <span class="text-green-400">redirectSystemPath</span>(
  <span class="text-indigo-300">event</span>: { 
    initial: <span class="text-blue-400">boolean</span>,
    path: <span class="text-blue-400">string</span> 
  }
) {
  <span class="text-yellow-500">try</span> {
    <span class="text-slate-500">// Redirigir URLs antiguas</span>
    <span class="text-yellow-500">if</span> (event.path.startsWith(<span class="text-orange-300">'/v1/'</span>)) {
      <span class="text-yellow-500">return</span> event.path.replace(<span class="text-orange-300">'/v1/'</span>, <span class="text-orange-300">'/'</span>);
    }
    <span class="text-yellow-500">return</span> event.path;
  } <span class="text-yellow-500">catch</span> (e) {
    console.warn(<span class="text-orange-300">'Error al redirigir:'</span>, e);
    <span class="text-yellow-500">return</span> event.path;
  }
}</div>
            </div>
            
            <div class="text-sm text-gray-600 italic">
                Su valor de retorno debe ser una cadena o una Promise&lt;string&gt;. Los errores dentro de este método pueden causar fallos en la app. Se recomienda envolver tu código en un bloque try/catch.
            </div>
        </div>
        
        <!-- legacy_subscribe -->
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">🔄</span>
                <h3 class="text-lg font-bold text-blue-800">legacy_subscribe <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Experimental</span></h3>
            </div>
            
            <p class="text-gray-700 mb-3">
                Disponible experimentalmente en SDK 52. Útil como una API alternativa cuando un proveedor externo no admite Expo Router pero tiene soporte para React Navigation a través de Linking.subscribe() para proyectos existentes.
            </p>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto mb-4">
                <div class="text-left whitespace-pre p-1">
<span class="text-slate-500">// +native-intent.tsx</span>
<span class="text-yellow-500">export function</span> <span class="text-green-400">legacy_subscribe</span>(
  <span class="text-indigo-300">listener</span>: (url: <span class="text-blue-400">string</span>) => <span class="text-blue-400">void</span>
) {
  <span class="text-slate-500">// Implementación personalizada</span>
  miServicio.subscribe(<span class="text-indigo-300">url</span> => {
    <span class="text-slate-500">// Procesa la URL antes de pasarla</span>
    <span class="text-indigo-300">listener</span>(procesarURL(url));
  });
  
  <span class="text-yellow-500">return</span> () => {
    <span class="text-slate-500">// Limpieza</span>
    miServicio.unsubscribe();
  };
}</div>
            </div>
            
            <div class="bg-amber-50 border-l-4 border-amber-400 p-3 rounded-r-lg mt-4">
                <p class="text-amber-800 text-sm">
                    <span class="font-bold">⚠️ Precaución:</span> No se recomienda para proyectos nuevos ya que es incompatible con Server Side Routing y Static Rendering, y puede ser difícil de gestionar en entornos con conexión limitada.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Ejemplo práctico -->
    <div class="bg-gradient-to-r from-purple-50 to-indigo-50 rounded-xl p-5 shadow-md">
        <div class="flex items-center mb-4">
            <span class="text-3xl mr-3">💡</span>
            <h3 class="text-xl font-bold text-purple-800">Caso de uso común</h3>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="bg-white rounded-lg p-4 shadow-sm">
                <h4 class="font-bold text-indigo-700 mb-2">Problema</h4>
                <p class="text-gray-700 mb-2">
                    Una app recibe enlaces profundos (deep links) desde un servicio externo con formato antiguo:
                </p>
                <div class="bg-slate-100 p-2 rounded font-mono text-sm mb-3">
                    myapp://old-path/products/123
                </div>
                <p class="text-gray-700">
                    Pero la estructura actual de la app usa una ruta diferente:
                </p>
                <div class="bg-slate-100 p-2 rounded font-mono text-sm">
                    myapp://catalog/product/123
                </div>
            </div>
            
            <div class="bg-white rounded-lg p-4 shadow-sm">
                <h4 class="font-bold text-indigo-700 mb-2">Solución con NativeIntent</h4>
                <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
                    <div class="text-left whitespace-pre p-1">
<span class="text-slate-500">// app/+native-intent.tsx</span>
<span class="text-yellow-500">export function</span> <span class="text-green-400">redirectSystemPath</span>({ path }) {
  <span class="text-slate-500">// Detecta el patrón antiguo</span>
  <span class="text-yellow-500">if</span> (path.includes(<span class="text-orange-300">'/old-path/products/'</span>)) {
    <span class="text-slate-500">// Extrae el ID del producto</span>
    <span class="text-yellow-500">const</span> id = path.split(<span class="text-orange-300">'/old-path/products/'</span>)[1];
    
    <span class="text-slate-500">// Redirige a la nueva estructura</span>
    <span class="text-yellow-500">return</span> <span class="text-orange-300">`/catalog/product/${id}`</span>;
  }
  
  <span class="text-yellow-500">return</span> path;
}</div>
                </div>
            </div>
        </div>
    </div>
</div> 