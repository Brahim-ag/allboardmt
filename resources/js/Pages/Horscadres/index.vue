<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                horscadre
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-2 lg:px-8"> 
            <table  class="min-w-full divide-y divide-gray-200">
               <tr>
                <th>Administration d'Origine</th>
                <th>Administration d'Accueil </th>
                <th>Mission</th>
                <th>Type de Mouvement</th>
                <th>Motif</th>
                <th>Durée</th>
                <th>Numéro d'Acte</th>
                <th>Date de Signature d'Acte</th>
                <th>Date d'Effet d'Acte</th>
                <th>Numéro de Visa CF</th>
                <th>Date d'Effet CF</th>
 
            </tr>

                <tr v-for="(horscadre, index) in horscadres" :key="index">
                <td class="px-2 py-4 whitespace-nowrap">{{ horscadre.source }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ horscadre.focus }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ horscadre.mission }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ horscadre.typeM }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ horscadre.motif }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ horscadre.duree }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ horscadre.number }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ horscadre.dateSign }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ horscadre.dateEffe }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ horscadre.numberCf }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ horscadre.dateEffeCF }}</td>
                    <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/horscadre/edit/${horscadre.id}`">Modifier</inertia-link>

                        
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/horscadre/create/${this.employe_id}`">Ajouter</inertia-link>
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
            horscadres: [],
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
                .get("/api/horscadre/getall/" + this.employe_id)
                .then((response) => {
                    this.horscadres = response.data;
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
