<?php

    function tileMenuMascota($props=[]){
        return(
            '<div class="grid grid-cols-3">
                <div class="font-medium text-center bg-gray-300 py-4">'.$props['name'].'</div>
                <div class="font-medium text-center bg-gray-300 py-4">'.$props['specie'].'</div>
                <div class="font-medium text-center bg-gray-300 py-4">'.$props['age'].'</div>
            </div>'
        );
    }

    function tableMenuMascotas ($props=[]){
        return(
            '<div class="grid grid-cols-5 gap-y-5 my-10 ml-10 ">
                <div class="flex flex-col">
                    <div class="text-3xl text-center font-medium text-gray-800 mr-6">'.count($props).'</div>
                    <div class="text-3xl text-center font-medium text-gray-800 mr-6">Mascotas</div>
                </div>
                <div class="flex flex-col col-span-4 gap-y-5">
                    <div class="grid grid-cols-3">
                        <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Nombre</div>
                        <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Especie</div>
                        <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Edad</div>
                    </div>
                    '.implode(" ",array_map("tileMenuMascota",$props)).'
                </div>
            </div>' 
        );
    }
?>