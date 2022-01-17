<?php

    function TilePatrocinador($props=[]){
        $date = date_create($props["fechaNacimiento"]);
        $date = date_format($date, 'Y-m-d');
        return(
            '
            <div class="grid grid-cols-4">
                <div class="font-medium text-center bg-gray-300 py-4">'.$props["cedula"].'</div>
                <div class="font-medium text-center bg-gray-300 py-4">'.$props["nombre"].'</div>
                <div class="font-medium text-center bg-gray-300 py-4">'.$props["apellido"].'</div>
                <div class="font-medium text-center bg-gray-300 py-4">'.$date.'</div>
            </div>
            '
        );
    }

    function TablePatrocinadores ($props=[]){
        return('

        <div class="grid grid-cols-5 gap-y-5 my-10 ml-10 ">
            <div class="flex flex-col">
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">'.count($props).'</div>
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">Patrocinadores</div>
            </div>
            <div class="flex flex-col col-span-4 gap-y-5">
                <div class="grid grid-cols-4">
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Cédula</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Nombre</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Apellido</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Fecha de Nacimiento</div>
                </div>

                '.implode(" ",array_map("TilePatrocinador",$props)).'

            </div>

        </div>

        ');
    }
?>