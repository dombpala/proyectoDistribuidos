<?php
    function menuCard (){
        return ('
            <ul class="grid grid-cols-2 gap-10 mt-10 mx-10">
                <li>
                    <a href="/?page=donations" class="bg-gray-50 hover:bg-purple-300 hover:border-transparent hover:shadow-lg group block rounded-lg p-4 border border-gray-200 flex flex-col items-center">
                        <img class="w-32 h-32" src="../assets/donaciones.svg" alt="">
                        <h1 class="text-xl text-center font-bold">Donaciones</h1>  
                    </a>
                </li>

                <li>
                    <a href="/?page=sponsors" class="bg-gray-50 hover:bg-purple-300 hover:border-transparent hover:shadow-lg group block rounded-lg p-4 border border-gray-200 flex flex-col items-center">
                        <img class="w-32 h-32" src="../assets/patrocinador.svg" alt="">
                        <h1 class="text-xl text-center font-bold">Patrocinadores</h1>  
                    </a>
                </li>

                <li>
                    <a href="/?page=volunteers" class=" bg-gray-50 hover:bg-purple-300 hover:border-transparent hover:shadow-lg group block rounded-lg p-4 border border-gray-200 flex flex-col items-center">
                        <img class="w-32 h-32" src="../assets/maid.svg" alt="">
                        <h1 class="text-xl text-center font-bold">Voluntarios</h1>  
                    </a>
                </li>

                <li>
                    <a href="/?page=pets" class="hover:bg-purple-300 hover:border-transparent hover:shadow-lg group block rounded-lg p-4 border border-gray-200 flex flex-col items-center">
                        <img class="w-32 h-32" src="../assets/cat.svg" alt="" >
                        <h1 class="text-xl text-center font-bold">Mascotas</h1>  
                    </a>
                </li>
            </ul>
            
        ');
    }
?>