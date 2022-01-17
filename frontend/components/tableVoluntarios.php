<?php

    function tileVoluntario($props=[]){
        $date = date_create($props["fechaNacimiento"]);
        $date = date_format($date, 'Y-m-d');
        return(
            '<div class="grid grid-cols-5">
                <div class="font-medium text-center bg-gray-300 py-4">'.$props["cedula"].'</div>
                <div class="font-medium text-center bg-gray-300 py-4">'.$props["nombre"].'</div>
                <div class="font-medium text-center bg-gray-300 py-4">'.$props["apellido"].'</div>
                <div class="font-medium text-center bg-gray-300 py-4">'.$date.'</div>
                <div class="font-medium text-center bg-gray-300 py-4">'.$props["tipo"].'</div>
            </div>'
        );
    }

    function tableVoluntarios ($props=[]){
        return(
            '<div class="grid grid-cols-5 gap-y-5 my-10 ml-10 ">
                <div class="flex flex-col">
                    <div class="text-3xl text-center font-medium text-gray-800 mr-6">'.count($props).'</div>
                    <div class="text-3xl text-center font-medium text-gray-800 mr-6">Voluntarios</div>
                </div>
                <div class="flex flex-col col-span-4 gap-y-5">
                    <div class="grid grid-cols-5">
                        <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Cédula</div>
                        <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Nombre</div>
                        <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Apellido</div>
                        <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Fecha de Nacimiento</div>
                        <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Tipo</div>
                    </div>
                    '.implode(" ",array_map("tileVoluntario",$props)).'
                </div>
            </div>' 
        );
    }
?>