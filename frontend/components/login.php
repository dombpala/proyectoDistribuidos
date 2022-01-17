<?php
    function Login($props=[]){
        return(
            '<div class="min-h-screen flex items-center justify-center py-12 px-4">
                <div class="max-w-md w-full">
                    <h1 class="font-bold text-5xl text-gray-800 text-center">Bienvenido</h1>
                    <form class="mt-5" action="../actions/login.php" method="POST">
                        <div>
                            <div>
                                <label for="username" class="font-light text-base text-gray-700">Usuario</label>
                                <input name="username" type="text" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-800 placeholder-gray-500 text-black-100 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 focus:z-10 sm:text-sm sm:leading-5 bg-white" placeholder="Ingrese su usuario" />
                            </div>
                            <div class="mt-5">
                                <label for="password" class="font-light text-base text-gray-700"">Contraseña</label>
                                <input name="password" type="password" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-800 placeholder-gray-500 text-black-100 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 focus:z-10 sm:text-sm sm:leading-5 bg-white" placeholder="Ingrese su contraseña" />
                            </div>
                        </div>
                        <div class="mt-6 text-center">
                            <button type="submit" class="bg-indigo-700 text-white rounded-md px-4 py-2 hover:bg-indigo-600">
                                Iniciar sesión
                            </button>
                        </div> 
                    </form>
                </div>
            </div>'
        );
    }
?>