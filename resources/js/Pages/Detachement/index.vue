<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                detachement
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-2 lg:px-8">
            <table class="min-w-full divide-y divide-gray-200">
               <tr>
            <th>Administration d'Origine</th>
            <th>Administration d'Accueil</th>
            <th width='40%'>Motif </th>
            <th>Nature</th>
            <th>Numéro</th>
            <th>Date de Signature</th>
            <th>Date d'Effet</th>
            <th>Date de Fin</th>
        </tr>
            <tr v-for="(detachement, index) in detachements" :key="index">
                <td class="px-2 py-4 whitespace-nowrap">{{detachement.admin}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{detachement.to}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{detachement.motif}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{detachement.nature}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{detachement.Number}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{detachement.dateSignature}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{detachement.dateStart}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{detachement.dateEnd}}</td>
                <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/detachement/edit/${detachement.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/detachement/create/${this.employe_id}`"
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
            detachements: [],
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
                .get("/api/detachement/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.detachements = response.data;
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
