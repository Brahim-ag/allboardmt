<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modifer un employé
            </h2>
        </template>
       <div>
            <div class="container mx-auto shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">

                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700"> Nom:</label>
                        <input
                            required
                            type="text"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            v-model="spouceData.name"
                        />
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700"> Prénom:</label>
                        <input
                            required
                            type="text"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            v-model="spouceData.lastname"
                        />
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700"> Date de naissance:</label>
                        <input
                            required
                            type="date"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            v-model="spouceData.dataNaiss"
                        />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
              <jet-label value="Wilaya de Naissance :" />

              <select
                @input="findDaira()"
                v-model="spouceData.wilayaNaiss"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
              >
                <option>Oran</option>
                <option>Alger</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-2">
              <jet-label value="Daïra de Naissance :" />
              <select
                :disabled="!spouceData.wilayaNaiss"
                required
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                v-model="spouceData.dairaNaiss"
                @input="findCommune()"
              >
                <option v-for="(w, index) in daira" :key="index">
                  {{ w.Daira }}
                </option>
              </select>
            </div>

            <div class="col-span-6 sm:col-span-2">
              <jet-label value="Commun de Naissance :" />
              <select
                :disabled="!spouceData.dairaNaiss"
                required
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                v-model="spouceData.commNaiss"
              >
                <option v-for="(w, index) in commune" :key="index">
                  {{ w.Commune }}
                </option>
              </select>
            </div>
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date de mariage:</label>
                        <input
                            required
                            type="date"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            v-model="spouceData.dataMariage"
                        />
                    </div>
                    <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date de divorce:</label>
                        <input
                            required
                            type="date"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            v-model="spouceData.dataDevorce"
                        />
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Date de décès::</label>
                        <input
                            required
                            type="date"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            v-model="spouceData.dataDeath"
                        />
                    </div>
                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700">Conjoint travail:</label>
                        <select
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            
                            v-model="spouceData.work"
                        >

                         <option >Oui</option>
                        <option >Nom</option>


                        </select>
                    </div>
                    </div>
                <input
                    required
                    type="hidden"
                    name="employee_id"
                    v-model="spouceData.employee_id"
                />
            </div>
        <button @click="editspouce()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Valider</button>

            </div>
        </div>
        </div>
        
    </app-layout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout";

import JetActionMessage from "@/Jetstream/ActionMessage";
import JetActionSection from "@/Jetstream/ActionSection";
import JetButton from "@/Jetstream/Button";
import JetConfirmationModal from "@/Jetstream/ConfirmationModal";
import JetDangerButton from "@/Jetstream/DangerButton";
import JetDialogModal from "@/Jetstream/DialogModal";
import JetFormSection from "@/Jetstream/FormSection";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";
import JetLabel from "@/Jetstream/Label";
import JetSecondaryButton from "@/Jetstream/SecondaryButton";
import JetSectionBorder from "@/Jetstream/SectionBorder";

export default {
    components: {
         AppLayout,
        JetActionMessage,
        JetActionSection,
        JetButton,
        JetConfirmationModal,
        JetDangerButton,
        JetDialogModal,
        JetFormSection,
        JetInput,
        JetInputError,
        JetLabel,
        JetSecondaryButton,
        JetSectionBorder,
        
    },
    data() {
        return {
            spouceData: this.Spouce,
             commune: [],
      daira: [],
        };
    },
    props: ["Spouce"],
    methods: {
        findDaira() {
        axios
            .get("/wilaya/31.json")
            .then((response) => (this.daira = response.data));
    },
    findCommune() {
        axios
            .get("/wilaya/31.json")
            .then((response) => (this.commune = response.data));
    },
        editspouce(){
            axios
                .put("/api/spouce/update/" + this.spouceData.id, this.spouceData)

                .then((response) => {
                    if (response.status == 200) {
                        window.location.href = "/spouce/"+ this.spouceData.employee_id;
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        }
    },
    created() {
    },
};
</script>
