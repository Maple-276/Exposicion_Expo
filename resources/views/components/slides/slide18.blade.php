<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">🧩 ¿Qué es PickPartial?</h2>
    
    <div class="mb-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-xl p-5 shadow-sm">
        <p class="text-lg text-gray-800 mb-3">
            Imaginá que tenés un tipo en TypeScript que representa un objeto con varias propiedades.
        </p>
        <p class="text-lg text-gray-800 mb-3">
            A veces, querés que algunas propiedades se vuelvan opcionales, pero las demás queden igual.
        </p>
        <p class="text-lg font-medium text-indigo-700">
            Eso es exactamente lo que hace PickPartial.
        </p>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Cómo funciona -->
        <div class="bg-gradient-to-br from-violet-50 to-indigo-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">🎓</span>
                <h3 class="text-lg font-bold text-indigo-800">¿Cómo funciona internamente?</h3>
            </div>
            
            <p class="text-gray-700 mb-3">
                PickPartial&lt;T, K&gt; se define así:
            </p>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm mb-4">
                <div class="text-left whitespace-pre p-1">
<span class="text-indigo-400">Omit</span>&lt;T, K&gt; & <span class="text-indigo-400">Partial</span>&lt;<span class="text-indigo-400">Pick</span>&lt;T, K&gt;&gt;</div>
            </div>
            
            <p class="font-medium text-indigo-700 mb-2">Traducido a castellano:</p>
            
            <ul class="space-y-2 list-disc pl-5 text-gray-700">
                <li>Tomá el tipo T, dejá todas las propiedades menos las K (<span class="font-mono bg-indigo-100 px-1 rounded">Omit&lt;T, K&gt;</span>)</li>
                <li>y luego, hacé que las K sean opcionales (<span class="font-mono bg-indigo-100 px-1 rounded">Partial&lt;Pick&lt;T, K&gt;&gt;</span>)</li>
                <li>→ Uní las dos partes con <span class="font-mono bg-indigo-100 px-1 rounded">&</span>.</li>
            </ul>
        </div>
        
        <!-- Ejemplo práctico -->
        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-5 shadow-md">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-2">🎯</span>
                <h3 class="text-lg font-bold text-blue-800">Ejemplo práctico</h3>
            </div>
            
            <p class="font-medium text-blue-700 mb-2">🧾 Tipo original</p>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto mb-4">
                <div class="text-left whitespace-pre p-1">
<span class="text-yellow-500">type</span> <span class="text-green-400">Usuario</span> = {
  nombre: <span class="text-blue-400">string</span>;
  email: <span class="text-blue-400">string</span>;
  edad: <span class="text-blue-400">number</span>;
};</div>
            </div>
            
            <p class="font-medium text-blue-700 mb-2">✅ Queremos que solo email sea opcional:</p>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto mb-4">
                <div class="text-left whitespace-pre p-1">
<span class="text-yellow-500">type</span> <span class="text-green-400">UsuarioConEmailOpcional</span> = 
  <span class="text-indigo-400">Omit</span>&lt;Usuario, "email"&gt; & 
  <span class="text-indigo-400">Partial</span>&lt;<span class="text-indigo-400">Pick</span>&lt;Usuario, "email"&gt;&gt;;</div>
            </div>
            
            <p class="font-medium text-blue-700 mb-2">El resultado es:</p>
            
            <div class="bg-slate-800 text-slate-100 rounded-md p-3 font-mono text-sm overflow-auto">
                <div class="text-left whitespace-pre p-1">
<span class="text-yellow-500">type</span> <span class="text-green-400">UsuarioConEmailOpcional</span> = {
  nombre: <span class="text-blue-400">string</span>;
  edad: <span class="text-blue-400">number</span>;
  email?: <span class="text-blue-400">string</span>; <span class="text-slate-500">// 👈 solo este es opcional</span>
};</div>
            </div>
        </div>
    </div>
    
    <!-- Diagrama visual -->
    <div class="bg-gradient-to-r from-fuchsia-50 to-pink-50 rounded-xl p-5 shadow-md">
        <div class="flex items-center mb-4">
            <span class="text-3xl mr-3">📊</span>
            <h3 class="text-xl font-bold text-fuchsia-800">Explicación visual</h3>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg p-4 shadow-sm text-center">
                <div class="rounded-full bg-fuchsia-100 w-16 h-16 flex items-center justify-center mx-auto mb-3">
                    <span class="text-2xl">🧩</span>
                </div>
                <h4 class="font-bold text-fuchsia-800 mb-2">PickPartial&lt;T, K&gt;</h4>
                <p class="text-sm text-gray-700">Convierte algunas propiedades en opcionales</p>
            </div>
            
            <div class="bg-white rounded-lg p-4 shadow-sm text-center">
                <div class="rounded-full bg-red-100 w-16 h-16 flex items-center justify-center mx-auto mb-3">
                    <span class="text-2xl">❌</span>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">Paso 1</h4>
                <p class="text-sm text-gray-700">Quita (<span class="font-mono">Omit</span>) las claves que querés hacer opcionales</p>
            </div>
            
            <div class="bg-white rounded-lg p-4 shadow-sm text-center">
                <div class="rounded-full bg-green-100 w-16 h-16 flex items-center justify-center mx-auto mb-3">
                    <span class="text-2xl">✅</span>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">Paso 2</h4>
                <p class="text-sm text-gray-700">Agrega esas claves como opcionales (<span class="font-mono">Partial&lt;Pick&gt;</span>)</p>
            </div>
            
            <div class="bg-white rounded-lg p-4 shadow-sm text-center">
                <div class="rounded-full bg-blue-100 w-16 h-16 flex items-center justify-center mx-auto mb-3">
                    <span class="text-2xl">🔗</span>
                </div>
                <h4 class="font-bold text-gray-800 mb-2">Paso 3</h4>
                <p class="text-sm text-gray-700">Une ambos con el operador <span class="font-mono">&</span></p>
            </div>
        </div>
    </div>
</div> 