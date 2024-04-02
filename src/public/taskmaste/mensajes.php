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
  <link rel="stylesheet" href="../css/output.css">
  <title>TaskMaste</title>
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
        class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
        aria-labelledby="dropdownNotificationButton">
        <div
          class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
          Notifications
        </div>
        <div class="divide-y divide-gray-100 dark:divide-gray-700">
          <a href="#" class="flex px-4 py-3 hover:bg-lime-400 dark:hover:bg-lime-400">
            <div class="flex-shrink-0">
              <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
              <div
                class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
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
              <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span
                  class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey, what's up? All set for
                the presentation?"</div>
              <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
            </div>
          </a>
        </div>
        <a href="#"
          class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
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
          class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
          <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
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
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-lime-400 dark:hover:bg-lime-400 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-lime-400 dark:hover:bg-lime-400 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-lime-400 dark:hover:bg-lime-400 dark:hover:text-white">Earnings</a>
            </li>
          </ul>
          <div class="py-2">
            <a href="#"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-lime-400 dark:hover:bg-lime-400 dark:text-gray-200 dark:hover:text-white">Sign
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
            <a href="taskmaste.php">
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
            <a href="taskmaste.php">
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
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  Perfil
                </h3>
                <button type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
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
                      class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                      placeholder="Nombre" required="">
                  </div>
                  <div class="col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de
                      telefono</label>
                    <input type="text" name="name" id="name"
                      class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                      placeholder="Numero de telefono" required="">
                  </div>
                  <div class="col-span-2">
                    <label for="description"
                      class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Info</label>
                    <textarea id="description" rows="4"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-900 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Info"></textarea>
                  </div>
                </div>
                <button type="submit"
                  class="text-white inline-flex items-center bg-lime-400 hover:bg-lime-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 border-gray-900">
                  <i class="fa-solid fa-pen me-1 -ms-1 w-5 h-4 mt-1"></i>
                  Actualizar
                </button>
              </form>
            </div>
          </div>
        </div>
        <!-- ------------ -->

        <!-- Interfas de mensajes -->

        <!-- component -->
