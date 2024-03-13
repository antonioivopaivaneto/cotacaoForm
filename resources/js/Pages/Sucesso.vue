<template>
    <div class="bg-blue-800 p-5  ">
      <h2 class="text-white text-center mx-auto uppercase font-black text-2xl"><router-link to="/"> Safety</router-link>
      </h2>
    </div>

    <div class="w-auto">
      <div class="text-center mx-auto mt-5">

      </div>

      <div class="mt-40 mx-5 text-center">

        <h1 class="text-4xl font-bold text-blue-800">Recebemos sua Solicitação</h1>
        <p class="text-blue-800 font-light mb-5">Entreramos em contato em breve</p>

        <Link href="/solicitacao"  class="mt-12 mb-7 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Voltar</Link>


      </div>

      <div class="float-right cursor-pointer ">
        <a href=""> <img :src="whats" class="w-10 mx-10 fixed bottom-0 right-0 mb-10 animate-pulse" alt=""></a>

      </div>
    </div>
  </template>

  <style>
  @media (min-width: 1024px) {
    .about {
      min-height: 100vh;
      display: flex;
      align-items: center;
    }
  }
  </style>

  <script setup>
  import { Link } from "@inertiajs/vue3";
import whats from "./../../img/whatsapp.png";


  </script>
