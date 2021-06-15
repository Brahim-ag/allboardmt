<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Echelons
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-2 lg:px-8">
            <table class="min-w-full divide-y divide-gray-200">
                <tr></tr>
                <tr>
                <th>Echelon</th>
                <th>Numéro d'Acte</th>
                <th>Date de Signature d'Acte</th>
                <th>Date d'Effet</th>
                <th>Durée</th>
                <th>Type de Commission</th>
                <th>Numéro d'Approbation</th>
                <th>Date de Signature d'Approbation</th>
 
            </tr>

                <tr v-for="(echelon, index) in echelons" :key="index">
                    <td class="px-2 py-4 whitespace-nowrap">{{ echelon.echelon }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ echelon.number }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ echelon.dateSign }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ echelon.dateEffe }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ echelon.duree }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ echelon.typeComm }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ echelon.numberApp }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ echelon.dateSignApp }}</td>
                    <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/echelons/edit/${echelon.id}`">
                            Modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/echelons/create/${this.employe_id}`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
                >Ajouter</inertia-link
            >
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
            echelons: [],
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
                .get("/api/echelons/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.echelons = response.data;
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
