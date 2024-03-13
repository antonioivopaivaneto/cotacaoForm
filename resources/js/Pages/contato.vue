<template>
    <div class="bg-blue-800 p-5  ">
        <h2 class="text-white text-center mx-auto uppercase font-black text-2xl"><Link href="/">
                Safety</Link>
        </h2>
    </div>

    <div class="w-auto">
        <div class="text-center mx-auto mt-5">
            <h3 class="text-3xl font-extrabold text-gray-800">{{ props.titulo }}</h3>
            <span class=" text-gray-800">Por favor, preencha os dados abaixo.
            </span>
        </div>

        <div class="mt-12 mx-5">
            <form class="max-w-min mx-auto ">

                <div class="relative z-0 w-full mb-5 group">
                    <input v-model="form.nome" type="text" name="floating_nome" id="floating_nome"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="floating_nome"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input v-model="form.email" type="email" name="floating_email" id="floating_email"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="floating_email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Seu
                        Email</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input v-mask="'(##) #####-####'" v-model="form.telefone" type="text" name="floating_telefone" id="floating_telefone"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="floating_telefone"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telefone</label>
                </div>


                <div class="grid grid-cols-3  mb-5">
                    <label for="remember"
                        class="text-sm font-medium text-gray-900 dark:text-gray-500 mr-5">Condominio</label>

                    <div class="flex items-center h-5 mx-9">
                        <input v-model="form.condominio" id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-400 rounded bg-gray-50 focus:ring-3 focus:ring-blue-400  dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                    </div>
                </div>

                <div class="grid grid-cols-3 mb-5">
                    <label for="remember"
                        class="text-sm font-medium text-gray-900 dark:text-gray-500 mr-5">Escritório</label>

                    <div class="flex items-center h-5 mx-9">
                        <input v-model="form.escritorio" id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-400 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300  dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                    </div>
                </div>

                <div class="grid grid-cols-3  mb-5">
                    <label for="remember"
                        class="text-sm font-medium text-gray-900 dark:text-gray-500 mr-5">Escola</label>

                    <div class="flex items-center h-5 mx-9">
                        <input v-model="form.escola" id="remember" type="checkbox" value=""
                            class="w-4 h-4  border border-gray-400 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300  dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                    </div>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <input v-model="form.endereco" type="text" name="floating_endereco" id="floating_endereco"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="floating_endereco"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Endereço</label>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <input v-mask="['###.###.###-##', '##.###.###/####-##']" v-model="form.cnpj_cpf" type="text" name="floating_cnpj_cpf" id="floating_cnpj_cpf"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="floating_cnpj_cpf"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">CNPJ/CPF</label>
                </div>

                <div class="">
                    <h1 class="h3 text-center text-gray-700 font-light">Escopo - Descrição do Serviço</h1>
                </div>

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead>
                        <tr class="">
                            <th class="w-10 font-bold uppercase">Servicos</th>
                            <th class="px-40 font-bold uppercase  ">Qtd</th>
                            <th class="font-bold uppercase text-center mx-2">Periodo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="service in services" :key="service.title" v-show="currentService(service)">
                            <td>{{ service.title }}</td>
                            <td class="pl-36"><input min="0" type="number" class="w-20 p-0.5 border-gray-400 rounded-lg mr-5"
                                    v-model="service.quantity"></td>
                            <td>
                                <select v-model="service.period"
                                    class="min-w-48 text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1 px-1 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-800 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option v-for="period in periods" :value="period">{{ period }}</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>



                <div class="flex  text-gray-500 mt-2">
                    <div class=" text-sm">{{ msgShow }} outros serviços</div>
                    <div class="">
                        <button type="button" @click="btnToggleService" class="mx-2 cursor-pointer">
                            <svg v-if="!showServices" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>

                            <svg v-if="showServices" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                            </svg>



                        </button>
                    </div>
                </div>


                <div class="relative z-0 w-full mb-5 group mt-5">

                    <label for="textarea"
                        class="mb-5 text-sm text-gray-500 text-gray-400 ">Observações (opcional)</label>

                        <textarea v-model="form.observacao" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  " placeholder="Sua observação..."></textarea>
                    </div>

                <button type="button"  @click="Enviar"
                    class="mt-5 mb-7 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Enviar</button>
            </form>

        </div>

        <div class="float-right cursor-pointer ">
            <a href="https://contate.me/safetyfacilities"> <img :src="whats" class="w-10 mx-10 fixed bottom-0 right-0 mb-10 animate-pulse" alt=""></a>

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
import { ref } from "vue";
import whats from "./../../img/whatsapp.png";
import { Link, router, useForm } from "@inertiajs/vue3";
import {mask} from 'vue-the-mask'


const props = defineProps({
    titulo:''
});


const services = ref([
    { title: 'Controle de Acesso', quantity: 0, period: '' },
    { title: 'Zeladoria', quantity: 0, period: '' },
    { title: 'Copeira', quantity: 0, period: '' },
    { title: 'Limpeza', quantity: 0, period: '' },
    { title: 'Jardinagem', quantity: 0, period: '' },
    { title: 'Manutencista', quantity: 0, period: '' },
    { title: 'Atendimento e Recepção', quantity: 0, period: '' },
    { title: 'Outros Serviços', quantity: 0, period: '' },
]);


const form = useForm({
    nome: '',
    email: '',
    telefone: '',
    cnpj_cpf: '',
    escola: '',
    escritorio: '',
    condominio: '',
    endereco: '',
    observacao: ''
});


// Array contendo os períodos disponíveis
const periods = ['44Hrs seg. sex - seg. sabado', '44Hrs - 12x36 - diurno - noturno'];


const showServices = ref(false);
const msgShow = ref('adicinar');

const btnToggleService = () => {
    showServices.value = !showServices.value;
    msgShow.value = showServices.value ? 'ocultar' : 'adicionar'

}
const currentService = (service) => {
    if (showServices.value === true) {
        return true;
    } else {
        return service.title === props.titulo;
    }
};


const Enviar = () => {

    // Filtra apenas os serviços que têm quantidade maior que zero
    const servicosSelecionados = services.value.filter(service => service.quantity > 0);

    // Cria um objeto com os dados do formulário e os serviços selecionados
    const dadosDoFormulario = {
        nome: form.nome,
        email: form.email,
        telefone: form.telefone,
        cnpj_cpf: form.cnpj_cpf,
        endereco: form.endereco,
        escola: form.escola ? 'Sim' : 'Não',
        escritorio: form.escritorio ? 'Sim' : 'Não',
        condominio: form.condominio ? 'Sim' : 'Não',
        servicos: servicosSelecionados
    };

    // Envia os dados para o endpoint '/enviar'
    router.post('/enviar', dadosDoFormulario).then(response => {
        console.log('Formulário enviado com sucesso!', response);
    }).catch(error => {
        console.error('Erro ao enviar o formulário:', error);
    });


};








</script>
