<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">¿Qué son los Types?</h2>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-6 shadow-md">
            <div class="flex items-center mb-4">
                <span class="text-4xl mr-3">🎓</span>
                <h3 class="text-xl font-bold text-indigo-700">Definición</h3>
            </div>
            <p class="text-gray-800 mb-4">
                En palabras simples, los Types son estructuras que definen cómo deben verse los datos que usas en tu aplicación, 
                especialmente cuando estás trabajando con TypeScript.
            </p>
            <p class="text-gray-800 mb-2 font-medium">Es como decir:</p>
            <div class="bg-white rounded-lg p-4 border-l-4 border-indigo-500 text-indigo-800 font-medium italic shadow-sm">
                "Si quieres usar esta función o componente, los datos que le mandas deben tener esta forma exacta."
            </div>
        </div>
        
        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 shadow-md">
            <div class="flex items-center mb-4">
                <span class="text-4xl mr-3">📘</span>
                <h3 class="text-xl font-bold text-blue-700">¿Por qué son útiles?</h3>
            </div>
            
            <div class="space-y-4">
                <div class="flex items-start">
                    <span class="text-2xl mr-3 text-red-500">🛡️</span>
                    <div>
                        <p class="font-bold text-gray-800">Ayudan a prevenir errores</p>
                        <p class="text-gray-700">Si usas un valor incorrecto, TypeScript te avisa.</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <span class="text-2xl mr-3 text-blue-500">🧠</span>
                    <div>
                        <p class="font-bold text-gray-800">Documentan tu código</p>
                        <p class="text-gray-700">Sabes qué espera una función sin leer toda su lógica.</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <span class="text-2xl mr-3 text-green-500">⚙️</span>
                    <div>
                        <p class="font-bold text-gray-800">Mejoran el autocompletado</p>
                        <p class="text-gray-700">En tu editor, te sugiere propiedades correctas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-6 bg-slate-800 text-slate-100 rounded-md p-4 font-mono text-sm overflow-auto">
        <pre class="text-left whitespace-pre">
@verbatim
// Ejemplo de Type en TypeScript
type User = {
  id: number;
  name: string;
  email: string;
  isActive: boolean;
  preferences?: {
    theme: 'light' | 'dark';
    notifications: boolean;
  }
};

// Uso del type
function updateUserProfile(user: User) {
  // TypeScript verificará que user tenga la estructura correcta
  console.log(`Actualizando perfil de ${user.name}`);
  
  // ✅ Acceso seguro a propiedades opcionales
  const theme = user.preferences?.theme || 'light';
}
@endverbatim</pre>
    </div>
</div> 