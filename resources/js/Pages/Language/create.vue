<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                 Ajouter une langue
            </h2>

 
        </template>
                   
        <div>
            <div class="container mx-auto shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">


                     <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700"> Langue :</label>
                       
                         <select v-model="langueData.language" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <option>----------------------</option>
                        <option>Français</option>
                        <option>Anglais</option>
                        <option>Espagnol</option>
                        <option>Italien</option>
                        <option>Allemand</option>
                    </select>

                    </div>
                      <div class="form-group">
                        <label  class="block text-sm font-medium text-gray-700"> Niveau  :</label>
                       
                         <select v-model="langueData.level" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <option>----------------------</option>
                        <option>Débutant </option>
                        <option>Intermédiaire </option>
                        <option>Courant </option>

                    </select>

                    </div>

                <input
                    required
                    type="hidden"
                    name="employee_id"
                    v-model="langueData.employee_id"
                />
            </div>
            </div>
        </div>
        <button @click="editlangue()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Valider</button>
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
            langueData:{},
            domaine: [],
        };
    },
    props: ["employee_id"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        editlangue() {
            axios
                .post("/api/language/store", this.langueData )
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href = "/language/" + this.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
        this.langueData.employee_id = this.employee_id;
    },
};
</script>
