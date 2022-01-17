<?php

function TileMascota($props=[]){
    return(
            '<img src="../assets/perro.svg" class="rounded-full w-20 h-20 place-self-center bg-indigo-300" alt="">
            <div class="font-medium capitalize place-self-center">'.$props['name'].'</div>
            <div class="font-medium capitalize place-self-center">'.$props['specie'].'</div>
            <div class="font-medium place-self-center">'.$props['age'].'</div>
            <div class="flex items-center">
                <a href="/?page=adoption_form&pet='.$props['id'].'"class="font-medium border-black rounded-md hover:bg-black hover:text-white px-4 py-2 border-2">Adoptar</a>
            </div>
           '
    );
}

function TableMascotas ($props=[]) {
    return(
        '<div class="grid grid-cols-5 gap-4 ml-10">

            <div class="col-span-1"></div>
            <div class="font-extrabold text-center text-lg">Nombre</div>
            <div class="font-extrabold text-center text-lg">Especie</div>
            <div class="font-extrabold text-center text-lg">Edad</div>
            <div class="col-span-1"></div>

            '.implode(" ",array_map("TileMascota",$props)).'
            
        </div>'
    );
}

?>