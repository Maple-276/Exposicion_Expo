<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">¿Qué es EffectCallback()?</h2>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-6 shadow-md">
            <div class="flex items-center mb-4">
                <span class="text-4xl mr-3">🧠</span>
                <h3 class="text-xl font-bold text-indigo-700">Definición</h3>
            </div>
            <p class="text-gray-800 mb-4">
                Un EffectCallback es simplemente la función que le pasás a useEffect() en React.
            </p>
            <p class="text-gray-800 mb-4">
                Se ejecuta después de que el componente se muestra en pantalla, y puede devolver una función de limpieza.
            </p>
            
            <div class="mt-6">
                <div class="flex items-start">
                    <span class="text-2xl mr-3 text-amber-500">🎓</span>
                    <div>
                        <p class="font-bold text-gray-800">Analogía:</p>
                        <p class="text-gray-700 italic">Como un cargador de celular: Lo usás sin saber su nombre técnico, pero si sos ingeniero, sabés que se llama "dispositivo transformador de energía".</p>
                        <p class="text-gray-700 italic mt-2">Así también, esta función tiene un nombre técnico: EffectCallback.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 shadow-md">
            <div class="flex items-center mb-4">
                <span class="text-4xl mr-3">🛠️</span>
                <h3 class="text-xl font-bold text-blue-700">¿Para qué sirve?</h3>
            </div>
            
            <p class="text-gray-800 mb-4">Usalo cuando querés:</p>
            
            <div class="space-y-3 pl-2">
                <div class="bg-white rounded-lg p-3 border-l-4 border-blue-500 shadow-sm">
                    <p class="text-gray-800">Pedir datos al servidor</p>
                </div>
                
                <div class="bg-white rounded-lg p-3 border-l-4 border-green-500 shadow-sm">
                    <p class="text-gray-800">Iniciar un temporizador</p>
                </div>
                
                <div class="bg-white rounded-lg p-3 border-l-4 border-purple-500 shadow-sm">
                    <p class="text-gray-800">Escuchar eventos</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-6 bg-slate-800 text-slate-100 rounded-md p-4 font-mono text-sm overflow-auto">
        <pre class="text-left whitespace-pre">
@verbatim
useEffect(() => {
  // Esto es el EffectCallback
  console.log('Componente montado');

  return () => {
    // Función de limpieza
    console.log('Componente desmontado');
  };
}, []);
@endverbatim</pre>
    </div>
</div> 