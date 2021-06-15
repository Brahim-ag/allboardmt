<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Fonctions supérieures
            </h2>
        </template>
        
        <div class="flex max-w-8xl mx-auto py-10 sm:px-2 lg:px-8">
            
      <div class="py-2 align-middle inline-block min-w-full sm:px-2 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        
            <table class="table-auto min-w-full divide-y divide-gray-200">
                <tr>
                  <th>Fonction</th>
            <th>Type de Mouvement</th>
            <th>Type d'Acte</th>
            <th>Numéro d'Acte</th>
            <th>Date de Signature d'Acte</th>
            <th>Date d'Effet d'Acte</th>
            <th>Numéro Visa CF</th>
            <th>Date Visa CF</th>
            <th>Numéro Visa DGFP</th>
            <th>Date Visa DGFP</th>
            <th>Numéro Accord</th>
            <th>Date Accord</th>
            <th>Date d'Installation</th>

 
            </tr>

                <tr v-for="(fonctionsup, index) in fonctionsups" :key="index">
                  <td  class="w-1/4 text-xs px-2 py-4 whitespace-nowrap">{{ fonctionsup.function }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ fonctionsup.typem }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ fonctionsup.typea }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ fonctionsup.number }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ fonctionsup.dateSignature }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ fonctionsup.dateEffect }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ fonctionsup.NumberVisaCf }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ fonctionsup.dateVisaDGFP }}</td>
                <td  class="w-1/4 text-xs px-2 py-4 whitespace-nowrap">{{ fonctionsup.NumberVisaDGFP }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ fonctionsup.dateVisaDGFP }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ fonctionsup.numberAcc }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ fonctionsup.dateAcc }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ fonctionsup.dateInsta }}</td>


                    <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/fonctionsups/edit/${fonctionsup.id}`">
                            Modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
           
        </div>
           <inertia-link :href="`/fonctionsups/create/${this.employe_id}`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
                >Ajouter</inertia-link>
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
            fonctionsups: [],
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
                .get("/api/fonctionsups/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.fonctionsups = response.data;
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