<div class="flex h-screen antialiased text-gray-800">
  <div class="flex flex-row h-full w-full overflow-x-hidden">
    <div class="flex flex-col py-8 pl-6 pr-2 w-64 bg-white flex-shrink-0">
      <div class="flex flex-row items-center justify-center h-12 w-full">
        <div
          class="flex items-center justify-center rounded-2xl text-lime-400 bg-indigo-100 h-10 w-10"
        >
          <svg
            class="w-6 h-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"
            ></path>
          </svg>
        </div>
        <div class="ml-2 font-bold text-2xl">TaskMasteChat</div>
      </div>

      <div class="flex flex-col mt-8">
        <div class="flex flex-row items-center justify-between text-xs">
          <span class="font-bold">Active Conversations</span>
          <span
            class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full"
            >4</span
          >
        </div>
        <div class="flex flex-col space-y-1 mt-4 -mx-2 h-48 overflow-y-auto">
          <button
            class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
          >
            <div
              class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full"
            >
              H
            </div>
            <div class="ml-2 text-sm font-semibold">Henry Boyd</div>
          </button>
          <button
            class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
          >
            <div
              class="flex items-center justify-center h-8 w-8 bg-gray-200 rounded-full"
            >
              M
            </div>
            <div class="ml-2 text-sm font-semibold">Marta Curtis</div>
            <div
              class="flex items-center justify-center ml-auto text-xs text-white bg-red-500 h-4 w-4 rounded leading-none"
            >
              2
            </div>
          </button>
          <button
            class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
          >
            <div
              class="flex items-center justify-center h-8 w-8 bg-orange-200 rounded-full"
            >
              P
            </div>
            <div class="ml-2 text-sm font-semibold">Philip Tucker</div>
          </button>
          <button
            class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
          >
            <div
              class="flex items-center justify-center h-8 w-8 bg-pink-200 rounded-full"
            >
              C
            </div>
            <div class="ml-2 text-sm font-semibold">Christine Reid</div>
          </button>
          <button
            class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
          >
            <div
              class="flex items-center justify-center h-8 w-8 bg-purple-200 rounded-full"
            >
              J
            </div>
            <div class="ml-2 text-sm font-semibold">Jerry Guzman</div>
          </button>
        </div>
        <div class="flex flex-row items-center justify-between text-xs mt-6">
          <span class="font-bold">Archivied</span>
          <span
            class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full"
            >7</span
          >
        </div>
        <div class="flex flex-col space-y-1 mt-4 -mx-2">
          <button
            class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
          >
            <div
              class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full"
            >
              H
            </div>
            <div class="ml-2 text-sm font-semibold">Henry Boyd</div>
          </button>
        </div>
      </div>
    </div>
    <div class="flex flex-col flex-auto h-full p-6">
      <div
        class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4"
      >
        <div class="flex flex-col h-full overflow-x-auto mb-4">
          <div class="flex flex-col h-full">
            <div class="grid grid-cols-12 gap-y-2">
              <div class="col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                  <div
                    class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                  >
                    A
                  </div>
                  <div
                    class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl"
                  >
                    <div>Hey How are you today?</div>
                  </div>
                </div>
              </div>
              <div class="col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                  <div
                    class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                  >
                    A
                  </div>
                  <div
                    class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl"
                  >
                    <div>
                      Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Vel ipsa commodi illum saepe numquam maxime
                      asperiores voluptate sit, minima perspiciatis.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-6 col-end-13 p-3 rounded-lg">
                <div class="flex items-center justify-start flex-row-reverse">
                  <div
                    class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                  >
                    A
                  </div>
                  <div
                    class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl"
                  >
                    <div>I'm ok what about you?</div>
                  </div>
                </div>
              </div>
              <div class="col-start-6 col-end-13 p-3 rounded-lg">
                <div class="flex items-center justify-start flex-row-reverse">
                  <div
                    class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                  >
                    A
                  </div>
                  <div
                    class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl"
                  >
                    <div>
                      Lorem ipsum dolor sit, amet consectetur adipisicing. ?
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                  <div
                    class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                  >
                    A
                  </div>
                  <div
                    class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl"
                  >
                    <div>Lorem ipsum dolor sit amet !</div>
                  </div>
                </div>
              </div>
              <div class="col-start-6 col-end-13 p-3 rounded-lg">
                <div class="flex items-center justify-start flex-row-reverse">
                  <div
                    class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                  >
                    A
                  </div>
                  <div
                    class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl"
                  >
                    <div>
                      Lorem ipsum dolor sit, amet consectetur adipisicing. ?
                    </div>
                    <div
                      class="absolute text-xs bottom-0 right-0 -mb-5 mr-2 text-gray-500"
                    >
                      Seen
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                  <div
                    class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                  >
                    A
                  </div>
                  <div
                    class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl"
                  >
                    <div>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Perspiciatis, in.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                  <div
                    class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0"
                  >
                    A
                  </div>
                  <div
                    class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl"
                  >
                    <div class="flex flex-row items-center">
                      <button
                        class="flex items-center justify-center bg-indigo-600 hover:bg-indigo-800 rounded-full h-8 w-10"
                      >
                        <svg
                          class="w-6 h-6 text-white"
                          fill="none"
                          stroke="currentColor"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"
                          ></path>
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          ></path>
                        </svg>
                      </button>
                      <div class="flex flex-row items-center space-x-px ml-4">
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-12 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-6 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-5 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-3 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-1 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-1 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4"
        >
          <div>
            <button
              class="flex items-center justify-center text-gray-400 hover:text-gray-600"
            >
              <svg
                class="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"
                ></path>
              </svg>
            </button>
          </div>
          <div class="flex-grow ml-4">
            <div class="relative w-full">
              <input
                type="text"
                class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10"
              />
              <button
                class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600"
              >
                <svg
                  class="w-6 h-6"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="ml-4">
            <button
              class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0"
            >
              <span>Send</span>
              <span class="ml-2">
                <svg
                  class="w-4 h-4 transform rotate-45 -mt-px"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
                  ></path>
                </svg>
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!-- -------------------- -->
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>