<?php
    function AdoptionFormPage($props=[]){
        return(
            '<main class="h-screen bg-white grid gap-4 grid-cols-7">
                <div class="col-span-1">
                    '.Sidebar($props).'
                </div>

                <div class="col-span-6 p-5">
                    <h1 class="font-bold text-5xl mt-12">Datos del Adoptante</h1>
                    <form class="grid grid-cols-2" method="POST" action="./actions/adoption.php?pet='.$_GET['pet'].'">
                        <div class="my-7 grid grid-cols-1 w-4/5">
                            <label for="name" class="font-bold mb-2">Nombre </label>
                            <input name="name" class="rounded-md border-black border-2 h-9 p-2" type="text" required>
                        </div>
                        
                        <div class="my-7 grid grid-cols-1 w-4/5">
                            <label for="last_name" class="font-bold mb-2">Apellido </label>
                            <input name="last_name" class="rounded-md border-black border-2 h-9 p-2" type="text" required>
                        </div>

                        <div class="mb-10 grid grid-cols-1 w-4/5">
                            <label for="id_owner" class="font-bold mb-2">Cedula </label>
                            <input name="id_owner" class="rounded-md border-black border-2 h-9 p-2" type="text" required>
                        </div>

                        <div class="mb-10 grid grid-cols-1 w-4/5">
                            <label name="birthday" class="font-bold mb-2">Fecha de Nacimiento </label>
                            <input name="birthday" class="rounded-md border-black border-2 h-9 p-2" type="date" required>
                        </div>

                        <div class="col-span-2 place-self-center mr-24">
                            <button type="submit" class="font-medium border-black bg-black rounded-md text-white w-36 p-2 border-2">
                                Adoptar
                            </button>
                        </div>
                    </form>
                </div>
            </main>'
        );
    }  
?>