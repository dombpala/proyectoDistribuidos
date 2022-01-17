<?php
    function Sidebar($props=[]){
        return(
            '<div class="bg-gray-100 h-screen relative py-5 px-2 grid grid-rows-8">
                <div class="h-full bg-white row-span-2 rounded-t-full p-10">
                    <div class="rounded-full max-w-xs">
                        <img src="../assets/mascotas.svg" alt="">
                    </div>
                </div>
                <div class="h-full bg-white row-span-4 px-6">
                    <div class="py-2 flex-col">
                        <div class="">
                            <h1 class="text-xl text-center font-light">
                                Bienvenido
                            </h1>
                            <p class="text-xl text-center font-bold">
                                '.$props['username'].'
                            </p>
                        </div>
                        <div class="py-6">
                            <div class="grid grid-cols-4 py-1 '.(($props['active_menu']=='Inicio')? 'text-black':'text-gray-300').'">
                                <div class="col-span-2 text-center">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="col-span-2">
                                    <a href="/" class="">Inicio</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 py-1 '.(($props['active_menu']=='Menu')? 'text-black':'text-gray-300').'">
                                <div class="col-span-2 text-center">
                                    <i class="fas fa-th-large"></i>
                                </div>
                                <div class="col-span-2">
                                    <a href="/?page=menu" class="">Menu</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 py-1 '.(($props['active_menu']=='Adopcion')? 'text-black':'text-gray-300').'">
                                <div class="col-span-2 text-center">
                                    <i class="fas fa-paw"></i>
                                </div>
                                <div class="col-span-2">
                                    <a href="/?page=adoption" class="">Adopcion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-full bg-white row-span-2 rounded-b-full p-12">
                    <div class="rounded-full bg-gray-900 text-center py-4 px-4">
                        <a href="/?page=logout" class=""><i class="fa fa-door-open" style="color: white;"></i></a>
                    </div>
                </div>
            </div>'
        );
    }
?>