<?php
    function TileDonacion($props=[]){
        $date = date_create($props["fecha"]);
        $date = date_format($date, 'Y-m-d');
        return(
            '
            <div class="grid grid-cols-5">
                    <div class="font-medium text-center bg-gray-300 py-4">'.$date.'</div>
                    <div class="font-medium text-center bg-gray-300 py-4">'.$props["donante"].'</div>
                    <div class="col-span-2 font-medium text-center bg-gray-300 py-4">'.$props["descripcion"].'</div>
                    <div class="font-medium text-center bg-gray-300 py-4">'.$props["cantidad"].'</div>
            </div>
            
            '
        );
    }

    function TableDonaciones ($props=[]){
        return (
        '
        <div class="grid grid-cols-6 gap-y-5 my-10 ml-10 ">
            <div class="flex flex-col">
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">'.count($props).'</div>
                <div class="text-3xl text-center font-medium text-gray-800 mr-6">Donaciones</div>
            </div>
            <div class="flex flex-col col-span-5 gap-y-5">
                <div class="grid grid-cols-5">
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Fecha</div>
                    <div class="font-extrabold text-center text-lg  py-2 bg-gray-100">Donante</div>
                    <div class="col-span-2 font-extrabold text-center py-2 text-lg bg-gray-100">Descripción</div>
                    <div class="font-extrabold text-center text-lg py-2 bg-gray-100">Cantidad</div>
                </div>

                '.implode(" ",array_map("TileDonacion",$props)).'

            </div>

        </div>

        ');
    }
?>