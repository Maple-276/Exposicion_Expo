<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">¿Qué es ExternalPathString?</h2>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-6 shadow-md">
            <div class="flex items-center mb-4">
                <span class="text-4xl mr-3">🧠</span>
                <h3 class="text-xl font-bold text-indigo-700">Definición</h3>
            </div>
            <p class="text-gray-800 mb-4">
                Es un tipo especial que representa rutas externas en tu app con Expo Router.
            </p>
            
            <div class="mt-6">
                <div class="flex items-center mb-4">
                    <span class="text-4xl mr-3">🌍</span>
                    <h3 class="text-xl font-bold text-indigo-700">¿Qué es una ruta externa?</h3>
                </div>
                <p class="text-gray-800">
                    Es cualquier dirección fuera de tu app:
                </p>
                <div class="flex items-center mt-2 space-x-2">
                    <span class="text-xl">📎</span>
                    <p class="text-gray-800">URLs, llamadas, emails, o esquemas personalizados.</p>
                </div>
            </div>
            
            <div class="mt-6 space-y-2">
                <p class="font-bold text-gray-800">Ejemplos:</p>
                <div class="bg-white rounded-lg p-2 border-l-4 border-indigo-500 font-mono text-sm">https://google.com</div>
                <div class="bg-white rounded-lg p-2 border-l-4 border-green-500 font-mono text-sm">tel:+123456789</div>
                <div class="bg-white rounded-lg p-2 border-l-4 border-blue-500 font-mono text-sm">mailto:alguien@email.com</div>
                <div class="bg-white rounded-lg p-2 border-l-4 border-purple-500 font-mono text-sm">myapp://perfil</div>
            </div>
        </div>
        
        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 shadow-md">
            <div class="flex items-center mb-4">
                <span class="text-4xl mr-3">🔤</span>
                <h3 class="text-xl font-bold text-blue-700">¿Qué forma tiene?</h3>
            </div>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-4 font-mono text-sm overflow-auto mb-6">
                <pre class="text-left whitespace-pre">
@verbatim
type ExternalPathString =
  `${string}:${string}` | `//${string}`;
@endverbatim</pre>
            </div>
            
            <p class="font-bold text-gray-800 mb-2">Traducción fácil:</p>
            
            <div class="space-y-4 mb-6">
                <div>
                    <p class="font-medium text-gray-800">Con protocolo (algo:algo)</p>
                    <p class="text-gray-700 pl-2 bg-white p-2 rounded mt-1 border-l-2 border-blue-400">
                        https://..., tel:..., mailto:..., myapp://...
                    </p>
                </div>
                
                <div>
                    <p class="font-medium text-gray-800">Sin protocolo (//algo)</p>
                    <p class="text-gray-700 pl-2 bg-white p-2 rounded mt-1 border-l-2 border-green-400">
                        //cdn.misitio.com/imagen.png
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-6 bg-gradient-to-r from-indigo-100 to-blue-100 rounded-xl p-5 shadow-md">
        <div class="flex items-center mb-4">
            <span class="text-4xl mr-3">🎯</span>
            <h3 class="text-xl font-bold text-indigo-800">Ejemplos prácticos en tu app</h3>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <div class="bg-white rounded-lg p-4 shadow-sm mb-3">
                    <h4 class="font-bold text-indigo-700 mb-2">Componente Link</h4>
                    <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
                        <pre class="text-left whitespace-pre">
@verbatim
// Navegando a un sitio web externo
<Link href="https://docs.expo.dev">
  Ver documentación
</Link>

// Enviando un email
<Link href="mailto:soporte@miapp.com">
  Escribir al soporte
</Link>

// Haciendo una llamada
<Link href="tel:+123456789">
  Llamar a servicio al cliente
</Link>
@endverbatim</pre>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="bg-white rounded-lg p-4 shadow-sm mb-3">
                    <h4 class="font-bold text-indigo-700 mb-2">Uso con router.push()</h4>
                    <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
                        <pre class="text-left whitespace-pre">
@verbatim
import { router } from 'expo-router';

// En un manejador de eventos
function handleOpenWebsite() {
  // TypeScript reconoce esto como una ruta externa
  router.push('https://expo.dev');
}

// Abriendo un esquema personalizado
function openDeepLink() {
  router.push('miapp://settings/profile');
}
@endverbatim</pre>
                    </div>
                </div>
                
                <div class="flex items-start mt-3">
                    <span class="text-green-600 font-bold text-xl mr-2">✅</span>
                    <p class="text-indigo-800 font-medium">El sistema operativo abrirá la app correspondiente automáticamente cuando uses una ExternalPathString.</p>
                </div>
            </div>
        </div>
    </div>
</div> 