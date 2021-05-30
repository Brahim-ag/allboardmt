<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                postesup
            </h2>
        </template>
        
        <div class="flex max-w-8xl mx-auto py-10 sm:px-2 lg:px-8">
            
      <div class="py-2 align-middle inline-block min-w-full sm:px-2 lg:px-8">
           <inertia-link :href="`/postesup/create/${this.employe_id}`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
                >Ajouter</inertia-link
            >
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        
            <table class="table-auto min-w-full divide-y divide-gray-200">
                <tr>
                 <th>Poste</th>
            <th>Type de Mouvement</th>
            <th>Type d'Acte</th>
            <th>Numéro d'Acte</th>
            <th>Date de Signature d'Acte</th>

 
            </tr>

                <tr v-for="(postesup, index) in postesups" :key="index">
                  <td  class="w-1/4 text-xs px-2 py-4 whitespace-nowrap">{{ postesup.poste }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ postesup.typem }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ postesup.typea }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ postesup.number }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ postesup.dateEffect }}</td>


                    <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/postesup/edit/${postesup.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
           
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
    props: ["employe_id"],
    data() {
        return {
            postesups: [],
        };
    },
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
    methods: {
        getAll() {
            axios
                .get("/api/postesup/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.postesups = response.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    created() {
        this.getAll();
    },
};
</script>
