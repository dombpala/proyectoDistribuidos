<?php
    include "./components/tableVoluntarios.php";

    function VolunteerPage($props=[]){
        return(
            '<main class="h-screen bg-white grid gap-4 grid-cols-7">
                    <div class="col-span-1">
                        '.Sidebar(array("username"=>$props['username'], "active_menu"=>$props['active_menu'])).'
                    </div>
                    <div class="col-span-6 p-5">
                        <h1 class="text-5xl font-bold ml-10">Voluntarios</h2>
                        <p class="text-gray-400 py-2 ml-10">Visualiza el estado de tus recursos</p>
                        '.tableVoluntarios($props['volunteer_list']).'
                        <div class="grid grid-cols-6">
                            <div class="col-start-1 col-end-2 rounded-full bg-gray-900 text-white text-xl text-center ml-10 py-3 px-3">
                                <a href="/?page=menu" class=""><i class="fas fa-arrow-circle-left mr-3" style="color: white;"></i>
                                    Regresar
                                </a>
                            </div>
                        </div>
                    </div>    
                </main>'
        );
    }
?>