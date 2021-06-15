<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               Formations internes 
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-2 lg:px-8">
            <table class="min-w-full divide-y divide-gray-200">
                <tr>
                    <th>Objet de la Formation/Stage</th>
                    <th>Date</th>
                    <th>Promo</th>
                    <th>Durée</th>
                    <th>Etablissement</th>
                </tr>

                <tr v-for="(formation, index) in formations" :key="index">
                    <td class="px-2 py-4 whitespace-nowrap">{{ formation.objet }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ formation.date }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ formation.promo }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ formation.duree }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ formation.etabili }}</td>
                    <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/formationint/edit/${formation.id}`">
                            Modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/formationint/create/${this.employe_id}`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
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
            formations: [],
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
                .get("/api/formationint/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.formations = response.data;
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
