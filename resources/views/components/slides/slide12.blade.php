<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">Ejemplos Prácticos de Métodos</h2>
    
    <div class="tabs flex border-b border-gray-300 mb-6">
        <button onclick="showCodeTab('sitemap')" id="tab-sitemap" class="tab-btn px-4 py-2 font-medium rounded-t-lg bg-indigo-500 text-white">sitemap()</button>
        <button onclick="showCodeTab('withLayout')" id="tab-withLayout" class="tab-btn px-4 py-2 font-medium rounded-t-lg bg-gray-200 ml-2">withLayoutContext()</button>
    </div>
    
    <div id="content-sitemap" class="tab-content block">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-4">
            <div class="lg:col-span-3">
                <div class="bg-slate-800 text-slate-100 rounded-md p-4 font-mono text-sm overflow-auto h-64">
                    <pre class="text-left whitespace-pre">
@verbatim
<span class="text-pink-400">// app/debug-routes.tsx</span>
<span class="text-blue-400">import</span> { sitemap } <span class="text-blue-400">from</span> <span class="text-green-400">'expo-router'</span>;

<span class="text-blue-400">export default function</span> <span class="text-yellow-400">DebugRoutes</span>() {
  <span class="text-blue-400">const</span> routes = <span class="text-yellow-400">sitemap</span>();

  <span class="text-blue-400">return</span> (
    <span class="text-indigo-400">&lt;ScrollView&gt;</span>
      {routes.<span class="text-yellow-400">map</span>((route, index) =&gt; (
        <span class="text-indigo-400">&lt;Text</span> key={index}<span class="text-indigo-400">&gt;</span>{route.route}<span class="text-indigo-400">&lt;/Text&gt;</span>
      ))}
    <span class="text-indigo-400">&lt;/ScrollView&gt;</span>
  );
}
@endverbatim</pre>
                </div>
            </div>
            <div class="lg:col-span-2">
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-4 h-64 flex flex-col">
                    <h3 class="font-bold text-lg text-indigo-700 mb-3">Resultados:</h3>
                    <div class="overflow-auto flex-grow bg-white rounded-lg p-3 border border-indigo-200 shadow-inner">
                        <div class="text-indigo-800 font-mono">
                            <div class="border-b border-indigo-100 py-1">/</div>
                            <div class="border-b border-indigo-100 py-1">/profile</div>
                            <div class="border-b border-indigo-100 py-1">/settings</div>
                            <div class="border-b border-indigo-100 py-1">/about</div>
                            <div class="border-b border-indigo-100 py-1">/product/[id]</div>
                            <div class="border-b border-indigo-100 py-1">/user/[name]</div>
                            <div class="border-b border-indigo-100 py-1">/blog/[...slug]</div>
                        </div>
                    </div>
                    <div class="mt-3 flex items-start">
                        <span class="text-green-600 font-bold mr-2">✅</span>
                        <p class="text-sm text-indigo-700">Muestra todas las rutas disponibles en tiempo de ejecución.</p>
                    </div>
                    <div class="mt-1 flex items-start">
                        <span class="text-blue-600 font-bold mr-2">🔍</span>
                        <p class="text-sm text-indigo-700">Útil para inspeccionar, testear o exportar rutas para uso estático.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="content-withLayout" class="tab-content hidden">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-4">
            <div class="lg:col-span-3">
                <div class="bg-slate-800 text-slate-100 rounded-md p-4 font-mono text-sm overflow-auto h-64">
                    <pre class="text-left whitespace-pre">
@verbatim
<span class="text-pink-400">// app/_layout.tsx</span>
<span class="text-blue-400">import</span> { withLayoutContext } <span class="text-blue-400">from</span> <span class="text-green-400">'expo-router'</span>;
<span class="text-blue-400">import</span> { Stack } <span class="text-blue-400">from</span> <span class="text-green-400">'expo-router/stack'</span>;

<span class="text-blue-400">const</span> CustomStack = <span class="text-yellow-400">withLayoutContext</span>(Stack);

<span class="text-blue-400">export default function</span> <span class="text-yellow-400">Layout</span>() {
  <span class="text-blue-400">return</span> (
    <span class="text-indigo-400">&lt;CustomStack</span>
      screenOptions={{
        headerShown: <span class="text-green-400">true</span>,
        animation: <span class="text-green-400">'slide_from_right'</span>,
      }}
    <span class="text-indigo-400">/&gt;</span>
  );
}
@endverbatim</pre>
                </div>
            </div>
            <div class="lg:col-span-2">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-4 h-64 flex flex-col">
                    <h3 class="font-bold text-lg text-blue-700 mb-2">Vista previa:</h3>
                    <div class="overflow-hidden flex-grow bg-white rounded-lg p-0 border border-blue-200 shadow-inner relative">
                        <!-- Simulación de phone -->
                        <div class="absolute top-0 left-0 right-0 h-8 bg-blue-500 flex items-center px-3">
                            <div class="text-white text-sm font-medium">Mi Aplicación</div>
                        </div>
                        <div class="mt-8 p-3">
                            <div class="rounded-lg bg-gray-100 p-2 mb-2 flex items-center">
                                <div class="w-8 h-8 rounded-full bg-blue-200 mr-2"></div>
                                <div>Perfil de Usuario</div>
                            </div>
                            <div class="rounded-lg bg-gray-100 p-2 mb-2 flex items-center">
                                <div class="w-8 h-8 rounded-full bg-green-200 mr-2"></div>
                                <div>Configuración</div>
                            </div>
                            <div class="rounded-lg bg-gray-100 p-2 flex items-center">
                                <div class="w-8 h-8 rounded-full bg-purple-200 mr-2"></div>
                                <div>Acerca de</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="flex items-start mb-1">
                            <span class="text-blue-600 font-bold mr-2">🛠️</span>
                            <p class="text-sm text-blue-700">Stack con layouts integrados, animaciones y headers personalizados.</p>
                        </div>
                        <div class="flex items-start">
                            <span class="text-purple-600 font-bold mr-2">🔒</span>
                            <p class="text-sm text-blue-700">Puede envolverse con lógica de autenticación o diseño compartido.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function showCodeTab(tabName) {
            // Ocultar todos los contenidos
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
                content.classList.remove('block');
            });
            
            // Resetear todos los botones
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-indigo-500', 'bg-blue-500', 'text-white');
                btn.classList.add('bg-gray-200');
            });
            
            // Mostrar el contenido seleccionado
            const content = document.getElementById('content-' + tabName);
            if (content) {
                content.classList.remove('hidden');
                content.classList.add('block');
            }
            
            // Actualizar el botón seleccionado
            const btn = document.getElementById('tab-' + tabName);
            if (btn) {
                btn.classList.remove('bg-gray-200');
                btn.classList.add(tabName === 'sitemap' ? 'bg-indigo-500' : 'bg-blue-500', 'text-white');
            }
        }
        
        // Exponer la función globalmente
        window.showCodeTab = showCodeTab;
        
        // Inicializar la primera pestaña
        showCodeTab('sitemap');
        
        // Escuchar el evento slideChanged
        document.addEventListener('slideChanged', function(e) {
            if (e.detail.currentSlide === 11) { // Ajustar al índice correcto de esta diapositiva (0-based)
                showCodeTab('sitemap');
            }
        });
    });
</script> 