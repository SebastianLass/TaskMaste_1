<?php 
include_once ("../include/procesar_formulario.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../css/output.css">
  <title>TaskMaste-Invitar</title>
</head>

<body>
  <div class="flex flex-col h-screen bg-gray-100">

    <!-- Barra de navegación superior -->
    <div class="bg-white text-white shadow w-full p-2 flex items-center justify-between">
      <div class="flex items-center">
        <div class="flex items-center"> <!-- Mostrado en todos los dispositivos -->
          <img src="../img/Logo-Taskmaste.png" alt="Logo" class="h-8 mr-2">
        </div>
        <div class="md:hidden flex items-center"> <!-- Se muestra solo en dispositivos pequeños -->
          <button id="menuBtn">
            <i class="fas fa-bars text-gray-500 text-lg"></i> <!-- Ícono de menú -->
          </button>
        </div>
      </div>

      <!-- Ícono de Notificación -->
      <div class="space-x-5">
        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
          class="font-medium text-gray-900">
          <i class="fas fa-bell text-gray-500 hover:text-neutral-950 text-lg"></i>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownNotification"
        class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow"
        aria-labelledby="dropdownNotificationButton">
        <div
          class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50">
          Notifications
        </div>
        <div class="divide-y divide-gray-100">
          <a href="#" class="flex px-4 py-3 hover:bg-lime-400">
            <div class="flex-shrink-0">
              <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
              <div
                class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full">
                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 18 18">
                  <path
                    d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                  <path
                    d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                </svg>
              </div>
            </div>
            <div class="w-full ps-3">
              <div class="text-gray-500 text-sm mb-1.5">New message from <span
                  class="font-semibold text-gray-900 ">Jese Leos</span>: "Hey, what's up? All set for
                the presentation?"</div>
              <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
            </div>
          </a>
        </div>
        <a href="#"
          class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 ">
          <div class="inline-flex items-center ">
            <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
              <path
                d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
            </svg>
            View all
          </div>
        </a>
      </div>
        <!-- Botón de Perfil -->
        <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
          class="font-medium text-gray-900">
          <span class="sr-only">Open user menu</span>
          <i class="fas fa-user text-gray-500 hover:text-neutral-950 text-lg "></i>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownAvatarName"
          class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
          <div class="px-4 py-3 text-sm text-gray-900 ">
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal">
              <div class="font-medium ">Usuario</div>
              <div class="truncate ml-2"><?php
            // Verifica si la sesión para el nombre de usuario está establecida
            if (isset($_SESSION['nombre_usuario'])) {
                // Muestra el nombre de usuario
                echo $_SESSION['nombre_usuario'];
            } else {
                // Si no hay sesión para el nombre de usuario, muestra un mensaje predeterminado
                echo "Nombre de usuario";
            }
            ?></div>
            </button></div>
          <ul class="py-2 text-sm text-gray-700"
            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-lime-400 ">Dashboard</a>
            </li>
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-lime-400 ">Settings</a>
            </li>
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-lime-400 ">Earnings</a>
            </li>
          </ul>
          <div class="py-2">
            <a href="#"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-lime-400">Sign
              out</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Contenido principal -->
    <div class="flex-1 flex flex-wrap">
      <!-- Barra lateral de navegación (oculta en dispositivos pequeños) -->
      <div class="p-2 bg-blue-600 w-full md:w-60 flex-col md:flex hidden" id="sideNav">
        <nav>
          <button
            class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-lime-400 hover:to-lime-400 hover:text-neutral-950"
            style="width: fit-content; cursor: pointer;" onmouseover="this.style.width='calc(100% + 8px)'"
            onmouseout="this.style.width='fit-content'">
            <a href="taskmaste.php">
              <i class="fas fa-home mr-2"></i>Inicio
            </a></button>
          <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-lime-400 hover:to-lime-400 hover:text-neutral-950"
            style="width: fit-content; cursor: pointer;" onmouseover="this.style.width='calc(100% + 8px)'"
            onmouseout="this.style.width='fit-content'">
            <i class="fa-solid fa-user mr-2"></i>Perfil
          </button>
          <button
            class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-lime-400 hover:to-lime-400 hover:text-neutral-950"
            style="width: fit-content; cursor: pointer;" onmouseover="this.style.width='calc(100% + 8px)'"
            onmouseout="this.style.width='fit-content'">
            <a href="tareas.php">
              <i class="fa-solid fa-book mr-2"></i>Tareas
            </a></button>
          <button
            class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-lime-400 hover:to-lime-400 hover:text-neutral-950"
            style="width: fit-content; cursor: pointer;" onmouseover="this.style.width='calc(100% + 8px)'"
            onmouseout="this.style.width='fit-content'">
            <a href="mensajes.php">
              <i class="fa-solid fa-comments mr-2"></i>Mensajes
            </a></button>
          <button
            class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-lime-400 hover:to-lime-400 hover:text-neutral-950"
            style="width: fit-content; cursor: pointer;" onmouseover="this.style.width='calc(100% + 8px)'"
            onmouseout="this.style.width='fit-content'">
            <a href="invitar.php">
              <i class="fas fa-users mr-2"></i>Invitar Usuario
            </a></button>
          <button
            class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-lime-400 hover:to-lime-400 hover:text-neutral-950"
            style="width: fit-content; cursor: pointer;" onmouseover="this.style.width='calc(100% + 8px)'"
            onmouseout="this.style.width='fit-content'">
            <a href="ayuda.php">
              <i class="fa-solid fa-question mr-2"></i>Ayuda
            </a></button>
        </nav>

        <!-- Ítem de Cerrar Sesión -->
        <button
          class="block text-white py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-lime-400 hover:to-lime-400 hover:text-neutral-950 mt-auto"
          style="width: fit-content; cursor: pointer;" onmouseover="this.style.width='calc(100% + 8px)'"
          onmouseout="this.style.width='fit-content'">
          <a href="../index.html">
            <i class="fas fa-sign-out-alt mr-2"></i>Cerrar sesión
          </a></button>

        <!-- Señalador de ubicación -->
        <div class="bg-gradient-to-r from-lime-400 to-lime-400 h-px mt-2"></div>

        <!-- Copyright al final de la navegación lateral -->
        <p class="mb-1 px-5 py-3 text-left text-xs text-white">Copyright TaskMaste@2024</p>

      </div>

      <!-- Área de contenido principal -->
      <div class="flex-1 p-4 w-full md:w-1/2">

        <!-- Modal-Perfil -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true"
          class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 bottom-0 z-50 w-80 md:w-80 bg-white md:shadow-lg">
          <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                <h3 class="text-lg font-semibold text-gray-900">
                  Perfil
                </h3>
                <button type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                  data-modal-toggle="crud-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                  </svg>
                  <span class="sr-only">Close modal</span>
                </button>
              </div>
              <div class="flex flex-col items-center mt-6 -mx-2">
                <img class="object-cover w-24 h-24 mx-2 rounded-full"
                  src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                  alt="avatar">
                <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400">john@example.com</p>
              </div>
              <!-- Modal body -->
              <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                  <div class="col-span-2">
                    <label for="name"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                    <input type="text" name="name" id="name"
                      class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                      placeholder="Nombre" required="">
                  </div>
                  <div class="col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de
                      telefono</label>
                    <input type="text" name="name" id="name"
                      class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                      placeholder="Numero de telefono" required="">
                  </div>
                  <div class="col-span-2">
                    <label for="description"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Info</label>
                    <textarea id="description" rows="4"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-900 focus:ring-blue-500 focus:border-blue-500"
                      placeholder="Info"></textarea>
                  </div>
                </div>
                <button type="submit"
                  class="text-white inline-flex items-center bg-lime-400 hover:bg-lime-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center border-gray-900">
                  <i class="fa-solid fa-pen me-1 -ms-1 w-5 h-4 mt-1"></i>
                  Actualizar
                </button>
              </form>
            </div>
          </div>
        </div>
        <!-- ------------ -->

        <!-- Sections de invitar -->

        <section class="bg-white">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-md sm:text-center">
                    <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Invitar Amigos</h2>
                    <p class="mx-auto mb-8 max-w-2xl font-light text-gray-500 md:mb-12 sm:text-xl">Stay up to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your email.</p>
                    <form action="#">
                        <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                            <div class="relative w-full">
                                <label for="email" class="hidden mb-2 text-sm font-medium text-gray-900 ">Email address</label>
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"><i class="fas fa-users mr-2"></i>
                                </div>
                                <span class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-neutral-900 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500" id="email" required="">www.TaskMaste.com</span>
                            </div>
                            <div>
                            
                                <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-neutral-900 rounded-lg border cursor-pointer bg-lime-400 border-neutral-900 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300"><i class="fa-solid fa-copy h-4"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </section>
        <!-- -------------------- -->

        <!-- Section de redes sociales -->

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl">Redes sociales</h1>
        
        <a href="#">
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">
            <div class="flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-600 rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/facebook-4.png" alt="">
                
                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize group-hover:text-white">Facebook</h1>
            </div></a>

            <a href="#">
            <div class="flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-600 rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/instagram-3.png" alt="">
                
                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Instagram</h1>
            </div></a>

            <a href="#">
            <div class="flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-600 rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/Twitter-1.png" alt="">
                
                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Twitter</h1>
            </div></a>

            <a href="#">
            <div class="flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-600 rounded-xl">
                <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="../img/github-2.png" alt="">
                
                <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">github</h1>
                </div></a>
            </div>
        </div>
    </div>
</section>
        <!-- ------------------------- -->
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>