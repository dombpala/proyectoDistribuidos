<?php
    include './components/login.php';
    function LoginPage($props=[]){
        return(
            '<main class="h-screen bg-white grid gap-4 grid-cols-6">
                <div class="col-span-3">
                    '.Login().'
                </div>
                <div class="col-span-3 pt-16 bg-indigo-900">
                    <h1 class="text-5xl text-center mt-5 font-bold text-white">
                    CENTRO DE MASCOTAS  
                    </h1>
                    <p class="font-light text-white text-center p-2">
                    Sistema de gestión de recursos y adopción de mascotas.
                    </p>
                    <div class="p-4 flex content-center items-center justify-center">
                    <img src="./assets/void.svg" alt="" class="w-96 h-96 object-center">
                    </div>
                </div>
            </main>'
        );
    }
?>